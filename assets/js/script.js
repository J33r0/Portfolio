window.addEventListener('scroll', function() {
    let scrollPosition = window.scrollY || document.documentElement.scrollTop;
    let mainSection = document.querySelector('main section');
    mainSection.style.transform = 'translateY(' + (-scrollPosition / 2) + 'px)';
});


