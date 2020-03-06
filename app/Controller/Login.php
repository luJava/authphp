<?php

namespace Controller;

class Login
{
    public function index($id)
    {
        $data['title'] = 'Painel';
        return $data;
    }
 
    public function register()
    {
        $data['title'] = 'Lista de Usuarios';
        return $data;
    }
}