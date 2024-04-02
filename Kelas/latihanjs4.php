<!DOCTYPE html>
<html>
    <body>
        <h2>
            JavaScript If
        </h2>
        <p id="isi"> Selamat Pagi !!! </p>

        <script>
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