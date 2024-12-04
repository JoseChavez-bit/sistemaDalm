<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobante de Pago</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <?php include 'partes/css.php'; ?>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            margin: 20px;
        }

        .receipt {
            max-width: 420px;
            border: 1px dashed black;
            padding: 15px;
            margin: auto;
            background-color: #f8f9fa;
            /* Fondo claro */
        }

        .line {
            border-top: 1px dashed black;
            margin: 15px 0;
        }

        .table th,
        .table td {
            padding: 5px 0;
        }
    </style>
</head>

<body>
    <div class="container mt-5 p-5">
        <form action="vaucher.php" method="get">
            <div class="receipt text-center">
                <!-- Header -->
                <div class="header">
                    <img src="./imagenes/logo1.png" alt="Imagen del botón" width="30px" height="30px" class="img1">
                    <p class="fw-bold mb-1"><span style="font-size: 20px;">Personalisados Dalm</span></p>
                </div>

                <!-- Details -->
                <div class="details text-start">
                    <?php date_default_timezone_set('America/Lima');
                    // Leer el último número de boleta desde un archivo
                    $boletaFile = 'boleta.txt';
                    if (file_exists($boletaFile)) {
                        $currentBoleta = (int)file_get_contents($boletaFile);
                    } else {
                        $currentBoleta = 1; // Valor inicial si el archivo no existe
                    }
                    // Incrementar el número de boleta
                    $newBoleta = str_pad($currentBoleta + 1, 6, "0", STR_PAD_LEFT);
                    // Guardar el nuevo número en el archivo
                    file_put_contents($boletaFile, $newBoleta);
                    ?>
                    <p class="mb-1 text-center">BOLETA ELECTRÓNICA No.<?php echo $newBoleta; ?></p>


                    <p class="mb-2">FECHA EMISIÓN: <?php echo date('d/m/Y'); ?></p>

                    <label for=""><strong>Nombre Completo:</strong></label>
                    <p><?php echo isset($_GET['nombre']) ? $_GET['nombre'] : 'No especificado'; ?></p>
                    <label for=""><strong>DNI:</strong></label>
                    <p><?php echo isset($_GET['dni']) ? $_GET['dni'] : 'No especificado'; ?></p>
                    <label for=""><strong>Dirección:</strong></label>
                    <p><?php echo isset($_GET['dirección']) ? $_GET['dirección'] : 'No especificado'; ?></p>
                    <label for=""><strong>Metodo de pago:</strong></label>
                    <p><?php echo isset($_GET['paymentMethod']) ? $_GET['paymentMethod'] : 'No especificado'; ?></p>
                    <label for=""><strong>Email:</strong></label>
                    <p><?php echo isset($_GET['email']) ? $_GET['email'] : 'No especificado'; ?></p>


                </div>
                <div class="line"></div>
                <h5><strong>Detalle de la Compra:</strong></h5>
                <div class="line"></div>
                <table>
                <div id="voucherDetails" class="mt-3">
                    <div class="modal-body" id="cart-items">
                        <ul id="voucherCartItems" class="list-group">
                            <!-- Aquí se agregarán los productos dinámicamente -->
                            <p><?php echo isset($_GET['cartDetails']) ? $_GET['cartDetails'] : 'No especificado'; ?></p>
                        </ul>
                    </div>
                </div>
                </table>
                <div class="line"></div>
                <!-- Total -->
                <div class="details">
                    <table class="table table-borderless">
                        <tr>
                            <td><strong>TOTAL</strong></td>
                            <td class="text-end">
                                <strong>
                                    <p><?php echo isset($_GET['productPriceDisplay']) ? $_GET['productPriceDisplay'] : 'No especificado'; ?>
                                    </p>
                                </strong>
                            </td>
                        </tr>
                    </table>
                </div>            
                <!-- Footer -->
            </div>
            <a href="inicio.php" class="btn btn-danger mt-3 ">regresar</a>
            <button class="btn btn-primary mt-3" onclick="window.print()">Imprimir Comprobante</button>
        </form>

    </div>

    <?php include 'partes/rutasscript.php' ?>

    <script>
        const params = new URLSearchParams(window.location.search);
        document.getElementById('voucherName').innerText = params.get('fullName');
        document.getElementById('voucherEmail').innerText = params.get('email');
        document.getElementById('voucherPaymentMethod').innerText = params.get('paymentMethod');
        document.getElementById('voucherTotal').innerText = params.get('total-price');
    </script>

    <script>
        function generateVoucher(event) {
            event.preventDefault(); // Evitar recargar la página

            // Capturar los datos del formulario
            const name = document.getElementById('nombre').value;
            const email = document.getElementById('email').value;
            const productName = document.getElementById('productName').value;
            const total = document.getElementById('hiddenTotal').value;

            // Mostrar en el voucher
            document.getElementById('voucherName').innerText = name;
            document.getElementById('voucherEmail').innerText = email;
            document.getElementById('voucherProduct').innerText = productName;
            document.getElementById('voucherTotal').innerText = `S/. ${total}`;

            // Mostrar el voucher
            document.getElementById('voucherDetails').classList.remove('d-none');
        }
    </script>

    <script>
        function generateVoucher(event) {
            event.preventDefault(); // Evita el envío del formulario y la recarga de la página

            // Captura los datos del carrito
            const cartDetailsContainer = document.getElementById('voucherCartItems');
            const total = cart.reduce((acc, product) => acc + (product.price * product.quantity), 0).toFixed(2);

            // Limpia el contenedor del voucher antes de llenarlo
            cartDetailsContainer.innerHTML = '';

            // Agrega cada producto como un elemento de lista
            cart.forEach(product => {
                const listItem = document.createElement('li');
                listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
                listItem.textContent = `${product.name} (x${product.quantity}) - S/.${(product.price * product.quantity).toFixed(2)}`;
                cartDetailsContainer.appendChild(listItem);
            });

            // Actualiza el total del voucher
            document.getElementById('voucherTotalPrice').innerText = total;
        }
    </script>

    <script>
        function generateVoucher(event) {
            event.preventDefault(); // Evita el envío del formulario y la recarga de la página

            // Captura los datos del carrito
            const cartDetailsContainer = document.getElementById('voucherCartItems');
            const total = cart.reduce((acc, product) => acc + (product.price * product.quantity), 0).toFixed(2);

            // Limpia el contenedor del voucher antes de llenarlo
            cartDetailsContainer.innerHTML = '';

            // Agrega cada producto como un elemento de lista
            cart.forEach(product => {
                const listItem = document.createElement('li');
                listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
                listItem.textContent = `${product.name} (x${product.quantity}) - S/.${(product.price * product.quantity).toFixed(2)}`;
                cartDetailsContainer.appendChild(listItem);
            });

            // Actualiza el total del voucher
            document.getElementById('voucherTotalPrice').innerText = total;
        }
    </script>
</body>

</html>