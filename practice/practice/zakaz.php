<?php
if (isset($_POST["name"]) && isset($_POST["tarif"]) && isset($_POST["phone"]) && isset($_POST["address"])) {
      
    $conn = new mysqli("localhost", "root", "", "practice");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $nameclient = $conn->real_escape_string($_POST["name"]);
    $tarif = $conn->real_escape_string($_POST["tarif"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $addressclient = $conn->real_escape_string($_POST["address"]);
    $sql = "INSERT INTO itog (nameclient, tarif, phone, addressclient) VALUES ('$nameclient', '$tarif', '$phone', '$addressclient')";
    if($conn->query($sql)){
        echo "<script>alert('Ваша заявка принята')</script>";
        require 'index.php';
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>
    