<div class="signUp">
    <div class="signUp__container">
        <form id="form--signUp">
            <div class="signUp__header">
                <h2 class="signUp__title">회원가입</h2>
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
            <div class="signUp__content">
                <h3 class="signUp__content-title">약관동의</h3>
                <div class="signUp__content-item">
                    <strong class="signUp__content-item-title">이용약관</strong>
                    <div class="signUp__content-item-text">
                        <? include '../form/include/terms.php' ?>
                    </div>
                </div>
                <div class="signUp__content-item">
                    <strong class="signUp__content-item-title">개인정보보호정책</strong>
                    <div class="signUp__content-item-text">
                        <? include '../form/include/policy.php' ?>
                    </div>
                </div>
                <div class="signUp__content-item">
                    <strong class="signUp__content-item-title">수강확인 문자 발송(ASC) [필수]</strong>
                    <div class="signUp__content-item-text">
                        <? include '../form/include/asc.php' ?>
                    </div>
                </div>
                <div class="ci">
                    <strong class="ci__title">본인인증하기</strong>
                    <div class="ci__content">
                        <div class="btn-group">
                            <button class="btn bd-radius--square size--m cover__all ico ico--phone">휴대폰인증하기</button>
                            <button class="btn bd-radius--square size--m cover__all ico ico--lock">아이핀인증하기</button>
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