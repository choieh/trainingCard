<div class="signUp">
    <div class="signUp__container signUp__container--terms">
        <div class="signUp__header">
            <h2 class="signUp__title">회원가입</h2>
            <!-- [D] 프로세스 아이콘 : 진행중(is-active), 완료(is-done) 클래스 추가 -->
            <div class="process">
                <div class="process__item is-active">
                    <strong>약관동의<br>본인인증</strong>
                </div>
                <div class="process__item">
                    <strong>정보입력</strong>
                </div>
                <div class="process__item">
                    <strong>가입완료</strong>
                </div>
            </div>
        </div>
        <form id="form--signUp" class="form">
            <div class="signUp__content">
                <div class="agree agree--all">
                    <h3 class="signUp__content-title">약관동의</h3>
                    <div class="checkbox">
                        <input type="checkbox" id="checkbox-0">
                        <label for="checkbox-0">
                            <span class="ico ico--check"></span>
                            모두 동의합니다
                        </label>
                    </div>
                </div>
                <div class="signUp__content-item">
                    <strong class="signUp__content-item-title">이용약관</strong>
                    <div class="signUp__content-item-text">
                        <? include '../form/include/terms.php' ?>
                    </div>
                    <div class="agree">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox-1">
                            <label for="checkbox-1">
                                <span class="ico ico--check"></span>
                                동의합니다
                            </label>
                        </div>
                    </div>
                </div>
                <div class="signUp__content-item">
                    <strong class="signUp__content-item-title">개인정보보호정책</strong>
                    <div class="signUp__content-item-text">
                        <? include '../form/include/policy.php' ?>
                    </div>
                    <div class="agree">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox-2">
                            <label for="checkbox-2">
                                <span class="ico ico--check"></span>
                                동의합니다
                            </label>
                        </div>
                    </div>
                </div>
                <div class="signUp__content-item">
                    <strong class="signUp__content-item-title">수강확인 문자 발송(ASC) [필수]</strong>
                    <div class="signUp__content-item-text">
                        <? include '../form/include/asc.php' ?>
                    </div>
                    <div class="agree">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox-3">
                            <label for="checkbox-3">
                                <span class="ico ico--check"></span>
                                동의합니다
                            </label>
                        </div>
                    </div>
                </div>
                <div class="ci">
                    <strong class="ci__title">본인인증하기</strong>
                    <div class="ci__content">
                        <div class="btn-group">
                            <button
                                class="btn bd-radius--square size--m cover__all ico ico--phone"><span>휴대폰인증하기</span></button>
                            <button
                                class="btn bd-radius--square size--m cover__all ico ico--lock"><span>아이핀인증하기</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signUp__footer">
                <div class="btn-group">
                    <button class="btn bd-radius--circle size--s cover__bg--gray" type="reset">취소</button>
                    <button class="btn bd-radius--circle size--s cover__bg--red" type="submit" name="signUp">회원가입
                        계속하기</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 모든 체크박스 요소 선택
    const allCheckbox = document.getElementById('checkbox-0');
    const otherCheckboxes = document.querySelectorAll('#checkbox-1, #checkbox-2, #checkbox-3');

    // '모두 동의' 체크박스 이벤트
    allCheckbox.addEventListener('change', function() {
        const isChecked = this.checked;
        otherCheckboxes.forEach(checkbox => {
            checkbox.checked = isChecked;
        });
    });

    // 개별 체크박스들의 변경 감지
    otherCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const allChecked = Array.from(otherCheckboxes).every(cb => cb.checked);
            allCheckbox.checked = allChecked;
        });
    });
});
</script>