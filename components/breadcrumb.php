<section id="breadcrumb">
  <ul>
    <?php
      if(is_page()):
    ?>
      <li>
        <a href="<?php echo home_url() ?>">HOME ></a>
      </li>
      <li><?php the_title()?></li>
    <?php
      endif
    ?>
  </ul>
</section>