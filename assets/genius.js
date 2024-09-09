fetch("proxy/songs/83", {
    headers: {
        "Content-Type": "application/json"
    },
})
.then(response => response.json())
.then(data => console.log(data));