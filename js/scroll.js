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
        }, 100);
    }
}

var jumpToChatBottom = () => {
    var bottom = document.getElementById("chat-bottom");
    bottom.scrollIntoView();
};