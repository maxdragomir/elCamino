"use strict";

function _instanceof(left, right) { if (right != null && typeof Symbol !== "undefined" && right[Symbol.hasInstance]) { return !!right[Symbol.hasInstance](left); } else { return left instanceof right; } }

function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { if (typeof Symbol === "undefined" || !(Symbol.iterator in Object(arr))) return; var _arr = []; var _n = true; var _d = false; var _e = undefined; try { for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

function _classCallCheck(instance, Constructor) { if (!_instanceof(instance, Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var CaminoClass = /*#__PURE__*/function () {
  function CaminoClass() {
    _classCallCheck(this, CaminoClass);

    this.page = document.querySelector('.ec-page');
    this.setts = {
      changed: false,
      carDur: 1500,
      els: {
        fIcons: this.page.querySelectorAll('.ec-footer__icon')
      },
      comics: {
        dur: 2000,
        durFast: 1500,
        durEnd: 3000,
        roundMax: 170,
        paused: false
      },
      car: {
        dur: 1500,
        outDur: 4000,
        sprites: {
          left: {
            steps: 27,
            scale: 1.7,
            coord: [// X  Y
            0, 1, 1, 1, 2, 1, 3, 1, 4, 1, 5, 1, 6, 1, 7, 1, 8, 1, 0, 2, 1, 2, 2, 2, 3, 2, 4, 2, 5, 2, 6, 2, 7, 2, 8, 2, 0, 3, 1, 3, 2, 3, 3, 3, 4, 3, 5, 3, 6, 3, 7, 3, 8, 3]
          },
          mid: {
            steps: 20,
            scale: .9,
            coord: [// X  Y
            0, 0]
          },
          right: {
            steps: 40,
            scale: 1.7,
            coord: [// X  Y
            0, 4, 1, 4, 2, 4, 3, 4, 4, 4, 5, 4, 6, 4, 7, 4, 8, 4, 0, 5, 1, 5, 2, 5, 3, 5, 4, 5, 5, 5, 6, 5, 7, 5, 8, 5, 0, 6, 1, 6, 2, 6, 3, 6, 4, 6, 5, 6, 6, 6, 7, 6, 8, 6]
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
    };
    this.activeRandIcons();
  }

  _createClass(CaminoClass, [{
    key: "nextSection",
    value: function nextSection(cur, next) {
      var _this = this;

      var s = this.setts;
      this.page.querySelector(".ec-section_".concat(next)).classList.add('ec-section_active');
      this.page.querySelector(".ec-section_".concat(cur)).classList.remove('ec-section_active');
      s.changed = true;
      setTimeout(function () {
        _this.trigger('sectionChanged', cur);
      }, 100);
    }
  }, {
    key: "moveCar",
    value: function moveCar(cur, fn) {
      var _this2 = this;

      var s = this.setts;
      this.page.querySelector(".ec-section_".concat(cur)).classList.add('ec-section_move');
      if (!s.changed) setTimeout(function () {
        _this2.trigger('moveEnd', cur);
      }, s.car.dur);else s.changed = false;
    }
  }, {
    key: "showComics",
    value: function showComics(name) {
      var _this3 = this;

      var s = this.setts,
          c = s.comics,
          comics = c[name] = this.page.querySelector(".ec-comics"),
          slides = comics.querySelectorAll('.ec-comics__slide'),
          round = comics.querySelector('.ec-comics__round-path'),
          l = slides.length - 1;
      c.curStep = 0;
      this.startComics(comics);

      c.onDraw = function (pr) {
        round.setAttribute('stroke-dasharray', c.roundMax - c.roundMax * pr + ' 9999');
        if (s.comics.paused) c.pauseDate = performance.now();
      };

      this.on('comicsPartEnd', function (skip) {
        // if(c.slidesOff) return this.trigger('comicsEnd', comics);
        slides[c.curStep].classList.add('ec-comics__slide_end');
        if (c.curStep >= l) return _this3.endComics(name);
        if (skip) c.skip = c.stop = false;
        c.curStep += 1;

        _this3.startComics(comics);
      });
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
          carW = self.page.querySelector(".ec-section_".concat(name, " .ec-car-wrap")),
          car = carW.querySelector('.ec-car'),
          sprite = carW.querySelector('.ec-car__sprite'),
          path = carW.querySelector(".ec-road_dir_".concat(dir)),
          pathL = Math.floor(path.getTotalLength()),
          wh = {
        w: car.offsetWidth,
        h: car.offsetHeight
      },
          b = false;
      self.animate({
        start: performance.now(),
        timing: function timing(tf) {
          return s.easings.easeInQuad(tf); // return s.easings.linear(tf);
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
          car.setAttribute('style', "left: ".concat(coord.x, "px;\n          top: ").concat(coord.y, "px;\n          width: ").concat(w, "px;\n          height: ").concat(h, "px;"));
          sprite.setAttribute('style', "left: -".concat(dirObj.coord[step * 2] * 100 + '%', ";\n          top: -").concat(dirObj.coord[step * 2 + 1] * 100 + '%'));
          b = true;
        },
        duration: s.car.outDur,
        complete: function complete(stop) {
          self.trigger('carLeft');
        },
        pause: function pause(start) {}
      });
    }
  }, {
    key: "testShow",
    value: function testShow(_ref) {
      var _ref2 = _slicedToArray(_ref, 2),
          id = _ref2[0],
          sc = _ref2[1];

      var s = this.setts,
          c = s.comics,
          comics = this.page.querySelectorAll('.ec-comics')[id - 1],
          screens = comics.querySelectorAll('.ec-comics__slide');

      for (var i = 0; i < screens.length; i++) {
        screens[i].classList.remove('ec-comics__slide_show');
      }

      comics.classList.add('ec-comics_active');
      screens[sc - 1].classList.add('ec-comics__slide_show');
    }
  }, {
    key: "endComics",
    value: function endComics(name) {
      var self = this,
          s = self.setts,
          c = s.comics,
          comics = c[name],
          round = comics.querySelector('.ec-comics__round-path');
      c.skipAll = c.stop = false;
      c.curDur = c.durEnd;
      c.slidesOff = true;
      this.trigger('slidesOff');
      this.animate({
        start: performance.now(),
        timing: function timing(tf) {
          return tf;
        },
        draw: function draw(pr) {
          c.onDraw(pr);
        },
        duration: c.curDur,
        complete: function complete(stop) {
          c.slidesOff = false;
          self.trigger('comicsEnd', comics);
        },
        pause: function pause(start) {
          c.startDate = start;
          return s.comics.paused;
        }
      });
    }
  }, {
    key: "startComics",
    value: function startComics(comics) {
      var s = this.setts,
          c = s.comics,
          slides = comics.querySelectorAll('.ec-comics__slide'),
          b = slides[c.curStep].classList.contains('ec-comics__slide_speed_fast');
      c.curDur = b ? c.durFast : c.dur;
      slides[c.curStep].classList.add('ec-comics__slide_show');
      this.animComics({
        start: performance.now(),
        dur: c.curDur
      });
    }
  }, {
    key: "animComics",
    value: function animComics(_ref3) {
      var start = _ref3.start,
          dur = _ref3.dur;
      var self = this,
          s = self.setts,
          c = s.comics;
      this.animate({
        start: start,
        timing: function timing(tf) {
          return tf;
        },
        draw: function draw(pr) {
          c.onDraw(pr);
        },
        duration: dur,
        complete: function complete(stop) {
          self.trigger('comicsPartEnd', stop);
        },
        pause: function pause(start) {
          c.startDate = start;
          return s.comics.paused;
        }
      });
    }
  }, {
    key: "skipSlide",
    value: function skipSlide() {
      var s = this.setts,
          c = s.comics;
      if (c.paused) this.toggleComics();
      c.skip = c.stop = true;
    }
  }, {
    key: "skipAll",
    value: function skipAll() {
      var s = this.setts,
          c = s.comics;
      if (c.paused) this.toggleComics();
      c.skipAll = c.stop = true;
    }
  }, {
    key: "toggleComics",
    value: function toggleComics() {
      var s = this.setts,
          c = s.comics;
      c.paused = !c.paused;
      if (c.paused) return;
      this.animComics({
        start: c.startDate - (c.pauseDate - performance.now()),
        dur: c.curDur
      });
    }
  }, {
    key: "closeComics",
    value: function closeComics(name) {
      var s = this.setts,
          c = s.comics,
          comics = c[name];
      this.trigger('comicsEnd', comics);
    }
  }, {
    key: "animate",
    value: function animate(_ref4) {
      var start = _ref4.start,
          timing = _ref4.timing,
          draw = _ref4.draw,
          duration = _ref4.duration,
          complete = _ref4.complete,
          pause = _ref4.pause;
      var s = this.setts,
          c = s.comics;
      requestAnimationFrame(function animate(time) {
        // tf изменяется от 0 до 1
        var dur = performance.now() - start,
            tf = dur / duration;
        if (tf > 1) tf = 1;
        var progress = timing(tf);
        var paused = pause(start);
        draw(progress);
        if (tf >= 1 || c.stop) complete(c.skip);else if (tf < 1 && !paused) {
          requestAnimationFrame(animate);
        }
        ;
      });
    }
  }, {
    key: "extend",
    value: function extend(out) {
      out = out || {};

      for (var i = 1; i < arguments.length; i++) {
        if (!arguments[i]) continue;

        for (var key in arguments[i]) {
          if (arguments[i].hasOwnProperty(key)) out[key] = arguments[i][key];
        }
      }

      return out;
    }
  }, {
    key: "activeRandIcons",
    value: function activeRandIcons() {
      var _this4 = this;

      var s = this.setts,
          int = function int(i) {
        var cur;

        for (var j = 0; j < s.els.fIcons.length; j++) {
          var item = s.els.fIcons[j];
          if (item.classList.contains('ec-footer__icon_active')) item.classList.remove('ec-footer__icon_active');else if (i === j) {
            item.classList.add('ec-footer__icon_active');
            cur = item;
          }
        }

        setTimeout(function () {
          cur.classList.remove('ec-footer__icon_active');
        }, _this4.getRand(5000, 8000));
        setTimeout(function () {
          int(_this4.getRand(0, 2));
        }, _this4.getRand(8000, 15000));
      };

      int(this.getRand(0, 2));
    }
  }, {
    key: "getRand",
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
