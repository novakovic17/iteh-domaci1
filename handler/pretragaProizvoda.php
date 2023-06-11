<?php
    require '../konekcija.php';
    require '../model/kategorija.php';
    require '../model/proizvod.php';

    if(isset($_GET['kategorijaId']))
    {
        $id = mysqli_real_escape_string($conn,$_GET['kategorijaId']);
        $niz = [];

        $rez = $conn->query("select * from proizvodi where kategorijaId=$id");
        while($red=$rez->fetch_assoc()):

        $proizvodi = new Proizvod($red['proizvodId'],$red['imeProizvoda'],$red['kolicina'],$red['cena'],$red['kategorijaId']);
        array_push($niz,$proizvodi);
        endwhile;
    ?>

    <table class="table table-hover"  >
    <thead style="font-weight:500px ; color:white;background-color:#A5DADE;">
        <tr >
            <th scope="col">Proizvod</th>
            <th scope="col">Cena</th>
            <th scope="col">Kolicina</th>
            <th scope="col">Kategorija</th>
        </tr>
    </thead>

    <tbody style=" color:white; background-color:#f4a9c9; opacity:80%" >
        <?php echo "<br>"?>
        <?php echo "<br>"?>
        <?php echo "<br>"?>
        <?php echo "<br>"?>
        <?php
        foreach($niz as $vrednost):
            ?>
                <tr>
                <td><?php echo $vrednost->imeProizvoda  ?></td>
                <td><?php echo $vrednost->cena ?>  </td>
                <td><?php echo $vrednost->kolicina ?>  </td>
                <td><?php echo $vrednost->kategorijaId ?>  </td>
                </tr>
            <?php
        endforeach;
        ?>
    </tbody>

    </table>
    <?php

    }else{
    echo("Prosledi kategoriju za proizvod.");
    }
 ?>