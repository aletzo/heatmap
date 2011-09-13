$('#heatmap-wrapper').css({
    height: window.innerHeight, 
    width: window.innerWidth
});


$('#heatmap-wrapper').click(function(e) {
    if (e.target.nodeName == 'SPAN') {
        console.log(e.target.className);
        
        _class = e.target.className;
        
        _classArray = _class.split(' ');

        _clickArray = _classArray[1].split('_');
        
        _temperature = _clickArray[1];
        
        _temperature *= 1;
        
        if (_temperature < 10) {
            _temperature_plus_one = _temperature + 1;
            
            $(e.target).removeClass('heatmap-click_' + _temperature).addClass('heatmap-click_' + _temperature_plus_one);
        }
    } else {
        $('<span/>', {
            'class': 'heatmap-click heatmap-click_2'
        }).css({
            left: e.pageX - 5,
            top: e.pageY - 5
        }).appendTo('#heatmap-wrapper');
    }

});