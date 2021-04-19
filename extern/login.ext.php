<?php

if(isset($_POST["login-submit"])){

    require 'dbh.ext.php';

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM gamecard WHERE username ='".$username."' OR email='".$username."';";
    $res = mysqli_query($conn, $sql);

    if(!$res){
        header("Location: ../ACCOUNT/login.php?error=errorsql");
        exit();

    }else{
        if($row = mysqli_fetch_assoc($res)){
            $pwdCheck = password_verify($password, $row["pwd"]);
            if($pwdCheck==false){
                header("Location: ../ACCOUNT/login.php?error=wrongpswd");
                exit();   
            }else if($pwdCheck==true){
                session_start();
                $_SESSION["userId"] = $row["id"];
                $_SESSION["userName"] = $row["username"];
                $_SESSION["status"] = $row["status"];

                header("Location: ../MESSAGES/login.msg.php?login=success");
                exit(); 

            }
        }else{
            header("Location: ../ACCOUNT/login.php?error=noexist");
            exit(); 
        }


    }

    mysqli_close($conn);

}else{
    header("Location: ../ACCOUNT/login.php");
    exit();
}
















?>