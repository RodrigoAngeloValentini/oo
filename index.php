<?php
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$x = new SON\Conta\Types\ContaType();
$x->depositar(10);
echo $x->getSaldo();
//require_once 'Pessoa.php';
//require_once 'Produto.php';
//require_once 'Tenis.php';

//$pessoa1 = new Pessoa("Rodrigo","21");
//$pessoa2 = new Pessoa("Joao", "25");
//
//echo $pessoa1->correr(50);

//$tenis = new TenisAdidas();
//$tenis->getCor();
//
//$tenis2 = new SapaTenis();
//$tenis2->getCor();
//$tenis2->getTamanho();

//if($tenis instanceof Produto){
//    echo "Pertence a tenis";
//}else{
//    echo "Não é um tipo de tenis";
//}

//$produto = new Produto();
//
//$produto->setNome("Tenis Exemplo")
//        ->setDescricao("Essa é a descrição")
//        ->setEstoque(10)
//        ->setValor(1000)
//;


