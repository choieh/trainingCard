// DOM 로드 후 초기화 함수 실행
window.addEventListener("DOMContentLoaded", () => {
    initAll();
});

// 모든 초기화 함수를 관리하는 메인 함수
function initAll() {
    initSelectGroup();
    initToggleSwitch();
    initCart();
    initLoginForm();
    initFAQ();
    initCustomSelectBox();
    initAgreementCheckboxes();
    initCardOptions();
    initPagination();
    initButton();
    initExam();
    initTimer();
    initDragAndDrop();
    initTaskExam();
    initModal();
    initRadioButtons();
    initHeader();
}

// 장바구니 관련 기능 -----------------------------------------------
function initCart() {
    initCheckboxHandlers();
    initDeleteHandlers();
    updateTotalPrice();
}

function initCheckboxHandlers() {
    const checkboxAll = document.getElementById("checkbox-all");
    const individualCheckboxes = document.querySelectorAll(
        '.table__body .checkbox input[type="checkbox"]'
    );

    if (checkboxAll) {
        checkboxAll.addEventListener("change", function () {
            const isChecked = this.checked;
            individualCheckboxes.forEach((checkbox) => {
                checkbox.checked = isChecked;
            });
        });
    }

    individualCheckboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", updateCheckboxAll);
    });
}

function updateCheckboxAll() {
    const checkboxAll = document.getElementById("checkbox-all");
    const remainingCheckboxes = document.querySelectorAll(
        '.table__body .checkbox input[type="checkbox"]'
    );

    if (!checkboxAll) return;

    if (remainingCheckboxes.length === 0) {
        checkboxAll.checked = false;
    } else {
        const allChecked = Array.from(remainingCheckboxes).every(
            (cb) => cb.checked
        );
        checkboxAll.checked = allChecked;
    }
}

function initDeleteHandlers() {
    const deleteSelectedBtn = document.querySelector(".table__th .btn");

    if (deleteSelectedBtn) {
        deleteSelectedBtn.addEventListener("click", handleDeleteSelected);
    }

    const individualDeleteBtns = document.querySelectorAll(".btn--delete");
    individualDeleteBtns.forEach((btn) => {
        btn.addEventListener("click", handleIndividualDelete);
    });
}

function handleDeleteSelected() {
    const selectedItems = document.querySelectorAll(
        '.table__body .checkbox input[type="checkbox"]:checked'
    );

    if (selectedItems.length === 0) {
        alert("삭제할 상품을 선택해주세요.");
        return;
    }

    if (confirm("선택한 상품을 장바구니에서 삭제하시겠습니까?")) {
        deleteItems(selectedItems);
        const checkboxAll = document.getElementById("checkbox-all");
        if (checkboxAll) checkboxAll.checked = false;
        updateTotalPrice();
    }
}

function handleIndividualDelete() {
    if (confirm("해당 상품을 장바구니에서 삭제하시겠습니까?")) {
        const tableRow = this.closest(".table__tr");
        if (tableRow) {
            tableRow.remove();
            updateCheckboxAll();
            updateTotalPrice();
        }
    }
}

function deleteItems(items) {
    items.forEach((item) => {
        const tableRow = item.closest(".table__tr");
        if (tableRow) {
            tableRow.remove();
        }
    });
}

function updateTotalPrice() {
    const cartItems = document.querySelectorAll(".table__tr");
    let totalAmount = 0;

    cartItems.forEach((item) => {
        const priceElement = item.querySelector(".table__td:nth-child(4) p");
        if (priceElement) {
            const priceText = priceElement.textContent;
            const price = parseInt(priceText.replace(/[^0-9]/g, ""));
            totalAmount += price;
        }
    });

    const amountElement = document.querySelector(
        ".payment__item:nth-child(1) dd"
    );
    const totalElement = document.querySelector(
        ".payment__item:nth-child(3) dd"
    );

    if (amountElement && totalElement) {
        amountElement.textContent = `${totalAmount.toLocaleString()}원`;
        totalElement.textContent = `${totalAmount.toLocaleString()}원`;
    }
}

