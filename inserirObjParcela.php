<?php 

    require_once("./classes/Parcelas.php");
    use \classes\Parcelas;

    $objParcela1 = new Parcelas();
    
    $objParcela1->setDataParcela('1999-02-18');
    $objParcela1->setQuantidadeParcelas(3);
    $objParcela1->setValorParcela(60);
    $objParcela1->setParcelaPorValor();

    $objParcela1 = (object) array(
        "dataParcela"           =>  $objParcela1->getDataParcela(),
        "valorParcela"          =>  $objParcela1->getValorParcela(),
        "valorPorParcela"       =>  $objParcela1->getParcelaPorValor(),
        "quantidadeParcelas"    =>  $objParcela1->getQuantidadeParcelas()
    );

    $objParcela2 = new Parcelas();

    $objParcela2->setDataParcela('2022-03-17');
    $objParcela2->setQuantidadeParcelas(2);
    $objParcela2->setValorParcela(80);
    $objParcela2->setParcelaPorValor();

    $objParcela2 = (object) array(
        "dataParcela"           =>  $objParcela2->getDataParcela(),
        "valorParcela"          =>  $objParcela2->getValorParcela(),
        "valorPorParcela"       =>  $objParcela2->getParcelaPorValor(),
        "quantidadeParcelas"    =>  $objParcela2->getQuantidadeParcelas()
    );

    $objParcela3 = new Parcelas();

    $objParcela3->setDataParcela('2012-12-12');
    $objParcela3->setQuantidadeParcelas(5);
    $objParcela3->setValorParcela(120);
    $objParcela3->setParcelaPorValor();

    $objParcela3 = (object) array(
        "dataParcela"           =>  $objParcela3->getDataParcela(),
        "valorParcela"          =>  $objParcela3->getValorParcela(),
        "valorPorParcela"       =>  $objParcela3->getParcelaPorValor(),
        "quantidadeParcelas"    =>  $objParcela3->getQuantidadeParcelas()
    );

?>