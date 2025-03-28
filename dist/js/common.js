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
