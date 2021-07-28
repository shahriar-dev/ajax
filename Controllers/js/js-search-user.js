function fetch() {
    const username = document.getElementById('username');

    var xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        if(this.status === 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    }

    xhttp.open("GET", "./Controllers/Validation/welcome-page-validation.php?username=" + username.value);
    xhttp.send();
}