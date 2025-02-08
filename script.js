const images = ['./images/pics/1.heic','./images/pics/1.heic',
'./images/pics/2.webp',
'./images/pics/3.heic',
'./images/pics/4.heic',
'./images/pics/5.webp',
'./images/pics/6.heic',
'./images/pics/7.heic',
'./images/pics/8.heic',
'./images/pics/9.heic',
'./images/pics/10.heic',
'./images/pics/11.heic',
'./images/pics/12.webp',
'./images/pics/13.heic',
'./images/pics/14.heic',
'./images/pics/15.webp',
'./images/pics/16.webp',
'./images/pics/17.heic'];

// replace your img.jpg and other for your images

        const texts = [[""], [""], [""]];

// if you want to remove or replace text

        rgbKineticSlider = new rgbKineticSlider({
            slideImages: images,
            itemsTitles: texts,

            backgroundDisplacementSprite:
                "http://hmongouachon.com/_demos/rgbKineticSlider/map-9.jpg",
            cursorDisplacementSprite:
                "http://hmongouachon.com/_demos/rgbKineticSlider/displace-circle.png",
            cursorScaleIntensity: 0.6,
            cursorMomentum: 0.14,

            swipe: true,
            swipeDistance: window.innerWidth * 0.4,
            swipeScaleIntensity: 2,

            slideTransitionDuration: 0.8,
            transitionScaleIntensity: 30,
            transitionScaleAmplitude: 160,

            nav: true,
            navElement: ".main-nav",

            imagesRgbEffect: false,
            imagesRgbIntensity: 4,
            navImagesRgbIntensity: 120,

            textsDisplay: true,
            textTitleSize: 144,
            textsTiltEffect: true,
            googleFonts: ["Playfair Display:400"],
            textsRgbEffect: true,
            textsRgbIntensity: 1,
        });




