import "./bootstrap";
import Alpine from "alpinejs";
import AOS from "aos";
import "aos/dist/aos.css";
import swal from "sweetalert2/dist/sweetalert2";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", () => {
    const isMobile = window.matchMedia("(max-width: 767px)").matches;

    if (isMobile) {
        document.body.classList.add("is-mobile");
    } else {
        document.body.classList.remove("is-mobile");
    }

    const darkModeToggle = document.getElementById("dark-mode-toggle");
    const currentMode = localStorage.getItem("darkMode");

    if (currentMode === "true") {
        document.body.classList.add("dark");
        darkModeToggle.setAttribute("aria-checked", "true");
    } else {
        document.body.classList.remove("dark");
        darkModeToggle.setAttribute("aria-checked", "false");
    }

    darkModeToggle.addEventListener("click", () => {
        document.body.classList.toggle("dark");

        if (document.body.classList.contains("dark")) {
            localStorage.setItem("darkMode", "true");
            darkModeToggle.setAttribute("aria-checked", "true");
        } else {
            localStorage.setItem("darkMode", "false");
            darkModeToggle.setAttribute("aria-checked", "false");
        }
    });

    const flashDataDiv = document.getElementById("flash-data");
    if (flashDataDiv) {
        const flashData = flashDataDiv.dataset.flashdata;
        const alertType = flashDataDiv.dataset.alerttype;
        const alertWidth = "100px";
        if (flashData) {
            const swalOptions = {
                text: flashData,
                customClass: {
                    popup: "custom-alert-popup", // Menambahkan kelas khusus
                },
            };
            if (!alertType) {
                swalOptions.title = "Berhasil";
                swalOptions.type = "success";
            } else {
                swalOptions.title = alertType;
                swalOptions.type = alertType;
            }

            swal(swalOptions);
        }
        const customStyles = document.createElement("style");
        customStyles.innerHTML = `.custom-alert-popup { width: ${alertWidth};}`;
        document.head.appendChild(customStyles);
    }
    AOS.init();
});

$(document).ready(function () {
    $("#tabel-data").DataTable();
});
