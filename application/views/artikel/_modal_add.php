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
						<label class="col-sm-2 col-form-label">Judul</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-danger" name="judul" id="judul" placeholder="Judul Artikel" onkeypress="hideMsg('msgJudul')" required>
							<span class="hide messages" id="msgJudul">
								<p class="text-danger error">Nama Judul tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Deskripsi</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-danger" id="deskripsi" name="deskripsi" onkeypress="hideMsg('msgDeskripsi')" placeholder="Deskripsi Artikel" required>
							<span class="hide messages" id="msgDeskripsi">
								<p class="text-danger error">Deskripsi tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Foto</label>
						<div class="col-sm-10">
							<span class="badge text-dark">*Max File Size : 2 Mb</span>
							<span class="badge text-dark">*File Allowed Extension : jpg | jpeg | png</span>
							<input type="file" class="dropify" id="foto" name="foto" data-max-file-size="2M" data-allowed-file-extensions="jpg png jpeg" onkeypress="hideMsg('msgFoto')" placeholder="Foto Artikel" required>
							<span class="hide messages" id="msgFoto">
								<p class="text-danger error">Foto tidak boleh kosong.</p>
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