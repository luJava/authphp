<?php

namespace Lib\Controller;

use Lib\View\ViewModel;


class FrontController
{

    public function run()
    {
    
        $rota = $_GET['rota'] ?? 'site/index';
        $parseRota = explode('/', $rota);


        $controller = $parseRota[0];
        $action = $parseRota[1];
        $id = $parseRota[2] ?? null;

        $pathView = "$controller/$action";

        $controller = 'Controller\\' . ucfirst($controller);
        $newController = new $controller();

        if (!method_exists($newController, $action)) 
        {
            throw new \Exception("Rota invalida");
            return;
        }

        $data['action']  = $newController->$action($id);
        $data['layout'] =  $parseRota[0] == 'painel' ? 'painel' : 'site';
        ViewModel::render($pathView, $data);
    }
}
