<?php
    $title = "Главная - о конференции «Технологии ИНТЕРНЕТ 2022»";
    $active = "active";
    include_once("components/head.php");
    include_once("components/header.php");
?>

<div class="container-fluid">
    <div class="container mx-auto px-5 lead">
        <div class="py-3 text-start">

            <h3 class="text-center">Добро пожаловать на страницу конференции «Технологии ИНТЕРНЕТ 2022»!</h3>
            <p class="text-center" align="justify">Данная конференция является ежегодным собранием, посвященным изучению и обсуждению развития 
                интернет-технологий в разных профильных направлениях - математике, физике и информатике. Для участия в конференции достаточно
                просто оставить заявку, <a href="registration.php" class="link-primary text-decoration-none">зарегистрировавшись.</a> 
                Также Вы можете принять активное участие в выступлениях, подготовив доклад на актаульную тему.
            </p>

            <img class="d-block mx-auto mb-4" src="components/pngwing.com.png" alt="" width="380" height="270">
            <p align="justify">Интернет-технологии – это разного рода технологии и сервисы, которые позволяют осуществляеть 
                всю деятельность в компьютерной сети Интернет.
                Если выразиться проще, интернет-технологии – это всё, с чем мы работаем в Интернете. 
                В первую очередь – это всевозможные сайты, форумы, блоги… Также к интернет-технологиям относятся программное обеспечение и всевозможные механизмы для работы с «всемирной паутиной». 
            </p>

            <p align="justify">Интернет-технологии представляют собой сложную систему 
                взаимодействия двух составляющих: физической и логической.
            </p>

            <div class="row g-1">
                <div class="col-sm-6">
                    <p class="mb-1 border rounded-3 bg-primary px-1 py-1 bg-opacity-10">Физическая составляющая интернет - технологий включает в себя:</p>
                    <ol>
                        <li>Сеть Интернет</li>
                            <ul>
                                <li>Протоколы TCP/IP.</li>
                                <li>Иерархия доменных имен сети Интернет.</li>
                                <li>Опорная сеть Интернета. Маршрутизация.</li>
                            </ul>
                        </li>

                        <li>Программное обеспечение в Интернете</li>
                            <ul>
                                <li>Сетевые операционные системы.</li>
                                <li>Специальное программное обеспечение для соединения с Интернетом.</li>
                                <li>Прикладные протоколы.</li>
                            </ul>
                        </li>

                        <li>Компьютеры (серверы и клиенты) в Интернете</li>
                            <ul>
                                <li>Серверы электронной почты</li>
                                <li>Веб – серверы.</li>
                                <li>FTP-серверы.</li>
                                <li>Серверы телеконференций.</li>
                                <li>Серверы мгновенных сообщений.</li>
                            </ul>
                        </li>

                        <li>Цифровые линии связи</li>
                            <ul>
                                <li>Выбор провайдера. Подключение к Интернету.</li>
                            </ul>
                        </li>

                        <li>Доступ в Интернет</li>
                            <ul>
                                <li>Соединение сетевой карты с локальной сетью.</li>
                                <li>Кабельные системы Ethernet.</li>
                            </ul>
                        </li>

                        <li>Удаленный доступ к глобальным сетям</li>
                            <ul>
                                <li>Доступ «компьютер – сеть».</li>
                                <li>Доступ «сеть-сеть».</li>
                                </ul>
                            </li>
                        </ol>
                    </div>

                <div class="col-sm-6">
                    <p class="mb-1 border rounded-3 bg-primary px-1 py-1 bg-opacity-10">Логическая составляющая интернет - технологий включает в себя:</p>
                    <ol>
                        <li>Интернет - сервисы</li>
                            <ul>
                                <li>WWW - Всемирная паутина.</li>
                                <li>Электронная почта. Системы телеконференций.</li>
                                <li>Передача данных.</li>
                                <li>On-line чат.</li>
                                <li>Передача быстрых сообщений.</li>
                                <li>Аудио- и Видеоконференции.</li>
                                <li>Голосовое общение.</li>
                            </ul>
                        </li>

                        <li>Работа в Интернете</li>
                            <ul>
                                <li>Браузеры.</li>
                                <li>Поисковые системы. Навигация в Интернете.</li>
                                <li>Просмотр страниц в браузере.</li>
                            </ul>
                        </li>

                        <li>Информационные ресурсы в Интернете</li>
                            <ul>
                                <li>Веб -страницы, интернет-магазины, интернет-порталы. Веб – пространство.</li>
                                <li>URL и протоколы передачи данных, адресация.</li>
                                <li>Создание Веб-сайтов. Языки Веб-программирования.</li>
                                <li>Записи в Интернете. Представительство.</li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include_once("components/footer.php");
    ?>