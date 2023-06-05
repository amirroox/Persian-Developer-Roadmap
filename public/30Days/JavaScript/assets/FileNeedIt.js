let my_pre_code = document.querySelectorAll('pre');
let my_code = document.querySelectorAll('body');
for (let i = 0; i < my_pre_code.length; i++) {
    if (my_pre_code[i].className === '')
        my_pre_code[i].setAttribute('class' , 'line-numbers');
}
for (let i = 0; i < my_code.length; i++) {
    if (my_code[i].className === '') {
        my_code[i].setAttribute('class' , 'language-js');
        my_code[i].setAttribute('data-prismjs-copy' , 'کپی');
        my_code[i].setAttribute('data-prismjs-copy-success' , 'کپیم کردی!');
        my_code[i].setAttribute('data-prismjs-copy-error' , 'یچیزی شد کپی نشد');
    }
}