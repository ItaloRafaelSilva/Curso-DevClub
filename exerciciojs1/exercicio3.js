//  [ ] Faça um programa que gere um número aleatório entre 1 e 10, esse número é o número 'ganhador'. Então ele também irá gerar um número aleatório entre 1 e 10, e verifica se a pessoa ganhou ou não. Em caso de ter ganhado, mostra o prêmio, se não ganhou, mostra outra mensagem.

const randomNumber = Math.floor(Math.random() * (10 - 1) + 1)
const winningrandomNumber = Math.floor(Math.random() * (10 - 1) + 1)

if(randomNumber === winningrandomNumber){
    console.log("Você GANHOU")
} else {
    console.log("Você PERDEU")
}