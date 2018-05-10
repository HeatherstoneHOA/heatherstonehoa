<?php
  ob_start();

  $imgs = [
    'HHOA Bridge' => '/img/heros/bridge.jpg',
    'HHOA Pond with Ducks' => '/img/heros/pond_ducks.jpg',
    'HHOA Flowers' => '/img/heros/flowers.jpg',
    'HHOA Pond with Bench' => '/img/heros/pond_bench.jpg',
  ];
?>

<script type="text/javascript">
  $(document).ready(function() {
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

<div class="home-page-content">
  <div class="hero-image-container">
    <?php foreach ($imgs as $alt => $src): ?>
      <img class="home-hero-image" src="<?php print $src; ?>" alt="<?php print $alt; ?>" />
    <?php endforeach; ?>
  </div>

  <div class="hero-caption">
    <h1>Welcome to Heatherstone!</h1>
    <p>Thanks for visiting the Heatherstone HOA community website. Feel free to take a look around to learn more about our community.</p>
    <p>If you are new or are interested in purchasing a home within our community, take a look at the bottom of the page to find our welcome information as well as other useful links and information.</p>
  </div>
</div>

<?php
  $content = ob_get_clean();
  require './templates/home.php';
?>
