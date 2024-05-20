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

function updateDifference(currentElement, firstElement, secondElement) {
    if (firstElement.value - secondElement.value < 500000) {
        if (currentElement === secondElement) {
            secondElement.value = parseInt(firstElement.value) - 500000;
        } else {
            firstElement.value = parseInt(secondElement.value) + 500000;
        }
    }
}

function updateSelectedRange(minRange, maxRange) {
    rangeSelected.style.left = `${(minRange / 5000000) * 100}%`;
    rangeSelected.style.width = `${((maxRange - minRange) / 5000000) * 100}%`;
}

function updateWithSlider() {
    updateDifference(this, sliderMax, sliderMin);
    let min = sliderMin.value;
    let max = sliderMax.value;
    rangeMin.value = min;
    rangeMax.value = max;
    updateSelectedRange(min, max);
}

function updateWithInput() {
    if (this.value === "" || this.value < 0) {
        this.value = 0;
    } else if (this.value > 5000000) {
        this.value = 5000000;
    }
    this.value = parseInt(this.value);
    updateDifference(this, rangeMax, rangeMin);
    let min = rangeMin.value;
    let max = rangeMax.value;
    sliderMin.value = min;
    sliderMax.value = max;
    updateSelectedRange(min, max);
}

sliderMin.addEventListener("input", updateWithSlider);
sliderMax.addEventListener("input", updateWithSlider);
rangeMin.addEventListener("input", updateWithInput);
rangeMax.addEventListener("input", updateWithInput);
