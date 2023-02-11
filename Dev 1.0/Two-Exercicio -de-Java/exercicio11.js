const list = [20,3,234,12,17,541,6,87,275,1000];

const numberDivision = list.filter( number => {
  if(number % 2 !== 0) return false  
  if(number % 5 !== 0) return false  

  return true
})

console.log(numberDivision)