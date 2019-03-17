'use strict';

var util = require('util');

module.exports = {
  src: './assets/icons/*.{png,gif,jpg}',
  destImage: './public/img/icons.png',
  destCSS: 'public/css/icons.css',
  imgPath: '../img/icons.png',
  padding: 0,
  algorithm: 'top-down',
  algorithmOpts: { sort: false },
  engine: 'pixelsmith',
  cssOpts: {
    cssClass: function (item) {
      return util.format('.icon-%s', item.name);
    }
  }
};
