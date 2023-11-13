<?php 
include('koneksi/conn.php'); 
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }
?>
<div id="main">
	<div class="content">
		

			<?php 
            $id=$_GET['id_pembelian'];
			$sql = "SELECT * FROM tbl_konsumen inner join tbl_tiket on tbl_konsumen.no_identitas=tbl_tiket.no_konsumen join tbl_pembayaran on tbl_tiket.no_tiket=tbl_pembayaran.no_tiket  "; 
			$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
            // $data = $hasil->fetch_assoc();
			
            while($data = mysqli_fetch_array ($hasil)){
			    if ($data['no_konsumen'] == $id){

				?>

				
			</table>
		</div>
	</div>
    <fieldset>
<legend><h3>Silahkan Cetak Tiket Pemesanan</h3></legend>
  	  <table width="100%">
    <tr><td colspan="3"><strong><u>DATA</u></strong></td></tr>  	  
	  <tr><td>ID Customer</td><td>:</td><td><?php echo $data['nama_konsumen']; ?></td></tr>
    <tr><td>ID Tiket</td><td>:</td><td><?php echo $data['no_tiket']; ?></td></tr>	  
	  <tr><td>Tanggal Berangkat</td><td>:</td><td><?php echo $data['tgl_berangkat'];?></td></tr>
	  <tr><td>Hari Berangkat</td><td>:</td><td><?php echo $data['hari_berangkat'];?></td></tr>    
	  <tr><td>Waktu Berangkat</td><td>:</td><td><?php echo $data['waktu_berangkat'];?></td></tr>  
      <tr><td>Kode Tujuan</td><td>:</td><td><?php echo $data['no_tujuan'];?></td></tr>
      <tr><td>Jumlah tiket</td><td>:</td><td><?php echo $data['jumlah_tiket'];?></td></tr>
	  <tr><td colspan="2"></td><td><b>**No SN akan divalidasi oleh kami, maka simpan / cetak kerahasiaan sebagai bukti pemesanan tiket.</b></td></tr>
	  </table>
                <?php } } ?>


