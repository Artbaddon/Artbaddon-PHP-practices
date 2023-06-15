<div class="day-night">
    <i class="bx"></i>
</div>
<script>
    const dayNight = document.querySelector('.day-night');

    dayNight.addEventListener('click', () => {
        document.body.classList.contains("dark");
        if (document.body.classList.contains("dark")) {
            localStorage.setItem("theme", "dark");
        } else {
            localStorage.setItem("theme", "light");
        }
        updateIcon();
    })

    function themeMode() {
        if (localStorage.getItem("theme") !== null) {
            if (localStorage.getItem("theme") === "light") {
                document.body.classList.remove("dark");
            } else {
                document.body.classList.add("dark");
            }
        }
        updateIcon();
    }
    themeMode();
    function updateIcon(){
        if (document.body.classList.contains("dark")) {
            dayNight.querySelector("i").classList.add("bxs-sun");
            dayNight.querySelector("i").classList.remove("bxs-moon");
        } else {
            dayNight.querySelector("i").classList.remove("bxs-moon");
            dayNight.querySelector("i").classList.add("bxs-sun");
        }
    }
</script>