<?php 

  function sayHi() {
    if($_POST['name']) {
      return "Hello {$_POST['name']}!";
    }
  }

?>