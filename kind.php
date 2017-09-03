<?php
  header("Access-Control-Allow-Origin:*");
  header('Content-type:text/html;charset=utf-8');
  
  
  
  $searchUrl = "https://api.douban.com/v2/movie/top250";
  
  echo file_get_contents($searchUrl);
?>