var sendMessage = () => {
    var messageInput = document.getElementById('message-input');
    var message = document.getElementById('message-input').value;
    var request = new XMLHttpRequest();

    if(message != ""){
        messageInput.addEventListener("click", () => {
            request.onreadystatechange = () => {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("chat-data").innerHTML = this.responseText;
                }
            };
        });


        request.open("GET", "send-message.php?message=" + message, true);
        request.send();


        messageInput.value = "";

        jumpToChatBottom();
        // Update chat
        ajax();
    }

}