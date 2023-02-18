<div class="modal fade" id="modal_rating" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">RATING CUSTOMER</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formRating">
				<div class="modal-body">
					<input type="hidden" id="id_booking_rating" name="id_booking" readonly>
					<p class="text-center">Berikan Penilaian Anda Untuk Pelayanan Kami</p>
					<div class="rating col-sm-12">
						<input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
						<input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
						<input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
						<input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
						<input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
					</div>
					<p class="text-center">Berikan Ulasan Anda Untuk Pelayanan Kami</p>
					<textarea name="ulasan" id="ulasan" class="form-control" cols="20" rows="5"></textarea>
				</div>
				<div class="modal-footer" id="mdl_footer">
					<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-outline-primary" onclick="submit_rating()">Submit Rating</button>
				</div>
			</form>
		</div>
	</div>
</div>