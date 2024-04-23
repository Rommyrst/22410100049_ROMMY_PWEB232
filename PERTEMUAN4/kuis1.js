function tampil(type) {
    var formBalok = document.getElementById('formBalok');
    var formKubus = document.getElementById('formKubus');
    var formTabung = document.getElementById('formTabung');

    if(type === 'balok'){
        formBalok.style.display = 'block';
        formKubus.style.display = 'none';
        formTabung.style.display = 'none';
    } else if(type === 'kubus'){
        formKubus.style.display = 'block';
        formBalok.style.display = 'none';
        formTabung.style.display = 'none';
    } else if(type === 'tabung'){
        formKubus.style.display = 'none';
        formBalok.style.display = 'none';
        formTabung.style.display = 'block';
    }c
}

function volume(type){
    var hasil = document.getElementById('hasil');

    if(type === 'balok'){
        var panjang = parseFloat(document.querySelector('.formBalok .panjang').value);
        var lebar = parseFloat(document.querySelector('.formBalok .lebar').value);
        var tinggi = parseFloat(document.querySelector('.formBalok .tinggi').value);

        var volume = panjang*lebar*tinggi;
        hasil .innerHTML = "Volume Balok = " + volume;

    } else if(type === 'kubus'){
        var sisi = parseFloat(document.querySelector('.formKubus .sisi').value);
        
        var volume = sisi*sisi*sisi;
        hasil.innerHTML = "Volume Kubus = " + volume;

    }  else if(type === 'tabung'){
        var jari = parseFloat(document.querySelector('.formTabung .jari').value);
        var tinggi = parseFloat(document.querySelector('.formTabung .tinggi').value);

        var volume = 3.14*jari*jari*tinggi;
        hasil.innerHTML = "Volume Tabung = " + volume;
    }
}

function luaspermukaan(type){
    var hasil = document.getElementById('hasil');

    if(type === 'balok'){
        var panjang = parseFloat(document.querySelector('.formBaloklp .panjang').value);
        var lebar = parseFloat(document.querySelector('.formBaloklp .lebar').value);
        var tinggi = parseFloat(document.querySelector('.formBaloklp .tinggi').value);

        var luaspermukaan = 2*(panjang*lebar)+(panjang*tinggi)+(lebar*tinggi);
        hasil .innerHTML = "Luas Permukaan Balok = " + luaspermukaan;

    } else if(type === 'kubus'){
        var sisi = parseFloat(document.querySelector('.formKubuslp .sisi').value);
        
        var luaspermukaan = 6*sisi*sisi;
        hasil.innerHTML = "Luas Permukaan Kubus = " + luaspermukaan;

    }  else if(type === 'tabung'){
        var jari = parseFloat(document.querySelector('.formTabunglp .jari').value);
        var tinggi = parseFloat(document.querySelector('.formTabunglp .tinggi').value);

        var luaspermukaan = 2*3.14*jari*jari + 2*3.14*jari*tinggi;
        hasil.innerHTML = "Luas Permukaan Tabung = " + luaspermukaan;
    }
}