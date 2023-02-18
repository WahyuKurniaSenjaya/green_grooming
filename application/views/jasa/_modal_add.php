<div class="modal fade" id="modal_add" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Form Add</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formAdd" autocomplete="off">
				<div class="modal-body">
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Jasa</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-danger" name="nama" id="nama" placeholder="Nama Layanan Jasa" onkeypress="hideMsg('msgNama')" required>
							<span class="hide messages" id="msgNama">
								<p class="text-danger error">Nama Jasa tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Deskripsi</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-danger" id="deskripsi" name="deskripsi" onkeypress="hideMsg('msgDeskripsi')" placeholder="Deskripsi Layanan Jasa" required>
							<span class="hide messages" id="msgDeskripsi">
								<p class="text-danger error">Deskripsi tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Harga</label>
						<div class="col-sm-10">
							<input type="number" class="form-control input-danger" id="harga" name="harga" onkeypress="hideMsg('msgHarga')" placeholder="Harga Layanan Jasa" required>
							<span class="hide messages" id="msgHarga">
								<p class="text-danger error">Harga tidak boleh kosong.</p>
							</span>
						</div>
					</div>
				</div>
				<div class="modal-footer" id="mdl_footer">
					<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary waves-effect" onclick="simpan()">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>