<?php
include "./koneksi.php";
	$id  	= trim($_GET['id']);

	$query  = mysqli_query($koneksi, "SELECT * FROM Koleksi WHERE id = $id") ;

	$data 	= mysqli_fetch_array($query);
?>
<style type="text/css">
	.form-horizontal .control-label{
	    text-align: left;
	}

</style>
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">Edit Koleksi</div>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" action="Master/update_koleksi.php" method="post">
			<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Berita" value="<?php echo $data['judul']; ?>">
			    </div>
			</div>
			<div class="form-group">
			    <div class="col-sm-12">
			        <textarea id="konten" name="konten">
			        	<?php echo $data['deskripsi']; ?>
			        </textarea>
			    </div>
			</div>
			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="nama_file" name="nama_file" placeholder="Nama File" value="<?php echo $data['namafile']; ?>">
			    </div>
			</div>
			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis" value="<?php echo $data['jenis']; ?>">
			    </div>
			</div>


			<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
			<a href="index.php" class="btn btn-default">Batal</a>

		</form>
	</div>
</div>