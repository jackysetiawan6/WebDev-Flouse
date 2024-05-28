<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="../CSS/Profile/profile.css">
        <link rel="stylesheet" href="../CSS/Profile/transactions.css">
    </head>

    <body>
        @include('components/navbar')
        <div class="container-for-profile-page-main">
            @include('components/sidebar')
            <div class="container-for-transaction-page">
                <div class="navbar-for-transaction-page">
                    <ul>
                        <li>
                            <a href="">All</a>
                        </li>
                        <li>
                            <a href="">Ongoing</a>
                        </li>
                        <li>
                            <a href="">Success</a>
                        </li>
                        <li>
                            <a href="">Cancelled</a>
                        </li>
                    </ul>
                </div>
                <div class="transaction-content-box">
                    <div class="content-for-transactions-page">
                        <div class="top-text-date">
                            <p1>13 March 2024</p1>
                            <div class="dot"></div>
                            <p>19 : 08</p>
                            <p>NV/20230428/MPL/3199770557</p>
                        </div>
                        <div class="mid-content">
                            <div class="left-right-divider">
                                <div class="left-content">
                                    <div class="image-for-mid-content">
                                        <img src="../image/ProfileFlower.svg" alt="">
                                    </div>
                                </div>
                                <div class="mid-text-content">
                                    <p3>Anneliese Flower Bouquet</p3>
                                    <div class="price-tag-items">
                                        <p>2 item (s)</p>
                                        <p>x</p>
                                        <p>IDR 560,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="right-content">
                                <p>Total Price</p>
                                <p2>IDR 1,120,000</p2>
                            </div>
                        </div>
                        <div class="button-bot-content">
                            <a href="">Buy Again</a>
                        </div>
                    </div>
                    <div class="content-for-transactions-page">
                        <div class="top-text-date">
                            <p1>13 March 2024</p1>
                            <div class="dot"></div>
                            <p>19 : 08</p>
                            <p>NV/20230428/MPL/3199770557</p>
                        </div>
                        <div class="mid-content">
                            <div class="left-right-divider">
                                <div class="left-content">
                                    <div class="image-for-mid-content">
                                        <img src="../image/ProfileFlower.svg" alt="">
                                    </div>
                                </div>
                                <div class="mid-text-content">
                                    <p3>Anneliese Flower Bouquet</p3>
                                    <div class="price-tag-items">
                                        <p>2 item (s)</p>
                                        <p>x</p>
                                        <p>IDR 560,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="right-content">
                                <p>Total Price</p>
                                <p2>IDR 1,120,000</p2>
                            </div>
                        </div>
                        <div class="button-bot-content">
                            <a href="">Buy Again</a>
                        </div>
                    </div>
                    <div class="content-for-transactions-page">
                        <div class="top-text-date">
                            <p1>13 March 2024</p1>
                            <div class="dot"></div>
                            <p>19 : 08</p>
                            <p>NV/20230428/MPL/3199770557</p>
                        </div>
                        <div class="mid-content">
                            <div class="left-right-divider">
                                <div class="left-content">
                                    <div class="image-for-mid-content">
                                        <img src="../image/ProfileFlower.svg" alt="">
                                    </div>
                                </div>
                                <div class="mid-text-content">
                                    <p3>Anneliese Flower Bouquet</p3>
                                    <div class="price-tag-items">
                                        <p>2 item (s)</p>
                                        <p>x</p>
                                        <p>IDR 560,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="right-content">
                                <p>Total Price</p>
                                <p2>IDR 1,120,000</p2>
                            </div>
                        </div>
                        <div class="button-bot-content">
                            <a href="">Buy Again</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components/footer')
    </body>

</html>
