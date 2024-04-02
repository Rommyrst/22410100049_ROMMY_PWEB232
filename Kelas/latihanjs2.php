<!DOCTYPE html>
<html>

<body>


<p id="isi"> Welcome </p>
<p>mantap</p>
<button type="button" onclick="myfungsi()">klik</button>
<button type="button" onclick="myfungsi1()">klik</button>

<script>
        document.getElementById("isi").innerHTML = 5+6;
        document.write(5+12);
        document.write("\n sip");
        function myfungsi()
        {
            window.alert("mantap bro");
        }
        function myfungsi1()
        {
            console.log("ini muncul console log");
        }
</script>

</body>
</html>