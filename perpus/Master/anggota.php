<?php
include "./koneksi.php";

$hasil = mysqli_query($koneksi, "SELECT * FROM anggota ORDER BY IDANGGOTA DESC");

//var_dump($koneksi);

/*$hasil = mysqli_query($query);*/

?>

<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">Data Anggota</div>
	</div>
	<div class="panel-body">
	<a href="?page=tambah_anggota" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah</a>
	<br>
	<br>
	  <div class="table-responsive">
		<table class="table table-striped table-bordered" >
			<tr>
				<th width="50">No</th>
				<th>Nama Anggota</th>
				<th>E-mail</th>
				<th>Jenis Kelamin</th>
				<th width="50">Pilihan</th>
			</tr>

		<?php
		$no = 1;
		while ($data = mysqli_fetch_array($hasil)) :
			if ($data['JENISKELAMIN'] == "L") {
				$jk = "Laki-Laki";
			} else {
				$jk = "Perempuan";
			}
		?>
			<tr>
				<td align="center"><?php echo $no++; ?></td>
				<td><?php echo $data['NAMAANGGOTA']; ?></td>
				<td><?php echo $data['EMAIL']; ?></td>
				<td><?php echo $jk; ?></td>
				<td>
					<a href="?page=edit_anggota&IDANGGOTA=<?php echo $data['IDANGGOTA']; ?>">
						<i class="glyphicon glyphicon-pencil"></i>
					</a>
					&nbsp;&nbsp;
					<a href="Master/hapus_anggota.php?IDANGGOTA=<?php echo $data['IDANGGOTA']; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus Anggota bernama <?php echo $data['NAMAANGGOTA']; ?>?') ">
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