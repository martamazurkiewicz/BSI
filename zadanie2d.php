<?php require 'redirection.php'; ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Zajęcia 2d</title>
    <style>
        img {
            width: 100%;
        }

        .row {
            /*display: inline-block;*/
            display: flex;
            width: 98%;
            margin-top: 1%;
            margin-bottom: 1%;
        }

        .label {
            /* 100-6=94 94/3=31 */
            width: 31%;
            float: left;
            margin-left: 1%;
            margin-right: 1%;
        }

        p {
            text-align: center;
        }
    </style>
</head>

<body>
        <div class="row">
            <div class="label">
                <img src="cats\100.jpg">
                <p>100 - Continue</p></img>
            </div>

            <div class="label">
                <img src="cats\101.jpg">
                <p>101 - Switching Protocols</p></img>
            </div>

            <div class="label">
                <img src="cats\204.jpg">
                <p>204 - No Content</p></img>
            </div>
        </div>
        <div class="row">
            <div class="label">
                <img src="cats\301.jpg">
                <p>301 - Moved Permanently</p></img>
            </div>

            <div class="label">
                <img src="cats\421.jpg">
                <p>421 - Misdirected Request</p></img>
            </div>

            <div class="label">
                <img src="cats\404.jpg">
                <p>404 - Not Found</p></img>
            </div>
        </div>
        <div class="row">
            <div class="label">
                <img src="cats\413.jpg">
                <p>413 - Request Entity Too Large</p></img>
            </div>

            <div class="label">
                <img src="cats\426.jpg">
                <p>426 - Upgrade Required</p></img>
            </div>

            <div class="label">
                <img src="cats\429.jpg">
                <p>429 - Too Many Requests</p></img>
            </div>
        </div>
        <p>Zdjęcia pochodzą ze strony <a href="https://http.cat/">https://http.cat/</a>, będącej częścią repozytorium <a href="https://github.com/httpcats/http.cat">https://github.com/httpcats/http.cat</a>
        objętego licencją <a href="https://github.com/httpcats/http.cat/blob/master/LICENSE">MIT License</a>.</p>
</body>

</html>