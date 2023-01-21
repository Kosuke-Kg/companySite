<?php include(dirname(__FILE__).'/components/head.php') ?>
<?php include(dirname(__FILE__).'/components/header.php') ?>
<main id="top">
  <section id="sec01">
    <div class="catchGroup">
      <h1>WEB DESIGN <br class="sp">SPECIALIST</h1>
      <p class="catch">お客様の夢を叶える<br class="sp">Webサイトを制作</p>
      <a class="buttonSecondary" href="<?php get_home_url();?>/contact/">CONTACT</a>
    </div>
    <div class="scrollItem">SCROLL<span></span></div>
  </section>
  <section id="sec02">
    <div class="contentIn">
      <div class="titleMain">
        <h2>NEWS</h2>
        <span>お知らせ</span>
      </div>
      <ul class="newsBox">
        <?php
          $newsArgs = array(
            "post_type" => "news",
            "orderby" => "date",
            "order" => "DESC",
            "posts_per_page" => 3,
          );
          $newsQuery = new WP_Query($newsArgs);
          if($newsQuery -> have_posts()):
            while($newsQuery -> have_posts()):
              $newsQuery->the_post()
        ?>
        <li class="newsItem">
          <a href="<?php echo $post->guid?>">
            <span class="date">
              <?php echo get_the_date();?>
            </span>
            <span class="term">
              <?php echo get_the_terms($post->ID, "news-cat")[0]->name;?>
            </span>
            <h3 class="newsTitle">
              <?php echo $post->post_title;?>
            </h3>
          </a>
        </li>
        <?php
            endwhile;
          endif;
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
  <section id="sec03">
    <div class="contentIn">
      <div class="titleMain">
        <h2>SERVICE</h2>
        <span>事業内容</span>
      </div>
      <ul class="serviceList">
        <li>
          <picture>
            <source
              srcset="<?php echo get_template_directory_uri();?>/assets/img/top/service_img01.webp"
              type="image/webp"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/assets/img/top/service_img01.jpg"
              alt="サービスイメージweb制作"
            />
          </picture>
          <h3 class="serviceName">Webサイト制作</h3>
          <p class="description">新規サイトの制作はもちろんサイトリニューアルやランディングページの制作も可能です。</p>
        </li>
        <li>
          <picture>
            <source
              srcset="<?php echo get_template_directory_uri();?>/assets/img/top/service_img02.webp"
              type="image/webp"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/assets/img/top/service_img02.jpg"
              alt="サービスイメージWebサイト運用"
            />
          </picture>
          <h3 class="serviceName">Webサイト運用</h3>
          <p class="description">サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案をいたします。</p>
        </li>
        <li>
          <picture>
            <source
              srcset="<?php echo get_template_directory_uri();?>/assets/img/top/service_img03.webp"
              type="image/webp"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/assets/img/top/service_img03.jpg"
              alt="サービスイメージweb制作"
            />
          </picture>
          <h3 class="serviceName">アプリ開発</h3>
          <p class="description">スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。</p>
        </li>
      </ul>
      <a class="buttonMain" href="<?php get_home_url();?>/contact/">
        <span>MORE</span>
      </a>
    </div>
  </section>
  <section id="sec04">
    <div class="contentIn">
      <div class="lBox">
        <div id="sliderArea">
          <input id="prevBtn" type="button">
          <ul id="worksSlider">
            <?php
            $worksArgs = array(
              "post_type" => "work",
              "orderby" => "date",
              "order" => "DESC",
              "posts_per_page" => 3,
            );
            $worksQuery = new WP_Query($worksArgs);
            if($worksQuery -> have_posts()):
              while($worksQuery -> have_posts()):
                $worksQuery->the_post()
                ?>
          <li class="img">
            <img src="<?php the_post_thumbnail_url()?>" alt="<?php $post->name?>">
          </li>
          <?php
              endwhile;
            endif;
            ?>
          </ul>
          <input id="nextBtn" type="button">
        </div>
        <ul id="worksSliderBtnList">
          <?php
            if($worksQuery -> have_posts()):
              while($worksQuery -> have_posts()):
                $worksQuery->the_post()
                ?>
            <li>
              <input class="btn" type="button">
            </li>
            <?php
              endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </ul>
      </div>
      <div class="rBox">
        <div class="titleMain">
          <h2>WORKS</h2>
          <span>制作実績</span>
        </div>
        <p class="description">
          様々なジャンルのWebサイト制作が可能です。<br>
          ご購入やお申込み数の増加などを実現します！
        </p>
        <a class="buttonMain" href="<?php get_home_url();?>/works/">
          <span>MORE</span>
        </a>
      </div>
    </div>
  </section>
  <section id="sec05">
    <div class="contentIn goal" >
      <div class="titleMain">
        <h2>COMPANY</h2>
        <span>私たちについて</span>
      </div>
      <h3><span>サイトのゴール =</span> <span>夢を叶えること</span></h3>
      <p class="description">
      お客様の夢を叶えること。<br>
      それがWebサイトのゴールであり、<br class="sp">私たちが目指すことです。<br>
      だからこそちゃんと成果を出すサイトを<br class="sp">全力でお作りします。<br>
      お客様の笑顔を見たい。<br>
      夢を実現する手助けをさせてください。
      </p>
      <a class="buttonMain" href="<?php get_home_url();?>/company/">
        <span>MORE</span>
      </a>
    </div>
  </section>
  <section id="sec06">
    <div class="contentIn">
      <div class="lBox">
        <div class="box">
          <div class="titleMain">
            <h2>RECRUIT</h2>
            <span>採用情報</span>
          </div>
          <p class="description">私たちと一緒に働きませんか？</p>
          <a class="buttonMain" href="<?php get_home_url();?>/recruit/">
            <span>MORE</span>
          </a>
        </div>
      </div>
      <div class="rBox">
        <picture class="pc">
          <source
            srcset="<?php echo get_template_directory_uri();?>/assets/img/top/recruitImg.webp"
            type="image/webp"
          />
          <img
            src="<?php echo get_template_directory_uri();?>/assets/img/top/recruitImg.jpg"
            alt="求人イメージ"
          />
        </picture>
        <picture class="sp">
          <source
            srcset="<?php echo get_template_directory_uri();?>/assets/img/top/recruitImgSP.webp"
            type="image/webp"
          />
          <img
            src="<?php echo get_template_directory_uri();?>/assets/img/top/recruitImgSP.jpg"
            alt="求人イメージ"
          />
        </picture>
      </div>
    </div>
  </section>
</main>
<?php include(dirname(__FILE__).'/components/footer.php') ?>