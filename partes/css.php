<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>

    .btn-border-white {
      border: 2px solid #ffffff;
      color: #ffffff;
    }
    
    .footer {
            background-color: #343a40; /* Color de fondo oscuro */
            color: #ffffff; /* Color del texto */
            padding: 20px 0; /* Espaciado */
        }

        .footer a {
            color: #ffffff; /* Color de los enlaces */
            text-decoration: none; /* Sin subrayado */
        }

        .footer a:hover {
            text-decoration: underline; /* Subrayado al pasar el mouse */
        }

    .linea-detras {
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      height: 4px;
      background-color: fuchsia;
      z-index: -1;
    }

    .titulo-con-linea {
      position: relative;
      display: inline-block;
      padding: 10px;
      background-color: white;
    }
    .img-tamaño-fijo {
    width: 100%;
    height: 200px;
    object-fit: cover;
}
.img-tamaño-fijo:hover {
      transform: scale(1.2);
    }
    .icon-size-lg {
    font-size: 2rem;
  }
  @media (max-width: 576px) {
  .card-title {
    font-size: 1.1rem;
  }

  .card-text {
    font-size: 0.9rem;
  }

  .titulo-con-linea {
    font-size: 1.5rem;
  }
}
img {
  width: auto;
  height: auto; 
}
.img1{
width: 60px;
height: 60px;
}
/* Estilo para las imágenes del carrusel para pantallas pequeñas */
@media (max-width: 768px) {
  .carousel-item img {
    height: auto; /* Ajusta la altura automáticamente */
  }
}

/* Asegurarse de que las imágenes dentro de las tarjetas se adapten bien */
.card-img-top {
  object-fit: cover; /* Hace que la imagen cubra el contenedor sin distorsionarse */
  width: 100%;
  height: auto;
}



        /* Estilos del botón flotante */
        .whatsapp-btn {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 20px;
            right: 20px;
            background-color: #25d366; /* Color de WhatsApp */
            border-radius: 50%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .whatsapp-btn img {
            width: 35px;
            height: 35px;
        }

        /* Efecto de hover */
        .whatsapp-btn:hover {
            background-color: #20c65a;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
        }


        .breadcrumb {
    background-color: #f8f9fa;
    padding: 0.75rem 1rem;
    margin-top: 1rem;
    border-radius: 0.25rem;
    font-size: 0.9rem;
}

.breadcrumb-item a {
    color: #007bff;
    text-decoration: none;
}

.breadcrumb-item a:hover {
    text-decoration: underline;
}


        /* Estilos del navegador de migas */
        .breadcrumb {
            display: flex;
            list-style: none;
            padding: 0;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .breadcrumb li {
            margin-right: 10px;
        }

        .breadcrumb li a {
            text-decoration: none;
            color: #0073e6;
        }

        .breadcrumb li::after {
            content: ">";
            margin-left: 10px;
            color: #555;
        }

        .breadcrumb li:last-child::after {
            content: "";
        }

        .breadcrumb li:last-child a {
            color: #555;
            pointer-events: none;
        }
        
  </style>