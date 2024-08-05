// Get the modal
var modal = document.getElementById("modal");

// Get the button that opens the modal
var btn = document.getElementById("playBtn");

// Get the <span> element that closes the modal
var span = document.getElementById("closeBtn");

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
    // Reparse the Instagram embed to ensure it loads
    window.instgrm.Embeds.process();
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
