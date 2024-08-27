function showDetails(carId) {
    var carDetails = {
        car1: {
            name: "Toyota Prado",
            Engine: " Engine: 2.8L 4-Cylinder Turbo Diesel ",
            power: " Power: 201 hp",
            Price: " Price: Starting from $55,000"
        },
        car2: {
            name: "Dodge Charger",
            Engine: " Engine: 3.6L V6 / 5.7L V8 / 6.2L Supercharged HEMI V8 ",
            power: " Power: 292-797 hp (depending on the engine)",
            Price: " Price: Starting from $32,000"
        },
       
        car3: {
            name: "Range Rover Sport",
            Engine: " Engine: 3.0L I6 / 5.0L V8",
            power: " Power: 355-575 hp (depending on the engine)",
            Price: " Price: Starting from $70,000"
        },
        car4: {
            name: "Volkswagen Golf GTI",
            Engine: " Engine: 2.0L Turbocharged Inline-4",
            power: " Power: 241 hp",
            Price: " Price: Starting from $30,000"
        },
        car5: {
            name: "Mercedes G-Class",
            Engine: " Engine: 4.0L V8 Biturbo",
            power: " Power: 416-577 hp",
            Price: " Price: Starting from $130,000"
        },
        car6: {
            name: "BMW 8 Series",
            Engine: " Engine: 3.0L I6 / 4.4L V8",
            power: " Power: 335-617 hp (depending on the engine)",
            Price: " Price: Starting from $85,000"
        }
    };

    document.getElementById("car-name").innerText = carDetails[carId].name;
    document.getElementById("car-Engine").innerText = carDetails[carId].Engine;
    document.getElementById("car-power").innerText = carDetails[carId].power;
    document.getElementById("car-Price").innerText = carDetails[carId].Price;
    document.getElementById("car-details").style.display = "block";
}

function hideDetails() {
    document.getElementById("car-details").style.display = "none";
}
