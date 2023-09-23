<?php

class Caneta {

    public    $modelo;
    public    $cor;
    private   $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {

        switch($this->tampada){
            case TRUE: 
                "<p>ERRO: Não posso rabiscar</p><br>";
            default:
                "<p>Estou rabiscando . . .</p><br>";
        };

        // if($this->tampada) {
        //     echo "<p>ERRO: Não posso rabiscar</p><br>";

        // } else {
        //     echo "<p>Estou rabiscando . . .</p><br>";

        // }

    }

    public function tampar() {
        $this->tampada = true;

    }

    public function destampar() {
        $this->tampada = false;

    }

}

?>