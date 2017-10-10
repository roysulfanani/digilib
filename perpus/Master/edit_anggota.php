<?php
include "./koneksi.php";
	$id  	= trim($_GET['id']);

	$query  = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id = $id") ;

	$data 	= mysqli_fetch_array($query);

	if ($data['jeniskelamin'] == "L") {
		$L = true;
		$P = false;
	} else {
		$P = true;
		$L = false;
	}
?>
<style type="text/css">
	.form-horizontal .control-label{
	    text-align: left;
	}

</style>
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">Edit Anggota</div>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" action="Master/update_anggota.php" method="post">
			<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Judul Berita" value="<?php echo $data['nama']; ?>">
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?php echo $data['email']; ?>">
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $data['password']; ?>">
			    </div>
			</div>

			<div class="form-group">
				<div class="col-md-2">
					<label class="control-label">Jenis Kelamin<br><br></label>
				</div>

				<div class="col-md-12">
					<label>
						<input type="radio" name="jenis_kelamin" id="L" value="Laki-Laki" checked="<?php echo $L; ?>">
						Laki-Laki
					</label>
					<br>
					<label>
						<input type="radio" name="jenis_kelamin" id="P" value="Perempuan" checked="<?php echo $P; ?>">
						Perempuan
					</label>
				</div>
			</div>


			<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
			<a href="index.php?page=anggota" class="btn btn-default">Batal</a>

		</form>
	</div>
</div>