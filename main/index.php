<!DOCTYPE html>
<html lang="ko">

<head>
    <title>국민내일배움카드 - 모두를 위한 교육, 모두의교육그룹</title>
    <? include '../include/headInfo.php' ?>

</head>

<body>
    <div id="layout">
        <div id="header-container"> </div>
        <?
            // include './include/mainContainer.php' // 메인 페이지
            // include '../form/join_terms.php' // 회원가입 약관동의
            // include '../form/join_userInfo.php'; // 회원가입 정보입력
            // include '../form/join_complete.php'; // 회원가입 완료
            // include '../form/login.php'; // 로그인
            // include '../lecture/index.php'; // 강의 목록
            // include '../lecture/lectureDetail.php'; // 강의 상세
            // include '../cart/index.php'; // 장바구니
            // include '../myPage/index.php'; // 마이페이지
            // include '../myPage/orderList.php'; // 주문내역/배송조회
            // include '../myPage/orderDetailList.php'; // 주문상세내역
            //include '../myPage/refund.php'; // 취소/환불
            // include '../form/inquiry.php'; // 문의하기
            // include '../notice/index.php' // 공지사항
            // include '../notice/noticeDetail.php' // 공지사항 상세
            include '../myPage/requestList.php' // 상담신청이력
            // include '../myPage/requestDetail.php' // 상담신청이력 상세내역
            // include '../myLecture/index.php' // 진행중인과정
            // include '../myLecture/lectureRetake.php' // 재응시과정
            // include '../myLecture/lectureEnd.php' // 학습종료과정
            // include '../exam/interimExamIntro.php' // 중간평가 동의
            // include '../exam/finalExamIntro.php' // 최종평가 동의
            // include '../exam/taskExamIntro.php' // 과제평가 동의
            // include '../exam/interimExam.php' // 중간평가
            // include '../exam/finalExam.php' // 최종평가
            // include '../exam/taskExam.php' // 과제평가
            // include '../exam/completeExam.php' // 완료 페이지
            // include '../landing/index.php' // 랜딩페이지
        ?>
        <div class="footer-container">
            <? include '../include/footer.php' ?>
        </div>
    </div>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/dist/js/common.js"></script>
</body>

</html>