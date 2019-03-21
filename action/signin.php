<?php
session_start();

    include('db/db.php');
    
    $Passwords = $_POST['password'];
    $Email = $_POST['name'];
    
    if(strlen($Passwords) > 4){
        $sql = "SELECT * FROM tbl_website WHERE email = '".$Email."' AND passwords = '".$Passwords."'";
        //$sql = "INSERT INTO users (Name, Email, Passwords, Typess) VALUES ('".$Name."', '".$Email."', '".$Passwords."', '".$type."')";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $id = $row['ID'];
                $type = $row['Typess'];
                $Email = $row['Email'];
                $Name = $row['Name'];
            }
            
            $_SESSION["id"] = $id;
            $_SESSION["type"] = $type;
            $_SESSION["email"] = $Email;
            $_SESSION["name"] = $Name;
            
            header('Location: http://localhost/web6/catagory.php');
        }else{
            echo "Error Somthong";
        }
    }else{
        echo "Password Notmatch";
    }
    
    //var_dump($result);
?>