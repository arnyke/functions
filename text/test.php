<?php
//array();

/*$cars = array("Volvo", "Bmw","Audi");
echo "I like: ".$cars[0] ." and " . $cars[2], PHP_EOL;
echo "I don`t like: " .$cars[2];*/

//----------------------------------------------------
// array_change_key_case() Function

/*$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","brita"=>"4");
print_r(array_change_key_case($age,CASE_UPPER));*/

/*$pets=array("a"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");
print_r(array_change_key_case($pets,CASE_UPPER));*/

//----------------------------------------------------

//array_chunk() Function
//imparte in bucati : 2cate 2, sau 3 cate 3, sau 4 cate 2;

/*$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));*/

/*$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"5");
print_r(array_chunk($age,2,true));*/

//----------------------------------------------------
// array_combine() Function

/*$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);*/

//---------------------------------------------
//array_count_values() Function

/*$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));*/

//----------------------------------------------
//array_diff() Function
//Funcția array_diff () compară valorile a două (sau mai multe) tablouri, și întoarce diferențele. 
/*$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);*/
/*
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_diff($a1,$a2,$a3);
print_r($result);*/

//---------------------------------------------
//array_diff_assoc() Function

/*$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_diff_assoc($a1,$a2);
print_r($result);
*/

//-------------------------------------
//array_diff_uassoc() Function
/*function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1; ********************
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($a1,$a2,"myfunction");
print_r($result);*/

//----------------------------
//array_fill() Function

/*$a1=array_fill(2,8,"blue");
print_r($a1);
*/
//------------------------------------------
//array_filter() Function
//functie de apel invers
/*function test_odd($var)
{
return($var & 1);
}

$a1=array("a","b",2,3,4);
print_r(array_filter($a1,"test_odd"));*/
//--------------------------------------------
//array_flip() Function

/*$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);*/
//-----------------------------------------------
//array_key_exists() Function

/*$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }*/
  //-------------------------------------
  //array_keys() Function
/*$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));*/
//-----------------------------------------------------
//array_map() Function
//inmulteste 1*1; 2*2;3*3*....
/*function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));*/
//-----------------------------------------
/*function myfunction($v)
{
if ($v==="Dog")
  {
  return "Fido";
  }
return $v;
}

$a=array("Horse","Dog","Cat");
print_r(array_map("myfunction",$a));*/

/*function myfunction($v1,$v2)
{
if ($v1===$v2)
  {
  return "same";
  }
return "different";
}

$a1=array("Horse","Dog","Cat");
$a2=array("Cow","Dog","Rat");
print_r(array_map("myfunction",$a1,$a2));*/

/*function myfunction($v)
{
$v=strtoupper($v);
  return $v;
}

$a=array("Animal" => "horse", "Type" => "mammal");
print_r(array_map("myfunction",$a));*/

//------------------------------------------
//array_merge() Function

/*$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));*/
//----------------------------------------
//array_multisort() Function
//sorteaza alfabetic
/*$a=array("Dog","Cat","Horse","Bear","Zebra");
array_multisort($a);
print_r($a);*/
//-----------------------------------------
//array_pad() Function
/*$a=array("red","green");
print_r(array_pad($a,5,"blue"));

    [0] => red
    [1] => green
    [2] => blue
    [3] => blue
    [4] => blue
*/
//------------------------------------------
//array_product() Function
/*$a=array(5,5);
echo(array_product($a));

25*/

/*$a=array(5,5,2,10);
echo(array_product($a));

500*/
//------------------------------------------
//array_push() Function
/*$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);

  	[0] => red
    [1] => green
    [2] => blue
    [3] => yellow
*/
 //--------------------------------------
    //array_rand() Function
/*$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."\n";
echo $a[$random_keys[1]]."\n";
echo $a[$random_keys[2]]."\n";
*/
//-----------------------------------------
//array_reduce() Function
/*function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction"));*/

//-Dog-Cat-Horse

/*function myfunction($v1,$v2)
{
return $v1+$v2;
}
$a=array(10,15,20);
print_r(array_reduce($a,"myfunction",5));

50*/

//------------------------------------------
//array_search() Function
/*$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("green",$a);

b*/
//-----------------------------------------
//array_values() Function
/*$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));*/

/* 	[0] => Peter
    [1] => 41
    [2] => USA
*/
//-----------------------------------------
//arsort() Function
/*$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);

foreach($age as $x=>$x_value)
    {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "\n";
    }

Key=Joe, Value=43
Key=Ben, Value=37
Key=Peter, Value=35*/

//---------------------------------------------
//count() Function

/*$cars=array("Volvo","BMW","Toyota");
echo count($cars);

3*/
//--------------------------------------
//each() Function
/*$people = array("Peter", "Joe", "Glenn", "Cleveland");
print_r (each($people));
	[1] => Peter
    [value] => Peter
    [0] => 0
    [key] => 0
*/
//-----------------------------------------
