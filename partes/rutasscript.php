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