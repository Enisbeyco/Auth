<?php
try
{
    $host = 'localhost';
    $hostname = 'root';
    $hostpass = '';
    $database = 'uyelik';

    $conn = new PDO("mysql:host=$host;dbname=$database",$hostname,$hostpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)
{
    die("Bağlantı Başarısız");
}
?>