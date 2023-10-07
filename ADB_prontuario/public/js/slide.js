const content = $(".pagination-content");
const pages = content.children(".page");
const prevBtn = $(".prev-btn");
const nextBtn = $(".next-btn");

const cadastrarBtn = document.getElementById('cadastra_paciente');

document.addEventListener('DOMContentLoaded', function() {
    pages.hide();
    content.children(`.page1`).show();
});

$(document).ready(function() {

    let currentPage = 1;

    function showPage(pageNumber) {
        pages.hide();
        content.children(`.page${pageNumber}`).show();
    }

    function updatePaginationButtons() {
        prevBtn.prop("disabled", currentPage === 1);
        nextBtn.prop("disabled", currentPage === pages.length);
    }

    prevBtn.on("click", function() {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
            updatePaginationButtons();
        }
    });

    nextBtn.on("click", function() {
        if (currentPage < pages.length) {
            currentPage++;
            showPage(currentPage);
            updatePaginationButtons();

        }
    });

    updatePaginationButtons();
});
