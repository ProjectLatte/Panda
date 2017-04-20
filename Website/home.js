var DiscordDrawer = document.getElementById("DiscordDrawer");
var DiscordSlider = document.getElementById("DiscordSlider");

function openDiscordDrawer() {
    if (DiscordSlider.style.left == "95%") {
        DiscordSlider.style.left = "0px";
    } else {
        DiscordSlider.style.left = "95%";
    }
}
