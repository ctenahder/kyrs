<!DOCTYPE html>
<html lang="ru">
<meta name="keywords" content="Stepan, resume">
<meta name="description" content="Сайт - резюме Гришаева Степана">
<link rel="stylesheet" type="text/css" href="script/script.js">
<link rel="stylesheet" type="text/css" href="style/style.css">
<html>
	<head>
		<title>freekyrs</title>
	</head>
	<body>
<?
	include('nuv.php');
?>
<div class="content">
	<div class="section_one">
				<h1>Степан</h1>
				<p><em>Я типичный студент своего небольшого городка под названием </em><strong>Ижевск</strong></p>

			<hr>

				<h1>Я кошка</h1>
			<img src="image/img_one.png">

			<hr>

				<h1>Список социальных сетей:</h1>
			<a href="https://www.instagram.com/ctenahder/?hl=ru">Instagram</a>
			|
			<a href="https://vk.com/id454694652" target="blank">VK</a>
			|
			<a href="page_one.php">Telegram</a>

			<hr>

		<h1>Моё хобби</h1>
		<div class="list">
			<ol>
				<li>Путешествия</li>
				<li>Блоггинг</li>
				<li>Горные лыжи</li>
				<li>MMA</li>
			</ol>
		</div>

			<hr>

		<h1>Опыт работы</h1>
		<table border="4px black" class="">
			<thead>
				<tr>
					<th>Название работы</th>
					<th>Должность</th>
					<th>Период</th>
				</tr>
			</thead>
			<tr>
				<td>Разноробочий</td>
				<td>Грузчик</td>
				<td>2018-2019</td>
			</tr>
			<tr>
				<td>Фрилансер</td>
				<td>Тестировщик ПО</td>
				<td>2019-2020</td>
			</tr>
			<tr>
				<td>Самокат</td>
				<td>Курьер</td>
				<td>2021-2022</td>
			</tr>
		</table>

			<hr>

		<h1>Формы</h1>

	<form>
		<div class="form">	

				<label id="form_label" for="text2">Текст</label>
				<input type="text" id="text2" placeholder="Введите текст">
				<br>
				<label id="form_label" for="email">Email</label>
				<input type="email" id="email" placeholder="Введите email">
				<br>
				<label id="form_label" for="password">Password</label>
				<input type="password" id="password" placeholder="Введите пороль">
				<br>
				<label id="form_label" for="number">Число</label>
				<input type="number" id="number" min="0" placeholder="Введите число">
				<br>
				<label id="form_label" for="range">Range</label>
				<input type="range" id="range" min="0">
				<br>
				<label id="form_label" for="date">Дата</label>
				<input type="date" id="date" min="0">
				<br>
				<label id="form_label" for="color">Цвет</label>
				<input id="form_input" type="color" id="color" min="0">
				<br>
				<label id="form_label" for="message">Сообщение</label>
				<input id="form_input" type="message" id="message" min="0" placeholder="Введите сообщение...">
				<br>
				<label id="form_label" for="sex">Ваш пол</label>
				<select id="form_select">
					<option>Мужской</option>
					<option>Женский</option>
					<option>Другое</option>
				</select>
				<br>
				<label>Количество игроков</label>
				<input type="radio" name="player"> 1 
				<input type="radio" name="player"> 2
				<input type="radio" name="player"> 3
				<input type="radio" name="player"> 4
				<br>
				<label>Любимая еда</label>
				<input type="checkbox" name="food"> Рис
				<input type="checkbox" name="food"> Каша манная
				<input type="checkbox" name="food"> Борщ
				<input type="checkbox" name="food"> Банан
				<br>
				<input type="submit" value="Отправить форму">

				<p style="border: 2px solid black;">Lorem ipsum dolor sit amet, consectetur adipisicing </p>
		</div>	
	</form>
	</div>
	</body>
</html>