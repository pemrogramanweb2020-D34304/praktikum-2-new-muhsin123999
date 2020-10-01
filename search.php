<!DOCTYPE html>
<html>
<head>
    <title>Mencari Data</title>
</head>
<body>
    <form action="" method="get">
    Masukan Nama : <input type="text" name="cariorang">
    <input type="submit" name="tombol" value="kirim">
    </form>
<br><br>
<?php
if(isset($_GET['cariorang'])){
$cariorang = $_GET['cariorang'];
echo "Nama Yang dicari $cariorang <br>";
$muhsin = array(
    array(
        "nama" => "Arsene Lupin",
        "nik" => "1234",
        "jenis_kelamin" => "male",
        "tgl_lahir" => "1902-03-23"
    ),
    array(
         "nama" => "Sherlock Holmes",
        "nik" => "4321",
        "jenis_kelamin" => "male",
        "tgl_lahir" => "1812-01-11"
    ),
    array(
         "nama" => "Irene Adler",
        "nik" => "7890",
        "jenis_kelamin" => "female",
        "tgl_lahir" => "1232-04-13"
    )
);

$y=0;
$n=0;
foreach($muhsin as $mubarok){
if(strtoupper($mubarok["nama"]) == strtoupper($cariorang)){
$y=1;
$n=$mubarok;
    } 
}
if($y){
echo "$cariorang <b>Ketemu</b> <br>";
echo "<ul>";
echo "<li>NIK: ".$n["nik"]."</li>";
echo "<li>KELAMIN: ".$n["jenis_kelamin"]."</li>";
echo "<li>TGL LAHIR: ".$n["tgl_lahir"]."</li>";
echo "</ul>";
} else{
echo "$cariorang. <b>Tidak Ketemu</b> <br>";
    }
}
?>
<br>
</body>
</html>