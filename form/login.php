<div class="layout__container layout__container--login">
    <div class="login__header">
        <h2 class="login__title">LogIn</h2>
        <p class="login__desc">아이디와 비밀번호를 입력해주세요</p>
    </div>
    <div class="login__body">
        <!-- [D] 로그인 에러가 있을 경우 : is-error 클래스 추가 -->
        <form id="form--login" class="form is-error">
            <div class="login__item">
                <div class="inputGroup">
                    <label for="input--id" class="blind">아이디</label>
                    <input type="text" id="input--id" class="input">
                </div>
                <div class="inputGroup">
                    <label for="input--pwd" class="blind">비밀번호</label>
                    <input type="password" id="input--pwd" class="input">
                    <!-- [D] 비밀번호 보기 버튼 : 비밀번호 보기 버튼 클릭 시 비밀번호 표시 -->
                    <button type="button" class="btn-pwd-view" aria-label="비밀번호 보기"></button>
                    <!-- [D] 로그인 에러가 있을 경우 : 텍스트 노출 -->
                    <p class="error--text">*아이디 혹은 비밀번호가 올바르지 않습니다</p>
                </div>
            </div>
            <div class="login__item">
                <div class="radio__toggle">
                    <input type="checkbox" id="toggle-switch01" class="toggle__input">
                    <label for="toggle-switch01" class="toggle__label">
                        <span class="ico ico--toggle"></span>
                        <span class="toggle__text">자동로그인</span>
                    </label>
                </div>
            </div>
            <div class="login__item">
                <div class="btn-group">
                    <button class="btn bd-radius--circle size--m cover__bg--red">로그인</button>
                </div>
            </div>
        </form>
    </div>
</div>