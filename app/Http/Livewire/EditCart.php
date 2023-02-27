<?php

namespace App\Http\Livewire;

use App\Models\Invoice;

use App\Models\Product;

use Livewire\Component;
use App\Models\Invoice_item;

class EditCart extends Component
{
    public $barcode = '';

    public $invoice, $invoice_id, $invoice_items, $salesreturn, $return_note;

    public $cartlist= array( );

    public function mount()
    {
      $invoice=Invoice::with(['invoice_items','customer'])->where('id',$this->invoice_id)->first();

      if ($invoice) {
        $this->invoice = $invoice;
        $this->salesreturn= $invoice->salesreturn;
        $this->return_note= $invoice->return_note;
      
        foreach ($invoice->invoice_items as  $item)
        {
          $this->addcartlist($item);
        }
      }

    }
    public function updated($name, $value)
    {  
      if ( ($name='salesreturn')  || ($name='return_note')) {

          $invoice = Invoice::find($this->invoice->id);

          $total=0;   
           foreach ($this->cartlist  as $item) {
               $total +=(int) $item['total'];
              
           } 
           $total = $total -$this->salesreturn;
                  
          $invoice->update([
            'salesreturn' => $this->salesreturn,
            'return_note' => $this->return_note,
            'total' =>  $total, 
          ]);
      }
      elseif (strpos($name, '.')) {  
        
        $code= explode('.',$name)[1]; 
        $itemname= explode('.',$name)[2];
        if ($value && is_numeric($code))
        { 
          $price=(int)$this->cartlist[$code]['price'];
          $quantity=(int)$this->cartlist[$code]['quantity'];
          $total=($price)*($quantity);
          $this->cartlist[$code]['total']=$total;
          $item= Invoice_item::find($this->cartlist[$code]['id']);
          $item->update([
            'quantity' => $quantity, 
            'price' => $price,  
            'total' => $total,
          ]);
          
          $this->updatecart(); 
        }
      }
    }

    private function addcartlist($item)
    {
      $this->cartlist[$item->product_code] = array(
        'id' => $item->id,
        'code' => $item->product_code, // inique row ID
        'name' => $item->name,
        'price' => $item->price,
        'gstamount' => $item->gstamount,
        'gst' => $item->gst,
        'quantity' =>$item->quantity,
        'total' => $item->total,                   
        'invoice_id' => $item->invoice_id,                        
      );
    }

    public function addcart()
    {
        $product = Product::where('code',$this->barcode)->first();
        if ($product) {

          if (array_key_exists($this->barcode,$this->cartlist))
            {
               dd('aaray exit');
            }
            else
            {              
             $item= Invoice_item::create([
                'name' => $product->name,
                'price' => $product->price,                
                'total' => $product->price,
                'gst' => $product->gst,                
                'quantity' => "1", 
                'gstamount' =>round($product->price *((100+$product->gst)/100),2)-$product->price ,
                'product_code' => $product->code,
                'hsncode' => $product->hsncode,                
                'invoice_id' => $this->invoice->id,
              ]); 

              $this->addcartlist($item); 
              $this->updatecart();  
             
            }
          
        }

        $this->barcode='';

    }

    public function updatecart()
    {       
       $total=0;
       $taxamount=0;

        foreach ($this->cartlist  as $item) {
            $total +=(int) $item['total'];
            if(is_numeric($item['quantity'])){
                $taxamount+=$item['gstamount'] *$item['quantity'];
            }
        } 
        $sub_total=$total-$taxamount;
        
        $invoice = Invoice::find($this->invoice->id);
        $invoice->update([
          'total' => $total,
          'sub_total' => $sub_total ,
          'taxamount' => $taxamount,
        ]);

        $this->invoice->total= $total;        
        $this->invoice->taxamount= $taxamount;
        $this->invoice->sub_total= $sub_total;


    }


  

    public function delete_cart($id)
    {
      $item=Invoice_item::find($id);
      unset($this->cartlist[$item->product_code]);
      $item->delete();
      $this->updatecart();
    }


    
    public function render()
    {
      
        if($this->invoice){
        return view('livewire.edit-cart');
        } else {
          dd('Error :Invoice not exits');
        }

        
      
       
    }
}