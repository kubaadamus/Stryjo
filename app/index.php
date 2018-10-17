<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="styles.css">
	<meta charset="utf-8">
	<title></title>
</head>


<?php
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
    	$login = 'testLogin';
		$pass = 'testPass';
		//$ipaddress = $_SERVER['REMOTE_ADDR'];

		$user = 'jakubadamus';
		$DBpassword = 'Kubaadamus1991';
		$db = 'jakubadamus';
		$host = 'mysql.cba.pl';
		$port = 3360;

		function get_client_ip_env() {
			$ipaddress = '';
			if (getenv('HTTP_CLIENT_IP'))
				$ipaddress = getenv('HTTP_CLIENT_IP');
			else if(getenv('HTTP_X_FORWARDED_FOR'))
				$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
			else if(getenv('HTTP_X_FORWARDED'))
				$ipaddress = getenv('HTTP_X_FORWARDED');
			else if(getenv('HTTP_FORWARDED_FOR'))
				$ipaddress = getenv('HTTP_FORWARDED_FOR');
			else if(getenv('HTTP_FORWARDED'))
				$ipaddress = getenv('HTTP_FORWARDED');
			else if(getenv('REMOTE_ADDR'))
				$ipaddress = getenv('REMOTE_ADDR');
			else
				$ipaddress = 'UNKNOWN';
		 
			return $ipaddress;
		}

		$ipa = get_client_ip_env();

		$database = mysqli_connect($host,$user,$DBpassword,$db) OR die('Niedaradyyy' . mysqli_connect_error());

		$query = "INSERT INTO `visit_counter` (`date`, `ip`) VALUES (NOW(), '".$ipa."')";

		mysqli_query($database,$query);

		$query2 = "SELECT * FROM visit_counter";

		$response = mysqli_query($database,$query2);

		$visitors = mysqli_num_rows($response);

		echo $visitors;
		

        if ($database) {
		  echo 'conected';
		} else {
		  echo 'not conected';
		}
?>