// 셀렉트 그룹 초기화 -----------------------------------------------
function initSelectGroup() {
    const selectGroup = document.querySelectorAll(".select");

    selectGroup.forEach((select) => {
        const button = select.querySelector(".select__btn");
        const options = select.querySelector(".select__options-list");
        const selectedValue = select.querySelector(".select__value");
        const optionItems = select.querySelectorAll(".select__option");

        if (!button || !selectedValue) return;

        button.addEventListener("click", (e) => {
            e.stopPropagation();
            select.classList.toggle("active");
        });

        optionItems.forEach((option) => {
            option.addEventListener("click", () => {
                const value = option.dataset.value;
                const text = option.textContent;
                selectedValue.textContent = text;
                select.classList.remove("active");
            });
        });

        document.addEventListener("click", () => {
            select.classList.remove("active");
        });
    });
}

// 토글 스위치 초기화 -----------------------------------------------
function initToggleSwitch() {
    const toggleSwitch = document.querySelector(".toggle__input");
    const toggleLabel = document.querySelector(".toggle__label");

    if (toggleSwitch && toggleLabel) {
        toggleSwitch.addEventListener("change", () => {
            toggleLabel.classList.toggle("active");
        });
    }
}

// 카드 옵션 버튼 초기화 -----------------------------------------------
function initCardOptions() {
    const cards = document.querySelectorAll(".card");

    cards.forEach((card) => {
        const optionBtn = card.querySelector(".btn--up");
        const optionArea = card.querySelector(".card__option");
        const cartArea = card.querySelector(".card__option--cart");

        if (optionBtn) {
            optionBtn.addEventListener("click", function (e) {
                e.preventDefault();
                e.stopPropagation();

                if (optionArea) optionArea.classList.toggle("is-active");
                if (cartArea) cartArea.classList.toggle("is-active");

                return false;
            });
        }
    });
}

// 페이지네이션 초기화 -----------------------------------------------
function initPagination() {
    const pagination = document.querySelector(".pagination");
    if (!pagination) return;

    const paginationItems = pagination.querySelectorAll(".pagination__item");

    paginationItems.forEach((item) => {
        item.addEventListener("click", (e) => {
            e.preventDefault();
            paginationItems.forEach((el) => el.classList.remove("is-active"));
            item.classList.add("is-active");
        });
    });
}

// 약관 동의 체크박스 초기화 -----------------------------------------------
function initAgreementCheckboxes() {
    const allCheckbox = document.getElementById("checkbox-0");
    const otherCheckboxes = document.querySelectorAll(
        "#checkbox-1, #checkbox-2, #checkbox-3"
    );

    if (!allCheckbox || otherCheckboxes.length === 0) return;

    allCheckbox.addEventListener("change", function () {
        const isChecked = this.checked;
        otherCheckboxes.forEach((checkbox) => {
            checkbox.checked = isChecked;
        });
    });

    otherCheckboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", function () {
            const allChecked = Array.from(otherCheckboxes).every(
                (cb) => cb.checked
            );
            allCheckbox.checked = allChecked;
        });
    });
}

// 로그인 폼 초기화 -----------------------------------------------
function initLoginForm() {
    const idInput = document.getElementById("input--id");
    const pwdInput = document.getElementById("input--pwd");
    const pwdViewBtn = document.querySelector(".btn-pwd-view");

    if (!idInput || !pwdInput || !pwdViewBtn) return;

    pwdViewBtn.addEventListener("click", () => {
        const isPwdVisible = pwdInput.type === "text";
        pwdInput.type = isPwdVisible ? "password" : "text";
        pwdViewBtn.classList.toggle("is-hide");
    });

    const checkInputValue = (input) => {
        const inputGroup = input.closest(".inputGroup");
        if (inputGroup) {
            if (input.value.trim() !== "") {
                inputGroup.classList.add("has-value");
            } else {
                inputGroup.classList.remove("has-value");
            }
        }
    };

    checkInputValue(idInput);
    checkInputValue(pwdInput);

    idInput.addEventListener("input", () => checkInputValue(idInput));
    pwdInput.addEventListener("input", () => checkInputValue(pwdInput));
}

