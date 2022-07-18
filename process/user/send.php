<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_send_docs') {
	$datefrom = $_POST['datefrom'];
	$dateto = $_POST['dateto'];
	$send_by = $_POST['send_by'];
	$c = 0;

	$query = "SELECT * FROM documents WHERE send_by = '$send_by' AND (date_sent >='$datefrom' AND date_sent <= '$dateto')";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			
			$c++;
			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td><a href="../../process/user/'.$j['file'].'">'.substr($j['file'], 21).'</a></td>';
				echo '<td>'.$j['file_type'].'</td>';
				echo '<td>'.$j['date_sent'].'</td>';
			echo '</tr>';
		}
	}else{
			echo '<tr>';
				echo '<td colspan="4" style="color:red;">No Result!</td>';
			echo '</tr>';
	}
}

$conn = NULL;
?>