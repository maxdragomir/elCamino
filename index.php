<?php include('../assets/header16april2020.php'); ?>
<link rel="stylesheet" href="css/el-camino.css">

<div class="ec-page" v-bind:class="{ 'ec-static_toggle': static.toggle,
                                     'ec-static_night': static.toggle || !static.day,
                                     'ec-static_day': !static.toggle || static.day }">

  <div class="ec-wrap" v-bind:class="{'ec-bet-added' : !game.section.static, 'ec-cloud-pause' : comics.open}">

    <ul class="ec-bread">
      <li><a href="/">home</a></li>
      <li><a href="/">1xgames</a></li>
      <li>El Camino</li>
    </ul>
    <transition
          v-on:before-enter="sectionBefore"
          v-on:after-enter="sectionAfter"
          name="fade"
          mode="out-in"
          appear
          >
      <section class="ec-section ec-section_static" v-bind:class="{'ec-section_move': game.status == 'choose'}" v-if="game.section.static">

        <div class="ec-header">
          <div class="ec-logo ec-header__logo">
            <svg version="1.1" class="ec-logo__triangle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 viewBox="0 0 389 299.5" style="enable-background:new 0 0 389 299.5;" xml:space="preserve">
              <use xlink:href="#ec-logo-triangle"></use>
            </svg>
            <p class="ec-logo__txt"><span>SS</span> 454</p>
            <div class="ec-logo__car-name">chevy</div>
            <p class="ec-logo__title">Все   зависит   от   тебя!</p>
            <canvas width="488px" class="ec-logo__canvas ec-logo__canvas-white"></canvas>
            <canvas width="488px" class="ec-logo__canvas ec-logo__canvas-black"></canvas>
          </div>
        </div>

        <div class="ec-bg ec-bg_day">
          <div class="ec-scale ec-static__scale">
            <div class="ec-bg__bot ec-static__bot">
              <div class="ec-field-part ec-dirt"></div>
            </div>
          </div>
          <div class="ec-bg__bot ec-static__bot">
            <div class="ec-road ec-static__road"></div>
          </div>
          <div class="ec-scale">
            <div class="ec-bg__bot ec-static__bot">
              <div class="ec-road-line ec-static-rline"></div>
            </div>
          </div>
          <div class="ec-bg__top ec-static__top">
            <div class="ec-sky-wrap">
              <div class="ec-sky ec-sky_day">
              </div>
              <div class="ec-bg__sun"></div>
              <div class="ec-sky__clouds">
                <div class="ec-sky__cloud ec-sky__cloud_one"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two ec-sky__cloud_once"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three ec-sky__cloud_once"></div>
              </div>
            </div>
          </div>
          <div class="ec-scale ec-scale_9">
            <div class="ec-bg__bot ec-static__bot">
              <div class="ec-mts ec-mts_pos-c"></div>
              <div class="ec-mts ec-mts_pos-l"></div>
              <div class="ec-mts ec-mts_pos-r"></div>
            </div>
          </div>
          <div class="ec-scale">
            <div class="ec-bg__bot ec-static__bot">
              <div class="ec-rock ec-rock_num1 ec-rock_img1"></div>
              <div class="ec-rock ec-rock_num2 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num7 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num3 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num4 ec-rock_img4"></div>
              <div class="ec-rock ec-rock_num8 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num5 ec-rock_img5"></div>
              <div class="ec-rock ec-rock_num6 ec-rock_img5"></div>
            </div>
          </div>

          <div class="ec-border ec-border_stop">
          </div>

          <div class="ec-car-wrap">
            <div class="ec-car ec-car_static">
              <div class="ec-car__light ec-car__light_front"></div>
              <div class="ec-car__light ec-car__light_back"></div>
            </div>
          </div>
        </div>

        <div class="ec-bg ec-bg_transition">
          <div class="ec-scale ec-static__scale">
            <div class="ec-bg__bot ec-static__bot">
              <div class="ec-field-part ec-dirt"></div>
            </div>
          </div>
          <div class="ec-bg__bot ec-static__bot">
            <div class="ec-road ec-static__road"></div>
          </div>
          <div class="ec-scale">
            <div class="ec-bg__bot ec-static__bot">
              <div class="ec-road-line ec-static-rline"></div>
            </div>
          </div>
          <div class="ec-bg__top ec-static__top">
            <div class="ec-sky-wrap">
              <div class="ec-sky ec-sky_transition">
              </div>
              <div class="ec-sky__clouds">
                <div class="ec-sky__cloud ec-sky__cloud_one"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two ec-sky__cloud_once"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three ec-sky__cloud_once"></div>
              </div>
            </div>
          </div>
          <div class="ec-scale ec-scale_9">
            <div class="ec-bg__bot ec-static__bot">
              <div class="ec-mts ec-mts_pos-c"></div>
              <div class="ec-mts ec-mts_pos-l"></div>
              <div class="ec-mts ec-mts_pos-r"></div>
            </div>
          </div>
          <div class="ec-scale">
            <div class="ec-bg__bot ec-static__bot">
              <div class="ec-rock ec-rock_num1 ec-rock_img1"></div>
              <div class="ec-rock ec-rock_num9 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num7 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num3 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num4 ec-rock_img4"></div>
              <div class="ec-rock ec-rock_num8 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num5 ec-rock_img5"></div>
              <div class="ec-rock ec-rock_num6 ec-rock_img5"></div>
            </div>
          </div>

          <div class="ec-car-wrap">
            <div class="ec-car ec-car_static">
              <div class="ec-car__light ec-car__light_front"></div>
              <div class="ec-car__light ec-car__light_back"></div>
            </div>
          </div>
        </div>

        <div class="ec-bg ec-bg_night">
          <div class="ec-scale ec-static__scale">
            <div class="ec-bg__bot ec-static__bot">
              <div class="ec-field-part ec-dirt"></div>
            </div>
          </div>
          <div class="ec-bg__bot ec-static__bot">
            <div class="ec-road ec-static__road"></div>
          </div>
          <div class="ec-scale">
            <div class="ec-bg__bot ec-static__bot">
              <div class="ec-road-line ec-static-rline"></div>
            </div>
          </div>
          <div class="ec-bg__top ec-static__top">
            <div class="ec-sky-wrap">
              <div class="ec-sky ec-sky_night"></div>
              <div class="ec-bg__moon"></div>
              <div class="ec-sky__clouds">
                <div class="ec-sky__cloud ec-sky__cloud_one"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two ec-sky__cloud_once"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three ec-sky__cloud_once"></div>
              </div>
            </div>
          </div>
          <div class="ec-scale ec-scale_9">
            <div class="ec-bg__bot ec-static__bot">
              <div class="ec-mts ec-mts_pos-c"></div>
              <div class="ec-mts ec-mts_pos-l"></div>
              <div class="ec-mts ec-mts_pos-r"></div>
            </div>
          </div>
          <div class="ec-scale">
            <div class="ec-bg__bot ec-static__bot">
              <div class="ec-rock ec-rock_num1 ec-rock_img1"></div>
              <div class="ec-rock ec-rock_num9 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num7 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num3 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num4 ec-rock_img4"></div>
              <div class="ec-rock ec-rock_num8 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num5 ec-rock_img5"></div>
              <div class="ec-rock ec-rock_num6 ec-rock_img5"></div>
            </div>
          </div>

          <div class="ec-car-wrap">
            <div class="ec-car ec-car_static">
              <div class="ec-car__light ec-car__light_front"></div>
              <div class="ec-car__light ec-car__light_back"></div>
            </div>
          </div>
        </div>

        <div class="ec-footer">
          <div class="ec-footer__in">
            <div class="ec-footer__top">
              <div class="ec-finfo ec-finfo_size_low">
                <div class="ec-finfo__in">
                  <div class="ec-footer__bet ec-bet">
                    <div class="ec-bet__main ec-bet__in"><span>Ставка: {{val}} руб</span></div>
                  </div>
                </div>
              </div>
              <div class="ec-footer__title ec-finfo">
                <div class="ec-finfo__in">сделайте свою ставку</div>
              </div>
              <div class="ec-finfo ec-finfo_size_low"></div>
            </div>

            <div class="ec-footer__bot">

              <div class="ec-footer__row">
                <div class="ec-sbtns ec-footer__cel ec-group-wrap ec-footer__cel_left">
                  <button class="ec-sbtns__btn ec-btn_theme_green" v-for="val in bet.quickSums" :key="val" @click="addUserVal(val)"><span>{{val}}</span></button>
                </div>

                <div class="ec-footer__cel ec-footer__cel_right">
                  <div class="ec-btns-group ec-group-wrap" v-bind:class="{ 'ec-btn-sound_muted': sound.muted}">
                    <div class="ec-btn ec-btn_theme_gray ec-btn_size_s ec-btn-sound_move"></div>
                    <button class="ec-btn ec-btn-sound ec-btn_size_s ec-btn-sound_set_off" :disabled="sound.muted" @click="soundMute(true)">
                      <svg viewBox="0 0 144 144">
                        <use xlink:href="#ec-sound_off"></use>
                      </svg>
                    </button>
                    <button class="ec-btn ec-btn-sound ec-btn_size_s ec-btn-sound_set_on" :disabled="!sound.muted" @click="soundMute(false)">
                      <svg viewBox="0 0 100 100">
                        <use xlink:href="#ec-sound_on"></use>
                      </svg>
                    </button>
                  </div>
                  <div class="ec-btns-group ec-group-wrap">
                    <a href="#" class="ec-btn ec-btn_theme_gray ec-btn_size_s ec-btn-rules"><span>правила</span></a>
                  </div>
                </div>

              </div>

              <div class="ec-footer__row">

                <div class="ec-footer__cel ec-footer__cel_left">
                  <div class="ec-sum-wrap ec-group-wrap">
                    <div class="ec-select" @click="onButtonClick()">
                      <template>
                          <multiselect
                            v-model="select.value"
                            :searchable="false"
                            open-direction="below"
                            :hide-selected="true"
                            select-label= ''
                            :allow-empty="false"
                            :options="select.options"
                            @select="onButtonClick()">
                          </multiselect>
                      </template>
                    </div>

                    <div class="ec-iwrap">
                      <input type="text" class="ec-iwrap__inp" v-model.number="bet.val" @focus="onButtonClick()" v-on:input="onButtonClick()">
                    </div>

                    <button class="ec-reset ec-btn_theme_gray" @click="resetVal"></button>
                  </div>
                </div>

                <div class="ec-footer__cel ec-footer__cel_right">
                  <button class="ec-btn ec-start-btn ec-btn_theme_greenB" :disabled="bet.val < bet.min" @click="startGame"><span>сделать ставку</span></button>
                </div>

              </div>
            </div>
          </div>
        </div>

      </section>
    </transition>
    <transition
        v-on:before-enter="sectionBefore"
        v-on:after-enter="sectionAfter"
        name="fade"
        mode="out-in"
        appear
        >
      <section class="ec-section ec-section_road ec-section_choose" v-bind:class="{'ec-section_move': game.move == 'choose', 'ec-section_hide' : game.testComics }" v-if="game.section.choose">

        <div class="ec-bg ec-bg_day">
          <div class="ec-scale ec-road__scale ec-static__scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-field-part ec-dirt"></div>
            </div>
          </div>
          <div class="ec-bg__bot ec-road__bot">
            <div class="ec-road">
            </div>
          </div>
          <div class="ec-scale ec-road__scale ec-scale_3 ec-scale_turns">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-road">
              </div>
            </div>
          </div>
          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-road-line ec-road-rline"></div>
            </div>
          </div>
          <div class="ec-bg__top ec-road__top">
            <div class="ec-sky-wrap">
              <div class="ec-sky ec-sky_day">
              </div>
              <div class="ec-sky__clouds">
                <div class="ec-sky__cloud ec-sky__cloud_one"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two ec-sky__cloud_once"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three ec-sky__cloud_once"></div>
              </div>
            </div>
          </div>
          <div class="ec-scale ec-road__scale ec-scale_9">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-mts ec-mts_pos-c"></div>
              <div class="ec-mts ec-mts_pos-l"></div>
              <div class="ec-mts ec-mts_pos-r"></div>
            </div>
          </div>

          <div class="ec-car-wrap">
             <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             	 viewBox="0 0 588.5 169.2" style="enable-background:new 0 0 588.5 169.2;" xml:space="preserve" class="ec-car__svg">
               <!-- <path class="ec-road_dir_left" d="M1136.4,161c0,0,4-3.2-125.8-42.8C840,63.2,605,13.2,497,17.7c0,0-293-4.5-497-4.5"/> -->
               <line class="ec-road_dir_mid" x1="437.9" y1="169" x2="329.2" y2="0.3"/>
               <!-- <line class="ec-road_dir_mid" x1="1136.4" y1="161" x2="1005.7" y2="0.3"/> -->
               <path class="ec-road_dir_right" d="M436.9,168c0,0,0.1-21,17.2-38.1S588.2,9.3,588.2,9.3"/>
               <!-- <path class="ec-road_dir_right" d="M1136.4,161c0,0-6.4-140.8,278.7-139.7c0,0,187.9-7.1,506.9-7.1"/> -->
               <path xmlns="http://www.w3.org/2000/svg" class="ec-road_dir_left" d="M436.9,168c0,0-18.6-23.9-90.9-48C308.6,107.6,0.2,8.3,0.2,8.3"/>
            </svg>
            <div class="ec-car ec-car_road">
              <div class="ec-car__sprite"></div>
            </div>
          </div>
          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-rock ec-rock_num1 ec-rock_img1"></div>
              <div class="ec-rock ec-rock_num9 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num7 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num3 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num4 ec-rock_img4"></div>
              <div class="ec-rock ec-rock_num8 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num5 ec-rock_img5"></div>
              <div class="ec-rock ec-rock_num6 ec-rock_img5"></div>
            </div>
          </div>

          <div class="ec-scale ec-scale_2">
            <div class="ec-frame ec-bg__frame">
              <div class="ec-frame__top">
                <button class="ec-frame__btn ec-frame__btn_theme_green" :disabled="!game.dirReady" @click="chooseWay('track', 'left')">
                  <span class="ec-frame__btn-lvl">Легкий</span>
                  <span class="ec-frame__btn-type">Трасса</span>
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_left" viewBox="0 0 69.27 88.92">
                    <use xlink:href="#ec-frame_left"></use>
                  </svg>
                  <span class="ec-frame__btn-coef">коэф: {{coefs.win.track}}</span>
                </button>
                <button class="ec-frame__btn ec-frame__btn_theme_green" :disabled="!game.dirReady" @click="chooseWay('village', 'mid')">
                  <span class="ec-frame__btn-lvl">средний</span>
                  <span class="ec-frame__btn-type">Деревня</span>
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_mid" viewBox="0 0 44.89 88.88">
                    <use xlink:href="#ec-frame_mid"></use>
                  </svg>
                  <span class="ec-frame__btn-coef">коэф: {{coefs.win.village}}</span>
                </button>
                <button class="ec-frame__btn ec-frame__btn_theme_green" :disabled="!game.dirReady" @click="chooseWay('city', 'right')">
                  <span class="ec-frame__btn-lvl">тяжелый</span>
                  <span class="ec-frame__btn-type">Город</span>
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_right"  viewBox="0 0 69.27 88.92">
                    <use xlink:href="#ec-frame_right"></use>
                  </svg>
                  <span class="ec-frame__btn-coef">коэф: {{coefs.win.city}}</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </transition>

    <transition
          v-on:before-enter="sectionBefore"
          v-on:after-enter="sectionAfter"
          name="fade"
          mode="out-in"
          >
      <section class="ec-section ec-section_road ec-section_dir" v-bind:class="{'ec-section_move': game.move == 'dir', 'ec-section_hide' : game.testComics }" v-if="game.section.dir">

        <div class="ec-bg ec-bg_day ec-bg_track" v-if="game.way == 'track'">
          <div class="ec-scale ec-road__scale ec-static__scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-field-part ec-dirt"></div>
            </div>
          </div>
          <div class="ec-bg__bot ec-road__bot">
            <div class="ec-road">
            </div>
          </div>
          <div class="ec-scale ec-road__scale ec-scale_3 ec-scale_turns">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-road">
              </div>
            </div>
          </div>
          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-road-line ec-road-rline"></div>
            </div>
          </div>
          <div class="ec-bg__top ec-road__top">
            <div class="ec-sky-wrap">
              <div class="ec-sky ec-sky_day">
              </div>
              <div class="ec-sky__clouds">
                <div class="ec-sky__cloud ec-sky__cloud_one"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two ec-sky__cloud_once"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three ec-sky__cloud_once"></div>
              </div>
            </div>
          </div>
          <div class="ec-scale ec-road__scale ec-scale_9">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-mts ec-mts_pos-c"></div>
              <div class="ec-mts ec-mts_pos-l"></div>
              <div class="ec-mts ec-mts_pos-r"></div>
            </div>
          </div>
          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-rock ec-rock_num1 ec-rock_img1"></div>
              <div class="ec-rock ec-rock_num9 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num7 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num3 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num4 ec-rock_img4"></div>
              <div class="ec-rock ec-rock_num8 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num5 ec-rock_img5"></div>
              <div class="ec-rock ec-rock_num6 ec-rock_img5"></div>
            </div>
          </div>

          <div class="ec-scale ec-scale_2">
            <div class="ec-frame ec-bg__frame">
              <div class="ec-frame__top">
                <button class="ec-frame__btn ec-frame__btn_theme_blue" :disabled="!game.dirReady" @click="chooseDir('left')">
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_left" viewBox="0 0 69.27 88.92">
                    <use xlink:href="#ec-frame_left"></use>
                  </svg>
                </button>
                <button class="ec-frame__btn ec-frame__btn_theme_blue" :disabled="!game.dirReady" @click="chooseDir('mid')">
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_mid" viewBox="0 0 44.89 88.88">
                    <use xlink:href="#ec-frame_mid"></use>
                  </svg>
                </button>
                <button class="ec-frame__btn ec-frame__btn_theme_blue" :disabled="!game.dirReady" @click="chooseDir('right')">
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_right"  viewBox="0 0 69.27 88.92">
                    <use xlink:href="#ec-frame_right"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>

          <div class="ec-car-wrap">
             <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             	 viewBox="0 0 588.5 169.2" style="enable-background:new 0 0 588.5 169.2;" xml:space="preserve" class="ec-car__svg">
               <!-- <path class="ec-road_dir_left" d="M1136.4,161c0,0,4-3.2-125.8-42.8C840,63.2,605,13.2,497,17.7c0,0-293-4.5-497-4.5"/> -->
               <line class="ec-road_dir_mid" x1="437.9" y1="169" x2="329.2" y2="0.3"/>
               <!-- <line class="ec-road_dir_mid" x1="1136.4" y1="161" x2="1005.7" y2="0.3"/> -->
               <path class="ec-road_dir_right" d="M436.9,168c0,0,0.1-21,17.2-38.1S588.2,9.3,588.2,9.3"/>
               <!-- <path class="ec-road_dir_right" d="M1136.4,161c0,0-6.4-140.8,278.7-139.7c0,0,187.9-7.1,506.9-7.1"/> -->
               <path xmlns="http://www.w3.org/2000/svg" class="ec-road_dir_left" d="M436.9,168c0,0-18.6-23.9-90.9-48C308.6,107.6,0.2,8.3,0.2,8.3"/>
            </svg>
            <div class="ec-car ec-car_road">
              <div class="ec-car__sprite"></div>
            </div>
          </div>
        </div>
        <div class="ec-bg ec-bg_city" v-if="game.way == 'city'">
          <div class="ec-bg__top ec-road__top">
            <div class="ec-sky-wrap">
              <div class="ec-sky ec-sky_city">
              </div>
              <div class="ec-sky__clouds ec-sky__city">
                <div class="ec-sky__cloud ec-sky__cloud_one"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two ec-sky__cloud_once"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three ec-sky__cloud_once"></div>
              </div>
            </div>
          </div>
          <div class="ec-scale ec-scale_9">
            <div class="ec-bg__bot ec-static__bot">
              <div class="ec-city_back"></div>
            </div>
          </div>
          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot">
            </div>
          </div>
          <div class="ec-bg__bot ec-road__bot">
            <div class="ec-road">
            </div>
          </div>
          <div class="ec-scale ec-road__scale ec-scale_turns">
            <div class="ec-bg__bot">
              <div class="ec-road">
              </div>
              <div class="ec-lanterns ec-lanterns_back"></div>
              <div class="ec-lanterns ec-lanterns_front"></div>
            </div>
          </div>
          <div class="ec-scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-build ec-build_num1 ec-build_img1"></div>
              <div class="ec-build ec-build_num2 ec-build_img2"></div>
              <div class="ec-build ec-build_num3 ec-build_img3"></div>
              <div class="ec-build ec-build_num4 ec-build_img4"></div>
              <div class="ec-build ec-build_num5 ec-build_img5"></div>
              <div class="ec-build ec-build_num6 ec-build_img6"></div>
            </div>
          </div>
          <div class="ec-scale ec-scale_lights">
            <div class="ec-bg__bot">
              <div class="ec-lanterns ec-lanterns_back"></div>
              <div class="ec-lanterns ec-lanterns_front"></div>
            </div>
          </div>
          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-road-line ec-road-rline"></div>
            </div>
          </div>
          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot">
            </div>
          </div>

          <div class="ec-scale ec-scale_2">
            <div class="ec-frame ec-bg__frame">
              <div class="ec-frame__top">
                <button class="ec-frame__btn ec-frame__btn_theme_blue" :disabled="!game.dirReady" @click="chooseDir('left')">
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_left" viewBox="0 0 69.27 88.92">
                    <use xlink:href="#ec-frame_left"></use>
                  </svg>
                </button>
                <button class="ec-frame__btn ec-frame__btn_theme_blue" :disabled="!game.dirReady" @click="chooseDir('mid')">
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_mid" viewBox="0 0 44.89 88.88">
                    <use xlink:href="#ec-frame_mid"></use>
                  </svg>
                </button>
                <button class="ec-frame__btn ec-frame__btn_theme_blue" :disabled="!game.dirReady" @click="chooseDir('right')">
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_right"  viewBox="0 0 69.27 88.92">
                    <use xlink:href="#ec-frame_right"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>

          <div class="ec-car-wrap">
             <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             	 viewBox="0 0 588.5 169.2" style="enable-background:new 0 0 588.5 169.2;" xml:space="preserve" class="ec-car__svg">
               <!-- <path class="ec-road_dir_left" d="M1136.4,161c0,0,4-3.2-125.8-42.8C840,63.2,605,13.2,497,17.7c0,0-293-4.5-497-4.5"/> -->
               <line class="ec-road_dir_mid" x1="437.9" y1="169" x2="329.2" y2="0.3"/>
               <!-- <line class="ec-road_dir_mid" x1="1136.4" y1="161" x2="1005.7" y2="0.3"/> -->
               <path class="ec-road_dir_right" d="M436.9,168c0,0,0.1-21,17.2-38.1S588.2,9.3,588.2,9.3"/>
               <!-- <path class="ec-road_dir_right" d="M1136.4,161c0,0-6.4-140.8,278.7-139.7c0,0,187.9-7.1,506.9-7.1"/> -->
               <path xmlns="http://www.w3.org/2000/svg" class="ec-road_dir_left" d="M436.9,168c0,0-18.6-23.9-90.9-48C308.6,107.6,0.2,8.3,0.2,8.3"/>
            </svg>
            <div class="ec-car ec-car_road">
              <div class="ec-car__sprite"></div>
            </div>
          </div>
        </div>
        <div class="ec-bg ec-bg_village" v-if="game.way == 'village'">
          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot">
            </div>
          </div>
          <div class="ec-bg__bot ec-road__bot">
            <div class="ec-road ec-road_village">
            </div>
          </div>
          <div class="ec-scale ec-scale_7 ec-road__scale ec-scale_turns ec-village_turns">
            <div class="ec-bg__bot">
              <div class="ec-road">
              </div>
            </div>
          </div>
          <div class="ec-bg__top ec-road__top">
            <div class="ec-sky-wrap">
              <div class="ec-sky ec-sky_village">
              </div>
              <div class="ec-sky__clouds ec-sky__village">
                <div class="ec-sky__cloud ec-sky__cloud_one"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two ec-sky__cloud_once"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three ec-sky__cloud_once"></div>
              </div>
            </div>
          </div>
          <div class="ec-scale ec-scale_7">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-build ec-build_num7 ec-build_img7"></div>
              <div class="ec-build ec-build_num8 ec-build_img8"></div>
              <div class="ec-build ec-build_num9 ec-build_img9"></div>
              <div class="ec-build ec-build_num10 ec-build_img10"></div>
            </div>
          </div>
          <div class="ec-scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-build ec-build_num11 ec-build_img11"></div>
              <div class="ec-build ec-build_num12 ec-build_img12"></div>
            </div>
          </div>
          <div class="ec-scale ec-scale_7">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-build ec-build_num11 ec-build_img13"></div>
              <div class="ec-build ec-build_num12 ec-build_img14"></div>
            </div>
          </div>
          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot ec-road_stones">
            </div>
          </div>
          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot">
            </div>
          </div>

          <div class="ec-scale ec-scale_2">
            <div class="ec-frame ec-bg__frame">
              <div class="ec-frame__top">
                <button class="ec-frame__btn ec-frame__btn_theme_blue" :disabled="!game.dirReady" @click="chooseDir('left')">
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_left" viewBox="0 0 69.27 88.92">
                    <use xlink:href="#ec-frame_left"></use>
                  </svg>
                </button>
                <button class="ec-frame__btn ec-frame__btn_theme_blue" :disabled="!game.dirReady" @click="chooseDir('mid')">
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_mid" viewBox="0 0 44.89 88.88">
                    <use xlink:href="#ec-frame_mid"></use>
                  </svg>
                </button>
                <button class="ec-frame__btn ec-frame__btn_theme_blue" :disabled="!game.dirReady" @click="chooseDir('right')">
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_right"  viewBox="0 0 69.27 88.92">
                    <use xlink:href="#ec-frame_right"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>

          <div class="ec-car-wrap">
             <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             	 viewBox="0 0 588.5 169.2" style="enable-background:new 0 0 588.5 169.2;" xml:space="preserve" class="ec-car__svg">
               <line class="ec-road_dir_mid" x1="437.9" y1="169" x2="329.2" y2="0.3"/>
               <path class="ec-road_dir_right" d="M436.9,168c0,0,0.1-21,17.2-38.1S588.2,9.3,588.2,9.3"/>
               <path xmlns="http://www.w3.org/2000/svg" class="ec-road_dir_left" d="M436.9,168c0,0-18.6-23.9-90.9-48C308.6,107.6,0.2,8.3,0.2,8.3"/>
            </svg>
            <div class="ec-car ec-car_road">
              <div class="ec-car__sprite"></div>
            </div>
          </div>
        </div>
      </section>
    </transition>

    <transition
        v-on:before-enter="sectionBefore"
        v-on:after-enter="sectionAfter"
        name="fade"
        mode="out-in"
        >
      <section class="ec-section ec-section_road ec-section_coef" v-bind:class="{'ec-section_move': game.move == 'coef', 'ec-section_hide' : game.testComics }" v-if="game.section.coef">

        <div class="ec-bg ec-bg_day">
          <div class="ec-scale ec-road__scale ec-static__scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-field-part ec-dirt"></div>
            </div>
          </div>
          <div class="ec-bg__bot ec-road__bot">
            <div class="ec-road">
            </div>
          </div>
          <div class="ec-scale ec-road__scale ec-scale_3 ec-scale_turns">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-road">
              </div>
            </div>
          </div>
          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-road-line ec-road-rline"></div>
            </div>
          </div>
          <div class="ec-bg__top ec-road__top">
            <div class="ec-sky-wrap">
              <div class="ec-sky ec-sky_day">
              </div>
              <div class="ec-sky__clouds">
                <div class="ec-sky__cloud ec-sky__cloud_one"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two ec-sky__cloud_once"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three ec-sky__cloud_once"></div>
              </div>
            </div>
          </div>
          <div class="ec-scale ec-road__scale ec-scale_9">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-mts ec-mts_pos-c"></div>
              <div class="ec-mts ec-mts_pos-l"></div>
              <div class="ec-mts ec-mts_pos-r"></div>
            </div>
          </div>

          <div class="ec-car-wrap">
             <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             	 viewBox="0 0 588.5 169.2" style="enable-background:new 0 0 588.5 169.2;" xml:space="preserve" class="ec-car__svg">
               <!-- <path class="ec-road_dir_left" d="M1136.4,161c0,0,4-3.2-125.8-42.8C840,63.2,605,13.2,497,17.7c0,0-293-4.5-497-4.5"/> -->
               <line class="ec-road_dir_mid" x1="437.9" y1="169" x2="329.2" y2="0.3"/>
               <!-- <line class="ec-road_dir_mid" x1="1136.4" y1="161" x2="1005.7" y2="0.3"/> -->
               <path class="ec-road_dir_right" d="M436.9,168c0,0,0.1-21,17.2-38.1S588.2,9.3,588.2,9.3"/>
               <!-- <path class="ec-road_dir_right" d="M1136.4,161c0,0-6.4-140.8,278.7-139.7c0,0,187.9-7.1,506.9-7.1"/> -->
               <path xmlns="http://www.w3.org/2000/svg" class="ec-road_dir_left" d="M436.9,168c0,0-18.6-23.9-90.9-48C308.6,107.6,0.2,8.3,0.2,8.3"/>
            </svg>
            <div class="ec-car ec-car_road">
              <div class="ec-car__sprite"></div>
            </div>
          </div>

          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-rock ec-rock_num1 ec-rock_img1"></div>
              <div class="ec-rock ec-rock_num9 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num7 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num3 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num4 ec-rock_img4"></div>
              <div class="ec-rock ec-rock_num8 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num5 ec-rock_img5"></div>
              <div class="ec-rock ec-rock_num6 ec-rock_img5"></div>
            </div>
          </div>

          <div class="ec-scale ec-scale_2">
            <div class="ec-frame ec-bg__frame">

            <div class="ec-sign ec-sign_border">
              <p class="ec-sign__in">внимание! контроль 1 км</p>

              <div class="ec-sign_border_shad"></div>
            </div>
              <div class="ec-frame__top">
                <button class="ec-frame__btn ec-frame__btn_theme_orange" :disabled="!game.dirReady || !game.roadActive[0]" v-bind:class="{'ec-frame__btn_stop': !game.roadActive[0]}" @click="changeCoef('left')">
                  <span class="ec-frame__btn-stop" v-if="!game.roadActive[0]">
                    <span class="ec-frame__btn-stxt">на ремонте</span>
                  </span>
                  <span class="ec-frame__btn-lvl">Легкий</span>
                  <span class="ec-frame__btn-type">Граница</span>
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_left" viewBox="0 0 69.27 88.92">
                    <use xlink:href="#ec-frame_left"></use>
                  </svg>
                  <span class="ec-frame__btn-coef" v-if="game.roadActive[0]">коэф: 1.2</span>
                </button>
                <button class="ec-frame__btn ec-frame__btn_theme_orange" :disabled="!game.dirReady || !game.roadActive[1]" v-bind:class="{'ec-frame__btn_stop': !game.roadActive[1]}" @click="changeCoef('mid')">
                  <span class="ec-frame__btn-stop" v-if="!game.roadActive[1]">
                    <span class="ec-frame__btn-stxt">на ремонте</span>
                  </span>
                  <span class="ec-frame__btn-lvl">средний</span>
                  <span class="ec-frame__btn-type">Граница</span>
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_mid" viewBox="0 0 44.89 88.88">
                    <use xlink:href="#ec-frame_mid"></use>
                  </svg>
                  <span class="ec-frame__btn-coef" v-if="game.roadActive[1]">коэф: 2.1</span>
                </button>
                <button class="ec-frame__btn ec-frame__btn_theme_orange" :disabled="!game.dirReady || !game.roadActive[2]" v-bind:class="{'ec-frame__btn_stop': !game.roadActive[2]}" @click="changeCoef('right')">
                  <span class="ec-frame__btn-stop" v-if="!game.roadActive[2]">
                    <span class="ec-frame__btn-stxt">на ремонте</span>
                  </span>
                  <span class="ec-frame__btn-lvl">тяжелый</span>
                  <span class="ec-frame__btn-type">Граница</span>
                  <svg class="ec-frame__btn-dir ec-frame__btn-dir_right"  viewBox="0 0 69.27 88.92">
                    <use xlink:href="#ec-frame_right"></use>
                  </svg>
                  <span class="ec-frame__btn-coef" v-if="game.roadActive[2]">коэф: 4.0</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </transition>

    <transition
        v-on:before-enter="sectionBefore"
        v-on:after-enter="sectionAfter"
        name="fade"
        mode="out-in"
        >
      <section class="ec-section ec-section_road ec-section_border" v-bind:class="{'ec-section_move': game.move == 'border', 'ec-section_hide' : game.testComics }" v-if="game.section.border">

        <div class="ec-bg ec-bg_day">
          <div class="ec-scale ec-road__scale ec-static__scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-field-part ec-dirt"></div>
            </div>
          </div>
          <div class="ec-bg__bot ec-road__bot">
            <div class="ec-road">
            </div>
          </div>
          <div class="ec-scale ec-road__scale">
          </div>
          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-road-line ec-road-rline"></div>
            </div>
          </div>
          <div class="ec-bg__top ec-road__top">
            <div class="ec-sky-wrap">
              <div class="ec-sky ec-sky_day">
              </div>
              <div class="ec-sky__clouds">
                <div class="ec-sky__cloud ec-sky__cloud_one"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three"></div>
                <div class="ec-sky__cloud ec-sky__cloud_two ec-sky__cloud_once"></div>
                <div class="ec-sky__cloud ec-sky__cloud_three ec-sky__cloud_once"></div>
              </div>
            </div>
          </div>
          <div class="ec-scale ec-road__scale ec-scale_9">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-mts ec-mts_pos-c"></div>
              <div class="ec-mts ec-mts_pos-l"></div>
              <div class="ec-mts ec-mts_pos-r"></div>
            </div>
          </div>

          <div class="ec-scale ec-scale_3 ec-scale_border">
            <div class="ec-border ec-border_stop">
            </div>
          </div>

          <div class="ec-car-wrap">
             <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             	 viewBox="0 0 588.5 169.2" style="enable-background:new 0 0 588.5 169.2;" xml:space="preserve" class="ec-car__svg">
               <!-- <path class="ec-road_dir_left" d="M1136.4,161c0,0,4-3.2-125.8-42.8C840,63.2,605,13.2,497,17.7c0,0-293-4.5-497-4.5"/> -->
               <line class="ec-road_dir_mid" x1="437.9" y1="169" x2="329.2" y2="0.3"/>
               <!-- <line class="ec-road_dir_mid" x1="1136.4" y1="161" x2="1005.7" y2="0.3"/> -->
               <path class="ec-road_dir_right" d="M436.9,168c0,0,0.1-21,17.2-38.1S588.2,9.3,588.2,9.3"/>
               <!-- <path class="ec-road_dir_right" d="M1136.4,161c0,0-6.4-140.8,278.7-139.7c0,0,187.9-7.1,506.9-7.1"/> -->
               <path xmlns="http://www.w3.org/2000/svg" class="ec-road_dir_left" d="M436.9,168c0,0-18.6-23.9-90.9-48C308.6,107.6,0.2,8.3,0.2,8.3"/>
            </svg>
            <div class="ec-car ec-car_road">
              <div class="ec-car__sprite"></div>
            </div>
          </div>

          <div class="ec-scale ec-road__scale">
            <div class="ec-bg__bot ec-road__bot">
              <div class="ec-rock ec-rock_num1 ec-rock_img1"></div>
              <div class="ec-rock ec-rock_num9 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num7 ec-rock_img2"></div>
              <div class="ec-rock ec-rock_num3 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num4 ec-rock_img4"></div>
              <div class="ec-rock ec-rock_num8 ec-rock_img3"></div>
              <div class="ec-rock ec-rock_num5 ec-rock_img5"></div>
              <div class="ec-rock ec-rock_num6 ec-rock_img5"></div>
            </div>
          </div>
        </div>

      </section>
    </transition>

    <div class="ec-footer ec-panel" v-if="game.started">
      <div class="ec-footer__in">
        <div class="ec-footer__top">
          <div class="ec-finfo ec-finfo_size_low">
            <div class="ec-finfo__in">
              <div class="ec-footer__bet ec-bet" v-bind:class="{'ec-bet_rem': bet.change < 0,
                                                                'ec-bet_add': bet.change > 0,
                                                                'ec-bet_change' : bet.isChange}">
                <div class="ec-bet__change ec-bet__in"><span>{{bet.change}}</span></div>
                <div class="ec-bet__main ec-bet__in"><span>Ставка: {{val}} руб</span></div>
              </div>
            </div>
          </div>

          <div class="ec-footer__title ec-finfo">
            <div class="ec-finfo__in ec-hint ec-hint-drum" v-bind:class="'ec-hint_'+hint">
              <p class="ec-hint__choose">Выберите дорогу</p>
              <p class="ec-hint__win">Выигрыш: <br> <span class="ec-win-hsum"></span> RUB.<br> Играем еще?</p>
              <p class="ec-hint__inp">Для начала игры нажмите “СТАРТ“</p>
              <p class="ec-hint-lose">Попробуйте еще раз</p>
              <p class="ec-hint-reset">Минимальная сумма ставки составляет 10.00 RUB!</p>
            </div>
          </div>
          <div class="ec-coef ec-footer__coef ec-finfo ec-finfo_size_low">
            <div class="ec-finfo__in ec-coef__in">
              <p class="ec-coef__txt" v-bind:class="{'ec-coef_up': coefs.cur > 1,
                                  'ec-coef_down': coefs.cur < 1,
                                  'ec-coef_change': coefs.change}"><span>Текущий коэф: {{coefs.cur}}</span></p>
            </div>
          </div>
        </div>

        <div class="ec-footer__bot ec-panel__info">
          <div class="ec-turns">
            <div class="ec-turns__item ec_turns__item_left" v-bind:class="{'ec-turns__item_on': car.dir === 'left'}"></div>
            <div class="ec-turns__item ec-turns__item_right" v-bind:class="{'ec-turns__item_on': car.dir === 'right'}"></div>
          </div>


          <div class="ec-tachometer ec-footer__tachometer" v-bind:class="{'ec-tachometer_start' : !car.end }">

          </div>

          <div class="ec-speedometer ec-footer__speedometer" v-bind:class="{'ec-speedometer_start' : !car.end }"></div>

          <div class="ec-footer__icon ec-footer__icon_warning">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 512 461.48" style="enable-background:new 0 0 512 461.48;" xml:space="preserve">
              <use xlink:href="#ec-warning-icon"></use>
            </svg>
          </div>
          <div class="ec-footer__icon ec-footer__icon_engine">
            <svg viewBox="0 0 662.21 488.08">
              <use xlink:href="#ec-engine-icon"></use>
            </svg>
          </div>
          <div class="ec-footer__icon ec-footer__icon_fuel">
            <svg viewBox="0 0 100.05 87.93">
              <use xlink:href="#ec-fuel-icon"></use>
            </svg>
          </div>

          <div class="ec-radio" mousedown="return false" onselectstart="return false">
            <div class="ec-radio__prog">
              <div class="ec-radio__prog-drag" v-bind:class="'ec-radio__prog-drag_count_'+sound.radio"></div>
            </div>

            <div class="ec-radio__hint">
              <p v-if="sound.muted">звук выключен</p>
              <p v-else>выбери радиоволну</p>
            </div>

            <ul class="ec-radio__list">
              <li class="ec-radio__list-el" v-for="item in 3">
                <button class="ec-radio__list-btn" :disabled="sound.muted" @click="updateRadio(item)" v-bind:class="{ 'ec-radio__list-btn_active': item == sound.radio }">{{item}}</button>
              </li>
            </ul>

            <button class="ec-radio__btn ec-radio__btn_set_on"  :disabled="!sound.muted" @click="soundMute(false)">
              <svg viewBox="0 0 100 100">
                <use xlink:href="#ec-sound_on"></use>
              </svg>
            </button>
            <button class="ec-radio__btn ec-radio__btn_set_off"  :disabled="sound.muted" @click="soundMute(true)">
              <svg viewBox="0 0 144 144">
                <use xlink:href="#ec-sound_off"></use>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>


    <modal name="comics-start"
         :adaptive="true"
         height="auto"
         width="100%"
         :click-to-close="false"
         @before-open="beforeComicsOpen"
         @before-close="beforeComicsClose"
         @opened="comicsOpened"
         @closed="comicsClosed"
         >

      <section class="ec-comics ec-comics_start" v-bind:class="{'ec-comics_anim_stop' : comics.skip}">
        <div class="ec-comics__txt-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
        <div class="ec-comics__in">
          <div class="ec-comics__slide ec-comics__slide_1" style="background-image: url(img/el-camino/comics/screen1.jpg)"></div>
          <div class="ec-comics__slide ec-comics__slide_2" style="background-image: url(img/el-camino/comics/screen2.png)"></div>
          <div class="ec-comics__slide ec-comics__slide_3" style="background-image: url(img/el-camino/comics/screen3.png)"></div>
          <div class="ec-comics__slide ec-comics__slide_4 ec-comics__slide_anim" data-dur="3000">
           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1120 449" xml:space="preserve">
             <mask id="ec-mask-screen4">
               <image width="100%" height="100%" xlink:href="img/el-camino/comics/screen4/mask.png" />
             </mask>
             <image class="ec-comics__slide-part ec-comics__slide_bg" width="100%" height="100%" xlink:href="img/el-camino/comics/screen4/bg.png"/>
             <g mask="url(#ec-mask-screen4)" class="ec-comics__parts">
               <image class="ec-comics__slide-part ec-comics__slide-part_anim_tl ec-comics__slide-part_dur_44" width="100%" height="100%" xlink:href="img/el-camino/comics/screen4/el1.png"/>
             </g>
           </svg>
          </div>
          <div class="ec-comics__slide ec-comics__slide_5" style="background-image: url(img/el-camino/comics/screen5.jpg)">>
           <div class="ec-comics__txt ec-comics__txt_rt ec-comics__slide-part">
             <p class="ec-comics__txt-in">Осталось провезти через границу и дело в шляпе</p>
           </div>
          </div>
          <div class="ec-comics__slide ec-comics__slide_6" style="background-image: url(img/el-camino/comics/screen6.jpg)"></div>
          <div class="ec-comics__slide ec-comics__slide_7" style="background-image: url(img/el-camino/comics/screen7.jpg)"></div>
          <div class="ec-comics__slide ec-comics__slide_8 ec-comics__slide_anim" data-dur="3000">
           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 965 629" xml:space="preserve">
             <image class="ec-comics__slide-part ec-comics__slide_bg" width="100%" height="100%" xlink:href="img/el-camino/comics/screen8/bg.jpg"/>
             <g class="ec-comics__slide-part">
               <image class="ec-comics__slide-part ec-comics__slide-part_anim_sc ec-comics__slide-part_dur_36" width="100%" height="100%" xlink:href="img/el-camino/comics/screen8/el1.png"/>
             </g>
           </svg>
          </div>
          <div class="ec-comics__slide ec-comics__slide_9" style="background-image: url(img/el-camino/comics/screen9.png)"></div>
          <div class="ec-comics__slide ec-comics__slide_10 ec-comics__slide_anim" data-dur="3000">
           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1302 396" xml:space="preserve">
             <mask id="ec-mask-screen10">
               <image width="100%" height="100%" xlink:href="img/el-camino/comics/screen10/mask.png" />
             </mask>
             <image class="ec-comics__slide-part ec-comics__slide_bg" width="100%" height="100%" xlink:href="img/el-camino/comics/screen10/bg.png"/>
             <g mask="url(#ec-mask-screen10)" class="ec-comics__parts">
               <g class="ec-comics__slide-part">
                 <image class="ec-comics__slide-part ec-comics__slide_10_1 ec-comics__slide-part_dur_44" width="100%" height="100%" xlink:href="img/el-camino/comics/screen10/el1.png"/>
               </g>
             </g>
           </svg>
          </div>

          <div class="ec-comics__int">
           <!-- <button class="ec-comics__btn ec-comics__btn_next" :disabled="comics.slidesOff" @click="skipSlide()">
             <svg viewBox="0 0 15 23" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__next"></use>
             </svg>
           </button> -->
           <!-- <button class="ec-comics__btn ec-comics__btn_end" :disabled="comics.slidesOff" @click="skipAll()">
             <svg viewBox="0 0 26.19 23.19" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__end"></use>
             </svg>
           </button> -->
           <button class="ec-comics__btn ec-comics__btn_close" @click="closeComics()">
             <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
               <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
             </svg>
             <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__close"></use>
             </svg>
           </button>
           <!-- <button class="ec-comics__btn ec-comics__btn_pause" v-bind:class="{'ec-comics__btn_active': comics.paused}" @click="toggleComics()" v-else>
             <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
               <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
             </svg>
             <svg viewBox="0 0 15 23" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__toggle"></use>
             </svg>
           </button> -->
          </div>
        </div>
      </section>
    </modal>

    <modal name="comics-money"
         :adaptive="true"
         height="auto"
         width="100%"
         :click-to-close="false"
         @before-open="beforeComicsOpen"
         @before-close="beforeComicsClose"
         @opened="comicsOpened"
         @closed="comicsClosed"
         >

      <section class="ec-comics ec-comics_money" v-bind:class="{'ec-comics_anim_stop' : comics.skip}">

        <div class="ec-comics__txt-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
        <div class="ec-comics__in">
          <div class="ec-comics__slide ec-comics__slide_1" style="background-image: url(img/el-camino/comics2/screen1.png)">
           <div class="ec-comics__sign">ВНИМАНИЕ! контроль 1 км</div>
          </div>
          <div class="ec-comics__slide ec-comics__slide_2" style="background-image: url(img/el-camino/comics2/screen2.png)"></div>
          <div class="ec-comics__slide ec-comics__slide_3" style="background-image: url(img/el-camino/comics2/screen3.jpg)"></div>
          <div class="ec-comics__slide ec-comics__slide_4" style="background-image: url(img/el-camino/comics2/screen4.jpg)"></div>
          <div class="ec-comics__slide ec-comics__slide_5" style="background-image: url(img/el-camino/comics2/screen5.png)"></div>
          <div class="ec-comics__slide ec-comics__slide_6 ec-comics__slide_anim">
           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 350 262" xml:space="preserve">
             <mask id="ec-mask-screen7">
               <image width="100%" height="100%" xlink:href="img/el-camino/comics2/screen6/mask.png" />
             </mask>
             <image class="ec-comics__slide-part ec-comics__slide_bg" width="100%" height="100%" xlink:href="img/el-camino/comics2/screen6/bg.png"/>
             <g mask="url(#ec-mask-screen6)" class="ec-comics__parts">
               <image class="ec-comics__slide-part ec-comics__slide-part_anim_fl ec-comics__slide-part_easing_out ec-comics__slide-part_dur_20" width="100%" height="100%" xlink:href="img/el-camino/comics2/screen6/el1.png"/>
             </g>
           </svg>
           <div class="ec-comics__txt ec-comics__txt_br ec-comics__slide-part">
             <p class="ec-comics__txt-in">Может припрятать деньги?...</p>
           </div>
          </div>
          <div class="ec-comics__slide ec-comics__slide_7" style="background-image: url(img/el-camino/comics2/screen7.jpg)"></div>
          <div class="ec-comics__slide ec-comics__slide_8" style="background-image: url(img/el-camino/comics2/screen8.png)">
           <div class="ec-comics__txt ec-comics__txt_br2 ec-comics__slide-part">
             <p class="ec-comics__txt-in">Сюда влезет только половина...</p>
           </div>
          </div>
          <div class="ec-comics__slide ec-comics__slide_9" style="background-image: url(img/el-camino/comics2/screen9.png)"></div>
          <div class="ec-comics__slide ec-comics__slide_10" style="background-image: url(img/el-camino/comics2/screen10.png)"></div>
          <div class="ec-comics__slide ec-comics__slide_11" style="background-image: url(img/el-camino/comics2/screen11.png)"></div>

          <div class="ec-comics__int">
           <!-- <button class="ec-comics__btn ec-comics__btn_next" :disabled="comics.slidesOff" @click="skipSlide()">
             <svg viewBox="0 0 15 23" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__next"></use>
             </svg>
           </button> -->
           <!-- <button class="ec-comics__btn ec-comics__btn_end" :disabled="comics.slidesOff" @click="skipAll()">
             <svg viewBox="0 0 26.19 23.19" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__end"></use>
             </svg>
           </button> -->
           <button class="ec-comics__btn ec-comics__btn_close" @click="closeComics()">
             <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
               <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
             </svg>
             <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__close"></use>
             </svg>
           </button>
           <!-- <button class="ec-comics__btn ec-comics__btn_pause" v-bind:class="{'ec-comics__btn_active': comics.paused}" @click="toggleComics()" v-else>
             <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
               <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
             </svg>
             <svg viewBox="0 0 15 23" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__toggle"></use>
             </svg>
           </button> -->
          </div>
        </div>
      </section>
    </modal>

    <modal name="comics-money2"
         :adaptive="true"
         height="auto"
         width="100%"
         :click-to-close="false"
         @before-open="beforeComicsOpen"
         @before-close="beforeComicsClose"
         @opened="comicsOpened"
         @closed="comicsClosed">

      <section class="ec-comics ec-comics_money ec-comics_money2" v-bind:class="{'ec-comics_anim_stop' : comics.skip}">
        <div class="ec-comics__txt-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
        <div class="ec-comics__in">
          <div class="ec-comics__slide ec-comics__slide_1" style="background-image: url(img/el-camino/comics2/screen1.png)">
           <div class="ec-comics__sign">ВНИМАНИЕ! контроль 1 км</div>
          </div>
          <div class="ec-comics__slide ec-comics__slide_2" style="background-image: url(img/el-camino/comics2/screen2.png)"></div>
          <div class="ec-comics__slide ec-comics__slide_3" style="background-image: url(img/el-camino/comics2/screen3.jpg)"></div>
          <div class="ec-comics__slide ec-comics__slide_4" style="background-image: url(img/el-camino/comics2/screen4.jpg)"></div>
          <div class="ec-comics__slide ec-comics__slide_5" style="background-image: url(img/el-camino/comics2/screen5.png)"></div>
          <div class="ec-comics__slide ec-comics__slide_6 ec-comics__slide_anim">
           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 350 262" xml:space="preserve">
             <mask id="ec-mask-screen7">
               <image width="100%" height="100%" xlink:href="img/el-camino/comics2/screen6/mask.png" />
             </mask>
             <image class="ec-comics__slide-part ec-comics__slide_bg" width="100%" height="100%" xlink:href="img/el-camino/comics2/screen6/bg.png"/>
             <g mask="url(#ec-mask-screen6)" class="ec-comics__parts">
               <image class="ec-comics__slide-part ec-comics__slide-part_anim_fl ec-comics__slide-part_easing_out ec-comics__slide-part_dur_20" width="100%" height="100%" xlink:href="img/el-camino/comics2/screen6/el1.png"/>
             </g>
           </svg>
           <div class="ec-comics__txt ec-comics__txt_br ec-comics__slide-part">
             <p class="ec-comics__txt-in">Может припрятать деньги?...</p>
           </div>
          </div>
          <div class="ec-comics__slide ec-comics__slide_7" style="background-image: url(img/el-camino/comics2/screen7.jpg)"></div>
          <div class="ec-comics__slide ec-comics__slide_8" style="background-image: url(img/el-camino/comics2/screen8.png)">
          </div>
          <div class="ec-comics__slide ec-comics__slide_12" style="background-image: url(img/el-camino/comics2/screen12.png)">
           <div class="ec-comics__txt ec-comics__txt_bl ec-comics__slide-part">
             <p class="ec-comics__txt-in">"Да ладно, проскочим!"</p>
           </div>
          </div>
          <div class="ec-comics__slide ec-comics__slide_13" style="background-image: url(img/el-camino/comics2/screen13.jpg)"></div>

          <div class="ec-comics__int">
           <!-- <button class="ec-comics__btn ec-comics__btn_next" :disabled="comics.slidesOff" @click="skipSlide()">
             <svg viewBox="0 0 15 23" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__next"></use>
             </svg>
           </button> -->
           <!-- <button class="ec-comics__btn ec-comics__btn_end" :disabled="comics.slidesOff" @click="skipAll()">
             <svg viewBox="0 0 26.19 23.19" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__end"></use>
             </svg>
           </button> -->
           <button class="ec-comics__btn ec-comics__btn_close" @click="closeComics()">
             <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
               <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
             </svg>
             <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__close"></use>
             </svg>
           </button>
           <!-- <button class="ec-comics__btn ec-comics__btn_pause" v-bind:class="{'ec-comics__btn_active': comics.paused}" @click="toggleComics()" v-else>
             <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
               <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
             </svg>
             <svg viewBox="0 0 15 23" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__toggle"></use>
             </svg>
           </button> -->
          </div>
        </div>
      </section>
    </modal>

    <modal name="track-border"
         :adaptive="true"
         height="auto"
         width="100%"
         :click-to-close="false"
         @before-open="beforeComicsOpen"
         @before-close="beforeComicsClose"
         @opened="comicsOpened"
         @closed="comicsClosed">

      <section class="ec-comics ec-comics_border" v-bind:class="{'ec-comics_anim_stop' : comics.skip}">
        <div class="ec-comics__txt-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
        <div class="ec-comics__in">
          <div class="ec-comics__slide ec-comics__slide_1 ec-comics__slide_anim" data-dur="3000">
           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 812 419" xml:space="preserve">
             <mask id="ec-mask-screen1">
               <image width="100%" height="100%" xlink:href="img/el-camino/comics3/screen1/mask.png" />
             </mask>
             <image class="ec-comics__slide-part ec-comics__slide_bg" width="100%" height="100%" xlink:href="img/el-camino/comics3/screen1/bg.jpg"/>
             <g mask="url(#ec-mask-screen1)" class="ec-comics__parts">
               <image class="ec-comics__slide-part ec-comics__slide-part_anim_rt2 ec-comics__slide-part_easing_out ec-comics__slide-part_dur_30" width="100%" height="100%" xlink:href="img/el-camino/comics3/screen1/el1.png"/>
             </g>
           </svg>
          </div>
          <div class="ec-comics__slide ec-comics__slide_2 ec-comics__slide_anim" data-dur="3000">
           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 927 419" xml:space="preserve">
             <mask id="ec-mask-screen2">
               <image width="100%" height="100%" xlink:href="img/el-camino/comics3/screen2/mask.png" />
             </mask>
             <image class="ec-comics__slide-part ec-comics__slide_bg" width="100%" height="100%" xlink:href="img/el-camino/comics3/screen2/bg.png"/>
             <g mask="url(#ec-mask-screen2)" class="ec-comics__parts">
               <image class="ec-comics__slide-part ec-comics__slide-part_anim_lt ec-comics__slide-part_dur_30 ec-comics__slide-part_easing_out" width="100%" height="100%" xlink:href="img/el-camino/comics3/screen2/el1.png"/>
             </g>
           </svg>
          </div>
          <div class="ec-comics__slide ec-comics__slide_3" style="background-image: url(img/el-camino/comics3/screen3.png)"></div>

          <div v-if="border.situation === 0">
            <div class="ec-comics__slide ec-comics__slide_4" style="background-image: url(img/el-camino/comics3/screen4.png)"></div>
            <div class="ec-comics__slide ec-comics__slide_5" style="background-image: url(img/el-camino/comics3/screen5.png)"></div>
            <div class="ec-comics__slide ec-comics__slide_6" style="background-image: url(img/el-camino/comics3/screen6.jpg)"></div>
            <div class="ec-comics__slide ec-comics__slide_7 ec-comics__slide_anim" data-dur="3000">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1656 458" xml:space="preserve">
             <mask id="ec-mask-screen7">
               <image width="100%" height="100%" xlink:href="img/el-camino/comics3/screen7/mask.png" />
             </mask>
                <image class="ec-comics__slide-part ec-comics__slide_bg" width="100%" height="100%" xlink:href="img/el-camino/comics3/screen7/bg.png"/>
                <g mask="url(#ec-mask-screen7)" class="ec-comics__parts">
                  <image class="ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_easing_out ec-comics__slide-part_dur_30" width="100%" height="100%" xlink:href="img/el-camino/comics3/screen7/el2.png"/>
                  <image class="ec-comics__slide-part ec-comics__slide-part_anim_r ec-comics__slide-part_easing_out ec-comics__slide-part_dur_30" width="100%" height="100%" xlink:href="img/el-camino/comics3/screen7/el3.png"/>
                  <image class="ec-comics__slide-part" width="100%" height="100%" xlink:href="img/el-camino/comics3/screen7/el1.png"/>
                </g>
           </svg>
            </div>
            <div class="ec-comics__slide ec-comics__slide_8 ec-comics__slide_anim" data-dur="3000">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1121 281" xml:space="preserve">
             <mask id="ec-mask-screen8">
               <image width="100%" height="100%" xlink:href="img/el-camino/comics3/screen8/mask.png" />
             </mask>
                <image class="ec-comics__slide-part ec-comics__slide_bg" width="100%" height="100%" xlink:href="img/el-camino/comics3/screen8/bg.png"/>
                <g mask="url(#ec-mask-screen8)" class="ec-comics__parts">
                  <g class="ec-comics__slide-part">
                    <image class="ec-comics__slide-part ec-comics__slide-part_anim_rs ec-comics__slide-part_dur_36 ec-comics__slide-part_easing_out" width="100%" height="100%" xlink:href="img/el-camino/comics3/screen8/el1.png"/>
                    <image class="ec-comics__slide-part ec-comics__slide-part_anim_sc ec-comics__slide-part_dur_36 ec-comics__slide-part_easing_out" width="100%" height="100%" xlink:href="img/el-camino/comics3/screen8/el2.png"/>
                  </g>
                </g>
           </svg>
            </div>
            <div class="ec-comics__slide ec-comics__slide_9" style="background-image: url(img/el-camino/comics3/screen9.png)"></div>
          </div>

          <div v-else-if="border.situation === 1">
            <div class="ec-comics__slide ec-comics__slide_4 ec-comics__slide_group1_4" style="background-image: url(img/el-camino/comics3/group2/screen4.png)"></div>
            <div class="ec-comics__slide ec-comics__slide_5 ec-comics__slide_group1_5 ec-comics__slide_anim" style="background-image: url(img/el-camino/comics3/group2/screen5.png)">
              <div class="ec-comics__slide-text ec-comics__slide-part ec-comics__slide-part_anim_rf ec-comics__slide-part_easing_out ec-comics__slide-part_dur_20">Пограничный контроль</div>
            </div>
            <div class="ec-comics__slide ec-comics__slide_6 ec-comics__slide_group1_6" style="background-image: url(img/el-camino/comics3/group2/screen6.png)"></div>
            <div class="ec-comics__slide ec-comics__slide_7 ec-comics__slide_group1_7 ec-comics__slide_anim" style="background-image: url(img/el-camino/comics3/group2/screen7.png)">
              <div class="ec-comics__slide-text ec-comics__slide-text_7 ec-comics__slide-part ec-comics__slide-part_anim_lf ec-comics__slide-part_easing_out ec-comics__slide-part_dur_20">Нашли не задекларированную сумму. Конфискуем!</div>
            </div>
            <div class="ec-comics__slide ec-comics__slide_8 ec-comics__slide_group1_8 ec-comics__slide_anim" style="background-image: url(img/el-camino/comics3/group2/screen8.png)"></div>
            <div class="ec-comics__slide ec-comics__slide_9 ec-comics__slide_group1_9 ec-comics__slide_anim" style="background-image: url(img/el-camino/comics3/group2/screen9.png)">
              <div class="ec-comics__slide-text ec-comics__slide-text_9 ec-comics__slide-part ec-comics__slide-part_anim_rf ec-comics__slide-part_easing_out ec-comics__slide-part_dur_20">Хорошо, что я припрятал половину!</div>
            </div>
          </div>



          <div v-else>
            <div class="ec-comics__slide ec-comics__slide_4 ec-comics__slide_group1_4" style="background-image: url(img/el-camino/comics3/group2/screen4.png)"></div>
            <div class="ec-comics__slide ec-comics__slide_5 ec-comics__slide_group1_5 ec-comics__slide_anim" style="background-image: url(img/el-camino/comics3/group2/screen5.png)">
              <div class="ec-comics__slide-text ec-comics__slide-part ec-comics__slide-part_anim_rf ec-comics__slide-part_easing_out ec-comics__slide-part_dur_20">Пограничный контроль</div>
            </div>
            <div class="ec-comics__slide ec-comics__slide_6 ec-comics__slide_group1_6" style="background-image: url(img/el-camino/comics3/group2/screen6.png)"></div>
            <div class="ec-comics__slide ec-comics__slide_7 ec-comics__slide_group1_7 ec-comics__slide_anim" style="background-image: url(img/el-camino/comics3/group2/screen7.png)">
              <div class="ec-comics__slide-text ec-comics__slide-text_7 ec-comics__slide-part ec-comics__slide-part_anim_lf ec-comics__slide-part_easing_out ec-comics__slide-part_dur_20">Нашли не задекларированную сумму. Конфискуем!</div>
            </div>
            <div class="ec-comics__slide ec-comics__slide_8 ec-comics__slide_group1_8 ec-comics__slide_anim" style="background-image: url(img/el-camino/comics3/group2/screen8.png)"></div>
            <div class="ec-comics__slide ec-comics__slide_9 ec-comics__slide_group1_9 ec-comics__slide_anim" style="background-image: url(img/el-camino/comics3/group3/screen9.png)"></div>
          </div>


          <div class="ec-comics__int">
           <!-- <button class="ec-comics__btn ec-comics__btn_next" :disabled="comics.slidesOff" @click="skipSlide()">
             <svg viewBox="0 0 15 23" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__next"></use>
             </svg>
           </button> -->
           <!-- <button class="ec-comics__btn ec-comics__btn_end" :disabled="comics.slidesOff" @click="skipAll()">
             <svg viewBox="0 0 26.19 23.19" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__end"></use>
             </svg>
           </button> -->
           <button class="ec-comics__btn ec-comics__btn_close" @click="closeComics()">
             <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
               <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
             </svg>
             <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__close"></use>
             </svg>
           </button>
           <!-- <button class="ec-comics__btn ec-comics__btn_pause" v-bind:class="{'ec-comics__btn_active': comics.paused}" @click="toggleComics()" v-else>
             <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
               <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
             </svg>
             <svg viewBox="0 0 15 23" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__toggle"></use>
             </svg>
           </button> -->
          </div>
        </div>
      </section>
    </modal>




    <!-- TRACK -->
    <modal name="track_0"
         :adaptive="true"
         height="auto"
         width="100%"
         :click-to-close="false"
         @before-open="bCardsOpen"
         @before-close="bCardsClose"
         @opened="cardsOpened"
         @closed="cardsClosed">

      <section class="ec-comics ec-comics_cards">
        <div class="ec-slider">
          <div class="ec-slider__in">
            <div class="ec-slider__top" style="background-image: url(img/el-camino/cards/track/bikers/top-img.png)"></div>
            <div class="ec-slider__content">
              <div class="ec-slider__item">
                <div class="ec-card">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/bikers/screen1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_rt ec-comics__slide-part_dur_36" style="background-image: url(img/el-camino/cards/track/bikers/screen1/el1.png)"></div>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/bikers/screen2/group1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_r ec-comics__slide-part_dur_22" style="background-image: url(img/el-camino/cards/track/bikers/screen2/group1/elem1.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_l ec-comics__slide-part_dur_22" style="background-image: url(img/el-camino/cards/track/bikers/screen2/group1/elem2.png)"></div>
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/bikers/screen2/bg.jpg)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_36" style="background-image: url(img/el-camino/cards/track/bikers/screen2/el1.png)"></div>
                </div>
                <div class="ec-card" v-else>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/bikers/screen2/group3/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_l ec-comics__slide-part_dur_22" style="background-image: url(img/el-camino/cards/track/bikers/screen2/group3/elem2.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_r ec-comics__slide-part_dur_22" style="background-image: url(img/el-camino/cards/track/bikers/screen2/group3/elem1.png)"></div>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/bikers/screen3/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_10" style="background-image: url(img/el-camino/cards/track/bikers/screen3/el1.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_sclt ec-comics__slide-part_dur_22" style="background-image: url(img/el-camino/cards/track/bikers/screen3/el2.png)"></div>
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/bikers/screen3/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_10" style="background-image: url(img/el-camino/cards/track/bikers/screen3/el1.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_sclt  ec-comics__slide-part_dur_22" style="background-image: url(img/el-camino/cards/track/bikers/screen3/el2.png)"></div>
                </div>
                <div class="ec-card" v-else>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/bikers/screen2/bg.jpg)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_36" style="background-image: url(img/el-camino/cards/track/bikers/screen2/el1.png)"></div>
                </div>
              </div>
            </div>
            <div class="ec-slider__txt">
              <p>
                Вы встретили бандитов на дороге! Чтоб проехать дальше Вам пришлось заплатить.
                <span class="ec-slider__sum" v-bind:class="{'ec-slider__sum_add' : bet.change > 0, 'ec-slider__sum_rem' : bet.change < 0}">{{bet.change}} рублей</span>
              </p>
            </div>
            <div class="ec-slider__bot" style="background-image: url(img/el-camino/slider/bot-img1.png)"></div>
          </div>

          <div class="ec-comics__int">
           <button class="ec-comics__btn ec-comics__btn_close" @click="closeCards(cards.cur)">
             <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
               <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
             </svg>
             <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__close"></use>
             </svg>
           </button>
          </div>
        </div>
      </section>
    </modal>
    <modal name="track_1"
         :adaptive="true"
         height="auto"
         width="100%"
         :click-to-close="false"
         @before-open="bCardsOpen"
         @before-close="bCardsClose"
         @opened="cardsOpened"
         @closed="cardsClosed">

      <section class="ec-comics ec-comics_cards">
        <div class="ec-slider">
          <div class="ec-slider__in">
            <div class="ec-slider__top" style="background-image: url(img/el-camino/cards/track/fuel/top-img.png)"></div>
            <div class="ec-slider__content">
              <div class="ec-slider__item">
                <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/fuel/screen1/bg.png)"></div>
                <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_20" style="background-image: url(img/el-camino/cards/track/fuel/screen1/elem1.png)"></div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/fuel/screen2/group1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_translate_m10_m15_rotate_m85 ec-comics__slide-part_dur_20" style="background-image: url(img/el-camino/cards/track/fuel/screen2/group1/elem1.png)"></div>
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/fuel/screen2/group2/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_r ec-comics__slide-part_dur_20" style="background-image: url(img/el-camino/cards/track/fuel/screen2/group2/elem1.png)"></div>
                </div>
                <div class="ec-card" v-else>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/fuel/screen2/group3/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_scale_8 ec-comics__slide-part_dur_20" style="background-image: url(img/el-camino/cards/track/fuel/screen2/group3/elem1.png)"></div>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/fuel/screen2/group3/elem2.png)"></div>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/fuel/screen3/group1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_12" style="background-image: url(img/el-camino/cards/track/fuel/screen3/group1/elem1.png)"></div>
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/fuel/screen3/group2/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_12" style="background-image: url(img/el-camino/cards/track/fuel/screen3/group2/elem1.png)"></div>
                </div>
                <div class="ec-card" v-else>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/fuel/screen3/group2/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_12" style="background-image: url(img/el-camino/cards/track/fuel/screen3/group2/elem1.png)"></div>
                </div>
              </div>
            </div>
            <div class="ec-slider__txt">
              <p>
                Вы встретили бандитов на дороге! Чтоб проехать дальше Вам пришлось заплатить.
                <span class="ec-slider__sum" v-bind:class="{'ec-slider__sum_add' : bet.change > 0, 'ec-slider__sum_rem' : bet.change < 0}">{{bet.change}} рублей</span>
              </p>
            </div>
            <div class="ec-slider__bot" style="background-image: url(img/el-camino/slider/bot-img1.png)"></div>
          </div>

          <div class="ec-comics__int">
           <button class="ec-comics__btn ec-comics__btn_close" @click="closeCards(cards.cur)">
             <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
               <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
             </svg>
             <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__close"></use>
             </svg>
           </button>
          </div>
        </div>
      </section>
    </modal>
    <modal name="track_2"
         :adaptive="true"
         height="auto"
         width="100%"
         :click-to-close="false"
         @before-open="bCardsOpen"
         @before-close="bCardsClose"
         @opened="cardsOpened"
         @closed="cardsClosed">

      <section class="ec-comics ec-comics_cards">
        <div class="ec-slider">
          <div class="ec-slider__in">
            <div class="ec-slider__top" style="background-image: url(img/el-camino/cards/city/cops/top-img.png)"></div>
            <div class="ec-slider__content">
              <div class="ec-slider__item">
                <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_l ec-comics__slide-part_dur_20" style="background-image: url(img/el-camino/cards/track/cops/screen1/bg.png)"></div>
                <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_r ec-comics__slide-part_dur_20" style="background-image: url(img/el-camino/cards/track/cops/screen1/elem1.png)"></div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/cops/screen2/group1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_10" style="background-image: url(img/el-camino/cards/track/cops/screen2/group1/elem1.png)"></div>
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/cops/screen2/group2/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_10" style="background-image: url(img/el-camino/cards/track/cops/screen2/group2/elem1.png)"></div>
                </div>
                <div class="ec-card" v-else>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/cops/screen2/group2/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_10" style="background-image: url(img/el-camino/cards/track/cops/screen2/group2/elem1.png)"></div>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/cops/screen3/group1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_10" style="background-image: url(img/el-camino/cards/track/cops/screen3/group1/elem1.png)"></div>
                  <div class="ec-card__part ec-card__part_text ec-card__part_text-cop1 ec-comics__slide-part ec-comics__slide-part_anim_lf ec-comics__slide-part_delay_4 ec-comics__slide-part_dur_10">Хэх, успел. В следующий раз не отвертится.</div>
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/cops/screen3/group2/bg.png)"></div>
                  <div class="ec-card__part ec-card__part_text ec-card__part_text-cop2 ec-comics__slide-part ec-comics__slide-part_anim_rf ec-comics__slide-part_dur_10">На следующем посту остановят.</div>
                </div>
                <div class="ec-card" v-else>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/track/cops/screen3/group3/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_10" style="background-image: url(img/el-camino/cards/track/cops/screen3/group3/elem1.png)"></div>
                  <div class="ec-card__part ec-card__part_text ec-card__part_text-cop3 ec-comics__slide-part ec-comics__slide-part_anim_lf ec-comics__slide-part_delay_4 ec-comics__slide-part_dur_10">В следующий раз конфискую тачку!</div>
                </div>
              </div>

            </div>
            <div class="ec-slider__txt">
              <p>
                Вы встретили бандитов на дороге! Чтоб проехать дальше Вам пришлось заплатить.
                <span class="ec-slider__sum" v-bind:class="{'ec-slider__sum_add' : bet.change > 0, 'ec-slider__sum_rem' : bet.change < 0}">{{bet.change}} рублей</span>
              </p>
            </div>
            <div class="ec-slider__bot" style="background-image: url(img/el-camino/slider/bot-img1.png)"></div>
          </div>

          <div class="ec-comics__int">
           <button class="ec-comics__btn ec-comics__btn_close" @click="closeCards(cards.cur)">
             <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
               <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
             </svg>
             <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
               <use xlink:href="#ec-comics__close"></use>
             </svg>
           </button>
          </div>
        </div>
      </section>
    </modal>
    <!-- TRACK -->



    <!-- VILLAGE -->
    <modal name="village_0"
           :adaptive="true"
           height="auto"
           width="100%"
           :click-to-close="false"
           @before-open="bCardsOpen"
           @before-close="bCardsClose"
           @opened="cardsOpened"
           @closed="cardsClosed">

      <section class="ec-comics ec-comics_cards">
        <div class="ec-slider">
          <div class="ec-slider__in">
            <div class="ec-slider__top" style="background-image: url(img/el-camino/cards/village/villagers/top-img.png)"></div>
            <div class="ec-slider__content">
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/village/villagers/screen1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_r ec-comics__slide-part_dur_32" style="background-image: url(img/el-camino/cards/village/villagers/screen1/car.png)"></div>
                </div>
                <div class="ec-card" v-else>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/village/villagers/screen2/bg.jpg)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_36" style="background-image: url(img/el-camino/cards/village/villagers/screen2/el1.png)"></div>
                </div>
                <div class="ec-card" v-else>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_r ec-comics__slide-part_dur_36" style="background-image: url(img/el-camino/cards/village/villagers/screen3/bg.png)"></div>
                </div>
                <div class="ec-card" v-else>
                </div>
              </div>
            </div>
            <div class="ec-slider__txt">
              <p>
                Селяни прострелили Вам колесо, и требут плату за проезд. Вы им заплатили.
                <span class="ec-slider__sum" v-bind:class="{'ec-slider__sum_add' : bet.change > 0, 'ec-slider__sum_rem' : bet.change < 0}">{{bet.change}} рублей</span>
              </p>
            </div>
            <div class="ec-slider__bot" style="background-image: url(img/el-camino/slider/bot-img1.png)"></div>
          </div>

          <div class="ec-comics__int">
            <button class="ec-comics__btn ec-comics__btn_close" @click="closeCards(cards.cur)">
              <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
                <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
              </svg>
              <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
                <use xlink:href="#ec-comics__close"></use>
              </svg>
            </button>
          </div>
        </div>
      </section>

    </modal>
    <modal name="village_2"
           :adaptive="true"
           height="auto"
           width="100%"
           :click-to-close="false"
           @before-open="bCardsOpen"
           @before-close="bCardsClose"
           @opened="cardsOpened"
           @closed="cardsClosed">

      <section class="ec-comics ec-comics_cards">
        <div class="ec-slider">
          <div class="ec-slider__in">
            <div class="ec-slider__top" style="background-image: url(img/el-camino/cards/village/сonstruction/top-img.png)"></div>
            <div class="ec-slider__content">
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/village/сonstruction/screen1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_translate_m15_3Scale_1 ec-comics__slide-part_dur_32" style="background-image: url(img/el-camino/cards/village/сonstruction/screen1/elem1.png)"></div>
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                </div>
                <div class="ec-card" v-else>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/village/сonstruction/screen2/bg.png)"></div>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/village/сonstruction/screen2/elem1.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_translate_0_m5Scale_9 ec-comics__slide-part_dur_32" style="background-image: url(img/el-camino/cards/village/сonstruction/screen2/elem2.png)"></div>
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                </div>
                <div class="ec-card" v-else>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/village/сonstruction/screen3/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_r ec-comics__slide-part_dur_32" style="background-image: url(img/el-camino/cards/village/сonstruction/screen3/elem1.png)"></div>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/village/сonstruction/screen3/elem2.png)"></div>
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                </div>
                <div class="ec-card" v-else>
                </div>
              </div>
            </div>
            <div class="ec-slider__txt">
              <p>
                Впереди ремонт дороги! Вас выбросило на обочину. Но дорожные работники Вам помогли!
                <span class="ec-slider__sum" v-bind:class="{'ec-slider__sum_add' : bet.change > 0, 'ec-slider__sum_rem' : bet.change < 0}">{{bet.change}} рублей</span>
              </p>
            </div>
            <div class="ec-slider__bot" style="background-image: url(img/el-camino/slider/bot-img1.png)"></div>
          </div>

          <div class="ec-comics__int">
            <button class="ec-comics__btn ec-comics__btn_close" @click="closeCards(cards.cur)">
              <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
                <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
              </svg>
              <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
                <use xlink:href="#ec-comics__close"></use>
              </svg>
            </button>
          </div>
        </div>
      </section>

    </modal>
    <!-- VILLAGE -->



    <!-- CITY -->
    <modal name="city_0"
           :adaptive="true"
           height="auto"
           width="100%"
           :click-to-close="false"
           @before-open="bCardsOpen"
           @before-close="bCardsClose"
           @opened="cardsOpened"
           @closed="cardsClosed">

      <section class="ec-comics ec-comics_cards">
        <div class="ec-slider">
          <div class="ec-slider__in">
            <div class="ec-slider__top" style="background-image: url(img/el-camino/cards/city/cops/top-img.png)"></div>
            <div class="ec-slider__content">
              <div class="ec-slider__item">
                <div class="ec-card">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/cops/screen1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_r ec-comics__slide-part_dur_12" style="background-image: url(img/el-camino/cards/city/cops/screen1/elem1.png)"></div>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/cops/screen2/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_translate_m13_5Scale_8 ec-comics__slide-part_dur_32" style="background-image: url(img/el-camino/cards/city/cops/screen2/elem1.png)"></div>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/cops/screen2/elem2.png)"></div>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/cops/screen3/group1/bg.png)"></div>
                </div>

                <div class="ec-card" v-else-if="cards.situation === 1">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/cops/screen3/group2/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_bf_5 ec-comics__slide-part_dur_12" style="background-image: url(img/el-camino/cards/city/cops/screen3/group2/elem1.png)"></div>
                </div>

                <div class="ec-card" v-else>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/cops/screen3/group3/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_translate_5_10Scale_1 ec-comics__slide-part_dur_32" style="background-image: url(img/el-camino/cards/city/cops/screen3/group3/elem1.png)"></div>
                </div>
              </div>
            </div>
            <div class="ec-slider__txt">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illo iste obcaecati quasi!
                <span class="ec-slider__sum" v-bind:class="{'ec-slider__sum_add' : bet.change > 0, 'ec-slider__sum_rem' : bet.change < 0}">{{bet.change}} рублей</span>
              </p>
            </div>
            <div class="ec-slider__bot" style="background-image: url(img/el-camino/slider/bot-img1.png)"></div>
          </div>

          <div class="ec-comics__int">
            <button class="ec-comics__btn ec-comics__btn_close" @click="closeCards(cards.cur)">
              <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
                <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
              </svg>
              <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
                <use xlink:href="#ec-comics__close"></use>
              </svg>
            </button>
          </div>
        </div>
      </section>

    </modal>
    <modal name="city_1"
           :adaptive="true"
           height="auto"
           width="100%"
           :click-to-close="false"
           @before-open="bCardsOpen"
           @before-close="bCardsClose"
           @opened="cardsOpened"
           @closed="cardsClosed">

      <section class="ec-comics ec-comics_cards ec-comics_cards4">
        <div class="ec-slider">
          <div class="ec-slider__in">
            <div class="ec-slider__top" style="background-image: url(img/el-camino/cards/city/putana/top-img.png)"></div>
            <div class="ec-slider__content">
              <div class="ec-slider__item">
                <div class="ec-card">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/putana/screen1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_bll ec-comics__slide-part_dur_32" style="background-image: url(img/el-camino/cards/city/putana/screen1/elem1.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_t ec-comics__slide-part_dur_32" style="background-image: url(img/el-camino/cards/city/putana/screen1/elem2.png)"></div>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/putana/screen2/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_delay_6 ec-comics__slide-part_dur_12" style="background-image: url(img/el-camino/cards/city/putana/screen2/elem1.png)"></div>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/putana/screen3/group1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_delay_2 ec-comics__slide-part_dur_20" style="background-image: url(img/el-camino/cards/city/putana/screen3/group1/elem1.png)"></div>
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/putana/screen3/group2/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_delay_2 ec-comics__slide-part_dur_20" style="background-image: url(img/el-camino/cards/city/putana/screen3/group2/elem1.png)"></div>
                </div>
                <div class="ec-card" v-else>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/putana/screen3/group3/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_delay_2 ec-comics__slide-part_dur_20" style="background-image: url(img/el-camino/cards/city/putana/screen3/group3/elem1.png)"></div>
                </div>
              </div>
            </div>
            <div class="ec-slider__txt">
              <p>
                Вас подрезал встречный автомобиль. Вы не справились с управлением и врезались в столб!
                <span class="ec-slider__sum" v-bind:class="{'ec-slider__sum_add' : bet.change > 0, 'ec-slider__sum_rem' : bet.change < 0}">{{bet.change}} рублей</span>
              </p>
            </div>
            <div class="ec-slider__bot" style="background-image: url(img/el-camino/slider/bot-img1.png)"></div>
          </div>

          <div class="ec-comics__int">
            <button class="ec-comics__btn ec-comics__btn_close" @click="closeCards(cards.cur)">
              <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
                <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
              </svg>
              <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
                <use xlink:href="#ec-comics__close"></use>
              </svg>
            </button>
          </div>
        </div>
      </section>

    </modal>
    <modal name="city_2"
           :adaptive="true"
           height="auto"
           width="100%"
           :click-to-close="false"
           @before-open="bCardsOpen"
           @before-close="bCardsClose"
           @opened="cardsOpened"
           @closed="cardsClosed">

      <section class="ec-comics ec-comics_cards">
        <div class="ec-slider">
          <div class="ec-slider__in">
            <div class="ec-slider__top" style="background-image: url(img/el-camino/cards/city/crash/top-img.png)"></div>
            <div class="ec-slider__content">
              <div class="ec-slider__item">
                <div class="ec-card">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/crash/screen1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_translate_0_m5Scale_8 ec-comics__slide-part_dur_32" style="background-image: url(img/el-camino/cards/city/crash/screen1/elem1.png)"></div>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/crash/screen2/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_translate_0_m5Scale_9 ec-comics__slide-part_dur_32" style="background-image: url(img/el-camino/cards/city/crash/screen2/elem1.png)"></div>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/crash/screen3/group1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_12" style="background-image: url(img/el-camino/cards/city/crash/screen3/group1/elem1.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_delay_10 ec-comics__slide-part_dur_12" style="background-image: url(img/el-camino/cards/city/crash/screen3/group1/elem2.png)"></div>
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/crash/screen3/group2/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_12" style="background-image: url(img/el-camino/cards/city/crash/screen3/group2/elem1.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_delay_10 ec-comics__slide-part_dur_12" style="background-image: url(img/el-camino/cards/city/crash/screen3/group2/elem2.png)"></div>
                </div>
                <div class="ec-card" v-else>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/crash/screen3/group3/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_12" style="background-image: url(img/el-camino/cards/city/crash/screen3/group3/elem1.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_delay_10 ec-comics__slide-part_dur_12" style="background-image: url(img/el-camino/cards/city/crash/screen3/group3/elem2.png)"></div>
                </div>
              </div>
            </div>
            <div class="ec-slider__txt">
              <p>
                Вы встретили автомобиль.И удачно выполнили маневр, и разьехались с ним.
                <span class="ec-slider__sum" v-bind:class="{'ec-slider__sum_add' : bet.change > 0, 'ec-slider__sum_rem' : bet.change < 0}">{{bet.change}} рублей</span>
              </p>
            </div>
            <div class="ec-slider__bot" style="background-image: url(img/el-camino/slider/bot-img1.png)"></div>
          </div>

          <div class="ec-comics__int">
            <button class="ec-comics__btn ec-comics__btn_close" @click="closeCards(cards.cur)">
              <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
                <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
              </svg>
              <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
                <use xlink:href="#ec-comics__close"></use>
              </svg>
            </button>
          </div>
        </div>
      </section>

    </modal>
    <modal name="city_3"
           :adaptive="true"
           height="auto"
           width="100%"
           :click-to-close="false"
           @before-open="bCardsOpen"
           @before-close="bCardsClose"
           @opened="cardsOpened"
           @closed="cardsClosed">

      <section class="ec-comics ec-comics_cards ec-comics_cards4">
        <div class="ec-slider">
          <div class="ec-slider__in">
            <div class="ec-slider__top" style="background-image: url(img/el-camino/cards/city/bookmaker/top-img.png)"></div>
            <div class="ec-slider__content">
              <div class="ec-slider__item">
                <div class="ec-card">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/bookmaker/screen1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_lt ec-comics__slide-part_dur_32" style="background-image: url(img/el-camino/cards/city/bookmaker/screen1/elem1.png)"></div>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/bookmaker/screen2/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_lfl ec-comics__slide-part_delay_20 ec-comics__slide-part_easing_out ec-comics__slide-part_dur_10" style="background-image: url(img/el-camino/cards/city/bookmaker/screen2/elem1.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_r ec-comics__slide-part_dur_20 ec-comics__slide-part_easing_out" style="background-image: url(img/el-camino/cards/city/bookmaker/screen2/elem2.png)"></div>
                </div>
              </div>
              <div class="ec-slider__item">
                <div class="ec-card" v-if="cards.situation === 0">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/bookmaker/screen3/group1/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_20" style="background-image: url(img/el-camino/cards/city/bookmaker/screen3/group1/elem1.png)"></div>
                </div>
                <div class="ec-card" v-else-if="cards.situation === 1">
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/bookmaker/screen3/group2/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_20" style="background-image: url(img/el-camino/cards/city/bookmaker/screen3/group2/elem1.png)"></div>
                </div>
                <div class="ec-card" v-else>
                  <div class="ec-card__part" style="background-image: url(img/el-camino/cards/city/bookmaker/screen3/group3/bg.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_dur_20" style="background-image: url(img/el-camino/cards/city/bookmaker/screen3/group3/elem1.png)"></div>
                  <div class="ec-card__part ec-comics__slide-part ec-comics__slide-part_anim_f ec-comics__slide-part_delay_6 ec-comics__slide-part_dur_20" style="background-image: url(img/el-camino/cards/city/bookmaker/screen3/group3/elem2.png)"></div>
                </div>
              </div>
            </div>
            <div class="ec-slider__txt">
              <p>
                Вас подрезал встречный автомобиль. Вы не справились с управлением и врезались в столб!
                <span class="ec-slider__sum" v-bind:class="{'ec-slider__sum_add' : bet.change > 0, 'ec-slider__sum_rem' : bet.change < 0}">{{bet.change}} рублей</span>
              </p>
            </div>
            <div class="ec-slider__bot" style="background-image: url(img/el-camino/slider/bot-img1.png)"></div>
          </div>

          <div class="ec-comics__int">
            <button class="ec-comics__btn ec-comics__btn_close" @click="closeCards(cards.cur)">
              <svg viewBox="0 0 60 60" class="ec-comics__btn_round">
                <path class="ec-comics__round-path" stroke-linecap="round" d="M30.03,3C44.93,3.02,57,15.1,57,30c0,14.91-12.09,27-27,27S3,44.91,3,30C3,15.1,15.07,3.02,29.96,3"/>
              </svg>
              <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
                <use xlink:href="#ec-comics__close"></use>
              </svg>
            </button>
          </div>
        </div>
      </section>

    </modal>
    <!-- CITY -->


    <modal name="modal-safe"
         :adaptive="true"
         height="auto"
         width="100%"
         :click-to-close="false">

      <div class="ec-modal ec-modal_safe ec-modal_size_m">

        <div class="ec-modal__in ec-modal_safe__in">
          <p class="ec-modal__txt">Застраховать сумму?</p>

          <div class="ec-modal__foot">
            <a href="/" class="ec-modal__btn ec-btn ec-btn_theme_greenB ec-btn_size_m" @click.stop.prevent="safeGame(true, 'modal-safe')"><span>Застраховать</span></a>
            <a href="/" class="ec-modal__btn ec-btn ec-btn_theme_grayB ec-btn_size_m" @click.stop.prevent="safeGame(false, 'modal-safe')"><span>проскочить</span></a>
          </div>
        </div>
      </div>
    </modal>
    <modal name="modal-win"
         :adaptive="true"
         height="auto"
         width="100%">

      <div class="ec-modal ec-modal_win ec-modal_size_m">

        <button class="ec-modal__close ec-comics__btn ec-comics__btn_close" @click="gameEnd()">
          <svg viewBox="0 0 18 18" class="ec-comics__btn-svg">
            <use xlink:href="#ec-comics__close"></use>
          </svg>
        </button>

        <div class="ec-modal__in ec-modal_safe__in">
          <h3 class="ec-modal__win-title">ПОЗДРАВЛЯЕМ!</h3>
          <p class="ec-modal__win-txt">Ваш выигрыш: <span class="ec-modal__win-sum">{{val}} RUB</span></p>


          <div class="ec-modal__foot">
            <a href="/" class="ec-modal__btn ec-btn ec-btn_theme_greenB ec-btn_size_m" @click.stop.prevent="gameEnd('choose')"><span>ИГРАТЬ СНАЧАЛА</span></a>
            <a href="/" class="ec-modal__btn ec-btn ec-btn_theme_blueB ec-btn_size_m" @click.stop.prevent="gameEnd()"><span>Изменить ставку</span></a>
          </div>
        </div>
      </div>
    </modal>
  </div>

  <div class="ec-preloader" v-if="!load.ready">Preloader</div>
</div>




<svg version="1.1" style="display: none;" class="ec-logo__svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 488.9 157.4" xml:space="preserve">
  <path class="st0" d="M121.1,13.1c0,0,15.5-5.6,17.3-3s-23.6,22.5-25.6,25.3s-6.1,7.8-1.2,9.6"></path>
  <path class="st0" d="M124.2,19.3c0,0-4.6-7.8-43.1,11.9c0,0-11.4,7.4-10.2,16.7c1.2,9.3,1.8,10.9,16.1,20.2s11.7,11.2,10.7,13.5
  	s-4.9,6.3-39.2,20s-48.3,27.9-46,34.5c2.3,6.6,5.9,8.5,27.5,1.3s67.6-24.1,67.6-24.1"></path>
  <path class="st0" d="M159.4,35.2c0,0-22.2,31.4-25.9,38.2c-3.7,6.8-19.1,38.6-19.2,46.5c-0.1,7.9,1.2,8.1,2.3,8.3
  	c1.2,0.2,7.7-2.1,13.6-12.3"></path>
  <path class="st0" d="M285.5,15.4c0,0-34.2,40.2-34.8,44.1s-0.4,7,5.4,5.2"></path>
  <path class="st0" d="M274.1,25.3c0,0-3-11.6-15.2-5.9c-12.2,5.7-38,21.3-58.8,55.5s-23.4,60.4-15.2,68.2c8.2,7.8,23.3,6.5,65-26.6"></path>
  <path class="st0" d="M285.5,85.9c0,0-6.1-5.9-9.7-2.6s-23,26.6-23.1,36.2c-0.2,9.6,7.9-1.3,7.9-1.3s18.7-28.4,32.5-35.7
  	c0,0-19,20.8-19.2,39.3c0,0,1.5,5.1,7.1,0.3c5.6-4.8,5.6-4.8,5.6-4.8L312,88.9c0,0,3.1-4.3,3.5-5.8c0,0-21.4,40.1-20.9,44.7
  	c0,0-0.3,2.2,0.9,3.2c0,0,30.2-48.9,46.1-55.5c0,0,2.3-0.2-3.8,12.2s-9.7,23.6-7.1,23.6s16.3-18.8,23-23.9c0,0,2.1,0.7-3.6,14.2
  	c-5.8,13.5-12.1,25.9-2.8,21.5"></path>
  <path class="st0" d="M394.5,43.3c0,0-10.8,14.4-11.7,17.5"></path>
  <path class="st0" d="M384.2,79.4c0,0-23.6,33.8-22.7,42.4c0.8,8.6,4.1,5.3,4.1,5.3s33.2-37.5,35-41.1s1.8-3.6,1.8-3.6l4.5-9.3
  	c0,0-30.2,53.8-29.7,57.4c0.5,3.6,12.2-15.9,12.2-15.9s29.6-33.9,33.2-29.1s-4.1,12.2-6.6,19.7c-2.5,7.4-3.5,10.2-1.5,10.9
  	c2,0.7,13.4-11.4,15.5-14.7"></path>
  <path class="st0" d="M441.9,101.1c0,0-9.4,16.8-6.4,21.3s5.7,6,15.6-4.9s28.3-31.9,25.3-41s-15.8-2-15.8-2s-20.3,10.9-27,20.6
  	s-5.5,13.6,1,13.9c6.4,0.3,15.9-5.2,15.9-5.2"></path>
</svg>

<svg style="display: none;">
  <defs>

    <g id="ec-sound_on">
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

    <g id="ec-sound_off">
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

    <g id='ec-logo-triangle'>
    	<polygon class="st0" points="206.9,230.4 184.7,262.8 164.7,230.4 155.4,230.4 184.3,277.5 216.6,230.4 	"/>
    	<polygon class="st0" points="349.1,19.7 315.8,68.5 325.5,68.5 364.3,11.7 235.5,12 235.5,20 	"/>
    	<polygon class="st0" points="67.5,68.5 38.8,20.4 135.4,20.4 135.4,12.4 24.7,12.4 58.2,68.5 	"/>
    	<rect x="14.5" y="17.5" transform="matrix(0.8526 -0.5226 0.5226 0.8526 -9.8989 11.8325)" class="st0" width="3" height="12"/>
    	<polygon class="st0" points="4.3,7.2 0,0 111.3,0 111.3,3 5.3,3 6.9,5.7 	"/>
    	<polygon class="st0" points="366.2,32.7 363.7,31 383.2,3.3 308.5,3.3 308.5,0.3 389,0.3 	"/>
    	<rect x="283.1" y="0.3" class="st0" width="11.6" height="3"/>
    	<rect x="156" y="226" transform="matrix(0.8521 -0.5234 0.5234 0.8521 -109.2075 119.9118)" class="st0" width="3" height="54.3"/>
    	<polygon class="st0" points="184.2,299.5 177.7,289 180.3,287.4 184.4,294 228.3,229.2 230.8,230.9 	"/>
    </g>

    <g id='ec-comics__toggle'>
      <path d="M12.5,0C13.88,0,15,1.12,15,2.5v18c0,1.38-1.12,2.5-2.5,2.5S10,21.88,10,20.5 v-18C10,1.12,11.12,0,12.5,0z M2.5,0C3.88,0,5,1.12,5,2.5v18C5,21.88,3.88,23,2.5,23S0,21.88,0,20.5v-18C0,1.12,1.12,0,2.5,0z"/>
    </g>
    <g id="ec-comics__close">
      <path d="M12.4,8.86l4.6-4.6c0.98-0.98,0.98-2.56,0-3.54c-0.98-0.98-2.56-0.98-3.54,0l-4.6,4.6l-4.6-4.6 c-0.98-0.98-2.56-0.98-3.54,0c-0.98,0.98-0.98,2.56,0,3.54l4.6,4.6l-4.6,4.6c-0.98,0.98-0.98,2.56,0,3.54 c0.98,0.98,2.56,0.98,3.54,0l4.6-4.6l4.6,4.6c0.98,0.98,2.56,0.98,3.54,0c0.98-0.98,0.98-2.56,0-3.54L12.4,8.86z"/>
    </g>
    <g id='ec-comics__next'>
      <path class="st0" d="M13.46,9.73c-0.19-0.19-0.41-0.34-0.65-0.45L4.27,0.73c-0.98-0.98-2.56-0.98-3.54,0
      	c-0.98,0.98-0.98,2.56,0,3.54l7.33,7.33l-7.33,7.33c-0.98,0.98-0.98,2.56,0,3.54c0.98,0.98,2.56,0.98,3.54,0l8.55-8.55
      	c0.23-0.12,0.45-0.26,0.65-0.45c0.51-0.51,0.75-1.19,0.72-1.86C14.21,10.92,13.97,10.25,13.46,9.73z"/>
    </g>

    <g id='ec-comics__end'>
      <path class="st0" d="M25.46,9.73c-0.19-0.19-0.41-0.34-0.65-0.45l-8.55-8.55c-0.98-0.98-2.56-0.98-3.54,0
      	c-0.98,0.98-0.98,2.56,0,3.54l7.33,7.33l-7.33,7.33c-0.98,0.98-0.98,2.56,0,3.54c0.98,0.98,2.56,0.98,3.54,0l8.55-8.55
      	c0.23-0.12,0.45-0.26,0.65-0.45c0.51-0.51,0.75-1.19,0.72-1.86C26.21,10.92,25.97,10.25,25.46,9.73z"/>
      <path class="st0" d="M13.46,9.73c-0.19-0.19-0.41-0.34-0.65-0.45L4.27,0.73c-0.98-0.98-2.56-0.98-3.54,0
      	c-0.98,0.98-0.98,2.56,0,3.54l7.33,7.33l-7.33,7.33c-0.98,0.98-0.98,2.56,0,3.54c0.98,0.98,2.56,0.98,3.54,0l8.55-8.55
      	c0.23-0.12,0.45-0.26,0.65-0.45c0.51-0.51,0.75-1.19,0.72-1.86C14.21,10.92,13.97,10.25,13.46,9.73z"/>
    </g>

    <!-- <g id='ec-comics-toggle'>
      <path id="ec-comics__next" d="M1549.5,118a2.5,2.5,0,0,1,2.5,2.5v18a2.5,2.5,0,0,1-5,0v-18A2.5,2.5,0,0,1,1549.5,118Zm-10,0a2.5,2.5,0,0,1,2.5,2.5v18a2.5,2.5,0,0,1-5,0v-18A2.5,2.5,0,0,1,1539.5,118Z" transform="translate(-1537 -118)"/>
    </g> -->

    <g id="ec-fuel-icon">
      <path d="M99.69,54.04c-0.06-0.13-5.84-13.1-7.74-25.78c-2.07-13.78-4.88-18.99-5.19-19.54c-1.1-1.93-3.54-2.6-5.49-1.51
      	c-1.94,1.08-2.65,3.54-1.59,5.5c0.02,0.04,2.41,4.56,4.23,16.75c1.81,12.06,6.64,23.9,8.01,27.09v11.9c0,4.15-3,6.5-4.36,7.35H75.17
      	c-1.19,0-1.7-0.37-2-0.69c-1.14-1.21-1.39-3.93-1.32-5.31V23.49c0-6.09-6.04-9.53-9.61-10.61l-10.56-0.14V7.03
      	c0-3.88-3.15-7.03-7.03-7.03H12.4C8.52,0,5.37,3.15,5.37,7.03V79.2H0v8.73h5.37h46.31h4.7V79.2h-4.7V20.84h8.72
      	c1.36,0.54,3.33,1.74,3.33,2.65l0.01,46.04c-0.05,0.71-0.35,7.02,3.49,11.12c2,2.15,4.75,3.28,7.95,3.28h14.31l0.8-0.37
      	c0.4-0.18,9.76-4.56,9.76-15.11V54.84L99.69,54.04z M43.63,46.31H14.1V16.78h29.53V46.31z"/>
    </g>

    <g id="ec-warning-icon">
  		<path d="M0,385.9c3.77-19.26,15.27-34.85,24.75-51.32c57.62-100.07,115.41-200.04,173.2-300.02c26.64-46.09,89.52-46.09,116.15,0
  			c62.85,108.77,125.7,217.53,188.28,326.45c4.38,7.62,6.47,16.56,9.62,24.88c0,6,0,12,0,18c-0.27,0.6-0.66,1.18-0.8,1.81
  			c-8.39,36.35-32.4,55.63-69.7,55.69c-61.11,0.09-122.22,0.06-183.33,0.06c-63.77,0-127.55,0.1-191.32-0.1
  			c-32.24-0.1-57.94-20.76-65.41-51.87c-0.37-1.56-0.95-3.06-1.44-4.59C0,398.57,0,392.24,0,385.9z M255.97,418.58
  			c0-0.01,0-0.02,0-0.03c8.66,0,17.33,0,25.99,0c54.15,0.01,108.3,0.05,162.45,0c12.46-0.01,21.38-6.84,24.19-18.29
  			c1.83-7.48-0.81-13.93-4.52-20.34C401.8,272.19,339.59,164.4,277.39,56.62c-10.57-18.32-32.07-18.39-42.68-0.02
  			c-62.6,108.33-125.17,216.67-187.73,325.03c-10.46,18.12,0.16,36.88,21.06,36.92C130.68,418.65,193.33,418.58,255.97,418.58z"/>
  		<path d="M281.01,218.18c0,18.99-0.01,37.97,0,56.96c0.01,13.48-8.96,23.08-21.53,23c-12.33-0.08-21.34-9.64-21.35-22.78
  			c-0.03-38.3-0.05-76.61-0.02-114.91c0.01-11.78,7.8-21.01,18.67-22.41c10.91-1.4,20.85,5.39,23.66,16.26
  			c0.41,1.58,0.52,3.28,0.52,4.93c0.03,19.65,0.02,39.3,0.02,58.96C280.99,218.18,281,218.18,281.01,218.18z"/>
  		<path d="M285.21,348.36c-0.15,13.87-11.8,25.4-25.58,25.31c-14.5-0.09-25.79-11.9-25.62-26.8c0.15-13.35,12.08-24.91,25.6-24.8
  			C274.02,322.18,285.36,333.83,285.21,348.36z"/>
    </g>

    <g id="ec-engine-icon">
      <path class="st0" d="M662.2,192.1c0-1.15-0.01-2.24-0.75-3.31c-4.96-7.16-9.8-14.39-14.74-21.55
  			c-4.58-6.64-9.25-13.22-13.86-19.83c-3.96-5.67-8.08-11.25-11.76-17.1c-1.33-2.11-2.82-2.39-4.89-2.39
  			c-14.5,0.01-29,0.05-43.5-0.11c-2.92-0.03-5.16,0.64-6.84,3.04c-0.56,0.8-1.23,1.54-1.83,2.32c-3.83,4.98-7.5,10.1-11.98,14.54
  			c-0.44,0.44-1.16,1.08-1.55,0.97c-0.77-0.23-1.28-1-1.29-1.94c-0.01-1-0.06-2-0.02-3c0.33-9.47-1.09-18.89-0.98-28.35
  			c0.02-2.06-0.8-2.6-2.65-2.5c-8.8,0.48-17.55-0.94-26.36-0.8c-12.16,0.19-24.33-0.09-36.5,0.03c-2.89,0.03-4.94-0.81-6.97-2.88
  			c-8.98-9.17-18.12-18.18-27.2-27.24c-8.85-8.83-17.76-17.6-26.51-26.52c-2.4-2.45-4.97-3.42-8.39-3.4
  			c-3.17,0.02-6.21,0.83-9.36,0.83c-20.17,0.01-40.33,0.11-60.5,0.17c-1,0-2,0.02-3-0.03c-1.58-0.07-2.46-0.94-2.49-2.49
  			c-0.06-3.33-0.04-6.67-0.03-10c0.01-1.63,0.9-2.41,2.49-2.42c1-0.01,2,0,3-0.01c9.83-0.06,19.68-0.41,29.49-0.06
  			c5.93,0.21,10.17-2.02,13.71-6.42c4.26-5.29,6.68-11.05,4.11-17.81c-1.59-4.18-4-7.97-7.67-10.69c-0.99-0.74-2.33-1.08-3.71-1.26
  			c-10.03-1.3-20.16-1.53-30.21-1.6c-30.61-0.22-61.23-0.73-91.85,0.59c-8.94,0.39-17.87,1.33-26.84,1.18
  			c-2.18-0.04-4.12,1.29-6.34,0.96c-0.74-0.11-1.15,0.54-1.67,0.94c-3.64,2.86-5.95,6.69-7.49,10.91
  			c-1.58,4.33-1.39,8.73,1.14,12.76c1.49,2.37,3.1,4.69,5.31,6.49c1.14,0.93,2.24,1.68,3.84,2.04c4.36,0.97,8.71,1.73,13.19,1.73
  			c5.5-0.01,11.01-0.16,16.5,0.11c2.83,0.14,6.55-1.71,8.3,1.34c1.42,2.47,0.61,5.89,0.32,8.83c-0.43,4.35-1.22,4.85-5.72,4.86
  			c-17.67,0.05-35.33,0.08-53,0.12c-1.67,0-3.33-0.01-5,0.02c-5.26,0.08-9.63,1.44-13.5,5.67c-7.98,8.72-16.85,16.62-24.9,25.29
  			c-3.63,3.91-7.42,5.21-12.6,5.07c-12.66-0.34-25.33-0.12-38-0.18c-2.22-0.01-4.02,0.34-5.85,1.97c-2.22,1.98-4.47,3.94-6.63,5.99
  			c-7.71,7.34-15.38,14.71-23.15,21.98c-1.72,1.61-2.49,3.3-2.37,5.66c0.16,3.16,0.03,6.33-0.02,9.5
  			c-0.42,26.12,0.62,52.25-0.87,78.36c-0.31,5.38,0.08,4.63-5.08,4.66c-8.17,0.04-16.33-0.01-24.5-0.02c-0.83,0-1.67,0.03-2.5-0.03
  			c-2.32-0.19-2.91-0.75-3.05-2.98c-0.06-1,0-2,0.01-3c0.08-10.12,0.5-20.25,0.63-30.36c0.3-22.11,0.85-44.25-0.65-66.35
  			c-0.17-2.49-0.04-5-0.16-7.5c-0.14-2.98-0.5-6.08-2.29-8.45c-3.52-4.65-7.9-8.33-13.67-10.04c-1.48-0.44-3.02-0.63-4.39-0.18
  			c-4.24,1.41-7.98,3.42-10.89,7.19c-3.24,4.19-4.33,8.93-4.51,13.81c-0.55,15.61-0.59,31.24-0.81,46.86
  			c-0.56,38.82-0.18,77.66-0.18,116.49c-0.06,0-0.12,0-0.18,0c0,33.17,0.09,66.33-0.05,99.5c-0.05,11.14,0.9,22.23,1.08,33.35
  			c0.02,1,0.23,1.91,0.57,2.88c2.52,7.21,7.84,11.6,14.52,14.67c3.88,1.78,7.6,0.82,10.69-1.45c3.18-2.34,6.02-5.23,8.28-8.58
  			c2.75-4.06,4.02-8.41,3.98-13.43c-0.18-23.16-0.09-46.33-0.1-69.5c-0.01-12-0.07-24-0.06-36c0-2.96,0.08-3.03,3.03-3.05
  			c7.5-0.04,15-0.07,22.5,0.05c2.43,0.04,5.47-1.08,7.16,0.74c1.47,1.58,0.54,4.46,0.54,6.77c0.02,34.67,0.04,69.33-0.07,104
  			c-0.01,3.41,0.86,6.08,3.41,8.36c2.23,2,4.25,4.23,6.33,6.4c7.14,7.44,14.3,14.86,21.36,22.38c1.61,1.71,3.3,2.61,5.65,2.36
  			c1.32-0.14,2.66-0.02,4-0.02c22.83,0,45.67-0.02,68.5,0.02c1.62,0,3.32-0.46,4.85,0.59c1.76,1.21,3.58,2.34,5.36,3.52
  			c12.63,8.33,25.26,16.67,37.9,24.99c6.86,4.52,13.83,8.88,20.6,13.53c3.09,2.13,6.13,3.45,10.02,3.43c40-0.13,80-0.12,120-0.14
  			c43.83-0.02,87.66-0.06,131.49,0.02c2.89,0.01,4.99-0.69,6.97-2.84c3.71-4.03,7.52-7.96,11.18-12.04
  			c5.76-6.44,11.75-12.67,17.74-18.9c1.25-1.31,1.79-2.61,1.77-4.41c-0.07-6.17-0.01-12.33,0-18.5c0-1.16-0.1-2.35,0.08-3.48
  			c0.25-1.54,1.78-1.98,2.94-0.93c0.49,0.45,1.11,0.88,1.36,1.45c1.83,4.12,5.28,7.09,7.53,10.93c2.48,4.24,5.4,8.23,8.22,12.26
  			c2.07,2.96,4.51,4.71,8.66,4.57c6.46-0.22,12.87-1.12,19.35-0.98c8.66,0.19,17.33-0.05,26-0.1c1-0.01,2,0.02,3-0.04
  			c1.96-0.12,3.29-1.04,4.13-2.92c2.43-5.38,4.99-10.71,7.49-16.06c7.03-15.02,13.97-30.08,21.15-45.02
  			c1.91-3.98,2.84-7.97,2.84-12.34c0.05-58.83,0.14-117.66,0.22-176.5C662.21,198.77,662.21,195.43,662.2,192.1z M627.11,266.74
  			c-0.01,33.33-0.06,66.65-0.01,99.98c0.01,3.89-0.71,7.46-2.24,11.03c-5.19,12.06-10.22,24.18-15.33,36.27
  			c-0.45,1.06-0.97,2.09-1.44,3.15c-0.61,1.38-1.65,1.91-3.16,1.9c-3.67-0.03-7.34-0.09-10.99,0.16c-2.21,0.15-3.69-0.88-4.4-2.54
  			c-1.78-4.13-4.73-7.51-6.88-11.4c-3-5.44-6.46-10.63-9.79-15.87c-0.89-1.41-2.03-1.75-4.01-1.65c-8.31,0.4-16.66,0.25-24.99,0.29
  			c-6.83,0.03-13.66,0.05-20.49,0.08c-1.17,0-2.36-0.13-3.49,0.06c-3.31,0.57-3.68,1.07-3.75,4.47c-0.02,1-0.04,2-0.04,3
  			c0.12,13.13-1.53,26.21-1.09,39.34c0.09,2.74-0.93,4.9-3,6.47c-3.6,2.72-6.69,5.95-9.89,9.09c-1.76,1.73-3.8,2.42-6.26,2.39
  			c-6.83-0.09-13.67,0.16-20.49-0.11c-40.27-1.56-80.57-0.08-120.83-1.1c-28.29-0.72-56.57-0.43-84.85-0.76
  			c-1.88-0.02-3.66-0.23-5.2-1.25c-12.19-8.08-24.91-15.33-37.25-23.17c-10.26-6.51-20.88-12.45-30.89-19.36
  			c-2.47-1.71-5.44-2.09-8.5-2.09c-18-0.02-35.99-0.09-53.99-0.26c-4.45-0.04-8.9-0.49-13.36-0.7c-1.24-0.06-2.19-0.51-3.07-1.39
  			c-2.58-2.6-5.2-5.17-7.86-7.69c-1.06-1-1.45-2.11-1.38-3.55c0.1-1.99,0.02-4,0.02-6c0-35.33,0-70.65,0-105.98
  			c0.01,0,0.02,0,0.03,0c0-35.83,0.05-71.65-0.07-107.48c-0.01-4.33,1.12-8.54,0.76-12.86c-0.37-4.45-0.95-8.88-0.69-13.36
  			c0.07-1.15,0.18-2.31,0.19-3.46c0.01-4.27,3.29-6.7,5.59-9.55c6.48-8.04,6.59-7.97,17.22-7.94c12.83,0.03,25.66,0.09,38.49,0.16
  			c2.85,0.02,4.95-0.52,7.24-2.96c9.7-10.31,19.94-20.11,29.87-30.22c2.32-2.36,4.92-2.96,8.06-2.95
  			c34.33,0.05,68.65,0.03,102.98,0.03c28.16,0,56.32,0.05,84.48-0.08c4.03-0.02,6.5,1.36,9.11,4.54
  			c4.74,5.77,10.47,10.72,15.57,16.21c10.87,11.71,22.16,23,33.37,34.38c2.46,5.02,6.82,5.3,11.72,5.16
  			c9.99-0.3,19.99-0.24,29.99-0.24c3.31,0,6.5-1.06,9.86-0.8c3.71,0.29,4.01,0.35,4.1,3.95c0.3,11.78,1.44,23.54,1.16,35.34
  			c-0.01,0.5-0.03,1,0.01,1.5c0.4,5.98,0.4,5.99,6.21,5.98c9,0,18-0.17,26.99,0.05c5.16,0.13,10.23-0.86,15.36-0.76
  			c2.04,0.04,2.69-1.36,3.61-2.82c5.42-8.65,11.07-17.15,16.36-25.88c1.26-2.08,2.57-2.74,4.75-2.58c1.33,0.09,2.66,0.02,4,0.03
  			c6.39,0.04,6.49-0.03,10.01,5.19c7.06,10.5,13.9,21.16,21.09,31.58c1.4,2.03,1.5,3.94,1.51,6.05
  			C627.13,226.08,627.11,246.41,627.11,266.74z"/>
  		<path class="st1" d="M439.95,328.52c0,9.16,0.03,18.32-0.01,27.47c-0.02,3.62-0.46,4.01-3.91,4.11
  			c-7.02,0.22-7.16,0.31-11.02-5.68c-7.29-11.33-15.12-22.3-22.23-33.76c-1.22-1.97-2.23-4.47-4.69-5.53
  			c-1.98,2.11-0.81,4.68-0.84,6.99c-0.15,10.65-0.06,21.31-0.06,31.97c0,1.17-0.08,2.34,0,3.5c0.14,2.03-0.91,2.65-2.73,2.51
  			c-0.5-0.04-1-0.01-1.5,0c-6.23,0.07-6.62-0.12-6.66-6.58c-0.11-17.65-0.11-35.3,0-52.95c0.04-6.71,0.25-6.47,6.93-6.79
  			c3.08-0.15,4.9,0.9,6.46,3.27c5.24,7.96,10.53,15.89,15.83,23.81c3.47,5.18,6.97,10.34,10.49,15.49c0.37,0.54,0.9,0.98,1.42,1.39
  			c0.74,0.59,1.39,0.1,1.48-0.54c0.18-1.31,0.12-2.65,0.12-3.98c0.01-10.99,0-21.98,0.01-32.97c0-1.33,0.07-2.67,0.02-4
  			c-0.06-1.66,0.66-2.46,2.35-2.39c0.83,0.04,1.66,0,2.5,0c5.76-0.02,5.99,0.12,6.04,6.17C440,309.54,439.95,319.03,439.95,328.52
  			C439.95,328.52,439.95,328.52,439.95,328.52z"/>
  		<path class="st2" d="M221.02,326.68c0-9.67-0.02-19.33,0.01-29c0.01-3.67,0.06-3.67,3.44-3.79c7.59-0.27,7.6-0.16,11.7,6.42
  			c4.1,6.57,8.44,12.98,12.91,19.31c3.99,5.64,7.63,11.51,11.43,17.29c0.36,0.54,0.64,1.14,1.06,1.63c0.16,0.19,0.63,0.31,0.85,0.22
  			c0.25-0.1,0.53-0.48,0.55-0.75c0.09-1.5,0.12-3,0.12-4.5c0.01-11.33,0.01-22.66,0.01-34c0-1.17-0.06-2.34,0.05-3.5
  			c0.08-0.86,0.59-1.73,1.42-1.88c2.62-0.49,5.28-0.36,7.91-0.05c0.84,0.1,1.36,1.02,1.45,1.86c0.13,1.15,0.04,2.33,0.04,3.5
  			c0,18.33,0,36.66,0,54.99c0,1,0.02,2-0.01,3c-0.05,1.55-0.85,2.54-2.4,2.61c-2.33,0.11-4.66,0.02-7,0.06
  			c-1.39,0.02-2.08-1-2.74-1.91c-1.55-2.12-3.02-4.32-4.48-6.51c-4.03-6.01-8.07-12.02-12.07-18.05
  			c-3.38-5.08-6.72-10.18-10.08-15.27c-0.45-0.68-0.83-1.43-1.39-2.02c-0.53-0.56-0.99-1.59-1.95-1.21
  			c-0.94,0.37-0.63,1.4-0.63,2.18c-0.02,12.33-0.02,24.66-0.03,37c0,1.33-0.01,2.67-0.03,4c-0.02,1.23-0.72,1.77-1.9,1.79
  			c-0.33,0.01-0.67,0.01-1,0.01c-8.78-0.16-7.12,1.19-7.22-6.93C220.93,344.34,221.01,335.51,221.02,326.68
  			C221.01,326.68,221.02,326.68,221.02,326.68z"/>
  		<path class="st3" d="M332.1,324.94c3.83,0,7.66-0.07,11.49,0.02c2.88,0.07,3.48,0.66,3.52,3.56c0.09,6.16-0.19,12.34,0.16,18.48
  			c0.2,3.44-1.5,5.37-3.93,6.89c-8.59,5.37-17.88,8.17-28.12,7.18c-10.22-0.99-18.58-5.42-24.36-13.95
  			c-2.46-3.63-3.91-7.9-4.43-12.34c-1.51-12.94-0.22-25.05,10-34.65c4.26-4,9.46-5.7,14.92-7.14c5.3-1.39,10.48-0.53,15.68,0.12
  			c8.47,1.05,17.45,9.69,18.99,18.06c0.32,1.72-0.21,2.94-2.03,3.35c-0.8,0.18-1.62,0.27-2.41,0.46c-4.79,1.17-4.69,1.14-6.78-3.53
  			c-1.84-4.11-4.9-7.28-9.34-8.16c-3.43-0.68-6.87-1.16-10.66-0.62c-8.24,1.16-13.33,5.56-15.89,12.94
  			c-2.89,8.33-3.23,16.87,1.06,24.91c3.41,6.39,9.01,9.74,16.27,10.5c6.5,0.68,12.32-1.27,17.98-4.11c0.92-0.46,1.82-1.07,1.85-2.15
  			c0.1-2.82,0.09-5.66,0.03-8.48c-0.03-1.08-0.97-1.2-1.83-1.2c-3.16-0.01-6.33-0.01-9.49-0.01c-1.33,0-2.66,0-4-0.01
  			c-1.78-0.02-2.65-0.92-2.86-2.7c-0.83-7.09-0.56-7.42,6.66-7.43c2.5,0,5,0,7.49,0C332.1,324.93,332.1,324.94,332.1,324.94z"/>
  		<path class="st4" d="M159.18,326.88c0-9.66-0.03-19.33,0.01-28.99c0.01-3.64,0.36-3.99,3.98-4c13.83-0.03,27.66-0.03,41.48,0
  			c3.34,0.01,3.34,0.08,3.43,3.25c0.01,0.5,0,1,0.01,1.5c0.09,4.18,0.28,5.39-5.33,5.31c-9.83-0.14-19.66-0.06-29.49-0.02
  			c-3.03,0.01-3.07,0.07-3.11,2.94c-0.05,3.33-0.05,6.66,0,10c0.06,3.73,0.3,3.99,3.94,4c8,0.04,15.99,0.01,23.99,0.01
  			c0.83,0,1.67-0.07,2.5,0.02c1.73,0.17,3.99-0.78,4.95,1.33c1.06,2.34,0.57,4.9-0.43,7.19c-0.71,1.63-2.39,1.49-3.92,1.49
  			c-8-0.02-15.99,0-23.99,0c-0.83,0-1.67-0.01-2.5-0.01c-4.9,0-4.55-0.49-4.56,4.55c0,4,0.08,8-0.05,11.99
  			c-0.06,1.97,0.62,2.6,2.57,2.58c7.83-0.08,15.66-0.03,23.49-0.03c3.17,0,6.33,0.06,9.5,0c2.13-0.04,3.57,0.54,3.61,3
  			c0.02,0.97,0.75,1.77,0.73,2.85c-0.06,3.04-1.02,4.23-4.03,4.23c-14.16,0.03-28.32,0.03-42.48,0c-4.01-0.01-4.29-0.28-4.3-4.21
  			c-0.04-9.66-0.01-19.33-0.01-28.99C159.17,326.88,159.17,326.88,159.18,326.88z"/>
  		<path class="st5" d="M293.02,219.05c0-9.82-0.03-19.64,0.02-29.47c0.02-3.49,0.09-3.56,3.61-3.57
  			c13.82-0.04,27.64-0.04,41.45-0.01c2.98,0.01,3.04,0.1,3.1,3.05c0.12,6.98,0.59,7.03-6.54,6.97c-9.32-0.08-18.65,0.01-27.97-0.05
  			c-1.81-0.01-2.73,0.37-2.64,2.49c0.17,3.82,0,7.66,0.05,11.48c0.04,3.01,0.09,3.09,2.98,3.11c6.99,0.05,13.98,0.01,20.98,0.01
  			c2.66,0,5.33-0.08,7.99,0.03c2.24,0.09,2.86,0.79,3.08,2.99c0.68,6.87,0.54,7.04-6.17,7.05c-8.32,0.01-16.65-0.03-24.97,0.01
  			c-3.39,0.01-3.8,0.39-3.86,3.59c-0.08,4.16-0.08,8.32-0.02,12.49c0.05,3.22,0.49,3.65,3.82,3.67c9.99,0.04,19.98-0.05,29.97,0.04
  			c6.2,0.05,5.04-0.72,5.17,5.39c0.01,0.67-0.02,1.33,0.01,2c0.08,1.65-0.8,2.45-2.35,2.56c-0.99,0.08-2,0.03-3,0.03
  			c-12.65,0-25.31,0.01-37.96,0.01c-1.17,0-2.35,0.1-3.49-0.05c-2.61-0.34-3.24-1.08-3.25-3.84
  			C292.99,239.03,293.01,229.04,293.02,219.05C293.01,219.05,293.02,219.05,293.02,219.05z"/>
  		<path class="st6" d="M454,327.02c0-9.83-0.02-19.66,0.01-29.5c0.01-3.55,0.08-3.61,3.56-3.62c13.83-0.03,27.66-0.03,41.5,0
  			c3.05,0.01,3.12,0.08,3.16,2.97c0.12,7.43,0.36,7.12-7.01,7.07c-8.67-0.06-17.33-0.02-26-0.01c-4.67,0-4.17-0.31-4.22,4.39
  			c-0.03,2.83-0.05,5.67,0,8.5c0.05,3.65,0.38,4.02,3.95,4.05c7.17,0.05,14.33,0.01,21.5,0.01c1.5,0,3,0,4.5,0.01
  			c5.17,0.04,5.24,0.12,5.17,5.38c-0.06,4.49-0.16,4.6-4.91,4.61c-9,0.02-18-0.01-27,0.03c-3.1,0.01-3.15,0.08-3.19,3.44
  			c-0.05,4-0.05,8-0.01,12c0.03,3.58,0.07,3.63,3.47,3.65c5,0.04,10-0.01,15-0.01c5.5,0,11-0.04,16.5,0.03
  			c3.68,0.05,4.02,0.44,4.11,3.95c0.02,0.83,0.04,1.67-0.01,2.5c-0.17,3.13-0.61,3.6-3.94,3.61c-14.16,0.03-28.33,0.03-42.5-0.01
  			c-3.56-0.01-3.62-0.08-3.63-3.57C453.97,346.68,454,336.85,454,327.02C454,327.02,454,327.02,454,327.02z"/>
  		<path class="st7" d="M278.99,219.74c0,9.83-0.06,19.67,0.05,29.5c0.02,2.09-0.72,2.9-2.67,3.2c-0.78,0.12-1.55,0.45-2.39,0.47
  			c-6.48,0.15-6.01-0.46-5.97-5.57c0.05-7.17,0.03-14.33-0.02-21.5c-0.02-3.41-0.3-3.69-3.69-3.71c-7.83-0.04-15.67-0.04-23.5,0.01
  			c-3.33,0.02-3.62,0.32-3.65,3.77c-0.06,7.5,0,15-0.05,22.5c-0.03,4.33-0.23,4.47-4.51,4.49c-0.83,0-1.68,0.1-2.5-0.02
  			c-3.67-0.54-3.96-0.86-3.96-4.71c-0.01-19.17,0-38.33,0-57.5c0-0.83-0.2-1.73,0.05-2.49c1.25-3.8,4.48-1.9,6.84-2.1
  			c3.15-0.26,3.81,0.34,4.05,2.36c0.14,1.15,0.06,2.33,0.06,3.5c0.01,5.67-0.02,11.33,0.02,17c0.02,3.06,0.07,3.15,2.93,3.16
  			c8.17,0.05,16.33,0.05,24.5,0c2.89-0.02,3.39-0.53,3.43-3.54c0.07-6,0.03-12,0.03-18c0-4.96-0.19-4.5,4.64-4.57
  			c6.37-0.09,6.4-0.06,6.35,6.25c-0.07,9.17-0.02,18.33-0.02,27.5C279,219.74,279,219.74,278.99,219.74z"/>
  		<path class="st8" d="M421.16,219.29c0-9.66-0.02-19.31,0.01-28.97c0.01-4.06,0.22-4.25,4.15-4.32c7-0.12,6.86-0.29,6.81,6.77
  			c-0.05,6.33,0,12.65,0.03,18.98c0,0.78-0.26,1.79,0.73,2.13c0.94,0.33,1.5-0.54,2.06-1.1c6.96-6.93,13.9-13.88,20.86-20.81
  			c2-1.99,3.76-4.67,6.19-5.66c2.43-1,5.57-0.28,8.39-0.31c0.67-0.01,1.33,0.02,2,0.01c0.7-0.02,1.37,0.11,1.63,0.81
  			c0.3,0.8,0.3,1.62-0.39,2.3c-0.83,0.82-1.64,1.65-2.47,2.47c-6.39,6.33-12.8,12.63-19.15,18.99c-2.85,2.85-2.75,3.35-0.27,6.65
  			c3.76,5.01,7.43,10.09,11.14,15.13c3.7,5.04,7.41,10.07,11.12,15.1c0.29,0.4,0.68,0.74,0.94,1.16c1.75,2.78,0.98,4.15-2.44,4.25
  			c-2.83,0.08-6.16,0.96-8.36-0.21c-2.54-1.35-4.19-4.47-5.96-7.06c-4.93-7.19-9.98-14.3-15.02-21.41c-2.02-2.84-2.56-2.87-4.9-0.73
  			c-6.12,5.6-6.12,5.6-6.13,14.03c0,3.83,0.04,7.66-0.04,11.49c-0.07,3.38-0.48,3.85-3.61,3.89c-8.53,0.13-7.28,0.32-7.31-7.11
  			c-0.03-8.82-0.01-17.65-0.01-26.47C421.15,219.29,421.15,219.29,421.16,219.29z"/>
  		<path class="st9" d="M384.44,184.95c8.84-0.39,15.77,3.66,21.38,10.31c1.7,2.01,2.76,4.41,3.38,7.04c0.64,2.71,0.1,3.99-2.43,4.58
  			c-0.32,0.07-0.67,0.05-1,0.03c-2.01-0.15-4.05,2.07-5.68,0.85c-1.38-1.04-1.76-3.36-2.7-5.05c-2.76-4.99-6.79-7.7-12.74-7.85
  			c-6.31-0.16-11.67,1.32-16.03,6.15c-1.64,1.82-2.27,3.97-3.13,6.08c-3.63,8.9-2.48,17.72,0.75,26.4
  			c2.45,6.56,7.86,9.52,14.4,10.39c6.6,0.88,13.76-1.53,17.82-10.36c3.1-6.77,1.63-6.06,9.02-4.46c3.79,0.82,4.1,1.78,2.74,5.51
  			c-2.7,7.4-6.84,13.5-14.45,16.59c-5.23,2.12-10.44,3.37-16.29,2.28c-4.06-0.76-8.03-1.26-11.84-3.08
  			c-5.24-2.51-8.69-6.75-11.04-11.66c-3.21-6.71-5.01-13.95-4.4-21.5c0.56-6.89,1.78-13.61,5.76-19.58
  			c4.04-6.06,9.58-9.71,16.51-11.57C377.68,185.16,380.94,184.84,384.44,184.95z"/>
  		<path class="st6" d="M157.03,218.25c-0.47-6.47,0.84-12.48,3.96-18.17c3.86-7.04,9.66-11.73,17.24-13.88
  			c7.1-2.02,14.31-2.01,21.38,0.75c7.46,2.92,11.89,8.51,14.4,15.85c0.65,1.89,0.07,2.57-2.22,3.38c-0.31,0.11-0.57,0.39-0.88,0.46
  			c-2.07,0.43-4.26,1.44-6.18,1.07c-2.15-0.41-1.77-3.28-2.66-4.99c-2.61-5.02-6.71-7.52-12.27-7.78c-1.66-0.08-3.35-0.15-5,0.02
  			c-6.9,0.7-12.05,4.54-14.39,10.69c-3.49,9.16-3.36,18.56,0.37,27.96c3.07,7.74,13.33,11.35,20.03,10.1
  			c7.34-1.37,10.76-6.35,13.2-12.57c1.34-3.42,1.54-3.65,4.93-2.65c0.98,0.29,1.94,0.34,2.91,0.5c3.12,0.53,4.2,1.81,3.12,4.83
  			c-3.29,9.2-9.62,17.81-21.55,19.43c-6.22,0.85-12.18,0.38-17.94-1.52c-7.47-2.46-12.37-7.98-15.35-15.14
  			C157.69,230.73,156.5,224.6,157.03,218.25z"/>
  		<path class="st10" d="M361.16,326.52c0-9.82-0.02-19.64,0.01-29.46c0.01-3.05,0.09-3.18,2.99-3.15c9.7,0.1,7.84-1.39,7.91,7.74
  			c0.13,17.31,0.04,34.62,0.05,51.94c0,1.17,0.06,2.34-0.03,3.49c-0.17,2.31-0.7,2.95-3.02,2.98c-8.31,0.11-7.97,0.86-7.93-7.07
  			c0.04-8.82,0.01-17.65,0.01-26.47C361.15,326.52,361.15,326.52,361.16,326.52z"/>
    </g>

    <g id="ec-frame_left">
    	<path d="M52.89,12.36H33.9V5.34C33.9,4.55,33.25,4,32.56,4c-0.24,0-0.49,0.07-0.72,0.21L4.61,21.74c-0.84,0.54-0.81,1.78,0.05,2.28
    		l27.23,15.77c0.22,0.12,0.44,0.18,0.67,0.18c0.7,0,1.34-0.56,1.34-1.34v-6.7h8.56c2.03,0,3.67,1.64,3.67,3.67v47.98
    		c0,0.74,0.6,1.33,1.33,1.33h16.48c0.74,0,1.33-0.6,1.33-1.33V24.75C65.27,17.91,59.73,12.36,52.89,12.36z"/>
    	<path d="M52.89,8.36H37.9V5.34C37.9,2.39,35.5,0,32.56,0c-1.02,0-2.02,0.29-2.88,0.85L2.45,18.37C0.87,19.39-0.04,21.11,0,22.98
    		c0.04,1.87,1.04,3.55,2.66,4.49l27.23,15.77c0.81,0.47,1.74,0.72,2.67,0.72c2.94,0,5.34-2.39,5.34-5.34v-2.7h4.23v47.65
    		c0,2.94,2.39,5.33,5.33,5.33h16.48c2.94,0,5.33-2.39,5.33-5.33V24.75C69.27,15.71,61.92,8.36,52.89,8.36z M67.27,83.58
    		c0,1.84-1.5,3.33-3.33,3.33H47.46c-1.84,0-3.33-1.5-3.33-3.33V35.6c0-0.92-0.75-1.67-1.67-1.67H35.9v4.7c0,1.84-1.5,3.34-3.34,3.34
    		c-0.58,0-1.16-0.16-1.67-0.45L3.66,25.74C2.65,25.16,2.03,24.11,2,22.94c-0.03-1.17,0.54-2.25,1.53-2.88L30.76,2.53
    		C31.3,2.18,31.92,2,32.56,2c1.84,0,3.34,1.5,3.34,3.34v5.03h16.99c7.93,0,14.38,6.45,14.38,14.38V83.58z"/>
    </g>

    <g id="ec-frame_mid">
      <path d="M24.53,4.68C24.26,4.23,23.8,4,23.34,4c-0.44,0-0.88,0.21-1.15,0.63L4.22,32.56c-0.59,0.91,0.07,2.11,1.15,2.11h7.21v47.46
    		c0,1.52,1.23,2.75,2.75,2.75H29.9c1.52,0,2.75-1.23,2.75-2.75V34.67h6.87c1.05,0,1.71-1.14,1.18-2.05L24.53,4.68z"/>
    	<path d="M44.17,30.61L27.99,2.68C27.03,1.03,25.25,0,23.34,0h0c-1.83,0-3.52,0.92-4.51,2.46L0.85,30.4
    		c-1.06,1.65-1.14,3.75-0.2,5.48c0.94,1.73,2.75,2.8,4.71,2.8h3.21v43.46c0,3.72,3.03,6.75,6.75,6.75H29.9
    		c3.72,0,6.75-3.03,6.75-6.75V38.67h2.87c1.91,0,3.7-1.03,4.65-2.69C45.13,34.32,45.13,32.27,44.17,30.61z M42.44,34.98
    		c-0.61,1.06-1.7,1.69-2.92,1.69h-4.87v45.46c0,2.62-2.13,4.75-4.75,4.75H15.33c-2.62,0-4.75-2.13-4.75-4.75V36.67H5.37
    		C4.14,36.67,3,36,2.41,34.91c-0.59-1.08-0.54-2.4,0.12-3.44L20.51,3.55C21.13,2.58,22.19,2,23.34,2h0c1.2,0,2.31,0.64,2.91,1.68
    		l16.18,27.93C43.05,32.67,43.05,33.93,42.44,34.98z"/>
    </g>

    <g id="ec-frame_right">
      <path d="M64.66,21.74L37.43,4.21C37.2,4.07,36.95,4,36.71,4c-0.69,0-1.34,0.55-1.34,1.34v7.03H16.38C9.54,12.36,4,17.91,4,24.75
    		v58.83c0,0.74,0.6,1.33,1.33,1.33h16.48c0.74,0,1.33-0.6,1.33-1.33V35.6c0-2.03,1.64-3.67,3.67-3.67h8.56v6.7
    		c0,0.78,0.64,1.34,1.34,1.34c0.22,0,0.45-0.06,0.67-0.18l27.23-15.77C65.47,23.51,65.5,22.28,64.66,21.74z"/>
    	<path d="M66.82,18.37L39.6,0.85C38.73,0.29,37.73,0,36.71,0c-2.94,0-5.34,2.39-5.34,5.34v3.03H16.38C7.35,8.36,0,15.71,0,24.75
    		v58.83c0,2.94,2.39,5.33,5.33,5.33h16.48c2.94,0,5.33-2.39,5.33-5.33V35.93h4.23v2.7c0,2.94,2.39,5.34,5.34,5.34
    		c0.93,0,1.86-0.25,2.67-0.72l27.23-15.77c1.62-0.94,2.61-2.62,2.66-4.49C69.31,21.11,68.4,19.39,66.82,18.37z M65.61,25.74
    		L38.38,41.52c-0.51,0.3-1.09,0.45-1.67,0.45c-1.84,0-3.34-1.5-3.34-3.34v-4.7h-6.56c-0.92,0-1.67,0.75-1.67,1.67v47.98
    		c0,1.84-1.5,3.33-3.33,3.33H5.33C3.5,86.92,2,85.42,2,83.58V24.75c0-7.93,6.45-14.38,14.38-14.38h16.99V5.34
    		c0-1.84,1.5-3.34,3.34-3.34c0.64,0,1.26,0.18,1.8,0.53l27.23,17.52c0.98,0.63,1.56,1.71,1.53,2.88
    		C67.24,24.11,66.62,25.15,65.61,25.74z"/>
    </g>
  </defs>
</svg>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
<script src="js/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-js-modal@1.3.28/dist/index.min.js"></script>
<script type="text/javascript" src="js/vue-multiselect.js"></script>
<script type="text/javascript" src="../libs/perfect-scrollbar.jquery.min.js"></script>
<script type="text/javascript" src="js/tiny-slider.js"></script>
<!-- <script type="text/javascript" src="js/slick.js"></script> -->
<script type="text/javascript" src="js/logo-anim.js"></script>
<script type="text/javascript" src="js/el-camino-helper.js"></script>
<script type="text/javascript" src="js/el-camino-const.js"></script>
<script type="text/javascript" src="js/el-camino-main.js"></script>
<!-- <script type="text/javascript" src="js/el-camino-const-babel.js"></script> -->
<!-- <script type="text/javascript" src="js/el-camino-main-babel.js"></script> -->
<?php include('../assets/footer16april2020.php'); ?>
