function  calculateDiscount(name, value, isFirstPurchase, isCashPayment){

    if(isFirstPurchase && isCashPayment){
    
        if(value > 1000){}
        else if(value < 500){}
        else{
            console.log('Obrigado por realizar a sua primeira compra conosco, você teve um desconto de 30%')
        }

    }
    
    if(isFirstPurchase && isCashPayment){

        if(value < 1000){}
        else if(value > 500){}
        else{
            console.log('Obrigado por realizar a sua primeira compra conosco, você teve um desconto de 25%')
        }

    }
        
    if(isFirstPurchase && isCashPayment){

        if(value < 1000){}
        else if(value < 500){}
        else{
            console.log('Obrigado por realizar a sua primeira compra conosco, você teve um desconto de 20%')
        }

    }
    
    if(isFirstPurchase && !isCashPayment){

        if(value > 1000){}
        else if(value < 500){}
        else{
            console.log('Obrigado por realizar a sua primeira compra conosco, você teve um desconto de 20% em pagamento parcelado')
        }
    }

        
    if(isFirstPurchase && !isCashPayment){

        if(value < 1000){}
        else if(value > 500){}
        else{
            console.log('Obrigado por realizar a sua primeira compra conosco, você teve um desconto de 15% em pagamento parcelado')
        }
    }

        
    if(isFirstPurchase && !isCashPayment){

        if(value < 1000){}
        else if(value < 500){}
        else{
            console.log('Obrigado por realizar a sua primeira compra conosco, você teve um desconto de 10% em pagamento parcelado')
        }
    }
    if(!isFirstPurchase && isCashPayment){

        if(value > 1000){}
        else if(value > 500){}
        else{
            console.log('Obrigado por comprar novamente conosco, você teve um desconto de 20%')
        }

    }
    if(!isFirstPurchase && isCashPayment){

        if(value < 1000){}
        else if(value > 500){}
        else{
            console.log('Obrigado por comprar novamente conosco, você teve um desconto de 15%')
        }

    }
    if(!isFirstPurchase && isCashPayment){

        if(value < 1000){}
        else if(value < 500){}
        else{
            console.log('Obrigado por comprar novamente conosco, você teve um desconto de 10%')
        }

    }
    if(!isFirstPurchase && !isCashPayment){

        if(value > 1000){}
        else if(value > 500){}
        else{
            console.log('Obrigado por comprar conosco, você teve um desconto de 10% por ser não a primeira e não pagar avista')
        }

    }
    if(!isFirstPurchase && !isCashPayment){

        if(value < 1000){}
        else if(value > 500){}
        else{
            console.log('Obrigado por comprar conosco, você teve um desconto de 5% por ser não a primeira e não pagar avista')
        }

    }
    
    if(!isFirstPurchase && !isCashPayment){

        if(value > 1000){}
        else if(value < 500){
            Math.random() * (20 - 10) + 10;
        }
        else{
            console.log('Obrigado por comprar conosco, mas você não teve desconto por não ser a sua primeira compra e nem pagamento a vista')
        }
        return
    }
}

calculateDiscount(1500, 1, 1)