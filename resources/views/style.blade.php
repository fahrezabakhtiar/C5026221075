<html>
    <head>
    <title>CSS</title>
    <link rel="stylesheet" href="{{asset('css/cssstyle.css')}}">
    <style>
        body{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            color:blueviolet;
        }
        p,div{
            text-align:center;
        }

        .salam{
            font-size: larger;
            text-align:right;
            font-weight: bold;
            text-transform: uppercase;
        }

        .garisbawah{
            text-decoration: underline;
            color:black;
        }

    </style>
    </head>

    <body>
        <!-- Inline CSS, digunakan jika hanya 1 bagian di 1 halaman yang berbeda-->
        Halo, <b style="color:red; text-decoration: underline; text-shadow: 5px 5px 5px yellow;"> Apa</b> kabar?
        <!-- Inpage CSS, digunakan jika yang berbeda hanya di 1 halaman-->
        <div class="salam garisbawah">Halo, Apa kabar?</div>
        <!--External file, digunakan untuk global 1 situs-->
        <span class="sembunyi">Halo, Apa kabar?</span>
        <p>Halo, Apa kabar?</p>
    </body>
</html>
