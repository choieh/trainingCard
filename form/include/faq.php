<div class="faq">
    <div class="category">
        <h4 class="category__title">자주하는 질문을 확인해보세요.</h4>
        <ul class="category__list"></ul>
    </div>
    <ul class="faq__list">
        <!-- [D] 클릭 시 is-active 클래스 추가 -->
        <li class="faq__item is-active">
            <div class="faq__title">
                <button type="button" class="faq__title-btn">
                    <strong>[결제/환불]</strong>1환불방법을 알려주세요
                </button>
            </div>
            <div class="faq__content">
                <pre>
1메인에 들어가서 하시면 됩니다.
어렵지 않아요 걱정마세요
                </pre>
            </div>
        </li>
        <li class="faq__item">
            <div class="faq__title">
                <button type="button" class="faq__title-btn">
                    <strong>[결제/환불]</strong>2환불방법을 알려주세요
                </button>
            </div>
            <div class="faq__content">
                <pre>
2메인에 들어가서 하시면 됩니다.
어렵지 않아요 걱정마세요
                </pre>
            </div>
        </li>
    </ul>
</div>

<script>
window.addEventListener('DOMContentLoaded', function() {
    let faqList = ['Top 10', '결제/환불', '회원가입', '학습', '평가', '과제', '회원탈퇴', '배송', '기타'];
    const faqListArea = document.querySelector('.category__list');
    const faqItems = document.querySelectorAll('.faq__item');
    const faqTitles = document.querySelectorAll('.faq__title');

    // 카테고리 리스트 생성
    faqList.forEach(function(item) {
        const categoryItem = document.createElement('li');
        const categoryLink = document.createElement('a');

        categoryItem.classList.add('category__item');
        categoryLink.classList.add('category__link');

        categoryItem.appendChild(categoryLink);

        categoryLink.textContent = item;
        categoryLink.href = '#';
        categoryItem.appendChild(categoryLink);
        faqListArea.appendChild(categoryItem);

        categoryItem.addEventListener('click', function(e) {
            e.preventDefault();

            // 모든 카테고리 항목에서 is-active 클래스 제거
            document.querySelectorAll('.category__item').forEach(function(el) {
                el.classList.remove('is-active');
            });

            // 현재 클릭한 항목에만 is-active 클래스 추가
            categoryItem.classList.add('is-active');

            // 카테고리 필터링
            filterFaqItems(item);
        });
    });

    // 아코디언 기능 구현
    faqTitles.forEach(function(title) {
        title.addEventListener('click', function() {
            const parentItem = this.parentElement;

            // 이미 열려있는 항목을 클릭한 경우 닫기
            if (parentItem.classList.contains('is-active')) {
                parentItem.classList.remove('is-active');
            } else {
                // 다른 항목이 열려있으면 모두 닫기
                faqItems.forEach(function(item) {
                    item.classList.remove('is-active');
                });

                // 현재 클릭한 항목 열기
                parentItem.classList.add('is-active');
            }
        });
    });

    // 카테고리별 필터링 함수
    function filterFaqItems(category) {
        faqItems.forEach(function(item) {
            const titleText = item.querySelector('.faq__title').textContent;

            if (category === 'Top 10') {
                // Top 10은 모든 항목 표시
                item.style.display = '';
            } else if (titleText.includes('[' + category + ']')) {
                // 해당 카테고리 항목만 표시
                item.style.display = '';
            } else {
                // 다른 카테고리 항목은 숨김
                item.style.display = 'none';
            }
        });
    }

    // 첫 번째 카테고리 항목 활성화 (초기 상태)
    document.querySelector('.category__item').classList.add('is-active');
});
</script>