const burger = document.querySelector('.burger');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    document.querySelector('#menu').classList.toggle('active');
});