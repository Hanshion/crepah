const flight_container = document.querySelector("#reserved-flights-container")

function fill() {
    fetch("scripts/api/reserved.php")
    .then((response) => {
        return response.json()
    })
    .then((flights) => {
        flights.forEach((flight) => {
            flight_container.appendChild(generateFlightObject(flight, true))
        })
    })
    .catch((reason) => {
        console.log("Something went wrong while fetching reserved flights: " + reason)
    })
}

fill()
