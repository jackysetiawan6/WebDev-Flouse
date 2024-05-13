const filterButton = document.querySelector(".left-filter");
const filter = document.querySelector(".filter");
const filterTitle = document.querySelectorAll(".filter-title");
const sliderMin = document.querySelector(".slider-min");
const rangeMin = document.querySelector(".range-min input");
const sliderMax = document.querySelector(".slider-max");
const rangeMax = document.querySelector(".range-max input");
const rangeSelected = document.querySelector(".range-selected");

filterButton.addEventListener("click", () => {
    filter.classList.toggle("active");
});

filterTitle.forEach((title) => {
    title.addEventListener("click", () => {
        title.parentElement.classList.toggle("active");
    });
});

function updateSelectedRangeWithSlider() {
    if (sliderMax.value - sliderMin.value <= 1000000) {
        if (this.classList.contains("slider-min")) {
            sliderMin.value = parseInt(sliderMax.value) - 1000000;
        } else {
            sliderMax.value = parseInt(sliderMin.value) + 1000000;
        }
    }
    let min = sliderMin.value;
    let max = sliderMax.value;
    rangeSelected.style.left = `${(min / 10000000) * 100}%`;
    rangeSelected.style.width = `${((max - min) / 10000000) * 100}%`;
    rangeMin.value = min;
    rangeMax.value = max;
}

sliderMin.addEventListener("input", updateSelectedRangeWithSlider);
sliderMax.addEventListener("input", updateSelectedRangeWithSlider);

function updateSelectedRangeWithInput() {
    let min = rangeMin.value;
    let max = rangeMax.value;
    if (max - min > 1000000) {
        sliderMin.value = min;
        sliderMax.value = max;
        rangeSelected.style.left = `${(min / 10000000) * 100}%`;
        rangeSelected.style.width = `${((max - min) / 10000000) * 100}%`;
    } else if (this.className === "min") {
        rangeMin.value = parseInt(rangeMax.value) - 1000000;
    } else {
        rangeMax.value = parseInt(rangeMin.value) + 1000000;
    }
}

rangeMin.addEventListener("input", updateSelectedRangeWithInput);
rangeMax.addEventListener("input", updateSelectedRangeWithInput);
