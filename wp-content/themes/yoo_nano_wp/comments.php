<?php
/**
* @package   Nano
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get warp
$warp = Warp::getInstance();

// load template file, located in /warp/systems/wordpress/layouts/comments.php
echo $warp['template']->render('comments');