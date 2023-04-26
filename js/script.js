'use strict';

const header = document.getElementById('js-header');
if(matchMedia('(min-width: 58.75rem)').matches){
    window.addEventListener('scroll',()=>{
        if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
            header.style.height = '80px';
            header.style.backgroundColor = '#fff';
            header.style.boxShadow = "0 1px 0 rgba(0,0,0, .4)";
        } else {
            header.style.height = '100px';
            header.style.backgroundColor = 'transparent';
            header.style.boxShadow = 'none';
        }
    });
} else{
    window.addEventListener('scroll',()=>{
        if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80){
            header.style.height = '60px';
            header.style.backgroundColor = '#fff';
            header.style.boxShadow = "0 1px 0 rgba(0,0,0, .4)";
        } else {
            header.style.height = '80px';
            header.style.backgroundColor = 'transparent';
            header.style.boxShadow = 'none';
        }
    });
}

const clickHamburger = (()=>{
    return{
        getCross: (className)=>{
            const hamburgerLine = document.getElementsByClassName(className);
            for(const cross of hamburgerLine){
                cross.classList.toggle("is-cross");
            }
        },
        getOpen: (idName)=>{
            const header__nav = document.getElementById(idName);
            header__nav.classList.toggle("is-open");
        },
        getScroll: (className)=>{
            const body = document.querySelector(className);
            body.classList.toggle('is-no-scroll');
        }
    }
})();

const hamburger = document.getElementById("js-hamburger");
hamburger.addEventListener('click',()=>{
    clickHamburger.getCross("js-hamburgerLine");
    clickHamburger.getOpen("js-header__nav");
    clickHamburger.getScroll("body");
});
