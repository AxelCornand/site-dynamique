<?php 

$nav =
[
  'plan de site' => 'plan_de_site.php',
  'mention légales' =>'mentions_legales.php',
  'contact' => 'contact.php',
]

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="leftcontact">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Say a word</strong> contact us</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <nav>
          <ul class="left__nav">
            <?php foreach( $nav as $label => $lien) :

               echo '<li class="left__nav-item">
               <a class="left__nav-link" href="'.$lien.'">'.$label.'</a></li>';

            endforeach;
            ?>
          </ul>
        </nav>
      </header>