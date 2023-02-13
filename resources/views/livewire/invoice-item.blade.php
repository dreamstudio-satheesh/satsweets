<div>
    <tr>
        <td> 
            {{ $item['name'] }}
        </td>
       
       
        <td><input class="sminput" value="{{ $item['quantity']}}" wire:model="item.quantity" type="number" min="1" max="200"></td>
        <td><input name="price" value="{{ $item['price']}}" wire:model="item.price" class="sminput" type="text" ></td>                                    
        <td> {{ $item['gst'] }} %</td>
        <td>  {{ $item['gstamount'] * $item['quantity'] }} </td>
        <td class="text-end"> 
            {{ $item['total'] - $item['gstamount'] * $item['quantity'] }}
         </td>
        <td>                                        
            <a href="javascript:void(0);" class="delete-set"><img src="{{ asset('assets/img/icons/delete.svg') }}" alt="svg"></a>
        </td>
    </tr> 
</div>
