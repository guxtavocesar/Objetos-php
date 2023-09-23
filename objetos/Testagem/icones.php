<?php

abstract class Icones
{
    // "Banco de dados de icones"
    public static $icones = [
        'listar' => 'images/aluno_lista.png';
    ];

    function pegaLink($nome) {
        switch ($nome) {
            case 'listar':
                return 'images/aluno_lista.png';
        }
    }
}

class Opcao extends Icones
{
    // $icones = [
    //     'listar' => 'images/aluno_lista.png';
    // ];

    __contruct(array $jj) {
        [$nome, $desc, $link] = $jj;
        $link_icone = Icones::icones[$nome];
        $link_icone = Icones::pegaLink($nome);
        return "<li><a href='$link'><img src='$link_icone'>$desc</a></li>";
    }
}

class Dropdown extends Opcao
{
    __constructor($listaopcoes, $tratamento) {
        foreach($listaopcoes as $condicao => $valor) {
            $opcao = new Opcao();
            $dropdownHTML .= $opcao;
        }
        echo $dropdownHTML;
    }
}

class DropdownAlunoListar extends Dropdown {

}

$opcoes = [
    //condicao, valor
    [true,      ['listar', 'Listagem', 'listar.php']],  
    [true,      ['listar', 'Listagem', 'listar.php']],  
];

$dropdownDESAPAGINA = new Dropdown($opcoes);

// *________________________________________________*

// Essa classe sempre sera criada, pois ela contem todos os icones do sistema
abstract class Icones
{
    public static $dadosIcones = array();

    $dadosIcones['editar'] = array(
        'nome' => 'editar',
        'link' => 'editaraluno.php',
        'img'  => 'imagens/editar.png',
    );

    //...

}

public class Validacao extends Icones
{

    public function validarAluno($solicitacaoIcones = array(),  int $dadosUsuario, string $url_hist_medio)
    {

    $solicitacaoIconesValidade = array();

    foreach($solicitacaoIcones as $solicitacao)
    {
        switch($solicitacao)
        {
            case "hist_ens_medio":
                switch($url_hist_medio){
                    case "S":
                        array_push($solicitacaoIconesValidade, $solicitacao);
                        continue;

                    default:
                        continue;
                };
        }
    }

    return $solicitacaoIconesValidade;

    }


}
