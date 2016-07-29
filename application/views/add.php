<!DOCTYPE html>
<html>
<head>
	<title>Belajar Active Record</title>
	<link rel="stylesheet" type="text/css" href="<? echo site_url();?>asset/bootstrap.min.css">
	<style>
		.atas{
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3><center>Tambah Data</center></h3>
				<hr>
				<? if($this->session->flashdata('berhasil')){  ?>
				<div class="alert alert-success">
					<? echo $this->session->flashdata('berhasil');?>
				</div>
				<? } ?>
				<? if($this->session->flashdata('gagal')){  ?>
				<div class="alert alert-success">
				<? echo $this->session->flashdata('gagal');?>
				</div>
				<? } ?>
				<form class="form" action="<? echo site_url('active/post');?>" method="POST">
					<div class="form-group col-sm-6">
						<div class="form-group atas">
							<input type="text" class="form-control" name="nama">						
						</div>
						<div class="form-group atas">
							<input type="text" class="form-control" name="email">						
						</div>
						<div class="form-group atas">
							<input type="text" class="form-control" name="alamat">						
						</div>
						<div class="box-footer">
							<input type="submit" value="Simpan" class="btn btn-info">
							<a href="<? echo site_url('active');?>" class="btn btn-danger"> Kembali</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="<? echo site_url();?>asset/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>