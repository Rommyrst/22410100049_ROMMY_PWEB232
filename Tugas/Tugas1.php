<html>
<head>
    <title>Tugas1</title>
</head>
<style>

td{
    text-align : center
}
</style>
<body>
    
    <a href="Tugas1.1.php" target="blank"> 
        <input type = "button" name ="Tambah" value ="Tambah"; ></a>
    <br><br>

    <table border = "1" style="width:100%; height:100px">
        <tr>
            <th rowspan ="2">Kode</th>
            <th rowspan ="2">Nama</th>
            <th rowspan ="2">Satuan</th>
            <th colspan ="2"> Harga</th>
            <th rowspan ="2">Action</th>
        </tr>
        <!-- baris 3 -->
        <tr>
             <th> Jual</th>
             <th> Beli</th>
        </tr>
        <tr>
            <td> M01 </td>
            <td> CPU </td>
            <td> pcs</td>
            <td> 200 </td>
            <td> 350 </td>
            <td> 
                <a href="Tugas1.2.php" target="blank"> 
                    <input type = "button" name ="update" value ="update"> </a>
            </td>
        </tr>
        <tr>
            <td> M02 </td>
            <td> RAM </td>
            <td> pcs</td>
            <td> 300 </td>
            <td> 450 </td>
            <td> 
                <a href="Tugas1.2.php" target="blank"> <input type = "button" name ="update" value ="update"; ></a>
            </td>
        </tr>
        <tr>
            <td> M03 </td>
            <td> VGA </td>
            <td> pcs</td>
            <td> 400 </td>
            <td> 550 </td>
            <td> 
                <a href="Tugas1.2.php" target="blank"> <input type = "button" name ="update" value ="update"; ></a>
            </td>
        </tr>
    </table>

</body>
</html>