<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. Indra El" /> <br>
    <input type="text" name="kelas" placeholder="Ex. 11 rpl 1" /> <br>
    <input type="number" name="nis" placeholder="Ex. 123" /> <br>
    <input type="submit" name="simpan" value="Simpan Data" />
</form>

<?php
    if( isset($_POST["simpan"]) ){
        echo "<hr>";       
        $namalengkap = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        $nis = $_POST["nis"];

        echo "Nama Lengkap : " . $namalengkap; 
        echo "kelas : " . $kelas; 
        echo "NIS : " . $nis; 
    }
?>