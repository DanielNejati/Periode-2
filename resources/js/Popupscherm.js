
document.getElementById('openUserNamePopup').addEventListener('click', function() {
    console.log("Popup wordt geopend!");
    document.getElementById('usernamePopup').style.display = 'block';
});

// Sluit het popup-scherm
document.getElementById('closePopup').addEventListener('click', function() {
    console.log("Popup wordt gesloten!");
    document.getElementById('usernamePopup').style.display = 'none';});
