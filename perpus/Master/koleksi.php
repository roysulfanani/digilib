<?php
include "./koneksi.php";

$hasil = mysqli_query($koneksi, "SELECT * FROM koleksi ORDER BY id DESC");

//var_dump($koneksi);

/*$hasil = mysqli_query($query);*/

?>

<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">Data Koleksi</div>
	</div>
	<div class="panel-body">
	<a href="?page=tambah_koleksi" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah</a>
	<br>
	<br>
	  <div class="table-responsive">
		<table class="table table-striped table-bordered" >
			<tr>
				<th width="50">No</th>
				<th>Judul</th>
				<th>Deskripsi</th>
				<th>Nama File</th>
				<th>Jenis</th>
				<th width="50">Pilihan</th>
			</tr>

		<?php
		$no = 1;
		while ($data = mysqli_fetch_array($hasil)) :
		?>
			<tr>
				<td align="center"><?php echo $no++; ?></td>
				<td><?php echo $data['judul']; ?></td>
				<td><?php echo $data['deskripsi']; ?></td>
				<td><?php echo $data['namafile']; ?></td>
				<td><?php echo $data['jenis']; ?></td>
				<td>
					<a href="?page=edit_koleksi&id=<?php echo $data['id']; ?>">
						<i class="glyphicon glyphicon-pencil"></i>
					</a>
					&nbsp;&nbsp;
					<a href="Master/hapus_koleksi.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus Koleksi berjudul <?php echo $data['judul']; ?>?') ">
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
<?php
/*include "config/koneksi.php";
$query = "SELECT * FROM running_text ORDER BY id DESC";

$hasil = mysql_query($query);*/
?>
