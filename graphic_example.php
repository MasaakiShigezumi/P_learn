<?php
  if (isset($_GET['message'])) {
    $font = "times";
    $size = 12;
    $image = imagecreatefrompng("button.png");
    $tsize = imagettfbbox($size, 0, $_GET['message']);

    $dx = abs($tsize[2] - $tsize[0]);
    $dy = abs($tsize[5] - $tsize[3]);
    $x = (imagesx($image) - $dx);
    $y = (imagesx($image) - $dy);

    $black = imagecolorallocate($im, 0, 0, 0);
    imagettftext($image, $size, 0, $x, $y, $black, $font, $_GET['massage']);

    header("Content-type: image/png");
    imagepng($image);

    exit;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="euc-jp">
    <title>Bitton Form</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
      Enter message to appear on button:
      <input type="text" name="message" /><br>
      <input type="submit" value="Create Button" />
    </form>
  </body>
</html>
