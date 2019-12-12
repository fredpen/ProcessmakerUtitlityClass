
var currentTabId = 'home';


function switchTab(tabid)
{
    $("#" + tabid).removeClass('dontshow');//fade in the selected tab
    $("#" + currentTabId).addClass('dontshow');//fade out the current tab
    return currentTabId = tabid; // update the currentabID
}

const mix = require('laravel-mix');

mix.sass('src/app.sass', 'dist')
   .js('src/app.js', 'dist');