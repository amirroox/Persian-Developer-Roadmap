//Add Attribute target and rel
let links_ref = document.querySelectorAll('.links-reference a');
for (let i = 0; i < links_ref.length; i++) {
    links_ref[i].setAttribute('target', '_blank');
    links_ref[i].setAttribute('rel', 'noopener noreferrer nofollow');
}
