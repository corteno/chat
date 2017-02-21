function ajax() {
    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            document.getElementById('chat-data').innerHTML = request.responseText;
        }
    };

    request.open('GET', 'chat-logic.php', true);
    request.send();
}