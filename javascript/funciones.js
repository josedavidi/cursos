function sumar(){
    console.log(10)
}

sumar();

const restar = (num1,num2) => (num1-num2)
const resultado = restar(5,2)
console.log(resultado)

const multiplicar = (num1,num2) =>  (num1*num2)
const resultado2 = multiplicar(5,3)
console.log(resultado2)

const data = (info = 'null') => {
    console.log (info+' usuario')
}

data('david')