<?php
$name = $_POST['name'];
$email = $_POST['email'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$name = urldecode($name);
$email = urldecode($email);
$name = trim($name);
$email = trim($email);
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Создаем Telegram-ботов для вашего бизнеса!</title>
</head>

<body>

<div class="wrapper">
	<div class="block-text centered">
    	<h2>Здравствуйте, <i><?php echo $name; ?></i>! <span>Спасибо за вашу заявку на разработку Telegram-бота!</span></h2>
        <p>Вам на емэил <?php echo $email; ?> уже был выслан бриф на разработку бота. Заполните бриф максимально подробно. Это позволит нам   понять, какой примерно бот вам нужен и ускорит процесс разработки концепции бота. Заполненный бриф вышлите нам ответным письмом.</p>

<?php
//echo $name;
 //echo "<br>";
//echo $email;
if (mail("ab@webformyself.com", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email ,"From: info@botlab.info \r\n"))
{     echo "Сообщение успешно отправлено!";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>

<div class="wrapper graybgfoot">
	<footer class="centered">
    	<p>&copy; Разработка Telegram-ботов botlab.info</p>
    </footer>
</div>
</body>
</html>