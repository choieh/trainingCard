<div class="layout__container">
    <div class="lecture-detail">
        <div class="header__top">
            <? include '../common/containerDepth.php' ?>
        </div>
        <div class="layout__header">
            <div class="lecture__thumbnail">
                <div class="thumbnail--lg">
                    <img src="/" alt="新 대기 및 수질 환경(산업)기사(필기) 177강 완성" id="lgImg">
                    <button type="button" class="btn btn--play">
                        <span class="blind">미리보기</span>
                    </button>
                </div>
            </div>
            <div class="lecture__info">
                <h2 class="lecture__info--title">新 대기 및 수질 환경(산업)기사(필기) 177강 완성</h2>
                <!-- [D] 과정 제목 소개 영역 : 사용 할 경우 blind 클래스 삭제-->
                <p class="lecture__info--desc blind">천의 목소리를 가진 SNL크루 정성호와 상큼발랄 매력만점 박하윤 아나운서가 함께하는 직장인 리얼 토크쇼!</p>
                <div class="lecture__cost">
                    <form id="form--lecture-cost" class="form">
                        <dl>
                            <div class="cost__item">
                                <dt class="blind">훈련비</dt>
                                <dd>
                                    <div class="radio">
                                        <input type="radio" id="radio-1" name="radio-group">
                                        <label for="radio-1" class="radio__label">
                                            <span class="ico ico--radio"></span>
                                            <div class="inner__label">
                                                <span class="label">일반훈련생</span>
                                                <span class="price">180,000원</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" id="radio-2" name="radio-group">
                                        <label for="radio-2" class="radio__label">
                                            <span class="ico ico--radio"></span>
                                            <div class="inner__label">
                                                <span class="label">국민취업지원제도I 저소득층/특정계층(국취지2), 고용위기지역, 장애인, 출소예정자 한부모가족
                                                    기초생활수급자, 특별고용지원업종, 차상위 계층 아프간 특별 기여자</span>
                                                <span class="price">180,000원</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" id="radio-3" name="radio-group">
                                        <label for="radio-3" class="radio__label">
                                            <span class="ico ico--radio"></span>
                                            <div class="inner__label">
                                                <span class="label">국민취업지원제도II 국취 2유형 - 청년/중장년</span>
                                                <span class="price">180,000원</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" id="radio-4" name="radio-group">
                                        <label for="radio-4" class="radio__label">
                                            <span class="ico ico--radio"></span>
                                            <div class="inner__label">
                                                <span class="label">근로ㆍ자녀장려금 수급자</span>
                                                <span class="price">180,000원</span>
                                            </div>
                                        </label>
                                    </div>
                                </dd>
                            </div>
                            <div class="cost__item">
                                <dt>학습기간</dt>
                                <dd>
                                    <button aria-haspopup="listbox" aria-controls="li_sort" aria-expanded="false"
                                        class="cost__btn--select">선택</button>
                                    <ul class="cost__list" role="listbox" aria-labelledby="select_lb">
                                        <li class="cost__list--item" id="cost__sort01" role="option"
                                            aria-selected="true" tabindex="0">1개월
                                        </li>
                                        <li class="cost__list--item" id="cost__sort02" role="option"
                                            aria-selected="false" tabindex="0">2개월
                                        </li>
                                        <li class="cost__list--item" id="cost__sort03" role="option"
                                            aria-selected="false" tabindex="0">3개월
                                        </li>
                                    </ul>
                                </dd>
                            </div>
                            <div class="cost__item">
                                <dt>총 훈련비</dt>
                                <dd>415,800원</dd>
                            </div>
                            <div class="cost__item">
                                <dt>정부지원금</dt>
                                <dd>-228,690원</dd>
                            </div>
                            <div class="cost__item">
                                <dt>본인부담액 총 결제금액</dt>
                                <dd>123,200원</dd>
                            </div>
                        </dl>
                        <div class="btn-group">
                            <button type="button"
                                class="btn bd-radius--circle size--s cover__line ico ico--cart"><span>장바구니 담기</span>
                            </button>
                            <button type="button" class="btn bd-radius--circle size--s cover__bg--red">수강신청</button>
                            <button type="button" class="btn bd-radius--circle size--s cover__bg--navy">고용24
                                수강신청하러가기</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="layout__body">
            <div class="intro__header">
                <h2 class="intro__title">과정소개</h2>
            </div>
            <div class="intro__body">
                <div class="intro__item">
                    <h3 class="item__title">과정소개</h3>
                    <div class="item__contents">
                        <pre></pre>
                    </div>
                </div>
                <div class="intro__item">
                    <h3 class="item__title">교육목표</h3>
                    <div class="item__contents">
                        <pre></pre>
                    </div>
                </div>
                <div class="intro__item">
                    <h3 class="item__title">교육대상</h3>
                    <div class="item__contents">
                        <pre></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
