<?php
 include 'conn.php';
 session_start();
 if (isset($_POST['login_btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $role = $_POST['role'];
    if (empty($username)) {
         echo '<script>
                    var x = confirm("Please Enter Username!");
                    if(x == true){
                        location.replace("login.php");
                    }else{
                        location.replace("login.php");
                    }
                </script>';
    }else if(empty($password)){
         echo '<script>
                    var x = confirm("Please Enter Password!");
                    if(x == true){
                        location.replace("login.php");
                    }else{
                        location.replace("login.php");
                    }
                </script>';
    }
    else{

        $check = "SELECT id,role FROM accounts WHERE BINARY email = '$username' AND BINARY password = '$password'";
        $stmt = $conn->prepare($check);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            
            foreach($stmt->fetchALL() as $x){
                $role = $x['role'];
            }
            if($role == 'user'){
                $_SESSION['username'] = $username;
                header('location: page/user/dashboard.php');
            }else if($role == 'admin'){
                $_SESSION['username'] = $username;
                header('location: page/admin/dashboard.php');    
            }
        }else{ 
             echo '<script>
                    var x = confirm("Wrong Username or Password!");
                    if(x == true){
                        location.replace("login.php");
                    }else{
                        location.replace("login.php");
                    }
                </script>';
        }
    }
 }
 if (isset($_POST['Logout'])) {
    session_unset();
    session_destroy();
    header('location: ../index.php');
 }


?>