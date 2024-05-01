<!doctype html>

<!-- Loads the html header -->
<?php
  require __DIR__ . "/../page-elements/html-head.php";
?>

<body>
  <div class="content-wrap">
    <!-- Displays the header -->
    <?php
      require __DIR__ . "/../page-elements/header/header.php";
    ?>

    <!-- Fetch data -->
    <?php
      $ProductID=$_GET['ID'];

      require __DIR__ . "/../sql/game/fetch-game-data.php";

      $ProductDescription = str_replace("\n", '<br>', $ProductDescription);
    ?>

    <div class="page-game-container-container">
      <div class="page-game-name">
        <?= $ProductName ?>
      </div>

      <hr style="width:100%"/>

      <div class="page-game-cover-container">
        <img class="page-game-cover" src=<?= $CoverURL ?>>
      </div>

      <div class="page-game-description">
        <?= $ProductDescription ?>
      </div>

      <div class="page-game-price">
        $<?= $ProductPrice ?>
      </div>

      <div class="page-game-quantity">
        Amount in Stock: <?= $ProductQuantity ?>
      </div>
    </div>

    <br />

    <?php
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        include __DIR__ . "/../page-elements/game/add-to-cart-button.php";
      }
      else {
        include __DIR__ . "/../page-elements/game/please-log-in.php";
      }
    ?>
  </div>

  <!-- Load footer -->
  <?php
    require __DIR__ . "/../page-elements/header/footer.php";
  ?>
</body>

</html>
