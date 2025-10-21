import './bootstrap';

// Navbar Fixed

window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

function toggleContent(postId) {
    const content = document.getElementById("content" + postId);
    const fullContent = document.getElementById("full-content" + postId);

    if (fullContent.style.display === "none") {
        fullContent.style.display = "block";
        content.style.display = "none";
    } else {
        fullContent.style.display = "none";
        content.style.display = "block";
    }
}

// JavaScript untuk mengontrol dropdown Produk
const produkDropdownBtn = document.getElementById("produk-dropdown-btn"); // <-- ID sudah benar
const produkDropdownMenu = document.getElementById("produk-dropdown-menu");
const produkDropdownIcon = produkDropdownBtn
    ? produkDropdownBtn.querySelector("svg")
    : null; // <-- Periksa null sebelum querySelector

// Pastikan elemen ditemukan sebelum menambahkan event listener
if (produkDropdownBtn && produkDropdownMenu && produkDropdownIcon) {
    // Fungsi untuk toggle dropdown
    function toggleDropdown() {
        produkDropdownMenu.classList.toggle("hidden");
        produkDropdownIcon.classList.toggle("rotate-180"); // Rotasi ikon panah
    }

    // Event listener untuk klik pada tombol Produk
    produkDropdownBtn.addEventListener("click", function (event) {
        event.preventDefault(); // Mencegah link Produk default
        toggleDropdown();
    });

    // Tutup dropdown jika klik di luar area dropdown
    document.addEventListener("click", function (event) {
        if (
            !produkDropdownBtn.contains(event.target) &&
            !produkDropdownMenu.contains(event.target)
        ) {
            if (!produkDropdownMenu.classList.contains("hidden")) {
                toggleDropdown();
            }
        }
    });
} else {
    console.warn(
        "Salah satu elemen dropdown tidak ditemukan. Pastikan ID HTML sudah benar."
    );
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    } else {
      entry.target.classList.remove('show'); // optional: hilangkan saat scroll ke atas
    }
  });
}, { threshold: 0.1 }); // 10% terlihat

// pilih semua elemen yang mau dianimasi
document.querySelectorAll('.header').forEach(el => observer.observe(el));