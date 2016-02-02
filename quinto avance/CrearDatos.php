<?php
set_time_limit (500);
class Generador
{
static private $instancia = NULL;
private function __construct(){}    
static public function getInstancia() 
{
   if (self::$instancia == NULL) {
      self::$instancia = new Generador ();
   }
return self::$instancia;
}
 
function palabras($min = 3, $max = 8)
{		
	$vocales 	= array('a', 'e', 'i', 'o', 'u');
	$consonantes 	= array('b', 'c', 'd', 'f', 'g', 'j', 'l', 'm', 'n', 'p', 'r', 's', 't');
	$tamano 	= intval(rand($min, $max));
	$actual		= intval(rand(1,2));		
	$nombre 	= '';	
	for($x=0;$x<$tamano;$x++)
	{			
		if($actual == 0)
		{
			$actual	= 1;
			$pos 	= rand(0,count($vocales)-1);
			$nombre	.=  $vocales[$pos];				
		}
		else			
		{
			$actual	= 0;
			$pos 	= rand(0,count($consonantes)-1);
			$nombre	.=  $consonantes[$pos];				
		}				
	}
	return ucfirst($nombre);
}
}
function numeros(){
	$max = 1000;
	$aleatorio = mt_rand(1, $max); //Genereamos aleatorio
	$usados[] = $aleatorio; //Guardamos el primero en un array ya que el primero no puede estar repetido
	
	for ($i = 0; $i < 5; $i++) {
	
		$aleatorio = mt_rand(1, $max); //Generamos aleatorio
		while(in_array($aleatorio,$usados)) { //buscamos que no este repetido
			$aleatorio = mt_rand(1, $max);
		}
	
		$usados[] = $aleatorio;    //No esta repetido, luego guardamos el aleatorio
	}
}
function edad(){

$max = 100;
$aleatorio = mt_rand(1, $max); //Genereamos aleatorio
$usados[] = $aleatorio; //Guardamos el primero en un array ya que el primero no puede estar repetido

 
$aleatorio = mt_rand(1, $max); //Generamos aleatorio
while(in_array($aleatorio,$usados)) { //buscamos que no este repetido
	$aleatorio = mt_rand(1, $max);
}

echo  $usados[] = $aleatorio;
}

$nombreBD = $_POST ["txtnombd"];
$nombreTL = $_POST ["txtnomtb"];
$filas = $_POST ["txtnum"];
$nombreCam = $_POST ["txtnomcamp"];


$file = fopen($nombreBD.".sql", "w");

fwrite($file, "create database ".$nombreBD." ;" . PHP_EOL);
fwrite($file, " " . PHP_EOL);
fwrite($file, "use ".$nombreBD." ;" . PHP_EOL);
fwrite($file, " " . PHP_EOL);

