<?php

function formatarData(int $data)
{
    return date('d/m/Y',$data);
}

function parseTimestamp(int $data){
    return date('d-m-Y', $data);
}

function parseISO(int $data){
    return date('Y-m-d', $data);
}

function parseBrasilDataHora(int $data){
    return date('d/m/Y H:i:s', $data);
}

function prioridade(int $prioridade){
    switch ($prioridade) {
        case 1:
            return "Baixa";
            break;
        case 2:
            return "Média";
            break;
        case 3:
            return "Alta";
            break;
        default:
            return "Prioridade não definida";
            break;
    }
}
?>