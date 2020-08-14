// const VueTinySlider = {
//   install(Vue, options) {
//     Vue.component('VueTinySlider', window['vue-tiny-slider'])
//   }
// }
// Vue.use(VueTinySlider);

Vue.use(window["vue-js-modal"].default, {
  dynamic: true,
  dynamicDefaults: {
    duration: 50000
  }
});

Vue.component('car', {
  data: function () {
    return {}
  },
  template: `<div class="ec-car-wrap">
       <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 588.5 169.2" style="enable-background:new 0 0 588.5 169.2;" xml:space="preserve" class="ec-car__svg">
         <path class="ec-road-dir-mid" d="M437.9,169c0,0-3.2-5.7-13.1-21.9S329.2,0.3,329.2,0.3" l="200"/>
         <path class="ec-road-dir-right" d="M436.9,168c0,0,0.1-21,17.2-38.1S588.2,9.3,588.2,9.3" l='223'/>
         <path xmlns="http://www.w3.org/2000/svg" class="ec-road-dir-left" d="M436.9,168c0,0-18.6-23.9-90.9-48C308.6,107.6,0.2,8.3,0.2,8.3" l="467"/>
       </svg>
      <div class="ec-car ec-car--road">
        <div class="ec-car__sprite"></div>
      </div>
    </div>`
})

