<?php
  include "../model/notes.class.php";

  $n = new Notes();

  $n->setName($_POST['tnome']);
  $n->setN1($_POST['tn1']);
  $n->setN2($_POST['tn2']);
  $n->setN3($_POST['tn3']);

  echo "Nome: {$n->getName()}".'.'
      ."<br>Nota 1: {$n->getN1()}".'.'
      ."<br>Nota 2: {$n->getN2()}".'.'
      ."<br>Nota 3: {$n->getN3()}".'.'
      ."<br>Resultado final: {$n->result()}".'.';
 ?>
