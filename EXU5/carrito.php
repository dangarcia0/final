<!DOCTYPE html>
<html>
<?php

include 'head.php';
?>

<head>
    <title>Carrito de compra</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Carrito de compra</h1>
        <hr>

        <ul class="list-group" id="carrito">
            <!-- Los elementos del carrito se generarán aquí -->
        </ul>

        <hr>
        
        <form action="tarjeta.php" method="post">
        <div class="text-right">
            <h5>Total: $<span id="total" name="total">0.00</span></h5>

        <div class="form-group">
            
            <input  class="form-control" id="producto" name="producto" required value="Pro1000Plus®19Litros" type="hidden">
            <input  class="form-control" id="cantidad" name="cantidad" required value="1" type="hidden">
            <input  class="form-control" id="precio" name="precio" required value="2259" type="hidden">
          </div>


            <button class="btn btn-primary">Comprar carrito</button>
        </div>

        </form>
        
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JavaScript personalizado -->
    <script>
        var productos = [
            {
                imagen: "images/vinilica/1.png",
                nombre: "Pro 1000 Plus® 19 Litros",
                cantidad: 10,
                precio: 2259.00
            },
            {
                imagen: "images/vinilica/2.png",
                nombre: "Pro 1000 Plus® 1 Litro",
                cantidad: 8,
                precio: 144.00
            }
                
            
        ];

        function generarCarrito() {
            var carrito = $('#carrito');
            var total = 0.00;

            $.each(productos, function (index, producto) {
                var elemento = $('<li class="list-group-item"></li>');
                var contenido = $('<div class="row"></div>');

                contenido.append('<div class="col-2"><img src="' + producto.imagen + '" alt="' + producto.nombre + '" class="img-fluid"></div>');
                contenido.append('<div class="col-3"><h4>' + producto.nombre + '</h4><p>Cantidad disponible: ' + producto.cantidad + '</p></div>');
                contenido.append('<div class="col-2"><button class="btn btn-secondary" onclick="restarProducto(' + index + ')">-</button><span class="cantidad-productos" id="cantidad-productos-' + index + '">0</span><button class="btn btn-primary" onclick="agregarProducto(' + index + ')">+</button></div>');
                contenido.append('<div class="col-2"><p>$' + producto.precio.toFixed(2) + '</p></div>');
                contenido.append('<div class="col-2"><button class="btn btn-danger btn-eliminar">Eliminar</button><button class="btn btn-success mt-2">Comprar ahora</button></div>');

                elemento.append(contenido);
                carrito.append(elemento);
            });

            $('#total').text(total.toFixed(2));
        }

        // Agrega un producto al carrito
        function agregarProducto(index) {
            var cantidadElemento = $('#cantidad-productos-' + index);
            var cantidad = parseInt(cantidadElemento.text());
            var producto = productos[index];

            if (cantidad < producto.cantidad) {
                cantidad++;
                cantidadElemento.text(cantidad);
                actualizarTotal(producto.precio);
            }
        }

        // Resta un producto del carrito
        function restarProducto(index) {
            var cantidadElemento = $('#cantidad-productos-' + index);
            var cantidad = parseInt(cantidadElemento.text());
            var producto = productos[index];

            if (cantidad > 0) {
                cantidad--;
                cantidadElemento.text(cantidad);
                actualizarTotal(-producto.precio);
            }
        }

        // Actualiza el total del carrito
        function actualizarTotal(precio) {
            var totalElemento = $('#total');
            var total = parseFloat(totalElemento.text());

            total += precio;
            totalElemento.text(total.toFixed(2));
        }

        // Elimina un producto del carrito
        function eliminarProducto() {
            $(this).closest('li').remove();
        }

        // Genera los elementos del carrito al cargar la página
        $(document).ready(function () {
            generarCarrito();

            // Asocia el evento de clic al botón "Eliminar" utilizando eventos delegados
            $('#carrito').on('click', '.btn-eliminar', eliminarProducto);
        });
    </script>

<?php

include 'foot.php';
?>
</body>
</html>
