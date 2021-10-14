<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
move_uploaded_file($_FILES["data"]["tmp_name"], $_FILES["data"]["name"]);
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
      html {
         background: linear-gradient(-135deg, #1e90ff, #00ff7f) fixed;
      }
</style>
<title>c-upload</title>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
업로드할 파일을 선택해주세요(한도:2.5GB)<br>please select file to upload(limit:2.5GB)<br><br>
<form enctype="multipart/form-data">
<input type="file" name="data">
<input id="button_send" type="submit">
</form>
<br />
<br />
<div class="progress-label"></div>
<div id="progressbar"></div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
$(function() {
var progressbar = $("#progressbar");
var progressLabel = $(".progress-label");
progressbar.progressbar({
value: true,
change: function() {
$("#button_send").prop("disabled", true);
progressLabel.text("Current Progress: " + progressbar.progressbar("value") + "%");
},
complete: function() {
$("#button_send").prop("disabled", false);
progressLabel.text("Complete!");
$(".ui-dialog button").last().trigger("focus");
}
});
$('form').ajaxForm({
url: "upload.php",
type: "POST",
beforeSubmit: function(arr, $form, options) {
progressbar.progressbar( "value", 0 );
},
uploadProgress: function(event, position, total, percentComplete) {
progressbar.progressbar( "value", percentComplete );
},
success: function(text, status, xhr, element) {
progressbar.progressbar( "value", 100 );
}
});
});
</script>
*파일 용량이 클 경우 오랜 시간이 걸릴 수 있습니다.파일 용량이 클 시 관리자에게 직접문의,혹은 FTP를 사용해주세요.<br>*Large file size can take a long time.If the file size is large, please contact the administrator directly or use FTP.<br><br><A href="https://c-cloud.kro.kr">서버 바로가기
</body>
</html>