const ws = new WebSocket('ws://localhost:2346');


function send() {



    let xhr = new XMLHttpRequest();

    xhr.open('POST', '/server/db.php', false);
    xhr.send();

    ws.send(xhr.response);
}

ws.onmessage = function(event) {

    let elem = document.getElementById("block");
    elem.innerHTML = event.data;

};