// FAQ 초기화 -----------------------------------------------
function initFAQ() {
    const faqListArea = document.querySelector(".category__list");
    const faqItems = document.querySelectorAll(".faq__item");
    const faqTitles = document.querySelectorAll(".faq__title-btn");

    if (!faqListArea || !faqItems.length) return;

    const faqCategories = [
        "Top 10",
        "결제/환불",
        "회원가입",
        "학습",
        "평가",
        "과제",
        "회원탈퇴",
        "배송",
        "기타",
    ];

    // 카테고리 리스트 생성
    faqCategories.forEach((category, index) => {
        const categoryItem = document.createElement("li");
        const categoryLink = document.createElement("a");

        categoryItem.classList.add("category__item");
        categoryLink.classList.add("category__link");
        categoryLink.href = "#";
        categoryLink.textContent = category;

        categoryItem.appendChild(categoryLink);
        faqListArea.appendChild(categoryItem);

        // 첫 번째 카테고리는 기본적으로 활성화
        if (index === 0) {
            categoryItem.classList.add("is-active");
        }

        // 카테고리 클릭 이벤트
        categoryItem.addEventListener("click", (e) => {
            e.preventDefault();

            // 기존 활성화된 카테고리 비활성화
            document.querySelectorAll(".category__item").forEach((item) => {
                item.classList.remove("is-active");
            });

            // 현재 카테고리 활성화
            categoryItem.classList.add("is-active");

            // FAQ 아이템 필터링
            filterFaqItems(category);
        });
    });

    // FAQ 항목 필터링 함수
    function filterFaqItems(category) {
        faqItems.forEach((item) => {
            const titleText = item.querySelector(".faq__title-btn").textContent;

            if (category === "Top 10") {
                // Top 10 카테고리는 모든 항목 표시
                item.style.display = "";
            } else if (titleText.includes(`[${category}]`)) {
                // 해당 카테고리 포함 항목만 표시
                item.style.display = "";
            } else {
                // 나머지 항목 숨김
                item.style.display = "none";
            }
        });
    }

    // 아코디언 기능 구현
    faqTitles.forEach((title) => {
        title.addEventListener("click", function () {
            const parentItem = this.closest(".faq__item");

            // 이미 열려있는 경우 닫기
            if (parentItem.classList.contains("is-active")) {
                parentItem.classList.remove("is-active");
            } else {
                // 모든 FAQ 항목 닫기
                faqItems.forEach((item) => {
                    item.classList.remove("is-active");
                });

                // 현재 항목 열기
                parentItem.classList.add("is-active");
            }
        });
    });

    // 초기 상태에서 첫 번째 카테고리로 필터링
    filterFaqItems(faqCategories[0]);
}

// 커스텀 셀렉트박스 초기화 -----------------------------------------------
function initCustomSelectBox() {
    const selectButton = document.querySelector(".cost__btn--select");
    const selectList = document.querySelector(".cost__list");
    const selectItems = document.querySelectorAll(".cost__list--item");

    if (!selectButton || !selectList || selectItems.length === 0) return;

    // 셀렉트박스 초기 설정
    selectList.style.display = "none";

    // 셀렉트박스 토글 함수
    function toggleSelect(e) {
        e.preventDefault();
        e.stopPropagation();

        const expanded = selectButton.getAttribute("aria-expanded") === "true";
        selectButton.setAttribute("aria-expanded", !expanded);

        selectList.style.display = expanded ? "none" : "block";
    }

    // 옵션 선택 함수
    function selectOption(item) {
        selectItems.forEach((el) => {
            el.setAttribute("aria-selected", "false");
        });

        item.setAttribute("aria-selected", "true");
        selectButton.textContent = item.textContent.trim();
        selectButton.setAttribute("aria-expanded", "false");
        selectList.style.display = "none";
    }

    // 이벤트 리스너 등록
    selectButton.addEventListener("click", toggleSelect);

    // 각 옵션 아이템에 이벤트 리스너 등록
    selectItems.forEach((item) => {
        item.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            selectOption(this);
        });

        // 키보드 접근성
        item.addEventListener("keydown", function (e) {
            if (e.key === "Enter" || e.key === " ") {
                e.preventDefault();
                selectOption(this);
            }
        });
    });

    // 외부 클릭 시 셀렉트박스 닫기
    document.addEventListener("click", function () {
        if (selectButton.getAttribute("aria-expanded") === "true") {
            selectButton.setAttribute("aria-expanded", "false");
            selectList.style.display = "none";
        }
    });

    // 키보드 접근성 - 화살표 키 이동
    selectList.addEventListener("keydown", function (e) {
        const focusedItem = document.activeElement;
        const items = Array.from(selectItems);
        const currentIndex = items.indexOf(focusedItem);

        if (e.key === "ArrowDown") {
            e.preventDefault();
            const nextIndex = (currentIndex + 1) % items.length;
            items[nextIndex].focus();
        } else if (e.key === "ArrowUp") {
            e.preventDefault();
            const prevIndex = (currentIndex - 1 + items.length) % items.length;
            items[prevIndex].focus();
        } else if (e.key === "Escape") {
            e.preventDefault();
            selectButton.setAttribute("aria-expanded", "false");
            selectList.style.display = "none";
            selectButton.focus();
        }
    });

    // 초기 선택값 설정
    const selectedItem =
        document.querySelector('.cost__list--item[aria-selected="true"]') ||
        selectItems[0];
    if (selectedItem) {
        selectButton.textContent = selectedItem.textContent.trim();
    }

    // 폼 제출 방지
    const form = document.getElementById("form--lecture-cost");
    if (form) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();
        });
    }
}

