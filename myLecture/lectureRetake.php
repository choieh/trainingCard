<div class="layout__container">
    <div class="myLecture">
        <div class="layout__header">
            <div class="header__top">
                <? include '../common/containerDepth.php' ?>
                <h2 class="layout__header--title">재응시과정</h2>
                <h3 class="layout__header--sub">현재 <span>홍길동</span>님은 재응시 가능한 과정이 없습니다.</h3>
            </div>
        </div>
        <div class="layout__body">
            <? 
                include 'include/listRetake.php'
            ?>
        </div>
    </div>
</div>