<?php

//ovaj fajl sluzi za testiranje 

require_once "InternetProvajder.php";
require_once "PostpaidKorisnik.php";
require_once "PrepaidKorisnik.php";
require_once "ListingUnos.php";
require_once "TarifniDodatak.php";
require_once "TarifniPaket.php";

$provajder = new InternetProvajder("KBCnet");

$tarifniPaket = new TarifniPaket("Biznis paket" ,50, 1200, true, 500, 10);
$tarifniPaket2 = new TarifniPaket("Standard paket" ,60, 1500, false, 500, 10);

$tarifniDodatak = new TarifniDodatak(500, "Facebook");
$tarifniDodatak2 = new TarifniDodatak(500, "Instagram");
$tarifniDodatak3 = new TarifniDodatak(500, "Fiksna_Telefonija");

$petar = new PrepaidKorisnik($provajder, "Petar", "Petrovic", "Makedonska 6", "12356", $tarifniPaket, 10000);
$ana = new PrepaidKorisnik($provajder, "Ana", "Anic", "Makedonska 12", "565959", $tarifniPaket, 10000);
$milos = new PrepaidKorisnik($provajder, "Ana", "Anic", "Makedonska 12", "483259", $tarifniPaket, 10000);
$milica = new PrepaidKorisnik($provajder, "Ana", "Anic", "Makedonska 12", "245359", $tarifniPaket, 10000);

$marko = new PostpaidKorisnik($provajder, "Marko", "Markovic" ,"Knez Mihailova 6", "009654", $tarifniPaket2);
$uros = new PostpaidKorisnik($provajder, "Marko", "Markovic" ,"Knez Mihailova 6", "237654", $tarifniPaket2);
$sinisa = new PostpaidKorisnik($provajder, "Sinisa", "Maric" ,"Knez Mihailova 10", "5644896", $tarifniPaket);
$milan = new PostpaidKorisnik($provajder, "Milan", "Pijevac" ,"Knez Mihailova 10", "1544898", $tarifniPaket);

$provajder->dodajKorisnika($petar);
$provajder->dodajKorisnika($milos);
$provajder->dodajKorisnika($marko);
$provajder->dodajKorisnika($sinisa);
$provajder->dodajKorisnika($ana);
$provajder->dodajKorisnika($milan);
$provajder->dodajKorisnika($uros);
$provajder->dodajKorisnika($milica);
$provajder->prikazSvihPrepaidKorisnika();






















