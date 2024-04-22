//animation of the first main section in the index page

window.addEventListener('scroll', function() {
    let scrollPosition = window.scrollY || document.documentElement.scrollTop;
    let mainSection = document.querySelector('main section');
    mainSection.style.transform = 'translateY(' + (-scrollPosition / 2) + 'px)';
});

//submit the change language form each time the language select changes
document.querySelector('nav select').addEventListener('change', function() {
    this.form.submit();
});

//fade in animation for the projects
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

//add dynamically the search parameter to the URL when the user types in the search field
window.onload = function() {
    window.dispatchEvent(new Event('scroll'));

    let searchField = document.getElementById('searchProject');
    
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