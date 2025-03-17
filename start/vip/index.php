<?php
function isMobile() {
    return preg_match('/(android|iphone|ipad|ipod|mobile|blackberry|webos|opera mini|opera mobi|iemobile|windows phone|kindle|silk|playbook|bb10|nokia|symbian|palm|fennec|maemo|meego|bada|tizen|sailfish|jolla|kaios|webos|mobile)/i', $_SERVER['HTTP_USER_AGENT']);
}

if (isMobile()) {
    echo '<script type="text/javascript">
        alert("建议使用电脑端进行视频解析，否则可能导致视频无法正常解析播放，手机端可使用API直接进行解析播放");
        window.location.href = "index.html";
    </script>';
} else {
    header("Location: index.html");
    exit();
}
?>