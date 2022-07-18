<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'add_blotter') {
	$date_recorded = $_POST['date_recorded'];
	$complainant = $_POST['complainant'];
	$person_to_complaint = $_POST['person_to_complaint'];
	$complaint = $_POST['complaint'];
	$action_taken = $_POST['action_taken'];
	$status = $_POST['status'];
	$location_of_incedence = $_POST['location_of_incedence'];


	$check = "SELECT id FROM blotter WHERE date_recorded = '$date_recorded' AND complainant = '$complainant' AND person_to_complaint = '$person_to_complaint'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
	}else{
		$query = "INSERT INTO blotter (`date_recorded`,`complainant`,`person_to_complaint`,`complaint`,`action_taken`,`status`,`location_of_incedence`) VALUES ('$date_recorded', '$complainant','$person_to_complaint','$complaint','$action_taken','$status','$location_of_incedence')";
		$stmt2 = $conn->prepare($query);
		if ($stmt2->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}

if ($method == 'fetch_blotter') {
	$datefrom = $_POST['datefrom'];
	$dateto = $_POST['dateto'];
	$c = 0;

	$query = "SELECT * FROM blotter WHERE date_recorded >='$datefrom' AND date_recorded <= '$dateto'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL () as $j){
			$c++;
			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_blotter" onclick="get_blotter_details(&quot;'.$j['id'].'~!~'.$j['date_recorded'].'~!~'.$j['complainant'].'~!~'.$j['person_to_complaint'].'~!~'.$j['complaint'].'~!~'.$j['action_taken'].'~!~'.$j['status'].'~!~'.$j['location_of_incedence'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['date_recorded'].'</td>';
				echo '<td>'.$j['complainant'].'</td>';
				echo '<td>'.$j['person_to_complaint'].'</td>';
				echo '<td>'.$j['complaint'].'</td>';
				echo '<td>'.$j['action_taken'].'</td>';
				echo '<td>'.$j['status'].'</td>';
				echo '<td>'.$j['location_of_incedence'].'</td>';
			echo '</tr>';

		}
	}else{
			echo '<tr>';
				echo '<td colspan="8" style="color:red;">No Result!<td>';
			echo '</tr>';
	}
}

if ($method == 'delete_blotter') {
	$id = $_POST['id'];
	$query = "DELETE FROM blotter WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'update_blotter') {
	$id = $_POST['id'];
	$date_recorded = $_POST['date_recorded'];
	$complainant = $_POST['complainant'];
	$person_to_complaint = $_POST['person_to_complaint'];
	$complaint = $_POST['complaint'];
	$action_taken = $_POST['action_taken'];
	$status = $_POST['status'];
	$location_of_incedence = $_POST['location_of_incedence'];

	// $check = "SELECT id FROM blotter WHERE date_recorded = '$date_recorded' AND complainant = '$complainant' AND person_to_complaint = '$person_to_complaint'";
	// $stmt = $conn->prepare($check);
	// $stmt->execute();
	// if ($stmt->rowCount() > 0) {
	// 	echo 'Already Exist';
	// }else{

	$query = "UPDATE blotter SET date_recorded = '$date_recorded', complainant = '$complainant', person_to_complaint = '$person_to_complaint', complaint = '$complaint', action_taken = '$action_taken', status = '$status', location_of_incedence = '$location_of_incedence' WHERE id = '$id'";
	$stmt2 = $conn->prepare($query);
	if ($stmt2->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
// }
}
$conn = NULL;
?>