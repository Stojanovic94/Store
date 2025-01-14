// Modal kontrola
const modal = document.getElementById("productModal");
const openModalBtn = document.getElementById("addProductBtn");
const closeModalBtn = document.querySelector(".close-btn");
const productForm = document.getElementById("productForm");

// Otvaranje modala
openModalBtn.addEventListener("click", () => {
    modal.style.display = "flex";
});

// Zatvaranje modala
closeModalBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

// Dodavanje proizvoda
productForm.addEventListener("submit", (e) => {
    e.preventDefault(); // Sprečava podrazumevano ponašanje
    const naziv = document.getElementById("naziv").value;
    const kategorija = document.getElementById("kategorija").value;
    const cena = document.getElementById("cena").value;

    fetch("add_product.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `naziv=${naziv}&kategorija=${kategorija}&cena=${cena}`,
    })
    .then((response) => response.text())
    .then((data) => {
        alert(data); // Prikazuje poruku iz `add_product.php`
        modal.style.display = "none"; // Zatvara modal
        location.reload(); // Osvežava stranicu
    });
});
