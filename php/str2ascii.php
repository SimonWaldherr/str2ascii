<?php
$delimiter = ',';
if(isset($_POST['delimiter']))
  {
    $delimiter = $_POST['delimiter'];
  }

function str2ascii($string, $delimiter=',')
  {
    $str = $_POST['str'];
    $strarray = str_split($str, 1);

    foreach($strarray as $char)
      {
        echo ord($char).$delimiter;
      }
  }

function ascii2str($string, $delimiter=',')
  {
    $chararray = explode($delimiter, $string);
    
    foreach($chararray as $char)
      {
        echo chr($char);
      }
  }

?>