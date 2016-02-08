<?php

  function pingPong($number)
  {
    $emptyArray = array();
    for ($i = 0; $i <= $number; $i++) {
      if ($i % 15 == 0) {
        array_push($emptyArray, "ping-pong");
      } elseif ($i % 5 == 0){
        array_push($emptyArray, "pong");
      } elseif ($i % 3 == 0){
        array_push($emptyArray, "ping");
      } else {
        array_push($emptyArray, $i);
      }
    }
    var_dump($emptyArray);
  }

?>