// 버튼 관련 기능 -----------------------------------------------
function initButton() {
    // filter > duration > btn-group > btn-list__item 클릭 시 is-active 클래스 추가
    const buttonList = document.querySelectorAll(".btn-list__item");

    buttonList.forEach((item) => {
        item.addEventListener("click", function (e) {
            e.preventDefault();
            buttonList.forEach((el) => el.classList.remove("is-active"));
            item.classList.add("is-active");
        });
    });
}

// 평가 초기화 -----------------------------------------------
function initExam() {
    // 기본 선택 상태 제거 (새로 추가된 부분)
    clearDefaultSelections();

    // 문제 수에 맞게 답안 리스트 동적 생성
    initAnswerList();

    // 옵션 아이템 클릭 이벤트 처리
    const optionItems = document.querySelectorAll(".option-item");
    if (!optionItems.length) return;

    // 제출 버튼 클릭 시 모달 노출 처리
    const submitButtons = document.querySelectorAll(".btn-exam--submit");
    const modal = document.querySelector(".modal--title-sub");
    const modalCancelBtn = modal?.querySelector(".modal-btn--cancel");
    const modalSubmitBtn = modal?.querySelector(".modal-btn--submit");
    const form = document.querySelector(
        "#form--interimExam, #form--finalExam, #form--taskExam"
    );

    if (submitButtons.length && modal && form) {
        submitButtons.forEach((button) => {
            button.addEventListener("click", (e) => {
                e.preventDefault();
                modal.classList.add("is-active");
            });
        });

        // 모달 취소 버튼 클릭 시
        if (modalCancelBtn) {
            modalCancelBtn.addEventListener("click", () => {
                modal.classList.remove("is-active");
            });
        }

        // 모달 제출 버튼 클릭 시
        if (modalSubmitBtn) {
            modalSubmitBtn.addEventListener("click", () => {
                form.submit();
            });
        }
    }

    optionItems.forEach((item) => {
        item.addEventListener("click", function () {
            // 현재 문제 컨테이너 찾기
            const questionItem = this.closest(".question-item");
            if (!questionItem) return;

            // 같은 문제 내 모든 옵션에서 선택 클래스 제거 및 aria-checked 업데이트
            const options = questionItem.querySelectorAll(".option-item");
            options.forEach((option) => {
                option.classList.remove("option-selected");
                option.setAttribute("aria-checked", "false");
            });

            // 클릭한 옵션에 선택 클래스 추가 및 aria-checked 업데이트
            this.classList.add("option-selected");
            this.setAttribute("aria-checked", "true");

            // 문제 번호와 옵션 번호를 이용해 답안 목록 업데이트
            const questionNumber = this.getAttribute("name").replace(
                "question-",
                ""
            );
            const optionNumber =
                this.querySelector(".option-number")?.textContent.match(
                    /(\d+)/
                )[1];

            if (questionNumber && optionNumber) {
                updateAnswerList(parseInt(questionNumber), optionNumber);
            }
        });

        // 키보드 접근성 추가
        item.addEventListener("keydown", function (e) {
            if (e.key === "Enter" || e.key === " ") {
                e.preventDefault();
                this.click();
            }
        });
    });

    // 기본 선택 상태 제거 함수 (새로 추가)
    function clearDefaultSelections() {
        // 모든 option-selected 클래스 제거
        const selectedOptions = document.querySelectorAll(
            ".option-item.option-selected"
        );
        selectedOptions.forEach((option) => {
            option.classList.remove("option-selected");
            option.setAttribute("aria-checked", "false");
        });

        // 답안 리스트의 is-done 클래스 제거
        const doneAnswers = document.querySelectorAll(
            ".answer__list li.is-done"
        );
        doneAnswers.forEach((answer) => {
            answer.classList.remove("is-done");
            const answerSpan = answer.querySelector("span:last-child");
            if (answerSpan) {
                answerSpan.textContent = "";
            }
        });
    }

    // 문제 수에 맞게 답안 리스트 초기화하는 함수
    function initAnswerList() {
        const questionItems = document.querySelectorAll(".question-item");
        const answerList = document.querySelector(".answer__list");

        if (!questionItems.length || !answerList) return;

        // 기존 답안 항목 비우기
        answerList.innerHTML = "";

        // 문제 수만큼 답안 항목 생성
        questionItems.forEach((item, index) => {
            const questionNumber = index + 1;

            // 기본적으로는 선택된 옵션이 없도록 수정
            const selectedOption = null;
            const selectedOptionNumber = "";

            // 새 답안 항목 생성
            const answerItem = document.createElement("li");
            // is-done 클래스를 추가하지 않음 (기본 선택 없음)

            // 문제 번호 요소
            const questionSpan = document.createElement("span");
            questionSpan.textContent = `문제 ${questionNumber}`;

            // 답변 번호 요소 (빈 내용)
            const answerSpan = document.createElement("span");
            answerSpan.textContent = "";

            // 요소 조립
            answerItem.appendChild(questionSpan);
            answerItem.appendChild(answerSpan);
            answerList.appendChild(answerItem);
        });
    }

    // 답안 목록 업데이트 함수
    function updateAnswerList(questionNum, optionNum) {
        const answerList = document.querySelector(".answer__list");
        if (!answerList) return;

        const answerItem = answerList.querySelector(
            `li:nth-child(${questionNum})`
        );
        if (!answerItem) return;

        // 답안 텍스트 업데이트
        const answerSpan = answerItem.querySelector("span:last-child");
        if (answerSpan) {
            answerSpan.textContent = optionNum;
        }

        // 답안 작성 표시
        answerItem.classList.add("is-done");
    }
}

