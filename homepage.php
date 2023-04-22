<a href="index.php?sayfa=insert">İçerik Ekle</a>


<?php $dersler = $db->query("SELECT * FROM dersler")->fetchAll(PDO::FETCH_ASSOC) ;


// print_r($dersler);
?>



<ul>
    <?php foreach ($dersler as $ders): ?>
        <li class="border border-success w-25">
            <span class="me-3"><?php echo $ders["baslik"] ?></span>
            <a href="index.php?sayfa=oku&id=<?php echo $ders["id"] ?>">Oku</a>
            <a href="">Düzenle</a>
            <a href="">Sil</a>
        </li>
    <?php endforeach; ?>
    
</ul>