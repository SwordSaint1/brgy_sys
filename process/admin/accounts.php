<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'add_accounts') {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$full_name = $_POST['full_name'];
	$address = $_POST['address'];
	$phone_no = $_POST['phone_no'];
	$role = $_POST['role'];

	$check = "SELECT id FROM accounts WHERE email = '$email'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
	}else{
		$query = "INSERT INTO accounts (`email`,`password`,`full_name`,`address`,`phone_no`,`role`) VALUES ('$email', '$password','$full_name','$address','$phone_no','$role')";
		$stmt2 = $conn->prepare($query);
		if ($stmt2->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}

if ($method == 'fetch_accounts') {
	$full_name = $_POST['full_name'];
	$role = $_POST['role'];
	$c = 0;

	$query = "SELECT * FROM accounts WHERE full_name LIKE '$full_name%' AND role LIKE '$role%'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_accounts_user" onclick="get_accounts_details(&quot;'.$j['id'].'~!~'.$j['email'].'~!~'.$j['password'].'~!~'.$j['full_name'].'~!~'.$j['address'].'~!~'.$j['phone_no'].'~!~'.$j['role'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['email'].'</td>';
				echo '<td>'.$j['full_name'].'</td>';
				echo '<td>'.$j['address'].'</td>';
				echo '<td>'.$j['phone_no'].'</td>';
				echo '<td>'.$j['role'].'</td>';
			echo '</tr>';
		}
	}else{
			echo '<tr>';
				echo '<td colspan="6" style="color:red;">No Result!<td>';
			echo '</tr>';
	}
}

if ($method == 'update_account') {
	$id = $_POST['id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$full_name = $_POST['full_name'];
	$address = $_POST['address'];
	$phone_no = $_POST['phone_no'];
	$role = $_POST['role'];

	$check = "SELECT id FROM accounts WHERE email = '$email'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
	}else{

	$query = "UPDATE accounts SET email = '$email', password = '$password', full_name = '$full_name', address = '$address', phone_no = '$phone_no', role = '$role' WHERE id = '$id'";
	$stmt2 = $conn->prepare($query);
	if ($stmt2->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}
}

if ($method == 'delete_accounts') {
	$id = $_POST['id'];

	$query ="DELETE FROM accounts WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}
$conn = NULL;
?>