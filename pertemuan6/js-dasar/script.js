// Variable
let nama = "Dea Wardini";
let umur = 20;

// IF ELSE
if (umur >= 18) {
    console.log(nama + " sudah dewasa");
} else {
    console.log(nama + " belum dewasa");
}

// Function
function volumeKubus(sisi) {
    return sisi * sisi * sisi;
}

console.log("Volume kubus:", volumeKubus(5));

// Array & Object
let penumpang = ["Andi", "Budi"];

let angkot = {
    jurusan: "Cimahi - Bandung",
    supir: "Pak Ujang",
    penumpang: penumpang,
    tambahPenumpang: function (nama) {
        this.penumpang.push(nama);
    }
};

angkot.tambahPenumpang("Siti");
console.log(angkot);
