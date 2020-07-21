<?php include('../assets/header-new.php'); ?>
<link rel="stylesheet" href="css/el-camino-rtl.css">

<div class="ec-page">
  <div class="ec-btns-wrap" style="position: fixed; left: 0; bottom: 100px; z-index: 100; font-size: 20px;">
    <button class="ex-btn ec-modal-show" type="button" data-modal="#ec-modal-info" style="font-family: 'Roboto Condensed', sans-serif; text-transform: uppercase; cursor: pointer; display: block; border: none; padding: 8px 10px 6px; margin: 10px 0; font-weight: 700; color: #fff; background: #98c50e;">
      <span>info</span>
    </button>
    <button class="ex-btn ec-modal-show" type="button" data-modal="#ec-modal-mwin" style="font-family: 'Roboto Condensed', sans-serif; text-transform: uppercase; cursor: pointer; display: block; border: none; padding: 8px 10px 6px; margin: 10px 0; font-weight: 700; color: #fff; background: #98c50e;">
      <span>mwin</span>
    </button>
    <button class="ex-btn ec-modal-show" type="button" data-modal="#ec-modal-mlose" style="font-family: 'Roboto Condensed', sans-serif; text-transform: uppercase; cursor: pointer; display: block; border: none; padding: 8px 10px 6px; margin: 10px 0; font-weight: 700; color: #fff; background: #98c50e;">
      <span>mlose</span>
    </button>
    <button class="ex-btn ec-modal-show" type="button" data-modal="#ec-modal-bwin" style="font-family: 'Roboto Condensed', sans-serif; text-transform: uppercase; cursor: pointer; display: block; border: none; padding: 8px 10px 6px; margin: 10px 0; font-weight: 700; color: #fff; background: #98c50e;">
      <span>bwin</span>
    </button>
    <button class="ex-btn ec-modal-show" type="button" data-modal="#ec-modal-blose" style="font-family: 'Roboto Condensed', sans-serif; text-transform: uppercase; cursor: pointer; display: block; border: none; padding: 8px 10px 6px; margin: 10px 0; font-weight: 700; color: #fff; background: #98c50e;">
      <span>blose</span>
    </button>
  </div>

  <div class="ec-wrap">

    <ul class="ec-bread">
      <li><a href="/">home</a></li>
      <li><a href="/">1xgames</a></li>
      <li>El Camino</li>
    </ul>
    <div class="ec-section ec-section_static ec-section_active">
      <div class="ec-header">
        <div class="ec-logo ec-header__logo">
          <img src="img/el-camino/logo.png" alt="" class="ec_logo__img">
          <p class="ec-logo__txt">Все   зависит   от   тебя!</p>
        </div>
      </div>

      <div class="ec-car ec-car_static"></div>

      <div class="ec-footer">
        <div class="ec-footer__in">
          <div class="ec-footer__top">
            <div class="ec-footer__title">сделайте свою ставку</div>
          </div>

          <div class="ec-footer__row">
            <div class="ec-sbtns ec-footer__cel ec-group-wrap ec-footer__cel_left">
              <button class="ec-sbtns__btn ec-btn_theme_green" v-for="val in bet.quickSums" :key="val" v-on:click="addUserVal(val)"><span>{{val}}</span></button>
            </div>

            <div class="ec-footer__cel ec-footer__cel_right">
              <div class="ec-btns-group ec-group-wrap" v-bind:class="{ 'ec-btn_sound-muted': sound.muted}">
                <div class="ec-btn ec-btn_theme_gray ec-btn_size_s ec-btn_sound-move"></div>
                <button class="ec-btn ec-btn_sound ec-btn_size_s ec-btn_sound-off" v-bind:class="{ 'ec-btn_sound-active': sound.muted}" v-on:click="soundMute(true)">
                  <svg viewBox="0 0 144 144">
                    <use xlink:href="#ec-sound-off"></use>
                  </svg>
                </button>
                <button class="ec-btn ec-btn_sound ec-btn_size_s ec-btn_sound-on" v-bind:class="{ 'ec-btn_sound-active': !sound.muted}" v-on:click="soundMute(false)">
                  <svg viewBox="0 0 100 100">
                    <use xlink:href="#ec-sound-on"></use>
                  </svg>
                </button>
              </div>
              <div class="ec-btns-group ec-group-wrap">
                <a href="/" class="ec-btn ec-btn_theme_gray ec-btn_size_s ec-btn-rules"><span>правила</span></a>
              </div>
            </div>

          </div>

          <div class="ec-footer__row">

            <div class="ec-footer__cel ec-footer__cel_left">
              <div class="ec-sum-wrap ec-group-wrap">
                <div class="ec-select">
                  <template>
                      <multiselect
                        v-model="select.value"
                        :searchable="false"
                        :hide-selected="true"
                        select-label= ''
                        :allow-empty="false"
                        :options="select.options">
                      </multiselect>
                  </template>
                </div>

                <div class="ec-iwrap">
                  <input type="text" class="ec-iwrap__inp" v-model.number="bet.val">
                </div>

                <button class="ec-reset" v-on:click="resetVal"></button>
              </div>
            </div>

            <div class="ec-footer__cel ec-footer__cel_right">
              <button class="ec-btn ec-start-btn" disabled=true><span>сделать ставку</span></button>
            </div>

          </div>
        </div>
      </div>

    </div>
    <div class="ec-section ec-section_track">
      <div class="ec-footer ec-panel"></div>
    </div>
    <div class="ec-section ec-section_village">
      <div class="ec-footer ec-panel"></div>
    </div>
    <div class="ec-section ec-section_city">
      <div class="ec-footer ec-panel"></div>
    </div>
  </div>
