$(document).ready(function() {
    function login() {
        var username = loginForm.name.value;
        var password = loginForm.name.value;
        if (username == "" || password == "") {
            alert("Please enter a valid username and password");
            return false;
        }

        var http = new XMLHttpRequest();
        http.onreadystatechange = function() {
            if (http.readyState == 4 && http.status == 200) {
                console.log(http.responseText);
            }

        }

        http.open("GET", "login.php?username=" + username + "&password=" + password, true);
        http.send();





    }
});