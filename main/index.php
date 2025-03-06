<!DOCTYPE html>
<html lang="ko">

<head>
    <title>국민내일배움카드 - 모두를 위한 교육, 모두의교육그룹</title>
    <?
    // 모바일 체크 함수
    function isMobile() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }

    // 모바일 기기 체크 및 리다이렉션
    if(isMobile()) {
        header('Location: /main/m/index.php');
        exit;
    }
    ?>
    <? include '../include/headInfo.php' ?>
</head>

<body>
    <div id="layout">
        <? include '../include/header.php' ?>
        <? include './main.php' ?>
        <? include '../include/footer.php' ?>
        <? include '../include/script.php' ?>
    </div>
</body>

</html>