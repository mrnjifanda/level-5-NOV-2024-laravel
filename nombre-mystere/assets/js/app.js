function removeMessage(params) {
    
}

const message = document.querySelector('.message');
if (message) {

    if (message.classList.contains('success')) {
        message.classList.remove('success');
    }
    if (message.classList.contains('danger')) {
        message.classList.remove('danger');
    }
}