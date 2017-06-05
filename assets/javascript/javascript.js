$(document).ready(function() {
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-header").toggleClass("toggled");
        $("#main-container").toggleClass("toggled");
    });
});