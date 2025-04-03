<div class="main-slide">
    <div class="swiper mainSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-content">
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
        <div class="slide-progress">
            <span class="current">1</span>
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
            <span class="total">3</span>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mainSwiper = new Swiper('.mainSwiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,
        // },
        on: {
            init: function() {
                createProgressBar(this);
                updateProgress(this);
            },
            slideChange: function() {
                updateProgress(this);
            }
        }
    });

    function createProgressBar(swiper) {
        const progressBar = document.querySelector('.progress-bar');
        // 실제 슬라이드 수 계산 (loop 모드를 고려하여)
        const totalSlides = document.querySelectorAll('.swiper-slide:not(.swiper-slide-duplicate)').length;

        // 기존 progress-fill 제거
        progressBar.innerHTML = '';

        // 각 슬라이드에 대한 세그먼트 생성
        for (let i = 0; i < totalSlides; i++) {
            const segment = document.createElement('div');
            segment.className = 'progress-segment';
            segment.style.width = `${100/totalSlides}%`;
            segment.style.left = `${(100/totalSlides) * i}%`;
            progressBar.appendChild(segment);
        }
    }

    function updateProgress(swiper) {
        const current = document.querySelector('.current');
        const total = document.querySelector('.total');
        const segments = document.querySelectorAll('.progress-segment');

        // 실제 슬라이드 수 계산
        const totalSlides = document.querySelectorAll('.swiper-slide:not(.swiper-slide-duplicate)').length;

        // 현재 인덱스 계산 (loop 모드를 고려하여)
        let realIndex = swiper.realIndex;

        current.textContent = realIndex + 1;
        total.textContent = totalSlides;

        // 모든 세그먼트 초기화
        segments.forEach((segment, index) => {
            if (index === realIndex) {
                segment.classList.add('active');
            } else {
                segment.classList.remove('active');
            }
        });
    }
});
</script>