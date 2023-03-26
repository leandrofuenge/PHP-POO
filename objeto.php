<?php 
// insere a classe
include_once 'classes/Produtos.class.php';

// cria um objeto
$produto1 = new Produto;

$produto2 = new Produto;

// atribuir valores
$produto1->Codigo = 4001;
$produto1->Descricao = "\nCD - The Best of Eric Clapton\n";
$produto1->Preco = "\n$250 Dolares";
$produto1->Quantidade = "\n50";
$produto1->Formadepagamento = "\n Dinheiro, Cartão de debito, Cartão de Credito.";


$produto2->Codigo = 4002;
$produto2->Descricao = "\nCD - The Eagles Hotel Cali";
$produto2->Preco = "\n$200 Dolares";
$produto2->Quantidade = "\n20";
$produto2->Formadepagamento = "\n Dinheiro, Cartão de Debito, Cartão de Credito.";


// imprime informações de etiqueta
$produto1->ImprimeEtiqueta();

$produto2->ImprimeEtiqueta();



?>