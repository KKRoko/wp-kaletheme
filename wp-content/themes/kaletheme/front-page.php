<?php

  get_header(); ?>

  <div>
      <div id="hero">
        <div id="hero-msg-container">
          <div id="hero-msg">
            <h1 id="hero-title"><?php the_field('main_header');?></h1>
            <p><?php the_field('sub_header');?></p>
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
        <h3>What We Can Do For You</h3>
          <div class="srv-container">
            <div><?php the_field('srv_one');?></div>
            <div><?php the_field('srv_two');?></div>
            <div><?php the_field('srv_three');?></div>
            <div><?php the_field('srv_four');?></div>
            <div><?php the_field('srv_five');?></div>
            <div><?php the_field('srv_six');?></div>
          </div>
          <div class="srv-btn-cont">
            <?php the_field('srv_btn');?>
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
        <?php the_field('home_map'); ?>
      </section>
  </div>

<?php get_footer(); ?>
