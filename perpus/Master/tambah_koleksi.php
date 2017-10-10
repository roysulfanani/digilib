<style type="text/css">
	.form-horizontal .control-label{
	    text-align: left;
	}
</style>
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">Tambah Koleksi</div>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" action="Master/input_koleksi.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis">
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-sm-12">
			        <textarea id="konten" name="konten"></textarea>
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="file" accept="" name="file_buku">
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="file" accept="image/*" name="gambar">
			    </div>
			</div>

			<input type="submit" name="submit" value="Simpan" onclick="proses()" class="btn btn-primary">
			<a href="?page=Koleksi" class="btn btn-default">Batal</a>

		</form>
	</div>
</div>

<script type="text/javascript">
	function proses() {
		alert("koleksi sukses");
	}
</script>