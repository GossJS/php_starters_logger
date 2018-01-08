<?php
  $f = fopen('log.txt', 'a');
  $list = '';
  $list .= '<ul>';
  function wrap($x){
    return '<li>'.$x.'</li>';
  }
  while (($line = fgets($f)) !== false) {
      echo wrap($line);
  }
  fclose($handle);
  $list .= '</ul>';
  return $list;
