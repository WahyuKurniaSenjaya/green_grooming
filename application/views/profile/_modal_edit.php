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
						<label class="col-sm-2 col-form-label">Username</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-danger" name="username" value="" <?= $profile->username ?>"" id="usernameEdit" placeholder="Username" onkeypress="hideMsg('msgUsernameEdit')" required>
							<span class="hide messages" id="msgUsernameEdit">
								<p class="text-danger error">Username tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control input-danger" name="password" id="passwordEdit" placeholder="Password" onkeypress="hideMsg('msgPasswordEdit')" required>
							<span class="hide messages" id="msgPasswordEdit">
								<p class="text-danger error">Password tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
							<input type="hidden" class="form-control input-danger" name="id" id="idEdit" placeholder="id Pelanggan" readonly required>
							<input type="text" class="form-control input-danger" name="nama" id="namaEdit" placeholder="Nama Pelanggan" onkeypress="hideMsg('msgNamaEdit')" required>
							<span class="hide messages" id="msgNamaEdit">
								<p class="text-danger error">Nama Jasa tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Phone</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-danger" id="phoneEdit" name="phone" onkeypress="hideMsg('msgPhoneEdit')" placeholder="Phone Pelanggan" required>
							<span class="hide messages" id="msgPhoneEdit">
								<p class="text-danger error">Phone tidak boleh kosong.</p>
							</span>
						</div>
					</div>
					<div class="form-group row has-error">
						<label class="col-sm-2 col-form-label">Alamat</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-danger" id="alamatEdit" name="alamat" onkeypress="hideMsg('msgAlamatEdit')" placeholder="Alamat Pelanggan" required>
							<span class="hide messages" id="msgAlamatEdit">
								<p class="text-danger error">Alamat tidak boleh kosong.</p>
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