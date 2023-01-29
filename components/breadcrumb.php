<section id="breadcrumb">
  <ul>
    <?php
      if(is_page()):
    ?>
      <li>
        <a href="<?php echo home_url() ?>">HOME ></a>
      </li>
      <li>
        <?php echo strtoupper(get_post_field( 'post_name', get_the_ID() ))?>
      </li>
    <?php
      elseif(is_archive()):
    ?>
      <li>
        <a href="<?php echo home_url() ?>">HOME ></a>
      </li>
      <li>
        <?php echo strtoupper(get_post_type( $post ))?>
      </li>
    <?php
      elseif(is_single()):
    ?>
      <li>
        <a href="<?php echo home_url() ?>">HOME ></a>
      </li>
      <li>
        <a href="<?php echo home_url() ?>/<?php echo get_post_type()?>">
          <?php echo strtoupper(get_post_type())?> >
        </a>
      </li>
      <li>
        <?php the_title()?>
      </li>
    <?php
      endif
    ?>
  </ul>
</section>