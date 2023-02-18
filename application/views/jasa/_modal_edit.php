<div class="modal fade" id="modal_edit" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Form Edit</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formEdit" autocomplete="off">
				<div class="modal-body">
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Jasa</label>
						<div class="col-sm-10">
							<input type="hidden" class="form-control input-danger" name="id" id="idEdit" placeholder="id Layanan Jasa" readonly required>
							<input type="text" class="form-control input-danger" name="nama" id="namaEdit" placeholder="Nama Layanan Jasa" onkeypress="hideMsg('msgNamaEdit')" required>
							<span class="hide messages" id="msgNamaEdit">
								<p class="text-danger error">Nama Jasa tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Deskripsi</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-danger" id="deskripsiEdit" name="deskripsi" onkeypress="hideMsg('msgDeskripsiEdit')" placeholder="Deskripsi Layanan Jasa" required>
							<span class="hide messages" id="msgDeskripsiEdit">
								<p class="text-danger error">Deskripsi tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Harga</label>
						<div class="col-sm-10">
							<input type="number" class="form-control input-danger" id="hargaEdit" name="harga" onkeypress="hideMsg('msgHargaEdit')" placeholder="Harga Layanan Jasa" required>
							<span class="hide messages" id="msgHargaEdit">
								<p class="text-danger error">Harga tidak boleh kosong.</p>
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