function seleccionarItem(event, id) {
   event.preventDefault(); // Evita que se siga el enlace
   const items = document.querySelectorAll('.item-menu');
   for (let i = 0; i < items.length; i++) {
     items[i].classList.remove('seleccionado');
   }
   const itemSeleccionado = document.querySelector(`[onclick="seleccionarItem(event, '${id}')"]`);
   itemSeleccionado.classList.add('seleccionado');
 }