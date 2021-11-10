function suma() {
    let div1 = document.createElement("div")
    let res = document.createElement("h1")
    let n1 = document.getElementById("num1").value
    let n2 = document.getElementById("num2").value
    let r = Number(n1) + Number(n2)
    res.innerText = "RESULTADO = " + r
    div1.appendChild(res)
    document.getElementById("resultado").appendChild(div1)
}

function resta() {
    let div1 = document.createElement("div")
    let res = document.createElement("h1")
    let n1 = document.getElementById("num1").value
    let n2 = document.getElementById("num2").value
    let r = Number(n1) - Number(n2)
    res.innerText = "RESULTADO = " + r
    div1.appendChild(res)
    document.getElementById("resultado").appendChild(div1)
}

function multiplicacion() {
    let div1 = document.createElement("div")
    let res = document.createElement("h1")
    let n1 = document.getElementById("num1").value
    let n2 = document.getElementById("num2").value
    let r = Number(n1) * Number(n2)
    res.innerText = "RESULTADO = " + r
    div1.appendChild(res)
    document.getElementById("resultado").appendChild(div1)
}

function division() {
    let div1 = document.createElement("div")
    let res = document.createElement("h1")
    let n1 = document.getElementById("num1").value
    let n2 = document.getElementById("num2").value
    let r = Number(n1) / Number(n2)
    res.innerText = "RESULTADO = " + r
    div1.appendChild(res)
    document.getElementById("resultado").appendChild(div1)
}

function media(n) {
    let sum = 0
    for (let i = 0; i < n; i++) {
        sum = sum + Number(document.getElementById("num-" + i).value)
    }
    let div1 = document.createElement("div")
    let res = document.createElement("h1")
    let r = Number(sum) / Number(n)
    res.innerText = "RESULTADO = " + r
    div1.appendChild(res)
    document.getElementById("resultado").appendChild(div1)
}

function desviacion(n) {
    let datos = []
    for (let i = 0; i < n; i++) {
        datos.push(Number(document.getElementById("num-" + i).value))
    }

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

    let div1 = document.createElement("div")
    let res = document.createElement("h1")
    res.innerText = "RESULTADO = " + desviacionEstandar
    div1.appendChild(res)
    document.getElementById("resultado").appendChild(div1)
}

function generarNInputs(fun) {
    let numero = document.getElementById("num1").value
    let res = document.getElementById("resultado")
    res.innerHTML = ""
    for (let i = 0; i < numero; i++) {
        let div1 = document.createElement("div")
        div1.className = "contenedor"
        let num1 = document.createElement("input")
        num1.type = "number"
        num1.id = "num-" + i
        let saltoLinea = document.createElement("br")
        // resbtn.onclick = fun + "();"
        div1.appendChild(num1)
        res.appendChild(div1)
        res.appendChild(saltoLinea)
    }
    let div3 = document.createElement("div")
    div3.className = "contenedor"
    let resbtn = document.createElement("input")
    resbtn.type = "button"
    resbtn.value = "CALCULAR"
    resbtn.setAttribute("onClick", fun + "(" + numero + ");")
    // resbtn.onclick = fun + "();"
    div3.appendChild(resbtn)
    res.appendChild(div3)
}

function generarBotones(fun) {
    if (fun === "media" || fun === "desviacion") {
        let res = document.getElementById("resultado")
        res.innerHTML = ""
        let div1 = document.createElement("div")
        div1.className = "contenedor"
        let div3 = document.createElement("div")
        div3.className = "contenedor"
        let num1 = document.createElement("input")
        num1.type = "number"
        num1.id = "num1"
        let saltoLinea = document.createElement("br")
        let saltoLinea2 = document.createElement("br")
        let resbtn = document.createElement("input")
        resbtn.type = "button"
        resbtn.value = "GENERAR CELDAS"
        resbtn.setAttribute("onClick", "generarNInputs('" + fun + "'); ")
        // resbtn.onclick = fun + "();"
        div1.appendChild(num1)
        div3.appendChild(resbtn)
        res.appendChild(div1)
        res.appendChild(saltoLinea)
        res.appendChild(saltoLinea2)
        res.appendChild(div3)
    } else {
        let res = document.getElementById("resultado")
        res.innerHTML = ""
        let div1 = document.createElement("div")
        div1.className = "contenedor"
        let div2 = document.createElement("div")
        div2.className = "contenedor"
        let div3 = document.createElement("div")
        div3.className = "contenedor"
        let num1 = document.createElement("input")
        num1.type = "number"
        num1.id = "num1"
        let num2 = document.createElement("input")
        num2.type = "number"
        num2.id = "num2"
        let saltoLinea = document.createElement("br")
        let saltoLinea2 = document.createElement("br")
        let resbtn = document.createElement("input")
        resbtn.type = "button"
        resbtn.value = "CALCULAR"
        resbtn.setAttribute("onClick", fun + "();")
        // resbtn.onclick = fun + "();"
        div1.appendChild(num1)
        div2.appendChild(num2)
        div3.appendChild(resbtn)
        res.appendChild(div1)
        res.appendChild(saltoLinea)
        res.appendChild(div2)
        res.appendChild(saltoLinea2)
        res.appendChild(div3)
    }
}