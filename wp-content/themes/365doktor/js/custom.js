var burger = document.getElementsByClassName('menu-mob-button')[0],
    submenu = document.getElementsByClassName('header__menu-wrap')[0];
burger.onclick = function () {
    this.classList.toggle('open');
    submenu.classList.toggle('active');
};


window.onscroll = function () {
    if (window.pageYOffset > 100) {
        document.getElementsByClassName('header__wrap')[0].classList.add('fixed');
    } else if (window.pageYOffset == 0) {
        document.getElementsByClassName('header__wrap')[0].classList.remove('fixed');
    }
};


var toggleBlock = document.getElementsByClassName('toggle-block'),
    toggleTitle = document.getElementsByClassName('toggle-block-title');
window.addEventListener('click', function (e) {
    for (var i = 0; i < toggleBlock.length; i++) {
        if (e.target == toggleTitle[i]) {
            toggleBlock[i].classList.toggle('active');
        }
    }
});

$(".cta__btn").on('click', function () {
    document.getElementsByClassName('right-modal__wrap')[0].style.display = 'block';
});

document.getElementsByClassName('right-modal__close')[0].onclick = function () {
    document.getElementsByClassName('right-modal__wrap')[0].style.display = 'none';
};

document.getElementsByClassName('contact-modal__close')[0].onclick = function () {
    document.getElementsByClassName('contact-modal__wrap')[0].style.display = 'none';
};

/* select lang */
var lang = $('.header__lang-submenu .current-lang a').attr('lang');
lang_m = lang.split('-')[0];
console.log(lang_m);
$('.header__lang_title').text(lang_m);


$('.btn_form').on('click', function () {
    document.getElementsByClassName('contact-modal__wrap')[0].style.display = 'flex';
});
