<?php
header("Content-Type: text/html; charset=UTF-8");

?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<h1>당신에게 어울리는 배역은?</h1>
<h3>
당신에게 어울리는 배역은 무엇일까요?
</h3>
<h4><?=$count?>명이 참여하였습니다.</h4>
<form class="navbar-form navbar-left" action="postResult.php" method="post" >
  <div class="form-group">
    <input type="text" class="form-control" id="name" name = "name" placeholder="이름을 입력하세요">

  </div>
  <button type="submit" class="btn btn-default">테스트 하기</button>
</form>


