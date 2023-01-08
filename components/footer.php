    <footer>
      <?php if(!is_single('contact')): ?>
        <div id="contactArea">
          <h2>CONTACT</h2>
          <span>お問い合わせ</span>
          <p>Webサイトの制作のご依頼やお見積りなど、お気軽にご相談ください。</p>
          <a href="<?php get_home_url();?>/contact/">MORE</a>
        </div>
      <?php endif; ?>
      <div id="footerArea">
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
        <p id="copy">© PON DESIGN</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
