<?php

namespace Controller;

class Painel
{
    public function index($id)
    {
        $data['title'] = 'Painel';
        return $data;
    }
 
    public function userList()
    {
        $data['title'] = 'Lista de Usuarios';
        return $data;
    }
}