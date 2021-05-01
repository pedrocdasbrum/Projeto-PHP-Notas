<?php
  include "Student.class.php";

  $s = new Student;

  $s->setN1(8.6);
  $s->setN2(9.8);

  echo "<br>Nota 1: ".$s->getN1().'.';
  echo "<br>Nota 2: ".$s->getN2().'.';
  echo "<br>Média final: ".$s->average().'.';
 ?>
