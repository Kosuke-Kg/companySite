<section id="breadcrumb">
  <ul>
    <?php
      if(is_page()):
    ?>
      <li>
        <a href="<?php echo home_url() ?>">HOME ></a>
      </li>
      <li><?php echo strtoupper(get_post_field( 'post_name', get_the_ID() ))?></li>
    <?php
      endif
    ?>
  </ul>
</section>