<div class="layout__container">
    <div class="myLecture">
        <div class="layout__header">
            <div class="header__top">
                <? include '../common/containerDepth.php' ?>
                <h2 class="layout__header--title">진행중인과정</h2>
                <h3 class="layout__header--sub">현재 <span>홍길동</span>님은 총 <span>10</span>개의 강의가 진행중입니다.</h3>
            </div>
        </div>
        <div class="layout__body">
            <? 
                include 'include/listOngoing.php'
            ?>
        </div>
    </div>
</div>