<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('_partials.meta')


</head>

<body class="text-gray-dark font-sans m-0 overflow-x-hidden">
    <header class="">
        <div class="hidden md:block">
            @include('_nav.menu')
        </div>
        <div class="block md:hidden">
            @include('_nav.menu-responsive')
        </div>
    </header>
    <main class="overflow-hidden">
        @yield('body')
        <div class="hidden sm:block">
            @include('_partials.before-footer')
        </div>
        <div class="block sm:hidden">
            @include('_partials.before-footer-responsive')
        </div>
    </main>
    <footer class="flex flex-col">
        @include('_partials.footer')
    </footer>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script type="module">
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 20,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1.5,
            spaceBetween: 30,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3.5,
            spaceBetween: 30,
          },

          1920:{
            slidesPerView: 4,
            spaceBetween: 1,
          },
        },
      });

    </script>
    <script type="module">
        var swiper1 = new Swiper(".mySwiper1", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween:5,
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            },
        });

    </script>
    <script>
        var hamburger = document.getElementById('hamburger');
        var dropdown = document.getElementById('dropdown');
        let closeBtn = document.getElementById('close');

        dropdown.style.display = "none";
        hamburger.addEventListener("click", function () {
            if (dropdown.style.display === "none") {
                dropdown.style.display = "block";
            } else {
                dropdown.style.display = "none";
            }
        });

        close.addEventListener('click', function (){
            dropdown.style.display = "none";
        });

    </script>
    <script>
        let defaultImg = document.getElementById('defaultImg');
        let pergola = document.getElementById('pergola');
        let terasa = document.getElementById('terasa');
        let highclass = document.getElementById('highclass');
        let steakhouse = document.getElementById('steakhouse');
        let rustic = document.getElementById('rustic');

        steakhouse.addEventListener('click', () => {
            defaultImg.src = "{{ asset('img/home-restaurant-steakhouse.jpg') }}";
        })

        rustic.addEventListener('click', () => {
            defaultImg.src = "{{ asset('img/home-restaurant-rustic.jpg') }}";
        })

        terasa.addEventListener('click', () => {
            defaultImg.src = "{{ asset('img/home-restaurant-la-terasa.jpg') }}";
        })

        highclass.addEventListener('click', () => {
            defaultImg.src = "{{ asset('img/home-restaurant-high-class.jpg') }}";
        })

        pergola.addEventListener('click', () => {
            defaultImg.src = "{{ asset('img/home-restaurant-rustic.jpg') }}";
        })

    </script>
    <script>
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }

    </script>
</body>

</html>
