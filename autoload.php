<?php

function carregarClass($class)
{
  $file = str_replace('\\',DIRECTORY_SEPARATOR, $class);
  $caminhoArquivo = __DIR__ . "/app/$file.php";

  if(file_exists($caminhoArquivo)){
  	require_once $caminhoArquivo;
  }
}

spl_autoload_register('carregarClass');
