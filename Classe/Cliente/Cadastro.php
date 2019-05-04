<?php
namespace Cliente;

class Cadastro extends \Cadastro{
    public function realizarVenda(){
        return "<br>Venda realizada com sucesso para " .$this->getNome();
    }
}


?>