const people = [
    {
        numberOfChildren: 2,
        salary: 2000
    },
    {
        numberOfChildren: 1,
        salary: 5000
    },
    {
        numberOfChildren: 7,
        salary: 500
    },
    {
        numberOfChildren: 2,
        salary: 3
    },
    {
        numberOfChildren: 1,
        salary: 3000
    },
    {
        numberOfChildren: 4,
        salary: 3000
    },
    {
        numberOfChildren: 6,
        salary: 200
    },
    {
        numberOfChildren: 3,
        salary: 150
    },
    {
        numberOfChildren: 4,
        salary: 20000
    },
    {
        numberOfChildren: 1,
        salary: 200
    },
    {
        numberOfChildren: 5,
        salary: -2000
    },
]

function findAverageAndHighestSalary(peopleInformation){
    let i = 0;
    let averageSalary = 0
    let averageChildren = 0
    let highestSalary = 0

    while (peopleInformation[i].salary > 0){
        averageSalary = averageSalary + peopleInformation[i].salary
        averageChildren += peopleInformation[i].numberOfChildren
        peopleInformation[i].salary > highestSalary ? highestSalary = peopleInformation[i].salary : highestSalary = highestSalary
        i++
    }

    console.log(`Média de Salario R$${(averageSalary / i).toFixed(0)}`)
    console.log(`Média de Filhos R$${(averageChildren / i).toFixed(0)}`)
    console.log(`Maior Salario R$${highestSalary}`)
}

findAverageAndHighestSalary(people)