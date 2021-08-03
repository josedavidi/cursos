const obtenerPokemones = async() => {
    try {
        const res = await fetch('https://pokeapi.co/api/v2/pokemon/')
        const data = await res.json()
        console.log(data.results)

    } catch (error) {
        console.log(error)
    }
}

//obtenerPokemones()

const vehiculos = async () => {
    try {
        const res = await fetch('https://flete.ec/api/v1/vehicles/rental')
        const data = await res.json()
        console.log(data)

    } catch (error) {
        console.log(error)
    }
}

vehiculos()