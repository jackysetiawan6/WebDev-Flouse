<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="../CSS/profile.css">
        <link rel="stylesheet" href="../CSS/Address.css">
    </head>

    <body>
        @include('navbar')
        <div class="container-for-profile-page-main">
            @include('sidebar')
            <div class="content-for-profile-page">
                <div class="content-address-in-profile-page">
                    <div class="button-with-plus">
                        <pplus>+</pplus>
                        <p>Add New Address</p>
                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </body>

</html>
