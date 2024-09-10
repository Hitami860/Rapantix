fetch("proxy/songs/45", {
    headers: {
        "Content-Type": "application/json"
    },
})
.then(response => response.json())
.then(data => console.log(data));