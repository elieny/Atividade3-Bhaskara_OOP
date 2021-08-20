<?php 

class Calc_bhaskara
{
    function __construct()
    {
        $this->a = 1;
        $this->b = 4;
        $this->c = 2;
        $this->delta = null;
        $this->x1 = null;
        $this->x2 = null;
    }
}

class Delta extends Calc_bhaskara
{
   public function calc_delta()
    {
        $this->delta = ($this->b*$this->b) - (4*$this->a*$this->c);
        return $this->delta;

        if($this->delta >= 0) {

    $this->resultado = $this->delta;

  } else {
    $this->resultado = 'invalido';
  }
  return($this->resultado);
    }
}

class Calc_xs extends Calc_bhaskara
{
   public function x1()
    {
        $this->x1 = (-$this->b + sqrt($this->delta)) / (2 * $this->a);
        return $this->x1;
    }

    public function x2()
    {
        if($this->delta == 0 ) {

    $this->x2 = NULL;

  } else {

    $this->x2 = (- $this->b - sqrt($this->delta)) / (2 * $this->a);
  }
  return $this->x2;
    }

}

echo '<pre>';

 $bhaskara =  new Calc_bhaskara;
 $delta = new Delta;
 $calc_xs = new Calc_xs;

 var_dump($bhaskara->a);
 var_dump($bhaskara->b);
 var_dump($bhaskara->c);

echo "<br>";

 $delta->calc_delta();
 //$calc_bhaskara->delta = $calc_delta->delta;
var_dump($delta->delta);


//defino o valor de delta na classe ValorXs
$calc_xs->delta = $delta->delta;
 
 $calc_xs->x1();
var_dump($calc_xs->x1);

 
 $calc_xs->x2();
var_dump($calc_xs->x2);


$bhaskara->delta = $delta->delta;
$bhaskara->x1 = $calc_xs->x1;
$bhaskara->x2 = $calc_xs->x2;


 //$calc_bhaskara->x1 = $calc_xs();
 //$calc_bhaskara->x2 = $calc_xs();

 //var_dump($calc_bhaskara->a);
 //var_dump($calc_bhaskara->b);
 //var_dump($calc_bhaskara->c);
 //var_dump($calc_bhaskara->delta);
 //var_dump($calc_bhaskara->x1);
 //var_dump($calc_bhaskara->x2);
















 
 ?>