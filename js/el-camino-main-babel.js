"use strict";

Vue.use(window["vue-js-modal"].default, {
  dynamic: true
});
var page = document.querySelector('.ec-page'),
    Camino = new Vue({
  el: '.ec-page',
  components: {
    Multiselect: window.VueMultiselect.default
  },
  data: {
    showModal: false,
    select: {
      value: 'Основной',
      options: ['Основной', 'Бонусный 1s']
    },
    sound: {
      muted: false,
      radio: 1
    },
    bet: {
      quickSums: [50, 100, 500, 1000, 5000, 10000],
      val: 10,
      min: 10,
      coef: 1.35
    },
    car: {
      dir: ''
    },
    game: {
      started: false,
      status: 'static' // status: 'choose',

    },
    comics: {
      paused: false,
      slidesOff: false
    },
    static: {
      toggle: false,
      day: true
    },
    hint: 'choose'
  },
  methods: {
    soundMute: function soundMute(b) {
      this.sound.muted = b;
    },
    addUserVal: function addUserVal(val) {
      this.bet.val += val;
    },
    resetVal: function resetVal() {
      this.bet.val = 0;
    },
    startGame: function startGame() {
      if (this.bet.val < this.bet.min) return;
      this.game.started = this.static.day = true;
      this.game.prevStatus = this.game.status;
      this.Game.moveCar(this.game.status);
      this.game.status = 'choose';
    },
    changeDN: function changeDN() {
      var _this = this;

      setTimeout(function () {
        if (_this.game.started) return;
        _this.static.toggle = !_this.static.toggle;

        _this.changeDN();

        setTimeout(function () {
          _this.static.toggle ? _this.static.day = false : _this.static.day = true;
        }, 16000 / 2);
      }, 16000);
    },
    toggleComics: function toggleComics() {
      this.comics.paused = !this.comics.paused;
      this.Game.toggleComics();
    },
    skipSlide: function skipSlide() {
      this.Game.skipSlide();
    },
    skipAll: function skipAll() {
      this.comics.slidesOff = true;
      this.Game.skipAll();
    },
    closeComics: function closeComics() {
      var g = this.game;
      this.Game.closeComics(g.status);
      this.modalHide('comics-' + g.status);
    },
    updateRadio: function updateRadio(i) {
      // if(this.sound.muted) return;
      this.sound.radio = i;
    },
    modalShow: function modalShow(name) {
      this.$modal.show(name);
    },
    modalHide: function modalHide(name) {
      console.log('hide');
      this.$modal.hide(name);
    },
    beforeOpen: function beforeOpen() {
      console.log('beforeOpen');
    },
    modalOpened: function modalOpened() {
      var _this2 = this;

      if (this.comics.open) setTimeout(function () {
        _this2.Game.showComics(_this2.game.status);
      }, 300);
    },
    modalClosed: function modalClosed() {
      console.log('Closed');
    },
    beforeClose: function beforeClose() {
      console.log('beforeClose');
    },
    chooseRoad: function chooseRoad(name, dir) {
      var g = this.game;
      g.prevStatus = g.status;
      this.car.dir = dir;
      this.Game.carRideTo(g.prevStatus, dir);
      g.status = name;
    },
    testShow: function testShow(id) {
      var _this3 = this;

      var comics = ['comics-choose'],
          arr = id.split('.');
      this.modalShow(comics[arr[0] - 1]);
      setTimeout(function () {
        _this3.Game.testShow(arr);
      }, 100);
    }
  }
});
Camino.Game = new CaminoClass();
var g = Camino.game;
Camino.Game.on('moveEnd', function () {
  Camino.comics.open = true;
  Camino.modalShow('comics-' + g.status);
});
Camino.Game.on('slidesOff', function () {
  console.log('sss');
  Camino.comics.slidesOff = true;
});
Camino.Game.on('comicsEnd', function (comics) {
  var _this4 = this;

  if (!Camino.comics.open) return;
  Camino.modalHide('comics-' + g.status);
  setTimeout(function () {
    _this4.nextSection(g.prevStatus, g.status);
  }, 300);
  Camino.comics.open = false;
});
Camino.Game.on('sectionChanged', function () {
  this.moveCar(g.status);
  Camino.car.dir = '';
});
Camino.Game.on('carLeft', function () {
  this.nextSection(g.prevStatus, g.status);
});
var hash = location.search.replace(/\?/, '');
if (hash.length === 3) Camino.testShow(hash); // setTimeout(() => {
//   Camino.Game.showComics('choose');
// }, 1000);

Camino.changeDN();
