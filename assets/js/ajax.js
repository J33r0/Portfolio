import { fadeInScroll } from './script.js';

async function loadProjects() {
    const container = document.querySelector('#projects section');
    const response = await fetch('api/projects.php');
    const projects = await response.json();

    let lastArticle; 
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

        lastArticle = container.lastElementChild.previousElementSibling;
    })

    fadeInScroll();

    if (lastArticle) {
        lastArticle.scrollIntoView({ behavior : 'smooth' });
    }

    console.log(projects);
}

let lang = 'en';
if (new URLSearchParams(window.location.search).has('lang')) {
    lang = new URLSearchParams(window.location.search).get('lang');
} else if (document.cookie.split('; ').find(row => row.startsWith('lang='))) {
    lang = document.cookie.split('; ').find(row => row.startsWith('lang=')).split('=')[1];
}

document.querySelector('#projects button').addEventListener('click', loadProjects);