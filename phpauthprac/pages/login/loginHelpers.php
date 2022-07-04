<?php

function emptyLoginFields($email, $password) {
  if(empty($email) || empty($password)) {
    $result = true;
  } else {
    $result = false;
  }

  return $result;
} 