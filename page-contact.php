<?php
/*
Template Name: Contact
*/
?>
<?php include(dirname(__FILE__).'/components/head.php') ?>
<?php include(dirname(__FILE__).'/components/header.php') ?>

<main id="contact">

  <section id="titleUnderPage">
    <h1>CONTACT</h1>
    <p>お問い合わせ</p>
  </section>

  <?php include(dirname(__FILE__).'/components/breadcrumb.php') ?>

  <section id="sec01">
    <p class="descriptions">Webサイトの制作のご依頼やお見積りなど、<br class="sp">お気軽にご相談ください。</p>
    <dl class="formArea">
      <?php echo do_shortcode('[mwform_formkey key="71"]')?>
    </dl>
  </section>

</main>
<?php include(dirname(__FILE__).'/components/footer.php') ?>
