<script type="text/javascript">

$(document).ready(function(){
    search_sent_docs();
})	
const search_sent_docs =()=>{
	var datefrom  = document.getElementById('date_sent_docs_date_from').value;
	var dateto = document.getElementById('date_sent_docs_date_to').value;

	$.ajax({
      url: '../../process/admin/sent_docs.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_sent_docs',
                    datefrom:datefrom,
					dateto:dateto
                },success:function(response){
                   document.getElementById('list_of_sent_docs').innerHTML = response;
                     
                }
   });
}

</script>