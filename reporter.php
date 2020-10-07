<?php
if (isset($_POST['send-error'])) {
    $user_ip = $_POST["user-ip"];
    $user_browser = $_POST["user-browser"];
    $user_http_code = $_POST["user-http-code"];
    $user_page_url = $_POST["user-page-url"];
    $user_protocol = $_POST["user-protocol"];
    $user_request_method = $_POST["user-request-method"];
    $user_massage = $_POST["user-massage"];
}
$admin_mail = 'alirashidnahal@yahoo.com';
$mail_subject = 'Bug Reporter > TV Stream';
$mail_message = '
<html lang="fa" dir="rtl">
<head>
  <title>Bug Reporter</title>
</head>
<body>
  <h1 style="text-align: center">Report a bug From Tv Stream</h1>
  <figure style="text-align: center">
    <table style="text-align: center;font-size:14pt">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>اطلاعات خطا</th>
            <th>توضیحات</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>آدرس IP کاربر</td>
            <td>'.$user_ip.'</td>
        </tr>
        <tr>
            <td>2</td>
            <td>نسخه مرورگر کاربر</td>
            <td>'.$user_browser.'</td>
        </tr>
        <tr>
            <td>3</td>
            <td>کد HTTP</td>
            <td>'.$user_http_code.'</td>
        </tr>
        <tr>
            <td>4</td>
            <td>آدرس رخ دادن خطا</td>
            <td>'.$user_page_url.'</td>
        </tr>
        <tr>
            <td>5</td>
            <td>پروتکل HTTP</td>
            <td>'.$user_protocol.'</td>
        </tr>
        <tr>
            <td>6</td>
            <td>متد درخواست HTTP</td>
            <td>'.$user_request_method.'</td>
        </tr>
        <tr>
            <td>7</td>
            <td>پیام کاربر</td>
            <td>'.$user_massage.'</td>
        </tr>
        </tbody>
    </table>
    <figcaption>این ایمیل بصورت خودکار و توسط سامانه گزارشگر خطا ایجاد شده است.</figcaption>
</figure>
</body>
</html>
';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = 'To: Ali Rashidnahal <alirashidnahal@yahoo.com>';
$headers[] = 'From: Bug Reporter <admin@alirashidnahal.com>';
$headers[] = 'X-Mailer: PHP/' . phpversion();

mail($admin_mail, $mail_subject, $mail_message, implode("\r\n", $headers));