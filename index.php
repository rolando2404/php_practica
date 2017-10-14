<!doctype html>
<html lang="en">
<head>
  <title>paginas web</title>
 
</head>
<body>	
<?php
 echo "<h1>Mi primer script php!</h1>";
 //este es mi primer comentario
$x=5 + 5;
$y=10;
$w=$x+$y;
echo $w;
$texto="hola mundo";
echo "<h2>$texto</h2>";
$booleano=true;
echo <h2>.$texto."".$booleano.</h2>;
$x = 5;

funtion mifuncion(){
	global $z;
	echo "<p>var z dentro de la funciom es: $z/p</p>";
	$z++;
}
mifuncion();
mifuncion();
mifuncion();
// echo "<p>variable z fuera de la funcion es: $z</p>";
// echo $z;
$asistentes = array('rolando''charli''alfredo''fredy');
$materias = array('li08'=>'paginas web',"li09")=>'ingles');
echo $materias['li09']."<br>";
var_dump($materias):
echo$texto[3];
echo strlen($texto);
echo str_word_count($texto);
echo strrev($texto);
echo strpos($texto, 'mundo');
echo str_replace('mundo','reprobados',$texto);

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
</body>
</html>
