  

<?php
session_start(); ?>
<?php
include("database.php");
    $username1 = $_POST["reg-username"] ;
    $pass1 = $_POST["reg-password"] ;
    $pass2 = $_POST["conf-password"] ;
    echo "sdfafsf{$username1}";
    if ($pass1 == $pass2) {
        $hash = password_hash($pass1, PASSWORD_DEFAULT);
        $query = "Insert into users (user, Password) values ('$username1' , '$hash')";
        // try{
            mysqli_query($conn,$query);
            $_SESSION["username"] = $username1;
            
            header("Location: home.php");
        // }
        // catch (mysqli_sql_exception) {
        //     echo "Something went wrong!!";
        // }
    
    }
    else{
        echo "Password didnt matched";  
    }
?>