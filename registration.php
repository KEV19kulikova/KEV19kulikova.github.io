<?php    
    $title = "Регистрация на конференцию «Технологии ИНТЕРНЕТ 2022»";
    $activer = "active";
    include_once("components/head.php");
    include_once("components/header.php");
    include_once("bd_config.php");
?>

<div class="container-fluid">
    <div class="container mx-auto px-5">
        <?php  
        //Регистрация
        if(isset($_POST['surname'])){
            $surname = $_POST['surname'];
            $name = $_POST['name'];
            $otch = $_POST['otch'];
            $birthday = $_POST['birthday'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];
            $section = $_POST['section'];
            $report = $_POST['report'];
            $theme = $_POST['theme'];

            $mysqli->query("INSERT INTO participant(surname, name, otchestvo, birthday, telephone, email, section, report, theme) VALUES ('$surname',
            '$name', '$otch', '$birthday', '$telephone', '$email', '$section', '$report', '$theme')");
            ?>

        <div class="py-3 text-center">
            <h3>Вы ввели следующие данные: </h3>
        </div>

        <div class="row px-5 lead text-break fs-4">
            <div class="col-md-7 px-5 py-3 col-lg-9 mx-auto shadow border border-3 rounded-3 bg-secondary bg-opacity-10" >
  
                <div class="row g-1">
                    <div class="col-sm-6">
                        <p><strong>Фамилия:</strong> <?=$surname?></p>
                    </div>

                    <div class="col-sm-6">
                        <p><strong>Имя:</strong> <?=$name?></p>
                    </div>

                    <div class="col-sm-6">
                        <p><strong>Отчество:</strong> <?=$otch?></p>
                    </div>

                    <div class="col-sm-6">
                        <?php
                        if(empty($birthday)){
                            echo '<p"><strong>Дата рождения:</strong> не указана</p>';
                        }
                        else{
                            echo '<p"><strong>Дата рождения:</strong> ' .$birthday. '</p>';
                        }
                        ?>
                    </div>

                    <div class="col-sm-6">
                        <p><strong>Номер телефона:</strong> +<?=$telephone?></p>
                    </div>

                    <div class="col-sm-6">
                        <p><strong>Email:</strong> <?=$email?></p>
                    </div>

                    <div class="col-sm-6">
                        <p><strong>Секция конференции:</strong> <?=$section?></p>
                    </div>

                    <div class="col-sm-6">
                        <?php
                        if(empty($theme)){
                            echo '<p><strong>Вы не выступаете с докладом.</strong></p>';
                        }
                        else{
                            echo '<p><strong>Тема доклада:</strong> ' .$theme. '</p>';
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>

        <div class="py-4 text-center">
            <p class="lead">Вы успешно зарегистрированы. Теперь Вы можете увидеть себя в 
                <a href="listParty.php" class="link-primary text-decoration-none">списке участников.</a></p>
           <img class="d-block mx-auto mb-4" src="components/regsecc.png" width="150" height="150">
        </div>

        <?php
        }
        else { ?>

        <div class="py-3 text-center">
            <h3>Заявка на участие в конференции</h3>
            <p class="lead">Для того чтобы принять участие в данной конференции, 
                необходимо зарегистрироваться, заполнив анкету, представленную ниже.</p>
        </div>

        <div class="row px-5">
            <div class="col-md-7 px-5 col-lg-8 mx-auto">
                <h4 class="mb-4 border rounded-3 shadow-sm bg-primary px-2 py-1 bg-opacity-10">Анкета участника</h4>

                <form class="needs-validation mg-4" novalidate="" name="myform" action="registration.php" method="post">
                    <div class="row g-3">

                        <div class="col-sm-6">
                            <label for="surname" class="form-label">Фамилия</label>
                            <input type="text" name="surname" class="form-control" pattern="[А-Яа-яЁё]{2,}" placeholder="Иванов" required>
                            <div class="invalid-feedback">
                                Фамилия обязательна для заполнения. Заполните поле в указанном формате.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="name" class="form-label">Имя</label>
                            <input type="text" name="name" class="form-control"  pattern="[А-Яа-яЁё]{2,}" placeholder="Иван" required>
                            <div class="invalid-feedback">
                                Имя обязательно для заполнения. Заполните поле в указанном формате.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="otch" class="form-label">Отчество</label>
                            <input type="text" name="otch" class="form-control" pattern="[А-Яа-яЁё]{2,}" placeholder="Иванович" required>
                            <div class="invalid-feedback">
                                Отчество обязательно для заполнения. Заполните поле в указанном формате.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="birthday" class="form-label">Дата рождения <span class="text-muted">(Необязательно)</span></label>
                            <input type="date" name="birthday" class="form-control">
                        </div>

                        <h6 class="mb-0">Контактные данные</h6>
                        <hr class="my-1">

                        <div class="col-sm-6">
                            <label for="telephone" class="form-label">Номер телефона</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">+</span>
                                <input type="tel" name="telephone" class="form-control" pattern="([7]{1})([0-9]{10})" placeholder="79999999999" required>
                                <div class="invalid-feedback">
                                    Номер телефона обязателен для заполнения. Заполните поле в указанном формате.
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="email" class="form-label">Адрес электронной почты</label>
                            <input type="email" name="email" class="form-control" pattern="[A-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="example123!@yandex.ru" required>
                            <div class="invalid-feedback">
                                Адрес электронной почты обязателен для заполнения. 
                                Пожалуйста, введите актуальный адрес электронной почты для получения информации о конференции.
                            </div>
                        </div>

                        <h6 class="mb-0">Условия участия</h6>
                        <hr class="my-1">

                        <div class="col-sm-6">
                            <label for="section" class="form-label">Секция конференции</label>
                            <select class="form-select" name="section" id="section">
                                <option value="математика">математика</option>
                                <option value="физика">физика</option>
                                <option value="информатика">информатика</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label">Выступаете с докладом?</label>
                            <div class="form-check">
                                <input type="radio" name="report" id="report0" value ="0" class="form-check-input" checked onClick="Show(0)">
                                <label class="form-check-label" for="report0">Нет</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="report" id="report1" value ="1" class="form-check-input" onClick="Show(1)">
                                <label class="form-check-label" for="report1">Да</label>
                            </div>
                        </div>

                    </div>

                    <div id ="divtheme" class="col-12" style ='display: none'>
                        <label for="theme" class="form-label">Тема доклада</label>
                        <input type="text" name="theme" id="theme" class="form-control" pattern="^[А-Яа-яЁёA-z.!-?\s]{5,}$">
                        <div class="invalid-feedback">
                            Тема доклада обязательна для заполнения.
                        </div>
                    </div>

                    <div class="btn-group py-3 btn-group-lg w-100" role="group" aria-label="Basic outlined example">
                        <button class="w-100 btn btn-primary" type="submit">Зарегистрироваться</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
      
    <?php
        }?>
</div> 
    
<?php
    include_once("components/footer.php");
?>

    <!--JavaScript для управ. видимостью поля Тема доклада-->
<script>
    function Show(e) {
        divtheme=document.getElementById("divtheme");
        theme= document.getElementById("theme");
        if (e) {
            divtheme.style.display="block";
            theme.required = true;}
        else {
            divtheme.style.display="none";
            theme.required = false;}
        }
</script>
<script src="form-validation.js" crossorigin="anonymous"></script>