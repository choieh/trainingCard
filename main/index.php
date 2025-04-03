<!DOCTYPE html>
<html lang="ko">

<head>
    <title>국민내일배움카드 - 모두를 위한 교육, 모두의교육그룹</title>
    <? include '../include/headInfo.php' ?>

</head>

<body>
    <div id="layout">
        <div id="header-container"></div>
        <?
            // include './include/mainContainer.php'
            // include '../form/join_terms.php'
            // include '../form/join_userInfo.php';
            // include '../form/join_complete.php';
            // include '../form/login.php';
            // include '../lecture/index.php';
            // include '../lecture/lectureDetail.php';
            // include '../cart/index.php';
            // include '../myPage/index.php';
            // include '../myPage/orderList.php';
            // include '../myPage/orderDetailList.php';
            // include '../myPage/refund.php';
            // include '../form/inquiry.php';
            // include '../notice/index.php'
            // include '../notice/noticeDetail.php'
            // include '../myPage/requestList.php'
            // include '../myPage/requestDetail.php'
            // include '../myLecture/index.php'
            // include '../myLecture/lectureRetake.php'
            // include '../myLecture/lectureEnd.php'
            // include '../exam/interimExamIntro.php'
            // include '../exam/finalExamIntro.php'
            // include '../exam/taskExamIntro.php'
            // include '../exam/interimExam.php'
            // include '../exam/finalExam.php'
            // include '../exam/taskExam.php'
            // include '../exam/completeExam.php'
            include '../landing/index.php'
        ?>
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

    <script src="/dist/js/common.js"></script>
</body>

</html>