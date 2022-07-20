<script type="text/javascript">

$(document).ready(function(){
    search_pending_docs();
})	
const search_pending_docs =()=>{
	var datefrom  = document.getElementById('date_sent_date_from').value;
	var dateto = document.getElementById('date_sent_date_to').value;

	$.ajax({
      url: '../../process/admin/pending_docs.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_pending_docs',
                    datefrom:datefrom,
					dateto:dateto
                },success:function(response){
                   document.getElementById('list_of_pending_docs').innerHTML = response;
                     
                }
   });
}

const get_request_details =(param)=>{
    var string = param.split('~!~');
    var id = string[0];
    var requester = string[1];
    var requested_file = string[2];
    var date_requested = string[3];
    var status = string[4];

document.getElementById('id_document').value = id;
document.getElementById('requester_sent').value = requester;
document.getElementById('requested_file_sent').value = requested_file;
document.getElementById('date_requested_sent').value = date_requested;
document.getElementById('sender_update').value = status;
}


</script>