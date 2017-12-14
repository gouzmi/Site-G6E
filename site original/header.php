<?php
session_start();

		$bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', '');
?>

<header>
    <div class="header">
        <div class="image"><a href="page1.php"><img src="logodomhomepetit.png" ></a></div>
    <div>
        <a href="" class="link"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Produits</a>
        <a href="contact.php" class="link"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a>
        <a href="login.php" class="link"><i class="fa fa-user" aria-hidden="true"></i> Espace Personnel</a>
    </div>
    </div>
</header>
