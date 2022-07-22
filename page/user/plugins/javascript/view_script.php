<script type="text/javascript">

const search_view_docs =()=>{
	var datefrom = document.getElementById('date_requested_from').value;
	var dateto = document.getElementById('date_requested_to').value;
	var file_type = document.getElementById('requested_files').value;
    var requester = document.getElementById('viewer').value;
	$.ajax({
      url: '../../process/user/view_docs.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_request',
                    datefrom:datefrom,
					dateto:dateto,
					file_type:file_type,
                    requester:requester
                },success:function(response){
                   document.getElementById('list_of_docss').innerHTML = response;
                }
   });
}
</script>