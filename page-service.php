<?php
/*
Template Name: Service
*/
?>
<?php include(dirname(__FILE__).'/components/head.php') ?>
<?php include(dirname(__FILE__).'/components/header.php') ?>

<main id="service">

<section id="titleUnderPage">
  <h1>SERVICE</h1>
  <p>事業内容</p>
</section>

<?php include(dirname(__FILE__).'/components/breadcrumb.php') ?>
  <section id="sec01">
    <div class="contentIn">
      <ul class="serviceList">
        <li>
          <picture>
            <source
              srcset="<?php echo get_template_directory_uri();?>/assets/img/service/pic01.webp"
              type="image/webp"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/assets/img/service/pic01.jpg"
              alt="CEO写真"
            />
          </picture>
          <div class="rBox">
            <h2>Webサイト制作</h2>
            <p>
              新規サイトはもちろん、サイトリニューアルやランディングページ制作も承っております。<br>
              サイトのゴールはお客様の夢や目的を実現することです。そのためにまずはしっかりとお話をうかがい、サイトに必要な要素を洗い出します。その後、ワイヤーフレーム（サイトのレイアウト）の作成、デザインの制作、コーディングと進みます。制作の過程でお客様とのお打ち合わせを数回実施させていただき、ご要望とご意見を反映しながらサイトを制作していきます。
            </p>
          </div>
        </li>
        <li>
          <picture>
            <source
              srcset="<?php echo get_template_directory_uri();?>/assets/img/service/pic02.webp"
              type="image/webp"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/assets/img/service/pic02.jpg"
              alt="CEO写真"
            />
          </picture>
          <div class="rBox">
            <h2>Webサイト運用</h2>
            <p>
              サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。<br>
              日々の面倒な更新作業は私たちにおまかせください。テキストの修正やリンクの張り替えなどの簡単な作業から、特集ページやバナーのデザインまで可能です。<br>
              また、アクセス解析によるサイト改善も承っております。ご購入やお申込数などにお悩みでしたらぜひご相談ください。サイトの課題を発見し、改善案のご提案から実装までワンストップで対応いたします。
            </p>
          </div>
        </li>
        <li>
          <picture>
            <source
              srcset="<?php echo get_template_directory_uri();?>/assets/img/service/pic03.webp"
              type="image/webp"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/assets/img/service/pic03.jpg"
              alt="CEO写真"
            />
          </picture>
          <div class="rBox">
            <h2>アプリ開発</h2>
            <p>
              スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。開発力のみならず、充実したユーザー体験をもたらすためのUXデザインにも自信があります。作って終わり、ではなくユーザーに愛されるUI（ユーザーインターフェース）を実現し、アプリ開発によるお客様の事業の目的を達成する推進力となることを目指します。
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>
</main>
<?php include(dirname(__FILE__).'/components/footer.php') ?>
