<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flouse - The House of Flora</title>
        <link rel="stylesheet" href="../CSS/Public.css">
        <link rel="stylesheet" href="../CSS/Store.css">
    </head>

    <body>
        <div class="container">
            @include('components/Navbar')
            <div class="container-main">
                <div class="main-banner">
                    <img class="banner-image" src="{{ asset('Image/Store/Banner.svg') }}" alt="Banner">
                    <div class="banner-text">
                        <p>Bouquet</p>
                        <p>Breathtaking blooms, thoughtfully arranged to express emotions beautifully. A timeless gift, captivating hearts with
                            vibrant colors and delicate charm</p>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-top">
                        <div class="top-left">
                            <div class="left-filter">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M3,17V19H9V17H3M3,5V7H13V5H3M13,21V19H21V17H13V15H11V21H13M7,9V11H3V13H7V15H9V9H7M21,13V11H11V13H21M15,9H17V7H21V5H17V3H15V9Z" />
                                </svg>
                                <p class="text">Filter</p>
                            </div>
                            <span></span>
                            <p class="text">Sort By</p>
                        </div>
                        <div class="top-mid">
                            <p>Showing 1 - 10 of 10 result(s)</p>
                        </div>
                    </div>
                    <div class="content-bottom">
                        <div class="filter active">
                            <div class="filter-child">
                                <div class="filter-title">
                                    <img src="{{ asset('Image/Store/Cevron.svg') }}" alt="Down">
                                    <p>Category</p>
                                </div>
                                <div class="filter-options">
                                    @foreach ($categories as $category)
                                        <label for="option-{{ $category }}">
                                            <input type="checkbox" id="option-{{ $category }}" name="option-{{ $category }}">
                                            {{ $category }}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="filter-child">
                                <div class="filter-title">
                                    <img src="{{ asset('Image/Store/Cevron.svg') }}" alt="Down">
                                    <p>Color</p>
                                </div>
                                <div class="filter-options">
                                    @foreach ($colors as $color)
                                        <label for="option-{{ $color }}">
                                            <input type="checkbox" id="option-{{ $color }}" name="option-{{ $color }}">
                                            {{ $color }}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="filter-child active">
                                <div class="filter-title">
                                    <img src="{{ asset('Image/Store/Cevron.svg') }}" alt="Down">
                                    <p>Price</p>
                                </div>
                                <div class="filter-options">
                                    <div class="range">
                                        <div class="range-slider">
                                            <span class="range-selected"></span>
                                            <input type="range" class="slider-min" value="0" min="0" max="10000000" step="1">
                                            <input type="range" class="slider-max" value="10000000" min="0" max="10000000" step="1">
                                        </div>
                                    </div>
                                    <div class="range-price">
                                        <div class="range-min">
                                            <p>IDR</p>
                                            <input type="text" name="min" maxlength="8" value="0">
                                        </div>
                                        <div class="range-max">
                                            <p>IDR</p>
                                            <input type="text" name="max" maxlength="8" value="10000000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products">
                            @for ($i = 1; $i <= 10; $i++)
                                <div class="product">
                                    <div class="product-image">
                                        <img src="{{ asset('Image/Store/ProductImage.svg') }}" alt="Product Image">
                                    </div>
                                    <div class="product-details">
                                        <p class="product-name">Classic Midnight Hand Bouquet - Fiery Red</p>
                                        <p class="product-original"><strike>IDR 800.000</strike> (-51%)</p>
                                        <p class="product-discounted">IDR 385.000</p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="additional">
                        <p>Page:</p>
                        <p class="page active">1</p>
                        <p class="page">2</p>
                        <p class="page">3</p>
                    </div>
                </div>
            </div>
            @include('components/Footer')
        </div>
        <script src="../JS/Store.js"></script>
    </body>

</html>
