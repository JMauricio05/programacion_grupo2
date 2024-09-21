<?php
//linea
/**
 * BLOQUE
 */
echo 'Hola mundo php!!!!';
$nombre = 'Pepe';
$edad = 12;
$promedio = 2.3;
$b = TRUE; //FALSE;
$apellido = 'Perez';
echo '<br>';
echo $nombre . ' ' . $apellido;
echo '<br>';
echo "$nombre <strong>$apellido</strong>";
$numeros = [12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
//for---------------------------
echo '<br>';
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i];
    echo '<br>';
}
//while---------------------------
echo '<br>';
$i = 0;
while ($i < count($numeros)) {
    echo $numeros[$i];
    echo '<br>';
    $i++;
}
//Do while---------------------------
echo '<br>';
$i = 0;
do {
    echo $numeros[$i];
    echo '<br>';
    $i++;
} while ($i < count($numeros));

//foreach---------------------------
echo '<br>';
foreach ($numeros as $value) {
    echo $value;
    echo '<br>';
}
echo '<br>';
foreach ($numeros as $index => $value) {
    echo "$index: $value";
    echo '<br>';
}

/**
 * && and
 * || or
 * ! negación
 * > mayor
 * < menor
 * >= mayor o igual
 * <= menor o igual
 * != diferente
 * == igual
 */
if (TRUE) {
    //bloque
} elseif (TRUE) {
    //bloque
} else if (TRUE) {
    //bloque
} else {
    //bloque
}

$categoria = 'a';
switch ($categoria) {
    case 'a':
        //bloque
        break;
    case 'b':
        //bloque
        break;
    default:
        //bloque
        break;
}

function saludar($nombre)
{
    echo '<br>';
    echo "Hola $nombre";
    echo '<br>';
}
saludar('Pepe');

function saludo($nombre)
{
    return "Hola $nombre";
}
echo saludo('Juanita');

$persona = [
    'nombre' => 'Pepe',
    'apellido' => 'Perez',
    'edad' => 30,
    'jobs' => []
];
echo '<br>';
echo $persona['nombre'];
echo '<br>';
foreach ($persona as $index => $value) {
    echo "$index: $value";
    echo '<br>';
}