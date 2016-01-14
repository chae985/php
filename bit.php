<?php
header("Content-Type: text/html; charset=UTF-8");

$url = $_GET['url'];

$urls['da'] = "http://daum.net";
$urls['na'] = "http://naver.com";

if(array_key_exists( $url, $urls)){
  header("Location: ". $urls[$url] );
  exit();
}else{
  echo $url. " 는 등록되어 있지 않습니다.";
}
?>
