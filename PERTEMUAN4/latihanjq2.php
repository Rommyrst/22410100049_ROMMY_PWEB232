<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
            $("document").ready(function()
                {    $('#isi').load('page1.php');

                $("#page2").click(function()
                {    $('#isi').load('page2.php'); });

                $("#page3").click(function()
                {    $('#isi').load('page3.php'); });

                $("#page4").lick(function()
                {    $('#isi').load('page4.php'); });
                
            });
           
        </script>
    </head>

    <body>
        <p> Hello JQuery </p>
        <button id ="page2">Hal 2 </button>

        <div id="isi">

        </div>
    </body>
</html>
