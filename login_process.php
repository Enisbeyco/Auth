<?php
session_start();
include("config.php");

if (isset($_POST['login-btn']))
{
    $email = trim($_POST['email'] ?? '');
    $pass = $_POST['pass'] ?? '';

    if(empty($email) || empty($pass))
    {
        echo "Boş Bırakmayın";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "Geçerli bir e-posta adresi girin.";
    }
    else
    {
        $SQLUsers = $conn->prepare('SELECT * FROM users WHERE email=:email');
        $SQLUsers->execute(['email' =>$email]);

        $user = $SQLUsers->fetch(PDO::FETCH_ASSOC);

        if (!$user)
        {
            echo "E-posta veya şifre hatalı";
        }
        elseif (password_verify($pass,$user['pass']))
        {
            session_regenerate_id(true);
            $_SESSION['ID'] = $user['ID'];
            $_SESSION['email'] = $user['email'];
            header("Location: index.php");
            exit;
        }
        else
        {
            echo "e-posta veya şifre hatalı";
        }
    }
}
?>