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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 체크박스 요소들 가져오기
    const checkboxAll = document.getElementById('checkbox-all');
    const individualCheckboxes = document.querySelectorAll('.table__body .checkbox input[type="checkbox"]');
    const deleteSelectedBtn = document.querySelector('.table__th .btn');

    // 전체선택 체크박스 이벤트 리스너
    checkboxAll.addEventListener('change', function() {
        const isChecked = this.checked;

        // 모든 개별 체크박스 상태 변경
        individualCheckboxes.forEach(checkbox => {
            checkbox.checked = isChecked;
        });
    });

    // 개별 체크박스 이벤트 리스너
    individualCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // 모든 체크박스가 선택되었는지 확인
            const allChecked = Array.from(individualCheckboxes).every(cb => cb.checked);

            // 전체선택 체크박스 상태 업데이트
            checkboxAll.checked = allChecked;
        });
    });

    // 선택삭제 버튼 이벤트 리스너
    deleteSelectedBtn.addEventListener('click', function() {
        // 선택된 체크박스 찾기
        const selectedItems = document.querySelectorAll(
            '.table__body .checkbox input[type="checkbox"]:checked');

        if (selectedItems.length === 0) {
            alert('삭제할 상품을 선택해주세요.');
            return;
        }

        if (confirm('선택한 상품을 장바구니에서 삭제하시겠습니까?')) {
            // 선택된 항목들의 부모 요소(tr) 삭제
            selectedItems.forEach(item => {
                const tableRow = item.closest('.table__tr');
                if (tableRow) {
                    tableRow.remove();
                }
            });

            // 전체선택 체크박스 해제
            checkboxAll.checked = false;

            // 결제금액 업데이트 함수 호출 (구현 필요)
            updateTotalPrice();
        }
    });

    // 개별 삭제 버튼 이벤트 리스너
    const individualDeleteBtns = document.querySelectorAll('.btn--delete');
    individualDeleteBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            if (confirm('해당 상품을 장바구니에서 삭제하시겠습니까?')) {
                const tableRow = this.closest('.table__tr');
                if (tableRow) {
                    tableRow.remove();

                    // 체크박스 상태 업데이트
                    updateCheckboxAll();

                    // 결제금액 업데이트 함수 호출
                    updateTotalPrice();
                }
            }
        });
    });

    // 전체선택 체크박스 상태 업데이트 함수
    function updateCheckboxAll() {
        const remainingCheckboxes = document.querySelectorAll('.table__body .checkbox input[type="checkbox"]');
        if (remainingCheckboxes.length === 0) {
            checkboxAll.checked = false;
        } else {
            const allChecked = Array.from(remainingCheckboxes).every(cb => cb.checked);
            checkboxAll.checked = allChecked;
        }
    }

    // 결제금액 업데이트 함수 (실제 구현 필요)
    function updateTotalPrice() {
        // 여기에 결제금액 계산 및 업데이트 로직 구현
        console.log('결제금액이 업데이트되었습니다.');
    }
});
</script>