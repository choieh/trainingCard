<div class="layout__container">
    <div class="myLecture">
        <div class="layout__header">
            <div class="header__top">
                <? include '../common/containerDepth.php' ?>
                <h2 class="layout__header--title">학습종료과정</h2>
                <h3 class="layout__header--sub">현재 <span>홍길동</span>님은 총 <span>0</span>개의 강의를 보셨습니다.</h3>
            </div>
        </div>
        <div class="layout__body">
            <? 
                include 'include/listEnd.php'
            ?>
        </div>
    </div>
</div>

<!-- [D] modal -->
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