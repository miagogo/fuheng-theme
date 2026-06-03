<?php
/**
 * Title: 頁首 Header
 * Slug: fuheng/header
 * Categories: fuheng
 * Inserter: false
 */
?>
<!-- wp:html -->
  <header id="site-header">
    <div class="wrap nav">
      <a class="brand" href="#top" aria-label="福亨攝影 首頁">
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/Fu-Heng_Logo.png')); ?>" alt="福亨攝影 logo">
      </a>
      <nav class="nav-links" aria-label="主選單">
        <a href="#about">關於</a>
        <a href="#services">服務</a>
        <a href="#works">作品</a>
        <a href="#location">位置</a>
        <a href="#faq">問答</a>
        <a href="#contact">聯絡</a>
      </nav>
      <a class="btn" href="https://line.me/R/ti/p/@fuhengstudio" target="_blank" rel="noopener">LINE 預約</a>
      <button class="hamburger" id="hamburger" aria-expanded="false" aria-controls="mobilenav" aria-label="開啟選單"><span></span><span></span><span></span></button>
    </div>
  </header>

  <nav id="mobilenav" aria-label="行動選單">
    <a href="#about">關於</a>
    <a href="#services">服務</a>
    <a href="#works">作品</a>
    <a href="#location">位置</a>
    <a href="#faq">問答</a>
    <a href="#contact">聯絡</a>
    <a class="btn" href="https://line.me/R/ti/p/@fuhengstudio" target="_blank" rel="noopener">LINE 預約</a>
  </nav>
<!-- /wp:html -->
