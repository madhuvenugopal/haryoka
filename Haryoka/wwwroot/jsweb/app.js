const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header');

//$('.nav-item li:first').addClass('active');
$('#selectedpage').addClass('active');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 130) {
		header.style.backgroundColor = '#fff';
		header.style.borderBottom = '1px solid #e7e7e7';
		header.style.boxShadow = '0px 3px 5px 0px rgb(0 0 0 / 8%)';
	} else {
		header.style.backgroundColor = 'transparent';
		header.style.borderBottom = '0';
		header.style.boxShadow = 'none';


	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
	if(window.innerWidth<1200) {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	}
	});
});

$('.nav-item li').click(function(e) {
    $(this).addClass('active').siblings().removeClass('active');
});