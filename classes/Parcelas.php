<?php 

    namespace classes;

    class Parcelas {

        private $dataParcela;
        private $valorParcela;
        private $valorPorParcela;
        private $quantidadeParcelas;

        public function callFunction(){

            $resultArray = array(
                "dataParcela"           =>  $this->getDataParcela(),
                "valorParcela"          =>  $this->getValorParcela(),
                "valorPorParcela"       =>  $this->getParcelaPorValor(),
                "quantidadeParcelas"    =>  $this->getQuantidadeParcelas()
            );

            return $resultArray;

        }

        public function setParcelaPorValor(){

            if(is_numeric($this->getQuantidadeParcelas()) > 0)
                $this->valorPorParcela = $this->getValorParcela() / $this->getQuantidadeParcelas();
            else
                $this->valorPorParcela = $this->getValorParcela();

        }

        public function setDataParcela($dataParcela){
            $this->dataParcela = $dataParcela;
        }

        public function setValorParcela($valorParcela){
            $this->valorParcela = $valorParcela;
        }

        public function setQuantidadeParcelas($quantidadeParcelas){
            
            if($quantidadeParcelas > 0)
                $this->quantidadeParcelas = $quantidadeParcelas;
            else
                $this->quantidadeParcelas = "Pagamento Imediato";
                
        }

        public function getParcelaPorValor(){
            return $this->valorPorParcela;
        }

        public function getDataParcela(){
            return $this->dataParcela;
        }

        public function getValorParcela(){
            return $this->valorParcela;
        }

        public function getQuantidadeParcelas(){
            return $this->quantidadeParcelas;
        }

        
    }

?>