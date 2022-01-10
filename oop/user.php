<?php
class User {
    protected $nome;
    protected $cognome;
    protected $eta;
    protected $sconto;

    public function __construct($nome, $cognome, $eta)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    public function getUser(){
        return "<p> User: {$this->nome} {$this->cognome} <p/>";
    }
    protected function setSconto(){
        if($this->eta < 50){
            return $this->sconto = 10;
        }elseif($this->eta > 80){
            return $this->sconto = 40;
        }
    }
    public function getSconto(){
        $this->setSconto();
        return "Sconto da applicare: {$this->sconto}%";
    }
}
?>