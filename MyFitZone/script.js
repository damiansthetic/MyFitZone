

function mostrarMnesaje() {
    alert("¡Bienvenido a MyFitZone! Gracias por visitar nuestra pagina.");
}

document.getElementById('registroForm').addEventListener('submit', function(event) {
  if (!confirm('¿Confirmas el envío del registro?')) {
      event.preventDefault(); // Cancela el envío
  }
});





