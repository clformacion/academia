function nota(){
var nota1=0;
var nota2=0;
var nota3=0;
var resultado=0;

nota1=prompt("nota acumulada de MF0950_2: Construcción de páginas web: ");
document.getElementById("demo1").innerHTML=nota1;


nota2=prompt("nota acumulada de MF0951_2: Integración de componentes software en páginas web : ");
document.getElementById("demo2").innerHTML=nota2;


nota3=prompt("nota acumulada de  MF0952_2: Publicación de páginas web: ");
document.getElementById("demo3").innerHTML=nota3;

resultado=(Number(nota1)+Number(nota2)+Number(nota3))/3
document.getElementById("demo").innerHTML=resultado;


if(resultado < 10){
    alert("suspendido")
}else{
    alert("Es acto")
    return true;
}


}