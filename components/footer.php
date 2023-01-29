    <footer>
      <?php if(!is_single('contact')): ?>
        <div id="contactArea">
          <div class="titleMain">
            <h2>CONTACT</h2>
            <span>お問い合わせ</span>
          </div>
          <p class="description">Webサイトの制作のご依頼やお見積りなど、<br class="sp">お気軽にご相談ください。</p>
          <a class="buttonMain" href="<?php get_home_url();?>/contact/"><span>MORE</span></a>
        </div>
      <?php endif; ?>
      <div id="footerArea">
        <nav>
          <ul class="navArea">
          <li>
              <a href="<?php get_home_url();?>">Home</a>
            </li>
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
              <a href="<?php get_home_url();?>/recruitpage/">RECRUIT</a>
            </li>
            <li>
              <a href="<?php get_home_url();?>/contact/">CONTACT</a>
            </li>
          </ul>
        </nav>
        <p id="copyright">© PON DESIGN</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
