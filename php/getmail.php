<?php
$value=$_POST['value'];
if($value == 2) {
  $arr = ['status'=>'1','value'=>'hi@bariscc.me'];
} else {
  $arr = ['status'=>'0','value'=>'try again'];
}
  echo json_encode($arr);

?>