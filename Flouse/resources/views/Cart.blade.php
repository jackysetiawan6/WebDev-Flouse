<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/Public.css">
    <link rel="stylesheet" href="../CSS/Cart.css">
    <title>Shopping Cart | Flouse</title>
</head>
<body>
    @include('components/navbar')

    <div class="main-container">
        <div class="page-heading">
            <h1 class="page-title">Basket</h1>
            <p class="continue-shopping">Not ready to checkout? <a href="/store">Continue Shopping</a></p>
        </div>
        <div class="page-content">
            <div class="left-side">
                <div class="cart-items">
                    <label class="cbox-select-product">
                        <input type="checkbox">
                        <div class="checkmark"></div>
                    </label>
                    <img class="product-thumb" src="Image/ProductDetail/imageMain.png" alt="">
                    <div class="first-part">
                        <h2 class="product-name">Aurora Bouquet</h2>
                        <button class="detail-btn">Detail</button>
                        <svg class="show-notes" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/></svg>
                    </div>
                    <div class="second-part">
                        <p class="ori-price">IDR 545,000</p>
                        <p class="active-price">IDR 345,000</p>
                    </div>
                    <div class="change-qty">
    
                    </div>
                    <div class="last-part">
                        <svg class="trash-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/></svg>
                        <div class="subtotal">
                            <p>Subtotal</p>
                            <h2 class="product-name">IDR 690,000</h2>
                        </div>
                    </div>
                </div>
                <div class="cart-items">
                    <label class="cbox-select-product">
                        <input type="checkbox">
                        <div class="checkmark"></div>
                    </label>
                    <img class="product-thumb" src="Image/ProductDetail/imageMain.png" alt="">
                    <div class="first-part">
                        <h2 class="product-name">Aurora Bouquet</h2>
                        <button class="detail-btn">Detail</button>
                        <svg class="show-notes" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/></svg>
                    </div>
                    <div class="second-part">
                        <p class="ori-price">IDR 545,000</p>
                        <p class="active-price">IDR 345,000</p>
                    </div>
                    <div class="change-qty">
    
                    </div>
                    <div class="last-part">
                        <svg class="trash-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/></svg>
                        <div class="subtotal">
                            <p>Subtotal</p>
                            <h2 class="product-name">IDR 690,000</h2>
                        </div>
                    </div>
                </div>
                <div class="cart-items last">
                    <label class="cbox-select-product">
                        <input type="checkbox">
                        <div class="checkmark"></div>
                    </label>
                    <img class="product-thumb" src="Image/ProductDetail/imageMain.png" alt="">
                    <div class="first-part">
                        <h2 class="product-name">Aurora Bouquet</h2>
                        <button class="detail-btn">Detail</button>
                        <svg class="show-notes" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/></svg>
                    </div>
                    <div class="second-part">
                        <p class="ori-price">IDR 545,000</p>
                        <p class="active-price">IDR 345,000</p>
                    </div>
                    <div class="change-qty">
    
                    </div>
                    <div class="last-part">
                        <svg class="trash-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/></svg>
                        <div class="subtotal">
                            <p>Subtotal</p>
                            <h2 class="product-name">IDR 690,000</h2>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="right-side">
                <div class="promo-code">
                    <input placeholder="Enter promo code" type="text" name="enter-code" id="">
                    <button class="apply-btn">Apply</button>
                </div>
                <div class="order-summary">
                    <h1 class="summary-title">Order Summary</h1>
                    <hr class="separate-line">
                    <div class="count-total">
                        <span class="subtotal-item">
                            <p class="subtotal-text">Subtotal</p>
                            <p class="subtotal-price">IDR 1,235,000</p>
                        </span>
                        <span class="subtotal-item">
                            <p class="shipping-text">Shipping</p>
                            <p class="shipping-price">FREE</p>
                        </span>
                        <hr class="separate-line">
                        <div>
                            <span class="total-part">
                                <h2 class="total-text">Total</h2>
                                <h2 class="total-price">IDR 1,235,000</h1>
                            </span>
                            <span>
                                <p>Includes duties and taxes</p>
                            </span>
                        </div>
                    </div>
                    <span>
                        <button class="continue-checkout">Continue to Checkout</button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    @include('components/footer')
</body>
</html>