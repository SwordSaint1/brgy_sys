<script type="text/javascript">
$(document).ready(function(){
    search_sent();
})	
const search_sent =()=>{
	var datefrom  = document.getElementById('date_sent_from').value;
	var dateto = document.getElementById('date_sent_to').value;
	var send_by = document.getElementById('send_by').value;

	$.ajax({
      url: '../../process/user/send.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_send_docs',
                    datefrom:datefrom,
					dateto:dateto,
					send_by:send_by
                },success:function(response){
                   document.getElementById('list_of_sent').innerHTML = response;
                     
                }
   });
}

</script>