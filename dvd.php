<?php


//include 'produto.php';


class Dvd extends produto{ 

    private $titulo;
    private $ano;
    
         
    function __construct() {
        $estoque = array(
            array(
                'titulo' => $this->titulo = 'Titulo1',
                'ano' => $this->ano = '2000',
                'preco' => '15'
                ),
            array(
                'titulo' => $this->titulo = 'Titulo2',
                'ano' => $this->ano = '1976',
                'preco' => '11'
                ),
            array(
                'titulo' => $this->titulo = 'Titulo3',
                'ano' => $this->ano = '2019',
                'preco' => '2'
                ),
            array(
                'titulo' => $this->titulo = 'Titulo4',
                'ano' => $this->ano = '2010',
                'preco' => '5'
                ),
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
                    <th>Titulo</th>
                    <th>Ano</th>
                   </tr>
            </thead>
            <tbody>';
        $contador = 0;
        $preco = 0;
        while ($contador < 4) {
            $this->setCodigo($contador);
            $this->setPreco($estoque[$contador]['preco']); 
            
           echo '
            <tr>
                <td>'.$this->getCodigo().'</td>
                <td>'.$estoque[$contador]['titulo'].'</td>
                <td>'.$estoque[$contador]['ano'].'</td>
                <td>R$ '.$this->getPreco().'</td>
               </tr>';
            $preco = $preco + $this->getPreco();
            $contador++;
        }
        echo '
            </tbody>
        </table><br>';
        echo 'Valor Total R$ '.$preco;
    }

   }
