<script type="text/javascript">

$(document).ready(function(){
    search_pending_docs();
})	
const search_pending_docs =()=>{
	var datefrom  = document.getElementById('date_sent_date_from').value;
	var dateto = document.getElementById('date_sent_date_to').value;

	$.ajax({
      url: '../../process/user/pending_docs.php',
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

const get_docs_details =(param)=>{
    var string = param.split('~!~');
    var id = string[0];
    var file_name = string[1];
    var file_type = string[2];
    var date_sent = string[3];
    var file = '../../process/user/' + string[4];
    var send_by = string[5];
    var status = string[6]; 

 $('#preview_docs').attr('href',file)

document.getElementById('id_docs').value = id;
document.getElementById('type_docs').value = file_type;
document.getElementById('date_sent_update').value = date_sent;
document.getElementById('prev_docs').value = file_name;
document.getElementById('sender_update').value = send_by;
document.getElementById('role_accounts_update').value = status;
}

const recieved_docs =()=>{
    var id = document.getElementById('id_docs').value;
    var date_recieved = document.getElementById('date_recieved').value;
    $.ajax({
        url: '../../process/user/pending_docs.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'recieved_docs',
                    id:id,
                    date_recieved:date_recieved
                },success:function(response){

                  if (response == 'success') {
                    swal('Success','Successfully Recieved!','success');
                    search_pending_docs();
                  }else{
                    swal('Error','Error','error');
                  }
                }
    });

}
</script>