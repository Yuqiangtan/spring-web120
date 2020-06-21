<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();
//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Yuqiang's WEB120 Portal Page";
        $logo = "fa-home";
    break;
    /*
    case 'aia.php':
        $title = "Yuqiang's AIA page";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Audience Issues and Approach'
    break;

    case 'flowchart.php':
        $title = "Yuqiang's Flowchart Page";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Flowchart'
    break;
    */
    case 'contactme.php':
        $title = "Yuqiang's WEB120 Contact Page";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Contact Yuqiang';
    break;


    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default 
}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['https://docs.google.com/document/d/1KOxZpBjf0DOHr9EuwST7rqlVzRRCAxEOZA5wlQa_830/edit?usp=sharing'] = "Flowchart";
$nav1['fp/template.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Yuqiang";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>
