<div class="pagination">
    <a href="#" class="pagination__item">&lt;</a>
    <a href="#" class="pagination__item is-active">1</a>
    <a href="#" class="pagination__item">2</a>
    <a href="#" class="pagination__item">3</a>
    <a href="#" class="pagination__item">4</a>
    <a href="#" class="pagination__item">5</a>
    <a href="#" class="pagination__item">&gt;</a>
</div>

<script>
// 페이지네이션 클릭 이벤트
const pagination = document.querySelector(".pagination");
const paginationItems = pagination.querySelectorAll(".pagination__item");

paginationItems.forEach((item) => {
    item.addEventListener("click", (e) => {
        e.preventDefault();
        // 모든 아이템에서 is-active 클래스 제거
        paginationItems.forEach(el => el.classList.remove("is-active"));
        // 클릭한 아이템에만 is-active 클래스 추가
        item.classList.add("is-active");
    });
});
</script>