const navSlise = () => {
    const menubtn = document.querySelector('#menu_btn');
    const nav = document.querySelector('.navbar');

    const navLinks = document.querySelectorAll('.navbar li');

    menubtn.addEventListener('click',() =>{
        nav.classList.toggle('nav-active');
   
        navLinks.forEach((link, index) =>{
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });   

        menubtn.classList.toggle('toggle');
    })
}

navSlise();