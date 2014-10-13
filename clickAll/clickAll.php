<?php
function clickAll(xpaths,$page);
foreach($xpaths as $xpath){
	if($atributes = $page->findAll('xpath',$xpath)){
		foreach ($atributes as $atribute) {
			$atribute->click();
		}
	}
}

//daca am o pagina cu chenar de bifare la servici si avem peste 10 chenare sa nu stam si sa bifam una cate una.
//aceasta functie ne permite sa bifam repede toate.