// obtener_datos_usuario.js
document.addEventListener("DOMContentLoaded", function() {
    // Hacer una solicitud AJAX para obtener los datos del usuario desde PHP
    // Puedes usar XMLHttpRequest, Fetch API o cualquier biblioteca de AJAX como jQuery
  
    // Ejemplo con Fetch API
    fetch("obtener_datos_usuario.php")
      .then(response => response.json())
      .then(data => mostrarDatosUsuario(data))
      .catch(error => console.error(error));
  
    function mostrarDatosUsuario(data) {
      // Mostrar los datos del usuario en el div "user-info"
      const userDiv = document.getElementById("user-info");
      userDiv.innerHTML = `
        <p><strong>Nombre:</strong> ${data.nombre} ${data.apellido_pat} ${data.apellido_mat}</p>
        <p><strong>Correo:</strong> ${data.correo}</p>
        <!-- Agregar más campos del usuario aquí si es necesario -->
      `;
    }
  });
  