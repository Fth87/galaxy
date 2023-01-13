//cek jaringan

console.log("halo");
window.addEventListener("load", () => {
    const statusJaringan = document.querySelector("#jaringan");
    statusJaringan.innerHTML = "";

    const statusOnlineOffline = () => {
        statusJaringan.classList.remove("offline");
        statusJaringan.classList.remove("online");
        const kondisi = navigator.onLine;
        if (!kondisi) {
            statusJaringan.innerHTML =
                "Kamu sedang offline, cek koneksi internet anda";
            statusJaringan.classList.add("offline");
            statusJaringan.style.display = "block";

            return;
        }
        statusJaringan.innerHTML = "kamu online";
        statusJaringan.classList.add("online");

        setTimeout(() => {
            statusJaringan.style.display = "none";
        }, 3000);
    };

    window.addEventListener("online", statusOnlineOffline);
    window.addEventListener("offline", statusOnlineOffline);
});

// Upload Gambar
$("#success")
    .fadeTo(2000, 500)
    .slideUp(500, function () {
        $("#success").slideUp(500);
    });

function readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            var htmlPreview =
                '<img width="200" src="' +
                e.target.result +
                '" />' +
                "<p>" +
                input.files[0].name +
                "</p>";
            var wrapperZone = $(input).parent();
            var previewZone = $(input).parent().parent().find(".preview-zone");
            var boxZone = $(input)
                .parent()
                .parent()
                .find(".preview-zone")
                .find(".box")
                .find(".box-body");

            wrapperZone.removeClass("dragover");
            previewZone.removeClass("hidden");
            boxZone.empty();
            boxZone.append(htmlPreview);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function reset(e) {
    e.wrap("<form>").closest("form").get(0).reset();
    e.unwrap();
}

$(".dropzone").change(function () {
    readFile(this);
});

$(".dropzone-wrapper").on("dragover", function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass("dragover");
});

$(".dropzone-wrapper").on("dragleave", function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).removeClass("dragover");
});

$(".remove-preview").on("click", function () {
    var boxZone = $(this).parents(".preview-zone").find(".box-body");
    var previewZone = $(this).parents(".preview-zone");
    var dropzone = $(this).parents(".form-group").find(".dropzone");
    boxZone.empty();
    previewZone.addClass("hidden");
    reset(dropzone);
});
// Upload Gambar end

(function ($) {
    "use strict";

    // Sticky Menu
    $(window).scroll(function () {
        if ($("header").offset().top > 1) {
            $(".top-header").addClass("hide");
            $(".navigation").addClass("nav-bg");
        } else {
            $(".top-header").removeClass("hide");
            $(".navigation").removeClass("nav-bg");
        }
    });

    // Background-images
    $("[data-background]").each(function () {
        $(this).css({
            "background-image": "url(" + $(this).data("background") + ")",
        });
    });

    //Hero Slider
    $(".hero-slider").slick({
        autoplay: true,
        autoplaySpeed: 7500,
        pauseOnFocus: false,
        pauseOnHover: false,
        infinite: true,
        arrows: true,
        fade: true,
        prevArrow:
            "<button type='button' class='prevArrow'><i class='ti-angle-left'></i></button>",
        nextArrow:
            "<button type='button' class='nextArrow'><i class='ti-angle-right'></i></button>",
        dots: true,
    });
    $(".hero-slider").slickAnimation();

    // venobox popup
    $(document).ready(function () {
        $(".venobox").venobox();
    });

    // mixitup filter
    var containerEl = document.querySelector('[data-ref~="mixitup-container"]');
    var mixer;
    if (containerEl) {
        mixer = mixitup(containerEl, {
            selectors: {
                target: '[data-ref~="mixitup-target"]',
            },
        });
    }

    //  Count Up
    function counter() {
        var oTop;
        if ($(".count").length !== 0) {
            oTop = $(".count").offset().top - window.innerHeight;
        }
        if ($(window).scrollTop() > oTop) {
            $(".count").each(function () {
                var $this = $(this),
                    countTo = $this.attr("data-count");
                $({
                    countNum: $this.text(),
                }).animate(
                    {
                        countNum: countTo,
                    },
                    {
                        duration: 1000,
                        easing: "swing",
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                        },
                    }
                );
            });
        }
    }
    $(window).on("scroll", function () {
        counter();
    });
})(jQuery);
