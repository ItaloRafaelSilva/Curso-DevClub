function cauculate (valorInicial, valorAtual, tempo) {
    const juros = (valorAtual - valorInicial) /  (valorInicial * tempo)
    console.log((juros * 100).toFixed(2) + '%')
}

cauculate(1000, 1200, 10)