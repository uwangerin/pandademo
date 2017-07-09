// Loads the dom tree
document.addEventListener('DOMContentLoaded', function () {

    //Make menu to disappear by click on mobile menu button
    var mobileMenuButton = document.getElementById("mobile-menu-button");

    mobileMenuButton.addEventListener("click", function () {
        document.getElementById("mobile-menu").classList.toggle('mobile-menu--show');
    });
});
