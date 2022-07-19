<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_pending_docs') {
	$datefrom = $_POST['datefrom'];
	$dateto = $_POST['dateto'];
	$c = 0;

	$query = "SELECT * FROM documents WHERE status = 'pending' AND (date_sent >='$datefrom' AND date_sent <= '$dateto')";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			
			$c++;
			echo '<tr>';
				echo '<td  style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_docs" onclick="get_docs_details(&quot;'.$j['id'].'~!~'.$j['file_name'].'~!~'.$j['file_type'].'~!~'.$j['date_sent'].'~!~'.$j['file'].'~!~'.$j['send_by'].'~!~'.$j['status'].'&quot;)">'.$c.'</td>';
				echo '<td  style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_docs" onclick="get_docs_details(&quot;'.$j['id'].'~!~'.$j['file_name'].'~!~'.$j['file_type'].'~!~'.$j['date_sent'].'~!~'.$j['file'].'~!~'.$j['send_by'].'~!~'.$j['status'].'&quot;)">'.$j['send_by'].'</td>';
				echo '<td><a href="../../process/user/'.$j['file'].'" target="_blank">'.substr($j['file'], 7).'</a></td>';
				echo '<td  style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_docs" onclick="get_docs_details(&quot;'.$j['id'].'~!~'.$j['file_name'].'~!~'.$j['file_type'].'~!~'.$j['date_sent'].'~!~'.$j['file'].'~!~'.$j['send_by'].'~!~'.$j['status'].'&quot;)">'.$j['file_type'].'</td>';
				echo '<td  style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_docs" onclick="get_docs_details(&quot;'.$j['id'].'~!~'.$j['file_name'].'~!~'.$j['file_type'].'~!~'.$j['date_sent'].'~!~'.$j['file'].'~!~'.$j['send_by'].'~!~'.$j['status'].'&quot;)">'.$j['date_sent'].'</td>';
				echo '<td  style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_docs" onclick="get_docs_details(&quot;'.$j['id'].'~!~'.$j['file_name'].'~!~'.$j['file_type'].'~!~'.$j['date_sent'].'~!~'.$j['file'].'~!~'.$j['send_by'].'~!~'.$j['status'].'&quot;)">'.$j['status'].'</td>';
			echo '</tr>';
		}
	}else{
			echo '<tr>';
				echo '<td colspan="6" style="color:red;">No Result!</td>';
			echo '</tr>';
	}
}

if ($method == 'recieved_docs') {
	$id = $_POST['id'];
	$date_recieved = $_POST['date_recieved'];

	$query = "UPDATE documents SET status = 'recieved', date_recieved = '$date_recieved' WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}
$conn = NULL;
?>