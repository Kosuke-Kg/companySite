<?php include(dirname(__FILE__).'/components/head.php') ?>
<?php include(dirname(__FILE__).'/components/header.php') ?>

<main id="news">

  <section id="titleUnderPage">
    <h1>NEWS</h1>
    <p>お知らせ</p>
  </section>

  <?php include(dirname(__FILE__).'/components/breadcrumb.php') ?>

  <section id="sec01">
    <div class="contentIn">
      <h2 class="postTitle"><?php the_title()?></h2>
      <div class="dataBox">
        <p class="date"><?php echo get_the_date();?></p>
        <p class="term">
          <?php echo get_the_term_list( $post->ID, 'news-cat' ); ?>
        </p>
      </div>
      <?php if (get_post_thumbnail_id($post)):?>
        <picture class="thumbnail">
          <img
          src="<?php the_post_thumbnail_url()?>"
          />
        </picture>
        <?php endif;?>
        <div id="postContent">
          <?php the_content()?>
        </div>
        <div id="postNav">
          <div class="content">
            <div class="nav lBox">
              <?php
                if (get_previous_post()):
                  previous_post_link('%link', '%title');
                endif;
              ?>
            </div>
            <div class="nav rBox">
              <?php
              if (get_next_post()):
                next_post_link('%link', '%title');
              endif;
              ?>
            </div>
          </div>
          <div class="list">
            <a href="<?php get_home_url();?>/news/">NEWS一覧</a>
          </div>
        </div>
    </div>
  </section>

</main>
<?php include(dirname(__FILE__).'/components/footer.php') ?>
