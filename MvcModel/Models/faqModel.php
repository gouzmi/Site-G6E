<?php

require('connexiondb.php');

$req_id_faq = $bdd->query('SELECT id_faq FROM faq');
