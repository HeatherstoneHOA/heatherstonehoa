<?php
  ob_start();

  $imgs = [
    'HHOA Bridge' => '/img/heros/bridge.jpg',
    'HHOA Pond with Ducks' => '/img/heros/pond_ducks.jpg',
    'HHOA Flowers' => '/img/heros/flowers.jpg',
    'HHOA Pond with Bench' => '/img/heros/pond_bench.jpg',
  ];

  // $dir = new DirectoryIterator(dirname(__FILE__) . '/img/heros');
  // foreach ($dir as $fileinfo) {
  //     if (!$fileinfo->isDot()) {
  //         var_dump($fileinfo->getFilename());
  //     }
  // }
?>

<script type="text/javascript">
  $(document).ready(function() {
    // var $heros = $('.home-hero-image');
    // $heros.hide();
    //
    // var index = 0;
    // var $current_hero = $($heros.get(index));
    // $current_hero.show();
    //
    // var time = 5000;
    // var delay = 500;
    //
    // function slideshow() {
    //   $('.progress').animate({
    //     width: '100%'
    //   }, time, function() {
    //     $('.progress').css('width', '0%');
    //
    //     index++;
    //     if (index == $heros.length) {
    //       index = 0;
    //     }
    //
    //     var $previous_hero = $current_hero;
    //     $current_hero = $($heros.get(index));
    //     $current_hero.show();
    //     $previous_hero.hide();
    //
    //     setTimeout(slideshow, delay);
    //   });
    // }
    //
    // slideshow();



    $('.hero-image-container').slick({
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: false,
      dots: false,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear'
    });
  });
</script>

<div class="hero-image-container">
  <?php foreach ($imgs as $alt => $src): ?>
    <img class="home-hero-image" src="<?php print $src; ?>" alt="<?php print $alt; ?>" />
  <?php endforeach; ?>
</div>
<div class="progress-container">
  <div class="progress"></div>
</div>

<?php
  $content = ob_get_clean();
  require './templates/home.php';
?>
