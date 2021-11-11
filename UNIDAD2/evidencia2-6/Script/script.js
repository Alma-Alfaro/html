var imagenes=["imagenCinco","imagenUno","imagenDos", "imagenTres", "imagenCuatro", "imagenCinco","imagenUno"];
var num=imagenes.num;
var carrusel=document.getElementById("imagen");
var i=0;

if(i == 5){
    i=0;
}else{
    setInterval(siguiente,3200);
}
function siguiente(){
            i++;
            console.log(i);
            carrusel.innerHTML = "<img src=Imagenes/"+imagenes[i]+".jpg>";
            if(i==4){
                i=0;
            }
        }
        
function previo(){
    i--;
    console.log(i);
    if(i<=0){
        i=4;
    } 
    carrusel.innerHTML = "<img src=Imagenes/"+imagenes[i]+".jpg>";
}

function apagar(){
    clearInterval(siguiente);
}


