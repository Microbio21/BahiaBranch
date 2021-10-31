//Variables globales para los botones!
let menu1 = document.getElementById('sub1');
let menu2 = document.getElementById('sub2');   
let espejo = document.getElementById('mirror');
let primaryButton = document.getElementById('btn');
let secundaryButton = document.getElementById('btn2');
let body = document.body;
//Recreando las funciones pero con mejor práctica ya que soy un chingon!

function abrirElMenu(x, y, z, primaryButton) {
    secundaryButton.addEventListener('click', ()=>{
        x.classList.remove('nav__opened');
        y.classList.toggle('nav__opened');
        /*if(z.classList != 'display-block') {
            z.classList.add ('display-block');
        };}*/
        document.addEventListener('mouseup', function(e) {
            if (!y.contains(e.target)) {
                y.classList.remove('nav__opened');
            }
        });
    });
};
abrirElMenu(menu1, menu2, espejo, primaryButton);


function abrirElMenuPrimario(x, y, z, secundaryButton) {
    secundaryButton.addEventListener('click', ()=>{
        y.classList.remove('nav__opened');
        x.classList.toggle('nav__opened');
        /*if(z.classList != 'display-block') {
            z.classList.add ('display-block');
        };*/
        document.addEventListener('mouseup', function(e) {
            if (!x.contains(e.target)) {
                x.classList.remove('nav__opened');
            }
        });
    });
};
abrirElMenuPrimario(menu1, menu2, espejo, primaryButton);


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
    const circleSwitch = document.getElementById('nav_switch-circle');
    navSwitch.addEventListener('click', () => {
        document.body.classList.toggle('darkmode');
        navSwitch.classList.toggle('switch__active');
        circleSwitch.classList.toggle('change-site');
        //save in the localstorage
        if (document.body.classList.contains('darkmode')) {
            localStorage.setItem('darkmode', 'true');
        } else {
            localStorage.setItem('darkmode', 'false');
        }
    });
    if (localStorage.getItem('darkmode') === 'true') {
        document.body.classList.add('darkmode');
        circleSwitch.classList.add('change-site');
    } else {
        document.body.classList.remove('darkmode');
        circleSwitch.classList.remove('change-site');
    }
}

