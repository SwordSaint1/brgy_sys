<script type="text/javascript">
	
const request_docs =()=>{
	var requester = document.getElementById('requester').value;
	var requested_file = document.getElementById('requested_file').value;
	var date_requested = document.getElementById('date_requested').value;

	if (requested_file == '') {
swal('Information','Please Select File Type','info');		
	}else{

	$.ajax({
		url: '../../process/user/request_docs.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'request_document',
                    requester:requester,
					requested_file:requested_file,
					date_requested:date_requested
                },success:function(response){

                   if (response == 'Already Exist') {
                   	swal('Information','Data Already Exist!','info');
                   	// search_blotter();
                   }
                   else if (response == 'success') {
                   	swal('Success','Successfully Requested!','success');
                    // search_blotter();
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});
}
}

const search_request =()=>{
	var datefrom = document.getElementById('date_requested_from').value;
	var dateto = document.getElementById('date_requested_to').value;
	var file_type = document.getElementById('requested_files').value;
    var requester = document.getElementById('requester_sent_docs').value;
    
	$.ajax({
      url: '../../process/user/request_docs.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_pending_request',
                    datefrom:datefrom,
					dateto:dateto,
					file_type:file_type,
                    requester:requester
                },success:function(response){
                   document.getElementById('list_of_pending_request').innerHTML = response;
                }
   });
}

</script>