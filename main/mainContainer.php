<div class="layout__container layout__container--main">
    <div class="section section--slide">
        <div class="section__container">
            <div class="section__content">
                <? include './mainSlide.php' ?>
            </div>
        </div>
    </div>
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