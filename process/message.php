<?php
include 'conn.php';
date_default_timezone_set('Asia/Manila');
 $server_date_only = date('Y-m-d');

if (isset($_POST['submit_btn'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg_subject = $_POST['msg_subject'];
	$message = $_POST['message'];

	$query = "INSERT INTO message (`name`,`email`,`subject`,`message`,`date_sent`) VALUES('$name','$email','$msg_subject','$message','$server_date_only')";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		 echo '<script>
                    var x = confirm("Message Sent!");
                    if(x == true){
                        location.replace("../index.php");
                    }else{
                        location.replace("../index.php");
                    }
                </script>';
	
	}else{
		 echo '<script>
                    var x = confirm("Message Not Sent!");
                    if(x == true){
                        location.replace("../index.php");
                    }else{
                        location.replace("../index.php");
                    }
                </script>';
	}
}


?>