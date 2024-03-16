window.addEventListener('scroll', function() {
    let scrollPosition = window.scrollY || document.documentElement.scrollTop;
    let mainSection = document.querySelector('main section');
    mainSection.style.transform = 'translateY(' + (-scrollPosition / 2) + 'px)';
});

document.querySelector('nav select').addEventListener('change', function() {
    this.form.submit();
});


window.addEventListener('scroll', function() {
    let articles = document.querySelectorAll('#projects article');
    for (let i = 0; i < articles.length; i++) {
        let article = articles[i];
        let position = article.getBoundingClientRect().top - window.innerHeight + 15;
        if (position < 0) {
            article.classList.add('show');
        } else {
            article.classList.remove('show');
        }
    }        
});