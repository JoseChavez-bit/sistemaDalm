<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito de Compras</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="btn btn-border-white text-dark">
        <img src="./imagenes/logo1.png" alt="Imagen del botón" width="10px" height="10px" class="img1">
        PersonaliZados "Dalm"
      </button>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link fw-bold" href="inicio.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link fw-bold" href="#">Arreglos Florales</a></li>
          <li class="nav-item"><a class="nav-link fw-bold" href="box.php">Box personalisados</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tendencias</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="catalogo1.php">Tazas</a></li>
              <li><a class="dropdown-item" href="#">Peluches</a></li>
              <li><a class="dropdown-item" href="#">Tomatodos</a></li>
              <li><a class="dropdown-item" href="#">Polos o Telas</a></li>
              <li><a class="dropdown-item" href="#">Cuadros</a></li>
              <li><a class="dropdown-item" href="#">Cajas</a></li>
              <li><a class="dropdown-item" href="#">Halloween</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="container-fluid mt-2 col-sm-4 d-flex align-items-center justify-content-end">
      <form id="filter-form" class="d-flex align-items-center me-3">
        <input type="text" class="form-control" id="search-product" placeholder="Ingresa el producto">
        <button type="button" class="btn btn-primary ms-2" onclick="applyFilters()"><i class="bi bi-search"></i></button>
      </form>
      <button type="button" class="btn btn-outline-secondary position-relative" data-bs-toggle="modal" data-bs-target="#cartModal">
        <i class="bi bi-cart"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="cart-count">0</span>
      </button>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="col-md-3 p-1" data-category="caja" data-price="59.90" data-size="pequeño">
      <div class="card h-100">
        <img src="./imagenes/corazon.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 2">
        <div class="card-body">
          <h5 class="card-title fw-bold">Caja Corazón</h5>
          <p class="card-text">Peluche pequeño + chocolates + ramo de rosas <br><span class="text text-danger fw-bold">S/.59.90</span></p>
          <button class="btn btn-primary" onclick="addToCart('Caja Corazón', 59.90)">Agregar al Carrito</button>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Modal del carrito -->
  <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cartModalLabel">Carrito de Compras</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="cart-items">
          <!-- Productos en el carrito -->
        </div>
        <div class="modal-footer">
          <div class="me-auto fw-bold">Total: S/. <span id="total-price">0.00</span></div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#paymentModal">
            Proceder al pago
          </button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal del formulario de pago -->

  <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="paymentModalLabel">Formulario de Pago</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="paymentform" method="GET" action="vaucherprueba.php">
            <label for="nombre">Nombres Completos</label>
            <input class="form-control" required type="text" name="nombre">
            <label for="dni">DNI</label>
            <input class="form-control" required type="text" name="dni">
            <label for="email">Email</label>
            <input class="form-control" required type="email" name="email">
            <label for="dirección">Dirección</label>
            <input class="form-control" required type="text" name="dirección">

            <!-- Opciones de método de pago -->
            <div class="mb-3">
              <label class="form-label">Método de Pago</label>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentYape" value="Yape" checked>
                <label class="form-check-label" for="paymentYape">Yape</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentCash" value="Efectivo">
                <label class="form-check-label" for="paymentCash">Efectivo</label>
              </div>
            </div>

            <!-- Campos adicionales dinámicos -->

            <div id="yapePaymentDetails" class="d-none">
              <p>Envía el monto al número: <strong>923-382-473</strong></p>
              <label for="paymentProof">Subir Comprobante</label>
              <input type="file" class="form-control" name="paymentProof" id="paymentProof" accept=".jpg,.jpeg,.png,.pdf">
            </div>
            <div id="cashPaymentDetails" class="d-none">
              <p>El pago en efectivo se realizará al momento de la entrega.</p>
            </div>
            <!-- Mostrar el nombre del producto en el formulario -->
            <label for="productName">Producto</label>
            <input class="form-control" type="text" id="productName" name="productNameDisplay" value="Nombre del Producto" readonly>
            <label for="productPrice">Precio</label>
            <input class="form-control" type="text" id="total-price-display" name="productPriceDisplay" readonly>
            <!-- Mostrar el detalle de los productos en el formulario -->
            <label for="cartDetails">Detalle del Carrito</label>
            <textarea class="form-control" id="cartDetails" name="cartDetails" rows="4" readonly>
            <input class="form-control" type="text" id="productName" name="productNameDisplay" value="Nombre del Producto" readonly>
            </textarea>

            <!-- Campo oculto para enviar el nombre del producto al backend -->
            <input type="hidden" id="productNameHidden" name="productName" value="Nombre del Producto">
            <input type="hidden" id="productPriceHidden" name="productPrice">
            <input type="hidden" name="total" id="hiddenTotal">

            <!-- Total -->
            <input type="hidden" name="total" id="hiddenTotal">
            <input type="hidden" name="cartItems" id="hiddenCartItems">

            <button type="submit" class="btn btn-primary mt-3">Pagar</button>
            <button type="submit" class="btn btn-primary" onclick="generateVoucher(event)">Generar Voucher</button>
          </form>

        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Función para actualizar los detalles del carrito en el formulario de pago
    function updatePaymentDetails() {
      const cartDetails = cart.map(product => `${product.name} (x${product.quantity}) - S/.${(product.price * product.quantity).toFixed(2)}`).join('\n');
      const total = cart.reduce((acc, product) => acc + (product.price * product.quantity), 0).toFixed(2);

      // Actualizar los campos del formulario
      document.getElementById('cartDetails').value = cartDetails;
      document.getElementById('hiddenTotal').value = total;
      document.getElementById('total-price-display').value = `S/. ${total}`; // Total visible
    }
    // Si hay un único producto, usa sus detalles
    if (cart.length === 1) {
        document.getElementById('productName').value = cart[0].name; // Nombre del producto
        document.getElementById('productPriceHidden').value = cart[0].price.toFixed(2); // Precio del producto
    }

    // Actualizar el formulario al abrir el modal de pago
    document.getElementById('paymentModal').addEventListener('show.bs.modal', function() {
      updatePaymentDetails();
    });
  </script>

  <script>
    // Función para configurar los datos del producto en el formulario
    function setProductDetails(productName, productPrice) {

      // Actualiza los campos ocultos para enviar al servidor
      document.getElementById('productNameHidden').value = productName;
      document.getElementById('productPriceHidden').value = productPrice.toFixed(2);
    }

    // Ejemplo: llama a esta función cuando se abra el modal
    // setProductDetails("Taza Personalizada", 20.50);
  </script>

  <script>
    // Cambiar visibilidad de campos según el método de pago
    document.querySelectorAll('input[name="paymentMethod"]').forEach(input => {
      input.addEventListener('change', function() {

        const yapeDetails = document.getElementById('yapePaymentDetails');
        const cashDetails = document.getElementById('cashPaymentDetails');

        if (this.value === 'Yape') {

          yapeDetails.classList.remove('d-none');
          cashDetails.classList.add('d-none');
        } else if (this.value === 'Efectivo') {

          yapeDetails.classList.add('d-none');
          cashDetails.classList.remove('d-none');
        }
      });
    });

    // Preparar los datos del formulario antes de enviarlo
    document.getElementById('paymentform').addEventListener('submit', function() {
      const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
      if (selectedPaymentMethod === 'Efectivo') {
        document.getElementById('paymentProof').required = false; // No requerir comprobante
      }
      // Pasar los datos del carrito al formulario
      const cartItems = cart.map(item => `${item.name} (x${item.quantity}): S/.${(item.price * item.quantity).toFixed(2)}`).join('; ');
      const total = cart.reduce((acc, item) => acc + (item.price * item.quantity), 0).toFixed(2);

      document.getElementById('hiddenCartItems').value = cartItems;
      document.getElementById('hiddenTotal').value = total;
    });
  </script>

  <script>
    let cart = [];

    function addToCart(productName, productPrice) {
      const existingProduct = cart.find(product => product.name === productName);
      if (existingProduct) {
        existingProduct.quantity += 1;
      } else {
        cart.push({
          name: productName,
          price: productPrice,
          quantity: 1
        });
      }
      updateCartCount();
      alert(productName + " ha sido agregado al carrito por S/." + productPrice);
    }

    function updateCartCount() {
      const totalQuantity = cart.reduce((acc, product) => acc + product.quantity, 0);
      document.getElementById("cart-count").innerText = totalQuantity;
    }

    function renderCartItems() {
      const cartItemsContainer = document.getElementById("cart-items");
      cartItemsContainer.innerHTML = '';

      if (cart.length === 0) {
        cartItemsContainer.innerHTML = "El carrito está vacío.";
      } else {
        cart.forEach((product) => {
          const productElement = document.createElement("div");
          productElement.classList.add("d-flex", "justify-content-between", "align-items-center", "mb-2");
          productElement.innerHTML = `
        <span>${product.name}- S/.${(product.price * product.quantity).toFixed(2)} (x${product.quantity}) </span>
        <button class="btn btn-danger btn-sm" onclick="removeFromCart('${product.name}')">Eliminar</button>`;
          cartItemsContainer.appendChild(productElement);
        });
      }

      // Llamar a la función para calcular el total
      calculateTotal();
      updatePaymentDetails();
    }

    function calculateTotal() {
      const total = cart.reduce((acc, product) => acc + (product.price * product.quantity), 0);
      document.getElementById("total-price").innerText = total.toFixed(2);
      document.getElementById("hiddenTotal").value = total.toFixed(2);
    }

    function removeFromCart(productName) {
      const product = cart.find(product => product.name === productName);
      if (product) {
        if (product.quantity > 1) {
          product.quantity -= 1;
        } else {
          cart = cart.filter(item => item.name !== productName);
        }
        updateCartCount();
        renderCartItems();
      }
    }
    // Preparar el formulario de pago con el producto seleccionado
    document.getElementById('cartModal').addEventListener('hide.bs.modal', function() {
      const selectedProduct = cart[0];
      // Suponemos que selecciona el primer producto del carrito
      if (selectedProduct) {
        document.getElementById('productName').value = selectedProduct.name;

        document.getElementById('hiddenTotal').value = (selectedProduct.price * selectedProduct.quantity).toFixed(2);
      }
    });

    // Renderizar el carrito al abrir el modal
    document.getElementById('cartModal').addEventListener('show.bs.modal', function() {
      renderCartItems();
    });
    document.getElementById('cartModal').addEventListener('show.bs.modal', function() {
      renderCartItems();
    });
  </script>

  <script>
    document.querySelectorAll('input[name="paymentMethod"]').forEach(input => {
      input.addEventListener('change', function() {
        const cardDetails = document.getElementById('cardPaymentDetails');
        const yapeDetails = document.getElementById('yapePaymentDetails');
        const cashDetails = document.getElementById('cashPaymentDetails');

        if (this.value === 'card') {
          cardDetails.classList.remove('d-none');
          yapeDetails.classList.add('d-none');
          cashDetails.classList.add('d-none');
        } else if (this.value === 'yape') {
          cardDetails.classList.add('d-none');
          yapeDetails.classList.remove('d-none');
          cashDetails.classList.add('d-none');
        } else if (this.value === 'cash') {
          cardDetails.classList.add('d-none');
          yapeDetails.classList.add('d-none');
          cashDetails.classList.remove('d-none');
        }
      });
    });
  </script>

  <script>
    document.getElementById('paymentform').addEventListener('submit', () => {
      // Pasar el total al formulario antes de enviarlo
      document.getElementById('hiddenTotal').value = total;
      const cartDetails = cart.map(product => `${product.name} (x${product.quantity}) - S/.${(product.price * product.quantity).toFixed(2)}`).join('; ');
      const total = cart.reduce((acc, product) => acc + (product.price * product.quantity), 0).toFixed(2);
      // Asignar los valores a los campos ocultos del formulario
      document.getElementById('hiddenCartItems').value = cartDetails;
      document.getElementById('hiddenTotal').value = total;
    });
    // Mostrar u ocultar secciones según el método de pago seleccionado
    document.querySelectorAll('input[name="paymentMethod"]').forEach(input => {
      input.addEventListener('change', () => {
        document.getElementById('cardPaymentDetails').classList.toggle('d-none', input.id !== 'paymentCard');
        document.getElementById('yapePaymentDetails').classList.toggle('d-none', input.id !== 'paymentYape');
        document.getElementById('cashPaymentDetails').classList.toggle('d-none', input.id !== 'paymentCash');
      });
    });

    // Generar el voucher al enviar el formulario
    function generateVoucher(event) {
      event.preventDefault(); // Evitar recargar la página
      const name = document.getElementById('fullName').value;
      const email = document.getElementById('email').value;
      const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').nextElementSibling.innerText;
      const total = document.getElementById('total-Price').innerText;

      // Rellenar el voucher con los datos
      document.getElementById('voucherName').innerText = name;
      document.getElementById('voucherEmail').innerText = email;
      document.getElementById('voucherPaymentMethod').innerText = paymentMethod;
      document.getElementById('voucherTotal').innerText = total;

      document.getElementById('paymentModal').addEventListener('show.bs.modal', function() {
        const total = document.getElementById('total-price').innerText;
        document.getElementById('total-price-display').innerText = `S/. ${total}`;
      });


      // Mostrar el voucher
      document.getElementById('voucherDetails').classList.remove('d-none');
    }
  </script>

  <script>
    // Obtener datos de la URL
    const params = new URLSearchParams(window.location.search);
    document.getElementById('voucherName').innerText = params.get('fullName');
    document.getElementById('voucherEmail').innerText = params.get('email');
    document.getElementById('voucherPaymentMethod').innerText = params.get('paymentMethod');
    document.getElementById('voucherTotal').innerText = params.get('total-price');
  </script>

  <script>
    // Configuración dinámica del modal
    document.addEventListener("DOMContentLoaded", () => {
      const paymentModal = document.getElementById("paymentModal");

      paymentModal.addEventListener("show.bs.modal", function(event) {
        // Botón que activó el modal
        const button = event.relatedTarget;

        // Obtener datos del producto desde los atributos data
        const productName = button.getAttribute("data-product-name");
        const productPrice = button.getAttribute("data-product-price");
        const cartDetails = button.getAttribute("data-cart-details");

        // Actualizar los campos del formulario

        document.getElementById("productNameHidden").value = productName;


        document.getElementById("productPriceHidden").value = productPrice;


      });

      // Mostrar u ocultar detalles del método de pago
      const paymentMethodInputs = document.querySelectorAll("input[name='paymentMethod']");
      paymentMethodInputs.forEach(input => {
        input.addEventListener("change", () => {
          document.getElementById("yapePaymentDetails").classList.toggle("d-none", input.value !== "Yape");
          document.getElementById("cashPaymentDetails").classList.toggle("d-none", input.value !== "Efectivo");
        });
      });
    });
  </script>
</body>

</html>