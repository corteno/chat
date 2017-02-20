var firstScroll = true;

var scrollUpdate = () => {
    var objDiv = document.getElementById("chat-data");
    objDiv.scrollTop = objDiv.scrollHeight;
}

var initScroll = () => {
    if(firstScroll){
        setTimeout(() => {
            scrollUpdate();
            firstScroll = false;
        }, 80);

    }
}