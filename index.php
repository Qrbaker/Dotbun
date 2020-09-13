<?php
  $dir = 'files';
  // Initiate array which will contain the image name
  $files_arr = array();
  // Check if image directory exists
  if (file_exists($dir) && is_dir($dir) ) {

      // Get files from the directory
      $dir_arr = scandir($dir);
      $arr_files = array_diff($dir_arr, array('.','..') );
      foreach ($arr_files as $file) {
        //Get the file path
        $file_path = $dir."/".$file;
        // Get extension
        $ext = pathinfo($file_path, PATHINFO_EXTENSION);
        if ($ext=="jpg" ||
            $ext=="png" ||
            $ext=="gif" ||
            $ext=="GIF" ||
            $ext=="JPG" ||
            $ext=="PNG" ||
            $ext=="mp4" ||
            $ext=="MP4" ||
            $ext=="webp"||
            $ext=="WEBP"){
          array_push($files_arr, $file);
        }

      }
      $count_file_index = count($files_arr) - 1;
      $random_file = $files_arr[rand( 0, $count_file_index )];
      // Get basename (to query webp)
      $random_file_name = pathinfo($dir."/".$random_file, PATHINFO_FILENAME);
      $random_file_ext = pathinfo($dir."/".$random_file, PATHINFO_EXTENSION);

      //$webp_bg = "background: url('$dir/webp/$random_file_name.webp') no-repeat center center;";
      //$fallback_bg = "background: url('$dir/$random_file') no-repeat center center;" ;
      $webp_img = "<source srcset=\"$dir/webp/$random_file_name.webp\" type=\"image/webp\" title=\"Bunny!\" alt=\"A bunny picture :)\">";
      $no_webp_img = "<source srcset=\"$dir/$random_file\" type=\"image/$random_file_ext\" title=\"Bunny!\" alt=\"A bunny picture :)\">";
      $fallback_img = "<img src=\"$dir/$random_file\" title=\"Bunny!\" alt=\"A bunny picture :)\">";
  }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
     <title>.Bun</title>
     <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
     <link rel="stylesheet" href="css/index.css">
   </head>
   <body>
      <div class="aboutlink">
      <a href="about.html">
         <img src="info.svg" alt="About Page Link" title="About .Bun">
      </a> 
      </div>

<?php if ($random_file_ext=="mp4" || $random_file_ext=="MP4" || $random_file_ext=="webm" || $random_file_ext=="WEBM") {
        echo "      <video autoplay loop>
         <source src=\"$dir/$random_file\" type=\"video/$random_file_ext\">
         Uh-oh! Looks like your browser doesn't support video. :(</video>\n";
     } else if ($random_file_ext=="gif" || $random_file_ext=="GIF") {
        echo "      <div class=\"imgbox center-fit\">
         $fallback_img
      </div>\n";
     } else {
        echo "      <div class=\"imgbox center-fit\">
         <picture>
            $webp_img
            $no_webp_img
            $fallback_img
         </picture>
      </div>\n";
     }
?>
      <div class="staticlink">
         <a href="https://dotbun.com/<?php echo $dir."/".$random_file ?>">[Static Link]</a>
      </div> 
      <div class="newpiclink">
         <a href=".">[More Buns]</a> 
      </div>
         <script data-goatcounter="https://dotbun.goatcounter.com/count"
                 async src="//gc.zgo.at/count.js"></script>
   </body>
</html>
