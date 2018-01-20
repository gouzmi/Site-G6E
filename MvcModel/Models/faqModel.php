<?php
$req_question_faq = $bdd ->prepare('SELECT question_faq FROM faq where id_faq=?');
$req_question_faq->execute(array($id_faq['id_faq']));
while($question_faq = $req_question_faq ->fetch())


{
  echo  "<strong>".$question_faq['question_faq']."</strong>". '<br />';
  $req_reponse_faq = $bdd->prepare('SELECT reponse_faq FROM faq where question_faq=?');
  $req_reponse_faq->execute(array($question_faq['question_faq']));
  while($reponse_faq = $req_reponse_faq->fetch())

  {
    echo "<p>".$reponse_faq['reponse_faq']."</p>".   '<br  />';
  }
?>
