<?php
/*
Template Name: Company
*/
?>
<?php include(dirname(__FILE__).'/components/head.php') ?>
<?php include(dirname(__FILE__).'/components/header.php') ?>

<main id="company">

<section id="titleUnderPage">
  <h1>COMPANY</h1>
  <p>私たちについて</p>
</section>

<?php include(dirname(__FILE__).'/components/breadcrumb.php') ?>
  <section id="sec01">
    <div class="contentIn goal">
      <div class="titleMain">
        <h2>メッセージ</h2>
      </div>
      <h3><span>サイトのゴール =</span> <span>夢を叶えること</span></h3>
      <p class="description">
      お客様の夢を叶えること。<br>
      それがWebサイトのゴールであり、<br class="sp">私たちが目指すことです。<br>
      だからこそちゃんと成果を出すサイトを<br class="sp">全力でお作りします。<br>
      お客様の笑顔を見たい。<br>
      夢を実現する手助けをさせてください。
      </p>
      <div class="ceo">
        <picture>
          <source
            srcset="<?php echo get_template_directory_uri();?>/assets/img/company/CEO.webp"
            type="image/webp"
          />
          <img
            src="<?php echo get_template_directory_uri();?>/assets/img/company/CEO.jpg"
            alt="サービスイメージweb制作"
          />
        </picture>
        <p>
          テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>
          <br>
          テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>
          <br>
          代表取締役社長 猫山ポン太郎
        </p>
      </div>
    </div>
  </section>

  <section id="sec02">
    <div class="contentIn">
      <div class="titleMain">
        <h2>メッセージ</h2>
      </div>
      <dl class="dataBox">
        <dt>社名</dt>
        <dd>株式会社PON DESIGN</dd>
        <dt>設立</dt>
        <dd>2020.01.10</dd>
        <dt>代表取締役</dt>
        <dd>猫山ポン太郎</dd>
        <dt>資本金</dt>
        <dd>1,000,000円</dd>
        <dt>所在地</dt>
        <dd>〒555-5555 <br class="sp">東京都千代田区 ポンビルディング 606</dd>
      </dl>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12958.627135224153!2d139.8107004!3d35.7100627!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7d1d4fb31f43f72a!2z5p2x5Lqs44K544Kr44Kk44OE44Oq44O8!5e0!3m2!1sja!2sjp!4v1674290588328!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <a class="link" href="https://www.google.com/maps/place/%E3%80%92131-0045+%E6%9D%B1%E4%BA%AC%E9%83%BD%E5%A2%A8%E7%94%B0%E5%8C%BA%E6%8A%BC%E4%B8%8A%EF%BC%91%E4%B8%81%E7%9B%AE%EF%BC%91%E2%88%92%EF%BC%92+%E6%9D%B1%E4%BA%AC%E3%82%B9%E3%82%AB%E3%82%A4%E3%83%84%E3%83%AA%E3%83%BC/@35.7100627,139.8107004,15z/data=!4m6!3m5!1s0x60188ed0d12f9adf:0x7d1d4fb31f43f72a!8m2!3d35.7100627!4d139.8107004!16zL20vMDd0aGty" target="_blank">Google mapで見る</a>
    </div>
  </section>
</main>
<?php include(dirname(__FILE__).'/components/footer.php') ?>
