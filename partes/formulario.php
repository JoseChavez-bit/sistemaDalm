
  <!-- Modal del formulario de pago -->

  <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="paymentModalLabel">Formulario de Pago</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="paymentform" method="GET" action="vaucher.php">
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
