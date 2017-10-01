function countCSSRules() {
    var results = '',
        log = '';
    if (!document.styleSheets) {
        return;
    }
    for (var i = 0; i < document.styleSheets.length; i++) {
        countSheet(document.styleSheets[i]);
    }
    function countSheet(sheet) {
        var count = 0;
        if (sheet && sheet.cssRules) {
            for (var j = 0, l = sheet.cssRules.length; j < l; j++) {
                if( !sheet.cssRules[j].selectorText ) continue;
                count += sheet.cssRules[j].selectorText.split(',').length;
            }

            log += '\n <div class="herc-metric herc-metric__card">File: ' + (sheet.href ? sheet.href : 'inline <style> tag') + '</br>';
            log += '\nRules: ' + sheet.cssRules.length + '</br>';
            log += '\nSelectors: ' + count + '</br>';
            log += '\n </div>';
            if (count >= 4096) {
                results += '\n********************************\nWARNING:\n There are ' + count + ' CSS rules in the stylesheet ' + sheet.href + ' - IE will ignore the last ' + (count - 4096) + ' rules!\n';
            }
        }
    }
    console.log(log);
    console.log(results);
    document.getElementById('cssMetrics').innerHTML = log;
};
countCSSRules();