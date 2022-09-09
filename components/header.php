<?php
    include_once("components/head.php");
?>

<header class="d-flex flex-wrap justify-content-center py-4 mb-2 border-bottom"
    style ="background-image: url(https://bizdatax.com/wp-content/uploads/2017/02/QS-Tag-header-post-image-final.png);
    background-size: 20%; background-color: #bdd7ee; background-repeat: no-repeat; background-position: center;">
    <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-display-fill" viewBox="0 0 18 18">
            <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
        </svg> 
        <h1 class="fs-3">Конференция «Технологии ИНТЕРНЕТ 2022»</h1>
    </a>
    <nav class="nav nav-pills " >
        <a class="nav-link <?=$active?>" href="index.php">Главная</a></li>
        <a class="nav-link <?=$activer?>" href="registration.php">Регистрация</a></li>
        <a class="nav-link <?=$activel?>" href="listParty.php">Участники конференции</a></li>
    </nav>
</header>
