function tampil(type) {
    var formVBalok = document.getElementById('formVBalok');
    var formVKubus = document.getElementById('formVKubus');
    var formVTabung = document.getElementById('formVTabung');
    var formLPBalok = document.getElementById('formLPBalok');
    var formLPKubus = document.getElementById('formLPKubus');
    var formLPTabung = document.getElementById('formLPTabung');
    
    var checkboxes = document.querySelectorAll('input[name="pilihan"]:checked').length;

    // PEMBERITAHUAN JIKA MENCENTANG LEBIH DARI 1 CHECKBOX
    if (checkboxes > 1) {
        alert("JANGAN MENCENTANG LEBIH DARI SATU CHECKBOX, CENTANGLAH HANYA SATU CHECKBOX");
        return;
    }

    if(type === 'vbalok'){
        formVBalok.style.display = 'block';
        formVKubus.style.display = 'none';
        formVTabung.style.display = 'none';
        formLPKubus.style.display = 'none';
        formLPTabung.style.display = 'none';
        formLPBalok.style.display = 'none';
        hasil .innerHTML = " ";
    } else if(type === 'vkubus'){
        formVBalok.style.display = 'none';
        formVKubus.style.display = 'block';
        formVTabung.style.display = 'none';
        formLPKubus.style.display = 'none';
        formLPTabung.style.display = 'none';
        formLPBalok.style.display = 'none';
        hasil .innerHTML = " ";
    } else if(type === 'vtabung'){
        formVBalok.style.display = 'none';
        formVKubus.style.display = 'none';
        formVTabung.style.display = 'block';
        formLPKubus.style.display = 'none';
        formLPTabung.style.display = 'none';
        formLPBalok.style.display = 'none';
        hasil .innerHTML = " ";
    } else if(type === 'lpbalok'){
        formVBalok.style.display = 'none';
        formVKubus.style.display = 'none';
        formVTabung.style.display = 'none';
        formLPBalok.style.display = 'block';
        formLPTabung.style.display = 'none';
        formLPKubus.style.display = 'none';
        hasil .innerHTML = " ";
    } else if(type === 'lpkubus'){
        formVBalok.style.display = 'none';
        formVKubus.style.display = 'none';
        formVTabung.style.display = 'none';
        formLPBalok.style.display = 'none';
        formLPTabung.style.display = 'none';
        formLPKubus.style.display = 'block';
        hasil .innerHTML = " ";
    } else if(type === 'lptabung'){
        formVBalok.style.display = 'none';
        formVKubus.style.display = 'none';
        formVTabung.style.display = 'none';
        formLPBalok.style.display = 'none';
        formLPTabung.style.display = 'block';
        formLPKubus.style.display = 'none';
        hasil .innerHTML = " ";
    }
}

function volume(type){
    var hasil = document.getElementById('hasil');

    if(type === 'vbalok'){
        var panjang = parseFloat(document.querySelector('.formVBalok .panjang').value);
        var lebar = parseFloat(document.querySelector('.formVBalok .lebar').value);
        var tinggi = parseFloat(document.querySelector('.formVBalok .tinggi').value);
        
        var volume = panjang*lebar*tinggi;
        hasil .innerHTML = "Volume Balok = " + volume;
    } else if(type === 'vkubus'){
        var sisi = parseFloat(document.querySelector('.formVKubus .sisi').value);
        
        var volume = sisi*sisi*sisi;
        hasil.innerHTML = "Volume Kubus = " + volume;
    } else if(type === 'vtabung'){
        var jarijari = parseFloat(document.querySelector('.formVTabung .jarijari').value);
        var tinggi = parseFloat(document.querySelector('.formVTabung .tinggi').value);

        var volume = 3.14*jarijari*jarijari*tinggi;
        hasil .innerHTML = "Volume Tabung = " + volume;
    }
}

function luaspermukaan(type){
    var hasil = document.getElementById('hasil');

    if(type === 'lpbalok'){
        var panjang = parseFloat(document.querySelector('.formLPBalok .panjang').value);
        var lebar = parseFloat(document.querySelector('.formLPBalok .lebar').value);
        var tinggi = parseFloat(document.querySelector('.formLPBalok .tinggi').value);

        var luaspermukaan =  2*((panjang*lebar)+(panjang*tinggi)+(lebar*tinggi));
        hasil.innerHTML = "Luas Permukaan Balok = " + luaspermukaan;
    } else if(type === 'lpkubus'){
        var sisi = parseFloat(document.querySelector('.formLPKubus .sisi').value);

        var luaspermukaan =  6*sisi*sisi;
        hasil.innerHTML = "Luas Permukaan Kubus = " + luaspermukaan;
    } else if(type === 'lptabung'){
        var jarijari = parseFloat(document.querySelector('.formLPTabung .jarijari').value);
        var tinggi = parseFloat(document.querySelector('.formLPTabung .tinggi').value);

        var luaspermukaan =  2*3.14*jarijari*(jarijari*tinggi);
        hasil.innerHTML = "Luas Permukaan Tabung = " + luaspermukaan;
    }
}