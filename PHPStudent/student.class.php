<?php
  class Student
  {
    private $n1;
    private $n2;

    public function Student ()
    {}

    public function getN1 ()
    {
      return $this->n1;
    }

    public function setN1 ($n1)
    {
      return $this->n1 = $n1;
    }

    public function getN2 ()
    {
      return $this->n2;
    }

    public function setN2 ($n2)
    {
      return $this->n2 = $n2;
    }

    public function average ()
    {
      return ($this->n1 + $this->n2) / 2;
    }
  }
 ?>
