alert("Hola Pepe");
console.log("Pepe");
console.error("Pepe 2");
//cometario
/**
 * Definición de variables
 * var, let, const
 */
var nombre = "Pepe"; //string
let apellido = ""; //string
apellido = "Gomez";
let nombreCompleto = nombre + " " + apellido;
nombreCompleto = `Nombre completo: ${nombre} ${apellido}`;
const a = 2; //number
let salario = 12.36; //number
let edad = 25; //number
let mayorEdad = true; //boolean
mayorEdad = false; //boolean
let pares = new Array(5);
pares[0] = 2;
pares[1] = 4;
pares[2] = 6;
pares[3] = 8;
pares[4] = 10;
console.log(pares);

let impares = [1, 3, 5, 7, 9, 11];
console.log(impares);

/**
 * Condicionales - Operadores
 * && and
 * || or
 * ! negación
 * > mayor que
 * < menor que
 * >= mayor o igual
 * <= menot o igual
 * != diferente
 * == igual valor
 * === igual valor y tipo de variable
 */
const c = "1";
const d = 1;
console.log(c == d);
console.log(c === d);

if (c === d) {
  //bloque
} else if (c == d) {
  //bloque
} else {
  //bloque
}

let categoria = "a";
switch (categoria) {
  case "a":
    //bloque
    break;
  case "b":
    //bloque
    break;
  default:
    //bloque
    break;
}
console.log("Ciclos-----------------------");
let numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

console.log("For-----------------------");
for (let index = 0; index < numeros.length; index++) {
  console.log(numeros[index]);
}

console.log("For in-----------------------");
for (let index in numeros) {
  console.log(numeros[index]);
}

console.log("For of-----------------------");
for (let numero of numeros) {
  console.log(numero);
}

console.log("While-----------------------");
let index = 0;
while (index < numeros.length) {
  console.log(numeros[index]);
  index++;
}

console.log("Do While-----------------------");
index = 0;
do {
  console.log(numeros[index]);
  index++;
} while (index < numeros.length);

console.log("foreach-----------------------");
numeros.forEach((value, index) => {
  console.log(`${index}: ${value}`);
});

//imprimir el primer numero par de numeros
//imprimir todos los número impares de numeros
//combiar o unir el array de numeros con el array [20,21,22,23,24,25,26,27,28,29,30]
//Ordenar la nueva lista de mayor a menor
//agregar el número 50 al comienzo del array.

console.log("//imprimir el primer numero par de numeros");
let i = 0;
while (i < numeros.length) {
  if (numeros[i] % 2 == 0) {
    console.log(numeros[i]);
    break;
  }
  i++;
}
console.log("//imprimir todos los número impares de numeros");
i = 0;
while (i < numeros.length) {
  if (numeros[i] % 2 == 1) {
    console.log(numeros[i]);
  }
  i++;
}
console.log("//[20,21,22,23,24,25,26,27,28,29,30]");
const nuevoArray = [20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30];
for (let index in nuevoArray) {
  numeros[numeros.length] = nuevoArray[index];
}
console.log(numeros);
console.log("ordenar mayor a menor");
for (let pos = numeros.length - 1; pos >= 0; pos--) {
  console.log(numeros[pos]);
}
console.log("//agregar el número 50 al comienzo del array.");
const nuevo = [50];
for (let index in numeros) {
  nuevo[nuevo.length] = numeros[index];
}
console.log(nuevo);

numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

console.log("//imprimir el primer numero par de numeros");
const par = numeros.find((vuele) => vuele % 2 == 0);
console.log(par);
console.log("//imprimir todos los número impares de numeros");
const imparesDos = numeros.filter((vuele) => {
  return vuele % 2 == 1;
});
console.log(imparesDos);
console.log("//[20,21,22,23,24,25,26,27,28,29,30]");
const comb = numeros.concat([20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30]);
console.log(comb);

console.log("ordenar mayor a menor");
comb.sort((a, b) => {
  return b - a;
});
console.log(comb);
console.log("//agregar el número 50 al comienzo del array.");
comb.unshift(50);
console.log(comb);
comb.push(100);
console.log(comb);
comb.reverse();
console.log(comb);
comb.pop();
console.log(comb);
comb.shift();
console.log(comb);
comb.splice(4, 3);
console.log(comb);
const l = comb.map(function (value) {
  const p = value % 2 === 0 ? "Par" : "Impar";
  //   let p = "";
  //   if( value % 2 === 0){
  //     p = 'Par';
  //   }else{
  //     p = 'Impar';
  //   }
  return `${value} es ${p}`;
});
console.log(l);
console.log(l.join("..."));

function saludar(nombre) {
  console.log(`hola ${nombre}`);
}
saludar("Pepe");

function saludo(nombre, a) {
  return "hola " + nombre;
}
console.log(saludo("Pepe", 12));

const saludarDos = function (nombre) {
  console.log(`hola ${nombre}`);
};
saludarDos();

const saludarTres = (nombre) => {
  console.log(`hola ${nombre}`);
};
const saludoDos = (nombre) => {
  return `hola ${nombre}`;
};

class Persona {
  nombre = "";
  edad = 12;

  getNombre() {
    return this.nombre;
  }
}
const persona = new Persona();
persona.nombre = "Pepe";
console.log(`hola ${persona.nombre}`);

const personaDos = {
    nombre: '',
    edad: 26,
    casado: false,
    jobs: ['a','b','c'],
    materias:[
        {nombre:'Programación', codigo:25556},
        {nombre:'Programación 1', codigo:2555644},
    ]
};
personaDos.nombre = 'Pepe';
console.log(`hola ${personaDos.nombre}`);
console.log(personaDos['nombre']);
