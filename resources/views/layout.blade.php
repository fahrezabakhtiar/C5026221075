<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Layout Bootstrap dan CSS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/layoutstyle.css')}}" rel = "stylesheet">

</head>
<body>
    <div class = container-fluid>
        <div class = "row mr-5 mb-4 ml-4 mt-4">
            <div class = "col-12">
                <img class="float-right" src="{{asset('img/layout/Logo_Dark.png')}}" alt = "Logo" style = "width:140px">
            </div>
        </div>
        <div class = "row m-4">
            <div class = "col-7">
                <h1>The Competition</h1>
            </div>
        </div>
        <div class = "row m-4">
            <div class = "col-7">
                <div class = "row">
                    <div class = "col-6">
                        <h2>Company1</h2>
                        <p>Their reviews average 3.5, whereas we average 5 stars</p>
                    </div>
                    <div class = "col-6">
                        <h2>Company2</h2>
                        <p>Their reviews average 3.5, whereas we average 5 stars</p>
                    </div>
                </div>
                <div class = "row mt-4">
                    <div class = "col-6">
                        <h2>Company3</h2>
                        <p>Their reviews average 3.5, whereas we average 5 stars</p>
                    </div>
                    <div class = "col-6">
                        <h2>Company4</h2>
                        <p>Their reviews average 3.5, whereas we average 5 stars</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class = "bottom_right_picture">
        <img src = "{{asset('img/layout/Polygon1.png')}}" style="width:690px; height:610px">
    </div>
</body>
</html>
