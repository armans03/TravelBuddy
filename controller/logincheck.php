<?php
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != ""){
			if($password != ""){
				$status = validate($username, $password);

				if($status){
					setcookie('isLoggedIn', 'true', time()+3600, '/');
					setcookie('loggedInName',$username,time()+3600,'/');
                    setcookie('loggedInPw',$password,time()+3600,'/');

                    header('location: ../index1.html');

				echo "invalid username/password";

			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
}
?>








/*$myfile = fopen('../model/user.txt', 'r');

				while (!feof($myfile)) {
					$data = fgets($myfile);
					$user = explode('|', $data);
					
					if($username == "admin1" && trim($user[4]) == $password){
						
						setcookie('isLoggedIn', 'true', time()+3600, '/');
						setcookie('loggedInName',$username,time()+3600,'/');
                        setcookie('loggedInPw',$user[4],time()+3600,'/');
                        //setcookie('userType',$user[3],time()+3600,'/');

						header('location: ../adminindex.html');
					}
				elseif ($username == "transport1" && trim($user[4]) == $password) {
					
					    setcookie('isLoggedIn', 'true', time()+3600, '/');
						setcookie('loggedInName',$username,time()+3600,'/');
                        setcookie('loggedInPw',$user[4],time()+3600,'/');


						header('location: ../index1.html');
				}
				elseif ($username == "shop1" && trim($user[4]) == $password) {
					
					    setcookie('isLoggedIn', 'true', time()+3600, '/');
						setcookie('loggedInName',$username,time()+3600,'/');
                        setcookie('loggedInPw',$user[4],time()+3600,'/');


						header('location: ../index1.html');
				}
				elseif ( trim($user[1]) == $username && trim($user[4]) == $password) {
			
					    setcookie('isLoggedIn', 'true', time()+3600, '/');
						setcookie('loggedInName',$username,time()+3600,'/');
                        setcookie('loggedInPw',$user[4],time()+3600,'/');

                        


						header('location: ../index1.html');
				}
			}*/