// 타이머 초기화 -----------------------------------------------
class ExamTimer {
    constructor(options = {}) {
        this.options = {
            selector: ".circle_progress_wrap",
            duration: 3600,
            formSelector: "form",
            onComplete: () => this.handleTimeComplete(),
            ...options,
        };

        // DOM 요소
        this.container = document.querySelector(this.options.selector);

        // container가 없으면 초기화하지 않음
        if (!this.container) {
            console.warn(
                "타이머 컨테이너를 찾을 수 없습니다:",
                this.options.selector
            );
            return;
        }

        this.bar = this.container.querySelector(".bar");
        this.value = this.container.querySelector(".value");
        this.form = document.querySelector(this.options.formSelector);

        // 필수 요소가 없으면 초기화하지 않음
        if (!this.bar || !this.value) {
            console.warn("타이머 필수 요소를 찾을 수 없습니다");
            return;
        }

        // 상수
        this.RADIUS = 70;
        this.CIRCUMFERENCE = 2 * Math.PI * this.RADIUS;

        // 상태
        this.timeLeft = this.options.duration;
        this.isRunning = false;
        this.timer = null;

        // 초기화
        this.init();
        // 자동 시작
        this.start();
    }

    init() {
        this.bar.style.strokeDasharray = this.CIRCUMFERENCE;
        this.updateProgress(this.timeLeft);
    }

    updateProgress(timeLeft) {
        // 남은 시간을 퍼센트로 변환
        const percent = (timeLeft / this.options.duration) * 100;
        const progress = percent / 100;
        const dashoffset = this.CIRCUMFERENCE * (1 - progress);

        // 프로그레스 바 업데이트
        this.bar.style.strokeDashoffset = dashoffset;

        // 시간 표시 업데이트 (분:초)
        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        this.value.textContent = `${String(minutes).padStart(2, "0")}:${String(
            seconds
        ).padStart(2, "0")}`;
    }

