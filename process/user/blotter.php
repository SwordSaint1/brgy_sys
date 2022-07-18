<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_blotter') {
	$datefrom = $_POST['datefrom'];
	$dateto = $_POST['dateto'];
	$complainant = $_POST['complainant'];
	$c = 0;

	$query = "SELECT * FROM blotter WHERE complainant = '$complainant' AND date_recorded >='$datefrom' AND date_recorded <= '$dateto'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL () as $j){
			$c++;
			echo '<tr>';
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
$conn = NULL;
?>