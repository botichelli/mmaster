<!DOCTYPE HTML>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
  <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>  

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
    
  <title>Шкаф-купе на зааз в Киеве | Мебельный мастер - производство шкафов купе, гардеробных, стенок и кухонь в Киеве</title>
  </head>
  <body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49948281-1', 'm-master.kiev.ua');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>  

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter24650351 = new Ya.Metrika({id:24650351,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/24650351" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
  
    <!-- Заголовок сайта -->
    <header>
    <div class="hbg">
      <div class="fix">
        <div class="logo">
          <img src="images/logo4.png">
          <h1>
          <span>Шкафы-купе, гардеробные, стенки и кухни</span></h1>
        </div>
        <div class="medals">
          <img src="images/2000.png">
          <img src="images/10.png">
          <img src="images/8.png">
        </div>
        <div class="contacts">
          <p>38 (044) 592-76-22<span>Без выходных с 9:00 до 19:00</span></p>

        </div>
      </div>
      </div>
    </header>
    <!-- Контент -->
    <div class="content">
      <div class="fix">
<?php

// Here we get all the information from the fields sent over by the form.
$name = $_POST['Name'];
$phone = $_POST['Phone'];
 
$to = 'okrychkov@ukr.net';
$subject = 'Заявка с сайта m-master.kiev.ua';
$message = 'ОТ: '.$name.' Телефон: '.$phone;
$headers = 'From: site@m-master.kiev.ua ' .
    'X-Mailer: PHP/' . phpversion();
 
if (mail($to, $subject, $message, $headers)) {$show = "<h2>Ваше сообщение отправлено!</h2><p>Мы свяжемся с вами в ближайшее время.</p>";}
else
{$show =  "<h2>Ошибка отправки почты</h2>";}
 echo $show; ?>
      </div>   
    </div>

    <!-- Подвал -->
    <footer>
      <div class="fix">
        <!--div class="footerlinks">
         <a class="fancybox" href="#inline3">Политика конфиденциальности</a> | <a class="fancybox" href="#inline4">Отказ от ответственности</a>
        </div--> 
        <p style="float: left;"><img src="images/logo3.png" width="250"><br>&copy 2014. Все права защищены.</p>
        <div class="contacts" style="color: #000000;">
          <p>067 862-62-62<br>38 044 592-76-22<span>Адрес: г. Киев, ул. Красногвардейская 22В.</span></p>
          <a class="fancybox" href="#inline2">Заказать звонок</a>
        </div>       
      </div>   
    </footer>


  </body>
</html>