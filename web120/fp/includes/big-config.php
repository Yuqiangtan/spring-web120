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
        $title = "Yuqiang's WEB120 Big Website";
        $logo = "fa-home";
    break;
        
    case 'big1.php':
        $title = "Yuqiang's WEB120 Big Research Website";
    break;

    case 'calendar.php':
        $title = "Yuqiang's WEB120 Big Website Calendar";
    break;
        
    case 'web.php':
        $title = "Yuqiang's WEB120 Big Website Web Accessibility";
    break;
        
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

//$nav1['index.php'] = "Welcome";
//$nav1['big1.php'] = "Big";
//$nav1['web.php'] = "Web Accessibility";
//$nav1['calendar.php'] = "Calendar";
//$nav1['contactme.php'] = "Contact Yuqiang";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/

/*function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($text == Big)
        {
            $myReturn .= '
                <div id="cssmenu">
                    <ul>
                        <li class="active"><a href="#">' . $text . '</a>
                            <ul>
                                <li><a href="big1.php"><i class="fa fa-fw fa-globe"></i> Responsive vs Mobile</a></li>
                                <li><a href="big2.php"><i class="fa fa-fw fa-globe"></i> Galleries</a></li>
                                <li><a href="big3.php"><i class="fa fa-fw fa-globe"></i> Flexbox</a></li>
                                <li><a href="big4.php"><i class="fa fa-fw fa-globe"></i> Monetizing websites</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            ' . PHP_EOL;
        }
        else if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>
*/