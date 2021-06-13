<section class="pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Form Booking</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form>
					<input type="hidden" name="" value="<?php echo $users->user_id?>" />
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputEmail4">Nama</label>
							<input type="text" class="form-control" disabled="true" value="<?php echo $users->full_name?>">
						</div>
						<div class="form-group col-md-4">
							<label for="inputPassword4">No. Telp</label>
							<input type="text" class="form-control" value="<?php echo $users->phone?>" disabled>
						</div>
						<div class="form-group col-md-4">
							<label for="inputPassword4">Email</label>
							<input type="email" class="form-control" value="<?php echo $users->email?>" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="inputAddress">Alamat Pemesan</label>
						<textarea class="form-control" rows="3" required=""></textarea>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4">Tanggal</label>
							<input type="date" class="form-control" required>
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Jenis Hewan</label>
							<select class="form-control" id="exampleFormControlSelect1" required>
								<option style="display: none;">-- Pilih --</option>
								<option>Anjing</option>
								<option>Kucing</option>
							</select>
						</div>
					</div>
					<button type="submit" class="btn btn-outline-success"><i class="fa fa-check"></i> Booking Sekarang</button>
				</form>
			</div>
		</div>
	</div>
</section>