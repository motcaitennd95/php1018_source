<?php
	session_start();
	// Kiểm tra ng dùng có click vào nut btnlogin 
	// tẠO 1 CƠ sở dữ liệu
	$account = array(
		'admin' => '123456',
		'manager' => '123',
		'member' => 'abc123'
	);
	if(isset($_POST['btnLogin'])){
		// Tiens hành lấy dữ diệu
		$user = $_POST['txtUser'];
		$pass = $_POST['txtPass'];
		// kiểm tra sự tồn tại của ng dùng trong mảng
		$status = 0;
		foreach ($account as $key => $value) {
			if($user == $key && $pass == $value){
				$status = 1;
				break;
			}else{
				$status = 0;
			}
		}
		if($status == 1){
			// Cấp phiên  làm việc cho user
			$_SESSION['login']= $user;
			$_SESSION['loggedin'] = true;
			// về inđex
			header('location: index.php');
		}else{
			header('location: login.php');
		}
	}else{
			header('location: login.php');
		}
?>
