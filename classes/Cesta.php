<?php 

    namespace classes;
    use classes\FormaPagamento;

    class Cesta {

        private $formaPagamentos;

        public function __construct(){
            $this->formaPagamentos = [];
        }
    
        public function addItems(FormaPagamento $objFormaPagamento){
            array_push($this->formaPagamentos, $objFormaPagamento);
        }

        public function listItems(){

            $counter = 0;
            $itemsLength = count($this->formaPagamentos) - 1;

            foreach($this->formaPagamentos as $formaPagamento){

                $isCounterBiggerThanItemsLength = $counter < $itemsLength;
                $counter++;

                echo "TIPO PAGAMENTO: ".$formaPagamento->getTipoPagamento()."<br>";

                if($formaPagamento->getParcelas("dataParcela") != null){
                    echo "DATA PARCELA: ".$formaPagamento->getParcelas("dataParcela")."<br>";
                    echo "VALOR PARCELA: ".$formaPagamento->getParcelas("valorParcela")."<br>";
                    echo "QUANTIDADE DE PARCELAS: ".$formaPagamento->getParcelas("quantidadeParcelas")."<br>";
                    echo "VALOR POR CADA PARCELA: ".$formaPagamento->getParcelas("valorPorParcela")."<br>";
                }
                
                echo $isCounterBiggerThanItemsLength ? "<br>OU <br><br>" : "<br>";

            }
        }
        
    }

?>