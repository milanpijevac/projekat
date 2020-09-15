<?php 
				$messages = array( 
								'en' => '
									We have been building a delicious history for years. We are still building it successfully!
									Year 1930 - beginning
									Colonel Harland Sanders buys Grujina hut and coffee in Belgrade, Serbia. From the very beginning, our citizens have recognized true quality and incomparable service. Thousands and thousands of guests have been served in Grujina hut in thirty-two years.',

								'sr' => 'Godinama smo gradili ukusnu istoriju. Uspešno je gradimo i dalje!
											Godina 1930 – početak
											Pukovnik Harland Sanders kupuje Gruijonu kolibu i kafe u Beogradu,Srbija.Od samog pocetka,nasi gradjani su prepoznali istinski kvalitet i neuporedivu uslugu.U grujinoj kolibi za trideset dve godine usluzeni su hiljade i hiljade gostiju.Prvi put kad svracate dobijate besplatnu hranu pozdrav.',
								'hu' => 'Wir haben jahrelang eine köstliche Geschichte aufgebaut. Wir bauen es immer noch erfolgreich!
											Jahr 1930 - Beginn
											Oberst Harland Sanders kauft Gruijons Hütte und Kaffee in Belgrad, Serbien. Von Anfang an haben unsere Bürger echte Qualität und unvergleichlichen Service erkannt. Tausende und Abertausende von Gästen wurden in 32 Jahren in Grujins Hütte bedient.',
								'ru' => '
											Преведи са језика: босански
											399/5000
											Мы годами строили восхитительную историю. Мы до сих пор его успешно строим!
											1930 год - начало
											Полковник Харланд Сандерс покупает хижину Груихона и кофе в Белграде, Сербия. С самого начала наши граждане признали истинное качество и несравненный сервис. Тысячи и тысячи гостей были обслужены в хижине Гружина за 32 года.',
								'sp' => 'Llevamos años construyendo una deliciosa historia. ¡Todavía lo estamos construyendo con éxito!
											Año 1930 - comienzo
											El coronel Harland Sanders compra la cabaña y el café de Gruijon en Belgrado, Serbia. Desde el principio, nuestros ciudadanos han reconocido la verdadera calidad y el servicio incomparable. Miles y miles de huéspedes han sido atendidos en la cabaña de Grujin en treinta y dos años.'
								);

								if (isset($_GET['lang'])){
									
									$lang = $_GET['lang'];
									setcookie('lang', $lang);
									echo $messages[$lang];
								}
				?>