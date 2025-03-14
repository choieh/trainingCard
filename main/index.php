<!DOCTYPE html>
<html lang="ko">

<head>
    <title>국민내일배움카드 - 모두를 위한 교육, 모두의교육그룹</title>
    <? include '../include/headInfo.php' ?>

</head>

<body>
    <div id="layout">
        <div id="header-container"></div>

        <div class="main-container">
            <?
                // include './main.php'
                // include '../form/signUp_terms.php'
                // include '../form/signUp_userInfo.php';
                // include '../form/signUp_complete.php';
                // include '../form/login.php';
                include '../lecture/index.php';
            ?>
        </div>
        <div class="footer-container">
            <? include '../include/footer.php' ?>
        </div>
    </div>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    function loadHeader() {
        const isMobile = window.innerWidth <= 768;
        const headerPath = isMobile ? '../include/m/header.php' : '../include/header.php';

        fetch(headerPath)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.text();
            })
            .then(data => {
                document.getElementById('header-container').innerHTML = data;
            })
            .catch(error => {
                console.error('헤더 로딩 중 오류 발생:', error);
                // 페이지 새로고침으로 기본 헤더 로드
                location.reload();
            });
    }

    // 초기 로드
    loadHeader();

    // 화면 크기 변경 시 헤더 다시 로드
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(loadHeader, 250); // 디바운싱 적용
    });
    </script>
</body>

</html>