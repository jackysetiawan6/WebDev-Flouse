<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="../CSS/profile.css">
        <link rel="stylesheet" href="../CSS/transactions.css">
    </head>

    <body>
        @include('navbar')
        <div class="container-for-profile-page-main">
            @include('sidebar')
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

                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </body>

</html>