/**
 * 커스텀 셀렉트박스 기능 구현
 * 기존 HTML 구조를 활용하여 셀렉트박스 동작 구현
 */
document.addEventListener('DOMContentLoaded', function() {
    // 필요한 DOM 요소 선택
    const selectButton = document.querySelector('.cost__btn--select');
    const selectList = document.querySelector('.cost__list');
    const selectItems = document.querySelectorAll('.cost__list--item');

    // 셀렉트박스 초기 설정
    selectList.style.display = 'none';

    // 셀렉트박스 토글 함수
    function toggleSelect(e) {
        e.preventDefault(); // 기본 동작 방지
        e.stopPropagation(); // 이벤트 전파 중지

        const expanded = selectButton.getAttribute('aria-expanded') === 'true';
        selectButton.setAttribute('aria-expanded', !expanded);

        if (expanded) {
            selectList.style.display = 'none';
        } else {
            selectList.style.display = 'block';
        }
    }

    // 옵션 선택 함수
    function selectOption(item) {
        // 모든 옵션의 선택 상태 초기화
        selectItems.forEach(el => {
            el.setAttribute('aria-selected', 'false');
        });

        // 선택된 옵션 상태 변경
        item.setAttribute('aria-selected', 'true');

        // 버튼 텍스트 업데이트
        selectButton.textContent = item.textContent.trim();

        // 셀렉트박스 닫기
        selectButton.setAttribute('aria-expanded', 'false');
        selectList.style.display = 'none';
    }

    // 이벤트 리스너 등록
    selectButton.addEventListener('click', toggleSelect);

    // 각 옵션 아이템에 이벤트 리스너 등록
    selectItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault(); // 기본 동작 방지 추가
            e.stopPropagation(); // 이벤트 전파 중지
            selectOption(this);
        });

        // 키보드 접근성
        item.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                selectOption(this);
            }
        });
    });

    // 외부 클릭 시 셀렉트박스 닫기
    document.addEventListener('click', function() {
        if (selectButton.getAttribute('aria-expanded') === 'true') {
            selectButton.setAttribute('aria-expanded', 'false');
            selectList.style.display = 'none';
        }
    });

    // 키보드 접근성 - 화살표 키 이동
    selectList.addEventListener('keydown', function(e) {
        const focusedItem = document.activeElement;
        const items = Array.from(selectItems);
        const currentIndex = items.indexOf(focusedItem);

        if (e.key === 'ArrowDown') {
            e.preventDefault();
            const nextIndex = (currentIndex + 1) % items.length;
            items[nextIndex].focus();
        } else if (e.key === 'ArrowUp') {
            e.preventDefault();
            const prevIndex = (currentIndex - 1 + items.length) % items.length;
            items[prevIndex].focus();
        } else if (e.key === 'Escape') {
            e.preventDefault();
            selectButton.setAttribute('aria-expanded', 'false');
            selectList.style.display = 'none';
            selectButton.focus();
        }
    });

    // 초기 선택값 설정 (첫 번째 옵션 또는 aria-selected="true"인 옵션)
    const selectedItem = document.querySelector('.cost__list--item[aria-selected="true"]') || selectItems[0];
    if (selectedItem) {
        selectButton.textContent = selectedItem.textContent.trim();
    }

    // 폼 제출 방지 (추가)
    const form = document.getElementById('form--lecture-cost');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
        });
    }
});
</script>