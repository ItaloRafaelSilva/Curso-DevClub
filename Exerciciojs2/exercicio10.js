const  students = [
    { name: "Italo", testGrade: 10},
    { name: "Bruna", testGrade: 8},
    { name: "Amanda", testGrade: 7},
    { name: "Aline", testGrade: 2},
    { name: "Camila", testGrade: 8},
    { name: "Alice", testGrade: 9},
    { name: "Leticia", testGrade: 10},
    { name: "Ana Clara", testGrade: 1},
    { name: "Julha", testGrade: 8},
]

const approvedStudents = students.map( student => {

    let approvedOrNot

    if( student.testGrade >= 7){
        approvedOrNot = 'approved'
    }else{
        approvedOrNot = 'disapproved'
    }
    const students = {
        name: student.name,
        finalResult: approvedOrNot
    }

    return students
})

console.log(approvedStudents)
