<?php

include("config.php");

if (isset($_POST['btn']))
{
    $firstname = trim($_POST['firstname'] ?? '');
    $lastname = trim($_POST['lastname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pass = $_POST['pass'] ?? '';
    
    if (empty($firstname) || empty($lastname) || empty($email) || empty($pass))
    {
        echo "Lütfen Tüm alanları doldurun !";
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "E-posta Geçersiz";
    }
    else
    {
        $hashpass = password_hash($pass,PASSWORD_DEFAULT);
        $create_sql = $conn->prepare("INSERT INTO users (firstname,lastname,email,pass) VALUES 
        (:firstname,:lastname,:email,:pass)");
        
        $result = $create_sql->execute([
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':email' => $email,
            ':pass' => $hashpass
        ]);

        if ($result)
        {
            header("Location: login.php");
            exit;
        }
        else
        {
            echo "Kayıt olunurken hata oluştu..";
        }
    }
}
?>