<style type="text/css">
	.form-horizontal .control-label{
	    text-align: left;
	}
</style>
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">Tambah Petugas</div>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" action="Master/input_petugas.php" method="post">
			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Nama Petugas">
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="username" name="username" placeholder="Username">
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-sm-12">
			      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
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

			<input type="submit" name="submit" value="Simpan" onclick="proses()" class="btn btn-primary">
			<a href="?page=petugas" class="btn btn-default">Batal</a>

		</form>
	</div>
</div>

<script type="text/javascript">
	function proses() {
		alert("petugas sukses");
	}
</script>