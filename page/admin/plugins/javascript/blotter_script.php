<script type="text/javascript">
	
const register_blotter =()=>{
	var date_recorded = document.getElementById('date_recorded').value;
	var complainant = document.getElementById('complainant').value;
	var person_to_complaint = document.getElementById('person_to_complaint').value;
	var complaint = document.getElementById('complaint').value;
	var action_taken = document.getElementById('action_taken').value;
	var status = document.getElementById('status').value;
	var location_of_incedence = document.getElementById('location_of_incedence').value;

	if (date_recorded == '') {
swal('Information','Please Input Date Recorded','info');		
	}else if(complainant == ''){
swal('Information','Please Input Complainant','info');
	}else if(person_to_complaint == ''){
swal('Information','Please Input Person to Complaint','info');
	}else if(complaint == ''){
swal('Information','Please Input Complaint','info');
	}else if(action_taken == ''){
swal('Information','Please Input Action Taken','info');
	}else if(status == ''){
swal('Information','Please Select Status','info');
	}else if(location_of_incedence == ''){
swal('Information','Please Input Location of Incedence','info');
	}else{

	$.ajax({
		url: '../../process/admin/blotter.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'add_blotter',
                    date_recorded:date_recorded,
					complainant:complainant,
					person_to_complaint:person_to_complaint,
					complaint:complaint,
					action_taken:action_taken,
					status:status,
					location_of_incedence:location_of_incedence
                },success:function(response){

                   if (response == 'Already Exist') {
                   	swal('Information','Data Already Exist!','info');
                   	search_blotter();
                   }
                   else if (response == 'success') {
                   	swal('Success','Successfully Registered!','success');
                    search_blotter();
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});
}
}

const search_blotter =()=>{
	var datefrom = document.getElementById('recorded_date_from').value;
	var dateto = document.getElementById('recorded_date_to').value;
	$.ajax({
      url: '../../process/admin/blotter.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_blotter',
                    datefrom:datefrom,
                    dateto:dateto
                },success:function(response){
                   document.getElementById('list_of_blotter').innerHTML = response;
                }
   });
}	

const get_blotter_details =(param)=>{
	var string = param.split('~!~');
    var id = string[0];
	var date_recorded = string[1];
	var complainant = string[2];
	var person_to_complaint = string[3];
	var complaint = string[4];
	var action_taken = string[5];
	var status = string[6];
	var location_of_incedence = string[7];
 
document.getElementById('id_blotter').value = id;
document.getElementById('date_recorded_update').value = date_recorded;
document.getElementById('complainant_update').value = complainant;
document.getElementById('person_to_complaint_update').value = person_to_complaint;
document.getElementById('complaint_update').value = complaint;
document.getElementById('action_taken_update').value = action_taken;
document.getElementById('status_update').value = status;
document.getElementById('location_of_incedence_update').value = location_of_incedence;
}	

const update_blotter =()=>{
	var id =document.getElementById('id_blotter').value;
	var date_recorded =document.getElementById('date_recorded_update').value;
	var complainant =document.getElementById('complainant_update').value;
	var person_to_complaint =document.getElementById('person_to_complaint_update').value;
	var complaint =document.getElementById('complaint_update').value ;
	var action_taken =document.getElementById('action_taken_update').value;
	var status =document.getElementById('status_update').value;
	var location_of_incedence =document.getElementById('location_of_incedence_update').value;

	if (date_recorded == '') {
swal('Information','Please Input Date Recorded','info');		
	}else if(complainant == ''){
swal('Information','Please Input Complainant','info');
	}else if(person_to_complaint == ''){
swal('Information','Please Input Person to Complaint','info');
	}else if(complaint == ''){
swal('Information','Please Input Complaint','info');
	}else if(action_taken == ''){
swal('Information','Please Input Action Taken','info');
	}else if(status == ''){
swal('Information','Please Select Status','info');
	}else if(location_of_incedence == ''){
swal('Information','Please Input Location of Incedence','info');
	}else{

	$.ajax({
		url: '../../process/admin/blotter.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'update_blotter',
                    id:id,
                    date_recorded:date_recorded,
					complainant:complainant,
					person_to_complaint:person_to_complaint,
					complaint:complaint,
					action_taken:action_taken,
					status:status,
					location_of_incedence:location_of_incedence
                },success:function(response){

                   if (response == 'Already Exist') {
                   	swal('Information','Data Already Exist!','info');
                   }
                   else if (response == 'success') {
                   	swal('Success','Successfully Updated!','success');
                    search_blotter();
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});
}
}

const delete_blotter =()=>{
	var id = document.getElementById('id_blotter').value;

	$.ajax({
		url: '../../process/admin/blotter.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'delete_blotter',
                    id:id
                },success:function(response){

                  if (response == 'success') {
                  	swal('Information','Successfully Deleted','info');
                  	search_blotter();
                  }else{
                  	swal('Error','Error','error');
                  }
                }
	});
}
</script>