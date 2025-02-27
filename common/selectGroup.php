<h2 class="components-title">checkbox</h2>
<div class="components components-checkbox">
    <div class="checkbox">
        <input type="checkbox" id="checkbox-1">
        <label for="checkbox-1">
            <span class="ico ico--check"></span>
            동의합니다
        </label>
    </div>
</div>
<h2 class="components-title">radio button</h2>
<div class="components components-radio">
    <div class="radio">
        <input type="radio" id="radio-1" name="radio-group">
        <label for="radio-1">
            <span class="ico ico--radio"></span>
            label
        </label>
    </div>
    <div class="radio disabled">
        <input type="radio" id="radio-2" name="radio-group">
        <label for="radio-2">
            <span class="ico ico--radio"></span>
            disabled radio
        </label>
    </div>
    <div class="radio">
        <input type="radio" id="radio-3" name="radio-group">
        <label for="radio-3">
            <span class="ico ico--radio"></span>
            label
        </label>
    </div>
    <div class="radio__toggle">
        <input type="checkbox" id="toggle-switch01" class="toggle__input">
        <label for="toggle-switch01" class="toggle__label">
            <span class="ico ico--toggle"></span>
            <span class="toggle__text">email</span>
        </label>
    </div>
    <div class="radio__toggle">
        <input type="checkbox" id="toggle-switch02" class="toggle__input">
        <label for="toggle-switch02" class="toggle__label">
            <span class="ico ico--toggle"></span>
            <span class="toggle__text">SMS</span>
        </label>
    </div>
</div>
<h2 class="components-title">select</h2>
<div class="components components-select">
    <div class="select">
        <button type="button" class="select__btn">
            <span class="select__value">선택해주세요</span>
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

<script>
window.addEventListener("DOMContentLoaded", () => {
    initSelectGroup();
    initToggleSwitch();
});

function initSelectGroup() {
    const selectGroup = document.querySelectorAll(".select");

    selectGroup.forEach((select) => {
        const button = select.querySelector(".select__btn");
        const options = select.querySelector(".select__options-list");
        const selectedValue = select.querySelector(".select__value");
        const optionItems = select.querySelectorAll(".select__option");

        // 셀렉트 박스 열기/닫기
        button.addEventListener("click", (e) => {
            e.stopPropagation();
            select.classList.toggle("active");
        });

        // 옵션 선택 시 동작
        optionItems.forEach((option) => {
            option.addEventListener("click", () => {
                const value = option.dataset.value;
                const text = option.textContent;
                selectedValue.textContent = text;
                select.classList.remove("active");
            });
        });

        // 외부 영역 클릭 시 닫기
        document.addEventListener("click", () => {
            select.classList.remove("active");
        });
    });
}

function initToggleSwitch() {
    const toggleSwitch = document.querySelector(".toggle__input");
    const toggleLabel = document.querySelector(".toggle__label");

    toggleSwitch.addEventListener("change", () => {
        toggleLabel.classList.toggle("active");
    });
}
</script>