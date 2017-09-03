<?php
  header("Access-Control-Allow-Origin:*");
  header('Content-type:text/html;charset=utf-8');
  
  @$type = $_GET['type'] ? $_GET['type'] : "top250";
  
  $searchUrl = "https://api.douban.com/v2/movie/".$type;
  
  echo file_get_contents($searchUrl);
?>