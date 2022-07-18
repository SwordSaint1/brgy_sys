<script type="text/javascript">
$(document).ready(function(){
    search_blotters();
})	
const search_blotters =()=>{
	var datefrom = document.getElementById('recorded_date_from').value;
	var dateto = document.getElementById('recorded_date_to').value;
	var complainant = document.getElementById('complainant').value;
	$.ajax({
      url: '../../process/user/blotter.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_blotter',
                    datefrom:datefrom,
                    dateto:dateto,
                    complainant:complainant
                },success:function(response){
                   document.getElementById('list_of_blotters').innerHTML = response;
                }
   });
}	
</script>