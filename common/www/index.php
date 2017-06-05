<?
    $self_names = array("ban.ukrhub.net", "185.151.105.254");
/*
    if ( in_array(strtolower($_SERVER["HTTP_HOST"]), $self_names) ) {
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: https://raw.githubusercontent.com/oldengremlin/133-2017/master/hostip.hostname");
    }
*/
?>

<!DOCTYPE html>
<html lang="ua">
<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta http-equiv="content-language" content="ua">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="robots" content="index, nofollow">
  <meta name="author" content="NOC">
  <title>ТОВ УКРКОМ - Блокування</title>
  <meta name="keywords" content="Указ Президент 133/2017">
  <meta name="description" content="На виконання Указу
  Президента №133/2017 опублікованого в
  Урядовому кур'єрі №89 (5958) від 17.05.2017">
  <style>
    body {
        overflow-y: scroll;
        overflow-x: hidden;
        background-image: none;
        background-color: rgb(240, 240, 240);
    }

    h1,h2 {
        text-align: center;
        color: black;
    }

    h3 {
        color: black;
    }

    iframe.ukurier {
        width: 99.7%;
        height: 55vh;
        overflow: hidden; 
        border: 3px solid darkgreen;
        padding: 2px;
    }

    .button {
        border-color: #c4c4c4!important;
        border-width: 1px;
        cursor: pointer;
        background-image: linear-gradient(rgb(255, 255, 255) 0px, rgb(231, 231, 231) 100%);
        box-shadow: 0 1px 0 0 rgba(255,255,255,.85) inset, 0 1px 0 0 rgba(0,0,0,.35);
    }

    .button.big {
        font-size: 18px;
        font-weight: 700;
        letter-spacing: -.5px;
        line-height: 33px;
        height: 35px;
    }

    .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 240px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;

        /* Position the tooltip */
        position: absolute;
        z-index: 1;
        top: -5px;
        left: 105%;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }

    a {
	color: black;
	text-decoration: none;
	cursor: pointer;
	letter-spacing: 2px;
    }

    block {
	text-decoration: underline;
	text-transform: uppercase;
	color: red;
	letter-spacing: 2px;
	text-shadow: 3px 2px gray;
    }
  </style>
</head>
<body>

<?
    if ( !in_array(strtolower($_SERVER["HTTP_HOST"]), $self_names) ) {
?>
    <h1>Увага!!! Доступ до ресурсу
    <block>&nbsp;<?=$_SERVER["HTTP_HOST"]?>&nbsp;</block>
    заблоковано.</h1>
<?
    }
?>
    <h2>На виконання Указу Президента
    №133/2017</h2>

    <p>17.05.2017 ведено в дію Указ Президента
    України від 15 травня 2017 року №133/2017
    «Про рішення Ради національної
    безпеки і оборони України від 28
    квітня 2017 року "Про застосування
    персональних спеціальних
    економічних та інших обмежувальних
    заходів (санкцій)"»</p>

    <p>Указ Президента було опубліковано
    в газеті «Урядовий кур’єр» №89 (5958),
    таким чином він набув чинності.</p>

    <iframe class="ukurier"
    src="https://ukurier.gov.ua/media/documents/2017/05/16/2017_05_17_133upu.pdf"
    scrolling="yes"frameborder="0"
    allowfullscreen></iframe>

    <h3>
        <ul>
            <li><a target="_blank" class="button" href="http://ban.ukrhub.net/hostip.hostname/">Список заблокованих адрес та імен</a>.</li>
            <li><a target="_blank" class="button" href="http://ban.ukrhub.net/hostnames/">Список заблокованих доменних імен</a>.</li>
            <li><a target="_blank" class="button" href="http://ban.ukrhub.net/hostip/">Список заблокованих мереж та хостів</a>.</li>
        </ul>
    </h3>

    <p>Турбуючись про те, щоб ваші персональні дані та інша особиста інформація не постраждала, ТОВ "УКРКОМ" підготувало перелік корисних посилань:</p>
        <ul>
            <li><a target="_blank" class="button" href="https://goo.gl/dKx65i">Як створити поштову скриньку ukr.net і E-Disk.</a></li>
            <li><a target="_blank" class="button" href="https://goo.gl/LhxKY3">Як створити обліковий запис у поштовому сервісі Gmail.</a></li>
            <li><a target="_blank" class="button" href="https://goo.gl/e0PSxK">Як налаштувати збір пошти у Gmail з інших поштових скриньок.</a></li>
            <li><a target="_blank" class="button" href="https://goo.gl/5EHkib">Як працювати з Google Диском.</a></li>
            <li><a target="_blank" class="button" href="https://goo.gl/X2O0Kp">Як створити обліковий запис у Facebook.</a></li>
            <li><a target="_blank" class="button" href="https://goo.gl/nZiVdZ">Як завантажити контакти з Вконтакті або інших акаунтів у Facebook.</a></li>
            <li><a target="_blank" class="button" href="https://goo.gl/WehwBx">Яким антивірусним ПЗ можна користуватися замість Kaspersky і Dr.Web.</a></li>
        </ul>
    </p>


    <p>Допомога українській армії - <span
    class="tooltip"><a class="button big">565</a><span
    class="tooltiptext">Вартість повідомлення - 5
    грн. Перераховані 5 грн підуть на
    допомогу українській армії.</span>.</span>
    Телефон гарячої лінії СБУ - <span
    class="tooltip"><span class="button big">0-800-501-482</span><span
    class="tooltiptext">Безкоштовно.</span></span>.</p>

    <p>Технічна підтримка абонентів ТОВ
    "УКРКОМ" - <span class="tooltip"><span class="button
    big">044-205-55-70</span><span
    class="tooltiptext">Цілодобово, 24/7.</span></span>.</p>

<!--
    <iframe class="ukurier" width="640" height="385"
    src="//www.youtube.com/embed/SV56VCzqLWA?autoplay=1" frameborder="1"
    allowfullscreen></iframe></body>
-->

</body>
</html>
