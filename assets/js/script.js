window.addEventListener('scroll', function() {
    let scrollPosition = window.scrollY || document.documentElement.scrollTop;
    let mainSection = document.querySelector('main section');
    mainSection.style.transform = 'translateY(' + (-scrollPosition / 2) + 'px)';
});

window.addEventListener('scroll', function() {
    let scrollValue = window.scrollY / window.innerHeight;
    let fade = 0;
    const articles = document.querySelectorAll('article');

    articles.forEach(article => {
        article.style.animation = 'articleAnimation 2s ease-in-out forwards';
    });

    // if (scrollValue < 1) {
    //     fade = (1 - scrollValue) * 2;
    //     articles[0].style.transform = 'translate3d('+scrollValue+'%, '+scrollValue+'%, 0px)';
    // }

});

