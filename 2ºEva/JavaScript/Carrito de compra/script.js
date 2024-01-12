// Localizo el elemento HTML con el que interactúo
// Producto 1
const botonSuma1 = document.getElementById("suma1");
const botonResta1 = document.getElementById('resta1');
const cantidad1 = document.getElementById("c1");
const valor1 = document.getElementById("v1");
const sub1 = document.getElementById("subtotal1");

// Producto 2
const botonSuma2 = document.getElementById("suma2");
const botonResta2 = document.getElementById('resta2');
const cantidad2 = document.getElementById("c2");
const valor2 = document.getElementById("v2");
const sub2 = document.getElementById("subtotal2");

// Producto 3
const botonSuma3 = document.getElementById("suma3");
const botonResta3 = document.getElementById('resta3');
const cantidad3 = document.getElementById("c3");
const valor3 = document.getElementById("v3");
const sub3 = document.getElementById("subtotal3");

// Producto 4
const botonSuma4 = document.getElementById("suma4");
const botonResta4 = document.getElementById('resta4');
const cantidad4 = document.getElementById("c4");
const valor4 = document.getElementById("v4");
const sub4 = document.getElementById("subtotal4");

// Elemento donde mostrar el total
const totalElement = document.querySelector(".table tfoot th");

// Creamos las funciones
function actualizarSubtotal(cantidadElem, valorElem, subElem) {
    let cantidad = cantidadElem.value;
    let precio = valorElem.value;
    let subtotal = cantidad * precio;
    subElem.innerHTML = subtotal + " €";
    return subtotal;
}

function actualizarTotal() {
    let total = 0;
    total += actualizarSubtotal(cantidad1, valor1, sub1);
    total += actualizarSubtotal(cantidad2, valor2, sub2);
    total += actualizarSubtotal(cantidad3, valor3, sub3);
    total += actualizarSubtotal(cantidad4, valor4, sub4);
    
    totalElement.textContent = `Total = ${total} €`;
}

function modificar() {
    actualizarTotal();
}

// Asocio la acción al botón y especifico el evento que lo desencadena
// Necesitas especificar el tipo de evento y la función que debería ejecutar
// Para el producto 1
botonSuma1.addEventListener("click", function () {
    cantidad1.value = parseInt(cantidad1.value) + 1;
    modificar();
});

botonResta1.addEventListener("click", function () {
    const cantidadActual = parseInt(cantidad1.value);
    if (cantidadActual > 0) {
        cantidad1.value = cantidadActual - 1;
        modificar();
    }
});

cantidad1.addEventListener("change", function () {
    modificar();
});

// Para el producto 2
botonSuma2.addEventListener("click", function () {
    cantidad2.value = parseInt(cantidad2.value) + 1;
    modificar();
});

botonResta2.addEventListener("click", function () {
    const cantidadActual = parseInt(cantidad2.value);
    if (cantidadActual > 0) {
        cantidad2.value = cantidadActual - 1;
        modificar();
    }
});

cantidad2.addEventListener("change", function () {
    modificar();
});

// Para el producto 3
botonSuma3.addEventListener("click", function () {
    cantidad3.value = parseInt(cantidad3.value) + 1;
    modificar();
});

botonResta3.addEventListener("click", function () {
    const cantidadActual = parseInt(cantidad3.value);
    if (cantidadActual > 0) {
        cantidad3.value = cantidadActual - 1;
        modificar();
    }
});

cantidad3.addEventListener("change", function () {
    modificar();
});

// Para el producto 4
botonSuma4.addEventListener("click", function () {
    cantidad4.value = parseInt(cantidad4.value) + 1;
    modificar();
});

botonResta4.addEventListener("click", function () {
    const cantidadActual = parseInt(cantidad4.value);
    if (cantidadActual > 0) {
        cantidad4.value = cantidadActual - 1;
        modificar();
    }
});

cantidad4.addEventListener("change", function () {
    modificar();
});

// Llamar a actualizarTotal al cargar la página
actualizarTotal();
