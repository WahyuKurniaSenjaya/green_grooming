<div class="modal fade" id="modal_verifikasi" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Form Edit</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formVerifikasi" autocomplete="off">
				<div class="modal-body">
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Id Booking</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-danger" name="id_booking" id="id_bookingEdit" placeholder="id_booking" readonly required>
							<span class="hide messages" id="msgNamaEdit">
								<p class="text-danger error">Status tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Verifikasi Pembayaran</label>
						<div class="col-sm-10">
							<select name="status" id="status" class="form-control">
								<option value="3">BOOKING DI TERIMA</option>
								<option value="4">BOOKING DI REJECT</option>
							</select>
							<span class="hide messages" id="msgNamaEdit">
								<p class="text-danger error">Status tidak boleh kosong.</p>
							</span>
						</div>
					</div>
				</div>
				<div class="modal-footer" id="mdl_footer">
					<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-warning waves-effect" onclick="update()">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>