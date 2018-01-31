<?php
if (isset($_POST['mailform'])) {

$header="MIME-Version: 1.0\r\n";
$header.='From:"DomHome.fr"<sav@DomHome.fr>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
  <body>
    <div align="left">
      <br/>
      Bonjour, <br/>
      Vous avez perdu votre mot de passe  ?<br>
      Pas d\'inquiétude, vous pouvez dès maintenant le réinitialiser.


      Si vous rencontrez toujours un problème de connexion avec votre compte,
      n\'hésitez pas à répondre à cet email ou à nous contacter sur
      <a href="DomHome.fr"> DomHome.fr <a> !

      <br/><br/>
      À bientôt, <br>
      L\'équipe DomHome
      <br><br/><br><br/>
      <img src="http://www.primfx.com/mailing/separation.png"/>
    </div>
  </body>
</html>
';

mail("yuqing.zhu8028@gmail.com", "Réinintialisation mot de passe - DomHome", $message, $header);
}

 ?>
 <form method="post">
   <input type="submit" name="mailform" value="Recevoir un mail!"/>
 </form>
