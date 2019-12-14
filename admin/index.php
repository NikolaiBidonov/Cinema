<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>
<body>
<?php include ('../Database.php');?>
<?php  $pdo = new DataBase;?>
<?php  $pdo->connect();?>

<form name="filter" action="index.php" method="GET">
<input type="text" name="filter" id="">Отфильтровать таблицу по имени
<button type="submit">Применить</button>  
</form>

<?php $nameFilter = $_GET['filter']; ?> 
<table border="1" cellspacing="0">
        <thead>
            <th>ID</th>
            <th>Имя</th>
            <th>E-mail</th>
            <th>Телефон</th>
            <th>Подарок</th>
            <th>Комментарий</th>
            <?php foreach ($pdo->showRecords($nameFilter) as $row) { ?>
            <tr><td><?php echo  $row['id'] ?></td>
            <td><?php echo  $row['name'] ?></td>
            <td><?php echo  $row['email'] ?></td>
            <td><?php echo  $row['phone'] ?></td>
            <td><?php echo  $row['present'] ?></td>
            <td><?php echo  $row['comment'] ?></td></tr>
            <?php } ?>
        </thead>
    </table>
    
</body>
</html>

