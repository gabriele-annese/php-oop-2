<?php

class Categoria extends Prodotto{
    public function __construct($categoria)
    {
        $this->categoria = $categoria;
    }
    public function get_product_name(){
        return parent::getProdotto();
    }
    public function getCategoria(){
        return "Categoria: {$this->categoria}";
    }
}