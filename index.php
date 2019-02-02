<?php
  $filtro = filter_input_array(INPUT_GET, FILTER_DEFAULT);
  $link = $filtro['url']; 
  $url = (isset($link)) ? $link:'home.php';
  $url = array_filter(explode('/',$url));

  $arquivo = $url[0].'.php'; 

  if(is_file($arquivo)){
    include $arquivo;
  }else{
    include 'home.php';
  } 
?>