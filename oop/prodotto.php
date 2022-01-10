<?php

class Prodotto{
    public $nome_prodotto;
    public $prezzo_prodotto;
    public $caratteristiche_prodotto;

    public function __construct($nome_prodotto, $prezzo_prodotto, $caratteristiche_prodotto)
    {
        $this->nome_prodotto = $nome_prodotto;
        $this->prezzo_prodotto = $prezzo_prodotto;
        $this->caratteristiche_prodotto = $caratteristiche_prodotto;
    }
    public function getProdotto(){
        return "prodotto: {$this->nome_prodotto}. <br> caratteristiche: {$this->caratteristiche_prodotto}. <br> prezzo: {$this->prezzo_prodotto} €";
    }
}