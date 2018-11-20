<script>
function addCSS(link) {
var giftofspeed = document.createElement('link');
giftofspeed.rel = 'stylesheet';
giftofspeed.href = link;
giftofspeed.type = 'text/css';
var godefer = document.getElementsByTagName('link')[0];
// console.log(giftofspeed);
godefer.parentNode.insertBefore(giftofspeed, godefer);
}

addCSS('styles/home.css');
addCSS('styles/teams.css');
addCSS('styles/details.css');
addCSS('styles/calendar.css');
</script>