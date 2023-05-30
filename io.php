<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input output</title>
</head>
<body>
    <center>
    <h4>Masukan biodata anda</h4>
    <form action="#" method="post">
        <h4>nama</h4>
         <input type="text" name="txnama" id="" ></br>
    <h4>nis</h4>

         <input type="number" name="txnis" id="" ></br>
      <h4>rombel</h4>
         <input type="text" name="txrom" id="" ></br>
         <input type="submit" value="simpan" name="btbio">
    </form>
</body>
</html>
<?php

    class Biodata{
        public $nama;

 public function setnama($nama){
    $this->nama = $nama;
    if($this->nama == ""){
        return "data harus diisi";
    }else{
    return $nama;
    }

 }
 public function setnis($nis){
    $this->nis = $nis;
    if($this->nis == ""){
        return "data harus diisi";
    }else{
    return $nis;
    }

 }
 public function setrom($rom){
    $this->rom = $rom;
    if($this->rom == ""){
        return "data harus diisi";
    }else{
    return $rom;
    }

 }
}
$biodata = new Biodata;

if(isset($_POST['btbio'])) {
    echo $biodata->setnama($_POST['txnama']).'</br>';
    echo $biodata->setnis($_POST['txnis']).'</br>';
    echo $biodata->setrom($_POST['txrom']).'</br>';
}

?>