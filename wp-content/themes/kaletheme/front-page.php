<?php

  get_header(); ?>

  <div>
      <div id="hero">
        <div id="hero-msg-container">
          <div id="hero-msg">
            <h1 id="hero-title"><?php the_field('main_header');?></h1>
            <p id="hero-sub-title"><?php the_field('sub_header');?></p>
          </div>
        </div>
        <div id="particles-js"></div>
      </div>
      <section>
        <div class="front-desc-container">
          <h4><?php the_field('msn_obj');?></h4>
          <hr id="mtt" />
        </div>
      </section>
      <section>
        <div class="srv-section-container">
        <h3>What I Can Do For You</h3>
          <div class="srv-container">
            <div><?php the_field('srv_one');?></div>
            <div><?php the_field('srv_two');?></div>
            <div><?php the_field('srv_three');?></div>
            <div><?php the_field('srv_four');?></div>
            <div><?php the_field('srv_five');?></div>
            <div><?php the_field('srv_six');?></div>
          </div>
          <div class="srv-btn-cont wow bounceIn data-wow-duration=".6s" data-wow-delay="1s"">
            <a href="/services"><?php the_field('srv_btn');?></a>
          </div>
        </div>
      </section>
      <section>
        <div class="clients-filter">
          <div class="clients-container">
            <div class="client-logo-wrapper">
              <img class="client-logo" src="wp-content/uploads/2017/03/worthfm-logo.png" />
            </div>

            <div class="client-logo-wrapper">
              <img class="client-logo" src="wp-content/uploads/2017/03/Wow.png"/>
            </div>

            <div class="client-logo-wrapper">
              <img class="client-logo" src="wp-content/uploads/2017/03/Prudential.svg" />
            </div>

            <div class="client-logo-wrapper">
              <img class="client-logo" src="wp-content/uploads/2017/03/InEducation.png" />
            </div>

            <div class="client-logo-wrapper">
              <img class="client-logo" src="wp-content/uploads/2017/03/Vanguard.svg" />
            </div>

            <div class="client-logo-wrapper">
              <img class="client-logo" src="wp-content/uploads/2017/03/Uhuru.svg" />
            </div>
            <div class="srv-btn-cont wow bounceIn data-wow-duration=".6s" data-wow-delay="1s"">
              <div id="lm-srv">
                <a href="/work">
                  <p>SEE MORE</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="clnts-tstmnls-cont">
          <div id="tsmls-bgc">
            <div id="tsmls-cntr">
            <h1 id="tsmls-hl">What my clients say</h1>
              <div id="tsmls-contr">
                <div class="tsml-item">
                  <p class="tsml-qt">"Konrad's skill and enthusiasm for supporting good causes is proof that programmers have just as much to offer to charities and non-profit organisations as anyone."</p>
                  <p class="tsml-ath">Ed Guiness, Social Coder</p>

                </div>
                <div class="tsml-item">
                  <p class="tsml-qt">"Konrad was organized, efficient, and willing to do whatever was needed to get a particular task finished. He was extremely flexible and did a great job of covering end of day job during peak volumes. "</p>
                  <p class="tsml-ath">George Bailey, The Vanguard Group</p>

                </div>
                <div class="tsml-item">
                  <p class="tsml-qt">"Endorsing skills for Web developement, HTML, CSS, and JavaScript"</p>
                  <p class="tsml-ath">Michael D Johnson, Free Code Camp</p>

                </div>
                <div class="tsml-item">
                  <p class="tsml-qt">"Endorsing skills for Web developement, SQL, and CSS"</p>
                  <p class="tsml-ath">Denise Samuel, Prudential Financial</p>

                </div>
                <div class="tsml-item">
                  <p class="tsml-qt">"Endorsing skills for Web developement, CSS, Finance, Data Analysis, and Risk Management"</p>
                  <p class="tsml-ath">Dragan Jerinic, Front end Developer</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div id="googleMap" style="width: 100%; height: 100vh;"></div>
      </section>
  </div>

<?php get_footer(); ?>
