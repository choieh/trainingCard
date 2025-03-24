<div class="main-slide">
    <div class="swiper mainSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-content">
                    <p class="blind">국민내일배움카드는 생애에 걸친 직무 수행 능력 습득·향상을 위해 국민 스스로 직업능력개발훈련을 실시할 수 있도록 훈련비 등을 지원</p>
                    <div class="card-image">
                        <picture>
                            <source srcset="/dist/assets/images/img_mainSlide_01_m.png" media="(max-width: 768px)">
                            <img src="/dist/assets/images/img_mainSlide_01.png" alt="국민내일배움카드">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-content">
                    <p class="blind">국민내일배움카드는 생애에 걸친 직무 수행 능력 습득·향상을 위해 국민 스스로 직업능력개발훈련을 실시할 수 있도록 훈련비 등을 지원</p>
                    <div class="card-image">
                        <picture>
                            <source srcset="/dist/assets/images/img_mainSlide_02_m.png" media="(max-width: 768px)">
                            <img src="/dist/assets/images/img_mainSlide_02.png" alt="국민내일배움카드">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-content">
                    <p class="blind">국민내일배움카드는 생애에 걸친 직무 수행 능력 습득·향상을 위해 국민 스스로 직업능력개발훈련을 실시할 수 있도록 훈련비 등을 지원</p>
                    <div class="card-image">
                        <picture>
                            <source srcset="/dist/assets/images/img_mainSlide_03_m.png" media="(max-width: 768px)">
                            <img src="/dist/assets/images/img_mainSlide_03.png" alt="국민내일배움카드">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // DOM 요소 미리 선택
    const currentElement = document.querySelector('.current');
    const totalElement = document.querySelector('.total');
    const progressFill = document.querySelector('.progress-fill');

    // Swiper 초기화
    const mainSwiper = new Swiper('.mainSwiper', {
        // 기본 설정
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        // 네비게이션
        // navigation: {
        //     nextEl: ".swiper-button-next",
        //     prevEl: ".swiper-button-prev",
        // },

        // 반응형 설정
        breakpoints: {
            768: {
                slidesPerView: 1,
            }
        }
    });
});
</script>