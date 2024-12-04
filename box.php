<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Box Personalizados</title>
  <?php include 'partes/css.php'; ?>
</head>

<body>
  <?php include 'partes/header.php'; ?>
  <?php include 'ruta/breadcrumb.php' ?>


  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenes/img1.jpeg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block"></div>
      </div>
      <div class="carousel-item">
        <img src="imagenes/img2.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block"></div>
      </div>
      <div class="carousel-item">
        <img src="imagenes/img3.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block"></div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>

  <div class="container text-center mt-5 position-relative p-2">
    <div class="linea-detras"></div>
    <h2 class="titulo-con-linea fs-4 fs-md-3">BOX PERSONALIZADOS</h2>
  </div>

  <div class="container mt-4">
    <div class="row">
       <div class="col-md-3">
        <h5>Filtrar por:</h5>
        <form id="filter-form">
          <div class="mb-3">
            <label for="filter-category" class="form-label">Categoría</label>
            <select class="form-select" id="filter-category" onchange="applyFilters()">
            <option value="" selected>Seleccionar</option>
              <option value="flores">Flores a Crochet</option>
              <option value="perfectos">Detalles Perfectos</option>
              <option value="ocasion">Detalles de Ocasión</option>
              <option value="cuadro">Cuadros 3D</option>
              <option value="esfera">Esferas Led</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="price-range" class="form-label">Rango de Precio (hasta S/.)</label>
            <input type="range" class="form-range" id="price-range" min="10" max="150" step="0" oninput="updatePriceValue(this.value); applyFilters();">
            <span id="price-value">S/.150</span>
          </div>

          <div class="mb-3">
            <h6>Tamaño</h6>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="pequeño" id="small-size" onchange="applyFilters()">
              <label class="form-check-label" for="small-size">Pequeño</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="mediano" id="medium-size" onchange="applyFilters()">
              <label class="form-check-label" for="medium-size">Mediano</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="grande" id="large-size" onchange="applyFilters()">
              <label class="form-check-label" for="large-size">Grande</label>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-9">
        
        <div class="row" id="product-list">
          <div class="col-md-3 p-1" data-category="taza" data-price="65.90" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/box1.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 1">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text"> caja carton + agenda personalizada + 1 taza gliter + chocolates + dedicatoria<br><span class="text text-danger fw-bold">S/.65.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box 1', 65.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="89.90" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/box2.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 2">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Taza personalizada + agenda personalizada + tomatodo 600ml + dedicatoria<br><span class="text text-danger fw-bold">S/.89.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box 2', 89.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="72.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/box3.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 3">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Caja lonchera + taza personalizada + mouse pad + tarro bocaditos<br><span class="text text-danger fw-bold">S/.72.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box 3', 72.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="22.00" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/box4.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 4">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">caja cartón + mouse pad + tomatodo 600ml + 1 taza + dedicatoria<br><span class="text text-danger fw-bold">S/.22.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Feliz Cumpleaños', 22.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="129.90" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/box5.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 5">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">caja cartón + 1 cuadro de foto + 1 copa + 
                    1 frasco cholotate + 1 frasco de galletas + 1 planta + 1 rica dona + 3u rocher +  dedocatoria<br><span class="text text-danger fw-bold">S/.129.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Aniversario', 129.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="79.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/agendaperso.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">agenda personalizada + taza cónica + chocolates + dedicatoria<br><span class="text text-danger fw-bold">S/.79.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('box 4', 79.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="92.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/siempre.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">box siempre protagonista<br><span class="text text-danger fw-bold">S/.92.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Siempre Protagonista', 92.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="49.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/duo.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Ramo duo blue<br><span class="text text-danger fw-bold">S/.49.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Ramo Duo Blue', 49.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="74.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/hotwheels.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Box hotwheels personalisado<br><span class="text text-danger fw-bold">S/.74.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Hotwheels', 74.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="195.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/gusto.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Gustos para disfrutar<br><span class="text text-danger fw-bold">S/.195.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Gustitos', 195.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="89.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/mini.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Box encanto mini rosa<br><span class="text text-danger fw-bold">S/.89.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Encanto', 89.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="240.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/boxvino.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Box vino y chocolate<br><span class="text text-danger fw-bold">S/.240.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Vino y Chocolate', 240.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="89.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/frozen.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Movie frozen<br><span class="text text-danger fw-bold">S/.89.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Frozen', 89.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="92.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/minnie.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Box minnie<br><span class="text text-danger fw-bold">S/.92.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Minnie', 92.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="135.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/avengers.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Feliz avengers<br><span class="text text-danger fw-bold">S/.135.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Avengers', 135.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="122.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/dulce.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Cesta dulce + taza personalizada<br><span class="text text-danger fw-bold">S/.122.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Dulcero', 122.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="99.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/magia.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Box dulce magia<br><span class="text text-danger fw-bold">S/.99.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Magico', 99.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="65.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/dulcetaza.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Dulce taza personalizada<br><span class="text text-danger fw-bold">S/.65.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Dulce Taza', 65.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="72.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/cree.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Pack cree en ti<br><span class="text text-danger fw-bold">S/.72.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Cree en Ti', 72.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="165.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/emocion.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Pack de emociones<br><span class="text text-danger fw-bold">S/.165.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Emociones', 165.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="82.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/tazaamor.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Pack taza de amor<br><span class="text text-danger fw-bold">S/.82.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box de Amor', 82.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="129.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/packhalloween.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">Pack halloween<br><span class="text text-danger fw-bold">S/.129.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Halloween', 129.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="48.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/hallo.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold"></h5>
                <p class="card-text">box halloween personalizado<br><span class="text text-danger fw-bold">S/.48.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box Halloween 2', 48.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

