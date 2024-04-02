<!DOCTYPE html>
<html>
    <body>
        <h2>
            JavaScript If
        </h2>
        <p id="isi"> Selamat Pagi !!! </p>
    <form>
    UTS <br>
    <input type="number" name="nilai1" id="nilai1">
    <br>
    UAS <br>
    <input type="number" name="nilai2" id="nilai2">
    <br>
    TUGAS<br>
    <input type="number" name="nilai3" id="nilai3">
    <br>
    <br> 
    <button type="button" onclick="myfungsi1()"> HITUNG</button>
    <br>
    <br>
    NILAI <br>
    <input type="number" name="hasil" id="hasil">
    </form>

        <script>

            //FUNGSI TAMBAH
        function myfungsi1()
        {
        let x = document.getElementById("nilai1").value;
        let y = document.getElementById("nilai2").value;
        let p = document.getElementById("nilai3").value;
        console.log(x);
        console.log(y);
        console.log(p);
        let z= parseInt(x)*0.3 + parseInt(y)*0.3 + parseInt(p)*0.4;
        console.log(z);
        document.getElementById("hasil").value =z;
        }

            let nilai =100;
                if (nilai >=80){
                    document.getElementById("isi").innerHTML = "A";
                }
                else if (nilai>=75){
                    document.getElementById("isi").innerHTML = "B";
                }
                else if (nilai>=65){
                    document.getElementById("isi").innerHTML = "C";
                }
                else {
                    document.getElementById("isi").innerHTML = "D";
                }
        </script>
    </body>
</html>