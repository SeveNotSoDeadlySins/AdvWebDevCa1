// making the stars be gold when you hover over them
const stars = document.querySelectorAll('input[name="rating"]');
const labels = document.querySelectorAll('label[for^="star"]');
stars.forEach((star) => {
    star.addEventListener('change', () => {
        const rating = star.value;
        labels.forEach((label, index) => {
            label.classList.toggle('text-yellow-500', index < rating);
        });
    });
});
