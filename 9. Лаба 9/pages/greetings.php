<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Feedback</title>
    <meta name="author" content="Ткачёв Андрей">

    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../images/favicons/site.webmanifest">

    <!--    <link href="../css/bootstrap.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/all.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/colors.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/72af5ff8c1.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="wrapper">
    <header class="header transparent-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg sticky-top navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.html">
                        <img src="../images/favicons/favicon.png" alt="" width="30"
                             class="d-inline-block align-text-top">
                        Ткачёв Андрей
                    </a>
                    <a href="login.html" class="d-flex">Вход</a>
                </div>
            </nav>
        </div>
    </header>

    <section class="hero feedback" id="start">
        <div class="magnifier grd3"></div>
        <div class="container">
            <div class="section-title text-center">
                <h4>Обратная связь</h4>
                <h2>Результат вашего запроса</h2>
            </div>
            <form class="row g-3 needs-validation shadow p-3 mb-5 bg-body rounded" novalidate method="post"
                  action="./feedback.php">
                <div class="form-floating col-md-4">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Фамилия" name="surname"
                           readonly value="<?php echo $_POST["surname"] ?>">
                    <label for="validationCustom01" class="form-label">Фамилия</label>
                </div>
                <div class="form-floating col-md-4">
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Имя" name="firstname"
                           readonly value="<?php echo $_POST["firstname"] ?>">
                    <label for="validationCustom02" class="form-label">Имя</label>
                </div>
                <div class="form-floating col-md-4">
                    <input type="text" class="form-control" id="validationCustom0" placeholder="Отчество"
                           name="lastname" readonly value="<?php echo $_POST["lastname"] ?>">
                    <label for="validationCustom0" class="form-label">Отчество</label>
                </div>
                <div class="form-floating col-md-6">
                    <input type="hidden" class="form-control" id="validationCustom03" placeholder="email@example.com"
                           readonly name="email" required value="<?php echo $_POST["email"] ?>">
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Вложения</label>
                    <input type="text" class="form-control" id="validationCustom05" name="files" placeholder="Вложения"
                           readonly value="<?php echo $_POST["files"] ?>">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Напишите своё сообщение сюда" id="floatingTextarea"
                              name="message" readonly><?php echo $_POST["message"] ?></textarea>
                    <label for="floatingTextarea">Сообщение</label>
                </div>
                <div class="form-floating">
                    <div class="form-check">
                        <input class="form-check-input" type="hidden" name="promotion" readonly
                               value="<?php echo $_POST["promotion"] ?>" id="flexRadioDefault1" required>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Заполнить снова</button>
                </div>
            </form>
        </div>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>