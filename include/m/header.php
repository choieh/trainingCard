<div class="m-header">
    <div class="m-nav">
        <div class="fixed-menu">
            <button class="fixed-menu__btn menu"><span class="blind">메뉴 열기</span></button>
        </div>
        <div class="fixed-menu__logo">
            <img src="/dist/assets/images/logo_header.svg" alt="국민내일배움카드">
        </div>
        <div class="fixed-menu__cart">
            <button class="fixed-menu__btn cart"><span class="blind">장바구니</span></button>
        </div>
    </div>
    <div class="m-gnb ㄴ">
        <div class="btn-group">
            <button class="btn btn--close"><span class="blind">메뉴 닫기</span></button>
        </div>
        <div class="link__wrap">
            <a href="" class="link__login">로그인해주세요&gt;</a>
        </div>
        <div class="m-gnb__inner">
            <div class="m-gnb-menu">
                <ul class="m-gnb-menu__list">
                    <li class="m-gnb-menu__item">
                        <a href="/" class="m-gnb-menu__link">수강안내</a>
                    </li>
                    <li class="m-gnb-menu__item">
                        <button type="button" class="m-gnb-menu__link">수강신청</button>
                        <div class="m-gnb-sub">
                            <ul class="m-gnb-sub__list">
                                <li class="m-gnb-sub__item">
                                    <a href="#" class="m-gnb-sub__link">국비지원</a>
                                </li>
                                <li class="m-gnb-sub__item">
                                    <a href="#" class="m-gnb-sub__link">일반</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-gnb-menu__item">
                        <button type="button" class="m-gnb-menu__link">상담</button>
                        <div class="m-gnb-sub">
                            <ul class="m-gnb-sub__list">
                                <li class="m-gnb-sub__item">
                                    <a href="#" class="m-gnb-sub__link">공지사항</a>
                                </li>
                                <li class="m-gnb-sub__item">
                                    <a href="#" class="m-gnb-sub__link">문의하기</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-gnb-menu__item">
                        <a href="/" class="m-gnb-menu__link">자료실</a>
                    </li>
                    <li class="m-gnb-menu__item">
                        <button type="button" class="m-gnb-menu__link">나의강의실</button>
                        <div class="m-gnb-sub">
                            <ul class="m-gnb-sub__list">
                                <li class="m-gnb-sub__item">
                                    <a href="#" class="m-gnb-sub__link">진행중인과정</a>
                                </li>
                                <li class="m-gnb-sub__item">
                                    <a href="#" class="m-gnb-sub__link">학습종료과정</a>
                                </li>
                                <li class="m-gnb-sub__item">
                                    <a href="#" class="m-gnb-sub__link">상담신청내역</a>
                                </li>
                                <li class="m-gnb-sub__item">
                                    <a href="#" class="m-gnb-sub__link">마이페이지</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="m-contact">
                <ul class="m-contact__list">
                    <li class="m-contact__item">
                        <a href="/" class="m-contact__link">문의하기</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
const menuBtn = document.querySelector('.fixed-menu__btn.menu');
const closeBtn = document.querySelector('.btn--close');
const gnb = document.querySelector('.m-gnb');
const menuItems = document.querySelectorAll('.m-gnb-menu__item');
const subItems = document.querySelectorAll('.m-gnb-sub__item');

// 메뉴 열기/닫기
menuBtn.addEventListener('click', () => {
    gnb.classList.add('is-active');
});

closeBtn.addEventListener('click', () => {
    gnb.classList.remove('is-active');
});

// 아코디언 메뉴
menuItems.forEach(item => {
    const link = item.querySelector('.m-gnb-menu__link');
    const subMenu = item.querySelector('.m-gnb-sub');

    if (subMenu) {
        link.addEventListener('click', (e) => {
            e.preventDefault();

            // 다른 열린 메뉴 닫기
            menuItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('is-active');
                }
            });

            item.classList.toggle('is-active');
        });
    }
});

// 서브메뉴 아이템 클릭 이벤트
subItems.forEach(subItem => {
    subItem.addEventListener('click', (e) => {
        // 같은 depth의 다른 서브메뉴 아이템의 is-active 클래스 제거
        const siblings = subItem.parentElement.querySelectorAll('.m-gnb-sub__item');
        siblings.forEach(sibling => {
            sibling.classList.remove('is-active');
        });

        // 클릭한 서브메뉴 아이템에 is-active 클래스 추가
        subItem.classList.add('is-active');
    });
});
</script>