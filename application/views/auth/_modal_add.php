<div class="modal fade" id="modal_add" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Form Register</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formAdd" autocomplete="off">
				<div class="modal-body">
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Username</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-danger" name="username" id="username" placeholder="Username" onchange="validationUsername()" onkeypress="hideMsg('msgUsername')" required>
							<span class="hide messages" id="msgUsername">
								<p class="text-danger error">Username tidak boleh kosong.</p>
							</span>
							<span class="hide messages" id="msgUsernameValid">
								<p class="text-success error">Username valid.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control input-danger" name="password" id="password" placeholder="Password" onkeypress="hideMsg('msgPassword')" required>
							<span class="hide messages" id="msgPassword">
								<p class="text-danger error">Password tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-danger" name="nama" id="nama" placeholder="Nama Pelanggan" onkeypress="hideMsg('msgNama')" required>
							<span class="hide messages" id="msgNama">
								<p class="text-danger error">Nama Pelanggan tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Phone</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-danger" id="phone" name="phone" onkeypress="hideMsg('msgPhone')" placeholder="Phone Pelanggan" required>
							<span class="hide messages" id="msgPhone">
								<p class="text-danger error">Phone tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Alamat</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-danger" id="alamat" name="alamat" onkeypress="hideMsg('msgAlamat')" placeholder="Alamat Pelanggan" required>
							<span class="hide messages" id="msgAlamat">
								<p class="text-danger error">Alamat tidak boleh kosong.</p>
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