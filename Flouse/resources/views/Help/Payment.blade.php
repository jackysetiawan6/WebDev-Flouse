<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Public.css">
    <link rel="stylesheet" href="../CSS/Help/Payment.css">
    <title>Document</title>
</head>
<body>
    @include("Components/Navbar")
    <div class="page">
        @include("Components/SideAbout")
        <!-- <div class="left">
            <div class="top">
                <h2 class="about">ABOUT FLOUSE</h2>
                <hr class="line1">
                <div class="top2">
                    <a href="" class="apa">About Us</a>
                    <a href="" class="apa">Store Location</a>
                    <a href="" class="apa">Privacy Policy</a>
                    <a href="" class="apa">Cookie Policy</a>
                    <a href="" class="apa">Terms and Condition</a>
                </div>
            </div>
            <div class="top">
                <h2 class="about">HELP</h2>
                <hr class="line1">
                <div class="top2">
                    <a href="" class="apa">Contact Us</a>
                    <a href="" class="apa">How to Order</a>
                    <a href="" class="apa">Plant Care Tips</a>
                    <a href="" class="apa select">Payment</a>
                    <a href="" class="apa">Shipping</a>
                    <a href="" class="apa">FAQ</a>
                </div>
            </div>
        </div> -->
        <div class="right">
            <h2 class="right2">Payment</h2>
            <div class="apa2">Secure and Convenient Payment Options at Flouse</div>
            <div class="apa3">
                At Flouse, we make purchasing your plants a breeze! We offer a variety of secure payment options to suit your preference:
                <ul class="point">
                    <li>E-Wallets: For a quick and easy checkout, use your favorite e-wallets, Ovo and Gopay.</li>
                    <li>Bank Transfers: We accept bank transfers from major Indonesian banks for your convenience, including BCA, BRI, and Mandiri.</li>
                    <li>Credit/Debit Cards: Enjoy the flexibility of using your credit or debit card for your Flouse purchases. We accept Mastercard, Visa, and American Express.</li>
                </ul>
                All transactions are processed securely through trusted payment gateways to ensure your information remains protected.
Choose the payment method that best suits you and complete your order with complete peace of mind!
            </div>
        </div>
    </div>
    @include("Components/Footer")
</body>
</html>