<?php
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    if( isset($_GET["delete"])){
        // ambil data dari tiap elemen dalam form
        $nim = $_GET["nim"];
        // var_dump($_GET);

        // query delete data
        $query = "DELETE FROM mahasiswa WHERE nim = '$nim'";
        // var_dump($query);    
        

        mysqli_query($conn, $query);
        // cek apakah data berhasil dihapus
        if( mysqli_affected_rows($conn) > 0 ){
            echo "berhasil";
            header("Location: index.php");
            exit;
        } else {
            echo "gagal";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>

