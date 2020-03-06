<?php

namespace Controller;

class Site
{
    public function index($id)
    {
        $data['title'] = 'Home';
        return $data;
    }
}
