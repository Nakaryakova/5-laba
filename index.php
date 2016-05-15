<?php
header("Content-Type: text/html; charset=utf-8"); 
session_start();
$_SESSION['test'] = md5($_SERVER['REMOTE_ADDR']);
?>
<!DOCTYPE html>
<html>
<head>	
	<title>Поликлиника</title>	
	<link rel="stylesheet" href="style.css" media="all">
</head>
<body>
	<header>
		<img src="images/headerpic.gif" alt="Картинка">
		<ul>
			<li><h1>ЛОР Клиника г. Пермь</h1>
			<li><h2>2-03-03-03</h2>
		</ul>
	</header>	
	
	<nav>
		<ul>
			<li><a href="#about">О Клинике</a></li>
			<li><a href="#lechenie">Лечение заболеваний</a></li>
			<li><a href="#entry">Записаться на прием</a></li>
			<li><a href="#contacts">Контакты</a></li>
		</ul>	
	</nav>
	
	<div id="entry"></div>
	<section>
		<h3>О Клинике</h3>
		<h4>История</h4>
		<ul>
			<li>Клиника создана в 2000 году как "Скорая ЛОР помощь".</li>
			<li>С 2007 года мы работаем в статусе специализированной ЛОР клиники.</li>
			<li>В 2016 году в сети клиник открылось новое направление - Клиника лечения кашля и аллергии.</li>
		</ul>
		<h4>Преимущества Клиники</h4>
		<ul>
			<li>Комфортные условия приема</li>
			<li>Все ЛОР-услуги - в одном месте</li>
			<li>Клиника оснащена высокотехнологичным оборудованием, одним из лучших в Перми</li>
			<li>Диагностика на уровне ЛОР-клиник Германии и Швейцарии</li>
			<li>Вся медицинская деятельность клиники лицензирована</li>
			<li>Врачи клиники постоянно изучают состояние местного и общего иммунитета у больных с патологией ЛОР-органов</li>
			<li>Врачи клиники регулярно повышают квалификацию, стажируются в российских и зарубежных клиниках и обмениваются опытом с коллегами из клиник Екатеринбурга, Москвы, Казани, Новосибирска, Мюнхена, Берна</li>
		</ul>			
	</section>
	<div id="lechenie"></div>
	<section>
		<h3>Лечение заболеваний</h3>
		<img src="images/uho.png" alt="Ухо">
		<h5>Лечение уха</h5>
		<p>Наша клиника проводит диагностику и лечение заболеваний уха у взрослых и детей. Благодаря нашим высококвалифицированным специалистам и их современным методам профилактики вы сможете предотвратить серьезные заболевания уха.</p>
		<img src="images/gorlo.png" alt="Горло">
		<h5>Лечение горла</h5>
		<p>У нас вы сможете вылечить самые серьезные проблемы с горлом. Рекомендуется регулярно приходить на осмотры к лору, для предотвращения развития воспалительных и инфекционных заболеваний, таких как аденоидит, ангина, тонзиллит и др.</p>
		<img src="images/nose.png" alt="Нос">
		<h5>Лечение носа</h5>
		<p>В нашем медицинском центре вы получите квалифицированную помощь специалистов при заболеваниях полости носа и околоносовых пазух. Наши врачи эффективно лечат ринит, синусит, искривление перегородки носа и т.д.</p>
				
	</section>
	<div id="entry"></div>
	<section>
		<h3>Запишитесь на прием к врачу!</h3>
		<form id="input" action="php/topatient.php" method="get">					
			<label for="alpha">Что вас беспокоит?</label><br/>
			<select name="Ail">
				<option>Uho</option>
				<option>Gorlo</option>
				<option>Nos</option>
				<option>Drugoe</option>
			</select><br/>
			<input id="alpha" name="Name" type="text" pattern="^[A-Za-z0-9_]{2,15}$" placeholder="Введите ваше имя" required> <br/>							
			<input type="tel" name="Tel" pattern="(\+?\d[- .]*){11}" placeholder="Введите ваш телефон" required> <br/><br/>	
			<input type="submit" name="submit" value="Отправить заявку">	<br/>									
		</form>
		<form>
			<p><button formaction="php/showpatients.php">Show All Patients</button></p>
		</form>	
		<form>
			<p><button formaction="php/showlastpatient.php">Show Last Added Patient</button></p>
		</form>		
		<?php 
		echo $_SESSION['message'];
		$_SESSION['message'] = '';
		?>
	</section>
	<div id="contacts"></div>
	<section>
		<h3>Контакты</h3>		
		<h4>Наш адрес</h4>
		<p>г.Пермь</p>
		<p>Бульвар Гагарина, д.101а</p>
		<p>Телефон: +7(342) 203-03-03</p>
		<h4>Режим работы</h4>
		<p>Пн-Пт: 8:00 - 20:00</p>
		<p>Сб: 9:00 - 18:00</p>
		<p>Вс: 10:00 - 17:00</p>	
	</section>
	<footer>
		<p>БУДЬТЕ ЗДОРОВЫ!</p>
	</footer>
</body>
</html>