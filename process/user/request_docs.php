<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'request_document') {
	$requester = $_POST['requester'];
	$requested_file = $_POST['requested_file'];
	$date_requested = $_POST['date_requested'];

	$check = "SELECT id FROM request WHERE requester = '$requester' AND requested_file = '$requested_file' AND date_requested = '$date_requested'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
	}else{
		$query = "INSERT INTO request (`requester`,`requested_file`,`date_requested`) VALUES ('$requester', '$requested_file','$date_requested')";
		$stmt2 = $conn->prepare($query);
		if ($stmt2->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}

if ($method == 'fetch_pending_request') {
	$datefrom = $_POST['datefrom'];
	$dateto = $_POST['dateto'];
	$file_type = $_POST['file_type'];
	$requester = $_POST['requester'];
	$c = 0;

	$query ="SELECT * FROM request WHERE requester = '$requester' AND status = 'pending' AND requested_file LIKE '$file_type%' AND (date_requested >='$datefrom' AND date_requested <= '$dateto')";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['requested_file'].'</td>';
				echo '<td>'.$j['date_requested'].'</td>';
			echo '</tr>';
			
			}
	}else{
			echo '<tr>';
				echo '<td colspan="5" style="color:red;">No Result!</td>';
			echo '</tr>';
	}
}
$conn = NULL;
?>