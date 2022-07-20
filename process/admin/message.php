<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_message') {
	$c = 0;
	$query = "SELECT * FROM message ORDER BY date_sent DESC";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['name'].'</td>';
				echo '<td>'.$j['email'].'</td>';
				echo '<td>'.$j['subject'].'</td>';
				echo '<td>'.$j['message'].'</td>';
				echo '<td>'.$j['date_sent'].'</td>';
			echo '</tr>';
		}
	}else{
			echo '<tr>';
				echo '<td colspan="6" style="color:red;">No Result!<td>';
			echo '</tr>';
	}
}
$conn = NULL;
?>