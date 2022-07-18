<script type="text/javascript">
	
const register_resident =()=>{
	var name = document.getElementById('name').value;
	var address = document.getElementById('address').value;
	var date_of_birth = document.getElementById('date_of_birth').value;
	var age = document.getElementById('age').value;
	var gender = document.getElementById('gender').value;
	var civil_status = document.getElementById('civil_status').value;
	var citizenship = document.getElementById('citizenship').value;
	var occupation = document.getElementById('occupation').value;
	var register_voters = document.getElementById('register_voters').value;

	if (name == '') {
swal('Information','Please Input Name','info');		
	}else if(address == ''){
swal('Information','Please Input Address','info');
	}else if(date_of_birth == ''){
swal('Information','Please Input Date of Birth','info');
	}else if(age == ''){
swal('Information','Please Input Age','info');
	}else if(gender == ''){
swal('Information','Please Select Gender','info');
	}else if(civil_status == ''){
swal('Information','Please Select Status','info');
	}else if(citizenship == ''){
swal('Information','Please Input Citizenship','info');
	}else if(occupation == ''){
swal('Information','Please Input Occupation','info');
	}else if(register_voters == ''){
swal('Information','Please Input Register Voters','info');
	}else{

	$.ajax({
		url: '../../process/admin/resident.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'add_resident',
                    name:name,
					address:address,
					date_of_birth:date_of_birth,
					age:age,
					gender:gender,
					civil_status:civil_status,
					citizenship:citizenship,
					occupation:occupation,
                    register_voters:register_voters
                },success:function(response){

                   if (response == 'Already Exist') {
                   	swal('Information','Resident Already Exist!','info');
                   	search_resident();
                   }
                   else if (response == 'success') {
                   	swal('Success','Successfully Registered!','success');
                    search_resident();
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});
}
}	

const search_resident =()=>{
	var name = document.getElementById('names').value;
	$.ajax({
      url: '../../process/admin/resident.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_resident',
                    name:name
                },success:function(response){
                   document.getElementById('list_of_resident').innerHTML = response;
                }
   });
}

const get_resident_details =(param)=>{
	var string = param.split('~!~');
    var id = string[0];
	var name = string[1];
	var address = string[2];
	var date_of_birth = string[3];
	var age = string[4];
	var gender = string[5];
	var civil_status = string[6];
	var citizenship = string[7];
	var occupation = string[8];
	var register_voters   = string[9];  
 
document.getElementById('id_resident').value = id;
document.getElementById('name_update').value = name;
document.getElementById('address_update').value = address;
document.getElementById('date_of_birth_update').value = date_of_birth;
document.getElementById('age_update').value = age;
document.getElementById('gender_update').value = gender;
document.getElementById('civil_status_update').value = civil_status;
document.getElementById('citizenship_update').value = citizenship;
document.getElementById('occupation_update').value = occupation;
document.getElementById('register_voters_update').value = register_voters;
}

const update_resident =()=>{
	var id = document.getElementById('id_resident').value;
	var name = document.getElementById('name_update').value;
	var address = document.getElementById('address_update').value;
	var date_of_birth = document.getElementById('date_of_birth_update').value;
	var age = document.getElementById('age_update').value;
	var gender = document.getElementById('gender_update').value;
	var civil_status = document.getElementById('civil_status_update').value;
	var citizenship = document.getElementById('citizenship_update').value;
	var occupation = document.getElementById('occupation_update').value;
	var register_voters = document.getElementById('register_voters_update').value;

	if (name == '') {
swal('Information','Please Input Name','info');		
	}else if(address == ''){
swal('Information','Please Input Address','info');
	}else if(date_of_birth == ''){
swal('Information','Please Input Date of Birth','info');
	}else if(age == ''){
swal('Information','Please Input Age','info');
	}else if(gender == ''){
swal('Information','Please Select Gender','info');
	}else if(civil_status == ''){
swal('Information','Please Select Status','info');
	}else if(citizenship == ''){
swal('Information','Please Input Citizenship','info');
	}else if(occupation == ''){
swal('Information','Please Input Occupation','info');
	}else if(register_voters == ''){
swal('Information','Please Input Register Voters','info');
	}else{

	$.ajax({
		url: '../../process/admin/resident.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'update_resident',
                    id:id,
                    name:name,
					address:address,
					date_of_birth:date_of_birth,
					age:age,
					gender:gender,
					civil_status:civil_status,
					citizenship:citizenship,
					occupation:occupation,
                    register_voters:register_voters
                },success:function(response){

                   if (response == 'Already Exist') {
                   	swal('Information','Data Already Exist!','info');
                   }
                   else if (response == 'success') {
                   	swal('Success','Successfully Updated!','success');
                    search_resident();
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});
}
}



const delete_resident =()=>{
	var id = document.getElementById('id_resident').value;

	$.ajax({
		url: '../../process/admin/resident.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'delete_resident',
                    id:id
                },success:function(response){

                  if (response == 'success') {
                  	swal('Information','Successfully Deleted','info');
                  	search_resident();
                  }else{
                  	swal('Error','Error','error');
                  }
                }
	});
}
</script>