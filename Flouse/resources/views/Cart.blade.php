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
            <div class="popup-detail" id="popupDetail">
                <div class="popup-content">
                    <svg class="close-button" onclick="toggleDetailPopup()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg>
                    <h2 class="popup-title">Checkout Detail</h2>
                    <div class="delivery-section">
                        <h3 class="section-title">Delivery</h3>
                        <span class="delivery date">
                            <div class="label">
                                <p>Date</p>
                            </div>
                            <div class="value">
                                <p>27 May 2024</p>
                            </div>
                        </span>
                        <span class="delivery time">
                            <div class="label">
                                    <p>Time</p>
                            </div>
                            <div class="value">
                                <p>14:00 - 16:00</p>
                            </div>
                        </span>
                        <span class="delivery city">
                            <div class="label">
                                <p>City</p>
                            </div>
                            <div class="value">
                                <p>Jakarta</p>
                            </div>
                        </span>
                    </div>
                    <div class="receiver-section">
                        <h3 class="section-title">Receiver</h3>
                        <span class="receiver name">
                            <div class="label">
                                <p>Name</p>
                            </div>
                            <div class="value">
                                <p>Karina Tirtayasa</p>
                            </div>
                        </span>
                        <span class="receiver phone">
                            <div class="label">
                                <p>Phone Number</p>
                            </div>
                            <div class="value">
                                <p>6282392839192</p>
                            </div>
                        </span>
                        <span class="receiver address">
                            <div class="label">
                                <p>Address</p>
                            </div>
                            <div class="value">
                                <p>Jl. Pakuan No.3, Sumur Batu, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat</p>
                            </div>
                        </span>
                        <span class="receiver postal">
                            <div class="label">
                                <p>Postal Code</p>
                            </div>
                            <div class="value">
                                <p>16810</p>
                            </div>
                        </span>
                    </div>
                </div>
            </div>

            <div class="popup-notes" id="popupNotes">
                <div class="popup-content">
                    <svg class="close-button" onclick="toggleNotesPopup()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg>
                    <h2 class="popup-title">Notes</h2>
                    <p class="notes-description">Leave notes for the delivery service</p>
                    <div class="input-section">
                        <input type="text" class="input-box" placeholder="Type here">
                    </div>
                    <button class="save-btn" onclick="toggleNotesPopup()">Save</button>
                </div>

            </div>

            <div class="left-side">
                @foreach ($products as $product)
                    <div class="cart-items">
                        <label class="cbox-select-product">
                            <input type="checkbox">
                            <div class="checkmark"></div>
                        </label>
                        <img class="product-thumb" src="Image/ProductDetail/imageMain.png" alt="">
                        <div class="item-description">
                            <div>
                                <h2 class="product-name">{{ $product->product->name }}</h2>
                            </div>
                            <div class="buy-info">
                                <div class="first-part">
                                    <button class="detail-btn" onclick="toggleDetailPopup()">Detail</button>
                                    <svg class="icons" onclick="toggleNotesPopup()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H288V352c0-17.7 14.3-32 32-32h80V96c0-8.8-7.2-16-16-16H64zM288 480H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V320v5.5c0 17-6.7 33.3-18.7 45.3l-90.5 90.5c-12 12-28.3 18.7-45.3 18.7H288z"/></svg>
                                </div>
                                <div class="second-part">
                                    <p class="ori-price">IDR 545,000</p>
                                    <p class="active-price">IDR 345,000</p>
                                </div>
                                <div class="change-qty">
                
                                </div>
                                <div class="last-part">
                                    <svg class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                                </div>
                            </div>
                            <div class="subtotal">
                                <p>Subtotal</p>
                                <h2 class="product-name">IDR 690,000</h2>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                <div class="cart-items last">
                    <label class="cbox-select-product">
                        <input type="checkbox">
                        <div class="checkmark"></div>
                    </label>
                    <img class="product-thumb" src="Image/ProductDetail/imageMain.png" alt="">
                    <div class="item-description">
                        <div>
                            <h2 class="product-name">Auroria Bouquet</h2>
                        </div>
                        <div class="buy-info">
                            <div class="first-part">
                                <button class="detail-btn" onclick="toggleDetailPopup()">Detail</button>
                                <svg class="icons" onclick="toggleNotesPopup()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H288V352c0-17.7 14.3-32 32-32h80V96c0-8.8-7.2-16-16-16H64zM288 480H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V320v5.5c0 17-6.7 33.3-18.7 45.3l-90.5 90.5c-12 12-28.3 18.7-45.3 18.7H288z"/></svg>
                            </div>
                            <div class="second-part">
                                <p class="ori-price">IDR 545,000</p>
                                <p class="active-price">IDR 345,000</p>
                            </div>
                            <div class="change-qty">
            
                            </div>
                            <div class="last-part">
                                <svg class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                            </div>
                        </div>
                        <div class="subtotal">
                            <p>Subtotal</p>
                            <h2 class="product-name">IDR 690,000</h2>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="right-side">
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
    <script src="../JS/Cart.js"></script>
</body>
</html>