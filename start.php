<?php
/**
* Elgg Friends hack icon plugin
* Remove Friends icon from topbar
*
* @package ElggFriends
* @author Alex Falk, RiverVanRain
* @url http://weborganizm.org/crewz/p/1983/personal-net
*/


elgg_register_event_handler('pagesetup', 'system', 'friends_hack_pagesetup_handler');

function friends_hack_pagesetup_handler() {
elgg_unregister_menu_item('topbar', 'friends');
}