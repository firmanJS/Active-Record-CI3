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
				<div class="box-header atas">
					<a href="<? echo site_url('active/add');?>" class="btn btn-default glyphicon glyphicon-plus"> Tambah Data</a>
				</div>
				<? if($this->session->flashdata('berhasil')){  ?>
				<div class="alert alert-success">
					<? echo $this->session->flashdata('berhasil');?>
				</div>
				<? } ?>
				<? if($this->session->flashdata('gagal')){  ?>
				<div class="alert alert-danger">
					<? echo $this->session->flashdata('gagal');?>
				</div>
				<? } ?>
				<table class="table table-hover">
					<thead>
						<tr style="text-align:center;">
							<td>Aksi</td>
							<td>No</td>
							<td>Nama</td>
							<td>Email</td>
							<td>Alamat</td>
						</tr>
					</thead>
					<? 
					$key = 1;
					foreach ($datanya as $key=> $data) {
						?>
						<tbody>
							<tr style="text-align:center;">
								<td>
									<a href="" >Ubah</a>
									<a href="<? echo site_url();?>active/delete/<? echo $data->id;?>" >Hapus</a>
								</td>
								<td><? echo $key++;?></td>
								<td><? echo $data->nama;?></td>
								<td><? echo $data->email;?></td>
								<td><? echo $data->alamat;?></td>
							</tr>
						</tbody>
						<? } ?>
					</table>
				</div>
			</div>
		</div>
		<script src="<? echo site_url();?>asset/bootstrap.min.js" type="text/javascript"></script>
	</body>
	</html>