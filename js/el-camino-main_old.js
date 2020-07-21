Vue.use(window["vue-js-modal"].default, {
  dynamic: true
});
const VueTinySlider = {
  install(Vue, options) {
    Vue.component('VueTinySlider', window['vue-tiny-slider'])
  }
}
Vue.use(VueTinySlider);

const page = document.querySelector('.ec-page'),
  Camino = new Vue({
    el: '.ec-page',
  	components: {
      'tiny-slider': VueTinySlider,
    	Multiselect: window.VueMultiselect.default
  	},
    data: {
      tinySliderOptions: {
        mouseDrag: false,
        loop: false,
        arrowKeys: false,
        prevButton: false,
        nextButton: false,
        items: 1,
        autoplayTimeout: 2000,
        autoplayButton: false,
        // disable: true,
        gutter: 0
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
          radio: {
            0: [new Audio('audio/el-camino/radio-station-1.1.mp3'), new Audio('audio/el-camino/radio-station-1.2.mp3')],
            1: [new Audio('audio/el-camino/radio-station-2.1.mp3'), new Audio('audio/el-camino/radio-station-2.2.mp3')],
            2: [new Audio('audio/el-camino/radio-station-3.1.mp3'), new Audio('audio/el-camino/radio-station-3.2.mp3')]
          },
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
        coef: 1.35,
        add: false,
        rem: false,
        change: 0
      },
      car: {
        end: false,
        dir: ''
      },
      game: {
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
          track: false,
          village: false,
          city: false,
          change: false,
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
        cardI: 0,
        audios: {
          choose: {
            0: 'wind',
            4: 'money',
            5: 'openDoor',
            6: 'startCar',
            7: 'autoDodge'
          },
          money: {
            2: 'search',
            4: 'zipper',
            4: 'zipper',
            5: 'money'
          },
          border: {}
        }
      },
      static: {
        toggle: false,
        day: true
      },
      hint: 'choose'
    },
    computed: {
      val: function() {
        console.log(this.bet.tweenedVal);
        return this.bet.tweenedVal.toFixed(0);
      }
    },
    watch: {
      'bet.val': function(newValue) {
        gsap.to(this.$data.bet, { duration: 2, tweenedVal: newValue });
      }
    },
    methods: {
      soundMute(b, f) {
        let sound = this.sound;
        if(f != 'focus') {
          sound.muted = b;
        } else {
          if(sound.muted) return;
        }
        let mute = function(audios, b) {
          for (var key in audios) {
            if(audios[key].muted != undefined) {
              audios[key].muted = b;
            } else if(audios[key].length) {
              for (var i = 0; i < audios[key].length; i++) audios[key][i].muted = b;
              continue;
            } else mute(audios[key], b);
          }
        };mute(sound.audios, b);

        if(b) {
          let click = this.sound.audios.click;
          click.muted = false;
          click.onended = function() {
            click.muted = true;
          }
        }

        this.onButtonClick();
      },
      updateVal(val) {
        this.onButtonClick();
      },
      addUserVal(val) {
        this.bet.val += val;
        this.onButtonClick();
      },
      resetVal() {
        this.bet.val = 0;
        this.onButtonClick();
      },
      startGame() {
        let g = this.game, a = this.sound.audios;
        if (this.bet.val < this.bet.min) return;
        g.started = this.static.day = true;
        g.prevStatus = g.status;
        // document.querySelector(`.ec-section_${g.status}`).classList.add('ec-section_move');
        g.curComics = g.status = 'choose';
        this.playAudio(a.start);
        setTimeout(() => {
          this.comics.open = true;
          this.modalShow('comics-'+g.status);
        }, 1000);
        this.comics.play = true;
        this.onButtonClick();
      },
      showSection(name, b) {
        let g = this.game;
        for (var key in g.section)
          key == name ? g.section[key] = true : g.section[key] = false;

        // if(!b) setTimeout(() => {
        //   g.move = name
        // }, 500);
        setTimeout(() => {
          g.move = name
        }, 1000);
      },
      changeDN() {

        setTimeout(() => {
          if(this.game.started) return;
          this.static.toggle = !this.static.toggle;
          this.changeDN();
          setTimeout(() => {
            this.static.toggle ? this.static.day = false : this.static.day = true;
          }, 16000/2);
        }, 16000);
      },
      toggleComics(name) {
        this.comics.paused = !this.comics.paused;
        this.Game.toggleComics(name);
        this.onButtonClick();
      },
      skipSlide() {
        this.Game.skipSlide();
        this.onButtonClick();
      },
      skipAll() {
        this.comics.slidesOff = true;
        this.Game.skipAll();
        this.onButtonClick();
      },
      closeComics() {
        let g = this.game;
        this.Game.closeComics(g.curComics);
        this.onButtonClick();
        // this.modalHide('comics-'+g.curComics);
      },
      closeCards(name) {
        let g = this.game;
        this.$modal.hide(name);
      },
      updateRadio(i) {
        // if(this.sound.muted) return;
        let s = this.sound,
        r = this.Game.getRand(0, 1);
        s.radio = i;
        this.updateBack();
        this.onButtonClick();
      },
      updateBack() {
        let self = this,
            s = self.sound,
            next = s.audios.radio[s.radio-1].reverse()[0];
        s.curBack.pause();
        s.curBack.onended = null;
        s.curBack = next;
        // s.curBack.currentTime = 0;
        this.playAudio(s.curBack);
        s.curBack.onended = function() {
          self.updateBack();
        }
       },
      modalShow(name) {
        this.$modal.show(name);
      },
      modalHide(name) {
        this.$modal.hide(name);
      },
      beforeComicsOpen() {
      },
      comicsOpened() {
        // console.log('OPENED');
        if(this.comics.open) setTimeout(() => {this.Game.showComics(this.game.curComics);}, 300);
      },
      comicsClosed() {
        let c = this.comics;
        c.slidesOff = false;
        c.open = false;
      },
      beforeComicsClose() {
      },
      sectionBefore(el) {
        setTimeout(() => {
          // el.classList.add('ec-section_move');
        }, 500);
      },
      sectionAfter(el) {
        this.car.end = true;
        // el.classList.add('ec-section_move');
      },
      chooseRoad(name, dir) {
        let g = this.game, a = this.sound.audios;
        g.prevStatus = g.status;

        this.car.dir = dir;
        this.Game.carRideTo(g.prevStatus, dir);

        g.status = name;
        this.car.end = false;

        if(dir != 'mid') this.playAudio(a.turn);
        this.playAudio(a.start);
      },
      chooseDir(dir) {
        let g = this.game, a = this.sound.audios;
        g.prevStatus = g.status;

        this.car.dir = dir;
        g.status = 'chooseDir';

        this.Game.carRideTo(g.status, dir);
        this.car.end = false;

        if(dir != 'mid') this.playAudio(a.turn);
        this.playAudio(a.start);
        this.onButtonClick();
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
      onButtonClick() {
        let audio = this.sound.audios.click;
        this.playAudio(audio);
      },
      playAudio(obj, name) {
        if(obj.muted != undefined) {
          obj.currentTime = 0;
          obj.play();
          if(name != undefined) this[name].curAudio = obj;
        } else {
          let audio = obj[this.Game.getRand(0, obj.length-1)];
          audio.currentTime = 0;
          audio.play();
          if(name != undefined) this[name].curAudio = audio;
        }
      },
      dirChoosed() {
        let bet = this.bet,
            change = bet.val*.2;

        bet.change = this.Game.getRand(0, 1) ? '+'+change : '-'+change;
        this.modalShow('comics-cards1');
      },
      coefChoosed() {
        this.modalShow('modal-safe');
      },
      bCardsClose() {
        let g = this.game;

        g.prevStatus = g.status;
        g.status = 'change';

        this.showSection(g.status);
        this.Game.nextSection(g.prevStatus, g.status);

        this.updateAfterChange();
      },
      bCardsOpen() {
        g.cardsClosed = false;
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
      },
      cardsClosed() {
        this.game.cardsClosed = true;
      },
      changeCoef(dir) {
        let g = this.game, a = this.sound.audios;
        g.prevStatus = g.status;

        this.car.dir = dir;

        g.status = 'chooseCoef';
        this.Game.carRideTo(g.status, dir);
        this.car.end = false;

        if(dir != 'mid') this.playAudio(a.turn);
        this.playAudio(a.start);
        this.onButtonClick();
      },
      safeGame(b, name, e) {
        let g = this.game;

        g.prevStatus = g.status;
        g.status = 'border';
        this.modalHide(name);
        this.comics.open = true;
        g.curComics = 'money';
        this.modalShow('comics-'+g.curComics);
        this.comics.play = true;
        this.onButtonClick();

        if(b) this.bet.val /= 2;
      },
      borderShow() {
        let g = this.game;

        setTimeout(() => {
          this.comics.open = true;
          this.modalShow('comics-border');
          g.curComics = 'border';
        }, 1000);
        this.comics.play = true;
      },
      chooseEnd() {
        let c = this.comics, g = this.game;

        this.modalHide('comics-'+g.curComics);

        this.showSection(g.status);
        this.Game.nextSection(g.prevStatus, g.status);
      },
      moneyEnd() {
        let c = this.comics, g = this.game;

        this.modalHide('comics-'+g.curComics);

        // console.log(g.status);

        this.showSection(g.status);
        this.Game.nextSection(g.prevStatus, g.status);
      },
      borderEnd() {
        console.log('borderEnd');

        this.modalHide('comics-'+g.curComics);

        this.status = 'win';
        this.gameWin();
      },
      gameWin() {
        let c = this.comics, g = this.game;
        g.win = true;
        this.modalShow('modal-win');
        g.prevStatus = 'border';
        g.status = 'static';
        // document.querySelector(`.ec-section_${g.status}`).classList.remove('ec-section_move');
        this.showSection(g.status, true);
        this.Game.nextSection(g.prevStatus, g.status);
        setTimeout(() => {
          this.animateLogo();
        }, 1000);
      },
      gameEnd(status) {
        let c = this.comics, g = this.game;

        this.onButtonClick();
        this.modalHide('modal-'+(g.win ? 'win' : 'lose'));
        if(status == undefined) return;
        g.prevStatus = 'border';
        g.status = status;
        // document.querySelector(`.ec-section_${g.status}`).classList.remove('ec-section_move');
        this.showSection(g.status, true);
        this.Game.nextSection(g.prevStatus, g.status);
        c.slidesOff = g.started = c.open = false;
      },
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
      updateAfterChange() {
        let bet = this.bet;
        bet.rem = false;
        bet.add = false;
        bet.val += +bet.change;
        bet.change = 0;
      }
    },
    mounted() {
      let s = this.sound;
      s.curBack = s.audios.radio[0][0];
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
    }
  });

Camino.Game = new CaminoClass();
let g = Camino.game;

Camino.Game.on('slidesOff', function() {
  // console.log('SLIDES OFF');
  Camino.comics.slidesOff = true;
  if(Camino.comics.hasOwnProperty('curAudio')) Camino.comics.curAudio.pause();
});

Camino.Game.on('slideOff', function(id) {
  // console.log('SLIDE '+id);
  var audios = Camino.comics.audios[g.curComics];
  if(audios.hasOwnProperty(id)) {
    if(Camino.comics.hasOwnProperty('curAudio')) Camino.comics.curAudio.pause();
    Camino.playAudio(Camino.sound.audios[audios[id]], 'comics');
  }
});

Camino.Game.on('cardPartEnd', function() {
  // if(g.cardsClosed) return;
  // let info = Camino.$refs.tinySlider.slider.getInfo();
  //
  // if(info.slideCount-1 == info.index) {

    // if(g.cardsEnd) {
      Camino.modalHide('comics-cards1');
      g.cardsEnd = false;
      // return;
    // }
    // g.cardsEnd = true;
    // Camino.updateAfterChange();
  // }

  // Camino.$refs.tinySlider.slider.goTo('next');

  // this.animComics({
  //   start: performance.now(),
  //   dur: 2000
  // }, 'cards');
})

Camino.Game.on('comicsEnd', function(comics) {
  let c = Camino.comics;

  console.log(comics);

  c.play = false;
  if(!c.open) return;
  Camino[comics+'End']();

  // Camino.modalHide('comics-'+g.curComics);
  //
  // Camino.showSection(g.status);
  // this.nextSection(g.prevStatus, g.status);
  // c.slidesOff = false;
  // c.open = false;
});

Camino.Game.on('sectionChanged', function() {

  console.log('sectionChanged');

  Camino.car.end = false;
  Camino.car.dir = '';
  switch (g.status) {
    case 'border':
      Camino.borderShow();
      break;
    default:

  }
  // Camino.moveCar(g.status);
});

Camino.Game.on('carLeft', function(name) {
  // console.log(name);
  if(name === 'chooseDir') return Camino.dirChoosed();
  else if(name === 'chooseCoef') return Camino.coefChoosed();
  // else if(name === 'chooseCoef') return Camino.coefChoosed();

  Camino.showSection(g.status);
  this.nextSection(g.prevStatus, g.status);
});


let hash = location.search.replace(/\?/,'');
if(hash.split('-')[1] === 'comics') {
  Camino.comics.open = true;
  g.status = hash.split('-')[0];
  g.curComics = g.status;
  g.testComics = true;
  Camino.modalShow('comics-'+hash.split('-')[0]);
}
else if (hash.split('-')[0] === 'modal') Camino.modalShow(hash);
else if(hash.split('-')[0] === 'section') {
  g.prevStatus = g.status;
  g.status = hash.split('-')[1];

  Camino.showSection(g.status);
}
