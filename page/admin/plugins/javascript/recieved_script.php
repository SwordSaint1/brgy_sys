<script type="text/javascript">

$(document).ready(function(){
    search_recieved_docs();
})	
const search_recieved_docs =()=>{
	var datefrom  = document.getElementById('date_recieved_date_from').value;
	var dateto = document.getElementById('date_recieved_date_to').value;

	$.ajax({
      url: '../../process/user/recieved_docs.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_recieved_docs',
                    datefrom:datefrom,
					dateto:dateto
                },success:function(response){
                   document.getElementById('list_of_recieved_docs').innerHTML = response;
                     
                }
   });
}

</script>