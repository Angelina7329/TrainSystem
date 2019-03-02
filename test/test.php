<html>
<body>
<form  action = "test.php" method = "post">
<p>Please input the string.
<input type="text" name="strings">
</p>
<input type="submit" value="Submit" />
</form>
</body>
</html>



<?php

//echo dirname(_FILE_);

if($_SERVER['REQUEST_METHOD']=='POST'){
	$string =$_POST['strings'];
	
	define("AVATAR_SIZE",           '80');
define("WAVATAR_BACKGROUNDS",   '4');
define("WAVATAR_FACES",         '11');
define("WAVATAR_BROWS",         '8');
define("WAVATAR_EYES",          '13');
define("WAVATAR_PUPILS",        '11');
define("WAVATAR_MOUTHS",        '19');
define("WAVATAR_BLANK",        'parts/blank.png');
define('ABSPATH',dirname(__FILE__).'/');

function wavatar_build_blank (){

    if (file_exists (WAVATAR_BLANK))
        return;
    $avatar = imagecreatetruecolor (1, 1);
    $bg = imagecolorallocate ($avatar, 255, 255, 255);
    imagefill($avatar, 0, 0, $bg);
    imagepng($avatar, WAVATAR_BLANK);
    imagedestroy($avatar);
    
}







function wavatar_get ($email)
{

    //if ($email == '') {   
      //      wavatar_build_blank ();
        //    return WAVATAR_BLANK;
   // }
    $md5 = md5($email);
    $seed = substr ($md5, 0, 17);
    $size = AVATAR_SIZE;
   
    if (function_exists ("imagecreatetruecolor")) {
        //make sure the cache directory is available
        $dir = "des";
        $localdir = ABSPATH.$dir;
        if (!file_exists ($localdir)) // && !wp_mkdir_p ($localdir)
            return;
        $dest = $localdir . "/$seed.png";//file name !!!
        if (!file_exists ($dest))
            wavatar_build ($seed, $dest, $size);
    } else //image functions not available
        $url == '';
        return $url;

}




function wavatar_build ($seed, $filename, $size)
{

    //look at the seed (an md5 hash) and use pairs of digits to determine our
    //"random" parts and colors.
    $face =         1 + (hexdec (substr ($seed,  1, 2)) % (WAVATAR_FACES));
    $bg_color =         (hexdec (substr ($seed,  3, 2)) % 240);
    $fade =         1 + (hexdec (substr ($seed,  5, 2)) % (WAVATAR_BACKGROUNDS));
    $wav_color =        (hexdec (substr ($seed,  7, 2)) % 240);
    $brow =         1 + (hexdec (substr ($seed,  9, 2)) % (WAVATAR_BROWS));
    $eyes =         1 + (hexdec (substr ($seed, 11, 2)) % (WAVATAR_EYES));
    $pupil =        1 + (hexdec (substr ($seed, 13, 2)) % (WAVATAR_PUPILS));
    $mouth =        1 + (hexdec (substr ($seed, 15, 2)) % (WAVATAR_MOUTHS));
    // create backgound
    $avatar = imagecreatetruecolor (AVATAR_SIZE, AVATAR_SIZE);
    //Pick a random color for the background
    $c = wavatar_hsl ($bg_color, 240, 50);
    $bg = imagecolorallocate ($avatar, $c[0], $c[1], $c[2]);
    imagefill($avatar, 1, 1, $bg);
    $c = wavatar_hsl ($wav_color, 240, 170);
    $bg = imagecolorallocate ($avatar, $c[0], $c[1], $c[2]);
    //Now add the various layers onto the image
    wavatar_apply_image ($avatar, "fade$fade");
    wavatar_apply_image ($avatar, "mask$face");
    imagefill($avatar, (int)(AVATAR_SIZE / 2),(int)(AVATAR_SIZE / 2),$bg);
    wavatar_apply_image ($avatar, "shine$face");
    wavatar_apply_image ($avatar, "brow$brow");
    wavatar_apply_image ($avatar, "eyes$eyes");
    wavatar_apply_image ($avatar, "pupils$pupil");
    wavatar_apply_image ($avatar, "mouth$mouth");
    //resize if needed
    if ($size != AVATAR_SIZE) {
        $out = imagecreatetruecolor($size,$size);
        imagecopyresampled ($out,$avatar, 0, 0, 0, 0, $size, $size, AVATAR_SIZE, AVATAR_SIZE);
        imagepng($out, $filename);
        imagedestroy($out);
        imagedestroy($avatar);
    } else {
        imagepng($avatar, $filename);
        imagedestroy($avatar);
    }

}







function wavatar_clamp ($v)
{
    return $v < 0 ? 0 : ($v > 255 ? 255 : $v);
}


function wavatar_hsl($h, $s, $l)
{

    if ($h>240 || $h<0 || $s>240 || $s<0 || $l>240 || $l<0)
        return array(0,0,0);
    if ($h<=40) {
        $R=255;
        $G=(int)($h/40*256);
        $B=0;
    } elseif ($h>40 && $h<=80) {
        $R=(1-($h-40)/40)*256;
        $G=255;
        $B=0;
    } elseif ($h>80 && $h<=120) {
        $R=0;
        $G=255;
        $B=($h-80)/40*256;
    } elseif ($h>120 && $h<=160) {
        $R=0;
        $G=(1-($h-120)/40)*256;
        $B=255;
    } elseif ($h>160 && $h<=200) {
        $R=($h-160)/40*256;
        $G=0;
        $B=255;
    } elseif ($h>200) {
        $R=255;
        $G=0;
        $B=(1-($h-200)/40)*256;
    }
    $R=$R+(240-$s)/240*(128-$R);
    $G=$G+(240-$s)/240*(128-$G);
    $B=$B+(240-$s)/240*(128-$B);
    if ($l<120) {
        $R=($R/120)*$l;
        $G=($G/120)*$l;
        $B=($B/120)*$l;
    } else {
        $R=$l*((256-$R)/120)+2*$R-256;
        $G=$l*((256-$G)/120)+2*$G-256;
        $B=$l*((256-$B)/120)+2*$B-256;
    }
    return array((int)wavatar_clamp ($R),(int)wavatar_clamp($G),(int)wavatar_clamp($B));

}


//*-----------------------------------------------------------------------------
//Helper function for building a wavatar.  This loads an image and adds it to 
//our composite using the given color values.
//-----------------------------------------------------------------------------*

function wavatar_apply_image ($base, $part)
{

    $file = dirname(__FILE__).'/parts/' . $part . '.png';
    $im = @imagecreatefrompng($file);
    if(!$im)
        return;
    imagecopy($base,$im, 0, 0, 0, 0, AVATAR_SIZE, AVATAR_SIZE);
    imagedestroy($im);

}

wavatar_get ($string);	
}




?>
