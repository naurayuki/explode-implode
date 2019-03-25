<?php 
	//explode 1
	$jam = "08:35:40";
	print_r($jam);
	$data_jam = explode(":", $jam);
	echo'<pre>';
	print_r($data_jam);
	echo'</pre>';
	echo "<br>"."<br>";
	
	//explode 2
	$tgl="2019-03-22";
	print_r($tgl);
	$data_tgl = explode("-", $tgl);
	echo '<pre>';
	print_r($data_tgl);
	echo'</pre>';
	
	$th=$data_tgl[0];
	$bln=$data_tgl[1];
	$tgl=$data_tgl[2];
	echo $tgl."-".$bln."-".$th."<br>";
	echo "<br>"."<br>";
	
	//explode 3
	$teman = "Yuli, Anita, Ardia, Fira";
	print_r($teman);
	$data_teman = explode(",", $teman);
	echo '<pre>';
	print_r($data_teman);
	echo'</pre>';
	echo "<br>"."<br>";


	//explode 4
	$alamat = "Blali, Dlingo, Purworejo, Palembang";
	print_r($alamat);
	$data_alamat = explode(" ", $alamat);
	echo'<pre>';
	print_r($data_alamat);
	echo'</pre>';
	echo "<br>"."<br>";
	
	//explode 5
	$jurusan = "Teknik_Informatika, Sistem_Informatika, Ilmu_Komputer, Bisnis_Ekonomi";
	print_r($jurusan);
	$data_jurusan = explode(" ", $jurusan);
	echo'<pre>';
	print_r($data_jurusan);
	echo'</pre>';
	echo "<br>"."<br>";
	
	
?>