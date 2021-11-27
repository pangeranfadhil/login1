<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Variabel</title>
  </head>
  <body>
    <h2 class="box1"> <b>pangeran <br> <h5>(Variabel)  </h5> </b> </h2 class>

      <div class="container">
            <div class="row">
                <div class="col">
                    <div class="box2">
                    <?php
                    //Input
                    $StringNamaDepan = "fadhil";
                    $StringNamaBelakang = "fauzi";

                    $int1 = 5;
                    $int2 = 2;

                    $float1 = 2.1;
                    $float2 = 4.9;

                    $hasil = ($float1 + $float2)/3;

                    //Output
                    echo "Variabel Type Data String   = {$StringNamaDepan}{$StringNamaBelakang}<br>";
                    echo "Variabel Type Data Integer  = in1=5 <br>";
                    echo "Variabel Type Data Float    = {$hasil} <br>";
                    echo "Variabel Type Data Gabungan = contoh 5 + 2 = " . strval ($int1 + $int2);?>
                    </div>
                </div>
            </div>            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5sXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
