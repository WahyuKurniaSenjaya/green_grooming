<div class="modal fade" id="modal_upload_nota" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Form Upload Bukti Pembayaran</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formBuktiNota">
				<div class="modal-body">
					<div class="col-sm-12">
						<input type="hidden" name="id_booking" id="id_booking" readonly>
						<span class="badge text-dark">*Max File Size : 2 Mb</span>
						<span class="badge text-dark">*File Allowed Extension : jpg | jpeg | png</span>
						<input type="file" class="dropify" id="foto" name="foto" data-max-file-size="2M" data-allowed-file-extensions="jpg png jpeg" onkeypress="hideMsg('msgFoto')" placeholder="Foto Artikel" required>
						<span class="hide messages" id="msgFoto">
							<p class="text-danger error">Foto tidak boleh kosong.</p>
						</span>
					</div>
					<div class="col-sm-12 text-center mt-2">
					</div>
				</div>
				<div class="modal-footer" id="mdl_footer">
					<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-outline-primary btn-block" onclick="upload_nota()">Upload Butki</button>
				</div>
			</form>
		</div>
	</div>
</div>