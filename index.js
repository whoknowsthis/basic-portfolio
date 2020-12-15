const navSlide = function()
{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    
    burger.addEventListener('click', function(){
        //toggle the nav bar
        nav.classList.toggle('nav-active');

        //animate the links inside nav
        navLinks.forEach((link, index) =>{
            if(link.style.animation)
            {
                link.style.animation = '';
            }
            else
            {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });

        //burger close animation
        burger.classList.toggle('toggle');
    });
}

navSlide();

const contactModal = document.querySelector('#contact-modal');
const contactPopup = document.querySelector('.popup');
const modalClose = document.querySelector('.popup-close');
const body = document.querySelector('body');

    contactModal.addEventListener('click', function()
    {
        contactPopup.classList.add('popup-active');
        body.style.overflow = 'hidden';
    });
    modalClose.addEventListener('click', function()
    {
        contactPopup.classList.remove('popup-active');
        body.style.overflow = '';
    });

    const blogModal = document.querySelector('#blog-modal');
    const blogPopup = document.querySelector('.blog-popup');
    const modalCloseBlog = document.querySelector('.blog-close');
    blogModal.addEventListener('click', function()
    {
        blogPopup.classList.add('popup-active');
        body.style.overflow = 'hidden';
    });
    modalCloseBlog.addEventListener('click', function()
    {
        blogPopup.classList.remove('popup-active');
        body.style.overflow = '';
    });

    function contactMe()
    {
        contactPopup.classList.add('popup-active');
        body.style.overflow = 'hidden';
    }
    

    

// --------------------------------------// 

var tl = new TimelineMax();
const controller = new ScrollMagic.Controller();

tl.from(".container", 1, {opacity: 0, scale: 0});
tl.to(".container", .5, {left: "0%"});

const scene = new ScrollMagic.Scene({
    triggerElement: ".globe"

})
.setTween(tl)
.addTo(controller);


// --------------------------------------// 

        var sliderImage = document.querySelector('.img');
        console.log(sliderImage);
        // var images = ['bulbasaur.png', 'charmander.png', 'pikachu.png', 'squirtle.png'];
        // var imgCtr = 0;
        
        // function prev()
        // {
        //     if(imgCtr <= 0) imgCtr = images.length;
        //     imgCtr--;
        //     return setImg();
        // }
        
        // function next()
        // {
        //     if(imgCtr >= images.length-1) imgCtr = -1;
        //     imgCtr++;
        //     return setImg();
        // }

        // function setImg()
        // {
        //     return sliderImage.setAttribute('src', 'images/'+images[imgCtr]);
        // }