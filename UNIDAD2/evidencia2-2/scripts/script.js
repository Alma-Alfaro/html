let datos = []
let datoActual = 0
do {
    datoActual = parseFloat(prompt("Introduce 1 dato, 0 para finalizar"))
    datos.push(datoActual)
} while (!(datoActual === 0))
datos.pop()

let media = 0
for (let i = 0; i < datos.length; i++) {
    media = media + datos[i];
}
media = media / datos.length

let varianza = 0
for (let i = 0; i < datos.length; i++) {
    varianza = varianza + Math.pow(datos[i] - media, 2)
}
varianza = varianza / datos.length

let desviacionEstandar = Math.sqrt(varianza)

alert("DESVIACION ESTANDAR : " + desviacionEstandar)