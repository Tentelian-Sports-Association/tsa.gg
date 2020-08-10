/**
 * Created by Wenk on 22.02.2018.
 */

function showSuccessMessage(title, message) {
    message = message || "";
    iziToast.show({
        title: title,
        message: message,
        color: 'green',
        timeout: 5000
    });
}

function showErrorMessage(title, message) {
    message = message || "";
    iziToast.show({
        title: title,
        message: message,
        color: 'red',
        timeout: 5000
    });
}

function showInfoMessage(title, message) {
    alert(message);
    message = message || "";
    iziToast.show({
        title: title,
        message: message,
        color: 'yellow',
        timeout: 5000
    });
}