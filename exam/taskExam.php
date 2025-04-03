<div class="layout__container">
    <div class="exam exam--task">
        <div class="layout__header">
            <div class="header__top">
                <h2 class="layout__header--title">최종평가</h2>
                <h3 class="layout__header--sub">[한문철의 현장 속으로] 채용 및 작업내용 변경 시 안전보건교육 (8차시)</h3>
                <div class="btn-group">
                    <button class="btn btn--close"><span class="blind">닫기</span></button>
                </div>
            </div>
        </div>
        <div class="layout__body">
            <div class="notice--body">
                <div class="inner">
                    <strong>과제 주의사항</strong>
                    <ul>
                        <li>- 과제 제출은 <strong class="color--red">1회(최종제출 기준)만 가능</strong>하며,최종제출 후에는 수정 및 재제출이 불가능합니다.
                        </li>
                        <li>- 최종제출 전까지는 임시저장 기능을 통해 수정이 가능하며,<strong class="color--red">학습 시간 내에 꼭 최종제출까지 완료</strong>하여야
                            합니다.</li>
                    </ul>
                    <ul>
                        <li>- 파일로 제출하는 경우 <strong class="color--blue">마지막에 제출한 파일로 최종 저장</strong>됩니다.</li>
                        <li>- 파일로 제출하는 경우 <strong class="color--red">2개 이상의 문서는 압축하여 1개의 파일로 제출</strong>해야 합니다.</li>
                        <li>- 파일로 제출하기와 직접 작성하기 중 <strong class="color--blue">마지막에 제출한 방식 하나만 최종 제출</strong>됩니다.</li>
                    </ul>
                </div>
            </div>
            <div class="inner">
                <form id="form--taskExam" class="form">
                    <div class="question">
                        <div class="question__header">
                            <strong class="question--sub">문제 1</strong>
                            <h5 class="question--title">생성형 AI의 작동 원리에 대해 순서대로 서술하시오.</h5>
                        </div>
                        <div class="question__body">
                            <div class="question__item">
                                <div class="inner-box">
                                    <strong>파일 첨부하기</strong>
                                    <p>첨부하려는 파일을<br>끌어다 놓으세요</p>
                                    <button type="button" class="btn btn--file">파일 찾기</button>
                                    <span class="file-name"></span>
                                    <input type="file" class="file-input">
                                </div>
                                <p class="annotation">첨부가능 확장자<br>txt, xls, xlsx, pdf, docx, hwp, zip,
                                    pptx,jpg,</p>
                            </div>
                            <div class="question__item self-write">
                                <div class="inner-box">
                                    <strong>직접 작성하기</strong>
                                    <p>답안을 작성하시려면<br>클릭해주세요</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn bd-radius--square size--s cover__line">임시저장</button>
                        <button type="submit"
                            class="btn bd-radius--square size--s cover__bg btn-exam--submit">최종제출하기</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- [D] 최종제출 확인 모달 -->
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