if($_POST ["cmbtipo"]=="Int"){
	//echo "ya llegue";
	fwrite($file, "create table   '".$nombreTL."'(
		id int primary key auto_increment,
		".$nombreCam." varchar(100));" . PHP_EOL);
	fwrite($file, " " . PHP_EOL);
	for($i=0;$i<=$filas-1;$i++){
		$generador = Generador::getInstancia();
		$generador->palabras();
		fwrite($file, "INSERT INTO '".$nombreTL."' VALUES(null,'".$generador->palabras()."');" . PHP_EOL);
		//fwrite($file, "".$generador->palabras()."" . PHP_EOL);
	}
	
}/*else if($_POST ["cmbtipo"]=="2"){
	//echo "ya llegue 2";
	fwrite($file, "create table   '".$nombreTL."'(
		id int primary key auto_increment,
		".$nombreCam." varchar(100),
		".$nombreCam." varchar(100));" . PHP_EOL);
	fwrite($file, " " . PHP_EOL);
	for($i=0;$i<=$filas-1;$i++){
		$generador = Generador::getInstancia();
		$generador->palabras();
		fwrite($file, "INSERT INTO '".$nombreTL."' VALUES(null,'".$generador->palabras()."','".$generador->palabras()."');" . PHP_EOL);
	}
}else if($_POST ["cmbtipo"]=="3"){
	fwrite($file, "create table   '".$nombreTL."'(
		id int primary key auto_increment,
		".$nombreCam." varchar(100),
		".$nombreCam." varchar(100),
		".$nombreCam." int);" . PHP_EOL);
	for($i=0;$i<=$filas-1;$i++){	
		$generador = Generador::getInstancia();
		$generador->palabras();
		$numeros = numeros();
		fwrite($file, "INSERT INTO '".$nombreTL."' VALUES(null,'".$generador->palabras()."','".$generador->palabras()."','". $numeros."');" . PHP_EOL);
	}
	
}else if($_POST ["cmbtipo"]=="4"){
	fwrite($file, "create table   '".$nombreTL."'(
		id int primary key auto_increment,
		".$nombreCam." varchar(100),
	    ".$nombreCam." varchar(100),
		".$nombreCam." int,
		".$nombreCam." int);" . PHP_EOL);
	for($i=0;$i<=$filas-1;$i++){
		$generador = Generador::getInstancia();
		$generador->palabras();
		$edad = edad();
		fwrite($file, "INSERT INTO '".$nombreTL."' VALUES(null,'".$generador->palabras()."','".$generador->palabras()."','". $numeros."','".$edad.";)" . PHP_EOL);
	}
	
}else if($_POST ["cmbtipo"]=="5"){
	fwrite($file, "create table   '".$nombreTL."'(
		id int primary key auto_increment,
		".$nombreCam." varchar(100),
		".$nombreCam." varchar(100),
		".$nombreCam." int,
		".$nombreCam." int,
		".$nombreCam." varchar(100));" . PHP_EOL);
	for($i=0;$i<=$filas-1;$i++){
		$generador = Generador::getInstancia();
		$generador->palabras();
		fwrite($file, "INSERT INTO '".$nombreTL."' VALUES(null,'".$generador->palabras()."','".$generador->palabras()."','". $numeros."','".$edad.");" . PHP_EOL);
	}
	
}else if($_POST ["cmbtipo"]=="6"){
	fwrite($file, "create table   '".$nombreTL."'(
		id int primary key auto_increment,
		".$nombreCam." varchar(100),
		".$nombreCam." varchar(100),
		".$nombreCam." int,
		".$nombreCam." int,
		".$nombreCam." varchar(100),
		".$nombreCam." varchar(100));" . PHP_EOL);
	for($i=0;$i<=$filas-1;$i++){
		$generador = Generador::getInstancia();
		$generador->palabras();
		fwrite($file, "INSERT INTO '".$nombreTL."' VALUES(null,'".$generador->palabras()."','".$generador->palabras()."','". $numeros."','".$edad.");" . PHP_EOL);
	}
	
}else if($_POST ["cmbtipo"]=="7"){
	fwrite($file, "create table   '".$nombreTL."'(
		id int primary key auto_increment,
		".$nombreCam." varchar(100),
		".$nombreCam." varchar(100),
		".$nombreCam." int,
		".$nombreCam." int,
		".$nombreCam." varchar(100),
		".$nombreCam." varchar(100),
		".$nombreCam." varchar(100));" . PHP_EOL);	
	for($i=0;$i<=$filas-1;$i++){
		$generador = Generador::getInstancia();
		$generador->palabras();
		fwrite($file, "INSERT INTO '".$nombreTL."' VALUES(null,'".$generador->palabras()."','".$generador->palabras()."','". $numeros."','".$edad.");" . PHP_EOL);
	}
}*/
fclose($file);

echo '<h1>Filas Agregadas</h1>';
echo '<script language = javascript>
	alert("Script de Base de Datos creadas por revise su carpeta");
	</script>';
header("location: index.php");
?>