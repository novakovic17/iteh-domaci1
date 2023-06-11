<?php
require '../konekcija.php';
require '../modeli/proizvod.php';

    $id =$_POST['id'];  

    $proizvod = new Proizvod($id,null,null,null);

    if($proizvod->delete($conn,$id)){
      echo "Ok";
    }else{
      echo "Not okay";
    }
 ?>