<?php include(dirname(__FILE__).'/components/head.php') ?>
<?php include(dirname(__FILE__).'/components/header.php') ?>

<main id="work">

  <section id="titleUnderPage">
    <h1>WORKS</h1>
    <p>制作実績</p>
  </section>

  <?php include(dirname(__FILE__).'/components/breadcrumb.php') ?>

  <section id="sec01">
    <div class="contentIn">
      <?php
        if(have_posts()):
      ?>
      <ul class="workList">
        <?php
            while(have_posts()):
              the_post();
        ?>
        <li class="workItem">
          <picture>
            <img
              src="<?php the_post_thumbnail_url()?>"
              alt="職場イメージ"
            />
          </picture>
          <h2 class="companyName"><?php the_title()?></h2>
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
