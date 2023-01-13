<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-40749729-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-40749729-3');
    </script>
    <meta charset="utf-8">
    <title>GALAXY 6.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8569cd71e9.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <script src="https://apis.google.com/js/api:client.js"></script>
    <link rel="stylesheet" href="{{ url('assets/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/venobox/venobox.css') }}">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ url('assets/images/icon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ url('assets/images/icon.png') }}" type="image/x-icon">
    <style>
        .olimpiade {
            background-color: white;
        }
    </style>
    <script>
        var googleUser = {};
        var startApp = function() {
            gapi.load('auth2', function() {
                // Retrieve the singleton for the GoogleAuth library and set up the client.
                auth2 = gapi.auth2.init({
                    client_id: 'YOUR_CLIENT_ID.apps.googleusercontent.com',
                    cookiepolicy: 'single_host_origin',
                    // Request scopes in addition to 'profile' and 'email'
                    //scope: 'additional_scope'
                });
                attachSignin(document.getElementById('customBtn'));
            });
        };

        function attachSignin(element) {
            console.log(element.id);
            auth2.attachClickHandler(element, {},
                function(googleUser) {
                    document.getElementById('name').innerText = "Signed in: " +
                        googleUser.getBasicProfile().getName();
                },
                function(error) {
                    alert(JSON.stringify(error, undefined, 2));
                });
        }
    </script>
</head>

<body>
    <section id="jaringan" class=""></section>

    @include('templates.navbar')

    @yield('container')

    @include('templates.footer')




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="{{ url('assets/plugins/jQuery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ url('assets/plugins/aos/aos.js') }}"></script>
    <script src="{{ url('assets/plugins/venobox/venobox.min.js') }}"></script>
    <script src="{{ url('assets/plugins/mixitup/mixitup.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places">
    </script>
    <script src="{{ url('assets/plugins/google-map/gmap.js') }}"></script>
    <script src="{{ url('assets/js/script.js') }}"></script>
</body>

</html>
