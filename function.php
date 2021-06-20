<?php 
function summa($a, $b) {
   return $a + $b;
}
function raznost($a, $b) {
   return $a - $b;
}
function umnozh($a, $b) {
   return $a*$b;
}
function delenie($a, $b) {
   if($b == 0)
   {
      echo 'На ноль делить нельзя';
   } else
   {
      return $a / $b;
   }
}
function kvadrat($a) {
   return $a * $a;
}
function inverse_value($a) {
   return 1/$a;
}
function koren($a){
   return $a ** 0.5;
}
function percent($a,$b){
   return  $b * $a / 100;
}
$acts = array(
   '+' => 'summa',
   '-' => 'raznost',
   '*' => 'umnozh',
   '/' => 'delenie',
   'x2' => 'kvadrat',
   '1/x' => 'inverse_value',
   'sqrt' => 'koren',
   'percent' => 'percent',
);
$fields = array('curOperation','fieldOutputVal',  'result');

function validation($fields, $post)
{
   $result = true;
   foreach($fields as $val)
   {
      if(!isset($post[$val]) || ($val == 'fieldOutputVal' && $post[$val] == ''))
      {
         $result = false;
      }
   }
   return $result;
}
// act: act, field: field, result: result
if (validation($fields, $_POST) && isset($acts[$_POST['curOperation']])) 
{

   $act = $acts[$_POST['curOperation']];
   if(in_array($_POST['curOperation'], array('x2','1/x','sqrt')))
   {
      echo $act($_POST['fieldOutputVal']);
   } else
   {
      echo $act($_POST['result'], $_POST['fieldOutputVal']);
   }
   
}




