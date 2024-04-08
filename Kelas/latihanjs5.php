<!DOCTYPE html>
<html>
    <body>
        <h2>
            JavaScript For Loop
        </h2>
    

<form>
    START <br>
    <input type="number" name="start" id="start">
    <br>
    <br>
    END <br>
    <input type="number" name="end" id="end">
    <br>
    <br>

    <button type="button" onclick="tampil()"> TAMPIL</button>
    <br>
</form>
<p id="isi"> </p>
    <script>
        function tampil(){
        var text = '';
        let start = parseInt(document.getElementById("start").value);
        let end = parseInt(document.getElementById("end").value);
        console.log(start);
        console.log(end);

        for (var i = start ; i <= end ; i++){
            text += i + "<br>";
        }

        document.getElementById("isi").innerHTML = text;
    }
    </script>
    </body>
</html>