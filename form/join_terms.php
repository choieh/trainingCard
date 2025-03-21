<div class="layout__container">
    <div class="join">
        <div class="layout__header">
            <h2 class="layout__header--title">회원가입</h2>
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
        <div class="layout__body">
            <div class="terms">
                <form id="form--terms" class="form">
                    <div class="terms__header">
                        <h3 class="terms__header--title">약관동의</h3>
                        <div class="agree agree--all">
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox-0">
                                <label for="checkbox-0">
                                    <span class="ico ico--check"></span>
                                    모두 동의합니다
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="terms__body">
                        <div class="terms__item">
                            <strong class="terms__item--title">이용약관</strong>
                            <div class="terms__item--desc">
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
                        <div class="terms__item">
                            <strong class="terms__item--title">개인정보보호정책</strong>
                            <div class="terms__item--desc">
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
                        <div class="terms__item">
                            <strong class="terms__item--title">수강확인 문자 발송(ASC) [필수]</strong>
                            <div class="terms__item--desc">
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
                    <div class="terms__footer">
                        <div class="btn-group">
                            <button class="btn bd-radius--circle size--s cover__bg--gray" type="reset">취소</button>
                            <button class="btn bd-radius--circle size--s cover__bg--red" type="submit"
                                name="signUp">회원가입
                                계속하기</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>