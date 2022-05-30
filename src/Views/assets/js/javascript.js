var currentActivePage = "sobreMim";

function changePage(page) {
    $('#'+currentActivePage).hide();
    $('#'+page).show();

    currentActivePage = page;
}