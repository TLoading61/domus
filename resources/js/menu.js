hamburger.addEventListener('click', () => {
    responsive_menu.style.animation = "fadeIn 1s 0s forwards";
    responsive_menu.style.display = "flex";
})

responsive_menu.addEventListener('click', () => {
    responsive_menu.style.animation = "fadeOut 1s 0s forwards";
    responsive_menu.style.display = "none";
})