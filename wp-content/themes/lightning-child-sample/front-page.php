<?php get_header() ?>

<div class="c-top-view">
  <div class="c-top-view__images">
    <div class="c-top-view__cover"></div>
    <img src="<?php echo get_theme_file_uri("images/top-view/view1.jpg") ?>" alt="main-veiw1">
  </div>
  <div class="c-top-view__content">
    <div class="c-top-view__title">
      <div class="c-top-view__text">
        <span>地元学生による</span><br>
        <span>でら夏祭り</span><br>
        <span>in久屋大通</span>
      </div>
    </div>
  </div>
</div>

<div class="c-date-time">
  <div class="c-date-time__date">2023.7.29(土) ～ 30(日)</div>
  <div class="c-date-time__time">AM 11:00 START</div>
</div>

<main>
  <section class="l-section container c-organizer">
    <div class="c-section-title">
      <h2 class="c-section-title__title">開催者</h2>
      <div class="c-section-title__bar"></div>
    </div>

    <div class="c-organizer__content">
      <h3 class="c-organizer__committee">名古屋未来博覧会実行委員</h3>

      <div class="c-organizer__top">
        <h4>実行委員長</h4>
        <div class="c-organizer__top--content">
          <div class="c-organizer__top--name-photo">
            <div class="c-organizer__top--name">
              愛知淑徳大学 2年<br>
              <span>鈴村 元温</span>
            </div>
            <div class="c-organizer__top--photo">
              <img src="<?php echo get_theme_file_uri("/images/members/motoharu.jpg") ?>" alt="suzumura">
            </div>
          </div>
          <div class="c-organizer__top--text">
            東北震災を忘れることのない被災経験者。<br>被災支援活動とSDGsの啓蒙活動を名古屋未来万博でスタートさせている。
          </div>
        </div>
      </div>

      <div class="c-organizer__members">
        <h4>メンバー</h4>
        <div class="c-organizer__members--content">
          <div class="c-organizer__member-card">
            <div class="c-organizer__member-card--img"><img src="<?php echo get_theme_file_uri("/images/members/matumoto.png") ?>" alt="matsumoto"></div>
            <div class="c-organizer__member-card--name">松本 明空</div>
            <div class="c-organizer__member-card--school">立命館大学 ２年</div>
          </div>
          <div class="c-organizer__member-card">
            <div class="c-organizer__member-card--img"><img src="<?php echo get_theme_file_uri("/images/members/morisita.png") ?>" alt="mosishita"></div>
            <div class="c-organizer__member-card--name">森下 航</div>
            <div class="c-organizer__member-card--school">名古屋市立大学 ２年</div>
          </div>
          <div class="c-organizer__member-card">
            <div class="c-organizer__member-card--img"><img src="<?php echo get_theme_file_uri("/images/members/nagae.png") ?>" alt="nagae"></div>
            <div class="c-organizer__member-card--name">長柄 匠真</div>
            <div class="c-organizer__member-card--school">大原簿記専門学校 2年</div>
          </div>
          <div class="c-organizer__member-card">
            <div class="c-organizer__member-card--img"><img src="<?php echo get_theme_file_uri("/images/members/kamido.png") ?>" alt="kamido"></div>
            <div class="c-organizer__member-card--name">神戸 莉奈</div>
            <div class="c-organizer__member-card--school">愛知大学 1年</div>
          </div>
          <div class="c-organizer__member-card">
            <div class="c-organizer__member-card--img"><img src="<?php echo get_theme_file_uri("/images/members/nisimura.png") ?>" alt="nishimura"></div>
            <div class="c-organizer__member-card--name">西村 凛々香</div>
            <div class="c-organizer__member-card--school">愛知大学 1年</div>
          </div>
          <div class="c-organizer__member-card">
            <div class="c-organizer__member-card--img"><img src="<?php echo get_theme_file_uri("/images/members/hurukoori.png") ?>" alt="hurukoori"></div>
            <div class="c-organizer__member-card--name">古郡 快</div>
            <div class="c-organizer__member-card--school">大同大学 １年</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="l-section container c-nagoya-mirai">
    <div class="c-section-title">
      <h2 class="c-section-title__title">名古屋未来博覧会</h2>
      <div class="c-section-title__bar"></div>
    </div>

    <div class="c-nagoya-mirai__content">
      <div class="c-nagoya-mirai__theme">
        <h3 class="c-nagoya-mirai__content--title">名古屋未来博覧会の<span>テーマ</span></h3>

        <div class="c-nagoya-mirai__theme-title">人をつなぐ</div>
        <div class="c-nagoya-mirai__theme-content">content</div>
      </div>

      <div class="c-nagoya-mirai__event">
        <h3 class="c-nagoya-mirai__content--title">SDGs推進活動イベント</h3>
        <div class="c-nagoya-mirai__event-content">content</div>

      </div>
    </div>

  </section>

  <section class="l-section c-sponsor">
    <div class="c-section-title">
      <h2 class="c-section-title__title yellow">協賛申し込み</h2>
      <div class="c-section-title__bar"></div>
    </div>

    <div class="c-sponsor__content container">
      <div class="c-sponsor__text">
        名古屋未来博覧会実行委員では「人をつなぐ」をテーマに、世界の未来にむけて活動しております。私達の活動を理解し、ご支援してくださる企業様を募集しております。<span>ご賛同と御協力いただけると幸いです。<br>どうぞ宜しくお願い致します。</span>
      </div>
    </div>

    <div class="c-sponsor__button-area">
      <a class="c-sponsor__button">申し込みはこちら</a>
    </div>
  </section>
</main>

<?php get_footer() ?>