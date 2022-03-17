<?php 

    namespace classes;
    use \classes\Parcelas;

    class FormaPagamento {

        private $tipoPagamento;
        private $Parcelas = [];

        public function setTipoPagamento($tipoPagamento){
            $this->tipoPagamento = $tipoPagamento;
        }

        public function setParcelas($parcelas){
            array_push($this->Parcelas,$parcelas);
        }

        public function getTipoPagamento(){
            return $this->tipoPagamento;
        }

        public function getParcelas($arrayParam){

            $parcela = new Parcelas();

            foreach ($this->Parcelas as $value) {
                $parcela = $value;
            }

            $result = get_object_vars($parcela);

            return $result[$arrayParam];

        }

        public function checkPaymentForm($tipoPagamento){

            $isCreditCard = str_contains(strtolower($tipoPagamento), "crédito");

            if(!$isCreditCard){

                $parcelas = new Parcelas();
                $parcelas->setDataParcela(null);
                $parcelas->setValorParcela(0);
                $parcelas->setParcelaPorValor();
                $parcelas->setQuantidadeParcelas(0);

                $objParcela = (object) array(
                    "dataParcela"           =>  $parcelas->getDataParcela(),
                    "valorParcela"          =>  $parcelas->getValorParcela(),
                    "valorPorParcela"       =>  $parcelas->getParcelaPorValor(),
                    "quantidadeParcelas"    =>  $parcelas->getQuantidadeParcelas()
                );

                $this->setParcelas($objParcela);
                
                return false;
            }

            return true;

        }

    }

?>