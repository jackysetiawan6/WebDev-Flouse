document.addEventListener('DOMContentLoaded', function() {
    const rating = 4.7;
    const starPercentage = (rating / 5) * 100;
    const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;
    
    document.querySelector('.stars-inner').style.width = starPercentageRounded;
});