//QUESTION 3. Assume we have a SPAN element with some texts in it. Create a clipboard copy feature for that SPAN without using any library.
const copyToClipboard = function () {
    var r = document.createRange();
    
    r.selectNode(document.getElementById('clipboardSpan'));
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(r);
    document.execCommand('copy');
    window.getSelection().removeAllRanges();
    
    console.log('Clipboard copied...');
}