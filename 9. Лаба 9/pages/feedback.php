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
                <h2>Отправляйте ваши вопросы и пожелания</h2>
            </div>
            <form class="row g-3 needs-validation shadow p-3 mb-5 bg-body rounded" novalidate method="post"
                  action="./greetings.php">
                <div class="form-floating col-md-4">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Фамилия" name="surname"
                           required value="<?php echo $_POST["surname"] ?>">
                    <label for="validationCustom01" class="form-label">Фамилия</label>
                    <div class="valid-feedback">
                        Всё верно
                    </div>
                    <div class="invalid-feedback">
                        Что-то пошло не так
                    </div>
                </div>
                <div class="form-floating col-md-4">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Фамилия"
                           name="firstname"
                           required value="<?php echo $_POST["firstname"] ?>">
                    <label for="validationCustom02" class="form-label">Имя</label>
                    <div class="valid-feedback">
                        Всё верно
                    </div>
                    <div class="invalid-feedback">
                        Что-то пошло не так
                    </div>
                </div>
                <div class="form-floating col-md-4">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Фамилия"
                           name="lastname"
                           required value="<?php echo $_POST["lastname"] ?>">
                    <label for="validationCustom0" class="form-label">Отчество</label>
                </div>
                <div class="form-floating col-md-6">
                    <input type="email" class="form-control" id="validationCustom03" placeholder="email@example.com"
                           name="email" required value="<?php echo $_POST["email"] ?>">
                    <label for="validationCustom03" class="form-label">Email</label>
                    <div class="valid-feedback">
                        Всё верно
                    </div>
                    <div class="invalid-feedback">
                        Что-то пошло не так
                    </div>
                </div>
                <div class="form-floating col-md-3">
                    <select class="form-select" id="validationCustom04" name="messageTarget" required>
                        <option selected disabled value="">Выберите</option>
                        <option value="1">Вопрос</option>
                        <option value="2">Пожелание</option>
                        <option value="3">Жалоба</option>
                    </select>
                    <label for="validationCustom04" class="form-label">Цель сообщения</label>
                    <div class="valid-feedback">
                        Всё верно
                    </div>
                    <div class="invalid-feedback">
                        Что-то пошло не так
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Вложения</label>
                    <input type="file" class="form-control" id="validationCustom05" name="files" placeholder="Вложения"
                           multiple>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Напишите своё сообщение сюда" id="floatingTextarea"
                              name="message" required></textarea>
                    <label for="floatingTextarea">Сообщение</label>
                </div>
                <label>Как вы узнали обо мне?</label>
                <div class="form-floating">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="promotion" id="flexRadioDefault1"
                               value="internet" required <?php if ($_POST["promotion"] == "internet") echo 'checked' ?>>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Из интернета
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="promotion" id="flexRadioDefault2"
                               value="friends" required <?php if ($_POST["promotion"] == "friends") echo 'checked' ?>>
                        <label class="form-check-label" for="flexRadioDefault2">
                            От друзей
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="promotion" id="flexRadioDefault3"
                               value="other" required <?php if ($_POST["promotion"] == "other") echo 'checked' ?>>
                        <label class="form-check-label" for="flexRadioDefault3">
                            Другое
                        </label>
                    </div>
                    <div class="valid-feedback">
                        Всё верно
                    </div>
                    <div class="invalid-feedback">
                        Выберите один вариант
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                               name="personalDataAgreement" required>
                        <label class="form-check-label" for="invalidCheck">
                            Согласен на обработку персональных данных
                        </label>
                        <div class="valid-feedback">
                            Всё верно
                        </div>
                        <div class="invalid-feedback">
                            Вам нужно дать согласие на обработку данных
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Отправить</button>
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
<script>
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
</body>
</html>