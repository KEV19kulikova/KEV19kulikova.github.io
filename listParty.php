<?php
    $title = "Список участников конференции «Технологии ИНТЕРНЕТ 2022»";
    $activel = "active";
    include_once("components/head.php");
    include_once("components/header.php");
    include_once("bd_config.php");
    $results = $mysqli->query("SELECT * FROM participant");
?>
<div class="container-fluid">
   <div class="container px-5">

        <div class="py-3 text-center">
        <h3>Список участников конференции</h3>
        <p class="lead">Ниже представлены участники будущей конференции.
            Хотите тоже принять участие? -> <a href="registration.php" class="link-primary text-decoration-none">Зарегистрируйтесь</a> прямо сейчас!</p>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-primary table-striped table-hover align-middle">
            <thead>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Дата рождения</th>
                <th>Номер телефона</th>
                <th>Email</th>
                <th>Секция конференции</th>
                <th>Выступление с докладом</th>
                <th>Тема доклада</th>
            </thead>
            <tbody>
        <?php
            while($row = $results->fetch_row()){
                print '<tr>';
                print '<td>' .$row[1]. '</td>';
                print '<td>' .$row[2]. '</td>';
                print '<td>' .$row[3]. '</td>';
                if(strtotime($row[7]) > 0){
                    print '<td>' .$row[7]. '</td>';
                }
                else{
                    print '<td> Не указана </td>';
                }
                print '<td>' .$row[4]. '</td>';
                print '<td>' .$row[5]. '</td>';
                print '<td>' .$row[6]. '</td>';
                if($row[8]== 0){
                    print '<td> Нет </td>'; 
                    print '<td> - </td>';
                }
                else{            
                    print '<td> Да </td>';
                    print '<td>' .$row[9]. '</td>';
                }
                print '</tr>';
            }
        ?>
            </tbody>
        </table>
    </div>
</div>
<?php
    include_once("components/footer.php");
?>
