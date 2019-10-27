<?php


include 'produto.php';
include 'Perecivel.php';

class Leite extends produto implements Perecivel{

    private $marca;
    private $volume;
    private $dataValidade;
    private $dataAtual;
         
    function __construct() {
        $estoque = array(
            array(
                'marca' => $this->marca = 'Danone',
                'volume' => $this->volume = '1',
                'dataValidade' => $this->dataValidade = '10/17/2019',
                'dataAtual' => $this->dataAtual = '10/26/2019',
                'preco' => '1'
                ),
            array(
                'marca' => $this->marca = 'Itambé',
                'volume' => $this->volume = '1',
                'dataValidade' => $this->dataValidade = '10/17/2019',
                'dataAtual' => $this->dataAtual = '10/26/2019',
                'preco' => '3'
                ),
            array(
                'marca' => $this->marca = 'Nestle',
                'volume' => $this->volume = '3',
                'dataValidade' => $this->dataValidade = '10/27/2019',
                'dataAtual' => $this->dataAtual = '10/26/2019',
                'preco' => '10'
                ),
            array(
                'marca' => $this->marca = 'Itambé',
                'volume' => $this->volume = '1',
                'dataValidade' => $this->dataValidade = '10/17/2019',
                'dataAtual' => $this->dataAtual = '10/26/2019',
                'preco' => '2'
                ),
            array(
                'marca' => $this->marca = 'Itambé',
                'volume' => $this->volume = '2',
                'dataValidade' => $this->dataValidade = '10/27/2019',
                'dataAtual' => $this->dataAtual = '10/26/2019',
                'preco' => '7'
                ),
            array(
                'marca' => $this->marca = 'Molico',
                'volume' => $this->volume = '1,5',
                'dataValidade' => $this->dataValidade = '10/27/2019',
                'dataAtual' => $this->dataAtual = '10/26/2019',
                'preco' => '1'
                )
        );
        $this->estoque($estoque);
    }
    
    public function estoque($estoque) {
        echo '
        <table style="width: 900px">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Produto</th>
                    <th>Volume</th>
                    <th>data Validade</th>
                    <th>data Atual</th>
                    <th>Valor</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>';
        $contador = 0;
        $preco = 0;
        while ($contador < 6) {
            $this->setCodigo($contador);
            $this->setPreco($estoque[$contador]['preco']); 
            
            $status = $this->estaVencido($estoque[$contador]['dataAtual'], $estoque[$contador]['dataValidade']);
            if($status == TRUE){
                $validade = 'Vencido';
            } else {
                $validade = 'Válido';
            }
            
            echo '
            <tr>
                <td>'.$this->getCodigo().'</td>
                <td>'.$estoque[$contador]['marca'].'</td>
                <td>'.$estoque[$contador]['volume'].' Litros</td>
                <td>'.$estoque[$contador]['dataValidade'].'</td>
                <td>'.$estoque[$contador]['dataAtual'].'</td>
                <td>R$ '.$this->getPreco().'</td>
                <td>'.$validade.'</td>
            </tr>';
            $preco = $preco + $this->getPreco();
            $contador++;
        }
        echo '
            </tbody>
        </table><br>';
        echo 'Valor Total R$ '.$preco;
    }

    public function estaVencido($dataAtual, $dataValidade) {
        if($dataAtual > $dataValidade){
            return TRUE;
        } else{
            return FALSE;
        }
    }

}
