<?php 
function funText($string)
{
    $arrStr = str_split($string, 1);
    foreach ($arrStr as $let) {
        echo '<span>'.$let.'</span>';
    }
}
 
function watCreate($im)
{
    $pathImg = $im;
    $pathCopy = preg_replace('#(.(?i)(jpg|jpeg|png))$#', 'copy$1', $im);
    $pic = explode('waterMark2/', $im);


    if (file_exists($pathCopy)) {
        funText($im);
        echo ' -  <span style="color:tomato; font-size: 1.2em">уже был добавлен!</span><br>';
        echo '<img src="' . $pic[1] . '" height="500" alt="Результат"><br><br>';

        return;
    }

    // $stamp = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . '/logo/logo-hitec.png');
    // $stamp = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . '/logo/logo-hitec-min.png');
    // $stamp = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . '/logo/logo-hitec-sm_text.png');
    // $stamp = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . '/logo/logo_hitek-min_opacity.png');
    $stamp = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . '/logo/logo.png');
    $sx = imagesx($stamp);
    $sy = imagesy($stamp);

    switch (exif_imagetype($im)) {
        case 3:
            $img = imagecreatefrompng($pathImg);
            $iy = imagesy($img);
            if ($iy < 300) {
                return;
            }
            $ix = imagesx($img);
            imagepng($img, $pathCopy, 8);
            imagecopy($img, $stamp, $ix / 2 - $sx / 2, $iy / 2 - $sy / 2, 0, 0, $sx, $sy);
            imagepng($img, $pathImg, 8);
            break;
        case 2:
            $img = imagecreatefromjpeg($pathImg);
            $ix = imagesx($img);
            $iy = imagesy($img);
            imagejpeg($img, $pathCopy, 80);
            imagecopy($img, $stamp, $ix / 2 - $sx / 2, $iy / 2 - $sy / 2, 0, 0, $sx, $sy);
            imagejpeg($img, $pathImg, 80);
            break;
    }

    imagedestroy($stamp);
    imagedestroy($img);
    funText($im);
    echo ' - <span style="color:LawnGreen; font-size: 1.2em">успешно добавлен!</span><br>';
    echo '<img src="' . $pic[1] . '" height="500" alt="Результат"><br><br>';
}

function watUpdate($im)
{
    $pathImg = $im;
    $pathCopy = preg_replace('#(.(?i)(jpg|jpeg|png))$#', 'copy$1', $im);
    $pic = explode('waterMark2/', $im);


    if (!file_exists($pathCopy)) {
        watCreate($im);
        return;
    }

    $stamp = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . '/logo/logo-hitec.png');
    // $stamp = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . '/logo/logo-hitec-min.png');
    // $stamp = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . '/logo/logo-hitec-sm_text.png');
    // $stamp = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . '/logo/logo_hitek-min_opacity.png');
    // $stamp = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . '/logo/logo.png');
    $sx = imagesx($stamp);
    $sy = imagesy($stamp);

    switch (exif_imagetype($im)) {
        case 3:
            $img = imagecreatefrompng($pathCopy);
            $iy = imagesy($img);
            if ($iy < 300) {
                return;
            }
            $ix = imagesx($img);
            imagecopy($img, $stamp, $ix / 2 - $sx / 2, $iy / 2 - $sy / 2, 0, 0, $sx, $sy);
            imagepng($img, $pathImg, 8);
            break;
        case 2:
            $img = imagecreatefromjpeg($pathCopy);
            $ix = imagesx($img);
            $iy = imagesy($img);
            imagecopy($img, $stamp, $ix / 2 - $sx / 2, $iy / 2 - $sy / 2, 0, 0, $sx, $sy);
            imagejpeg($img, $pathImg, 80);
            break;
    }

    imagedestroy($stamp);
    imagedestroy($img);
    funText($im);
    echo ' - <span style="color:LawnGreen; font-size: 1.2em">успешно добавлен!</span><br>';
    echo '<img src="' . $pic[1] . '" height="500" alt="Результат"><br><br>';
}

function watRemove($im)
{
    // $pathImg = $_SERVER['DOCUMENT_ROOT'].'/'.$im;
    $pathImg = $im;
    $pathCopy = preg_replace('#(.(?i)(jpg|jpeg|png))$#', 'copy$1', $im);
    $pic = explode('waterMark2/', $im);

    if (!file_exists($pathCopy)) {
        funText($im);
        echo ' -  <span style="color:tomato; font-size: 1.2em">уже отсутствовал!</span><br>';
        echo '<img src="' . $pic[1] . '" height="500" alt="Результат"><br><br>';

        return;
    }

    switch (exif_imagetype($im)) {
        case 3:
            $img = imagecreatefrompng($pathCopy);
            imagepng($img, $pathImg, 8);
            break;
        case 2:
            $img = imagecreatefromjpeg($pathCopy);
            imagejpeg($img, $pathImg, 80);
            break;
    }

    imagedestroy($img);
    unlink($pathCopy);
    funText($im);
    echo ' - <span style="color:LawnGreen; font-size: 1.2em">успешно удален!</span><br>';
    echo '<img src="' . $pic[1] . '" height="500" alt="Результат"><br><br>';
}

function prbr($it)
{
    echo '<pre>';
    echo '<br>';
    print_r($it);
}

function findFil($act, $fil)
{
    $dir = $_SERVER['DOCUMENT_ROOT'] . '/upload';

    function sDir($dir, $act, $fil)
    {
        $files = array_diff(scandir($dir), ['..', '.']);
        foreach ($files as $val) {
            $path = $dir . '/' . $val;
            if (is_file($path)) {
                if (!preg_match('#(copy.(?i)(jpg|jpeg|png))$#', $path) && preg_match('#(.(?i)(jpg|jpeg|png))$#', $path) && preg_match('#' . $fil . '(.(?i)(jpg|jpeg|png))$#', $path)) {
                    $pic = explode('waterMark2/', $path);
                    if ($act == 'create') {
                        watCreate($path);
                    } elseif ($act == 'remove') {
                        watRemove($path);
                    } elseif ($act == 'update') {
                        watUpdate($path);
                    } else {
                        funText($path);
                        echo '<br><img src="' . $pic[1] . '" height="500" alt="Результат"><br><br>';
                    }
                }
            } elseif (is_dir($path)) {
                sDir($path, $act, $fil);
            }
        }
    }

    sDir($dir, $act, $fil);
}

$action = $_GET['action'] ? $_GET['action'] : '';
$file = $_GET['file'] ? $_GET['file'] : '';

findFil($action, $file); 

