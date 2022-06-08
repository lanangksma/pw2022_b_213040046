<?php 

require 'functions.php';
$id = $_GET["id"];
    if (hapus($id) > 0){
        echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'kuliah_latihan1.php';
            </script>";
}

?>