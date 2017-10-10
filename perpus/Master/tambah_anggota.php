<style type="text/css">
	.form-horizontal .control-label{
	    text-align: left;
	}
</style>
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">Tambah Anggota</div>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" action="Master/input_anggota.php" method="post">
			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Nama Anggota">
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
			    </div>
			</div>

			<div class="form-group">
				<div class="col-md-2">
					<label class="control-label">Jenis Kelamin<br><br></label>
				</div>

				<div class="col-md-12">
					<label>
						<input type="radio" name="jenis_kelamin" id="L" value="Laki-Laki" checked="true">
						Laki-Laki
					</label>
					<br>
					<label>
						<input type="radio" name="jenis_kelamin" id="P" value="Perempuan">
						Perempuan
					</label>
				</div>
			</div>

			<input type="submit" name="submit" value="Simpan" onclick="proses()" class="btn btn-primary">
			<a href="?page=anggota" class="btn btn-default">Batal</a>

		</form>
	</div>
</div>

<script type="text/javascript">
	function proses() {
		alert("anggota sukses");
	}
</script>