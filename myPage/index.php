<div class="layout__container">
    <div class="myPage">
        <div class="layout__header">
            <div class="header__top">
                <? include '../common/containerDepth.php' ?>
                <h2 class="layout__header--title">마이페이지</h2>
            </div>
        </div>
        <div class="layout__body">
            <? include 'include/lnb.php' ?>
            <div class="userInfo">
                <div class="btn-group">
                    <button type="button" class="btn btn--drop">회원탈퇴</button>
                </div>
                <form id="form--userInfo" class="form">
                    <div class="userInfo__header blind">
                        <h3 class="userInfo__header--title blind">정보입력</h3>
                    </div>
                    <div class="userInfo__body">
                        <div class="userInfo__item">
                            <!-- [D] inputGroup 입력 불가능 : is-disabled 클래스 추가 및 input에 disabled 속성 추가 -->
                            <div class="inputGroup is-disabled">
                                <label for="input--userId">아이디</label>
                                <div class="input-box">
                                    <input type="text" id="input--userId" class="input" placeholder="아이디"
                                        value="00004569" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="userInfo__item">
                            <!-- [D] inputGroup 입력 불가능 : is-disabled 클래스 추가 및 input에 disabled 속성 추가 -->
                            <div class="inputGroup is-disabled">
                                <label for="input--userName">이름</label>
                                <div class="input-box">
                                    <input type="text" id="input--userName" class="input" placeholder="이름" value="이지수"
                                        disabled>
                                </div>
                            </div>
                        </div>
                        <div class="userInfo__item">
                            <div class="inputGroup">
                                <label for="input--birth">생년월일</label>
                                <div class="input-wrap">
                                    <input type="number" id="input--birth" class="input" placeholder="YYMMDD"
                                        maxlength="6" value="241002">
                                    <span class="sub sub__text">(ex:241002)</span>
                                </div>
                            </div>
                        </div>
                        <div class="userInfo__item">
                            <div class="inputGroup">
                                <label for="input--phone">휴대전화</label>
                                <div id="input--phone">
                                    <input type="number" id="input--phone-01" class="input" value="010">
                                    <span class="dash">-</span>
                                    <input type="number" id="input--phone-02" class="input" value="1234">
                                    <span class="dash">-</span>
                                    <input type="number" id="input--phone-03" class="input" value="4567">
                                </div>
                            </div>
                        </div>
                        <div class="userInfo__item">
                            <div class="inputGroup">
                                <label for="input--email">이메일</label>
                                <input type="text" id="input--email" class="input" placeholder="이메일"
                                    value="wsadfasfg@gmail.com">
                            </div>
                        </div>
                        <div class="userInfo__item">
                            <div class="inputGroup">
                                <label for="input--address">주소</label>
                                <div id="input--address">
                                    <div class="btn-group">
                                        <input type="text" id="input--address-01" class="input" value="07025">
                                        <button class="btn bd-radius--circle size--s cover__bg--navy" type="button">우편번호
                                            찾기</button>
                                    </div>
                                    <input type="text" id="input--address-02" class="input" value="서울특별시 동작구 동작대로 13">
                                    <input type="text" id="input--address-03" class="input" value="8층">
                                </div>
                            </div>
                        </div>
                        <div class="userInfo__item">
                            <div class="inputGroup">
                                <label for="input--pwd">비밀번호변경</label>
                                <div id="input--pwd">
                                    <input type="password" id="input--pwd-01" class="input" placeholder="비밀번호" value="">
                                    <input type="password" id="input--pwd-02" class="input" placeholder="비밀번호 재확인"
                                        value="">
                                </div>
                            </div>
                        </div>
                        <div class="userInfo__item">
                            <label for="marketing-info01" class="input--radio-toggle">정보수신</label>
                            <div id="marketing-info01" class="radio__toggle-wrap">
                                <!-- [D] 체크박스 체크 상태 : checked 속성 추가 -->
                                <div class="radio__toggle">
                                    <input type="checkbox" id="toggle-switch01" class="toggle__input" checked>
                                    <label for="toggle-switch01" class="toggle__label">
                                        <span class="ico ico--toggle"></span>
                                        <span class="toggle__text">email</span>
                                    </label>
                                </div>
                                <!-- [D] 체크박스 체크 상태 : checked 속성 추가 -->
                                <div class="radio__toggle">
                                    <input type="checkbox" id="toggle-switch02" class="toggle__input" checked>
                                    <label for="toggle-switch02" class="toggle__label">
                                        <span class="ico ico--toggle"></span>
                                        <span class="toggle__text">SMS</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="userInfo__item">
                            <label for="marketing-info02" class="input--radio-toggle">마케팅수신동의</label>
                            <div id="marketing-info02" class="radio__toggle-wrap">
                                <!-- [D] 체크박스 체크 상태 : checked 속성 추가 -->
                                <div class="radio__toggle">
                                    <input type="checkbox" id="toggle-switch03" class="toggle__input" checked>
                                    <label for="toggle-switch03" class="toggle__label">
                                        <span class="ico ico--toggle"></span>
                                        <span class="toggle__text">수신동의</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="userInfo__footer">
                        <div class="btn-group">
                            <button class="btn bd-radius--circle size--s cover__bg--red" type="submit"
                                name="userInfo">저장</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>