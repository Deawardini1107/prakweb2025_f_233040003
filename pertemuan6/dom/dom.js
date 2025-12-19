const judul = document.getElementById("judul");
const deskripsi = document.getElementById("deskripsi");

const btnUbah = document.getElementById("btnUbah");
const btnToggle = document.getElementById("btnToggle");
const btnSembunyi = document.getElementById("btnSembunyi");

const gambar = document.getElementById("gambar");

// innerHTML
btnUbah.addEventListener("click", function () {
    judul.innerHTML = "DOM Berhasil Dimanipulasi";
});

// classList
btnToggle.addEventListener("click", function () {
    judul.classList.toggle("active");
});

// style
btnSembunyi.addEventListener("click", function () {
    deskripsi.classList.toggle("hidden");
});

// setAttribute
gambar.setAttribute(
    "src",
    "https://picsum.photos/200"
);
