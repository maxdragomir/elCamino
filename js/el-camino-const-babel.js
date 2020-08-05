"use strict";

function _instanceof(left, right) { if (right != null && typeof Symbol !== "undefined" && right[Symbol.hasInstance]) { return !!right[Symbol.hasInstance](left); } else { return left instanceof right; } }

function _classCallCheck(instance, Constructor) { if (!_instanceof(instance, Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var CaminoClass = /*#__PURE__*/function () {
  function CaminoClass() {
    var _this = this;

    _classCallCheck(this, CaminoClass);

    this.page = document.querySelector('.ec-page');
    this.setts = {
      changed: false,
      carDur: 1500,
      comics: {
        dur: 2000,
        durEnd: 3000,
        roundMax: 170 // paused: false,
        // skip: false

      },
      car: {
        dur: 1500,
        outDur: 2000,
        sprites: {
          left: {
            steps: 20,
            scale: .75,
            coord: [// X  Y
            0, 1, 1, 1, 2, 1, 3, 1, 4, 1, 5, 1, 6, 1, 7, 1, 8, 1, 9, 1, 0, 2, 1, 2, 2, 2]
          },
          mid: {
            steps: 1,
            scale: .78,
            coord: [// X  Y
            0, 0]
          },
          right: {
            steps: 30,
            scale: .75,
            coord: [// X  Y
            0, 3, 1, 3, 2, 3, 3, 3, 4, 3, 5, 3, 6, 3, 7, 3, 8, 3, 9, 3, 0, 4, 1, 4, 2, 4]
          }
        }
      },
      easings: {
        linear: function linear(pos) {
          return pos;
        },
        easeInQuad: function easeInQuad(pos) {
          return Math.pow(pos, 2);
        }
      }
    }; // this.activeRandIcons();

    this.on('comicsPartEnd', function (skip) {
      var s = _this.setts,
          c = s.comics,
          l = c.slides.length - 1; // c.slides[c.curStep].classList.add('ec-comics__slide_end');
      // if(c.curStep >= l) return this.endComics();

      if (c.curStep >= l) return _this.trigger('slidesOff'); // if(skip) c.skip = c.stop = false;

      c.curStep += 1;

      _this.startComics();
    });
  } // nextSection(cur, next) {
  //   let s = this.setts;
  //
  //   // this.page.querySelector(`.ec-section_${next}`).classList.add('ec-section_active');
  //   // this.page.querySelector(`.ec-section_${cur}`).classList.remove('ec-section_active');
  //
  //   setTimeout(() => {
  //     this.trigger('sectionChanged', cur);
  //   }, 100);
  // }


  _createClass(CaminoClass, [{
    key: "showComics",
    value: function showComics(name) {
      var s = this.setts,
          c = s.comics,
          comics = c.wrap = this.page.querySelector(".ec-comics"),
          slides = c.slides = comics.querySelectorAll('.ec-comics__slide_anim'),
          l = slides.length - 1;
      c.curStep = 0; // c.fn = fn;

      s.animOff = false;
      if (slides.length) this.startComics();
      this.endComics();
    }
  }, {
    key: "carRideTo",
    value: function carRideTo(name, dir) {
      var self = this,
          s = self.setts,
          cs = s.car,
          dirObj = cs.sprites[dir],
          l = dirObj.coord.length / 2,
          sc = dirObj.scale,
          carW = self.page.querySelector(".ec-section .ec-car-wrap"),
          car = carW.querySelector('.ec-car'),
          sprite = carW.querySelector('.ec-car__sprite'),
          path = carW.querySelector(".ec-road_dir_".concat(dir)),
          pathL = Math.floor(path.getTotalLength()),
          wh = {
        w: car.offsetWidth,
        h: car.offsetHeight
      },
          b = false;
      s.animOff = false;
      self.animate({
        start: performance.now(),
        timing: function timing(tf) {
          return s.easings.linear(tf); // return s.easings.linear(tf);
        },
        draw: function draw(pr) {
          // if (b) return;
          var step = Math.floor(dirObj.steps * pr),
              coord = function (prcnt) {
            prcnt = prcnt * pathL;
            var pt = path.getPointAtLength(prcnt);
            return {
              x: Math.round(pt.x),
              y: Math.round(pt.y)
            };
          }(pr),
              w = wh.w - wh.w * (pr * sc),
              h = wh.h - wh.h * (pr * sc);

          w = w <= 0 ? 0 : w;
          h = h <= 0 ? 0 : h;
          step = step < l ? step : l - 1;
          car.setAttribute('style', "left: ".concat(coord.x / 588 * 100, "%;\n          top: ").concat(coord.y / 169 * 100, "%;\n          width: ").concat(w, "px;\n          height: ").concat(h, "px;"));
          sprite.setAttribute('style', "left: -".concat(dirObj.coord[step * 2] * 100 + '%', ";\n          top: -").concat(dirObj.coord[step * 2 + 1] * 100 + '%'));
          b = true;
        },
        duration: s.car.outDur,
        complete: function complete(stop) {
          self.trigger('carLeft', name);
        },
        pause: function pause(start) {}
      });
    } // testShow([id, sc]) {
    //
    //   let s = this.setts,
    //       c = s.comics,
    //       comics = this.page.querySelector('.ec-comics'),
    //       screens = comics.querySelectorAll('.ec-comics__slide');
    //
    //   for (var i = 0; i < screens.length; i++)
    //     screens[i].classList.remove('ec-comics__slide_show');
    //
    //     screens[sc-1].classList.add('ec-comics__slide_show');
    // }

  }, {
    key: "endComics",
    value: function endComics() {
      var self = this,
          s = self.setts,
          c = s.comics,
          comics = c.wrap,
          round = comics.querySelector('.ec-comics__round-path'); // c.skipAll = c.stop = false;
      // c.stop = false;

      s.curDur = c.durEnd; // this.trigger('slidesOff');

      this.animate({
        start: performance.now(),
        timing: function timing(tf) {
          return tf;
        },
        draw: function draw(pr) {
          round.setAttribute('stroke-dasharray', c.roundMax - c.roundMax * pr + ' 9999');
        },
        duration: 60000,
        complete: function complete(stop) {
          // if(c.closed) return;
          s.animOff = true;
          self.trigger('comicsEnd'); // console.log('COMICS END');
        } // pause(start) {
        //   c.startDate = start;
        //   return s.comics.paused;
        // }

      });
    }
  }, {
    key: "startComics",
    value: function startComics() {
      var self = this,
          s = this.setts,
          c = s.comics,
          slides = c.slides,
          b = slides[c.curStep].getAttribute('data-dur');
      s.curDur = b ? b : c.dur;
      slides[c.curStep].classList.add('ec-comics__slide_show');
      this.animate({
        start: performance.now(),
        timing: function timing(tf) {
          return tf;
        },
        draw: function draw(pr) {},
        duration: s.curDur,
        complete: function complete(stop) {
          self.trigger('comicsPartEnd', stop);
        }
      }); // if(!c.skipAll) this.trigger('slideOff', c.curStep);

      this.trigger('slideStart', c.curStep);
    }
  }, {
    key: "animCard",
    value: function animCard(dur) {
      var self = this,
          s = self.setts,
          c = s.comics,
          card = c.card = document.querySelector(".ec-comics_cards"),
          round = card.querySelector('.ec-comics__round-path');
      s.curDur = dur;
      this.animate({
        start: performance.now(),
        timing: function timing(tf) {
          return tf;
        },
        draw: function draw(pr) {
          round.setAttribute('stroke-dasharray', c.roundMax - c.roundMax * pr + ' 9999');
        },
        duration: s.curDur,
        complete: function complete(stop) {
          self.trigger('cardPartEnd', stop);
        }
      }); // this.animate({
      //   start: start,
      //   timing(tf) {
      //     return tf;
      //   },
      //   draw(pr) {
      //     c.onDrawCard(pr);
      //   },
      //   duration: dur,
      //   complete(stop) {
      //     self.trigger('cardPartEnd');
      //   },
      //   pause(start) {
      //     c.startDate = start;
      //     return s.comics.paused;
      //   }
      // });
    }
  }, {
    key: "backCar",
    value: function backCar() {
      var self = this,
          s = self.setts,
          carW = self.page.querySelector(".ec-section .ec-car-wrap"),
          car = carW.querySelector('.ec-car'),
          sprite = carW.querySelector('.ec-car__sprite');
      car.removeAttribute('style');
      sprite.removeAttribute('style');
      carW.classList.add('ec-car_back');
      carW.addEventListener("webkitAnimationEnd", function () {
        carW.classList.remove('ec-car_back');
      });
    } // animComics({start, dur}, name) {
    //   let self = this,
    //       s = self.setts,
    //       c = s.comics;
    //
    //   this.animate({
    //     start: start,
    //     timing(tf) {
    //       return tf;
    //     },
    //     draw(pr) {
    //       // c.onDraw(pr);
    //     },
    //     duration: dur,
    //     complete(stop) {
    //       if(name === 'cards') return self.trigger('cardPartEnd', stop);
    //       self.trigger('comicsPartEnd', stop);
    //     }
    //     // pause(start) {
    //     //   c.startDate = start;
    //     //   return s.comics.paused;
    //     // }
    //   });
    // }
    // skipSlide() {
    //   let s = this.setts,
    //       c = s.comics;
    //
    //   if(c.paused) this.toggleComics();
    //
    //   c.skip = c.stop = true;
    // }
    //
    // skipAll() {
    //   let s = this.setts,
    //       c = s.comics;
    //
    //   if(c.paused) this.toggleComics();
    //
    //   c.skipAll = c.stop = true;
    // }
    // toggleComics() {
    //   let s = this.setts,
    //       c = s.comics,
    //       start = c.startDate-(c.pauseDate-performance.now());
    //
    //   c.paused = !c.paused;
    //
    //   if(c.paused) return;
    //
    //   // if(name === 'cards') return this.animCard({
    //   //   start: c.startDate-(c.pauseDate-performance.now()),
    //   //   dur: 2000
    //   // });
    //
    //   // console.log(name);
    //
    //   this.animComics({
    //     start: c.startDate-(c.pauseDate-performance.now()),
    //     dur: s.curDur
    //   });
    //
    // };

  }, {
    key: "closeComics",
    value: function closeComics() {
      var s = this.setts,
          c = s.comics; // this.trigger('comicsEnd', c.name);
      // console.log('COMICS END CLOSE');

      s.animOff = true;
    }
  }, {
    key: "animate",
    value: function animate(_ref) {
      var start = _ref.start,
          timing = _ref.timing,
          draw = _ref.draw,
          duration = _ref.duration,
          complete = _ref.complete,
          pause = _ref.pause;
      var s = this.setts,
          c = s.comics;
      requestAnimationFrame(function animate(time) {
        // tf изменяется от 0 до 1
        var dur = performance.now() - start,
            tf = dur / duration;
        if (tf > 1) tf = 1;
        var progress = timing(tf); // let paused = pause(start);

        draw(progress);
        if (tf >= 1 || c.stop || s.animOff) complete(c.skip); // else if (tf < 1 && !paused) {
        else if (tf < 1) requestAnimationFrame(animate);
      });
    } // extend(out) {
    //   out = out || {};
    //
    //   for (var i = 1; i < arguments.length; i++) {
    //     if (!arguments[i])
    //       continue;
    //
    //     for (var key in arguments[i]) {
    //       if (arguments[i].hasOwnProperty(key))
    //         out[key] = arguments[i][key];
    //     }
    //   }
    //
    //   return out;
    // };

  }, {
    key: "shuffle",
    value: function shuffle(array) {
      var counter = array.length;

      while (counter > 0) {
        var index = Math.floor(Math.random() * counter);
        counter--;
        var temp = array[counter];
        array[counter] = array[index];
        array[index] = temp;
      }

      return array;
    }
  }, {
    key: "getRand",
    // activeRandIcons() {
    //   let s = this.setts,
    //       icons = this.page.querySelectorAll('.ec-footer__icon'),
    //       int = (i) => {
    //         let cur;
    //
    //         for (var j = 0; j < s.els.fIcons.length; j++) {
    //           let item = s.els.fIcons[j];
    //
    //           if(item.classList.contains('ec-footer__icon_active')) item.classList.remove('ec-footer__icon_active');
    //           else if(i === j) {
    //             item.classList.add('ec-footer__icon_active');
    //             cur = item;
    //           }
    //         }
    //
    //         setTimeout(() => {
    //           cur.classList.remove('ec-footer__icon_active');
    //         }, this.getRand(5000, 8000));
    //
    //         setTimeout(() => {
    //           int(this.getRand(0, 2));
    //         }, this.getRand(8000, 15000));
    //       }
    //
    //   int(this.getRand(0, 2));
    // }
    value: function getRand(min, max) {
      var rand = min - 0.5 + Math.random() * (max - min + 1);
      rand = Math.round(rand);
      return rand === -0 ? 0 : rand;
    } // Create Events

  }, {
    key: "on",
    value: function on(eventName, handler) {
      if (!this._eventHandlers) this._eventHandlers = {};

      if (!this._eventHandlers[eventName]) {
        this._eventHandlers[eventName] = [];
      }

      this._eventHandlers[eventName].push(handler);
    }
  }, {
    key: "trigger",
    value: function trigger(eventName) {
      if (!this._eventHandlers || !this._eventHandlers[eventName]) {
        return;
      }

      var handlers = this._eventHandlers[eventName];

      for (var i = 0; i < handlers.length; i++) {
        handlers[i].apply(this, [].slice.call(arguments, 1));
      }
    }
  }]);

  return CaminoClass;
}();
