<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
		<form action="send.php" method="POST">
			<h1>Обратная свзяь</h1>
			<input type="email" name="email" placeholder="Email"><br>
			<textarea type="message" name="message" placeholder="Введите текст"></textarea><br>
			<input type="submit" name="submit" value="Отправить">
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>