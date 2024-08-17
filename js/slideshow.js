'use strict';

// -----------スライドショー-----------
let i = 1; //スライド画像の番号
let interval; //setInterval格納
let slideClass; //#slideshowのクラス格納
let slideList = document.querySelectorAll('.slidelist'); //インジケーターのリスト
let prevButton = document.getElementById('prev'); //prevボタン
let nextButton = document.getElementById('next'); //nextボタン

// スライドショー開始
startSlide();

// prevボタンによる画像変更
prevButton.onclick = function() {
    imagePrev();
    restartSlide();
}

// nextボタンによる画像変更
nextButton.onclick = function() {
    imageSlide();
    restartSlide();
}

// インジケーターによる画像変更
slideList.forEach(function(item,index){
    item.onclick = function() {
        i = item.value - 1;
        imageSlide();
        restartSlide();
    }
});

// スライドショー開始
function startSlide() {
    interval = setInterval(imageSlide,3000);
}

// スライドショーリセット
function restartSlide() {
    clearInterval(interval);
    startSlide();
}

// 画像スライド
function imageSlide() {
    // #slideshowのクラス全削除
    slideClass = document.getElementById('slideshow');
    slideClass.classList.remove(...slideClass.classList);
    // インジケーターのフォーカス削除
    for(let j = 1; j <= 3; j++) {
        document.querySelector(`.slide${j}`).classList.remove('listfocus');
    }
    // iの値に応じてクラス付与
    if(i < 3) {
        i++;
        document.getElementById('slideshow').classList.add(`slideimage${i}`);
    } else if(i === 3){
        i = 1;
        document.getElementById('slideshow').classList.add(`slideimage${i}`);
    }
    // インジケーターのフォーカス付与
    document.querySelector(`.slide${i}`).classList.add('listfocus');
}

// 画像スライド（prevボタン用）
function imagePrev() {
    // #slideshowのクラス全削除
    slideClass = document.getElementById('slideshow');
    slideClass.classList.remove(...slideClass.classList);
    // インジケーターのフォーカス削除
    for(let j = 1; j <= 3; j++) {
        document.querySelector(`.slide${j}`).classList.remove('listfocus');
    }
    // iの値に応じてクラス付与
    if(i > 1) {
        i--;
        document.getElementById('slideshow').classList.add(`slideimage${i}`);
    } else if(i === 1){
        i = 3;
        document.getElementById('slideshow').classList.add(`slideimage${i}`);
    }
    // インジケーターのフォーカス付与
    document.querySelector(`.slide${i}`).classList.add('listfocus');
}