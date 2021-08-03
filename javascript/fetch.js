fetch('https://pokeapi.co/api/v2/pokemon/')
    .then((res) => res.json())
    .then(data => {
        data.results.forEach(element => {
            //console.log(element)
        });
        
    }).catch(error => console.log(error))

fetch('https://flete.ec/api/v1/vehicles/rental')
    .then(res => res.json())
    .then(data => {
        //console.log(data)
        data.forEach(element => {
            console.log(element.name)
        })
    })