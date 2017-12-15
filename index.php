<?php

	// file_get_contents(__DIR__ . '/phonebook.json') - ищем файл в текущей директории
	$json = file_get_contents(__DIR__ . '/test1.json');

	$test = json_decode($json, true);

	// echo '<br>';
	// echo '<pre>';
	// print_r($test);
	// echo '</pre>';

	


?>	

<?php
$i = 1;
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
		Напишите номер ответа: <input type="text" name="question<?php$i?>" value=""><br>
		<input type="submit" value="Ответить">
	</form>
</body>
</html>

<?php
	$i = 1;
	$s = "question$i";
	echo $s;
	$a = $_POST["question$i"];
	var_dump($a);
	// "Пользователь дал ответ: ".
	if (strcmp($a, $test[0]['correct_answer']) == 0) {
		echo "Пользователь дал правильный ответ: ".$a;
	}
	else {
		echo "Пользователь дал неправильный ответ: ".$a;
	}

?>