    start() {
        if (this.isRunning) return;

        this.isRunning = true;
        this.timer = setInterval(() => {
            // 먼저 시간이 0인지 체크
            if (this.timeLeft <= 0) {
                this.stop();
                this.options.onComplete();
                return;
            }

            // 시간 감소 및 업데이트
            this.timeLeft--;
            this.updateProgress(this.timeLeft);
        }, 1000);
    }

    stop() {
        if (!this.timer) return;
        clearInterval(this.timer);
        this.isRunning = false;
    }

    handleTimeComplete() {
        if (!this.form) {
            console.error("시험 폼을 찾을 수 없어 자동 제출할 수 없습니다.");
            alert("시험 시간이 종료되었습니다. 관리자에게 문의하세요.");
            return;
        }

        alert("시험 시간이 종료되었습니다. 자동으로 제출됩니다.");
        this.form.submit();
    }
}

function initTimer() {
    const timerContainer = document.querySelector(".circle_progress_wrap");

    // 타이머 요소가 존재할 때만 초기화
    if (timerContainer) {
        const examTimer = new ExamTimer({
            selector: ".circle_progress_wrap",
            duration: 10, // 10초 (테스트용)
            formSelector: "#form--finalExam",
            onComplete: () => {
                console.log("시험 시간 종료");
            },
        });
    }
}

// 드래그 앤 드롭 초기화 함수
function initDragAndDrop() {
    const dropArea = document.querySelector(".question__item");
    const fileInput = document.querySelector(".file-input");
    const fileButton = document.querySelector(".btn--file");

    if (!dropArea || !fileInput) return;

    // 파일 찾기 버튼 클릭 이벤트
    fileButton.addEventListener("click", () => {
        fileInput.click();
    });

    // 드래그 이벤트 방지
    const preventDefaults = (e) => {
        e.preventDefault();
        e.stopPropagation();
    };

    // 드래그 이벤트 리스너 추가
    ["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
        dropArea.addEventListener(eventName, preventDefaults);
    });

    // 드래그 오버 시 시각적 피드백
    ["dragenter", "dragover"].forEach((eventName) => {
        dropArea.addEventListener(eventName, () => {
            dropArea.classList.add("highlight");
        });
    });

    ["dragleave", "drop"].forEach((eventName) => {
        dropArea.addEventListener(eventName, () => {
            dropArea.classList.remove("highlight");
        });
    });

    // 파일 드롭 처리
    dropArea.addEventListener("drop", (e) => {
        const files = e.dataTransfer.files;
        handleFiles(files);
    });

    // 파일 인풋 변경 처리
    fileInput.addEventListener("change", (e) => {
        const files = e.target.files;
        handleFiles(files);
    });

    // 파일 처리 함수
    const handleFiles = (files) => {
        const allowedTypes = [
            "txt",
            "xls",
            "xlsx",
            "pdf",
            "docx",
            "hwp",
            "zip",
            "pptx",
            "jpg",
            "jpeg",
            "png",
        ];

        [...files].forEach((file) => {
            const extension = file.name.split(".").pop().toLowerCase();
            const fileNameElement = dropArea.querySelector(".file-name");

            if (allowedTypes.includes(extension)) {
                // 원래 안내 텍스트 복원
                dropArea.querySelector("p").innerHTML =
                    "첨부하려는 파일을<br>끌어다 놓으세요";

                // 파일명 표시
                fileNameElement.textContent = file.name;
            } else {
                alert("지원하지 않는 파일 형식입니다.");
                fileNameElement.textContent = "";
            }
        });
    };
}

