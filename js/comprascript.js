const productos = {
  CAMISA: {
    precio: 149.99,
    colores: ['Gris', 'Rojo', 'Rosa', 'Morado', 'Tinto', 'Verde', 'Azul', 'Blanco'],
    imagenes: {
      Gris: 'images/camisa1.png',
      Rojo: 'images/camisa2.png',
      Rosa: 'images/camisa3.png',
      Morado: 'images/camisa4.png',
      Tinto: 'images/camisa5.png',
      Verde: 'images/camisa6.png',
      Azul: 'images/camisa7.png',
      Blanco: 'images/camisa8.png',
    },
    medidas: {
      CHICO: 149.99,
      MEDIANO: 149.99,
      GRANDE: 149.99,
    }
  },
  TIRANTE: {
    precio: 75.99,
    colores: ['Negro'],
    imagenes: {
      Negro: 'images/tirante.png',
    },
    medidas: {
      UNITALLA: 75.99,
    }
  },
  CHALECO: {
    precio: 399.99,
    colores: ['Tinto', 'Negro', 'Gris', 'Ceniza', 'Azul'],
    imagenes: {
      Tinto: 'images/cha1.png',
      Negro: 'images/cha2.png',
      Gris: 'images/cha.png',
      Ceniza: 'images/cha4.png',
      Azul: 'images/cha5.png',
    },
    medidas: {
      CHICO: 399.99,
      MEDIANO: 399.99,
      GRANDE: 399.99,
    }
  },
  CORBATA: {
    precio: 99.99,
    colores: ['Azul', 'Morado', 'Rosa', 'Verde', 'Negro', 'Rojo'],
    imagenes: {
      Azul: 'images/corbata1.png',
      Morado: 'images/corbata2.png',
      Rosa: 'images/corbata3.png',
      Verde: 'images/corbata4.png',
      Negro: 'images/corbata5.png',
      Rojo: 'images/corbata6.png'
    },
    medidas: {
      UNITALLA: 99.99,
    }
  },
  MONO: {
    precio: 89.99,
    colores: ['Rojo', 'Azul', 'Verde'],
    imagenes: {
      Rojo: 'images/MO1.png',
      Azul: 'images/MO2.png',
      Verde: 'images/MO3.png'
    },
    medidas: {
      UNITALLA: 89.99,
    }
  },
  PANTALON: {
    precio: 399.99,
    colores: ['Rojo', 'Azul', 'Gris', 'Morado', 'Verde'],
    imagenes: {
      Rojo: 'images/pantalon1.png',
      Azul: 'images/pantalon2.png',
      Gris: 'images/pantalon3.png',
      Morado: 'images/pantalon4.png',
      Verde: 'images/pantalon5.png'
    },
    medidas: {
      CHICO: 399.99,
      MEDIANO: 399.99,
      GRANDE: 399.99,
    }
  },
  VESTIDO: {
    precio: 759.99,
    colores: ['Rosa'],
    imagenes: {
      Rosa: 'images/V.png',
    },
    medidas: {
      CHICO: 759.99,
      MEDIANO: 759.99,
      GRANDE: 759.99,
    }
  },
  SACO: {
    precio: 499.99,
    colores: ['Rojo', 'Azul', 'Gris'],
    imagenes: {
      Rojo: 'images/about_img.png',
      Azul: 'images/z2.png',
      Gris: 'images/s1.png'
    },
    medidas: {
      CHICO: 499.99,
      MEDIANO: 499.99,
      GRANDE: 499.99,
    }
  },
};

function actualizarColores() {
  const productoSeleccionado = document.getElementById("producto").value;
  const coloresProducto = productos[productoSeleccionado].colores;

  const colorSelect = document.getElementById("color");
  colorSelect.innerHTML = "";
  coloresProducto.forEach(color => {
    const option = document.createElement("option");
    option.value = color;
    option.textContent = color;
    colorSelect.appendChild(option);
  });

  actualizarPrecioYImagen();
}

function actualizarPrecioYImagen() {
  const productoSeleccionado = document.getElementById("producto").value;
  const colorSeleccionado = document.getElementById("color").value;

  const medidaSelect = document.getElementById("medida");
  const medidaSeleccionada = medidaSelect ? medidaSelect.value : null;

  let precio;
  let mensaje;
  if (medidaSeleccionada && productos[productoSeleccionado].medidas.hasOwnProperty(medidaSeleccionada)) {
    precio = productos[productoSeleccionado].medidas[medidaSeleccionada];
    mensaje = '';
  } else {
    precio = productos[productoSeleccionado].precio;
    const servicioSeleccionado = document.getElementById("servicio").value;
  }

  document.getElementById("precioLabel").textContent = mensaje ? '' : 'Precio:';
  document.getElementById("precioDiv").style.display = mensaje ? 'none' : 'block';

  document.getElementById("precio").textContent = precio.toFixed(2);

  const imagenUrl = productos[productoSeleccionado].imagenes[colorSeleccionado];
  document.getElementById("imagen").src = imagenUrl;
}

document.addEventListener("DOMContentLoaded", function () {
  actualizarColores();
  actualizarPrecioYImagen();

  const medidaSelect = document.getElementById("medida");
  if (medidaSelect) {
    medidaSelect.addEventListener("change", actualizarPrecioYImagen);
  }
});

function realizarCompra() {
  const productoSeleccionado = document.getElementById("producto").value;
  const colorSeleccionado = document.getElementById("color").value;
  const servicioSeleccionado = document.getElementById("servicio").value;
  const medidaSeleccionada = document.getElementById("medida").value;
  const precioSeleccionado = parseFloat(document.getElementById("precio").textContent);

  // Crear una URL con los datos del pedido y usuario en sesión como parámetros
  const url = `detalles_producto_usuario.php?producto=${productoSeleccionado}&color=${colorSeleccionado}&servicio=${servicioSeleccionado}&medida=${medidaSeleccionada}&precio=${precioSeleccionado}`;

  // Redirigir a la página de detalles con los parámetros en la URL
  window.location.href = url;
}
function confirmarCompra() {
  const productoSeleccionado = document.getElementById("producto").value;
  const colorSeleccionado = document.getElementById("color").value;
  const servicioSeleccionado = document.getElementById("servicio").value;
  const medidaSeleccionada = document.getElementById("medida").value;
  const precioSeleccionado = parseFloat(document.getElementById("precio").textContent);

  // Crear una URL con los datos del pedido y usuario en sesión como parámetros
  const url = `confirmacion.php?producto=${productoSeleccionado}&color=${colorSeleccionado}&servicio=${servicioSeleccionado}&medida=${medidaSeleccionada}&precio=${precioSeleccionado}`;

  // Redirigir a la página de confirmación con los parámetros en la URL
  window.location.href = url;
}

