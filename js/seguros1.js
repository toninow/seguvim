/* JavaScript para cambiar la sección de presentación */
document.querySelectorAll('nav a').forEach(function(element) {
   element.addEventListener('click', function(event) {
     event.preventDefault();
     document.querySelectorAll('nav a').forEach(function(link) {
       link.classList.remove('active');
     });
     element.classList.add('active');
     var target = element.getAttribute('href');
     document.querySelector(target).scrollIntoView({
       behavior: 'smooth'
     });
   });
 });