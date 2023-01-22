<?php
/*
Template Name: Recruit
*/
?>
<?php include(dirname(__FILE__).'/components/head.php') ?>
<?php include(dirname(__FILE__).'/components/header.php') ?>

<main id="recruit">

  <section id="titleUnderPage">
    <h1>RECRUIT</h1>
    <p>採用情報</p>
  </section>

  <?php include(dirname(__FILE__).'/components/breadcrumb.php') ?>

  <section id="sec01">
    <div class="subTitle">
      <h2 class="title">Enjoy Creation for Client</h2>
      <span class="sub">楽しむ心が良いモノを生む</span>
    </div>
    <p class="description">
      心を弾ましながら<br>
      夢いっぱいのサイトを作ろう！<br>
      お客様も自分もみんなが幸せになれるように
    </p>
    <picture>
      <source
        srcset="<?php echo get_template_directory_uri();?>/assets/img/recruit/pic01.webp"
        type="image/webp"
      />
      <img
        src="<?php echo get_template_directory_uri();?>/assets/img/recruit/pic01.jpg"
        alt="職場イメージ"
      />
    </picture>
  </section>

  <section id="sec02">
    <div class="contentIn">
      <div class="titleMain">
        <h2>募集中の職種</h2>
      </div>

      <ul class="recruitList">
        <?php
        $recruitArgs = array(
          "post_type" => "recruit",
          "posts_per_page" => -1,
        );
        $recruitQuery = new WP_Query($recruitArgs);

        if($recruitQuery->have_posts()):
          while($recruitQuery->have_posts()):
            $recruitQuery->the_post();
            if(get_field("recruiting")):
        ?>
          <li class="recruitItem">
            <h3 class="industry"><?php the_field("industry")?></h3>
            <dl class="dataBox">
              <dt>雇用形態</dt>
              <dd><?php the_field("employment")?></dd>
              <dt>給与</dt>
              <dd><?php the_field("income")?></dd>
              <dt>仕事内容</dt>
              <dd><?php the_field("description")?></dd>
              <dt>勤務時間</dt>
              <dd><?php the_field("hours")?></dd>
              <dt>応募資格</dt>
              <dd><?php the_field("requirements")?></dd>
            </dl>
            <a class="buttonMain" href="" target="_blank">
              <span>応募する</span>
            </a>
            <p class="transition">求人サイトへ遷移します</p>
          </li>
        <?php
            endif;
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </ul>
    </div>
  </section>

  <section id="sec03">
    <div class="contentIn">
      <div class="titleMain">
        <h2>社内ムービー</h2>
      </div>
      <div class="movie">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/sViMxHKGjc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </section>

</main>
<?php include(dirname(__FILE__).'/components/footer.php') ?>
