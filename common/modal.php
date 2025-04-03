<h2 class="components-title">modal</h2>
<div class="components components-modal">
    <!-- [D] 수료증 설정 -->
    <div class="modal modal--print">
        <div class="modal__header">
            <div class="btn-group">
                <button class="btn ico ico--close"><span class="blind">닫기</span></button>
            </div>
        </div>
        <div class="modal__body">
            <h3 class="modal__title">수료증 설정</h3>
            <form id="form--modal" class="form">
                <ul>
                    <li>
                        <div class="checkbox">
                            <input type="checkbox" id="print-name-checkbox">
                            <label for="print-name-checkbox">
                                <span class="ico ico--check"></span>
                                <span class="text">차시명 노출<br>*차시수가 30개 이하인 경우만 가능합니다.</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <input type="checkbox" id="print-date-checkbox">
                            <label for="print-date-checkbox">
                                <span class="ico ico--check"></span>
                                <span class="text">차시명 노출<br>*차시수가 30개 이하인 경우만 가능합니다.</span>
                            </label>
                        </div>
                    </li>
                </ul>
                <div class="btn-group">
                    <button type="reset" class="btn modal-btn modal-btn--cancel">취소</button>
                    <button type="submit" class="btn modal-btn modal-btn--submit">제출하기</button>
                </div>
            </form>
        </div>
    </div>

    <!-- [D] 텍스트만 있는 모달 -->
    <div class="modal modal--text">
        <div class="modal__body">
            <h3 class="modal__title">내일배움카드 유형은 장바구니 담기를 이용할 수 없습니다</h3>
        </div>
        <div class="modal__footer">
            <div class="btn-group">
                <button class="btn modal-btn modal-btn--confirm">확인</button>
            </div>
        </div>
    </div>

    <!-- [D] title, sub 텍스트 모달 -->
    <div class="modal modal--title-sub">
        <div class="modal__body">
            <h3 class="modal__title">최종 제출 후에는<br>수정 및 재응시를<br>할 수 없습니다.</h3>
            <p class="modal__sub">최종제출하시겠습니까?</p>
        </div>
        <div class="modal__footer">
            <div class="btn-group">
                <button type="reset" class="btn modal-btn modal-btn--cancel">취소</button>
                <button type="submit" class="btn modal-btn modal-btn--submit">제출하기</button>
            </div>
        </div>
    </div>
</div>