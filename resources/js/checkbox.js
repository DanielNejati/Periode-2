// Function to check is only one checkbox is checked within a group of checkboxes
window.checkOnlyOne = function(checkbox) {
    const checkboxes = searchby.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach((cb) => {
        if (cb !== checkbox) {
            cb.checked = false;
        }
    });
}
window.checkOne = function(checkbox) {
    const checkboxes = searchsortby.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach((cb) => {
        if (cb !== checkbox) {
            cb.checked = false;
        }
    });
}
