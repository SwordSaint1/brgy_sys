<script type="text/javascript">
$(document).ready(function(){
    search_message();
})     
const search_message =()=>{
    $.ajax({
      url: '../../process/admin/message.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_message',
                },success:function(response){
                   document.getElementById('list_of_message').innerHTML = response;
                }
   });
}
</script>