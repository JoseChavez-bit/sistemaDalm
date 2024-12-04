<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tendencias</title>
  <?php include 'partes/css.php'; ?>
</head>

<body>
  <?php include 'partes/header.php'; ?>
  <?php include 'ruta/breadcrumb.php'; ?>


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
    <h2 class="titulo-con-linea fs-4 fs-md-3">TENDENCIAS</h2>
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
              <option value="tomatodo">Tomatodos</option>
              <option value="tela">Polos o Telas</option>
              <option value="cuadro">Cuadros</option>
              <option value="caja">Cajas</option>
              <option value="halloween">Halloween</option>
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
        <div class="container text-center mt-2 position-relative p-2">
          <div class="linea-detras"></div>
          <h2 class="titulo-con-linea fs-4 fs-md-3">TAZAS</h2>
        </div>
        <div class="row" id="product-list">
          <div class="col-md-3 p-1" data-category="taza" data-price="15.00" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/tazablanca.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 1">
              <div class="card-body">
                <h5 class="card-title fw-bold">Taza Blanca Personalizada</h5>
                <p class="card-text">11 oz <br><span class="text text-danger fw-bold">S/.15.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Taza Blanca', 15.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="20.00" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/tazaama.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 2">
              <div class="card-body">
                <h5 class="card-title fw-bold">Taza con asa de color</h5>
                <p class="card-text">11 oz<br><span class="text text-danger fw-bold">S/.20.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Taza con asa de color', 20.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="33.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/conica.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 3">
              <div class="card-body">
                <h5 class="card-title fw-bold">Taza Cónica Personalizada</h5>
                <p class="card-text">17 oz<br><span class="text text-danger fw-bold">S/.33.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Taza Cónica', 33.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="22.00" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/tazacorazon.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 4">
              <div class="card-body">
                <h5 class="card-title fw-bold">Taza con asa de Corazón</h5>
                <p class="card-text">11 oz<br><span class="text text-danger fw-bold">S/.22.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Taza con asa de corazón', 22.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="26.00" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/tazapelota.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 5">
              <div class="card-body">
                <h5 class="card-title fw-bold">Taza con asa de Pelota</h5>
                <p class="card-text">11 oz<br><span class="text text-danger fw-bold">S/.26.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Taza con asa pelota', 26.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="38.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/tazamagica.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 6">
              <div class="card-body">
                <h5 class="card-title fw-bold">Taza Mágica Cónica</h5>
                <p class="card-text">17 oz<br><span class="text text-danger fw-bold">S/.38.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Taza magica cónica', 38.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="54.90" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/tazamom.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 7">
              <div class="card-body">
                <h5 class="card-title fw-bold">Taza Feliz dia Mamá</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.54.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Taza feliz dia mamá', 54.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="taza" data-price="24.90" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/tazanegra.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Taza personalizada</h5>
                <p class="card-text">1 foto<br><span class="text text-danger fw-bold">S/.24.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Taza personalizada', 24.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>

          <div class="container text-center mt-2 position-relative p-2">
            <div class="linea-detras"></div>
            <h2 class="titulo-con-linea fs-4 fs-md-3">PELUCHES</h2>
          </div>

          <div class="col-md-3 p-1" data-category="peluche" data-price="35.00" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/peluche1.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 9">
              <div class="card-body">
                <h5 class="card-title fw-bold">Peluche pareja</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.35.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Peluche pareja', 35.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="peluche" data-price="20.00" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/peluche2.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 10">
              <div class="card-body">
                <h5 class="card-title fw-bold">Peluche deportivo</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.20.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Peluche deportivo', 20.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="peluche" data-price="17.90" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/peluche3.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 11">
              <div class="card-body">
                <h5 class="card-title fw-bold">Peluche con corazón</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.17.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Peluche con corazón', 17.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="peluche" data-price="19.00" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/peluche4.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 12">
              <div class="card-body">
                <h5 class="card-title fw-bold">Peluche perro</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.19.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Peluche perro', 19.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="peluche" data-price="6.00" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/peluche5.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 13">
              <div class="card-body">
                <h5 class="card-title fw-bold">Peluche llavero</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.6.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Peluche llavero', 6.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="peluche" data-price="23.00" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/peluche6.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 14">
              <div class="card-body">
                <h5 class="card-title fw-bold">Peluche cariñosito</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.23.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Peluche cariñosito', 23.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>


          <div class="container text-center mt-2 position-relative p-2">
            <div class="linea-detras"></div>
            <h2 class="titulo-con-linea fs-4 fs-md-3">TOMATODOS</h2>
          </div>

          <div class="col-md-3 p-1" data-category="tomatodo" data-price="25.00" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/toma1.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 15">
              <div class="card-body">
                <h5 class="card-title fw-bold">Tomatodo blanco</h5>
                <p class="card-text">600 ml<br><span class="text text-danger fw-bold">S/.25.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Tomatodo blanco', 25.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="tomatodo" data-price="55.00" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/toma2.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 16">
              <div class="card-body">
                <h5 class="card-title fw-bold">Lata de soda personalizada</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.55.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Lata de soda', 55.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="tomatodo" data-price="35.00" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/toma3.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 17">
              <div class="card-body">
                <h5 class="card-title fw-bold">Termo Aluminio</h5>
                <p class="card-text">500 ml<br><span class="text text-danger fw-bold">S/.35.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Termo aluminio', 35.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="tomatodo" data-price="29.00" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/toma4.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 18">
              <div class="card-body">
                <h5 class="card-title fw-bold">Tomatodo kids personalisado</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.29.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Tomatodo kids', 29.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="tomatodo" data-price="20.90" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/toma5.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 19">
              <div class="card-body">
                <h5 class="card-title fw-bold">Termo personalizado</h5>
                <p class="card-text">400 ml<br><span class="text text-danger fw-bold">S/.20.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Termo personalizado', 20.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="tomatodo" data-price="35.90" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/toma6.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 20">
              <div class="card-body">
                <h5 class="card-title fw-bold">Tomatodo sublimado</h5>
                <p class="card-text">1 lt<br><span class="text text-danger fw-bold">S/.35.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Tomatodo sublimado', 35.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>

          <div class="container text-center mt-2 position-relative p-2">
            <div class="linea-detras"></div>
            <h2 class="titulo-con-linea fs-4 fs-md-3">POLOS O TELAS</h2>
          </div>

          <div class="col-md-3 p-1" data-category="tela" data-price="12.00" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/mochila.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 23">
              <div class="card-body">
                <h5 class="card-title fw-bold">Mochila adulto</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.12.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Mochila adulto', 12.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="tela" data-price="39.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/cojin2.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 24">
              <div class="card-body">
                <h5 class="card-title fw-bold">Cojín </h5>
                <p class="card-text">40 X 40 cm<br><span class="text text-danger fw-bold">S/.39.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Cojín', 39.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="tela" data-price="38.00" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/polomujer.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 25">
              <div class="card-body">
                <h5 class="card-title fw-bold">Polo mujer/varón </h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.38.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Polo mujer/varón', 38.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="tela" data-price="35.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/top.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 26">
              <div class="card-body">
                <h5 class="card-title fw-bold">Polo top standar </h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.35.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Polo top standar', 35.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="tela" data-price="10.00" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/media.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 27">
              <div class="card-body">
                <h5 class="card-title fw-bold">Medias personalisadas </h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.10.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Medias personalizadas', 10.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="tela" data-price="35.00" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/boby.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 28">
              <div class="card-body">
                <h5 class="card-title fw-bold">Body bebe </h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.35.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Body bebe', 35.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>

          <div class="container text-center mt-2 position-relative p-2">
            <div class="linea-detras"></div>
            <h2 class="titulo-con-linea fs-4 fs-md-3">CUADROS</h2>
          </div>

          <div class="col-md-3 p-1" data-category="cuadro" data-price="24.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/carrusel.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 29">
              <div class="card-body">
                <h5 class="card-title fw-bold">Carrusel giratorio</h5>
                <p class="card-text">12 X 21 cm<br><span class="text text-danger fw-bold">S/.24.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Carrusel giratorio', 24.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="cuadro" data-price="38.00" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/spotify.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 30">
              <div class="card-body">
                <h5 class="card-title fw-bold">Cuadro spotify </h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.38.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Cuadro spotify', 38.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="cuadro" data-price="30.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/perso.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 31">
              <div class="card-body">
                <h5 class="card-title fw-bold">Cuadro personalizado </h5>
                <p class="card-text">22 X 18 cm<br><span class="text text-danger fw-bold">S/.30.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Cuadro personalizadp', 30.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="cuadro" data-price="45.00" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/foto.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 32">
              <div class="card-body">
                <h5 class="card-title fw-bold">Foto roca </h5>
                <p class="card-text">20 X 20 cm<br><span class="text text-danger fw-bold">S/.45.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Foto roca', 45.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="cuadro" data-price="30.00" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/cuadro3.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 33">
              <div class="card-body">
                <h5 class="card-title fw-bold">Cuadro espejo </h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.30.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Cuadro espejo', 30.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="cuadro" data-price="14.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/cuadro2.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 34">
              <div class="card-body">
                <h5 class="card-title fw-bold">Cuadro parante </h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.14.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Cuadro parante', 14.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>

          <div class="container text-center mt-2 position-relative p-2">
            <div class="linea-detras"></div>
            <h2 class="titulo-con-linea fs-4 fs-md-3">CAJAS</h2>
          </div>

          <div class="col-md-3 p-1" data-category="caja" data-price="10.00" data-size="grande">
            <div class="card h-100">
              <img src="./imagenes/cajasorpresa.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 35">
              <div class="card-body">
                <h5 class="card-title fw-bold">Caja sorpresa</h5>
                <p class="card-text">30 X 30 x 10 cm<br><span class="text text-danger fw-bold">S/.10.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Caja sorpresa', 10.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="caja" data-price="10.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/caja2.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 36">
              <div class="card-body">
                <h5 class="card-title fw-bold">Caja sorpresa</h5>
                <p class="card-text">25 X 20 x 10 cm<br><span class="text text-danger fw-bold">S/.10.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Caja sorpresa', 10.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="caja" data-price="4.90" data-size="pequeño">
            <div class="card h-100">
              <img src="./imagenes/caja3.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 37">
              <div class="card-body">
                <h5 class="card-title fw-bold">Caja I Love You</h5>
                <p class="card-text">10 X 10 x 4 cm<br><span class="text text-danger fw-bold">S/.4.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Caja I Love You', 4.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="caja" data-price="5.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/caja4.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 38">
              <div class="card-body">
                <h5 class="card-title fw-bold">Caja de vino</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.5.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Caja de vino', 5.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="caja" data-price="10.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/caja5.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 39">
              <div class="card-body">
                <h5 class="card-title fw-bold">Caja para 3 botellas</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.10.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Caja para 3 botellas', 10.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="caja" data-price="8.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/caja6.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 40">
              <div class="card-body">
                <h5 class="card-title fw-bold">Bolsa lonchera</h5>
                <p class="card-text">25 X 20 x 10 cm<br><span class="text text-danger fw-bold">S/.8.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Bolsa lonchera', 8.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>

          <div class="container text-center mt-2 position-relative p-2">
            <div class="linea-detras"></div>
            <h2 class="titulo-con-linea fs-4 fs-md-3">Halloween</h2>
          </div>

          <div class="col-md-3 p-1" data-category="halloween" data-price="74.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/ramoblue.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Ramo dulce blue</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.74.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Ramo dulce blue', 74.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="88.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/dulcegirasoles.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Dulce girasoles</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.88.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Dulcw girasoles', 88.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="9.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/adornobruja.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">adorno porcelana con luz - diseño bruja</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.9.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Adorno porcelana', 9.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="6.30" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/bolsofieltro.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Bolso de fieltro para golosinas</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.6.30</span></p>
                <button class="btn btn-primary" onclick="addToCart('Bolsa de fieltro', 6.30)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="21.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/bruja.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Timbre de plastico con luz</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.21.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Timbre de plastico', 21.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="6.30" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/madera.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Adorno de madera</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.6.30</span></p>
                <button class="btn btn-primary" onclick="addToCart('Adorno de madera', 6.30)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="36.40" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/esqueleto.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Disfraz de niña esqueleto</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.36.40</span></p>
                <button class="btn btn-primary" onclick="addToCart('disfraz de niña esqueleto', 36.40)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="9.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/raton.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Disfraz de niña ratoncita</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.9.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Disfraz de niña ratoncita', 9.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="35.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/pirata.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Disfraz de pirata de poliester</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.35.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Disfraz de pirata', 35.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="31.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/calabaza.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Disfraz de calabaza</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.31.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Disfraz de calabaza', 31.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="9.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/4piezas.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Disfraz set de 4 piezas</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.9.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Disfraz set de 4 piezas', 9.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="51.10" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/estrellas.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Bandeja de estrellas con base de madera</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.51.10</span></p>
                <button class="btn btn-primary" onclick="addToCart('bandeja de estrellas', 51.10)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="65.90" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/lata.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Lata chocolates halloween</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.65.90</span></p>
                <button class="btn btn-primary" onclick="addToCart('Lata chocolates', 65.90)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="79.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/cono.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Cono bouquet halloween</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.79.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Cono bouquet', 79.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="129.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/jack.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Globos de halloween aerostático</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.129.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Globos de halloween', 129.00)">Agregar al Carrito</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1" data-category="halloween" data-price="109.00" data-size="mediano">
            <div class="card h-100">
              <img src="./imagenes/paleta.jpg" class="card-img img-tamaño-fijo img-fluid" alt="Imagen 41">
              <div class="card-body">
                <h5 class="card-title fw-bold">Mega paleta de dulces</h5>
                <p class="card-text"><br><span class="text text-danger fw-bold">S/.109.00</span></p>
                <button class="btn btn-primary" onclick="addToCart('Mega paleta de dulces', 109.00)">Agregar al Carrito</button>
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
          <form id="paymentform" method="GET" action="vaucher2.php">
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
  <?php include 'partes/rutasscript.php' ?>

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
    // Función para actualizar los detalles del carrito en el formulario de pago
    function updatePaymentDetails() {
      const cartDetails = cart.map(product => `${product.name} (x${product.quantity}) - S/.${(product.price * product.quantity).toFixed(2)}`).join('\n');
      const total = cart.reduce((acc, product) => acc + (product.price * product.quantity), 0).toFixed(2);

      // Actualizar los campos del formulario
      document.getElementById('cartDetails').value = cartDetails;
      document.getElementById('hiddenTotal').value = total;
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
  <?php include 'partes/rutasscript.php'?>
</body>

</html>