<?php 

    require_once("./inserirObjParcela.php");
    require_once("./classes/FormaPagamento.php");

    use \classes\FormaPagamento;

    $formaPagamento = new FormaPagamento();
    $formaPagamento->setTipoPagamento("Cartão de Crédito");

    $isParcelAvailable = $formaPagamento->checkPaymentForm($formaPagamento->getTipoPagamento());
    if($isParcelAvailable){
        $formaPagamento->setParcelas($objParcela1);
    }
    
    $formaPagamento2 = new FormaPagamento();
    $formaPagamento2->setTipoPagamento("Pix");

    $isParcelAvailable = $formaPagamento2->checkPaymentForm($formaPagamento2->getTipoPagamento());
    if($isParcelAvailable){
        $formaPagamento2->setParcelas($objParcela2);
    }

    $formaPagamento3 = new FormaPagamento();
    $formaPagamento3->setTipoPagamento("Cartão de Débito");

    $isParcelAvailable = $formaPagamento3->checkPaymentForm($formaPagamento3->getTipoPagamento());
    if($isParcelAvailable){
        $formaPagamento3->setParcelas($objParcela3);
    }

?>