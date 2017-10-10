<?php
include "./koneksi.php";

$hasil = mysqli_query($koneksi, "SELECT * FROM petugas ORDER BY id DESC");

//var_dump($koneksi);

/*$hasil = mysqli_query($query);*/

?>

<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">Data Petugas</div>
	</div>
	<div class="panel-body">
	<a href="?page=tambah_petugas" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah</a>
	<br>
	<br>
	  <div class="table-responsive">
		<table class="table table-striped table-bordered" >
			<tr>
				<th width="50">No</th>
				<th>Nama Petugas</th>
				<th>Username</th>
				<th>Level</th>
				<th width="50">Pilihan</th>
			</tr>

		<?php
		$no = 1;
		while ($data = mysqli_fetch_array($hasil)) :
			/*if ($data['jeniskelamin'] == "L") {
				$jk = "Laki-Laki";
			} else {
				$jk = "Perempuan";
			}*/
		?>
			<tr>
				<td align="center"><?php echo $no++; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['username']; ?></td>
				<td><?php echo $data['level']; ?></td>
				<td>
					<a href="?page=edit_petugas&id=<?php echo $data['id']; ?>">
						<i class="glyphicon glyphicon-pencil"></i>
					</a>
					&nbsp;&nbsp;
					<a href="Master/hapus_petugas.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus Petugas bernama <?php echo $data['nama']; ?>?') ">
						<i class="glyphicon glyphicon-trash"></i>
					</a>
				</td>
			</tr>
		<?php
		endwhile;
		?>
		</table>
	  </div>
	</div>
</div>