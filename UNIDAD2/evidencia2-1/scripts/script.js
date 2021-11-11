let kwh = parseFloat(prompt("Cantidad consumida de Kwh"))

let tarifa1 = 0
let tarifa2 = 0
let tarifa3 = 0

if (kwh > 600) {
    tarifa3 = (kwh - 600) * 5
    kwh = 600
}
if (kwh > 300) {
    tarifa2 = (kwh - 300) * 3
    kwh = 300
}
tarifa1 = kwh

let total = tarifa1 + tarifa2 + tarifa3

alert("T1 $" + tarifa1 + "\nT2 $" + tarifa2 + "\nT3 $" + tarifa3 + "\n-----------------\nTotal $" + total);