<?php
//下载地址：http://phpqrcode.sourceforge.net/
include_once 'phpqrcode/qrlib.php';

//public static function png($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4, $saveandprint=false) 

$action = $_GET['action'];
switch ($action) {
    case 'vcard':
        $content = "BEGIN:VCARD\n";
        $content .= "VERSION:2.1\n";
        $content .= "N:蒋\n";
        $content .= "FN:大庆\n";
        $content .= "ORG:北京翼鸥教育有限公司\n";
        $content .= "TEL;WORK;VOICE:18514429019\n";
        $content .= "TEL;HOME;VOICE:18514429019\n";
        $content .= "TEL;TYPE=cell:18514429019\n";
        $content .= "EMAIL:junderking@163.com\n";
        $content .= "URL:http://www.imooc.com\n";
        $content .= "END:VCARD\n";
        QRcode::png($content);
        break;
    case 'scan':
        //brew install imagemagick
        //brew install zbar
        //https://github.com/mkoppanen/php-zbarcode
    default:
        QRcode::png('www.baidu.com');
        break;
}
