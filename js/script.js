const modal = document.getElementById("productModal");
const openModalBtn = document.getElementById("addProductBtn");
const closeModalBtn = document.querySelector(".close-btn");
const productForm = document.getElementById("productForm");

openModalBtn.addEventListener("click", () => {
    modal.style.display = "flex";
});

closeModalBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

productForm.addEventListener("submit", (e) => {
    e.preventDefault();
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
        alert(data);
        modal.style.display = "none";
        location.reload();
    });
});
