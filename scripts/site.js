function logout() {
    if (confirm("You're about to log out of Let's Explore.")) {
        document.getElementById("logoutForm").submit();
    }
}

function login() {
    var loginDiv = document.getElementById("loginCredentials");
    loginDiv.classList.toggle("open");
}
