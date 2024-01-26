/* Script For Prim code Highlighter - Languages Code   */
let body_pre_code = document.body ;
body_pre_code.setAttribute('data-prismjs-copy', 'کپی');
body_pre_code.setAttribute('data-prismjs-copy-success', 'کپیم کردی!');
body_pre_code.setAttribute('data-prismjs-copy-error', 'یچیزی شد کپی نشد');

let my_pre_code = document.querySelectorAll('pre');
for (let i = 0; i < my_pre_code.length; i++) {
    if (my_pre_code[i].className === '')
        my_pre_code[i].setAttribute('class', 'line-numbers');
}

let my_code = document.querySelectorAll('code');
for (let i = 0; i < my_code.length; i++) {
    if (my_code[i].className === '') {
        my_code[i].setAttribute('class', 'language-js');
    }
}