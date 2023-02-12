<div>
    <!-- show payment Modal -->
		<div class="modal fade" id="showpayment"  wire:ignore.self tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Show Payment</h5>
						<button type="button" class="btn-close" aria-label="Close"><span wire:click="closeshowpayment" aria-hidden="true">×</span></button>
					</div>
					<div class="modal-body">

						<div class="table-responsive">
							<table class="table mb-0">
								<thead>
									<tr>
										<th>Date</th>
										<th>Reference</th>
										<th>Amount</th>
										<th>Payment TYPE</th>
										<th>Paid By</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>John</td>
										<td>Doe</td>
										<td>Doe</td>
										<td>Doe</td>
										<td>Doe</td>
										<td>
											<a href="#" class=""><img src="{{ url('assets/img/icons/edit.svg')}}" class="me-2" alt="img"></a>
											<a href="javascript:void(0);" class="delete-set"><img src="{{ url('assets/img/icons/delete.svg')}}" alt="svg"></a>
										</td>
									</tr>
									
								</tbody>
							</table>
							
						</div>
						
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-submit" value="Submit">
						<button type="button" class="btn btn-cancel" wire:click="closeshowpayment">Close</button>
					</div>
				
				</div>
			</div>
		</div>
		<!-- show payment Modal -->
</div>
