<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'add_resident') {
	$name = $_POST['name'];
	$address = $_POST['address'];
	$date_of_birth = $_POST['date_of_birth'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$civil_status = $_POST['civil_status'];
	$citizenship = $_POST['citizenship'];
	$occupation = $_POST['occupation'];
	$register_voters = $_POST['register_voters'];


	$check = "SELECT id FROM resident_details WHERE name = '$name'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
	}else{
		$query = "INSERT INTO resident_details (`name`,`address`,`date_of_birth`,`age`,`gender`,`civil_status`,`citizenship`,`occupation`,`register_voters`) VALUES ('$name', '$address','$date_of_birth','$age','$gender','$civil_status','$citizenship','$occupation','$register_voters')";
		$stmt2 = $conn->prepare($query);
		if ($stmt2->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
	
}

if ($method == 'fetch_resident') {
	$name = $_POST['name'];
	$c = 0;

	$query = "SELECT * FROM resident_details WHERE name LIKE '$name%'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_resident" onclick="get_resident_details(&quot;'.$j['id'].'~!~'.$j['name'].'~!~'.$j['address'].'~!~'.$j['date_of_birth'].'~!~'.$j['age'].'~!~'.$j['gender'].'~!~'.$j['civil_status'].'~!~'.$j['citizenship'].'~!~'.$j['occupation'].'~!~'.$j['register_voters'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['name'].'</td>';
				echo '<td>'.$j['address'].'</td>';
				echo '<td>'.$j['date_of_birth'].'</td>';
				echo '<td>'.$j['age'].'</td>';
				echo '<td>'.$j['gender'].'</td>';
				echo '<td>'.$j['civil_status'].'</td>';
				echo '<td>'.$j['citizenship'].'</td>';
				echo '<td>'.$j['occupation'].'</td>';
				echo '<td>'.$j['register_voters'].'</td>';
			echo '</tr>';
		}
	}else{
			echo '<tr>';
				echo '<td colspan="10" style="color:red;">No Result!<td>';
			echo '</tr>';
	}
}

if ($method == 'delete_resident') {
	$id = $_POST['id'];

	$query ="DELETE FROM resident_details WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'update_resident') {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$date_of_birth = $_POST['date_of_birth'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$civil_status = $_POST['civil_status'];
	$citizenship = $_POST['citizenship'];
	$occupation = $_POST['occupation'];
	$register_voters = $_POST['register_voters'];

	$check = "SELECT id FROM resident_details WHERE name = '$name'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
	}else{

	$query = "UPDATE resident_details SET name = '$name', address = '$address', date_of_birth = '$date_of_birth', age = '$age', gender = '$gender', civil_status = '$civil_status', citizenship = '$citizenship', occupation = '$occupation', register_voters = '$register_voters' WHERE id = '$id'";
	$stmt2 = $conn->prepare($query);
	if ($stmt2->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}
}
$conn = NULL;
?>