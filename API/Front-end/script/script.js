// Exploitation de l'API, route utilisateurs.php

//1. Fetch()
const API = async() => {
    let response = await fetch("http://localhost:8000/API/Back-end/utilisateurs.php", {
        // method : "GET",
        // body : JSON.stringify({
        //     nom : "Vergnes",
        //     prénom : "Rafaël",
        //     pseudo : "raf",
        //     password : "12345"
        // })
    });
    //2. Récupération des données
    let data = await response.json();
    //3. Exploitation des données
    console.log(data);
};

API();