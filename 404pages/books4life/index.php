<?php
/*
404 Name: Books 4 Life
Version: 1.0
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>404 pagina | Books 4 Life</title>
<style>

* {
	margin: 0px;
	padding: 0px;
	border: 0px;
}

#container {
	margin: 0 auto;
	width: 983px;
	height: 671px;
	background-image: url('<?php echo DIR404PAGES; ?>bg.png');
}

#tag {
	float: left;
	margin-left: 30px;
	margin-top: 23px;
}

#title {
	float: left;
	margin-top: 270px;
	margin-left: -350px;
}

#left-text {
	float: left;
	margin-left: 130px;
	margin-top: 40px;
	width: 370px;
}

#right-text {
	float: right;
	width: 303px;
	margin-right: 140px;
	margin-top: -270px;
}

#right-text img {
	margin-top: 30px
}

a #books4lifelink {
	float: left;
	width: 190px;
	height: 188px;
	margin-left: 28px;
	margin-top: 60px;
	cursor: pointer;
	background-image: url('<?php echo DIR404PAGES; ?>label-green.png');
}

a:hover #books4lifelink {
	background-image: url('<?php echo DIR404PAGES; ?>label-red.png');
}

p {
	margin-top: 40px
}

</style>
</head>
<body>
<div id="container">
	<div id="tag"><a href="<?php echo SITEHOME; ?>"><img alt="Ga naar books 4 life" src="<?php echo DIR404PAGES; ?>tag.png" /></a></div>
	<a href="http://www.books4life.nl" target="_blank" /><div id="books4lifelink"></div></a>
	<div id="title"><a href="http://www.books4life.nl" target="_blank" /><img alt="Books4life" src="<?php echo DIR404PAGES; ?>title.png" /></a></div>
	<div style="clear: both;"></div>
	<div id="left-text">
		<img src="<?php echo DIR404PAGES; ?>intro.png" />
	</div>
	<div id="right-text">
		<img src="<?php echo DIR404PAGES; ?>right-1.png" />
		<img src="<?php echo DIR404PAGES; ?>right-2.png" />
	</div>
</div>
</body>
></html>