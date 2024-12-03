<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="title" content="Catalogo">
  <meta name="description"
    content="Variedad de productos de excelente calidad, excelente costo y de los mejores materiales, innovando en la moda y el cuidado personal, queriendo rezaltar la belleza de cada mujer">
  <meta name="keywords" content="Aretes,nube,antioxidante">
  <meta name="robots" content="noindex, nofollow">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/Catalogo.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon" href="img/Logo.ico" type="image/png" />
  <script src="js/NavarResponsive.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script
    src="https://www.paypal.com/sdk/js?client-id=AU4PD63W4zCsCR_PKoyYvTuQDh3d-KlEewpepu1VtE5tgp3kCsNUbNwhUAtpNwSpObc5-yjrsnxD2ADV&currency=MXN"></script>

  <!-------------------------------------------FILTRO DE BUSQUEDA, YA FUNCIONA, NO MOVER------------------------------------------------------->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const filterSelect = document.getElementById('filter');
      const cardsContainer = document.querySelector('.row');
      filterSelect.addEventListener('change', () => {
        const selectedOption = filterSelect.value;
        const cards = Array.from(cardsContainer.getElementsByClassName('col-12'));
        switch (selectedOption) {
          case 'asc':
            cards.sort((a, b) => a.querySelector('h5').textContent.localeCompare(b.querySelector('h5').textContent));
            break;
          case 'desc':
            cards.sort((a, b) => b.querySelector('h5').textContent.localeCompare(a.querySelector('h5').textContent));
            break;
          case 'price-asc':
            cards.sort((a, b) => {
              const priceA = parseFloat(a.querySelector('.card-price').getAttribute('data-precio'));
              const priceB = parseFloat(b.querySelector('.card-price').getAttribute('data-precio'));
              return priceA - priceB;
            });
            break;
          case 'price-desc':
            cards.sort((a, b) => {
              const priceA = parseFloat(a.querySelector('.card-price').getAttribute('data-precio'));
              const priceB = parseFloat(b.querySelector('.card-price').getAttribute('data-precio'));
              return priceB - priceA;
            });
            break;
          default:
            break;
        }
        cards.forEach((card) => cardsContainer.appendChild(card));
      });
    });
  </script>
  <title>PUFFULIZ || Catalogo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <!-------------------------------------------NAVBAR------------------------------------------------------->
  <header>
    <div class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
      <div class="container">
        <a href="index.php" class="navbar-brand" title="index">
          <strong style="color: white;">PUFFULIZ</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarHeader">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="index.php" class="nav-link active" style="color: white;" title="index">Inicio</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link active" style="color: white;" title="aretes">Vasos & termos</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link active" style="color: white;" title="collares">Disfraces</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link active" style="color: white;" title="cuidado">Decoración</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link active" style="color: white;" title="ropa">Accesorios</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link active" style="color: white;" title="ropa">Dulces</a>
            </li>
          </ul>
          <!-------------------------------------------OPCION DE CARRITO, NO MOVER, AQUI NO ESTA EL ERROR------------------------------------------------------->
          <div class="container-icon">
            <div class="container-cart-icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="icon-cart">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
              </svg>
              <div class="count-products">
                <span id="contador-productos">0</span>
              </div>
            </div>
            <div class="container-cart-products hidden-cart">
              <div class="row-product hidden">
                <div class="cart-product">
                  <div class="info-cart-product">
                    <span class="cantidad-producto-carrito">1</span>
                    <p class="titulo-producto-carrito">Zapatos Nike</p>
                    <span class="precio-producto-carrito">$80</span>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="icon-close">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </div>
              </div>

              <div class="cart-total hidden">
                <h3>Total:</h3>
                <span class="total-pagar">$200</span>
                <div>
                  <div id="paypal-button-container" style="text-align: center"></div>
                </div>



              </div>
              <p class="cart-empty">El carrito está vacío</p>
            </div>
          </div>
          <!-------------------------------------------BARRA DE BUSQUEDA------------------------------------------------------->
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" id="formulario">
            <button class="btn btn-outline-success" type="submit" id="boton">Buscar</button>
          </form>
        </div>
      </div>
    </div>
  </header>
  <!-------------------------------------------OPCIONES DE ORDENAMIENTO, YA FUNCIONA,  NO MOVER------------------------------------------------------->
  <div class="py-5 bg-light border-top">
    <center>
      <h1>Catalogo</h1>
    </center>
    <br>
    <div class="center-container">
      <div class="filter-container">
        <label for="filter">Ordenar por:</label>
        <select id="filter">
          <option value="default">Predeterminado</option>
          <option value="asc">Orden alfabético ascendente</option>
          <option value="desc">Orden alfabético descendente</option>
          <option value="price-asc">Precio ascendente</option>
          <option value="price-desc">Precio descendente</option>
        </select>
      </div>
    </div>
    <!-------------------------------------------TARJETAS DE PRODUCTOS, YA FUNCIONA, NO MOVER------------------------------------------------------->
    <div class="container">
      <div class="row" id="productos-row"></div>
    </div>

    <script>
      $(document).ready(function () {
        $.getJSON("productos.json", function (data) {
          $.each(data, function (index, producto) {
            var tarjetaHTML = `
          <div class="col-12 col-sm-6 col-md-4">
            <div class="item">
              <div class="info-product">
                <div id="tit">
                  <figure>
                    <img src="${producto.imagen}"  title="${producto.nombre}" alt="${producto.nombre}">
                  </figure>
                  <br>
                  <h5>${producto.nombre}</h5>
                  <p class="card-price" data-precio="${producto.precio}">$${producto.precio}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <button class="btn btn-sm btn-outline-secondary btn-go" data-id="${producto.id}">Ir</button>
                </div>
                <button class="btn btn-sm btn-outline-secondary btn-add-cart">Agregar al Carrito</button>
              </div>
            </div>
          </div>
        `;
            $("#productos-row").append(tarjetaHTML);
          });
          $(".btn-go").click(function () {
            var productId = $(this).data("id");
            window.location.href = "producto.html?id=" + productId;
          });
        });
      });
    </script>

    <br>
    <!-------------------------------------------TABLLA DE PRODUCTOS, YA FUNCIONA, NO MOVER------------------------------------------------------->
    <center>
      <div>
        <div class="tablita">
          <table class="tabla" id="tabla">
            <thead>
              <tr class="column">
                <th style="background-color: black;">Nombre del producto</th>
                <th style="background-color: black;">Descripción</th>
                <th style="background-color: black;">Precio</th>
                <th style="background-color: black;">Cantidad</th>
              </tr>
              <center></center>
            </thead>
            <tbody id="res">
            </tbody>
          </table>
          <script>
            document.addEventListener("DOMContentLoaded", function () {
              cargarDatos();
            });
            function cargarDatos() {
              const xhr = new XMLHttpRequest();
              xhr.open('GET', 'productos.json', true);
              xhr.onload = function () {
                if (this.status === 200) {
                  const productos = JSON.parse(this.responseText);
                  mostrarDatos(productos);
                }
              }
              xhr.send();
            }
            function mostrarDatos(datos) {
              let res = document.querySelector('#res');
              res.innerHTML = '';
              for (let item of datos) {
                res.innerHTML += "<tr><td> <center>" + item.nombre + "</center></td><td>" + item.descripcion + "</td><td><center>$" + item.precio + "</center></td><td><center>" + item.cantidad + "</center></td><td></td></tr>";
              }
            }
          </script>
        </div>
    </center>
  </div>
  <br>
  </div>
  <!-------------------------------------------FOOTER------------------------------------------------------->
  <footer class="container-fluid py-5 my-5 border-top" style="background-color: black;">
    <div class="row justify-content-center">
      <div class="col-12 col-md-3 order-2 order-md-1 text-center">
        <small class="d-block text-light">© 2022-2024 PUFFULIZ</small>
      </div>
      <div class="col-6 col-md-3 order-1 order-md-2 text-center">
        <h5 class="text-light">Características</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted-light" style="color: white;">Buenos </a></li>
          <li><a class="text-muted-light" style="color: white;">Bonitos</a></li>
          <li><a class="text-muted-light" style="color: white;">Baratos</a></li>
          <li><a class="text-muted-light" style="color: white;">Disponibles</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3 order-1 order-md-2 text-center">
        <h5 class="text-light">Contactanos</h5>
        <ul class="list-unstyled text-small">
          <li><a href="https://www.facebook.com/PuffuLiz?mibextid=ZbWKwL" class="text-light"
              title="facebook">Facebook</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <!-------------------------------------------TABLA, NO MOVER, YA FUNCIONA------------------------------------------------------->
  <script>
    function cargarDatos() {
      const xhr = new XMLHttpRequest();
      xhr.open('GET', 'productos.json', true);
      xhr.onload = function () {
        if (this.status === 200) {
          const productos = JSON.parse(this.responseText);
          mostrarDatos(productos);
        }
      }
      xhr.send();
    }
    function mostrarDatos(datos) {
      let res = document.querySelector('#res');
      res.innerHTML = '';
      for (let item of datos) {
        res.innerHTML += "<tr><td>" + item.nombre + "</td><td>" + item.descripcion + "</td><td>$" + item.precio + "</td><td>" + item.cantidad + "</td><td></td></tr>";
      }
    }
    document.addEventListener("DOMContentLoaded", function () {
      cargarDatos();
    });
    //----------------------------------------------------CARRITO---------------------------------------------------
    let allProducts = [];

    const btnCart = document.querySelector('.container-cart-icon');
    const containerCartProducts = document.querySelector('.container-cart-products');
    const rowProduct = document.querySelector('.row-product');
    const valorTotal = document.querySelector('.total-pagar');
    const countProducts = document.querySelector('#contador-productos');
    const cartEmpty = document.querySelector('.cart-empty');
    const cartTotal = document.querySelector('.cart-total');

    btnCart.addEventListener('click', () => {
      containerCartProducts.classList.toggle('hidden-cart');
    });
    // Agregar productos al carrito
    document.addEventListener("DOMContentLoaded", function () {
      const productsList = document.getElementById('productos-row');
      const cartContainer = document.querySelector('.container-cart-products');

      productsList.addEventListener('click', e => {
        if (e.target.classList.contains('btn-add-cart')) {

          const product = e.target.closest('.item');
          const title = product.querySelector('h5').textContent;
          const price = parseFloat(product.querySelector('.card-price').getAttribute('data-precio'));
          const infoProduct = {
            quantity: 1,
            title: title,
            price: price,
          };
          const exists = allProducts.some(product => product.title === infoProduct.title);
          if (exists) {
            allProducts.forEach(item => {
              if (item.title === infoProduct.title) {
                item.quantity++;
              }
            });
          } else {
            allProducts.push(infoProduct);
          }
          showHTML();
        }
      });
    });

    rowProduct.addEventListener('click', e => {
      if (e.target.classList.contains('icon-close')) {
        const product = e.target.parentElement;
        const title = product.querySelector('p').textContent;

        allProducts = allProducts.filter(
          product => product.title !== title
        );

        console.log(allProducts)
        showHTML();
      }
    });




    // Mostrar productos en el carrito
    function showHTML() {

      if (!allProducts.length) {
        cartEmpty.classList.remove('hidden');
        rowProduct.classList.add('hidden');
        cartTotal.classList.add('hidden');
      } else {
        cartEmpty.classList.add('hidden');
        rowProduct.classList.remove('hidden');
        cartTotal.classList.remove('hidden');
      }
      rowProduct.innerHTML = '';

      let total = 0;
      let totalOfProducts = 0;

      allProducts.forEach(product => {
        const containerProduct = document.createElement('div');
        containerProduct.classList.add('cart-product');
        containerProduct.innerHTML = `
      <div class="info-cart-product">
        <span class="cantidad-producto-carrito">${product.quantity}</span>
        <p class="titulo-producto-carrito">${product.title}</p>
        <span class="precio-producto-carrito">$${product.price.toFixed(2)}</span>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="icon-close">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    `;
        rowProduct.appendChild(containerProduct);

        total += parseFloat(product.price) * product.quantity;
        total2 = total;
        totalOfProducts += product.quantity;
      });
      valorTotal.innerText = `$${total.toFixed(2)}`;
      countProducts.innerText = totalOfProducts;



    }
    paypal.Buttons({
      createOrder: function (data, actions) {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: total2
            }
          }]
        });
      },
      onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
          alert('¡Compra exitosa!');
          window.location.href = "catalogo.php";
        });
      }
    }).render('#paypal-button-container');
  </script>
</body>

</html>