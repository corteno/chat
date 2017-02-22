var sendMessage = () => {
    var messageInput = document.getElementById('message-input');
    var message = document.getElementById('message-input').value;
    var request = new XMLHttpRequest();


    if (message != "") {
        request.onreadystatechange = () => {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("chat-data").innerHTML = this.responseText;
            }
        };


        request.open("GET", "send-message.php?message=" + message, true);
        request.send();


        messageInput.value = "";

        jumpToChatBottom();
        // Update chat
        ajax();
    }

}

document.body.onkeyup = function (e) {
    var messageInput = document.getElementById('message-input');

    if (e.keyCode == 13 && messageInput === document.activeElement) {
        sendMessage();
    }
}