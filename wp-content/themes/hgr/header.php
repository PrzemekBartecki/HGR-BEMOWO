<!doctype html>
<html lang="pl-PL">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Harcerska Grupa Ratownicza „Bemowo” działa od 2002 r. przy Hufcu Warszawa-Wola oraz pod patronatem Harcerskiej Szkoły Ratownictwa ZHP. Naszym głównym celem jest nieść chętną pomoc bliźnim, z którego wynikają wszystkie nasze działania.">
	<meta name="keywords" content="pierwsza pomoc, ratowictwo medyczne, edukacja, kursy, pierwsza pomoc, ZHP, kursy pierwszej pomocy">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>
		<?php	echo	get_bloginfo('name');	?>
	</title>
	<?php wp_head(); ?>

</head>
<body>
<!--==============================-->
<!--******Skrypt do Cookie********-->
<!--==============================-->


<div id="simplecookienotification_v01" style="display: block; z-index: 99999; min-height: 35px; width: 100%; position: fixed; background: rgb(43, 54, 67) none repeat scroll 0% 0%; border: 0px none rgb(160, 178, 192); text-align: center; right: 0px; color: rgb(119, 119, 119); bottom: 0px; left: 0px;">
	<div style="padding:10px; margin-left:15px; margin-right:15px; font-size:14px; font-weight:normal;">
		<span id="simplecookienotification_v01_powiadomienie">Używamy cookies w celach funkcjonalnych, aby ułatwić użytkownikom korzystanie z witryny oraz w celu tworzenia anonimowych statystyk serwisu. Jeżeli nie blokujesz plików cookies, to zgadzasz się na ich używanie oraz zapisanie w pamięci urządzenia.</span><span id="br_pc_title_html"><br></span>
		<a id="simplecookienotification_v01_polityka" href="http://jakwylaczyccookie.pl/polityka-cookie/" style="color: rgb(160, 178, 192);">Polityka Prywatności</a><span id="br_pc2_title_html"><br></span>
		<a id="simplecookienotification_v01_info" href="http://jakwylaczyccookie.pl/jak-wylaczyc-pliki-cookies/" style="color: rgb(160, 178, 192);">Zarządzanie cookies</a><div id="jwc_hr1" style="height: 10px; display: none;"></div>
		<a id="okbutton" href="javascript:simplecookienotification_v01_create_cookie('simplecookienotification_v01',1,7);" style="position: absolute; background: rgb(160, 178, 192) none repeat scroll 0% 0%; color: rgb(255, 255, 255); padding: 5px 15px; text-decoration: none; font-size: 12px; font-weight: normal; border: 0px solid rgb(43, 54, 67); border-radius: 0px; top: 5px; right: 5px;">OK</a><div id="jwc_hr2" style="height: 10px; display: none;"></div>
	</div>
</div>
<script type="text/javascript">var galTable= new Array(); var galx = 0;</script><script type="text/javascript">function simplecookienotification_v01_create_cookie(name,value,days) { if (days) { var date = new Date(); date.setTime(date.getTime()+(days*24*60*60*1000)); var expires = "; expires="+date.toGMTString(); } else var expires = ""; document.cookie = name+"="+value+expires+"; path=/"; document.getElementById("simplecookienotification_v01").style.display = "none"; } function simplecookienotification_v01_read_cookie(name) { var nameEQ = name + "="; var ca = document.cookie.split(";"); for(var i=0;i < ca.length;i++) { var c = ca[i]; while (c.charAt(0)==" ") c = c.substring(1,c.length); if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length); }return null;}var simplecookienotification_v01_jest = simplecookienotification_v01_read_cookie("simplecookienotification_v01");if(simplecookienotification_v01_jest==1){ document.getElementById("simplecookienotification_v01").style.display = "none"; }</script>
<!--===============================-->
<!--********Skrypt do FB***********-->
<!--===============================-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.12&appId=371157706664585&autoLogAppEvents=1';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>




<header class="topMenu ">
	<section class="mobile">
		<div class="mobileMenu">
			<div class="logoIcon"></div>
			<p class="mobileMenu--text">menu</p>
			<div class="logoIcon"></div>
		</div>

	</section>
	<section class="container">
		<nav>
			<?php wp_nav_menu(['menu' => 'mainMenu']); ?>
		</nav>
	</section>
</header>