// 과제 첨부 초기화 -----------------------------------------------
function initTaskExam() {
    const taskExam = document.querySelectorAll(".question__item");

    // 텍스트 영역 포커스 여부와 해당 아이템 확인
    const getFocusedTextareaItem = () => {
        const focusedTextarea = document.querySelector(".exam-textarea:focus");
        return focusedTextarea
            ? focusedTextarea.closest(".question__item")
            : null;
    };

    // 호버 효과 적용 함수
    const applyHoverEffect = (item) => {
        item.classList.add("is-hover");
        // inner 요소에 호버 효과용 클래스 추가
        const innerBox = item.querySelector(".inner-box");
        if (innerBox) {
            innerBox.classList.add("is-hover");
        }

        let prevSibling = item.previousElementSibling;
        while (prevSibling) {
            prevSibling.classList.add("is-sibling");
            const prevInnerBox = prevSibling.querySelector(".inner-box");
            if (prevInnerBox) {
                prevInnerBox.classList.add("is-sibling");
            }
            prevSibling = prevSibling.previousElementSibling;
        }

        let nextSibling = item.nextElementSibling;
        while (nextSibling) {
            nextSibling.classList.add("is-sibling");
            const nextInnerBox = nextSibling.querySelector(".inner-box");
            if (nextInnerBox) {
                nextInnerBox.classList.add("is-sibling");
            }
            nextSibling = nextSibling.nextElementSibling;
        }
    };

    // 호버 효과 제거 함수
    const removeHoverEffect = (item) => {
        item.classList.remove("is-hover");
        const innerBox = item.querySelector(".inner-box");
        if (innerBox) {
            innerBox.classList.remove("is-hover");
        }

        document.querySelectorAll(".question__item").forEach((sibling) => {
            sibling.classList.remove("is-sibling");
            const siblingInnerBox = sibling.querySelector(".inner-box");
            if (siblingInnerBox) {
                siblingInnerBox.classList.remove("is-sibling");
            }
        });
    };

    // 초기 상태로 되돌리는 함수
    const resetToInitialState = (item) => {
        const innerBox = item.querySelector(".inner-box");
        innerBox.innerHTML = `
            <strong>직접 작성하기</strong>
            <p>답안을 작성하시려면<br>클릭해주세요</p>
        `;
        item.classList.remove("is-active");
        removeHoverEffect(item);
    };

    taskExam.forEach((item) => {
        // 호버 이벤트
        item.addEventListener("mouseenter", () => {
            const focusedItem = getFocusedTextareaItem();

            // textarea가 포커스된 상태에서는 호버 효과 비활성화
            if (!focusedItem) {
                applyHoverEffect(item);
            }
        });

        item.addEventListener("mouseleave", () => {
            const focusedItem = getFocusedTextareaItem();

            // textarea가 포커스된 상태가 아닐 때만 호버 효과 제거
            if (!focusedItem) {
                removeHoverEffect(item);
            }
        });

        // 직접 작성하기 클릭 이벤트
        if (item.classList.contains("self-write")) {
            item.addEventListener("click", () => {
                if (!item.classList.contains("is-active")) {
                    const innerBox = item.querySelector(".inner-box");
                    const textareaHTML = `
                        <div class="textarea-box">
                            <textarea 
                                placeholder="답안을 작성해주세요." 
                                rows="10"
                                class="exam-textarea"
                            ></textarea>
                        </div>
                    `;
                    innerBox.innerHTML = textareaHTML;

                    item.classList.add("is-active");
                    applyHoverEffect(item);

                    const textarea = item.querySelector(".exam-textarea");
                    if (textarea) {
                        textarea.focus();

                        // blur 이벤트
                        textarea.addEventListener("blur", () => {
                            if (!textarea.value.trim()) {
                                resetToInitialState(item);
                            } else {
                                removeHoverEffect(item);
                            }
                        });

                        // focus 이벤트
                        textarea.addEventListener("focus", () => {
                            // 다른 모든 항목의 호버 효과 제거
                            document
                                .querySelectorAll(".question__item")
                                .forEach((el) => {
                                    if (el !== item) {
                                        removeHoverEffect(el);
                                    }
                                });

                            // 현재 항목에만 호버 효과 적용
                            applyHoverEffect(item);
                        });
                    }
                }
            });
        }
    });
}

// 모달 초기화 함수
function initModal() {
    const closeButtons = document.querySelectorAll(".modal .ico--close");
    const cancelButtons = document.querySelectorAll(".modal-btn--cancel");
    const backModal = document.querySelector(".modal.is-active");

    // 수강증 출력 버튼 이벤트 처리
    const printButtons = document.querySelectorAll(
        ".status--completion .ico--print"
    );
    printButtons.forEach((button) => {
        button.addEventListener("click", (e) => {
            e.preventDefault();
            const modal = document.querySelector(".modal--print");
            if (modal) {
                modal.classList.add("is-active");
                if (backModal) backModal.style.display = "block";
            }
        });
    });

    // 닫기 버튼 이벤트 처리
    closeButtons.forEach((button) => {
        button.addEventListener("click", closeModal);
    });

    // 취소 버튼 이벤트 처리
    cancelButtons.forEach((button) => {
        button.addEventListener("click", closeModal);
    });
}

