console.log("se cargo el archivo javascript");

var contador = 0;
function sumaContador() {
    contador++;
    console.log(contador);
    document.getElementById("contador").innerHTML = contador;
}