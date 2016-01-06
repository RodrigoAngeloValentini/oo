<?php

namespace SON\Conta;

use SON\Conta\Util\ProcessoTrait;

abstract class ContaAbstract
{
    use ProcessoTrait;
    protected $saldo;

    public final function depositar($valor){
        $this->iniciaProcesso();
        $this->saldo += $this->calculoDeposito($valor);
        $this->finalizaProcesso();
        return true;
    }

    public function sacar($valor){
        if($this->saldo >= $valor){
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function calculoDeposito($valor);
}