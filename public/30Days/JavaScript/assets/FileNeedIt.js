/* Script For Prim code Highlighter - Languages Code   */
let code_prism = document.querySelectorAll('code');
for (let i = 0; i < code_prism.length; i++) {
    if (code_prism[i].className === '') {
        code_prism[i].setAttribute('class', 'language-js');
    }
}