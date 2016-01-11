<?php
    require_once 'Cliente.php';

    $cliente = array();
    $cliente[0] = new Cliente('rodrigo','rua das garça efapi chapeco', '99999999-99');
    $cliente[1] = new Cliente('joao','rua fulano de tal bairro sao paulo', '99999999-99');
    $cliente[2] = new Cliente('maria','rua fulano de tal bairro rio de janeiro', '99999999-99');
    $cliente[3] = new Cliente('jose','rua fulano de tal bairro sorisso', '99999999-99');
    $cliente[4] = new Cliente('pedro','rua fulano de tal bairro curitiba', '99999999-99');
    $cliente[5] = new Cliente('antonio','rua fulano de tal bairro porto alegre', '99999999-99');
    $cliente[6] = new Cliente('joana','rua fulano de tal bairro florianopolis', '99999999-99');
    $cliente[7] = new Cliente('luan','rua fulano de tal bairro salvador', '99999999-99');
    $cliente[8] = new Cliente('jean','rua fulano de tal bairro sao brasilia', '99999999-99');
    $cliente[9] = new Cliente('marcos','rua fulano de tal bairro sao paulo', '99999999-99');
        //sort($cliente);
        //rsort($cliente);
    if($_POST['order']=='sort'){
        sort($cliente);
    }else if($_POST['order']=='rsort'){
        rsort($cliente);
    }
    $conteudo = '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';


    foreach ($cliente as $indice => $objeto) {


        $conteudo .= '<div class="panel panel-default">';
        $conteudo .= '<div class="panel-heading" role="tab" id="heading'.$indice.'">';
        $conteudo .= '<h4 class="panel-title">';
        $conteudo .= '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$indice.'" aria-expanded="false" aria-controls="collapse'.$indice.'">';
        $conteudo .= '<span>'.$objeto->getNome().'</span>';
        $conteudo .= '</a>';
        $conteudo .= '</h4>';
        $conteudo .= '</div>';
        $conteudo .= '<div id="collapse'.$indice.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$indice.'">';
        $conteudo .= '<div class="panel-body">';
        $conteudo .= '<p><strong>CPF:</strong>'.$objeto->getCpf().'</p>';
        $conteudo .= '<p><strong>Endereço:</strong>'.$objeto->getEndereco().'</p>';
        $conteudo .= '</div>';
        $conteudo .= '</div>';
        $conteudo .= '</div>';

    }
    $conteudo .= '</div>';

    echo $conteudo;
?>