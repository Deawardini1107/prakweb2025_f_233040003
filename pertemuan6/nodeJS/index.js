const hitungTotal = require("./kasir");

const harga = 10000;
const jumlah = 3;

const total = hitungTotal(harga, jumlah);

console.log("Total Belanja: Rp", total);
