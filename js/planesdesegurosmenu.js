const menuLinks = document.querySelectorAll('.menu a');
const sections = document.querySelectorAll('.section');

menuLinks.forEach(link => {
    link.addEventListener('click', () => {
        const selectedSection = document.getElementById(link.dataset.section);

        sections.forEach(section => {
            section.classList.remove('active');
        });

        selectedSection.classList.add('active');
    });
});