<div class="layout__container">
    <div class="cart">
        <div class="layout__header">
            <div class="header__top">
                <? include '../common/containerDepth.php' ?>
                <h2 class="layout__header--title">장바구니</h2>
            </div>
        </div>
        <div class="layout__body">
            <div class="table">
                <div class="table__header">
                    <div class="table__th table__checkbox">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox-all">
                            <label for="checkbox-all">
                                <span class="ico ico--check"></span>
                                전체선택하기
                            </label>
                        </div>
                    </div>
                    <div class="table__th">
                        <span>강의</span>
                    </div>
                    <div class="table__th">
                        <span>수강기간</span>
                    </div>
                    <div class="table__th">
                        <span>금액</span>
                    </div>
                    <div class="table__th">
                        <button class="btn bd-radius--circle size--s cover__line--navy">선택삭제</button>
                    </div>
                </div>
                <ul class="table__body">
                    <li class="table__tr">
                        <div class="table__td table__checkbox">
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox-1">
                                <label for="checkbox-1">
                                    <span class="ico ico--check"></span>
                                </label>
                            </div>
                            <div class="img__wrap">
                                <img src="/dist/assets/images/img_edu01_1.png"
                                    alt="[모두의 TALK] 정성호의 리얼 법정교육토크쇼 직장내 성희롱 예방교육">
                            </div>
                        </div>
                        <div class="table__td">
                            <p><span class="table__td--title">[모두의 TALK] 정성호의 리얼 법정교육토크쇼</span> 직장내 성희롱 예방교육</p>
                        </div>
                        <div class="table__td">
                            <p>2024.10.15 ~ 2024.12.15</p>
                        </div>
                        <div class="table__td">
                            <p>123,200원</p>
                        </div>
                        <div class="table__td">
                            <button type="button" class="btn btn--delete" title="삭제"></button>
                        </div>
                    </li>
                </ul>
                <? include '../common/pagination.php' ?>
            </div>
            <div class="payment">
                <h3 class="payment__title">총 결제금액</h3>
                <dl class="payment__contents">
                    <div class="payment__item">
                        <dt>금액</dt>
                        <dd>246,400원</dd>
                    </div>
                    <div class="payment__item">
                        <dt>할인금액</dt>
                        <dd>0원</dd>
                    </div>
                    <div class="payment__item">
                        <dt>총결제금액</dt>
                        <dd>246,400원</dd>
                    </div>
                </dl>
                <a href="javascript:void(0)" class="btn bd-radius--circle size--m cover__bg--red">결제하기</a>
            </div>
        </div>
    </div>
</div>