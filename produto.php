<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of produto
 *
 * @author vsanches
 */
abstract class produto {
    //put your code here
    private $codigo;
    private $preco;
    
    function getCodigo() {
        return $this->codigo;
    }

    function getPreco() {
        return $this->preco;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }


}
