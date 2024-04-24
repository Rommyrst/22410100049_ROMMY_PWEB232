<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
            $(document).ready(function(){
                $("#klikaku").click(function(){
                    let x = $("#nama").val();
                    let y = $('[name = "nama"]').val();
                    let z = $(".isian").val();
                    let k = $("p").html();

                    $("#namaku").val(y);
                    $("#namaku").val(k);

                    alert(k);
                    console.log(k);
                });
            });
        </script>
    </head>

    <body>
        <p> Hello JQuery </p>
        <input type="text" id="nama" name="nama" class="isian">
        <button id="klikaku"> Click Me </button>
        <input type="text" id="namaku" name="namaku">
    </body>
</html>
