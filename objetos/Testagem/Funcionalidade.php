<?php

class Funcionalidade {

    public $dados = array();

    public function __construct() {

        $this->dados['eliminar'] = array(
            'nome' => 'Eliminar',
            'icon' => 'imagens/eliminar.png',
            'link' => 'www.eliminar.com',
        );

        $this->dados['historico'] = array(
            'nome' => 'Histórico',
            'icon' => 'imagens/historico.png',
            'link' => 'www.historico.com',
        );

        $this->dados['editar'] = array(
            'nome' => 'Editar',
            'icon' => 'imagens/editar.png',
            'link' => 'www.editar.com',
        );
    }
}

?>