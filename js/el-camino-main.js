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

console.log(window['vue-js-modal']);

const page = document.querySelector('.ec-page'),
  Camino = new Vue({
    el: '.ec-page',
  	components: {
    	Multiselect: window.VueMultiselect.default
  	},
    data: {
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
        tweenedVal: 10,
        coef: '',
        add: false,
        rem: false,
        change: 0,
        coefs: {
          cur: '',
          win: {
            track: 1.2,
            village: 2.1,
            city: 4
          }
        }
      },
      car: {
        end: false,
        dir: ''
      },
      game: {
        started: false,
        status: 'static',
        sectionReady: false,
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
        cardsEnd: false,
        cardsClosed: true,
        move: 'static'
        // status: 'choose',
      },
      comics: {
        paused: false,
        slidesOff: false,
        open: false,
        audios: {
          start: {
            1: 'autoDodge'
          },
          money: {
            0: 'money'
          },
          money2: {
            0: 'money'
          },
          border: {}
        }
      },
      cards: {
        situation: 0,
        ways: {
          village: {
            0: {
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
      },
      hint: 'choose'
    },
    computed: {
      val() {
        return this.bet.tweenedVal.toFixed(2);
      }
    },
    watch: {
      'bet.val': function(newValue) {
        this.bet.val = +this.bet.val.toFixed(2);
        gsap.to(this.bet, { duration: 2, tweenedVal: +newValue });
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
      },
      borderShow() {
        let g = this.game, c = this.comics;

        setTimeout(() => {
          c.cur = c.fnName = 'border';
          this.modalShow('comics-border');
        }, 2000);
      },
      bCardsClose() {
        let g = this.game;

        g.prevStatus = g.status;
        g.status = 'coef';


        this.showSection(g.status);
        this.updateAfterChange();

        this.body.classList.remove('no-scroll');
      },
      bCardsOpen() {
        this.game.cardsClosed = false;

        this.body.classList.add('no-scroll');
      },
      beforeComicsClose() {
        let name = this.comics.beforeClose;
        if(name) this[name]();
        this.comics.beforeClose = false;
      },
      borderEnd() {
        this.modalHide('comics-'+c.cur);

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
      changeCoef(dir) {
        let g = this.game, a = this.sound.audios;
        g.prevStatus = g.status;

        this.car.dir = dir;

        g.status = 'coefChoosed';
        this.Game.carRideTo(g.status, dir);
        this.car.end = false;

        if(dir != 'mid') this.playAudio('turn');
        this.playAudio('start');
        this.onButtonClick();
      },
      closeComics() {
        let g = this.game, c = this.comics;
        this.Game.closeComics(c.cur);
        this.onButtonClick();
        // this.modalHide('comics-'+g.curComics);
      },
      closeCards(name) {
        let g = this.game;
        this.$modal.hide(name);
      },
      comicsOpened() {
        console.log('OPENED');
        let c = this.comics;
        c.open = true;
        setTimeout(() => {this.Game.showComics(c.cur);}, 300);
      },
      comicsClosed() {
        let c = this.comics;
        c.open = false;
      },
      chooseWay(name, dir) {
        let g = this.game, a = this.sound.audios;
        g.prevStatus = g.status;
        this.car.dir = dir;

        g.status = 'dir';
        g.way = name;
        this.Game.carRideTo(false, dir);
        this.car.end = false;

        if(dir != 'mid') this.playAudio('turn');
        this.playAudio('start');
        this.onButtonClick();
      },
      chooseDir(dir) {
        let g = this.game, a = this.sound.audios;
        g.prevStatus = g.status;

        this.car.dir = dir;
        g.status = 'dirChoosed';

        this.Game.carRideTo(g.status, dir);
        this.car.end = false;

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

        if(bet.change > 0) {
          bet.rem = false;
          bet.add = true;
        } else if (bet.change < 0) {
          bet.rem = true;
          bet.add = false;
        } else {
          bet.rem = false;
          bet.add = false;
        }

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

        slides[0].classList.add('ec-slider__item_anim');

        cardsSlider.events.on('transitionStart', (info, eventName) => {
          slides[info.index].classList.add('ec-slider__item_anim');
        });

      },
      cardsClosed() {
        this.game.cardsClosed = true;
      },
      startEnd() {
        let c = this.comics, g = this.game;

        this.modalHide('comics-'+c.cur);

        this.showSection(g.status);
        // this.Game.nextSection(g.prevStatus, g.status);
      },
      dirChoosed() {
        let bet = this.bet,
            g = this.game,
            cd = this.cards,
            cardObj = this.getCard(),
            win = this.Game.getRand(0,1);

        cd.cur = g.way+'_'+cardObj.id;

        if(win) {
          cd.situation = 0;
          bet.coefs.cur = bet.coefs.win[g.way];
          console.log('WIN');
        }
        else {
          cd.situation = this.Game.getRand(1,2);
          bet.coefs.cur = cd.ways[g.way][cardObj.id].lose[cd.situation-1];
          console.log("LOSE");
        }
        bet.change = ((bet.val*bet.coefs.cur)-bet.val).toFixed(2);

        console.log(bet.change);

        this.modalShow(cd.cur);
      },
      getCard() {
        let g = this.game,
            cards = this.cards.ways[g.way],
            arr = [];

        for (var key in cards) arr.push(key);
        let id = this.Game.shuffle(arr)[0];
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
        let c = this.comics, g = this.game;

        this.onButtonClick();
        this.modalHide('modal-'+(g.win ? 'win' : 'lose'));
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
          if(s.curBack.paused) this.updateBack();
        });

        document.addEventListener( 'visibilitychange' , () => {
          if (document.hidden) this.soundMute(true, 'focus');
          else this.soundMute(false, 'focus');
        }, false );

        // test
        let hash = location.search.replace(/\?/,''),
            g = this.game;
        if(hash.split('-')[1] === 'comics') {
          g.status = hash.split('-')[0];
          c.cur = g.status;
          g.testComics = true;
          this.modalShow('comics-'+hash.split('-')[0]);
        }
        else if (hash.split('-')[0] === 'modal') this.modalShow(hash);
        else if(hash.split('-')[0] === 'section') {
          g.prevStatus = g.status;
          g.status = hash.split('-')[1];
          this.showSection(g.status);
        } else if(hash.split('-')[1] === 'way') {
          g.prevStatus = g.status;
          g.status = 'dir';
          this.showSection(g.status);
          g.way = hash.split('-')[0];
          g.started = this.static.day = true;
          this.static.toggle = false;
        } else if(hash.split('_').length === 3) {
          this.cards.situation = Number(hash.split('_')[2]);
          g.testComics = true;
          this.modalShow(hash.split('_').slice(0,-1).join('_'));
        }
      },
      modalShow(name) {
       this.$modal.show(name);
      },
      modalHide(name) {
        this.$modal.hide(name);
      },
      moneyEnd() {
        let c = this.comics, g = this.game;

        this.modalHide('comics-'+c.cur);

        // console.log(g.status);

        this.showSection(g.status);
        // this.Game.nextSection(g.prevStatus, g.status);
      },
      onButtonClick() {
        this.playAudio('click');
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
        let g = this.game, a = this.sound.audios, c = this.comics;
        if (this.bet.val < this.bet.min) return;
        g.started = this.static.day = true;
        this.static.toggle = false;
        g.prevStatus = g.status;
        // document.querySelector(`.ec-section_${g.status}`).classList.add('ec-section_move');
        g.status = 'choose';
        c.cur = c.fnName = 'start';
        this.car.end = false;
        this.playAudio('start');
        setTimeout(() => {
          this.modalShow('comics-'+c.fnName);
        }, 1000);
        this.onButtonClick();
      },
      sectionBefore(el) {
         this.game.sectionReady = false;
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
          this.game.sectionReady = true;
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
        c.fnName = 'money';
        if(b) {
          this.bet.val /= 2;
          c.cur = 'money';
          this.modalShow('comics-money');
        } else {
          c.cur = 'money2';
          this.modalShow('comics-money2');
        }
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
      updateAfterChange() {
        let bet = this.bet;
        bet.rem = false;
        bet.add = false;
        bet.val += +bet.change;
        bet.change = 0;
      },
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
        console.log('IMAGES LOADED ', this.load.audios);
        if(this.load.audios) this.loadReady();
      }
      this.Game = new CaminoClass();

      this.audiosLoad(() => {
        this.load.audios = true;
        console.log('AUDIO LOADED ', this.load.images);
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
            g.cardsEnd = false;
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
        this[c.fnName+'End']();

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
        // console.log(name);
        console.log(name);
        if(name) return this[name]();
        // else if(name === 'chooseCoef') return this.coefChoosed();

        this.showSection(g.status);
        // this.nextSection(g.prevStatus, g.status);
      });
    }
  });