<?php include 'partes/carrito.php' ?>


  <!-- Modal del formulario de pago -->

  <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="paymentModalLabel">Formulario de Pago</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="paymentform" method="GET" action="vaucher4.php">
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
              <label for="paymentProof" required>Subir Comprobante</label>
              <input type="file" class="form-control" name="paymentProof" id="paymentProof" accept=".jpg,.jpeg,.png,.pdf">
            </div>
            <div id="cashPaymentDetails" class="d-none">
              <p>El pago en efectivo se realizará al momento de la entrega.</p>
            </div>
            <!-- Mostrar el nombre del producto en el formulario -->
            <label for="productName">Producto</label>
            <input class="form-control" type="text" id="productName" name="productNameDisplay" value="Nombre del Producto" readonly>
            <label for="productPrice">Total</label>
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
          </form>

        </div>
      </div>
    </div>
  </div
>
  <?php include './partes/rutasscript.php' ?>
  <?php include 'partes/footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  
  <script>
    function applyFilters() {
      // Tu lógica para aplicar los filtros
      console.log("Filtros aplicados");
    }

    function updatePriceValue(value) {
      document.getElementById("price-value").textContent = "S/." + value;
    }
  </script>

  <script>
    document.getElementById('price-range').addEventListener('input', function() {
      document.getElementById('price-value').innerText = 'S/.' + this.value;
    });

    function applyFilters() {
      var selectedCategory = document.getElementById('filter-category').value;
      var maxPrice = document.getElementById('price-range').value;
      var selectedSizes = [];
      if (document.getElementById('small-size').checked) selectedSizes.push('pequeño');
      if (document.getElementById('medium-size').checked) selectedSizes.push('mediano');
      if (document.getElementById('large-size').checked) selectedSizes.push('grande');

      // Obtener el texto de búsqueda
      var searchQuery = document.getElementById('search-product').value.toLowerCase();

      var products = document.querySelectorAll('#product-list .col-md-3');
      products.forEach(function(product) {
        var productCategory = product.getAttribute('data-category');
        var productPrice = parseFloat(product.getAttribute('data-price'));
        var productSize = product.getAttribute('data-size');
        var productName = product.querySelector('.card-title').textContent.toLowerCase();

        var categoryMatch = selectedCategory === "" || productCategory === selectedCategory;
        var priceMatch = productPrice <= maxPrice;
        var sizeMatch = selectedSizes.length === 0 || selectedSizes.includes(productSize);

        // Comprobar si el producto coincide con el texto de búsqueda
        var searchMatch = searchQuery === "" || productName.includes(searchQuery);

        if (categoryMatch && priceMatch && sizeMatch && searchMatch) {
          product.style.display = 'block';
        } else {
          product.style.display = 'none';
        }
      });
    }
  </script>

  <script>
    // Actualiza el formulario de voucher con datos del carrito antes de abrir el modal de pago
    document.getElementById('paymentModal').addEventListener('show.bs.modal', function() {
      const total = cart.reduce((acc, product) => acc + (product.price * product.quantity), 0).toFixed(2); // Total del carrito
      const cartDetails = cart.map(product => `${product.name} (x${product.quantity}) - S/.${(product.price * product.quantity).toFixed(2)}`).join('\n'); // Detalle

      // Actualizar los campos visibles y ocultos del formulario
      document.getElementById('cartDetails').value = cartDetails; // Detalle en el textarea
      document.getElementById('hiddenTotal').value = total; // Total oculto
      document.getElementById('total-price-display').value = `S/. ${total}`; // Total visible

      // Si hay un único producto, usa sus detalles
      if (cart.length === 1) {
        document.getElementById('productName').value = cart[0].name; // Nombre del producto
        document.getElementById('productPriceHidden').value = cart[0].price.toFixed(2); // Precio del producto
      }
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
    <?php include 'partes/rutasscript.php' ?>
</body>

</html>