const Camino = new Vue({
    el: '.ec-page',
  	components: {
    	Multiselect: window.VueMultiselect.default
  	},
    data: {
      rtl: false,
      body: document.querySelector('body'),
      load: {
        images: false,
        audios: false,
        ready: false
      },
      logoAnim: false,
      showModal: false,
      select: {
      	value: 'Основной',
      	options: ['Основной', 'Бонусный 1xGames']
      },
      hint: false,
      sound: {
        muted: false,
        radio: 1,
        audios: {
          radio: [
            new Audio('audio/el-camino/radio-station-1.2.mp3'),
            new Audio('audio/el-camino/radio-station-2.1.mp3'),
            new Audio('audio/el-camino/radio-station-3.2.mp3')
          ],
          click: new Audio('audio/el-camino/click_2.mp3'),
          start: new Audio('audio/el-camino/click-start-button.mp3'),
          startCar: [new Audio('audio/el-camino/start-the-car-1.mp3'), new Audio('audio/el-camino/start-the-car-2.mp3')],
          openDoor: new Audio('audio/el-camino/open-door.mp3'),
          money: [
            new Audio('audio/el-camino/money-1.mp3'),
            new Audio('audio/el-camino/money-2.mp3'),
            new Audio('audio/el-camino/money-3.mp3'),
            new Audio('audio/el-camino/money-4.mp3')
          ],
          dog: [
            new Audio('audio/el-camino/dog-barking-1.mp3'),
            new Audio('audio/el-camino/dog-barking-2.mp3'),
            new Audio('audio/el-camino/dog-barking-3.mp3'),
            new Audio('audio/el-camino/dog-barking-4.mp3'),
          ],
          autoDodge: new Audio('audio/el-camino/auto-dodge.mp3'),
          polic: [new Audio('audio/el-camino/police-1.mp3'), new Audio('audio/el-camino/police-2.mp3')],
          search: [new Audio('audio/el-camino/search-1.mp3'), new Audio('audio/el-camino/search-2.mp3')],
          closeTrunk: [new Audio('audio/el-camino/close-trunk-1.mp3'), new Audio('audio/el-camino/close-trunk-2.mp3')],
          zipper: [new Audio('audio/el-camino/zipper-1.mp3'), new Audio('audio/el-camino/zipper-2.mp3')],
          turn: [new Audio('audio/el-camino/turn-signal-1.mp3'), new Audio('audio/el-camino/turn-signal-2.mp3')],
          wind: new Audio('audio/el-camino/wind.mp3')
        }
      },
      bet: {
        quickSums: [50,100,500,1000,5000,10000],
        val: 10,
        min: 10,
        user: 10,
        tweenedVal: 10,
        coef: '',
        add: false,
        rem: false,
        change: 0,
        isChange: false
      },
      coefs: {
        cur: '',
        change: false,
        win: {
          track: 1.2,
          village: 2.1,
          city: 4.01
        }
      },
      car: {
        end: false,
        dir: ''
      },
      game: {
        stages: {
          track: {
            length: 1,
            curStage: 0,
            roadActive: {
              0: true,
              1: true,
              2: false
            }
          },
          village: {
            length: 2,
            curStage: 0,
            roadActive: {
              0: true,
              1: true,
              2: true
            }
          },
          city: {
            length: 3,
            curStage: 0,
            roadActive: {
              0: false,
              1: true,
              2: true
            }
          }
        },
        started: false,
        status: 'static',
        roadActive: {
          0: true,
          1: true,
          2: false
        },
        section: {
          static: true,
          choose: false,
          dir: false,
          coef: false,
          border: false
        },
        dirReady: false,
        // cardsEnd: false,
        move: 'static'
        // status: 'choose',
      },
      comics: {
        // paused: false,
        slidesOff: false,
        open: false,
        audios: {
          'comics-start': {
            1: 'autoDodge'
          },
          'comics-money': {
            0: 'money'
          },
          'comics-money2': {
            0: 'money'
          },
          'track-border': {},
          'village-border': {},
          'city-border': {}
        }
      },
      border: {
        situation: 0
      },
      cards: {
        closed: true,
        situation: 0,
        ways: {
          track: {
            0: {
              lose: {
                0: 0.8,
                1: 0.5
              }
            },
            1: {
              lose: {
                0: 0.8,
                1: 0.5
              }
            },
            2: {
              lose: {
                0: 0.8,
                1: 0.5
              }
            }
          },
          village: {
            0: {
              lose: {
                0: 0.8,
                1: 0.5
              }
            },
            1: {
              lose: {
                0: 0.8,
                1: 0.5
              }
            },
            2: {
              lose: {
                0: 0.8,
                1: 0.5
              }
            }
          },
          city: {
            0: {
              lose: {
                0: 0.8,
                1: 0.5
              }
            },
            1: {
              lose: {
                0: 0.8,
                1: 0.5
              }
            },
            2: {
              lose: {
                0: 0.8,
                1: 0.5
              }
            },
            3: {
              lose: {
                0: 0.8,
                1: 0.5
              }
            }
          }
        }
      },
      static: {
        toggle: false,
        day: true
      }
    },
    computed: {
      val() {
        return this.bet.tweenedVal.toFixed(2);
      }
    },
    watch: {
      'coefs.cur': function(newValue) {
        this.updateCoef();
      },
      'bet.val': function(newValue) {
        this.bet.val = +this.bet.val.toFixed(2);
        gsap.to(this.bet, { duration: 1, tweenedVal: +newValue });
      }
    },
    methods: {
      animateLogo() {
        var ctx = document.querySelectorAll(".ec-logo__canvas"),
            svg = document.querySelector(".ec-logo__svg"),
            paths = svg.querySelectorAll("path"),
            colors = ['#fff', '#2d2e2d'],
            self = this,
            l = paths.length;

        for (var i = 0; i < ctx.length; i++) {
          var canvas = ctx[i].getContext("2d"),
              roughBrushes = [];

          for (var j = 0; j < l; j++) {
            var path = paths[j],
                roughBrush = new Brush({
              path: path,
              ctx: canvas,
              spacing: 1
            });
            roughBrushes.push(roughBrush);
          }

          animateRough(canvas, colors[i], roughBrushes);
        }

        function animateBrush(brush, i) {

          TweenMax.to(brush, 1, {
            v: 1,
            delay: 0.15 * i,
            ease: Quint.easeOut,
            onUpdate() {
              brush.drawFromLast();
            },
            onComplete() {
              brush.drawFromLast();
            }
          });
        }

        function animateRough(ctx, color, roughBrushes) {
          ctx.fillStyle = color;

          for (var i = 0; i < roughBrushes.length; i++) {
            animateBrush(roughBrushes[i], i);
          }
        }
      },
      addUserVal(val) {
        this.bet.val += val;
        this.onButtonClick();
      },
      audiosLoad(fn) {
        let audios = this.sound.audios,
            loaded = 1,
            l = 0,
            chackLoad = function(audio) {
              ++l;
              audio.onloadeddata = function() {
                ++loaded;
                if(loaded == l) fn();
              }
            },
            load = function(audios) {
              for (var key in audios) {
                if(audios[key].muted != undefined) chackLoad(audios[key]);
                else if(audios[key].length) {
                  for (var i = 0; i < audios[key].length; i++) {
                    if(audios[key][i].muted != undefined) chackLoad(audios[key][i]);
                    else load(audios[key][i]);
                  }
                  continue;
                } else load(audios[key]);
              }
            };load(audios);
      },
      beforeComicsOpen() {
        this.popIn(true);
      },
      borderShow() {
        let g = this.game,
            c = this.comics,
            br = this.border,
            b = this.bet,
            win = this.Game.getRand(0,1),
            lose = b.safe ? 1 : 2;

        g.win = win;

        br.situation = win ? 0 : lose;

        setTimeout(() => {
          c.name = 'border';
          c.cur = g.way+'-border';
          this.modalShow(c.cur);
        }, 4000);
      },
      bCardsClose() {
        let g = this.game,
            lvl = g.stages[g.way],
            b = lvl.curStage < lvl.length;


        this.cards.closed = true;

        this.popIn(false);

        g.status = 'dir';

        this.updateCoef();

        this.showChangeVal();

        if(b)  {
          this.hint = true;
          this.Game.backCar();
          return
        }

        lvl.curStage = 0;

        g.prevStatus = g.status;
        g.status = 'coef';

        this.showSection(g.status);
      },
      bCardsOpen() {
        this.cards.closed = false;

        this.popIn(true);
      },
      beforeComicsClose() {
        let name = this.comics.beforeClose;
        if(name) {
          this[name]();
        }
        this.comics.beforeClose = false;
        this.popIn(false);
      },
      borderEnd() {
        let c = this.comics;
        this.modalHide(c.cur);

        this.calcResult();

        this.status = 'win';
        this.gameWin();
      },
      changeDN() {
        let g = this.game,
            s = this.static;

        setTimeout(() => {
          if(g.started) return;
          s.toggle = !s.toggle;
          this.changeDN();
          setTimeout(() => {
            if(g.started) return;
            s.toggle ? s.day = false : s.day = true;
          }, 16000/2);
        }, 16000);
      },
      changeCoef(dir, way) {
        let g = this.game, a = this.sound.audios;
        g.prevStatus = g.status;

        this.car.dir = dir;

        this.coefs.cur = this.coefs.win[way];

        g.way = way;

        g.status = 'coefChoosed';

        this.carRide(g.status);

        if(dir != 'mid') this.playAudio('turn');
        this.playAudio('start');
        this.onButtonClick();
      },
      carRide(name) {
        let g = this.game,
            cr = this.car;

        this.Game.carRideTo(name, cr.dir);
        cr.end = false;
        g.dirReady = false;
      },
      closeComics() {
        let g = this.game,
            c = this.comics;
        this.Game.closeComics(c.cur);
        this.onButtonClick();
        // this.modalHide('comics-'+g.curComics);
      },
      closeCards(name) {
        let g = this.game,
            cd = this.cards;
        this.$modal.hide(cd.cur);
      },
      comicsOpened() {
        let c = this.comics;
        c.open = true;

        setTimeout(() => {
          this.Game.showComics(c.name);
        }, 300);
      },
      comicsClosed() {
        let c = this.comics;
        c.open = false;
      },
      chooseWay(name, dir) {
        let g = this.game,
            a = this.sound.audios,
            cs = this.coefs,
            cards = this.cards.ways[name];

        g.prevStatus = g.status;

        this.car.dir = dir;

        cs.cur = cs.win[name];

        g.status = 'dir';
        g.way = name;

        this.cards.ways[g.way+'Ids'] = [];
        for (var key in cards) this.cards.ways[g.way+'Ids'].push(key);

        g.roadActive = g.stages[g.way].roadActive;
        this.carRide(false);

        if(dir != 'mid') this.playAudio('turn');
        this.playAudio('start');
        this.onButtonClick();
      },
      chooseDir(dir) {
        let g = this.game, a = this.sound.audios;

        g.stages[g.way].curStage += 1;
        g.prevStatus = g.status;
        this.hint = false;

        this.car.dir = dir;
        g.status = 'dirChoosed';

        this.hideChangeVal();

        this.carRide(g.status);

        if(dir != 'mid') this.playAudio('turn');
        this.playAudio('start');
        this.onButtonClick();
      },
      coefChoosed() {
        this.modalShow('modal-safe');
      },
      cardsOpened() {
        let bet = this.bet,
            b = bet.change > 0;
        this.Game.animCard(60000);

        let cardsSlider = tns({
          autoplayButtonOutput: false,
          container: '.ec-slider__content',
          mouseDrag: false,
          loop: false,
          arrowKeys: false,
          prevButton: false,
          nextButton: false,
          items: 1,
          autoplayTimeout: 3000,
          autoplay: true,
          // disable: true,
          gutter: 0
        });

        let slides = cardsSlider.getInfo().container.querySelectorAll('.ec-slider__item');

        slides[0].classList.add('ec-slider__item--anim');

        cardsSlider.events.on('transitionStart', (info, eventName) => {
          slides[info.index].classList.add('ec-slider__item--anim');
        });

      },
      cardsClosed() {
        let bet = this.bet;

        this.car.end = true;
        this.car.dir = '';
      },
      calcResult() {
        let b = this.bet,
            cf = this.coefs,
            g = this.game;

        if(g.win) b.val = b.val*cf.cur;
        else b.val /=2;

        // b.val = b.val*cf.cur;

        if(b.safe) b.val += +b.safe;

      },
      dirChoosed() {
        let b = this.bet,
            g = this.game,
            cd = this.cards,
            cf = this.coefs,
            cardObj = this.getCard(),
            win = this.Game.getRand(0,1);

        cd.cur = g.way+'_'+cardObj.id;

        if(win) {
          cd.situation = 0;
          cf.cur = cf.win[g.way];
        }
        else {
          cd.situation = this.Game.getRand(1,2);
          cf.cur = cd.ways[g.way][cardObj.id].lose[cd.situation-1];
        }
        b.change = ((b.val*cf.cur)-b.val).toFixed(2);

        // console.log(bet.change);

        this.modalShow(cd.cur);
      },
      getCard() {
        let g = this.game,
            cards = this.cards.ways[g.way],
            cardIds = this.cards.ways[g.way+'Ids'],
            arr = [];

        // this.cards.ways[g.way+'Clone'] = cards;
        let id = this.Game.shuffle(cardIds)[0];
        cardIds.shift();
        return {
          id: id,
          card: cards[id]
        }
      },
      gameWin() {
        let c = this.comics, g = this.game;
        g.win = true;
        this.modalShow('modal-win');
        g.prevStatus = 'border';
        g.status = 'static';
        // document.querySelector(`.ec-section_${g.status}`).classList.remove('ec-section_move');
        this.showSection(g.status, true);
        // this.Game.nextSection(g.prevStatus, g.status);
        setTimeout(() => {
          this.animateLogo();
        }, 1000);
      },
      gameEnd(status) {
        let c = this.comics,
            g = this.game,
            cf = this.coefs;

        this.onButtonClick();
        this.modalHide('modal-win');

        cf.cur = '';

        if(status == undefined) return g.started = false;
        g.prevStatus = 'border';
        g.status = status;
        // document.querySelector(`.ec-section_${g.status}`).classList.remove('ec-section_move');
        this.showSection(g.status, true);
        // this.Game.nextSection(g.prevStatus, g.status);
        c.slidesOff = false;
        g.started = true;
      },
      loadReady() {
        let s = this.sound;
        this.load.ready = true;
        this.updateBack();
        this.changeDN();

        setTimeout(() => {
          this.animateLogo();
        }, 1000);

        document.addEventListener('click',  () => {
          // this.cs.cur = this.Game.getRand(0, 1000);
          if(s.curBack.paused) this.updateBack();
        });

        document.addEventListener( 'visibilitychange' , () => {
          if (document.hidden) this.soundMute(true, 'focus');
          else this.soundMute(false, 'focus');
        }, false );

        // test
        let hash = location.search.replace(/\?/,''),
            g = this.game,
            c = this.comics,
            b = this.bet;

        if(hash.split('-')[1] === 'comics') {
          g.status = 'static';
          c.cur = 'comics-'+hash.split('-')[0];
          c.name = hash.split('-')[0];
          this.modalShow(c.cur);

        }
        else if (hash.split('-')[0] === 'modal') {
          this.popIn(true);
          g.started = this.static.day = true;
          g.way = 'track';
          this.modalShow(hash);
        }
        else if(hash.split('-')[1] === 'way') {
          g.prevStatus = g.status;
          g.status = 'dir';
          this.showSection(g.status);
          g.way = hash.split('-')[0];
          let cards = this.cards.ways[g.way];
          this.cards.ways[g.way+'Ids'] = [];
          for (var key in cards) this.cards.ways[g.way+'Ids'].push(key);
          g.started = this.static.day = true;
          this.static.toggle = false;
          g.roadActive = g.stages[g.way].roadActive;
        } else if(hash.split('_').length === 3) {
          this.cards.situation = Number(hash.split('_')[2]);
          this.cards.cur = hash.split('_').slice(0,-1).join('_');
          g.way = 'track';
          this.modalShow(this.cards.cur);
        } else if (hash.split('_')[0].split('-')[1] === 'border') {
          this.border.situation = Number(hash.split('_')[1]);
          c.name = 'border';
          c.cur = hash.split('_')[0];
          this.modalShow(hash.split('_')[0]);
        }
      },
      modalShow(name, e) {
       this.$modal.show(name);
      },
      modalHide(name) {
        this.$modal.hide(name);
      },
      moneyEnd() {
        let c = this.comics, g = this.game;

        this.modalHide(c.cur);

        // console.log(g.status);

        this.showSection(g.status);
        // this.Game.nextSection(g.prevStatus, g.status);
      },
      modalOpened() {
      },
      bModalOpen() {
        this.popIn(true);
      },
      bModalClose() {
        this.popIn(false);
      },
      onButtonClick() {
        this.playAudio('click');
      },
      popIn(b) {
        if(b) this.body.classList.add('ec-no-scroll');
        else this.body.classList.remove('ec-no-scroll');
      },
      playAudio(name, fn) {
        let s = this.sound,
            audio;

        if(typeof s.audios[name] === 'string') s.audios[name] = new Audio(s.audios[name]);

        if(s.audios[name].muted != undefined) {
          audio = s.audios[name];
        // if(name.muted != undefined) {
          audio.currentTime = 0;
          audio.play();
          if(fn) fn(audio);
        } else {
          // if(name === 'radio') audio = s.audios[name][s.radio-1];
          // else audio = s.audios[name];
          audio = s.audios[name];

          let id = name === 'radio' ? s.radio-1 : this.Game.getRand(0, audio.length-1);
          if(typeof audio[id] === 'string') audio[id] = new Audio(audio[id]);

          // let audio = new Audio(name[this.Game.getRand(0, name.length-1)]);
          audio[id].currentTime = 0;
          audio[id].play();
          if(fn) fn(audio[id]);
        }
      },
      resetVal() {
        this.bet.val = 0;
        this.onButtonClick();
      },
      startGame() {
        let g = this.game,
            a = this.sound.audios,
            b = this.bet,
            c = this.comics;

        if (b.val < b.min) return;

        b.user = b.val;
        g.started = this.static.day = true;
        this.static.toggle = false;
        g.prevStatus = g.status;
        // document.querySelector(`.ec-section_${g.status}`).classList.add('ec-section_move');
        g.status = 'choose';
        c.name = 'start';
        c.cur = 'comics-start';
        this.car.end = false;
        this.playAudio('start');
        setTimeout(() => {
          this.modalShow(c.cur);
        }, 1000);
        this.onButtonClick();
      },
      startEnd() {
        let c = this.comics, g = this.game;

        this.modalHide(c.cur);

        this.showSection(g.status);
        // this.Game.nextSection(g.prevStatus, g.status);
      },
      sectionBefore(el) {
         this.game.dirReady = this.hint = false;
         setTimeout(() => {
           this.car.end = true;
           this.car.dir = '';
         }, 500);
       },
      sectionAfter(el) {
        let g = this.game;

        // setTimeout(() => {
        //   g.move = g.next;
        // }, 200);
        setTimeout( () => {
          this.game.dirReady = this.hint = true;
        }, 800);
       // el.classList.add('ec-section_move');
      },
      soundMute(b, f) {
        let sound = this.sound;
        if(f != 'focus') {
          sound.muted = b;
        } else if(sound.muted) return;

        let mute = function(audios, b) {
          for (var key in audios) {
            if(audios[key].muted != undefined) {
              audios[key].muted = b;
            } else if(audios[key].length) {
              for (var i = 0; i < audios[key].length; i++) {
                if(audios[key][i].muted != undefined) audios[key][i].muted = b;
                else mute(audios[key][i], b);
              }
              continue;
            } else mute(audios[key], b);
          }
        };mute(sound.audios, b);

        // if(b) {
        //   let click = this.sound.audios.click;
        //   click.muted = false;
        //   click.onended = function() {
        //     click.muted = true;
        //   }
        // }

        this.onButtonClick();
      },
      safeGame(b, name, e) {
        let g = this.game, c = this.comics;

        g.prevStatus = g.status;
        g.status = 'border';
        this.modalHide(name);
        this.onButtonClick();
        c.beforeClose = 'borderShow';

        c.cur = 'comics-money';

        c.name = 'money';
        if(b) this.bet.safe = this.bet.val /= 2;
        else this.bet.safe = false;

        this.modalShow(c.cur);
      },
      showSection(name, b) {
        let g = this.game;
        for (var key in g.section)
          key == name ? g.section[key] = true : g.section[key] = false;

        setTimeout(() => {
          g.move = name
        }, 200);
        // g.next = name;
      },
      // skipSlide() {
      //   this.Game.skipSlide();
      //   this.onButtonClick();
      // },
      // skipAll() {
      //   this.comics.slidesOff = this.comics.skip = true;
      //   this.Game.skipAll();
      //   this.onButtonClick();
      // },
      // toggleComics() {
      //   this.comics.paused = !this.comics.paused;
      //   this.Game.toggleComics();
      //   this.onButtonClick();
      // },
      updateVal(val) {
        this.onButtonClick();
      },
      updateRadio(i) {
        // if(this.sound.muted) return;
        let s = this.sound;

        if(s.radio === i) return;
        s.radio = i;
        this.updateBack();
        this.onButtonClick();
      },
      updateBack() {
        let self = this,
            s = self.sound,
            next = s.audios.radio[s.radio-1];

        if(s.curBack != undefined) {

          s.curBack.pause();
          s.curBack.onended = null;
        }
        // s.curBack.currentTime = 0;
        this.playAudio('radio', (audio) => {
          s.curBack = audio;
        });
        // s.curBack = next;
        s.curBack.onended = function() {
          self.updateBack();
        }
      },
      // updateAfterChange() {
      //   let b = this.bet;
      // },
      updateCoef() {
        if(!this.cards.closed) return;
        let cs = this.coefs;
        cs.change = true;
        if(!cs.time) return cs.time = setTimeout(() => {
          cs.change = cs.time = false;
        }, 2000);
      },
      showChangeVal() {
        let b = this.bet;
        b.isChange = true;

        if(b.isChange) setTimeout(() => {
          this.hideChangeVal();
        }, 2000);
      },
      hideChangeVal() {
        let b = this.bet;
        b.isChange = false;
        b.val += +b.change;

        setTimeout(() => {
          b.change = 0;
        }, 300);
      }
      // testShow(id) {
      //   var comics = ['comics-choose', 'comics-money', 'comics-border', 'comics-cards1'],
      //       arr = id.split('.');
      //
      //   this.modalShow(comics[arr[0]-1]);
      //   setTimeout(() => {
      //     this.Game.testShow(arr);
      //   }, 100);
      // },
    },
    mounted() {
      let s = this.sound,
          g = this.game,
          c = this.comics,
          cd = this.cards;

      window.onload = () => {
        this.load.images = true;
        // console.log('IMAGES LOADED ', this.load.audios);
        if(this.load.audios) this.loadReady();
      }
      this.Game = new CaminoClass();

      this.audiosLoad(() => {
        this.load.audios = true;
        // console.log('AUDIO LOADED ', this.load.images);
        if(this.load.images) this.loadReady();
      });
      // s.curBack = s.audios.radio[0][0];



      this.Game.on('slidesOff', () => {
        // console.log('SLIDES OFF');
        c.slidesOff = true;
        if(c.hasOwnProperty('curAudio')) c.curAudio.pause();
      });

      this.Game.on('slideStart', (id) => {
        // console.log('SLIDE '+id);
        var audios = c.audios[c.cur];
        if(audios.hasOwnProperty(id)) {
          if(c.hasOwnProperty('curAudio')) c.curAudio.pause();
          this.playAudio(audios[id], (audio) => {
            c.curAudio = audio;
          });
        }
      });

      this.Game.on('cardPartEnd', () => {
        // if(g.cardsClosed) return;
        // let info = this.$refs.tinySlider.slider.getInfo();
        //
        // if(info.slideCount-1 == info.index) {

          // if(g.cardsEnd) {
            this.modalHide(cd.cur);
            // g.cardsEnd = false;
            // return;
          // }
          // g.cardsEnd = true;
          // this.updateAfterChange();
        // }

        // this.$refs.tinySlider.slider.goTo('next');

        // this.animComics({
        //   start: performance.now(),
        //   dur: 2000
        // }, 'cards');
      })

      this.Game.on('comicsEnd', () => {

        // if(!c.open) return;
        this[c.name+'End']();

        // this.modalHide('comics-'+g.curComics);
        //
        // this.showSection(g.status);
        // this.nextSection(g.prevStatus, g.status);
        // c.slidesOff = false;
        // c.open = false;
      });

      // this.Game.on('sectionChanged', function() {
      //
      //   this.car.end = false;
      //   this.car.dir = '';
      //   // if(g.status === 'border') this.borderShow();
      //   // this.moveCar(g.status);
      // });

      this.Game.on('carLeft', (name) => {

        g.dirReady = true;
        this.car.end = true;

        if(name) return this[name]();
        // else if(name === 'chooseCoef') return this.coefChoosed();

        this.showSection(g.status);
        // this.nextSection(g.prevStatus, g.status);
      });
    }
  });
