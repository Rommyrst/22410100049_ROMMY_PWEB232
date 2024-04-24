<!DOCTYPE html>
    <head>
        <title> Tugas Quiz 1</title>
        <script src="http://localhost/PWEB232/PERTEMUAN4/kuis1.js"></script>
        <link rel="stylesheet" href="http://localhost/PWEB232/PERTEMUAN4/kuis1.css">
    </head>

    <body>
        <h2> FORM MENGHITUNG VOLUME </h2>

        <input type="checkbox" id="option1" name="pilihan" onclick="tampil('vbalok')">
        <label for="option1" class="balok"> Volume Balok </label><br><br>

        <input type="checkbox" id="option2" name="pilihan" onclick="tampil('vkubus')">
        <label for="option2" class="kubus"> Volume Kubus </label><br><br>

        <input type="checkbox" id="option3" name="pilihan" onclick="tampil('vtabung')">
        <label for="option3" class="tabung"> Volume Tabung </label><br><br>


        <h2> FORM MENGHIRUNG LUAS PERMUKAAN </h2>

        <input type="checkbox" id="option4" name="pilihan" onclick="tampil('lpbalok')">
        <label for="option4" class="balok"> LP Balok </label><br><br>

        <input type="checkbox" id="option5" name="pilihan" onclick="tampil('lpkubus')">
        <label for="option5" class="kubus"> LP Kubus </label><br><br>

        <input type="checkbox" id="option6" name="pilihan" onclick="tampil('lptabung')">
        <label for="option6" class="tabung"> LP Tabung </label><br><br>

        <!-- Form Volume Balok -->
        <form id ="formVBalok" class="formVBalok" style="display:none;">
            <label for="panjang"> Panjang: </label><br>
            <input type="text" class="panjang"></input><br><br>

            <label for="lebar"> Lebar: </label><br>
            <input type="text" class="lebar"></input><br><br>

            <label for="tinggi"> Tinggi: </label><br>
            <input type="text" class="tinggi"></input><br><br>            

            <button type="button" class="hitung" onclick="volume('vbalok')"> Hitung </button>
            <br><br>
        </form><br>

         <!-- Form Volume Kubus -->
        <form id="formVKubus" class="formVKubus" style="display:none;">
            <label for="sisi" class="balok"> Sisi: </label><br>
            <input type="text" class="sisi"></input><br><br>

            <button type="button" class="hitung" onclick="volume('vkubus')"> Hitung </button>
            <br><br>
        </form><br>

         <!-- Form Volume Tabung -->
         <form id ="formVTabung" class="formVTabung" style="display:none;">
            <label for="jarijari"> Jari-jari: </label><br>
            <input type="text" class="jarijari"></input><br><br>

            <label for="tinggi"> Tinggi: </label><br>
            <input type="text" class="tinggi"></input><br><br>

            <button type="button" class="hitung" onclick="volume('vtabung')"> Hitung </button>
            <br><br>
        </form><br>

        <!-- Form LP Balok -->
        <form id ="formLPBalok" class="formLPBalok" style="display:none;">
            <label for="panjang"> Panjang: </label><br>
            <input type="text" class="panjang"></input><br><br>

            <label for="lebar"> Lebar: </label><br>
            <input type="text" class="lebar"></input><br><br>

            <label for="tinggi"> Tinggi: </label><br>
            <input type="text" class="tinggi"></input><br><br>            

            <button type="button" class="hitung" onclick="luaspermukaan('lpbalok')"> Hitung </button>
            <br><br>
        </form><br>

        <!-- Form LP Kubus -->
        <form id="formLPKubus" class="formLPKubus" style="display:none;">
            <label for="sisi" class="balok"> Sisi: </label><br>
            <input type="text" class="sisi"></input><br><br>

            <button type="button" class="hitung" onclick="luaspermukaan('lpkubus')"> Hitung </button>
            <br><br>
        </form><br>

        <!-- Form LP Tabung -->
        <form id ="formLPTabung" class="formLPTabung" style="display:none;">
            <label for="jarijari"> Jari-jari: </label><br>
            <input type="text" class="jarijari"></input><br><br>

            <label for="tinggi"> Tinggi: </label><br>
            <input type="text" class="tinggi"></input><br><br>

            <button type="button" class="hitung" onclick="luaspermukaan('lptabung')"> Hitung </button>
            <br><br>
        </form><br>

        <div id="hasil"></div>
        
    </body>
</html>