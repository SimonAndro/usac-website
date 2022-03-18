<?php
function getRoute($request)
{
    $route = basename($_SERVER['REQUEST_URI']); 
    $route = ltrim(strtok($route, '?'), '/');
    return $route;
}

function path($path="")
{
    return __DIR__."/../".$path;
}

function getAppConfig($key)
{
    if(is_file(__DIR__."/LOCAL.DEV"))
    {
        $config = include("app_config.dev.php");
    }else{
        $config = include("app_config.php");
    }
    
    return $config[$key];
}

function loadAsset($fileName,$uploads=false)
{

    if($uploads)
    {
        if(file_exists(path().$fileName))
        {
            $baseUrl = getAppConfig('base-url');
            $file = $baseUrl.$fileName;
            return $file;
        }

    }
    
    if(file_exists(path("/app/assets/").$fileName))
	{
        $baseUrl = getAppConfig('base-url');
        $file = $baseUrl. 'app/assets/' . $fileName;
		return $file;
	}else{
        return "";
    }
}

function loadTemplate($templateFileName, $variables = []) {
    extract($variables);

    $baseUrl = getAppConfig('base-url');

    ob_start();
    include  path('/app/views/').$templateFileName;

    return ob_get_clean();
}

function sanitizeString ($string){
    $string = htmlspecialchars($string);
    return $string;
}

function l($string)
{
    return $string;
}

function inputFile($name) {
    if(isset($_FILES[$name])) {
        if(is_array($_FILES[$name]['name'])) {
            $files = array();
            $index = 0;
            foreach($_FILES[$name]['name'] as $n) {
                if($_FILES[$name]['name'] != 0) {
                    $files[] = array(
                        'name' => $n,
                        'type' => $_FILES[$name]['type'][$index],
                        'tmp_name' => $_FILES[$name]['tmp_name'][$index],
                        'error' => $_FILES[$name]['error'][$index],
                        'size' => $_FILES[$name]['size'][$index]
                    );
                }
                $index++;
            }

            if(empty($files)) return false;
            return $files;
        } else {
            if(isset($_FILES[$name]['size']) && $_FILES[$name]['size'] == 0) return false;
            return $_FILES[$name];
        }
    }
    return false;
}


function format_bytes($bytes, $force_unit = NULL, $format = NULL, $si = TRUE)
{
// Format string
    $format = ($format === NULL) ? '%01.2f %s' : (string)$format;

    // IEC prefixes (binary)
    if ($si == FALSE OR strpos($force_unit, 'i') !== FALSE) {
        $units = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB');
        $mod = 1024;
    } // SI prefixes (decimal)
    else {
        $units = array('B', 'kB', 'MB', 'GB', 'TB', 'PB');
        $mod = 1000;
    }

    // Determine unit to use
    if (($power = array_search((string)$force_unit, $units)) === FALSE) {
        $power = ($bytes > 0) ? floor(log($bytes, $mod)) : 0;
    }

    return sprintf($format, $bytes / pow($mod, $power), $units[$power]);
}

function isImage($source) {
    $source = is_array($source) ? $source['name'] : $source;
    $name = pathinfo($source);
    $ext = isset($name['extension']) ? strtolower($name['extension']) : '';
    return in_array($ext, array('jpg','jpeg','png','gif'));
}


function createThumbnail($movie, $path)
{
    // $sec = 10;
    //$thumbnail = md5(time()) . "." . "png";
    //$path  = $path. $thumbnail;
    // $ffmpeg = FFMpeg\FFMpeg::create();
    // $video = $ffmpeg->open($movie);
    // $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds($sec));
    // $frame->save($path);
    // return $thumbnail;
    return "//uploads//default/default-cover.png";

}


function countMagnitude($num)
{
    if($num < 1000)
    {
        return [
            "num" => $num ,
            "mag"=>""
        ];
    }else
    {
        if($num < 1000000)
        {
            return [
                "num" => floor($num/1000) ,
                "mag"=>"k"
            ];
        }else{

            if($num<1000000000)
            {
                return [
                    "num" => floor($num/1000000) ,
                    "mag"=>"m"
                ];
            }else{
                if($num<1000000000000)
                {
                    return [
                        "num" => floor($num/1000000000) ,
                        "mag"=>"b"
                    ];
                }else{
                   
                    return [
                        "num" => floor($num/1000000000000) ,
                        "mag"=>"t"
                    ];
                    
                }
            }
            
        }
    }

}

function howOld($created_at)
{
    $now = time();
    $dif = $now - $created_at;
    if($dif < 60)
    {
        $age['num'] = $dif;
        $age['mag'] = 's';
    }else
    {
        $dif = $dif/60;
        if($dif < 60)
        {
            $age['num'] = $dif;
            $age['mag'] = 'm';
        }else{
            $dif = $dif/60;
            if($dif<24)
            {
                $age['num'] = $dif;
                $age['mag'] = 'h';
            }else{
                $dif = $dif/24;
                if($dif<30) // assume month is 30 days
                {
                    $age['num'] = $dif;
                    $age['mag'] = 'd';
                }else{
                    $dif = $dif/12; 
                    if($dif<12)
                    {
                        $age['num'] = $dif;
                        $age['mag'] = 'month(s)';
                    }else{
                        $age['num'] = $dif;
                        $age['mag'] = 'year(s)';
                    }
                }
            }
        }
    }
    $age['num'] = floor($age['num']);
    return $age;
}

  
function dump_to_file($things) //debuging
{ 
  
    if(file_exists("debug!.txt"))
    {
        file_put_contents("debug!.txt",
        date("H:i:s")."->".print_r($things,true)."\n",FILE_APPEND | LOCK_EX);
    }
    
}

/**
 * Validation
 */
function validate_email()
{
    $valid = true;
    $errors = array();

    //But if any of the fields have been left blank, set $valid to false
    if (empty($val['email'])) {
        $valid = false;
        $errors[] = 'Email cannot be blank';
    }
    else if (filter_var($val['email'], FILTER_VALIDATE_EMAIL) == false) {
        $valid = false;
        $errors[] = 'Invalid email address';
    }
    else if(strlen($val['email']) > 30) 
    {
        $valid = false;
        $errors[] = 'Email should be less than 30 character';
    }

    return $errors;
}

function sendMail($mail_to,$subject,$body)
{
    //include the php emailer library
    require __DIR__.'/../php/phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer();

    //debugging phpmailer
    // $mail->SMTPDebug = 4;
    // $mail->Debugoutput = "echo";

    //email setup
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    
    $mail->Host = getAppConfig("mail_server");
    $mail->Port = getAppConfig("stmp_port");

    $mail->Username = getAppConfig("site_email");
    $mail->Password = getAppConfig("site_mailpass");
    $mail->AddAddress($mail_to);
    $mail->FromName = getAppConfig("site_title");

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
  
    $mail->From = $mail->Username;

    dump_to_file($mail);

    return $mail->Send();
}