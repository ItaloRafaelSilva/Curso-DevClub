const button = document.getElementById("convert-button")
const select = document.getElementById("currency-select")

const dolar = 5.23
const euro = 5.57
const libra = 6.32
const bitcoin = 0.000011

const convertValue = () => {
    const inputReais = document.getElementById("input-real").value
    const realValuText = document.getElementById("real-value-text")
    const dolarValueText = document.getElementById("dolar-value-text")

    realValuText.innerHTML = new Intl.NumberFormat("pt-BR",
    {style: "currency", currency:"BRL"}
    ).format(inputReais)

if(select.value === "US$ Dolar Americano"){

    dolarValueText.innerHTML = new Intl.NumberFormat("en-US", 
    {style: "currency", currency:"USD"}
    ).format(inputReais / dolar)
}

if(select.value === "€ Euro"){

    dolarValueText.innerHTML = new Intl.NumberFormat("de-DE", 
    {style: "currency", currency:"EUR"}
    ).format(inputReais / euro)
}

if(select.value === "₿ Bitcoin"){
    dolarValueText.innerHTML = new Intl.NumberFormat("pt-BR", 
    {style: "currency", currency:"BTC"}
    ).format(inputReais * bitcoin)
}

if(select.value === "£ Libra"){

    dolarValueText.innerHTML = new Intl.NumberFormat("uk-UK", 
    {style: "currency", currency:"GBP"}
    ).format(inputReais / libra)
}

}

const changecurrency = () => {
    const currencyName = document.getElementById("currency-name")
   const currencyImg = document.getElementById("currency-img")

   if(select.value === "US$ Dolar Americano"){
    currencyName.innerHTML = "Dolar Americano"
    currencyImg.src = "./img/estados-unidos (1) 1.jpg"
    }

    if(select.value === "€ Euro"){
        currencyName.innerHTML = "Euro"
        currencyImg.src = "./img/Euro.jpg"
    }

    if(select.value === "₿ Bitcoin"){
        currencyName.innerHTML = "Bitcoin"
        currencyImg.src = "./img/Bitcoin.jpg"
    }

    if(select.value === "£ Libra"){
        currencyName.innerHTML = "Libra"
        currencyImg.src = "./img/libra.png"
    }

    convertValue()
}

button.addEventListener("click", convertValue)
select.addEventListener("change", changecurrency)