<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_recieved_docs') {
	$datefrom = $_POST['datefrom'];
	$dateto = $_POST['dateto'];
	$c = 0;

	$query = "SELECT * FROM documents WHERE status = 'recieved' AND date_recieved != '' AND (date_recieved >='$datefrom' AND date_recieved <= '$dateto')";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			
			$c++;
			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['send_by'].'</td>';
				echo '<td><a href="../../process/user/'.$j['file'].'" target="_blank">'.substr($j['file'], 7).'</a></td>';
				echo '<td>'.$j['file_type'].'</td>';
				echo '<td>'.$j['date_sent'].'</td>';
				echo '<td>'.$j['status'].'</td>';
			echo '</tr>';
		}
	}else{
			echo '<tr>';
				echo '<td colspan="6" style="color:red;">No Result!</td>';
			echo '</tr>';
	}
}
$conn = NULL;
?>