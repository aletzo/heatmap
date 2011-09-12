document.onclick= function(e) {
    _old_ie = false;
    // Compensate for IE<9's non-standard event model
    //
    if (e===undefined) {
        e= window.event;
        _old_ie = true;
    }
    var target = 'target' in e ? e.target : e.srcElement;

//target.tagName
//e.layerX - e.target.offsetLeft and for Oprea just used e.offsetX 
    
    _request_url = 'http://heatmap.ajo/click?';
    _request_url += 'x=' + e.pageX + '&y=' + e.pageY;
    _request_url += '&h=' + screen.height + '&w=' + screen.width;
    _request_url += '&ah=' + window.screen.availHeight + '&aw=' + window.screen.availWidth;
    _request_url += '&ih=' + window.innerHeight + '&iw=' + window.innerWidth;

    _request = _old_ie ? new ActiveXObject('Microsoft.XMLHTTP') : new XMLHttpRequest();
    _request.open("GET", _request_url, true);
    _request.send(null);
};


