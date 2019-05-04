<?php

 class Cadastro{
 private $nome;
 private $email;
 private $datanasc;

 public function getNome(){
     return $this->nome;
 }
 public function getEmail(){
     return $this->email;
 }
 public function getDataNasc(){
     return $this->datanasc;
 }
 public function setNome($nome){
     $this->nome=$nome;
 }
 public function setEmail($email){
     $this->email=$email;
 }
 public function setDataNasc($datanasc){
     $this->datanasc=$datanasc;
 }
 public function __toString(){
     return json_encode(array(
         "nome"=>$this->getNome(),
         "email"=>$this->getEmail(),
         "data de nascimento"=>$this->getDataNasc()
     ));
 }
}
?>