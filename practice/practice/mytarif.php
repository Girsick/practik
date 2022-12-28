<html>
<head>
    <title>Подключение услуг</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
</head>
<body>
    <a href="index.php"><img src="rt.png"></a>
    <div class="site-section site-block-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <form style="padding: 10px 10px; border-radius: 10px;">
                        <h2 class="font-weight-bold text-black mb-5">Мой тариф</h2>
                        <?php
                        $conn = new mysqli("localhost", "root", "", "practice");
                        if ($conn->connect_error) {
                            die("Ошибка: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM itog";
                        if ($result = $conn->query($sql)) {
                            $rowsCount = $result->num_rows;
                            echo "<table class='table table-hover'><tr><th>ID</th><th>Имя заказчика</th><th>Тариф</th><th>Номер телефона</th><th>Адрес подключения</th></tr>";
                            foreach ($result as $row) {
                                echo "<tr>";
                                echo "<td>" . $row["iditog"] . "</td>";
                                echo "<td>" . $row["nameclient"] . "</td>";
                                echo "<td>" . $row["tarif"] . "</td>";
                                echo "<td>" . $row["phone"] . "</td>";
                                echo "<td>" . $row["addressclient"] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            $result->free();
                        } else {
                            echo "Ошибка: " . $conn->error;
                        }
                        $conn->close();
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.maskedinput.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/aos.js"></script>
</body>
</head>

</html>