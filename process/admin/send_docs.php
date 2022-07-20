<?php
include "../conn.php";
	
if(isset($_POST['submit'])) {

	// Count total files
	$countfiles = count(($_FILES['filess']['name']));
	
	// Loop all files
	for($i = 0; $i < $countfiles; $i++) {

		// File name
		$filename = $_FILES['filess']['name'][$i];
		if(strpos(" ",$filename)){
			$filename = str_replace(" ","-",$filename);
		}

		$random = mt_rand(100000,999999);
		$datecode = date('Ymd');
		$prefix = "UPLOAD";
		$unique = uniqid();

		$extn = pathinfo($filename,PATHINFO_EXTENSION);

		## NEW FILENAME
		$filename = $prefix."-".strtoupper(trim($filename))."-".$datecode."-".$random."-".$unique.".".$extn;

		// Location
		$target_file = 'sent_docs/'.$filename;
	
		$requested_file = $_POST['requested_file_sent'][$i];

		$date_sent = $_POST['date_sent'];

		$id = $_POST['id_document']; 
		$send_by = $_POST['send_by'];
		$send_to = $_POST['requester_sent'];
		$status = $_POST['status_docs'];
		// file extension
		$file_extension = pathinfo(
			$target_file, PATHINFO_EXTENSION);
			
		$file_extension = strtolower($file_extension);
	
		// Valid image extension
		$valid_extension = array("pdf");
	

		if(in_array($file_extension, $valid_extension)) {

			// Upload file
			if(move_uploaded_file(
				$_FILES['filess']['tmp_name'][$i],
				$target_file)
			) {
				
					$query = "UPDATE request SET `file_name` = '$filename', file_type = '$requested_file', date_sent = '$date_sent', file = '$target_file', send_by = '$send_by', send_to = '$send_to', status = '$status' WHERE id = '$id'";
					$statement = $conn->prepare($query);

				// Execute query
				$statement->execute(
					array($filename,$target_file,$requested_file,$date_sent,$send_by,$send_to,$status,$id)); 
				
				
			}
		}
	}

	 echo '<script>
                    var x = confirm("Successfully Sent!");
                    if(x == true){
                        location.replace("../../page/admin/docs.php");
                    }else{
                        location.replace("../../page/admin/docs.php");
                    }
                </script>';
	

}
?>