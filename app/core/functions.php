<?php

function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function isApp()
{
    return false;
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == "apppackagename")
        return true;
}

function show($urlContent)
{
    echo "<pre>";
    print_r($urlContent);
    echo "</pre>";
}

function esc($str)
{
    return htmlspecialchars($str);
}

function redirect($path)
{
    header("Location: " . ROOT . $path);
    die;
}

function greeting_msg()
{
    $hour = date('H');
    if ($hour >= 18) {
        $greeting = "Good Evening";
    } elseif ($hour >= 12) {
        $greeting = "Good Afternoon";
    } elseif ($hour < 12) {
        $greeting = "Good Morning";
    }

    return $greeting;
}

function errorTemp($tempData = [])
{
    return '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . ucwords($tempData['title']) . '</title>
            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
            <link rel="stylesheet" href="' . ROOT . 'public/assets/css/bootstrap.min.css">
        </head>
        <body class="bg-light">
            <div class="container">
                <div class="col-md-9 mt-5 mx-auto">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header h4 text-muted bg-transparent">' . ucwords($tempData['title']) . '</div>
                        <div class="card-body">' . ucfirst($tempData['body']) . '</div>
                    </div>
                </div>
            </div>
        </body>
        </html>
    ';
}

function tempLoad($temp = "")
{
    return LIB_PATH . "app/views/common/templates/" . $temp . ".view.php";
}

function incFile($incFile = "")
{
    $incFile = LIB_PATH . 'app/views/common/inc/' . $incFile . '.inc.php';
    if (file_exists($incFile)) {
        return $incFile;
    }
}
