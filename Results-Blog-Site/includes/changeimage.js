setInterval(function() {
    var e = $.Event("click");
    $('.one, .two, .three, .four, .five, .six, .seven, .eight, .nine').trigger(e);
    $('div').html($('body').css('background'));
}, 800);

$('.one, .two, .three, .four, .five').click(function() {
    this.className = {
        three : 'four',
        four  : 'five',
        five  : 'one',
        one   : 'two',
        two   : 'three'
    }[this.className];
});