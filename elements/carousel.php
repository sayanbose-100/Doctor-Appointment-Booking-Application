<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/carousel.css">
</head>

<body>
    <div class="carousel">

        <!--Carousel Items-->
        <div class="carousel__item carousel__item--visible">
            <img src="static/images/1.jpg" alt="">
        </div>
        <div class="carousel__item">
            <img src="static/images/2.jpg" alt="">
        </div>
        <!-- <div class="carousel__item">
            <img src="static/images/3.jpg" alt="">
        </div> -->

        <!--Carousel Action Buttons-->
        <div class="carousel__actions">
            <button id="carousel__button--prev" aria-label="Previous slide">
                <p>&#8249;</p>
            </button>
            <button id="carousel__button--next" aria-label="Next slide">
                <p>&#8250;</p>
            </button>
        </div>

    </div>

    <script>
        let slidePosition = 0;
        const slides = document.getElementsByClassName('carousel__item');
        const totalSlides = slides.length;

        document.
            getElementById('carousel__button--next')
            .addEventListener("click", function () {
                moveToNextSlide();
            });
        document.
            getElementById('carousel__button--prev')
            .addEventListener("click", function () {
                moveToPrevSlide();
            });

        function updateSlidePosition() {
            for (let slide of slides) {
                slide.classList.remove('carousel__item--visible');
                slide.classList.add('carousel__item--hidden');
            }

            slides[slidePosition].classList.add('carousel__item--visible');
        }

        function moveToNextSlide() {
            if (slidePosition === totalSlides - 1) {
                slidePosition = 0;
            } else {
                slidePosition++;
            }

            updateSlidePosition();
        }

        function moveToPrevSlide() {
            if (slidePosition === 0) {
                slidePosition = totalSlides - 1;
            } else {
                slidePosition--;
            }

            updateSlidePosition();
        }
    </script>
</body>

</html>