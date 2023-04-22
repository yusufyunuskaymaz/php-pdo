<?php 

// $sorgu = $db->prepare("INSERT INTO dersler SET baslik =?,icerik=?,onay=?");



// $ekle = $sorgu->execute([
//     "Türkçe","Zarflar","1"
// ]);

// if($ekle){
//     echo "Başarıyla eklendi...";
// }else {
//     print_r($sorgu->errorInfo());
// }


if(isset($_POST["submit"])){
    $baslik = isset($_POST["baslik"]) ? $_POST["baslik"] : null;
    $icerik = isset($_POST["icerik"]) ? $_POST["icerik"] : null;
    $onay = isset($_POST["onay"]) ? $_POST["onay"] : null;

    $ekle = $db->prepare("INSERT INTO dersler SET
    baslik=?,
    icerik=?,
    onay=?
    ");
    $sorgu = $ekle->execute([
        $baslik,$icerik,$onay
    ]);
    if($ekle){
        header("Location:index.php");
    }
}

?>



<form action="" method="post" class="ms-5">
    Başlık: <br>
    <input type="text" value="<?php echo isset($_POST["baslik"]) ?$_POST["baslik"] : null  ?>" name="baslik" id="">
    İçerik: <br>
    <textarea name="icerik" id="" cols="30" rows="10"></textarea>
    Onay: <br>
    <select name="onay" id="">
        <option value="1">Onaylı</option>
        <option value="0">Onaylı Değil</option>
    </select>


    <input type="hidden" name="submit" value="1">

    <button type="submit">Gönder</button>

</form>