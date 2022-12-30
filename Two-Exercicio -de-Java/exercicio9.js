const list = [
     { name: "Italo", vip: true},
     { name: "João", vip: false},
     { name: "Leticia", vip: true},
     { name: "Arnaldo", vip: false},
     { name: "Amanda", vip: true},
     { name: "Bruna", vip: false},
     { name: "Aline", vip: true},
     { name: "Zilda", vip: false},
     { name: "Rodolfo", vip: true},
]
const newList = list.map( client => {
    const newList = {
        name: client.name,
        vip: client.vip,
        sector: client.vip ?  'Black' : 'Green'
    }

    return newList
})

console.log(newList)    