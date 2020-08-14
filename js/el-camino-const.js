class CaminoClass {
  constructor() {
    this.page = document.querySelector('.ec-page');
    this.setts = {
      changed: false,
      carDur: 1500,
      comics: {
        dur: 2000,
        durEnd: 3000,
        roundMax: 170,
        // paused: false,
        // skip: false
      },
      car: {
        dur: 1500,
        outDur: 2000,
        sprites: {
          left: {
            steps: 20,
            scale: .75,
            coord: [
            // X  Y
               0, 1,
               1, 1,
               2, 1,
               3, 1,
               4, 1,
               5, 1,
               6, 1,
               7, 1,
               8, 1,
               9, 1,
               0, 2,
               1, 2,
               2, 2
            ]
          },
          mid: {
            steps: 1,
            scale: .78,
            coord: [
            // X  Y
               0, 0
            ]
          },
          right: {
            steps: 30,
            scale: .75,
            coord: [
            // X  Y
               0, 3,
               1, 3,
               2, 3,
               3, 3,
               4, 3,
               5, 3,
               6, 3,
               7, 3,
               8, 3,
               9, 3,
               0, 4,
               1, 4,
               2, 4
            ]
          }
        }
      },
      easings: {
        linear: function(pos) {
          return pos;
        },
        easeInQuad: function(pos) {
          return Math.pow(pos, 2);
        }
      }
    }

    // this.activeRandIcons();


    this.on('comicsPartEnd', (skip) => {
      let s = this.setts,
          c = s.comics,
          l = c.slides.length-1;

      // c.slides[c.curStep].classList.add('ec-comics__slide_end');

      // if(c.curStep >= l) return this.endComics();
      if(c.curStep >= l) return this.trigger('slidesOff');

      // if(skip) c.skip = c.stop = false;
      c.curStep += 1;
      this.startComics();
    });
  }

  // nextSection(cur, next) {
  //   let s = this.setts;
  //
  //   // this.page.querySelector(`.ec-section_${next}`).classList.add('ec-section_active');
  //   // this.page.querySelector(`.ec-section_${cur}`).classList.remove('ec-section_active');
  //
  //   setTimeout(() => {
  //     this.trigger('sectionChanged', cur);
  //   }, 100);
  // }

  showComics(name) {
    let s = this.setts,
        c = s.comics,
        comics = c.wrap = this.page.querySelector(`.ec-comics`),
        slides = c.slides = comics.querySelectorAll('.ec-comics__slide--anim'),
        l = slides.length-1;

    c.curStep = 0;

    // c.fn = fn;

    s.animOff = false;

    if(slides.length) this.startComics();

    this.endComics();

  }

  carRideTo(name, dir) {
    let self = this,
        s = self.setts,
        cs = s.car,
        dirObj = cs.sprites[dir],
        l = dirObj.coord.length/2,
        sc = dirObj.scale,
        carW = self.page.querySelector(`.ec-section .ec-car-wrap`),
        car = carW.querySelector('.ec-car'),
        sprite = carW.querySelector('.ec-car__sprite'),
        path = carW.querySelector(`.ec-road-dir-${dir}`),
        pathL = Math.floor( path.getTotalLength() ),
        wh = {
          w: car.offsetWidth,
          h: car.offsetHeight
        }, b = false;

    s.animOff = false;

    self.animate({
      start: performance.now(),
      timing(tf) {
        return s.easings.linear(tf);
        // return s.easings.linear(tf);
      },
      draw(pr) {
        // if (b) return;
        let step = Math.floor(dirObj.steps*pr),
            coord = (function(prcnt) {
              prcnt = (prcnt*pathL);
              let pt = path.getPointAtLength(prcnt);
              return {
                x: Math.round(pt.x),
                y: Math.round(pt.y)
              }
            })(pr),
            w = wh.w-wh.w*(pr*sc),
            h = wh.h-wh.h*(pr*sc);

        w = w <= 0 ? 0 : w;
        h = h <= 0 ? 0 : h;
        step = step < l ? step : l-1;

        car.setAttribute('style',
          `left: ${coord.x/588*100}%;
          top: ${coord.y/169*100}%;
          width: ${w}px;
          height: ${h}px;`);
        sprite.setAttribute('style',
          `left: -${dirObj.coord[step*2]*100+'%'};
          top: -${dirObj.coord[step*2+1]*100+'%'}`)
          b = true;
      },
      duration: s.car.outDur,
      complete(stop) {
        self.trigger('carLeft', name);
      },
      pause(start) {
      }
    });
  }

  // testShow([id, sc]) {
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

  endComics() {
    let self = this,
        s = self.setts,
        c = s.comics,
        comics = c.wrap,
        round = comics.querySelector('.ec-comics__round-path');

    // c.skipAll = c.stop = false;
    // c.stop = false;
    s.curDur = c.durEnd;

    // this.trigger('slidesOff');

    this.animate({
      start: performance.now(),
      timing(tf) {
        return tf;
      },
      draw(pr) {
        round.setAttribute('stroke-dasharray', c.roundMax-c.roundMax*pr+' 9999');
      },
      duration: 60000,
      complete(stop) {

        // if(c.closed) return;
        s.animOff = true;
        self.trigger('comicsEnd');
        // console.log('COMICS END');
      }
      // pause(start) {
      //   c.startDate = start;
      //   return s.comics.paused;
      // }
    });
  }

  startComics() {
    let self = this,
        s = this.setts,
        c = s.comics,
        slides = c.slides,
        b = slides[c.curStep].getAttribute('data-dur');

    s.curDur = b ? b : c.dur;

    slides[c.curStep].classList.add('ec-comics__slide--show');

    this.animate({
      start: performance.now(),
      timing(tf) {
        return tf;
      },
      draw(pr) {
      },
      duration: s.curDur,
      complete(stop) {
        self.trigger('comicsPartEnd', stop);
      }
    });

    // if(!c.skipAll) this.trigger('slideOff', c.curStep);
    this.trigger('slideStart', c.curStep);
  }

  animCard(dur) {
    let self = this,
        s = self.setts,
        c = s.comics,
        card = c.card = document.querySelector(`.ec-comics--cards`),
        round = card.querySelector('.ec-comics__round-path');

    s.curDur = dur;

    this.animate({
      start: performance.now(),
      timing(tf) {
        return tf;
      },
      draw(pr) {
        round.setAttribute('stroke-dasharray', c.roundMax-c.roundMax*pr+' 9999');
      },
      duration: s.curDur,
      complete(stop) {
        self.trigger('cardPartEnd', stop);
      }
    });

    // this.animate({
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

  backCar() {
    let self = this,
        s = self.setts,
        carW = self.page.querySelector(`.ec-section .ec-car-wrap`),
        car = carW.querySelector('.ec-car'),
        sprite = carW.querySelector('.ec-car__sprite');

    car.removeAttribute('style');
    sprite.removeAttribute('style');
    carW.classList.add('ec-car--back');

    carW.addEventListener("webkitAnimationEnd", () => {
      carW.classList.remove('ec-car--back');
    });
  }

  // animComics({start, dur}, name) {
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

  closeComics() {
    let s = this.setts,
        c = s.comics;

    // this.trigger('comicsEnd', c.name);
    // console.log('COMICS END CLOSE');
    s.animOff = true;
  }

  animate({start, timing, draw, duration, complete, pause}) {
    let s = this.setts,
        c = s.comics;

    requestAnimationFrame(function animate(time) {
      // tf изменяется от 0 до 1
      let dur = performance.now()-start,
          tf = dur/duration;

      if(tf > 1) tf = 1;

      let progress = timing(tf);

      // let paused = pause(start);

      draw(progress);

      if (tf >= 1 || c.stop || s.animOff) complete(c.skip)
      // else if (tf < 1 && !paused) {
      else if (tf < 1) requestAnimationFrame(animate);

    });
  }

  // extend(out) {
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

  shuffle(array) {
    var counter = array.length;

    while (counter > 0) {
      var index = Math.floor(Math.random() * counter);
      counter--;

      var temp = array[counter];
      array[counter] = array[index];
      array[index] = temp;
    }

    return array;
  };

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

  getRand(min, max) {
    var rand = min - 0.5 + Math.random() * (max - min + 1);
    rand = Math.round(rand);
    return rand === -0 ? 0 : rand;
  }

  // Create Events
  on(eventName, handler) {
    if (!this._eventHandlers) this._eventHandlers = {};
    if (!this._eventHandlers[eventName]) {
      this._eventHandlers[eventName] = [];
    }
    this._eventHandlers[eventName].push(handler);
  }
  trigger(eventName) {
    if (!this._eventHandlers || !this._eventHandlers[eventName]) {
      return;
    }

    var handlers = this._eventHandlers[eventName];
    for (var i = 0; i < handlers.length; i++) {
      handlers[i].apply(this, [].slice.call(arguments, 1));
    }
  };
}
