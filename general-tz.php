<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>VPS Usage</title>
        <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-fluid py-2">
            <div class="row">
                <div class="col">
                    <div class="alert alert-warning" role="alert"><b>注意</b>显示的内容每<span id="refresh_time"></span>秒刷新</div>
                    <div class="alert alert-info" role="alert" id="general_info">-</div>
                    <section id="mainchart"></section>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="card" id="ram">
                        <div class="card-header">
                            内存用量
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-danger">Usage: <span class="usage">0</span></li>
                            <li class="list-group-item list-group-item-info">Total: <span class="total">0</span> GB</li>
                            <li class="list-group-item list-group-item-success">Free: <span class="free">0</span> GB</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card" id="hdd">
                        <div class="card-header">
                            磁盘用量
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-danger">Usage: <span class="usage">0</span> GB</li>
                            <li class="list-group-item list-group-item-info">Total: <span class="total">0</span> GB</li>
                            <li class="list-group-item list-group-item-success">Free: <span class="free">0</span> GB</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card" id="network">
                        <div class="card-header">
                            网络
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Received: <span class="rec">0</span></li>
                            <li class="list-group-item">Sent: <span class="sent">0</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="cpu">
                        <div class="card-header">
                            中央处理器
                        </div>
                        <ul class="list-group list-group-flush"></ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div id="gaugeUsage"></div>
                </div>
            </div>
        </div>

        <script src="jquery-3.6.0.min.js"></script>
        <script src="highstock.js"></script>
        <script src="highcharts-more.js"></script>
        <script src="solid-gauge.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>