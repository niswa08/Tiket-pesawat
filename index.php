<?php 
session_start();
if(isset($_SESSION["username"])){
}else{
	echo header("location:login.php");
	
}
include('template/top.php');
include('template/navigasi.php');

?>

<div id="main">
	<div class="content">
		<marquee style="background: #ad8080; padding:5px; color: #fff;">Selamat Datang di Web Pemesanan Tiket Pesawat Kelompok C1</marquee>
		<div id="profile">
			<img src="foto/bird.jpg" alt="" class="animated flipInY">
			<center>
				<h2>TIKET PESAWAT</h2>
				<hr/>
			</center>
			

		</div>
		<hr/>

		<h2>Web Pemesanan Tiket Kelompok C1</h2>
		<br />
		<br />
		<br />
	</div>
</div>


<?php include('template/footer.php'); ?>