<form action="rumus-persegi.php" method="POST">
    <h1> Rumus Luas dan Keliling Persegi </h1>
    <p>Sisi (s) :</p>
    <input type="number" name="s" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas dan Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $sisi = $_POST["s"];
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "Sisi : $sisi <br>";
        echo "Luas Persegi : $luas <br>";
        echo "Keliling Persegi : $keliling <br>";
        echo "<hr>";

        echo "Rumus : <br>";
        echo "Luas : s x s <br>"; 
        echo "Keliling : 4 x s <br>";
    }
?>