import { fadeInScroll } from './script.js';

async function loadProjects() {
    const container = document.querySelector('#projects section');
    const response = await fetch(`api/api.php?lang=${lang}`);
    const projects = await response.json();

    projects.forEach((project) => {
        container.insertAdjacentHTML(
            'beforeend', 
            `<article>
            <a href="project.php?lang=${lang}&id=${project.id}">
                    <h2>${project.title}</h2>
                    <img src="${project.img_path}" alt="project image"/>
                    <p>${project.description}</p>
                </a>
            </article>`
        );
    })

    fadeInScroll();
}

let lang = 'en';
if (new URLSearchParams(window.location.search).has('lang')) {
    lang = new URLSearchParams(window.location.search).get('lang');
} else if (document.cookie.split('; ').find(row => row.startsWith('lang='))) {
    lang = document.cookie.split('; ').find(row => row.startsWith('lang=')).split('=')[1];
}

document.querySelector('#see-more').addEventListener('click', loadProjects)
document.querySelector('#see-more').addEventListener('click', function() {
    document.querySelector('#see-more').remove();
})