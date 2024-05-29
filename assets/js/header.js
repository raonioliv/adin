// INTERSECTION OBSERVER TO DISPLAY EITHER THE HEADER OR THE HEADER 
// WHEN SCREEN IS SCROLLED DOWN

let options = {
    root: null,
    rootMargin: "0px",
    threshold: 0,
};

let handleHeaderIntersection = (entries, observer) => { 
    entries.forEach(entry => {
        if(!entry.isIntersecting) { 
            $('.header-container').addClass('disable')
            $('.header-scrolled').addClass('active')
        }else{ 
            $('.header-container').removeClass('disable')
            $('.header-scrolled').removeClass('active')
        }
    });
}

let observer = new IntersectionObserver(handleHeaderIntersection, options)

const header = document.querySelector('header .header-container')

observer.observe(header)

//MENU HAMBURGER ANIMATION AND MENU DISPLAY
$('.menu-hamburger').on('click', function(){ 
    $(this).toggleClass('active')
    $('.nav').toggleClass('active')
})

$('.nav-link').on('click', function(){ 
    $('.nav').removeClass('active')
    $('.menu-hamburger').toggleClass('active')
})

//CONTACT FORM DISPLAY
$('.contact-button').on('click', function(e) { 
    e.preventDefault();
    $('#contact-form').toggleClass('active')
})

$('.close-contact').on('click', function() { 
    $('#contact-form').removeClass('active')
})