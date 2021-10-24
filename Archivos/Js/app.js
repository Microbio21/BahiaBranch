let sub1 = document.getElementById('sub1');
let sub2 = document.getElementById('sub2');   
let mirror = document.getElementById('mirror');

let btn = newFunction()

let btn2 = document.getElementById('btn2').addEventListener('click', ()=>{
    
    sub1.classList.remove('nav__opened');
    sub2.classList.toggle('nav__opened'); 
    if(mirror.classList != 'display-block'){
        mirror.classList.add('display-block');
    }
})


mirrorScreen();

function mirrorScreen() {
    mirror.addEventListener('click', (e) => {
        e.preventDefault();
        sub1.classList.remove('nav__opened');
        sub2.classList.remove('nav__opened');
        mirror.classList.remove('display-block');
    });
}

function newFunction() {
    return document.getElementById('btn').addEventListener('click', () => {

        sub2.classList.remove('nav__opened');
        sub1.classList.toggle('nav__opened');
        if (mirror.classList != 'display-block') {
            mirror.classList.add('display-block');
        }
    });
}

function getWidth() {
    return Math.max(
      document.body.scrollWidth,
      document.documentElement.scrollWidth,
      document.body.offsetWidth,
      document.documentElement.offsetWidth,
      document.documentElement.clientWidth
    );
  }



    var rightMenu = document.getElementById('rightMenu');
    if(getWidth() <= 1060 && getWidth() > 775) {
        var chooseMenu = document.getElementById('chooseIcon');
        chooseMenu.addEventListener('click', ()=>{
            rightMenu.classList.toggle('nav__visible');
        });
        document.getElementById('navClose').addEventListener('click', ()=>{
            rightMenu.classList.remove('nav__visible');
        });
      }



  

    var Menu = document.getElementById('navMenu');
    if(getWidth() <= 775) {
        var chooseMenu = document.getElementById('chooseIcon');
        chooseMenu.addEventListener('click', ()=>{
            Menu.classList.toggle('nav__menu--visible');
        });
        document.getElementById('navClose').addEventListener('click', ()=>{
            Menu.classList.remove('nav__menu--visible');
        });
    }



NavSwicht();
function NavSwicht() {
    const navSwitch = document.getElementById('navSwitch');

    navSwitch.addEventListener('click', () => {
        document.body.classList.toggle('darkmode');
        navSwitch.classList.toggle('switch__active');

        //save in the localstorage
        if (document.body.classList.contains('darkmode')) {
            localStorage.setItem('darkmode', 'true');
        } else {
            localStorage.setItem('darkmode', 'false');
        }
    });





    if (localStorage.getItem('darkmode') === 'true') {
        document.body.classList.add('darkmode');
    } else {
        document.body.classList.remove('darkmode');
    }
}

