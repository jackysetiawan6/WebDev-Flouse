<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="../CSS/profile.css">
        <link rel="stylesheet" href="../CSS/payment.css">
    </head>

    <body>
        @include('components/navbar')
        <div class="container-for-profile-page-main">
            @include('components/sidebar')
            <div class="content-for-profile-page">
                <div class="left-part-payment">
                    <p>Organize your payments to enhance the security and ease of your shopping experience at Flouse</p>
                    <div class="methodology-of-payment">
                        <pmed>
                            Debit/Credit Card
                        </pmed>
                        <pmed>
                            E-wallet
                        </pmed>
                        <pmedex>
                            American Express
                        </pmedex>
                    </div>
                </div>
                <div class="right-part-payment">
                    <div class="title-for-right-payment">
                        <p>Debit / Credit Card</p>
                    </div>
                    <div class="bank-method">
                        <div class="method-1 setter-method">
                            <img src="../image/bcalogo.svg" alt="">
                            <div class="name-information-full">
                                <p>PT. Bank Central Asia Tbk</p>
                                <p1>054875867</p1>
                                <p2>a.n. Ichsan</p2>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="m14.363 5.652l1.48-1.48a2 2 0 0 1 2.829 0l1.414 1.414a2 2 0 0 1 0 2.828l-1.48 1.48m-4.243-4.242l-9.616 9.615a2 2 0 0 0-.578 1.238l-.242 2.74a1 1 0 0 0 1.084 1.085l2.74-.242a2 2 0 0 0 1.24-.578l9.615-9.616m-4.243-4.242l4.243 4.242" />
                            </svg>
                        </div>
                        <div class="method-2 setter-method">
                            <img src="../image/mandirilogo.svg" alt="">
                            <p>not set</p>

                        </div>
                        <div class="method-3 setter-method">
                            <img src="../image/brilogo.svg" alt="">
                            <p>not set</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components/footer')
    </body>

</html>
