function generateFlightObject(flight, is_already_reserved) {
    departure = flight["departure_time"].split(" ")
    departure_time = departure[1].substring(0, departure[1].length - 3)
    departure_date = departure[0]

    departure_js_date = new Date(departure[0] + "T" + departure[1] + "Z")

    arrival = flight["arrival_time"].split(" ")
    arrival_time = arrival[1].substring(0, arrival[1].length - 3)
    arrival_date = arrival[0]

    arrival_js_date = new Date(arrival[0] + "T" + arrival[1] + "Z")

    flight_time_delta = Math.abs(arrival_js_date - departure_js_date)

    flight_div = document.createElement("div")
    flight_div.classList.add("flight")
    flight_div.classList.add(flight["is_local"] ? "local" : "international")

    city_from_div = document.createElement("div")
    city_from_div.classList.add("city-from")
    
    city_one = document.createElement("p")
    city_one.classList.add("city1")
    city_one.innerHTML = flight["from_point"]

    flight_from_time = document.createElement("p")
    flight_from_time.classList.add("flight-from-time")
    flight_from_time.innerHTML = "Вылет: " + departure_time

    flight_from_date = document.createElement("p")
    flight_from_date.classList.add("flight-from-time")
    flight_from_date.innerHTML = departure_date

    city_from_div.appendChild(city_one)
    city_from_div.appendChild(flight_from_time)
    city_from_div.appendChild(flight_from_date)

    flight_div.appendChild(city_from_div)

    flight_time_div = document.createElement("div")
    flight_time_div.classList.add("flight-time")

    flight_hr = document.createElement("hr")
    flight_hr.classList.add("flight-hr")

    plane_img = document.createElement("img")
    plane_img.classList.add("plane-pic")
    plane_img.src = "images/flight-plane.png"

    flight_time_text = document.createElement("p")
    flight_time_text.classList.add("flight-time-text")

    flight_time_delta -= Math.floor(flight_time_delta / 86400) * 86400;

    const flight_time_hours = Math.floor(flight_time_delta / 3600) % 24;
    flight_time_delta -= flight_time_hours * 3600;

    const flight_time_minutes = Math.floor(flight_time_delta / 60) % 60;
    flight_time_delta -= flight_time_minutes * 60;

    flight_time_text.innerHTML = "В пути: " + flight_time_hours.toString() + " ч " + flight_time_minutes.toString() + " мин"

    flight_time_div.appendChild(flight_hr)
    flight_time_div.appendChild(plane_img)
    flight_time_div.appendChild(flight_time_text)

    flight_div.appendChild(flight_time_div)

    city_to_div = document.createElement("div")
    city_to_div.classList.add("city-in")
    
    city_two = document.createElement("p")
    city_two.classList.add("city2")
    city_two.innerHTML = flight["to_point"]

    flight_in_time = document.createElement("p")
    flight_in_time.classList.add("flight-in-time")
    flight_in_time.innerHTML = "Прибытие: " + arrival_time

    flight_in_date = document.createElement("p")
    flight_in_date.classList.add("flight-in-date")
    flight_in_date.innerHTML = arrival_date

    city_to_div.appendChild(city_two)
    city_to_div.appendChild(flight_in_time)
    city_to_div.appendChild(flight_in_date)

    flight_div.appendChild(city_to_div)

    date_and_money_div = document.createElement("div")
    date_and_money_div.classList.add("date-and-money")

    departure_date_prettified = document.createElement("p")
    departure_date_prettified.innerHTML = departure_js_date.toLocaleDateString("ru-RU", {
        day: "numeric",
        month: "long"
    })

    price = document.createElement("p")
    price.innerHTML = "От " + flight["price"] + "₽"

    date_and_money_div.appendChild(departure_date_prettified)
    date_and_money_div.appendChild(price)

    flight_div.appendChild(date_and_money_div)

    buy_button_div = document.createElement("div")
    buy_button_div.classList.add("buy-button")

    buy_button_text = document.createElement("a")
    buy_button_text.classList.add("bron-text")
    buy_button_text.href = "scripts/api/" + (is_already_reserved ? "cancel_flight.php" : "reserve_flight.php") + "?flightid=" + flight["id"]
    buy_button_text.innerHTML = is_already_reserved ? "Отменить" : "Бронировать"

    buy_button_div.appendChild(buy_button_text)

    flight_div.appendChild(buy_button_div)

    return flight_div
}
