var slideImages = [
"images/pureology.jpg",
"images/gcs.jpg",
"images/olaplex.jpg"
];

var slideIndex = 0;

function showSlide() {
document.getElementById("slide").src = slideImages[slideIndex];
}

function nextSlide() {
slideIndex++;
if (slideIndex >= slideImages.length) {
slideIndex = 0;
}
showSlide();
}

function prevSlide() {
slideIndex--;
if (slideIndex < 0) {
slideIndex = slideImages.length - 1;
}
showSlide();
}