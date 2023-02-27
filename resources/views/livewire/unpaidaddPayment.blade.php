<div>
    <!-- show payment Modal -->
		<div class="modal fade" id="createpayment"  wire:ignore.self tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Create Payment</h5>
						<button type="button" class="btn-close" aria-label="Close"><span wire:click="close" aria-hidden="true">×</span></button>
					</div>
					<div class="modal-body">
						<form wire:submit.prevent="submit">
						<div class="row">
							<div class="col-lg-6 col-sm-12 col-12">
								<input type="hidden" wire:model="invoice_number">

								<div class="form-group">
									<label>Date</label>
									<div class="input-groupicon">
										<input type="date" class="form-control" wire:model="payment_date">										
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Reference</label>									
									<input type="text"  wire:model="reference">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Amount To Pay:</label>
									<input type="text" wire:model="amount_to_pay"  disabled>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Paying Amount</label>
									<input type="text" wire:model="payment_amount" autofocus>
									@error('payment_amount') <span class="error">{{ $message }}</span> @enderror
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Payment type</label>
									<select class="form-control" wire:model="payment_type" >
										<option value="1">Cash</option>
										<option value="2">Bank Transfer</option>
										<option value="3">Other</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group mb-0">
									<label>Note</label>
									<textarea autofocus class="form-control" wire:model="notes"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit"  class="btn btn-submit" value="Submit">
						<button type="button" class="btn btn-cancel" wire:click="close">Close</button>
					</div>
				</form>
				</div>
			</div>
		</div>
		<!-- show payment Modal -->
</div>
