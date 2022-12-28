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
                        <?php $conn = new mysqli("localhost", "root", "", "practice");

                        $sql = "SELECT * FROM lichnoe";
                        $result = $conn->query($sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<h5 class='font-weight-bold'>Лицевой счет: </h5>";
                            echo "<output>" . "  " . $row['clientnum'] . "</output>";
                            echo "<br><h5 class='font-weight-bold'>ФИО абонента: </h5>";
                            echo "<output>" . "  " . $row['name'] . "</output>";
                            echo "<br><h5 class='font-weight-bold'>Ваш баланс: </h5>";
                            echo "<output>" . "  " .  $row['balance'] . " руб." . "</output>";
                        }
                        ?>
                    </form>
                    <div class="col">
                        <a style="color: white;" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Подключиться</a>
                        <a href="mytarif.php" class="btn btn-primary">Мои тарифы</a>
                    </div>
                </div>
                <div class="col-sm">
                    <form style="padding: 10px 10px; border-radius: 10px;">
                        <?php $conn = new mysqli("localhost", "root", "", "practice");

                        $sql = "SELECT * FROM tarifs";
                        $result = $conn->query($sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<h5 class='font-weight-bold'>Название тарифа: </h5>";
                            echo "<output>" . "  " . $row['nametarif'] . "</output>";
                            echo "<br><h5 class='font-weight-bold'>Скорость: </h5>";
                            echo "<output>" . "  " . $row['speed'] . "</output>";
                            echo "<br><h5 class='font-weight-bold'>Стоимость (в мес.): </h5>";
                            echo "<output>" . "  " .  $row['price'] . " руб." . "</output><br><br>";
                        }
                        ?>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Оставьте заявку на подключение</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="bg-light" action="zakaz.php" method="post" style="padding: 10px 10px; border-radius: 10px;">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Выберите заказчика</label>

                            <?php $conn = new mysqli("localhost", "root", "", "practice");

                            $sql = "SELECT * FROM lichnoe";
                            $sql2 = "SELECT * FROM tarifs";
                            $result = $conn->query($sql);
                            $result2 = $conn->query($sql2);

                            echo "<select name='name' class='form-control'><option>Выберите...</option>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option>" . $row['name'] . "</option>";
                            }
                            echo "</select>";
                            echo "</div>";
                            echo "<div class='form-group'>";
                            echo "<label for='exampleFormControlInput3'>Выберите тариф</label>";
                            echo "<select name='tarif' class='form-control'><option>Выберите...</option>";
                            while ($row = mysqli_fetch_array($result2)) {
                                echo "<option>" . $row['nametarif'] . "</option>";
                            }
                            echo "</select>";
                            echo "</div>";
                            ?>

                        <div class="form-group">
                            <label for="exampleFormControlInput3">Номер телефона</label>
                            <input id="phone" name="phone" type='text' onkeypress='validate(event)' class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Адрес подключения</label>
                            <input id="time" name="address" type='text' class="form-control" placeholder="г Санкт-Петербург, пр Большевиков, д 22">
                        </div>
                        <input type="submit" value="Отправить" class="btn btn-success">
                    </form>
                    </div>
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