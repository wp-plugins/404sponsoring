<?php
/*
404 Name: Ik kom in actie
Version: 1.0
*/
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>404 Pagina - Ik kom in actie</title>
<style type="text/css">

body {
  font-family: Geneva, Arial, Helvetica, sans-serif;
  text-align: left;
  font-size: small;
}

/* fond */
#Layer-1 {
  position: absolute;
  left: +0px;
  top: +0px;
  width: 1024px;
  height: 768px;
  z-index: 1;
}

/* logo ik kom in actie */
#Layer-2 {
  position: absolute;
  left: 385px;
  top: 616px;
  width: 252px;
  height: 103px;
  z-index: 2;
}

/* tekening */
#Layer-3 {
  position: absolute;
  left: 239px;
  top: 105px;
  width: 536px;
  height: 283px;
  z-index: 3;
}

/* kopregel */
#Layer-4 {
  position: absolute;
  left: 187px;
  top: 36px;
  width: 646px;
  height: 44px;
  z-index: 4;
}

/* home sweet */
#Layer-5 {
	position: absolute;
	left: 434px;
	top: 321px;
	width: 143px;
	height: 97px;
	z-index: 5;
}

/* Helaas de pagina die je zocht */
#Layer-6 {
  position: absolute;
  left: 186px;
  top: 451px;
  width: 652px;
  height: 126px;
  z-index: 6;
}

a {
  cursor: pointer;
  outline: none;
}
a:link { color: #0099cc; }
a:visited { color: #F88; }
a:hover {
  color: #F00;
}
</style>
</head>
<body>

  <!-- This is 'fond' -->
  <div id="Layer-1" class="fond">
    <img src="<?php echo DIR404PAGES; ?>achtergrond.png" width="1024" height="768" alt="fond" />
	
<!-- This is 'Helaas de pagina die je zocht' -->
    <div id="Layer-6">
	  <p>Helaas, de pagina die je zocht bestaat niet meer. In de tijd dat je op zoek gaat naar deze pagina, kun je ook iets doen voor een betere wereld. Kijk op <a href="http://www.ikkominactie.nl" title="Naar website 'ik kom in actie'" target="_blank">www.ikkominactie.nl</a>, de website die in actie komen mak&shy;ke&shy;lijk en leuk maakt! Er zijn acties die maar twee minuten van je tijd vragen.</p>
	  <p>Wil je liever verder op zoek op deze site? Kijk dan op '<a href="<?php echo SITEHOME; ?>">home</a>'. We helpen je daar graag verder. </p>
    </div>

    <!-- This is 'home sweet' -->
    <div id="Layer-5"><a href="/"><img src="<?php echo DIR404PAGES; ?>home_sweet.png" border="0" width="142" height="97" alt="home sweet" /></a></div>

    <!-- This is 'kopregel' -->
    <div id="Layer-4">
	<img src="<?php echo DIR404PAGES; ?>kop.png" width="646" height="44" alt="kopregel" /></div>

    <!-- This is 'tekening' -->
    <div id="Layer-3">
    <img src="<?php echo DIR404PAGES; ?>tekening_geraniums.png" width="536" height="283" alt="tekening" /></div>

    <!-- This is 'logo ik kom in actie' -->
    <div id="Layer-2"><a href="http://www.ikkominactie.nl"><img src="<?php echo DIR404PAGES; ?>logo_ikkominactie.png" border="0" width="252" height="103" alt="logo ik kom in actie" /></a></div>
</div>
</body>
</html>
