<h2 class="components-title">modal</h2>
<div class="components components-modal">
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
</div>