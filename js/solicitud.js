document.getElementById("ci").addEventListener("keyup", getNombre)

function getNombre() {

    let nombre = document.getElementById("ci").value
    let lista = document.getElementById("nombre")

        let url = "./php/getNombre.php"
        let formData = new FormData()
        formData.append("ci", nombre)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors" 
        }).then(response => response.json())
            .then(data => {
                lista.style.display = 'block'
                lista.innerHTML = data
            })
            .catch(err => console.log(err))
   