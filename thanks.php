<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/thanks.css">
    <title>Спасибо</title>
</head>
<body>
    <?php if (isset($_GET['name'])) { ?>
        <p class="text">Спасибо, <?php echo $_GET['name'] ?>. Мы свяжемся с Вами в ближайшее время по номеру телефона <?php echo $_GET['phone'] ?></p>
    <?php } else {?>
    <?php header('location: /'); ?>
    <?php } ?>
    
    <div class="button-wrap">
    <button id="toMain" class="button">Вернуться на главную</button>
    </div>
    <script src="js/thanks.js"></script>
    
</body>
</html>