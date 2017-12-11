<?php

	// file_get_contents(__DIR__ . '/phonebook.json') - ищем файл в текущей директории
	$json = file_get_contents(__DIR__ . '/tests/test1.json');

	$test = json_decode($json, true);

	// echo '<br>';
	// echo '<pre>';
	// print_r($test);
	// echo '</pre>';



?>	
<html>
<head>
	<title>Заголовок</title>
</head>
<body>
	<form action="/" method="POST">
		<h1><?php echo $test[0]['question'] ?></h1>
		<h2>Варианты ответов:</h2>
		<?php foreach ($test[0]['answers'] as $values) { ?>
		<p> <?php echo $values; ?> </p>
		<?php } ?>
		Напишите номер ответа: <input type="text" name="question" value=" "><br>
		<input type="submit" value="Ответить">
	</form>
</body>
</html>
