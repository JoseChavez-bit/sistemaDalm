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