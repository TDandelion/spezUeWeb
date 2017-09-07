<?php

  if(isset($_COOKIE['email'])){
      echo $_COOKIE['name'];
  } else {
      echo false;
  }
