<?php
// Notifikasi
if ($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}
?>

<?php
// Error upload
if (isset($error)) {
	echo '<p class="alert alert-warning">';
	echo $error;
	echo '</p>';
}
// Notifikasi Eror
echo validation_errors('<div class="alert alert-warning">','</div>');

// Form Open
echo form_open_multipart(base_url('admin/konfigurasi'), 'class="form-horizontal"');
?>

<div class="form-group">
	<label class="col-sm-2 control-label">Nama Website</label>
	<div class="col-md-9">
		<input type="text" name="namaweb" class="form-control" placeholder="Nama Website" value="<?php echo $konfigurasi->namaweb ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Tagline</label>
	<div class="col-md-9">
		<input type="text" name="tagline" class="form-control" placeholder="Tagline" value="<?php echo $konfigurasi->tagline ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Email</label>
	<div class="col-md-9">
		<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $konfigurasi->email ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Website</label>
	<div class="col-md-9">
		<input type="text" name="website" class="form-control" placeholder="Website" value="<?php echo $konfigurasi->website ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Alamat Facebook</label>
	<div class="col-md-9">
		<input type="text" name="facebook" class="form-control" placeholder="Facebook" value="<?php echo $konfigurasi->facebook ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Alamat Instagram</label>
	<div class="col-md-9">
		<input type="text" name="instagram" class="form-control" placeholder="Instagram" value="<?php echo $konfigurasi->instagram ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Telepon</label>
	<div class="col-md-9">
		<input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $konfigurasi->telepon ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Alamat kantor</label>
	<div class="col-md-9">
		<textarea name="alamat" class="form-control" placeholder="Alamat kantor">
			<?php  echo $konfigurasi->alamat ?>
		</textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Keywords</label>
	<div class="col-md-9">
		<textarea name="keywords" class="form-control" placeholder="Keywords">
			<?php  echo $konfigurasi->keywords ?>
		</textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Metatext</label>
	<div class="col-md-9">
		<textarea name="metatext" class="form-control" placeholder="Metatext">
			<?php  echo $konfigurasi->metatext ?>
		</textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Deskripsi Website</label>
	<div class="col-md-9">
		<textarea name="deskripsi" class="form-control" placeholder="Deskripsi Website">
			<?php  echo $konfigurasi->deskripsi ?>
		</textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Rekening Pembayaran</label>
	<div class="col-md-9">
		<textarea name="rekening_pembayaran" class="form-control" placeholder="Rekening Pembayaran">
			<?php  echo $konfigurasi->rekening_pembayaran ?>
		</textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label"></label>
	<div class="col-md-5">
		<button class="btn btn-success btn-md" name="submit" type="submit">
			<i class="fa fa-save"></i> Simpan
		</button>
		<button class="btn btn-info btn-md" name="reset" type="reset">
			<i class="fa fa-times"></i> Reset
		</button>
	</div>
</div>

<?php echo form_open(); ?>