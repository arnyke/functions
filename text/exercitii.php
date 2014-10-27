 <?php

### ADD palindrom 
```
function palindrom($a){
    $b = 0;
    $c = $a;
    while($a != 0 ){
    $m = $a % 10;
    $a = ($a-$m )/10;
    $b = $b *10 +$m;
    }
    return $b == $c;
}

//echo(palindrom(1221)) ? 'DA' : 'NU', PHP_EOL;
```
### ADD Divizori Comun
```
function divizorComun($a, $b){
    while($b !=0){
        $t= $b;
        $b = $a%$b;
        $a = $t;
    }
    return $a;
}

//echo(divizorComun(9, 6));
```
### Fractii
```
function fractii($n){
    $count = 1;
    for($i =1;$i <= $n; $i++){
        for($j =1;$j <=$n; $j++){
            if(divizorComun($i,$j)==1){
                $count++;
            }
        }
    }
    return $count;
}
//echo fractii($argv[1]),PHP_EOL;
```


### Ordoneaza descrescator

```
function ordonare($array){
    do{
        $sortat = true;
        $l = count($array);
        if($l <= 1){
            return $array;   
        }
            for($i = 0;$i<$l-1;$i++){
                if($array[$i]> $array[$i +1]){
                    $aux = $array[$i];
                    $array[$i] = $array[$i+1];
                    $array[$i+1] = $aux;
                    $sortat = false;
                }
            }
            
    }while(!$sortat);
    return $array;
}

/*$a  = array(2,4,1,10,5,-2);
print_r(ordonare($a));
echo PHP_EOL;
```

### Exemplu bulean True sau false..... ccrescator sau descrescator
```
function ordonare($array, $crescator = true){
    do{
       
        $sortat = true;
        $l = count($array);
        if($l <= 1){
            return $array;   
        }
            for($i = 0;$i<$l-1;$i++){
                
                
                $condition = $crescator ? $array[$i] > $array[$i +1] : $array[$i] < $array[$i +1];   //bulean
                if($condition){
                    $array[$i]< $array[$i +1];
                    $aux = $array[$i];
                    $array[$i] = $array[$i+1];
                    $array[$i+1] = $aux;
                    $sortat = false;
                }
                //if($array[$i]> $array[$i +1]){
                //    $aux = $array[$i];
                //    $array[$i] = $array[$i+1];
                //    $array[$i+1] = $aux;
                //    $sortat = false;
                //}
            
        }  
    }while(!$sortat);
    return $array;
}

print_r(ordonare(array(1,2,4,3,6,5),true));
echo PHP_EOL;

```


### Ordonare alfabetic

```
function ordonareAlfabetic($array, $crescator = true){
    do{
       
        $sortat = true;
        $l = count($array);
        if($l <= 1){
            return $array;   
        }
            for($i = 0;$i<$l-1;$i++){
                
                
                $condition = $crescator ? $array[$i][0] > $array[$i +1][0]
                                        : $array[$i][0] < $array[$i +1][0];   //bulean
                                        
            //$condition = $crescator ? $array[$i][0] > $array[$i +1][0]
                if($condition){
                    $array[$i]< $array[$i +1];
                    $aux = $array[$i];
                    $array[$i] = $array[$i+1];
                    $array[$i+1] = $aux;
                    $sortat = false;
                }
                //if($array[$i]> $array[$i +1]){
                //    $aux = $array[$i];
                //    $array[$i] = $array[$i+1];
                //    $array[$i+1] = $aux;
                //    $sortat = false;
                //}
            
        }  
    }while(!$sortat);
    return $array;
}
```
### compar Text
```
function comparText($text1,$text2)
{
    $l1 = strlen($text1);
    $l2 = strlen($text2);
    $main = array($l1,$l2);
    for($i=0; $i < $main; $i++){
        if($text1[$i] == $text2[$i]){
            continue;
        }
        return $text1[$i] >  $text2[$i] ? 1 : 2;
    }
    if($l1 == $l2){
        return 0;
    }
    return $l1 > $l2 ? 1 : 2;
}

echo comparText("mama", "ma");die;

print_r(comparText(array(man, ma),true));

echo PHP_EOL;
```
### nr crescator din 10 in 10
```
$nr = 1000;
for($i=0 ; $i<=$nr;$i+=10){
    print_r($i);
    echo PHP_EOL;
}
```