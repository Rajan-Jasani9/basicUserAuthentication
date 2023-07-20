<?php
session_start(); ?>
<?php
    include("database.php");
    $username1 = $_POST["login-username"] ;
    $pass1 = $_POST["login-password"] ;
    
        
        $query = "SELECT * FROM USERS where user = '$username1'";
        // try{
            $result = mysqli_query($conn,$query);

            if(mysqli_num_rows($result)>0){

                $row  = mysqli_fetch_assoc($result);
                if (password_verify($pass1,$row['Password'])){
                    $_SESSION["username"] = $username1;
                    header("Location: home.php");
                }
                else{
                    echo"password incorrect";
                }
            }
            else{
                echo "No Such User Found!!";
            }
            
    
?>