import { fadeInScroll } from './script.js';

async function loadProjects() {
    const container = document.querySelector('#projects section');
    const response = await fetch('api/projects.php');
    const projects = await response.json();

    let lastArticle; 
    projects.forEach((project) => {
        container.insertAdjacentHTML(
            'beforeend', 
            `<div></div>
            <a href="project.php?id=${project.id}">
                <article>
                    <h2>${project.title}</h2>
                    <img src="${project.img_path}" alt="project image"/>
                    <p>${project.description}</p>
                </article>
            </a>
            <div></div>`
        );

        lastArticle = container.lastElementChild.previousElementSibling;
    })

    fadeInScroll();

    if (lastArticle) {
        lastArticle.scrollIntoView({ behavior : 'smooth' });
    }

    console.log(projects);
}

document.querySelector('#projects button').addEventListener('click', loadProjects);