<?php
include "perpus/koneksi.php";

session_start();

if (empty($_SESSION['USERNAME'])) {
  /*header("location:login.php");
  exit();*/
  //echo "Login";
  $login = "Login";
}

$hasil = mysqli_query($koneksi, "SELECT * FROM koleksi ORDER BY IDKOLEKSI DESC");

//var_dump($koneksi);

/*$hasil = mysqli_query($query);*/

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>DIGILIB</title>

    <!-- Bootstrap core CSS -->
    <link href="perpus/css/bootstrap.min.css" rel="stylesheet">
    <link href="perpus/assets/fa/css/font-awesome.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="perpus/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="perpus/css/navbar-fixed-top.css" rel="stylesheet">
    <link href="perpus/assets/summernote/summernote.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="perpus/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-grain"></span> DIGILIB</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Master <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="?page=koleksi">Koleksi</a></li>
                <li><a href="?page=anggota">Anggota</a></li>
                <li><a href="?page=petugas">Petugas</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Transaksi <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="?page=download">Transaksi Download</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="perpus/login_member.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?php echo $login; ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- <div class="container-fluid"> -->

      <!-- Main component for a primary marketing message or call to action -->
      <!-- <div class="jumbotron">
        <h1>Selamat Datang Di Perpustakaan</h1>
        
      </div> -->

    <!-- </div> --> <!-- /container -->

    <div class="container-fluid">

<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">Data Koleksi</div>
	</div>
	<div class="panel-body">
	<!-- <a href="?page=tambah_koleksi" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah</a>
	<br>
	<br> -->
	  <div class="table-responsive">
		<table class="table table-striped table-bordered" >
			<tr>
				<th width="50">No</th>
				<th>Judul</th>
				<th width="150">Deskripsi</th>
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
				<td><?php echo $data['JUDUL']; ?></td>
				<td width="150"><?php echo $data['DESKRIPSI']; ?></td>
				<td><?php echo $data['NAMA_FILE']; ?></td>
				<td><?php echo $data['JENIS']; ?></td>
				<td>
					<!-- <a href="download.php?id=<?php /*echo $data['id']*/ ?>">Download</a> -->
					<a href="perpus/file_buku/<?php echo $data['NAMA_FILE']; ?>">Download File</a><hr><br>
					&nbsp;&nbsp;
					<a href="Master/hapus_koleksi.php?id=<?php echo $data['IDKOLEKSI']; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus Koleksi berJUDUL <?php echo $data['JUDUL']; ?>?') ">
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

</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="assets/js/ie10-viewport-bug-workaround.js"></script> -->
    <script src="perpus/assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="perpus/assets/summernote/summernote.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="perpus/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#konten").summernote({
          height: 300
        });
        $("#isi_pengumuman").summernote({
          height: 300
        });
      });
    </script>
  </body>
</html>

<?php
/*include "config/koneksi.php";
$query = "SELECT * FROM running_text ORDER BY id DESC";

$hasil = mysql_query($query);*/
?>
