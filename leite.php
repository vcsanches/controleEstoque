<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of leite
 *
 * @author vsanches
 */
include 'produto.php';
include 'perecivel.php';

class leite extends produto implements perecivel{
    //put your code here
    
    private $marca;
    private $volume;
    private $dataValidade;
    private $dataAtual;
    
    function __construct() {
        $marca = $this->marca = 'Danone';
        $volume = $this->volume = '1Litro';
        $dataAtual =$this->dataAtual = '10/22/2019';
        $dataValidade = $this->dataValidade = '10/30/2019';
        $codigo = $this->setCodigo('1') ;
        $preco =  $this->setPreco('50');
        $this->estaVencido($dataValidade, $dataAtual);
       // $this->       
       
    }

    public function estoque() {
        
        $contador = 0;
        while ($contador < 6) {
            $estoque = array(
                'Marca' => $this->marca = 'Danone',
                'Volume' => $this->volume = '1 Litro', 
            );
            $contador++;
        }
        

        
        //print_r($estoque);
        /*
        $estoque = array(
            'Leite1' => 'Itambé', 'Leite2' => 'Nestle', 'Leite3' => 'Lacta');
        */
        $cont = 0;
        foreach ($estoque as $key => $value) {
           $cont = $cont+1; 
           echo 'O produto '.$key.' o código é '.$cont.' e a marca e '.$value.'<br>';
        }
        
    }


    public function estaVencido($dataValidade, $dataAtual) {

        if($dataValidade > $dataAtual ){
           return true;
        }else{
           return false;
        }
        
    }

}
