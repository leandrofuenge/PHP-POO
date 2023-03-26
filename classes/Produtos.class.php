<?php

class Produto {
    var $Codigo;
    var $Descricao;
    var $Preco;
    var $Quantidade;
    var $Formadepagamento;

    function ImprimeEtiqueta()
    {
        print "\nCódigo:   " . $this->Codigo. "\n";
        print "\nDescrição: " . $this->Descricao. "\n";
        print "\nPreço:" . $this->Preco. "\n";
        print "\nQuantidade:" . $this->Quantidade. "\n";
        print "\nForma de Pagamento:" . $this->Formadepagamento. "\n";
        
    }


}
?>