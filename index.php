<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cosmetics</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="stranica"   >

    <nav class="navbar navbar-expand-lg navbar-light" id="navCont" style="height:100px; ">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav p-lg-0 " style="margin-left: 2%; margin-top:10px;   ">
                    <li><img src="photos/logoo.png" alt="navSlika" class="imgNav" ></li>
                    <li><a id="btn-Pocetna" href="index.php" type="button" class="btn btn-success btn-block" style="margin-left:100px" >
                        Pocetna</a></li>
                    <li><a id="btn-Dodaj" type="button" class="btn btn-success btn-block"  style="margin-left:100px" data-toggle="modal" data-target="#my" >
                        Nov proizvod </a></li>
                    <li><a id="btn-Prikazi" href="prikaziProizvode.php" type="button" style="margin-left:100px" class="btn btn-success btn-block">
                        Svi proizvodi</a></li>
                    <li><a id="btn-Pocetna" href="odjava.php" type="button" class="btn btn-success btn-block"  style="margin-left:100px">
                    Odjavi se</a> </li>
                </div>
            </div>
    </nav>

    <div id="ww">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 centered">
                    <div class="slikeKontejner">
                    <img src="photos/i2.jpg" alt="pocetna" class="img img-circle">
                    <img src="photos/i1.jpg" alt="pocetna" class="img img-circle">
                    <img src="photos/i3.jpg" alt="pocetna" class="img img-circle">
                    </div>
                    <div style="color:white ; background-color:#cfe5c7; padding:25px; border-radius:25px; margin-top:50px ;margin-left:-200px;  margin-right:-200px">
                        <h2> Dobrodošli u svet lepote i negovanja. Otkrijte mesto gde se vaša lepota pretvara u stvarnost.</h2>
                        <br>
                        <h3> Otkrijte vrhunsku kolekciju kozmetičkih proizvoda na našem sajtu. Uživajte u jednostavnoj online kupovini.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="podaciPretraga"style="font-size:18px ; margin-top:-40px" ></div>
    </div>

    <div class="modal fade" id="my" role="dialog" >
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="align-items:center; justify-content: center;" >
                    <div class="container prijava-form">
                        <form action="#" method="post" id="dodajForm">
                            <h3 style="color:#f4a9c9; text-align: center ">Dodaj proizvod:</h3>
                            <div class="row" >
                                <div class="col-md-11 ">
                                    <div class="form-group">
                                        <label style="color:#f4a9c9" for="">Ime proizvoda:</label>
                                        <input type="text" style="border: 1px solid black" name="imeProizvoda" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label style="color:#f4a9c9"for="">Kolicina:</label>
                                        <input type="text" style="border: 1px solid black" name="kolicina" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label style="color:#f4a9c9" for="">Cena proizvoda:</label>
                                        <input type="text" style="border: 1px solid black" name="cena" class="form-control" />
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group">
                                        <button id="btnDodaj" type="submit" class="btn btn-success btn-block" style="background-color: #f4a9c9">
                                            Dodaj novi proizvod</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>


   
</body>