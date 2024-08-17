'use strict';

// -----------ハンバーガーメニュー-----------
document.getElementById('hamburgericon').onclick = function() {
    // ハンバーガーメニューの展開
    document.querySelector('#spnav ul').classList.toggle("is-active");
    // アイコン変形
    document.querySelector('#hamburgericon span').classList.toggle("is-active");
}