<?php
  class Notes
  {
    private $name;
    private $n1;
    private $n2;
    private $n3;

    public function Notes()
    {}

    public function getName()
    {
      return $this->name;
    }

    public function setName($name)
    {
      return $this->name = $name;
    }

    public function getN1()
    {
      return $this->n1;
    }

    public function setN1($n1)
    {
      return $this->n1 = $n1;
    }

    public function getN2()
    {
      return $this->n2;
    }

    public function setN2($n2)
    {
      return $this->n2 = $n2;
    }

    public function getN3()
    {
      return $this->n3;
    }

    public function setN3($n3)
    {
      return $this->n3 = $n3;
    }

    public function average()
    {
      return ($this->n1 + $this->n2 + $this->n3) / 3;
    }

    public function result()
    {
      if ($this->average() >= 7) {
        return "Aprovado";
      }
      else {
        return "Reprovado";
      }
    }
  }
 ?>
