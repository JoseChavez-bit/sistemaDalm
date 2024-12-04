<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Principal</title>
  <?php include 'partes/css.php'; ?>
</head>

<body>
  <?php include 'partes/header.php'; ?>


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
    <h2 class="titulo-con-linea fs-4 fs-md-3">Lo Mas Vendido</h2>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-3">
        <h5>Filtrar por:</h5>
        <form id="filter-form">
          <div class="mb-3">
            <label for="filter-category" class="form-label">Categoría</label>
            <select class="form-select" id="filter-category" onchange="applyFilters()">
              <option value="" selected>Seleccionar</option>
              <option value="taza">Tazas</option>
              <option value="peluche">Peluches</option>
              <option value="ropa">Ropa</option>
              <option value="cojin">Cojines</option>
              <option value="caja">Cajas</option>
              <option value="accesorio">Accesorios</option>
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
          <div class="col-md-3 p-1" data-category="taza" data-price="29.90" data-size="pequeño">
            <div class="card h-100">
              <img src="imagenes/taza.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 1">
              <div class="card-body">
                <h5 class="card-title fw-bold">Taza Personalizada</h5>
                <p class="card-text">Taza personalizada + Mouse Pad personalizado <br><span class="text text-danger fw-bold">S/.29.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Taza Personalizada', 29.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>

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
          <div class="col-md-3 p-1" data-category="caja" data-price="49.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/caja.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 3">
              <div class="card-body">
                <h5 class="card-title fw-bold">Caja cartón</h5>
                <p class="card-text">Riccadona pequeño + rocher<br><span class="text text-danger fw-bold">S/.49.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Caja cartón', 49.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="accesorio" data-price="25.90" data-size="pequeño">
            <div class="card h-100">
              <img src="imagenes/cartuchera.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 4">
              <div class="card-body">
                <h5 class="card-title fw-bold">Cartuchera Personalizada</h5>
                <p class="card-text">Contiene 3 compartimentos<br><span class="text text-danger fw-bold">S/.25.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Cartuchera personalizada', 25.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="cojin" data-price="39.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/cojin.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 5">
              <div class="card-body">
                <h5 class="card-title fw-bold">Cojín Personalizado</h5>
                <p class="card-text">Medidas 40 X 40 cm<br><span class="text text-danger fw-bold">S/.39.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Cojin personalizado', 39.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="peluche" data-price="160.00" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/oso.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold">Oso Panda Grande</h5>
                <p class="card-text">Medidas 1.80m<br><span class="text text-danger fw-bold">S/.160.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Oso Panda Grande', 160.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="peluche" data-price="54.90" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/carrito.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 7">
              <div class="card-body">
                <h5 class="card-title fw-bold">Ramo personalizado</h5>
                <p class="card-text">1 carrito hotwelels + tulipan a crochet + dedicatoria<br><span class="text text-danger fw-bold">S/.54.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Ramo Personalizado', 54.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="peluche" data-price="24.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/tulipan.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Ramo a Crochet</h5>
                <p class="card-text">tulipan a crochet + dedicatoria<br><span class="text text-danger fw-bold">S/.24.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Ramo a Crochet', 24.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="accesorio" data-price="55.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/agenda.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 9">
              <div class="card-body">
                <h5 class="card-title fw-bold">Agenda Personalizada</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.55.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Agenda Personalizada', 55.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="accesorio" data-price="35.00" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/cuadro.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 10">
              <div class="card-body">
                <h5 class="card-title fw-bold">Cuadro Spotify Personalizado</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.35.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Cuadro Spotify', 35.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="caja" data-price="105.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/vino.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 11">
              <div class="card-body">
                <h5 class="card-title fw-bold">Vino Personalizado + Porta Vino</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.105.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Vino Personlizado', 105.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="28.90" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/vaso.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 12">
              <div class="card-body">
                <h5 class="card-title fw-bold">Vaso Dulcero Personalizado</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.28.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Vaso Dulcero', 28.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="cojin" data-price="55.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/box.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 13">
              <div class="card-body">
                <h5 class="card-title fw-bold">Box 1 Personalizado</h5>
                <p class="card-text">Cojín de 40X40 cm <br>Taza 11oz<br><span class="text text-danger fw-bold">S/.55.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Box 1', 55.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="accesorio" data-price="52.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/puzle.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 14">
              <div class="card-body">
                <h5 class="card-title fw-bold">Puzzle Personalizada</h5>
                <p class="card-text">100 Piezas<br><span class="text text-danger fw-bold">S/.52.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Puzzle', 52.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="accesorio" data-price="76.90" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/lampara.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 15">
              <div class="card-body">
                <h5 class="card-title fw-bold">Lampara Nube Recien Nacidos</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.76.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Lampara Nube', 76.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="accesorio" data-price="45.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/neceser.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 16">
              <div class="card-body">
                <h5 class="card-title fw-bold">Neceser Personalizada</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.45.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Neceser Personalizado', 45.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="accesorio" data-price="65.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/bolsa.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 17">
              <div class="card-body">
                <h5 class="card-title fw-bold">Bolsa Nevera Térmica Personalizada</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.65.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Bolsa Nevera', 65.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="ropa" data-price="44.90" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/camiseta.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 18">
              <div class="card-body">
                <h5 class="card-title fw-bold">Camiseta Personalizada</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.44.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Camiseta Personalizada', 44.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="accesorio" data-price="15.90" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/bola.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 19">
              <div class="card-body">
                <h5 class="card-title fw-bold">Bola de Navidad Personalizada</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.15.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Bola de Navidad', 15.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="ropa" data-price="45.90" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/antifas.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 20">
              <div class="card-body">
                <h5 class="card-title fw-bold">Antifaz Personalizado</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.45.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Antifaz Personalizado', 45.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="accesorio" data-price="25.90" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/llavero.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 21">
              <div class="card-body">
                <h5 class="card-title fw-bold">Llavero Personalizado</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.25.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Llavero Personalizado', 25.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="ropa" data-price="88.90" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/polera.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 22">
              <div class="card-body">
                <h5 class="card-title fw-bold">Polera Personalizada</h5>
                <p class="card-text">nombre + edad<br><span class="text text-danger fw-bold">S/.88.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Polera personalizada', 88.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="accesorio" data-price="66.90" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/monedero.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 23">
              <div class="card-body">
                <h5 class="card-title fw-bold">Monedero Personalizado</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.66.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Monedero Personalizado', 66.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="accesorio" data-price="125.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/letras.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 24">
              <div class="card-body">
                <h5 class="card-title fw-bold">Letras HOME Personalizadas</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.125.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Letras Home', 125.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'partes/carrito.php' ?>

  <?php include 'partes/formulario.php' ?>




  <a href="https://wa.me/message/6SPVJXBYOZ7XJ1" class="whatsapp-btn" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
  </a>

  <?php include 'partes/footer.php'; ?>
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
</body>

</html>