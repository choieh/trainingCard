<div class="contactUsForm">
    <div class="contactUsForm__header blind">
        <h3 class="contactUsForm__header--title">문의하기</h3>
    </div>
    <div class="contactUsForm__body">
        <form id="form--contactUs" class="form">
            <div class="contactUsForm__item">
                <!-- [D] inputGroup 입력 불가능 : is-disabled 클래스 추가 및 input에 disabled 속성 추가 -->
                <div class="inputGroup">
                    <label for="input--userName">이름</label>
                    <div class="input-box">
                        <input type="text" id="input--userName" class="input" placeholder="이름" value="">
                    </div>
                </div>
            </div>
            <div class="contactUsForm__item">
                <label for="select--reason" class="blind">취소/환불사유</label>
                <div class="select" id="select--reason">
                    <button type="button" class="select__btn">
                        <span class="select__value">취소/환불사유를 입력해주세요</span>
                        <span class="ico ico--arrow-down"></span>
                    </button>
                    <ul class="select__options-list">
                        <li class="select__option" data-value="option1">옵션 1</li>
                        <li class="select__option" data-value="option2">옵션 2</li>
                        <li class="select__option" data-value="option3">옵션 3</li>
                        <li class="select__option" data-value="option4">옵션 4</li>
                    </ul>
                </div>
            </div>
            <div class="contactUsForm__item">
                <div class="inputGroup">
                    <label for="input--phone">휴대전화</label>
                    <div id="input--phone">
                        <input type="number" id="input--phone-01" class="input" value="">
                        <span class="dash">-</span>
                        <input type="number" id="input--phone-02" class="input" value="">
                        <span class="dash">-</span>
                        <input type="number" id="input--phone-03" class="input" value="">
                    </div>
                    <span class="sub sub__text">* 휴대전화로 답변 알림 문자가 발송되오니,<br>정보를 확인해 주세요.</span>
                </div>
            </div>
            <div class="contactUsForm__item">
                <div class="inputGroup">
                    <label for="input--email">이메일</label>
                    <input type="text" id="input--email" class="input" placeholder="이메일" value="">
                </div>
            </div>
            <div class="contactUsForm__item">
                <div class="inputGroup">
                    <label for="input--title">제목</label>
                    <input type="text" id="input--title" class="input" placeholder="제목" value="">
                </div>
            </div>
            <div class="contactUsForm__item">
                <div class="inputGroup">
                    <label for="contactUsForm--textarea">문의내용</label>
                    <div class="textarea">
                        <textarea name="contactUsForm--textarea" id="contactUsForm--textarea"
                            placeholder="문의내용을 입력해주세요." value=""></textarea>
                    </div>
                </div>
            </div>
            <div class="contactUsForm__item">
                <div class="btn-group">
                    <button class="btn bd-radius--circle size--m cover__bg--red">문의하기</button>
                </div>
            </div>
        </form>
    </div>
</div>