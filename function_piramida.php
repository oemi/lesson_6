<?php

function piramida($_symbol = '*', $_length = 10, $_full = 'false', $_reversed = 'false') 
{
	// $full - переменная при значении true добавляет нижную часть ромба, но наоборот. 
	// $reversed при значении true наклоняет ромб в правый бок
	
	$_n = 1;
	if ($_reversed == 'true') $_n = 2;
		
					for ($i = 1; $i <= $_length; $i++) {
						for ($j = 1; $j <= $_n * ($_length - $i); $j++) {
							/*
							Вывод символов белым цветом (чтобы диагонали ромба были перпендикулярны. При использовании, например, '&nbsp' ромб наклоняется из-за разной ширины символов. Еще как вариант можно использовать моноширинный шрифт.)
							*/
							echo <<<EOF
	<font color="#ffffff">$_symbol</font>
EOF;
						}
						
						for ($m = 1; $m <= (2 * $i - 1); $m++) {
						//Вывод символов красным цветом
							echo <<<EOF
	<font color="##ff0000">$_symbol</font>
EOF;
						}
						echo '<br>';
					}


					
	if ($_full == 'true')
	{
						for ($i = ($_length - 1); $i >= 1; $i--) {
    
     
						for ($j = $_n * ($_length - $i); $j >=1 ; $j--) {
						//Вывод символов белым цветом
							echo <<<EOF
	<font color="#ffffff">$_symbol</font>
EOF;
						}
						
						for ($m = (2 * $i - 1); $m >= 1; $m--) {
						//Вывод символов зеленым цветом
							echo <<<EOF
	<font color="#008000">$_symbol</font>
EOF;
						}
          				echo '<br>';
					}
	}
}


//Примеры:

piramida('*', 5, false, false);
echo '<br>';
piramida('*', 5, true, false);
echo '<br>';
piramida('*', 5, true, true);
echo '<br>';
piramida('*', 5, false, true);
?>
