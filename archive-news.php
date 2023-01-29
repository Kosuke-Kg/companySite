<?php include(dirname(__FILE__).'/components/head.php') ?>
<?php include(dirname(__FILE__).'/components/header.php') ?>

<main id="newsArchive">

  <section id="titleUnderPage">
    <h1>NEWS</h1>
    <p>お知らせ</p>
  </section>

  <?php include(dirname(__FILE__).'/components/breadcrumb.php') ?>

  <section id="sec01">
    <div class="contentIn">
      <?php
        if(have_posts()):
      ?>
      <ul class="newsBox">
        <?php
          while(have_posts()):
            the_post();
        ?>
          <li>
            <a class="listItem" href="<?php echo $post->guid?>">
              <span class="date"><?php echo get_the_date();?></span>
              <span class="cat">
                <?php
                  $term = get_the_terms($post->ID,'news-cat');
                  echo $term[0]->name;
                ?>
              </span>
              <h2 class="title"><?php the_title()?></h2>
            </a>
          </li>
        <?php
          endwhile;
        ?>
      </ul>
      <?php
        endif;
      ?>
    </div>
  </section>

</main>
<?php include(dirname(__FILE__).'/components/footer.php') ?>
