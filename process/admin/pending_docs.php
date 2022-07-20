<?php 
include '../conn.php';

$method = $_POST['method'];
if ($method == 'fetch_pending_docs') {
	$datefrom = $_POST['datefrom'];
	$dateto = $_POST['dateto'];
	$c = 0;

	$query = "SELECT * FROM request WHERE status = 'pending' AND (date_requested >='$datefrom' AND date_requested <= '$dateto')";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			
			$c++;
			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#send_docs" onclick="get_request_details(&quot;'.$j['id'].'~!~'.$j['requester'].'~!~'.$j['requested_file'].'~!~'.$j['date_requested'].'~!~'.$j['status'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['requester'].'</td>';
				echo '<td>'.$j['requested_file'].'</td>';
				echo '<td>'.$j['date_requested'].'</td>';
				echo '<td>'.$j['status'].'</td>';
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

