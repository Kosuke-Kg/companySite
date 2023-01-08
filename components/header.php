<body>
  <header id="headerArea">
    <div class="contentIn">
      <?php if(is_home()): ?>
        <h1 id="logo">
          <a href="<?php get_home_url();?>">
            <picture>
              <source
                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.webp"
                type="image/webp"
              />
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png"
                alt="ロゴ"
              />
            </picture>
          </a>
        </h1>
      <?php else: ?>
        <div id="logo">
          <a href="<?php get_home_url();?>">
            <picture>
              <source
                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.webp"
                type="image/webp"
              />
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png"
                alt="ロゴ"
              />
            </picture>
          </a>
        </div>
      <?php endif ?>
      <nav>
        <ul>
          <li>
            <a href="<?php get_home_url();?>/news/">NEWS</a>
          </li>
          <li>
            <a href="<?php get_home_url();?>/service/">SERVICE</a>
          </li>
          <li>
            <a href="<?php get_home_url();?>/works/">WORKS</a>
          </li>
          <li>
            <a href="<?php get_home_url();?>/company/">COMPANY</a>
          </li>
          <li>
            <a href="<?php get_home_url();?>/recruit/">RECRUIT</a>
          </li>
          <li>
            <a href="<?php get_home_url();?>/contact/">CONTACT</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>