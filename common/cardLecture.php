<div class="card">
    <div class="card__thumbnail">
        <img src="" alt="">
    </div>
    <div class="card__content">
        <div class="card__tag">
            <span class="tag__item">사업주환급</span>
        </div>
        <h3 class="card__title">[모두의 TALK] 정성호의 리얼 법정교육토크쇼 직장내 성희롱 예방교육</h3>
        <div class="card__detail">
            <span>학습기간: 20시간</span>
            <span>총차시: 19차시</span>
        </div>
        <div class="card__info">
            <div class="info__wrap">
                <strong class="info__title">총 교육비</strong>
                <span class="info__price">64,564,135원</span>
            </div>
            <div class="info__wrap">
                <strong class="info__title">자부담금</strong>
                <dl>
                    <div class="info__item">
                        <dt class="info__item--title">내일배움카드 일반</dt>
                        <dd class="info__item--price">104,700원</dd>
                    </div>
                    <div class="info__item">
                        <dt class="info__item--title">국민취업지원I</dt>
                        <dd class="info__item--price">0원</dd>
                    </div>
                    <div class="info__item">
                        <dt class="info__item--title">국민취업지원II</dt>
                        <dd class="info__item--price">52,230원</dd>
                    </div>
                    <div class="info__item">
                        <dt class="info__item--title">근로장학급수급자</dt>
                        <dd class="info__item--price">104,700원</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    <div class="card__option">
        <div class="btn__group">
            <button class="btn btn--up"><span class="blind">버튼 보이기</span></button>
        </div>
        <div class="card__option--cart">
            <div class="btn__group">
                <button class="btn btn--cart">장바구니담기</button>
                <button class="btn btn--register">수강신청하기</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 카드 옵션 버튼 클릭 이벤트 처리
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        const optionBtn = card.querySelector('.btn--up');
        const optionArea = card.querySelector('.card__option');
        const cartArea = card.querySelector('.card__option--cart');

        // 이벤트 리스너 개선
        if (optionBtn) {
            optionBtn.addEventListener('click', function(e) {
                e.preventDefault(); // 기본 동작 방지
                e.stopPropagation(); // 이벤트 버블링 방지

                if (optionArea) optionArea.classList.toggle('is-active');
                if (cartArea) cartArea.classList.toggle('is-active');

                return false; // 이벤트 전파 중지
            });
        }
    });
});
</script>