// 모달 닫기 함수
function closeModal(e) {
    e.preventDefault();
    const modal = this.closest(".modal");
    if (modal) {
        modal.classList.remove("is-active");
        backModal.style.display = "none";
    }
}

// 라디오 버튼 초기화 -----------------------------------------------
function initRadioButtons() {
    const radioLabels = document.querySelectorAll(".radio__label");

    radioLabels.forEach((label) => {
        const radio = label.previousElementSibling; // input[type="radio"] 요소
        let clickCount = 0;
        let lastClickTime = 0;

        label.addEventListener("click", function (e) {
            const currentTime = new Date().getTime();
            clickCount++;

            // 2초(2000ms) 이내에 짝수 클릭인 경우
            if (currentTime - lastClickTime < 2000 && clickCount % 2 === 0) {
                e.preventDefault();
                radio.checked = false;
                clickCount = 0; // 클릭 카운트 초기화
            }

            lastClickTime = currentTime;
        });
    });
}

// 헤더 초기화 -----------------------------------------------
function initHeader() {
    function loadHeader() {
        const isMobile = window.innerWidth <= 768;
        const headerPath = isMobile
            ? "../include/m/header.php"
            : "../include/header.php";

        fetch(headerPath)
            .then((response) => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.text();
            })
            .then((data) => {
                document.getElementById("header-container").innerHTML = data;
                // 헤더 로드 후 모바일 헤더 초기화 실행
                if (isMobile) {
                    initMobileHeader();
                }
            })
            .catch((error) => {
                console.error("헤더 로딩 중 오류 발생:", error);
                // 페이지 새로고침으로 기본 헤더 로드
                location.reload();
            });
    }

    // 초기 로드
    loadHeader();

    // 화면 크기 변경 시 헤더 다시 로드
    let resizeTimer;
    window.addEventListener("resize", () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(loadHeader, 250); // 디바운싱 적용
    });
}

// 모바일 헤더 초기화 -----------------------------------------------
function initMobileHeader() {
    // DOM이 완전히 로드될 때까지 대기
    setTimeout(() => {
        const menuBtn = document.querySelector(".fixed-menu__btn.menu");
        const closeBtn = document.querySelector(".btn--close");
        const gnb = document.querySelector(".m-gnb");
        const menuItems = document.querySelectorAll(".m-gnb-menu__item");
        const subItems = document.querySelectorAll(".m-gnb-sub__item");

        if (!menuBtn || !closeBtn || !gnb) {
            console.warn("모바일 헤더 요소를 찾을 수 없습니다.");
            return;
        }

        // 메뉴 열기/닫기
        menuBtn.addEventListener("click", () => {
            gnb.classList.add("is-active");
        });

        closeBtn.addEventListener("click", () => {
            gnb.classList.remove("is-active");
        });

        // 아코디언 메뉴
        menuItems.forEach((item) => {
            const link = item.querySelector(".m-gnb-menu__link");
            const subMenu = item.querySelector(".m-gnb-sub");

            if (subMenu) {
                link.addEventListener("click", (e) => {
                    e.preventDefault();

                    // 다른 열린 메뉴 닫기
                    menuItems.forEach((otherItem) => {
                        if (otherItem !== item) {
                            otherItem.classList.remove("is-active");
                        }
                    });

                    item.classList.toggle("is-active");
                });
            }
        });

        // 서브메뉴 아이템 클릭 이벤트
        subItems.forEach((subItem) => {
            subItem.addEventListener("click", (e) => {
                // 같은 depth의 다른 서브메뉴 아이템의 is-active 클래스 제거
                const siblings =
                    subItem.parentElement.querySelectorAll(".m-gnb-sub__item");
                siblings.forEach((sibling) => {
                    sibling.classList.remove("is-active");
                });

                // 클릭한 서브메뉴 아이템에 is-active 클래스 추가
                subItem.classList.add("is-active");
            });
        });

        console.log("모바일 헤더 초기화 완료");
    }, 100);
}
