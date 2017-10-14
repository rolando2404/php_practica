<?php
if ($booleano){
	echo "<h2>Entrando em el if</h2>";
}else{
	echo "<h2>mmmm.....no entrando em el if</h2>";
}
$a=10;
$b=7;
if ($a<$b) {
	echo "a es menor que b";
}else if ($b<$a) {
	echo "b es menor que a";

}else{
	echo "b es menor que a";
}

$a='hola';
switch ($a) {
	case 'hola':
		echo "<h2>hola desde case hola</h2>";

		break;
	
	default:
		# code...
		break;
}
$b=5;
while (b <= 10) {
	echo "<h3>while</h3>";
	$b++;
}

for ($i=0; $i < ; $i++) { 
	echo "<h3>Hola desde for</h3>";
}

foreach ($asistente as $nombre){
	echo "<h1>".$nombre."esta reprobado....</h1>";
}

foreach ($materias as $clave => $curso) {
	echo "<h2>La materia $curso tiene clave $clave</h2>";
}

funtion ponerh1($value='hola')
   {
	echo "<h1>$value</h1>";
	}
	ponerH1($texto);
	ponerH1();

	public funtion suma($a,$b)
	{
		return $a+$b;
	}			
    
    ponerH1(suma(2,4));
    $var=suma(43,49);
?>