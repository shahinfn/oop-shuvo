<?php

trait Instrument{
    protected $mouse;
    protected $keyboard;
    protected $display;

    public function buildPc(){
        echo "Your Pc is Ready for use.";
    }
}
trait Cost{
    public function totalCost(){
        echo "Total Cost 50000";
    }
}

class MakePc{
    use Instrument;
    use Cost;
    public function setMouse($name){
        $this->mouse = $name;
    }
    public function getMouse(){
        return $this->mouse;
    }

    public function buildPc(){
        echo "Laptop is Ready";
    }

}

$pc = new MakePc();
$pc->setMouse("A4Tech Simple Mouse");
echo $pc->getMouse();
$pc->buildPc();
$pc->totalCost();

