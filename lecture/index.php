<div class="lecture">
    <div class="layout__header">
        <? include '../common/containerDepth.php' ?>
        <h2 class="layout__header--title">일반강좌</h2>
    </div>
    <div class="layout__body">
        <div class="search__bar">
            <div class="form__wrap">
                <form id="search__form" name="search" role="search">
                    <legend class="blind">검색 영역</legend>
                    <div class="search__input--box">
                        <input id="search" name="search" type="search" title="검색어를 입력하세요" placeholder="검색어를 입력하세요"
                            maxlength="255" autocomplete="off" class="search__input">
                    </div>
                    <div class="btn-group">
                        <button class="btn bd-radius--circle size--s cover__bg--red pc-only">검색</button>
                        <button class="btn btn--search mobile-only"><span class="blind">검색</span></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="sorting">
            <div class="sorting__menu">
                <button type="button" class="btn btn--recommend">추천순</button>
                <button type="button" class="btn btn--new">최신순</button>
                <button type="button" class="btn btn--title">제목순</button>
            </div>
        </div>
        <div class="layout__contents">
            <? include '../common/cardLecture.php' ?>
            <? include '../common/cardLecture.php' ?>
            <? include '../common/cardLecture.php' ?>
            <? include '../common/cardLecture.php' ?>
            <? include '../common/cardLecture.php' ?>
            <? include '../common/cardLecture.php' ?>
            <? include '../common/cardLecture.php' ?>
            <? include '../common/cardLecture.php' ?>
        </div>
        <? include '../common/pagination.php' ?>
    </div>
</div>