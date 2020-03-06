<?php

namespace Lib\View;

class ViewModel
{
    public static function render($path, $data = null)
    {
        $template = $data['layout'];
        require_once __DIR__ . "/../../View/layout/$template.phtml";
    }
}
