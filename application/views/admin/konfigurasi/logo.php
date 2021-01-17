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
echo form_open_multipart(base_url('admin/konfigurasi/logo'), 'class="form-horizontal"');
?>

<div class="form-group">
	<label class="col-sm-2 control-label">Nama Website</label>
	<div class="col-md-9">
		<input type="text" name="namaweb" class="form-control" placeholder="Nama Website" value="<?php echo $konfigurasi->namaweb ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Upload Logo</label>
	<div class="col-md-9">
		<input type="file" name="logo" class="form-control" placeholder="Upload Logo" value="<?php echo $konfigurasi->logo ?>" required>
		Logo Lama : <br><img src="<?php echo base_url('assets/upload/image/'.$konfigurasi->logo) ?>" class="img img-responsive img-thumbnail" width="150">
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