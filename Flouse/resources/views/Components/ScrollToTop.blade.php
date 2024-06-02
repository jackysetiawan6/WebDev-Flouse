<style>
    .scroll-circle {
        position: fixed;
        bottom: 50px;
        right: 5vw;
        z-index: 9999;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: var(--green-color);
        filter: drop-shadow(0 2px 4px var(--green-color));
        display: grid;
        place-items: center;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        visibility: hidden;
        opacity: 0;
    }
    .scroll-circle.show {
        visibility: visible;
        opacity: 1;
    }
    .scroll-circle:hover {
        background-color: var(--green-color);
        filter: brightness(1.2) drop-shadow(0 2px 4px var(--green-color));
    }
    .scroll-circle i {
        color: #ffffff;
        font-size: 30px;
    }
</style>
<div class="scroll-circle">
    <i class="bi bi-chevron-up"></i>
</div>
<script>
    const scrollCircle = document.querySelector(".scroll-circle");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            scrollCircle.classList.add("show");
        } else {
            scrollCircle.classList.remove("show");
        }
    });
    scrollCircle.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
</script>