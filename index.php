<!doctype html>
<html lang="fa-IR" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="language" content="fa" />
    <meta name="document-type" content="Public" />
    <meta name="document-rating" content="General" />
    <meta name="resource-type" content="document" />
    <meta name="theme-color" content="#148fff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#148fff">
    <meta name="msapplication-navbutton-color" content="#148fff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="robots" content="noindex, nofollow">
    <base href="/">
    <link href="https://cdn.rawgit.com/rastikerdar/vazir-font/v24.2.0/dist/font-face.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

    <title>پخش کننده ویدیو HTML5</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="https://alirashidnahal.com/fun-projects/" title="پروژه‌هایی برای تفریح" rel="bookmark">خانه <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" type="button" data-toggle="modal" data-target="#aboutModal">درباره</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/alirashidnahal/online-html-player" target="_blank" title="این پروژه را در گیت ببینید">Git</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        اشتراک گذاری
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a target="_blank" class="dropdown-item" href="https://www.facebook.com/share.php?u=https://alirashidnahal.com/fun-projects/&amp;title=پروژه&zwnj;هایی برای تفریح" rel="nofollow noopener noreferrer" title="share on facebook">انتشار در فیسبوک</a>
                        <a target="_blank" class="dropdown-item" href="https://twitter.com/intent/tweet?status=پروژه&zwnj;هایی برای تفریح+https://alirashidnahal.com/fun-projects/" rel="nofollow noopener noreferrer" title="share on twitter">انتشار در توییتر</a>
                        <a target="_blank" class="dropdown-item" href="https://api.whatsapp.com/send?text=https://alirashidnahal.com/fun-projects/" rel="nofollow noopener noreferrer" title="share on whatsapp">انتشار در واتساپ</a>
                        <a target="_blank" class="dropdown-item" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://alirashidnahal.com/fun-projects/&amp;title=پروژه&zwnj;هایی برای تفریح&amp;source=علی رشیدنهال" rel="nofollow noopener noreferrer" title="share on linkedin">انتشار در لینکدین</a>
                        <a target="_blank" class="dropdown-item" href="https://telegram.me/share/url?url=https://alirashidnahal.com/fun-projects/&amp;text=پروژه&zwnj;هایی برای تفریح" rel="nofollow noopener noreferrer" title="share on telegram">انتشار در تلگرام</a>
                        <a target="_blank" class="dropdown-item" href="https://pinterest.com/pin/create/button/?url=https://alirashidnahal.com/fun-projects/&amp;media=" rel="nofollow noopener noreferrer" title="share on pinterest">انتشار در پینترست</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://alirashidnahal.com/donate/" title="حمایت مالی از این پروژه" target="_blank">حمایت مالی</a>
                </li>
            </ul>
        </div>
        <a class="navbar-brand" href="https://alirashidnahal.com/" title="">
            <img src="https://alirashidnahal.com/wp-content/themes/rashidnahal/assets/images/alirashidnahal-logo-48.png" width="48" height="48" class="d-inline-block" alt="">
            alirashidnahal.com
        </a>
    </nav>

    <section class="main-player">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="text-center text-info my-3">پخش کننده رسانه آنلاین</h1>
                    <div class="database-area">
                        <form class="form-group" method="post">
                            <div class="form-group mt-3">
                                <label for="filmurl">الصاق آدرس اینترنتی فیلم:</label>
                                <input type="url" class="form-control" id="filmurl" name="filmurl" placeholder="i.e. https://alirashidnahal.com/fun-projects/tv-stream/demo.mp4" required autofocus>
                            </div>
                            <div class="btn-group mx-4" role="group" aria-label="Basic example">
                                <button type="submit" class="btn btn-primary px-4 mx-3" id="playfilm" name="playfilm">پخش ویدیو</button>
                                <button type="reset" class="btn btn-danger px-4">پاک کردن فرم</button>
                            </div>
                        </form>
                        <?php if (isset($_POST['playfilm'])) {
                            $onlinefilmurl = $_POST['filmurl'];
                            echo "<p>در حال پخش آدرس:<br></p><a href='$onlinefilmurl' title='برای دانلود کلیک کنید'><code>$onlinefilmurl</code></a>";
                        } ?>
                    </div>
                </div>


                <div class="col-md-8">
                    <div class="player-area mt-3">
                        <video id="my-video-stream" controls autoplay loop buffered duration volume width="100%" height="auto" preload="metadata">
                            <source src="<?php if (isset($_POST['playfilm'])) {
                                                $onlinefilmurl = $_POST['filmurl'];
                                                echo "$onlinefilmurl";
                                            } else {
                                                echo "https://alirashidnahal.com/fun-projects/tv-stream/demo.mp4";
                                            } ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>

        <div class="bug-reporter">
            <button class="btn btn--chat js-chat">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M14,12H10V10H14M14,16H10V14H14M20,8H17.19C16.74,7.22 16.12,6.55 15.37,6.04L17,4.41L15.59,3L13.42,5.17C12.96,5.06 12.5,5 12,5C11.5,5 11.04,5.06 10.59,5.17L8.41,3L7,4.41L8.62,6.04C7.88,6.55 7.26,7.22 6.81,8H4V10H6.09C6.04,10.33 6,10.66 6,11V12H4V14H6V15C6,15.34 6.04,15.67 6.09,16H4V18H6.81C7.85,19.79 9.78,21 12,21C14.22,21 16.15,19.79 17.19,18H20V16H17.91C17.96,15.67 18,15.34 18,15V14H20V12H18V11C18,10.66 17.96,10.33 17.91,10H20V8Z" />
                </svg>
            </button>
            <div class="chatbox js-chatbox">
                <form action="reporter.php" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="user-ip" class="col-sm-3 col-form-label">آدرس IP شما:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" name="userip" value="<?php if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                                                                                                                $ip_address = $_SERVER['HTTP_CLIENT_IP'];
                                                                                                            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                                                                                                                $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
                                                                                                            } else {
                                                                                                                $ip_address = $_SERVER['REMOTE_ADDR'];
                                                                                                            }
                                                                                                            echo $ip_address; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user-browser" class="col-sm-3 col-form-label">نسخه مرورگر شما:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" name="user-browser" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user-http-code" class="col-sm-3 col-form-label">کد خطا:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" name="user-http-code" value="<?php echo http_response_code(); ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user-page-url" class="col-sm-3 col-form-label">صفحه کنونی شما:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" name="user-page-url" value="<?php echo $_SERVER['SCRIPT_NAME']; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user-protocol" class="col-sm-4 col-form-label">پروتکل http کنونی:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" name="user-protocol" value="<?php echo $_SERVER['SERVER_PROTOCOL']; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user-request-method" class="col-sm-4 col-form-label">متد درخواست شما:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" name="user-request-method" value="<?php echo $_SERVER['REQUEST_METHOD']; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user-massage">پیام شما:</label>
                        <textarea type="textarea" class="form-control" name="user-massage"></textarea>
                    </div>
                    <button type="submit" name="send-error" class="btn btn-primary">ارسال گزارش خطا</button>
                </form>
            </div>
        </div>
        <!--End of .bug-reporter -->

        <!-- Copyright -->
        <div class="badge-light fixed-bottom footer-copyright py-3 text-center"><span>© 2020 Copyright:</span>
            <a href="https://alirashidnahal.com/"> Ali Rashidnahal</a>
        </div>
        <!-- Copyright -->

    </footer><!-- Footer -->

    <!-- About Modal -->
    <div class="modal fade" id="aboutModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">درباره این نرم افزار</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2 class="text-center">Online TV Stream</h2>
                    <p>طراحی و توسعه: علی رشیدنهال<br />نسخه پایه: v1.3.0<br />فناوری&zwnj;های مورد استفاده:<br />PHP v7.3.3 | HTML v5 | CSS v3 | JavaScript | JQuery v3.4.1 | Bootstrap v4.4.1 | Google Font API (Lateef Arabic Font)</p>
                    <p>مرورگر مورد نیاز:<br />Chrome v49 | Firefox v30 | Safari v10 | Opera v18 | Internet Explorer v10 | Microsoft Edge v75 and newer</p>
                    <p>لایسنس:<br />GNU General Public License v2 or later</p>
                    <p class="text-justify">این برنامه مثل وردپرس و سایر اپلیکیشن ها به زبان PHP تحت لایسنس GPL ارائه میشه که شما هم میتونید با استفاده از اون یه چیز خارق العاده دیگه بسازید، باهاش خوش باشید؛ و به هر روشی برای انتقال دانش منتشرش کنید. (البته که ذکر منبع یکی از روش هایی هست که میتونید از این پروژه حمایت کنید)</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ./About Modal -->

    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
    <script>
        const btn = document.querySelector(".js-chat");
        const chatBox = document.querySelector(".js-chatbox");
        const form = document.querySelector(".js-chatbox__form");

        btn.addEventListener("click", () => {
            chatBox.classList.toggle("chatbox--is-visible");
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>