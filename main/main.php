<div class="main">
    <div class="section section--popular">
        <!-- 인기강의 -->
        <div class="section__container">
            <h2 class="section__title">인기강의</h2>
            <div class="section__content">
                <? include '../common/cardLecture.php' ?>
            </div>
        </div>
    </div>
    <!-- 수강후기 -->
    <div class="section section--review">
        <div class="section__container">
            <h2 class="section__title">수강후기</h2>
            <div class="section__content">
                <? include './cardReview.php' ?>
            </div>
        </div>
    </div>

    <!-- 공지사항 -->
    <div class="section section--csCenter">
        <div class="section__container">
            <? include './csCenter.php' ?>
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

        optionBtn.addEventListener('click', () => {
            optionArea.classList.toggle('is-active');
            cartArea.classList.toggle('is-active');
        });
    });
});
</script>