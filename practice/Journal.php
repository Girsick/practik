<?php
if (isset($_POST["name"]) && isset($_POST["dolzhnost"]) && isset($_POST["calendar"]) && isset($_POST["vremiaprixod"]) && isset($_POST["vremiauxod"]) && isset($_POST["opozdal"]) && isset($_POST["neprishel"]) && isset($_POST["vremiaobsh"])) {
      
    $conn = new mysqli("localhost", "root", "", "Vremia");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $nameclient = $conn->real_escape_string($_POST["name"]);
    $dolzhnost = $conn->real_escape_string($_POST["dolzhnost"]);
    $calendar = $conn->real_escape_string($_POST["calendar"]);
    $vremiaprixod = $conn->real_escape_string($_POST["vremiaprixod"]);
    $vremiauxod = $conn->real_escape_string($_POST["vremiauxod"]);
    $opozdal = $conn->real_escape_string($_POST["opozdal"]);
    $neprishel = $conn->real_escape_string($_POST["neprishel"]);
    $vremiaobsh = $conn->real_escape_string($_POST["vremiaobsh"]);
    $sql = "INSERT INTO Journal (nameclient, dolzhnost, calendar, vremiaprixod, vremiauxod, opozdal, neprishel, vremiaobsh) VALUES ('$nameclient', '$dolzhnost', '$calendar', '$vremiaprixod', '$vremiauxod', '$opozdal', '$neprishel', '$vremiaobsh')";
    if($conn->query($sql)){
        echo "<script>alert('Ваша заявка принята')</script>";
        require 'index.php';
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>
    