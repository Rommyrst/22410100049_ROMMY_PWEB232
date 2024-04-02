<!DOCTYPE html>
<html>
    <body>
        <h2>
            JavaScript For Loop
        </h2>
    
        <p id="isi"> </p>
<form>
    START <br>
    <input type="number" name="nilai1" id="nilai1">
    <br>
    <br>
    END <br>
    <input type="number" name="nilai2" id="nilai2">
    <br>
    <br>

    <button type="button" onclick="myfungsi1()"> TAMPIL</button>
    <br>
</form>
    <script>
        let text = '';
        for (let i = 0 ; i < 10; i++){
            text=text + i +"<br>";
        }

        document.getElementById("isi").innerHTML = text;
    </script>
    </body>
</html>