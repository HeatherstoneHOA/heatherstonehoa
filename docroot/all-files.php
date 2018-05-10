<?php
  ob_start();


    // $dir = new DirectoryIterator(dirname(__FILE__) . '/img/heros');
    // foreach ($dir as $fileinfo) {
    //     if (!$fileinfo->isDot()) {
    //         var_dump($fileinfo->getFilename());
    //     }
    // }
?>



<?php
  $content = ob_get_clean();
  require './templates/home.php';
?>
