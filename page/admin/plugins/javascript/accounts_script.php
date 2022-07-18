<script type="text/javascript">
	
const register_user =()=>{
	var email = document.getElementById('email_accounts').value;
	var password = document.getElementById('password_accounts').value;
	var full_name = document.getElementById('full_name_accounts').value;
	var address = document.getElementById('address_accounts').value;
	var phone_no = document.getElementById('phone_no_accounts').value;
	var role = document.getElementById('role_accounts').value;

	if (email == '') {
swal('Information','Please Input Date Recorded','info');		
	}else if(password == ''){
swal('Information','Please Input Complainant','info');
	}else if(full_name == ''){
swal('Information','Please Input Person to Complaint','info');
	}else if(address == ''){
swal('Information','Please Input Complaint','info');
	}else if(phone_no == ''){
swal('Information','Please Input Action Taken','info');
	}else if(role == ''){
swal('Information','Please Select Status','info');
	}else{

	$.ajax({
		url: '../../process/admin/accounts.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'add_accounts',
                    email:email,
					password:password,
					full_name:full_name,
					address:address,
					phone_no:phone_no,
					role:role
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

const search_user =()=>{
	var full_name = document.getElementById('full_name_user_search').value;
	var role = document.getElementById('role').value;
	$.ajax({
      url: '../../process/admin/accounts.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_accounts',
                    full_name:full_name,
                    role:role
                },success:function(response){
                   document.getElementById('list_of_accounts').innerHTML = response;
                }
   });
}

const get_accounts_details =(param)=>{
	var string = param.split('~!~');
    var id = string[0];
	var email = string[1];
	var password = string[2];
	var full_name = string[3];
	var address = string[4];
	var phone_no = string[5];
	var role = string[6]; 
 
document.getElementById('id_accounts').value = id;
document.getElementById('email_accounts_update').value = email;
document.getElementById('password_accounts_update').value = password;
document.getElementById('full_name_accounts_update').value = full_name;
document.getElementById('address_accounts_update').value = address;
document.getElementById('phone_no_accounts_update').value = phone_no;
document.getElementById('role_accounts_update').value = role;
}

const update_user =()=>{
	var id = document.getElementById('id_accounts').value;
	var email = document.getElementById('email_accounts_update').value;
	var	password = document.getElementById('password_accounts_update').value;
	var	full_name = document.getElementById('full_name_accounts_update').value;
	var	address = document.getElementById('address_accounts_update').value;
	var	phone_no = document.getElementById('phone_no_accounts_update').value;
	var	role = document.getElementById('role_accounts_update').value;

	if (email == '') {
swal('Information','Please Input Date Recorded','info');		
	}else if(password == ''){
swal('Information','Please Input Complainant','info');
	}else if(full_name == ''){
swal('Information','Please Input Person to Complaint','info');
	}else if(address == ''){
swal('Information','Please Input Complaint','info');
	}else if(phone_no == ''){
swal('Information','Please Input Action Taken','info');
	}else if(role == ''){
swal('Information','Please Select Status','info');
	}else{

	$.ajax({
		url: '../../process/admin/accounts.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'update_account',
                    id:id,
                    email:email,
					password:password,
					full_name:full_name,
					address:address,
					phone_no:phone_no,
					role:role
                },success:function(response){

                   if (response == 'Already Exist') {
                   	swal('Information','Data Already Exist!','info');
                   }
                   else if (response == 'success') {
                   	swal('Success','Successfully Updated!','success');
                    search_user();
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});
}
}

const delete_user =()=>{
	var id = document.getElementById('id_accounts').value;
	$.ajax({
		url: '../../process/admin/accounts.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'delete_accounts',
                    id:id
                },success:function(response){

                  if (response == 'success') {
                  	swal('Information','Successfully Deleted','info');
                  	search_user();
                  }else{
                  	swal('Error','Error','error');
                  }
                }
	});
}
</script>