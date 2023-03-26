<?php
class ContaCorrente extends Conta
{
    var $Limite;

    /**
     * método construtor (sobrescrito)
     * agora, também inicializa a variável $Limite
     */
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite)
    {
        //chamada do método construtor da classe-pai
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite);
        $this->Limite = $Limite;
        
    }


    /**
     * método Retirar(Sobrescrito)
     * verifica se a $quantia retirada está dentro do limite.
     */
    function Retirar($quantia)
    {
        // imposto sobre movimentação financeira
        $cpmf = 0.05;

        if ( ($this->Saldo + $this->Limite) >= $quantia )
        {
            // Executa método da classe-pai.
            parent::Retirar($quantia);

            // Debita o Imposto
            parent::Retirar($quantia * $cpmf);
        } else

        {
           echo "Retirada não permitida...\n";
           return false;
        }

        // retirada permitida
        return true;
    }
}


?>