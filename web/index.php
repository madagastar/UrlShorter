<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title><?php echo TITLE ?></title>
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="author" content="xcsoft,contact@xcsoft.top">
    <meta name="keywords" content="网址缩短,urlshorter,xcsoft">
    <meta name="description" content="一款极简的网址缩短">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.layuicdn.com/layer/theme/default/layer.css?v=3.5.1" id="layuicss-layer">
    <style>

        body {
              background: url('assets/pic/background.png');
              background-size: cover;/* 或者使用'cover''contain' '100% 100%' 如果你想让图像完全铺满而不保持原有的宽高比 */
        }

        .shortUrl {
            cursor: pointer;

        .card,
        nav {
            opacity: 0.55;
        }

        }
    </style>
    <!-- Javascript -->
    <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery/3.6.0/jquery.min.js" type="application/javascript"></script>
    <script src="https://lf9-cdn-tos.bytecdntp.com/cdn/expire-1-M/bootstrap/4.6.0/js/bootstrap.bundle.min.js" type="application/javascript"></script>
    <script src="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/clipboard.js/2.0.10/clipboard.min.js"></script>
    <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/lrsjng.jquery-qrcode/0.18.0/jquery-qrcode.min.js"></script>
    <script src="https://www.layuicdn.com/layer/layer.js"></script>
    <script src="assets/js/main.js?v=1.01"></script>

</head>


<body>
    <div class="d-none d-sm-block" style='height:10vh'></div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-3 align-self-end">
                <div class="card vh-auto shadow bg-white rounded px-1">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="text-muted h6" href='//nav.ecomine.tech' target="_blank"><?php echo TITLE ?></a></li>
                        <li class="list-group-item"><a class="text-muted h6" href='//blog.ecomine.tech' target="_blank">Created by Ecomine.tech</a></li>
                        <li class="list-group-item"><a class="text-muted h6" href='//blog.xsot.cn' target="_blank">Based on original work by 星辰日记</a></li>

                    </ul>
                </div>
            </div>

            <div class="col-md-1 py-2"></div>

            <div class="col-md-8">
                <div class="card vh-auto shadow bg-white rounded px-4">
                    <form class='py-4 px-2 mainFrom'>
                        <div class="form-group">
                            <label>长链接</label>
                            <input type="email" class="form-control url">
                        </div>
                        <div class="form-group">
                            <label>自定义短链</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><?php echo WEBURL ?></span>
                                    </div>
                                    <input type="text" class="form-control short">
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary submit" disabled='disabled'>请稍等</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="successModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">缩短成功</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-3">
                    <div class='qrcode d-flex justify-content-center'></div>
                    <p class='h5 d-flex justify-content-center pt-2'>
                      <span class='shortUrl' id='shortUrl'></span>
                      <button class="btn btn-secondary btn-sm ml-2" id="copyButton" data-clipboard-target="#shortUrl">复制</button>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
                </div>
            </div>
        </div>
    </div>

</body>

<footer class="fixed-bottom pb-2 px-5">
    <p class="text-muted h6">© 2021 <a class="text-muted h6" href="//xsot.cn">xcsoft</a> copyright</p>
</footer>

<script>
$(document).ready(function() {
    // Initialize Clipboard.js
    var clipboard = new ClipboardJS('#copyButton');

    clipboard.on('success', function(e) {
        console.log(e);
        alert('复制成功！');
        e.clearSelection();
    });

    clipboard.on('error', function(e) {
        console.log(e);
        alert('复制失败，请手动复制。');
    });

});
</script>

</html>