</div>
<svg style="display: none;">
  <defs>

    <g id="ec-sound-on">
    	<defs>
    		<rect id="SVGID_1_" y="13" width="99.4" height="74.9"/>
    	</defs>
    	<clipPath id="SVGID_2_">
    		<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
    	</clipPath>
    	<path class="st0" d="M56.5,50.6c0,9.7,0,19.5,0,29.2c0,4.1-1.8,6.7-5.4,7.7c-2.5,0.7-4.8,0.2-6.8-1.5c-7.6-6.2-15.2-12.5-22.8-18.7
    		c-0.6-0.5-1.4-0.7-2.2-0.8c-3.6-0.1-7.2,0.1-10.8-0.2c-4.7-0.3-8.3-4.2-8.4-8.7C0,52.9,0,48,0.1,43.1c0.1-4.5,3.8-8.4,8.4-8.7
    		c3.5-0.2,7.1-0.1,10.7-0.2c0.8,0,1.8-0.4,2.5-0.9c7.6-6.2,15.1-12.4,22.7-18.6c2.2-1.8,4.8-2.3,7.5-1.3c2.7,1,4.3,3,4.6,5.8
    		c0.1,0.7,0.1,1.5,0.1,2.2C56.6,31.2,56.5,40.9,56.5,50.6 M47.3,77V24c-0.3,0.2-0.5,0.2-0.6,0.3c-6.5,5.3-13,10.7-19.4,16.1
    		c-2.3,1.9-4.7,2.9-7.8,2.8c-2.9-0.1-5.8,0-8.7,0c-0.6,0-1.1,0.1-1.6,0.1v14.4c0.7,0,1.2,0.1,1.8,0.1c3.2,0,6.4-0.2,9.6,0.1
    		c1.7,0.1,3.6,0.6,5,1.5c2.5,1.6,4.6,3.6,6.9,5.5C37.4,68.8,42.3,72.9,47.3,77"/>
    	<path class="st0" d="M99.4,50.2C99,63.3,93.9,74,83.6,82.2c-1.8,1.4-4.3,1.2-5.6-0.4c-1.3-1.7-1-4,0.8-5.4
    		c9.4-7.6,13.7-17.4,12.7-29.1c-0.8-9.2-5.2-16.8-12.5-22.6c-2-1.6-2.4-3.9-1-5.6c1.4-1.6,3.8-1.6,5.8-0.1
    		c8.4,6.7,13.3,15.3,15.1,25.7C99.3,46.5,99.3,48.5,99.4,50.2"/>
    	<path class="st0" d="M86.1,50.1c-0.3,8.3-3.2,15.1-9.2,20.6c-1.6,1.5-3.9,1.6-5.3,0.2c-1.4-1.4-1.4-3.6,0.3-5.1
    		c3.4-3.2,5.7-6.9,6.5-11.5c1.2-7.1-0.7-13.2-5.8-18.5c-0.8-0.9-1.6-1.9-1.9-3.1c-0.4-1.4,0.4-2.7,1.8-3.3c1.4-0.7,2.9-0.6,4.1,0.4
    		c5,4.4,8,9.9,9.1,16.3C85.9,47.6,86,49.1,86.1,50.1"/>
    	<path class="st0" d="M72.5,50.4c0.1,3-0.8,5.7-2.5,8.2c-1.1,1.6-3,2.1-4.5,1.2c-1.7-0.9-2.3-2.9-1.2-4.5c2.1-3.3,2.1-6.4,0-9.6
    		c-1-1.6-0.4-3.4,1.2-4.4c1.5-0.9,3.5-0.5,4.6,1C71.6,44.7,72.6,47.4,72.5,50.4"/>
    </g>

    <g id="ec-sound-off">
    		<path d="M81.6,72.2c0,14.5,0,28.9,0,43.4c0,6.1-2.6,9.9-7.9,11.5c-3.7,1.1-7,0.3-9.9-2.2c-11-9.3-21.9-18.6-32.9-27.8
    			c-0.8-0.7-2.1-1.1-3.1-1.1c-5.2-0.2-10.4,0.1-15.6-0.3c-6.7-0.5-12-6.2-12.1-12.9C0,75.5,0,68.3,0.1,61.1
    			c0.1-6.7,5.5-12.5,12.1-12.9c5.1-0.3,10.3-0.1,15.4-0.3c1.2,0,2.6-0.5,3.6-1.3c11-9.2,21.8-18.4,32.7-27.6
    			c3.2-2.7,6.9-3.4,10.8-1.9c3.9,1.5,6.2,4.4,6.7,8.7c0.1,1.1,0.2,2.2,0.2,3.3C81.6,43.4,81.6,57.8,81.6,72.2z M68.3,111.4
    			c0-26.5,0-52.5,0-78.7c-0.4,0.3-0.7,0.3-0.9,0.5c-9.3,7.9-18.7,15.8-28,23.9c-3.3,2.9-6.8,4.4-11.2,4.2c-4.2-0.2-8.4,0-12.6,0
    			c-0.8,0-1.6,0.1-2.3,0.2c0,7.3,0,14.2,0,21.3c0.9,0,1.8,0.1,2.6,0.1c4.6,0,9.3-0.2,13.9,0.1c2.5,0.2,5.2,0.9,7.2,2.2
    			c3.5,2.4,6.6,5.4,9.9,8.2C53.9,99.2,60.9,105.2,68.3,111.4z"/>
    	<path d="M137.2,100c-1.7,0-3.4-0.6-4.6-1.9L91.3,56.8c-2.6-2.6-2.6-6.7,0-9.3c2.6-2.6,6.7-2.6,9.3,0l41.2,41.2
    		c2.6,2.6,2.6,6.7,0,9.3C140.5,99.3,138.9,100,137.2,100z"/>
    	<path d="M96.3,99.6c-1.7,0-3.4-0.6-4.6-1.9c-2.6-2.6-2.6-6.7,0-9.3l41.2-41.2c2.6-2.6,6.7-2.6,9.3,0c2.6,2.6,2.6,6.7,0,9.3
    		l-41.2,41.2C99.6,99,98,99.6,96.3,99.6z"/>
    </g>

    <!-- etc -->

  </defs>
</svg>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script type="text/javascript" src="js/vue-multiselect.js"></script>
<script type="text/javascript" src="../libs/perfect-scrollbar.jquery.min.js"></script>
<script type="text/javascript" src="js/el-camino-helper.js"></script>
<script type="text/javascript" src="js/el-camino-const.js"></script>
<script type="text/javascript" src="js/el-camino-main.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    // Modal
    var hash = location.search.replace(/\?/,'');
    $('#ec-modal-'+hash).arcticmodal({
      beforeOpen: function(data, el) {
        setTimeout(function() {
          $(el).addClass('ec-open');
        }, 300);
      },
      afterOpen: function(data, el) {
        var scroll = $(el).find('.ec-scroll');
        if(scroll.length) scroll.perfectScrollbar('update');
      },
      beforeClose: function(data, el) {
        $(el).removeClass('ec-open');
      }
    });
  });
</script>
<?php include('../assets/footer-new.php'); ?>
