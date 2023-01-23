<div>
    <!-- show payment Modal -->
		<div class="modal fade" wire:ignore.self id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Create Payment</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-6 col-sm-12 col-12">
								<input type="hidden" wire:model="invoice_number">

								<div class="form-group">
									<label>Date</label>
									<div class="input-groupicon">
										<input type="date" class="form-control">										
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Reference</label>									
									<input type="text" >
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
									<input type="text" value="0.00">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Payment type</label>
									<select class="form-control" >
										<option>Cash</option>
										<option>Online</option>
										<option>Inprogress</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group mb-0">
									<label>Note</label>
									<textarea class="form-control"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-submit">Submit</button>
						<button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- show payment Modal -->
</div>
