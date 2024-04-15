window.addEventListener('scroll', function() {
    let scrollPosition = window.scrollY || document.documentElement.scrollTop;
    let mainSection = document.querySelector('main section');
    mainSection.style.transform = 'translateY(' + (-scrollPosition / 2) + 'px)';
});

document.querySelector('nav select').addEventListener('change', function() {
    this.form.submit();
});

export function fadeInScroll() {
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
}

window.addEventListener('scroll', fadeInScroll);

// window.addEventListener('load', function() {
//     window.dispatchEvent(new Event('scroll'));
// }); 

window.onload = function() {
    window.dispatchEvent(new Event('scroll'));

    let searchField = document.getElementById('searchProject');
    let form = document.querySelector('#projects form');
    let seemoreButton = document.querySelector('#projects button');
    
    searchField.addEventListener('input', function() {
        let params = new URLSearchParams(window.location.search);

        if (searchField.value) {
            params.set('searchProject', searchField.value);
        }
        else {
            params.delete('searchProject');
        }
        
        history.replaceState({}, '', window.location.pathname + '?' + params);
    }); 
};