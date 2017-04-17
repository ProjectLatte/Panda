function logout() {
    if (confirm("You're about to log out of Let's Explore.")) {
        document.getElementById("logoutForm").submit();
    }
}
