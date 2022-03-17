<?php 

    require_once("./classes/Cesta.php");
    require_once("./inserirObjFormaPagamento.php");
    use \classes\Cesta;

    $cesta = new Cesta();
    $cesta->addItems($formaPagamento);
    $cesta->addItems($formaPagamento2);
    $cesta->addItems($formaPagamento3);

    $cesta->listItems();
    
?>