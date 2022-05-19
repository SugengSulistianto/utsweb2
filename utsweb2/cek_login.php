<?php

include_once('koneksi.php');

// function test_input($data) {
	
// 	$data = trim($data);
// 	$data = stripslashes($data);
// 	$data = htmlspecialchars($data);
// 	return $data;
// }

// if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
// 	$adminname = test_input($_POST["adminname"]);
// 	$password = test_input($_POST["password"]);
// 	$stmt = $conn->prepare("SELECT * FROM adminlogin");
// 	$stmt->execute();
// 	$users = $stmt->fetchAll();
	
// 	foreach($users as $user) {
		
// 		if(($user['adminname'] == $adminname) &&
// 			($user['password'] == $password)) {
// 				header("Location: halaman_admin.php");
// 		}
// 		else {
// 			echo "<script language='javascript'>";
// 			echo "alert('WRONG INFORMATION')";
// 			echo "</script>";
// 			die();
// 		}
// 	}
// }

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['username']== $username && $data['password'] == $password){

		// buat session login dan username
		$_SESSION['username'] = $username;
		// alihkan ke halaman dashboard admin
		header("location:index.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}



?>
