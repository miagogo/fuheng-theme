<?php
/**
 * Title: Hero 主視覺
 * Slug: fuheng/hero
 * Categories: fuheng
 * Inserter: true
 */
?>
<!-- wp:html -->
    <section class="hero" id="top">
      <div class="hero-bg">
        <div class="hero-carousel" aria-hidden="true">
          <figure class="slide is-active"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/hero.png')); ?>" alt=""></figure>
          <figure class="slide"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/work-headshot.png')); ?>" alt=""></figure>
          <figure class="slide"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/work-lifestyle.png')); ?>" alt=""></figure>
        </div>
        <span class="hero-cloud" aria-hidden="true"></span>
      </div>
      <div class="hero-content">
        <div data-reveal>
          <span class="eyebrow light">Photography Studio — Taipei</span>
        </div>
        <h1 class="title" data-reveal>福亨攝影</h1>
        <div class="title-en" data-reveal>FU&nbsp;&nbsp;HENG</div>
        <div class="roles" data-reveal>
          <span>證件照</span><span>大頭照</span><span>人像攝影</span><span>空姐應試照</span><span>生活攝影</span>
        </div>
        <div class="hero-cta" data-reveal>
          <a class="btn" href="https://line.me/R/ti/p/@fuhengstudio" target="_blank" rel="noopener">加 LINE 預約拍攝</a>
          <a class="btn ghost light" href="#works">瀏覽作品</a>
        </div>
        <div class="hero-dots" data-reveal role="tablist" aria-label="作品輪播">
          <button class="dot is-active" type="button" aria-label="第 1 張：專業棚拍"></button>
          <button class="dot" type="button" aria-label="第 2 張：大頭照"></button>
          <button class="dot" type="button" aria-label="第 3 張：生活休閒"></button>
        </div>
      </div>
      <div class="scroll-hint">Scroll</div>
    </section>
<!-- /wp:html -->