<body>
	<div class="loading">
		<div class="bar rotating"></div>
		<div class="visitCounter">Witamy<br/> <?php echo $visitors; ?>-go <br/> odwiedzajacego!</div>
	</div>
	<div class="landingPage" id="home">
		<img class="campfire" src="assets/images/campfire_anim.gif" alt="">
		<img class="m4a1" src="assets/images/m4a1-small.png" alt="">
		<div class="menu">
			<a href="#home">
				<button>HOME</button>
			</a>
			<a href="#oferta">
				<button>OFERTA</button>
			</a>

			<a href="#galeria">
				<button>GALERIA</button>
			</a>
			<a href="#kontakt">
				<button>KONTAKT</button>
			</a>
		</div>
		<div class="logo">

			<img src="assets/images/Logo.svg" alt="">
			<p id="sub">SZKOLENIA STRZELECKIE</p>
			<p id="sub_2">statyczne, dynamiczne, w grupach i indywidualnie</p>
		</div>
		<a href="#oferta">
			<button class="ofertaBtn glass">POZNAJ OFERTĘ</button>
		</a>
		<div class="opis">
			<p>
				<span class="orange">Nauczę Cię bezpiecznej obsługi broni palnej </span>- nowoczesnej i historycznej w wielu
				kalibrach.</p>
			<p> Z rodziną lub przyjaciółmi spęszisz na strzelnicy szkolenie pełne wrażeń <span class="orange">a wieczorem
					wypoczniesz przy ognisku.</span>

			</p>
		</div>
	</div>
	<div class="oferta">
		<div class="section_title">
			<p id="oferta">OFERTA</p>
		</div>
		<div class="paragraf">
			<p>
				Organizujemy szkolenia strzelectwa statycznego i dynamicznego, zarówno
				<span class="orange">dla grup jak i osób indywidualnych</span>.
				<br /> Prowadzimy warsztaty dla każdego, kto nigdy nie miał styczności z bronią palną oraz strzeleckie spotkania
				rekreacyjne
				dla wprawionych komandosów. </p>
			<p>
				Mamy
				<span class="orange">nieograniczony dostęp</span> do nowoczesnej broni palnej, m.in (DIAMONDBACK, XDM, UZKON,
				STEVENS, ROSSI) i zabytkowej
				(AK MS, MOSIN, REMINGTON, KENTUCKY RIFLE, DIEGTIARIOW PIECHOTNYJ - nasz rodzynek).
				<p>
					Łączymy sprawdzone,
					<span class="orange">niezawodne zasady bezpieczeństwa</span> z przyjemną atmosferą i efektem prawdziwej przygody,
					dzięki czemu nasze szkolenia
					spodobają się każdemu!
				</p>
				<p>
					Wstęp
					<span class="orange">bez ograniczeń wiekowych</span> - zadbamy o bezpieczeństwo Twojego słuchu i wzroku.
				</p>
		</div>
		<p id="sub_2">PRZEBIEG SZKOLENIA</p>
		<div class="sections_wrapper">
			<div class="top">
				<div class="section">
					<div class="section section--photo">
						<img src="assets/images/budowa.jpg" alt="" class="">
					</div>
					<div class="section section--text">
						<p><span class="orange">Nauczysz się bezpiecznej obsługi</span> broni palnej każdego rodzaju.
						</p>
					</div>
				</div>
				<div class="section">
					<div class="section section--photo">
						<img src="assets/images/zreki.jpg" alt="" class="">
					</div>
					<div class="section section--text">
						<p>W praktycznym szkoleniu używał bęziesz broni w wielu kalibrach aż trafisz <span class="orange">na taką, którą
								polubisz.</span>

					</div>
				</div>
				<div class="section">
					<div class="section section--photo">
						<img src="assets/images/campfire.jpeg" alt="" class="">
					</div>
					<div class="section section--text">
						<p>Po dniu pełnym wrażeń,
							<span class="orange">zrelaksujesz się przy </span>ognisku dzieląc się wrażeniami z ekipą.</p>
					</div>
				</div>
			</div>
			<p id="sub_2">INSTRUKTOR</p>
			<div class="bottom">
				<div class="section">
					<div id="stryj" class="section section--photo">
						<img src="assets/images/stryjo.jpg" alt="" class="">
					</div>
					<div class="section section--text">
						<p>Instruktor - czyli ja - Maciej Adamus zajmuję się bronią palną od wielu lat, co jest moją pasją. Dodatkowo w
							czasie zajęć strzeleckih przeprowadzam szkolenia z medycyny
							pola walki.<span class="orange"><br />A gdybyś chciał uświetnić ważną uroczystość możemy wykonać salwę z armat
								czarnoprochowych.</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gallery" id="galeria">
		<br>
		<br>
		<div class="section_title">
			<p>GALERIA</p>
		</div>
		<div class="main_image">
			<div class="prev">
				<img src="assets/images/left.svg" alt="">
			</div>
			<img src="assets/images/family2.JPG" alt="" id="obraz">
			<div class="next">
				<img src="assets/images/right.svg" alt="">
			</div>
		</div>
		<div class="images">
			<div class="thumb">
				<img src="assets/images/family2.jpg" class="thumb_button" link="assets/images/family2.jpg">
			</div>
			<div class="thumb">
				<img src="assets/images/armata1.jpg" class="thumb_button" link="assets/images/armata1.jpg">
			</div>
			<div class="thumb">
				<img src="assets/images/armata2.jpg" class="thumb_button" link="assets/images/armata2.jpg">
			</div>
			<div class="thumb">
				<img src="assets/images/armata3.JPG" class="thumb_button" link="assets/images/armata3.jpg">
			</div>

		</div>
	</div>
	<div class="arsenal hidden" id="arsenal">
		<div class="section_title">
			<p>ARSENAŁ</p>
		</div>

		<div class="weaponInfo">
			<p>Mamy dużo fajnej broni w kalibrach takich a takich. bla bla </p>
		</div>
		<div class="arsenal_wrapper">
			<div class="top">
				<div class="ui">
					<button id="btn_1" class="indent_3_l arsenal_btn">M4A1</button>
					<button class="indent_2_l arsenal_btn">POMPA</button>
					<button class="indent_1_l arsenal_btn">MOSIN</button>
					<button class="indent_2_l arsenal_btn">GLOCK</button>
					<button class="indent_3_l arsenal_btn">BAZUKA</button>
				</div>
				<div class="photo">
					<img id="arsenal_obrazek" src="assets/images/ak.jpeg" alt="">
				</div>
				<div class="ui">
					<button class="indent_3 arsenal_btn">M4A1</button>
					<button class="indent_2 arsenal_btn">POMPA</button>
					<button class="indent_1 arsenal_btn">MOSIN</button>
					<button class="indent_2 arsenal_btn">GLOCK</button>
					<button class="indent_3 arsenal_btn">BAZUKA</button>
				</div>
			</div>

		</div>
	</div>
	<div class="cennik">
		<br>
		<br>
		<br>
		<div class="section_title">
			<p>WYBIERZ OPCJE SZKOLENIA</p>
		</div>

		<br>
		<p>BROŃ I AMUNICJA:</p> <br/>
		<div class="dotted">
			
			<div class="inputy">
				<!-SKŁAD OSOBOWY-!>

				<div class="nazwa">
					<label>
							Stanowisko strzeleckie 25m
					</label>
					<!img src="assets/images/ammo/1-22lr.png" alt=""!>
				</div>
				<input id="_10" type="range" id="cowbell" name="cowbell" min="0" max="5" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_10box" type="text" name="25m" value="0">
				<label id="_10cena">CENA</label>
				<hr class="dotted_hr">

				<div class="nazwa">
					<label>
							Stanowisko strzeleckie 50m
					</label>
					<!img src="assets/images/ammo/1-22lr.png" alt=""!>
				</div>
				<input id="_11" type="range" id="cowbell" name="cowbell" min="0" max="5" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_11box" type="text" name="25m" value="0">
				<label id="_11cena">CENA</label>
				<hr class="dotted_hr">

				<div class="nazwa">
					<label>
						Trening z instruktorem strzelectwa praktycznego <br/> 1 osoba / 2 godziny
					</label>
					<!img src="assets/images/ammo/1-22lr.png" alt=""!>
				</div>
				<input id="_13" type="range" id="cowbell" name="cowbell" min="0" max="5" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_13box" type="text" name="25m" value="0">
				<label id="_13cena">CENA</label>
				<hr class="dotted_hr">

				<div class="nazwa">
					<label>
							Tarcza strzelecka
					</label>
					<!img src="assets/images/ammo/1-22lr.png" alt=""!>
				</div>
				<input id="_14" type="range" id="cowbell" name="cowbell" min="0" max="50" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_14box" type="text" name="25m" value="0">
				<label id="_14cena">CENA</label>
				<hr class="dotted_hr">

				<!- AMUNICJA -!>
				<div class="nazwa">
					<label>
							.22LR Karabin Sportowy (min. 25 szt.)
					</label>
					<img src="assets/images/ammo/1-22lr.png" alt="">
				</div>
				<input id="_1" type="range" id="cowbell" name="cowbell" min="0" max="150" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_1box" type="text" name="ak" value="0">
				<label id="_1cena">CENA</label>
				<hr class="dotted_hr">


				<div class="nazwa">
					<label>
							Pistolet  Sportowy 9mm (min. 20 szt.)
					</label>
					<img src="assets/images/ammo/2-9mmsport.png" alt="">
				</div>
				<input id="_2" type="range" id="cowbell" name="cowbell" min="0" max="150" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_2box" type="text" name="ak" value="0">
				<label id="_2cena">CENA</label>
				<hr class="dotted_hr">


				<div class="nazwa">
					<label>
							Rewolwer .38 Special (min. 15 szt.)
					</label>
					<img src="assets/images/ammo/3-rew38.png" alt="">
				</div>
				<input id="_3" type="range" id="cowbell" name="cowbell" min="0" max="150" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_3box" type="text" name="ak" value="0">
				<label id="_3cena">CENA</label>
				<hr class="dotted_hr">

				<div class="nazwa">
					<label>
							Karabinek AK (min. 10 szt.)
					</label>
					<img src="assets/images/ammo/4-akkarabinek.png" alt="">
				</div>
				<input id="_4" type="range" id="cowbell" name="cowbell" min="0" max="150" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_4box" type="text" name="ak" value="0">
				<label id="_4cena">CENA</label>
				<hr class="dotted_hr">

				<div class="nazwa">
					<label>
							Pistolet masz. PPSz-a 7,62x 25mm
					</label>
					<img src="assets/images/ammo/5-ppsz.png" alt="">
				</div>
				<input id="_5" type="range" id="cowbell" name="cowbell" min="0" max="150" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_5box" type="text" name="ak" value="0">
				<label id="_5cena">CENA</label>
				<hr class="dotted_hr">


				<div class="nazwa">
					<label>
							Karabinek 5,56 (min. 10 szt.)
					</label>
					<img src="assets/images/ammo/6-556karabinek.png" alt="">
				</div>
				<input id="_6" type="range" id="cowbell" name="cowbell" min="0" max="150" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_6box" type="text" name="ak" value="0">
				<label id="_6cena">CENA</label>
				<hr class="dotted_hr">


				<div class="nazwa">
					<label>
							Karabin MOSIN i DP (min. 10 szt.)
					</label>
					<img src="assets/images/ammo/7-mosin.png" alt="">
				</div>
				<input id="_7" type="range" id="cowbell" name="cowbell" min="0" max="150" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_7box" type="text" name="ak" value="0">
				<label id="_7cena">CENA</label>
				<hr class="dotted_hr">

				<div class="nazwa">
					<label>
							Strzelba gładko lufowa 12mm (min. 10 szt.) lub Breneka
					</label>
					<img src="assets/images/ammo/8-gladka12.png" alt="">
				</div>
				<input id="_8" type="range" id="cowbell" name="cowbell" min="0" max="150" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_8box" type="text" name="ak" value="0">
				<label id="_8cena">CENA</label>
				<hr class="dotted_hr">

				<div class="nazwa">
					<label>
							LOFTKA
					</label>
					<img src="assets/images/ammo/9-loftka.png" alt="">
				</div>
				<input id="_9" type="range" id="cowbell" name="cowbell" min="0" max="150" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_9box" type="text" name="ak" value="0">
				<label id="_9cena">CENA</label>
				<hr class="dotted_hr">



				<div class="nazwa">
					<label>
							BRENEKA
					</label>
					<img src="assets/images/ammo/10-breneka.png" alt="">
				</div>
				<input id="_breneka" type="range" id="cowbell" name="cowbell" min="0" max="150" value="0" step="1" />
				<label class="sztuk">sztuk</label>
				<input id="_brenekabox" type="text" name="ak" value="0">
				<label id="_breneka_cena">CENA</label>
				<hr class="dotted_hr">


			</div>
			<div id="koszt"></div>
			<div class="pricebox" id="pricebox">
					<label class="orange" >PRZYBLIŻONY KOSZT SZKOLENIA:</label>
					<input id="suma" type="text" name="ak" value="00.00 PLN" style="width: 120px;">
			</div>
		</div>

		<div class="cennikpdf">
			<a href="cennikpdf.pdf" id="link">Pobierz cennik w formie PDF</a>
			<img src="assets/images/document.png" alt="">
			
		</div>

	</div>
	<div class="contact" id="kontakt">
		<br>
		<div class="section_title">
			<p>KONTAKT</p>
		</div>
		<div class="opis">
			<p>
				<span class="orange">Zadzwoń lub wyślij e-maila</span> i zarezerwuj szkolenie już dziś!</p>
		</div>
		<p>Maciej Adamus</p>
		<p>tel: 608 585 632</p>
		<p>e-mail: imprezpol@wp.pl</p>
	</div>
	<div class="footer">
		2018 Wszystkie prawa zastrzeżone. Stworzono dla IMPREZPOL. Autorzy: Jakub Adamus
		<a id="link" href="http://www.jakubadamus.pl">(www.jakubadamus.pl)</a>, Maciej Adamus.
	</div>
</body>
<!======================================== S K R Y P T Y ======================================>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/scripts/onload.js"></script>
<!script src="assets/scripts/menu.js">
</script>
<script src="assets/scripts/scroll.js"></script>
<script src="assets/scripts/gallery.js"></script>
<script src="assets/scripts/cennik.js"></script>
<script src="assets/scripts/arsenal.js"></script>


</html>

