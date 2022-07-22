<?php 
include '../conn.php';

$method = $_POST['method'];
if ($method == 'fetch_request') {
	$datefrom = $_POST['datefrom'];
	$dateto = $_POST['dateto'];
	$file_type = $_POST['file_type'];
	$requester = $_POST['requester'];
	$c = 0;

	$query ="SELECT * FROM request WHERE requester = '$requester' AND status = 'done' AND requested_file LIKE '$file_type%' AND (date_requested >='$datefrom' AND date_requested <= '$dateto')";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td><a href="../../process/admin/'.$j['file'].'" target="_blank">'.substr($j['file'], 10).'</a></td>';
				echo '<td>'.$j['requested_file'].'</td>';
				echo '<td>'.$j['date_requested'].'</td>';
				echo '<td>'.$j['send_by'].'</td>';
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