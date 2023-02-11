// [ ] Faça um programa que receba 3 números inteiros, e deve imprimir, qual é o maior, qual é o menor.

const fisrtNumber = 01
const seccondNumber = 20
const thirdNumber = 30

if (fisrtNumber > seccondNumber && fisrtNumber > thirdNumber){
    console.log("O primeiro número e maior")
} else if (seccondNumber > thirdNumber){
    console.log("O segundo número e maior")
} else {
    console.log("O terceiro número e maior")
}

if (fisrtNumber < seccondNumber && fisrtNumber < thirdNumber){
    console.log("O primeiro número e menor")
} else if (seccondNumber < thirdNumber){
    console.log("O segundo número e menor")
} else {
    console.log("O terceiro número e menor")
}