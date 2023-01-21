<body>
  <header id="headerArea">
    <div id="logo">
      <a href="<?php echo home_url();?>">
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
    <span id="menuBtn">
      <span></span>
    </span>
    <nav id="headerNavArea">
      <ul class="navList">
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
  </header>