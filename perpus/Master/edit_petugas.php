<?php
include "./koneksi.php";
	$id  	= trim($_GET['id']);

	$query  = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id = $id") ;

	$data 	= mysqli_fetch_array($query);
?>
<style type="text/css">
	.form-horizontal .control-label{
	    text-align: left;
	}

</style>
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">Edit Petugas</div>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" action="Master/update_petugas.php" method="post">
			<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Judul Berita" value="<?php echo $data['nama']; ?>">
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $data['username']; ?>">
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $data['password']; ?>">
			    </div>
			</div>

			<div class="form-group">
				<div class="col-md-2">
					<label class="control-label">Level<br><br></label>
				</div>

				<div class="col-md-12">
					<label>
						<input type="radio" name="level" id="admin" value="Admin" checked="true">
						Admin
					</label>
					<br>
					<label>
						<input type="radio" name="level" id="kasir" value="Kasir">
						Kasir
					</label>
				</div>
			</div>

			<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
			<a href="index.php?page=petugas" class="btn btn-default">Batal</a>

		</form>
	</div>
</div>