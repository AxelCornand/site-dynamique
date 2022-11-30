<main class="right">
        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <h2 class="right__title"><?php echo $articles['titre']; ?></h2>
        <div class="posts">
            <article class="post">
              <a href="" class="post__category post__category--color-team"><?php echo $articles['catégorie']; ?></a>
              <div class="post__meta">
                <img class="post__author-icon" src=<?php echo $articles ['image']; ?> alt="">
                <strong class="post__author"><?php echo $articles ['auteur']; ?></strong>
                <time datetime="2018-02-10"><?php echo $articles['date de publication']; ?></time>
              </div>
              <p><?php echo $articles ['texte']; ?></p>
      <p><a href="index.php" class="post__link">Back to home</a></p>
             </article>
        </div>
    </main>