<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename ($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;


//die;

switch(THIS_PAGE){
        
    case 'index.php':
    $title = "Sara's Home Page";
    $logo = "fa-home";
    Break;

    case 'aia.php':
    $title = "Sara's Final Project AIA (Client work)";
    $logo = "fa-universal-access";
    Break;

    case 'contactme.php':
    $title = "Contact Sara";
    $logo = "fa-paper-plane-o";
    break;
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default  

    case 'index.php':
        $title = "Aymen IT162 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    
    break;    
    
    case 'contactme.php':
        $title = "Aymen IT162 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Aymen';


    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';

}
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Sara";

 
/*
here we're creating a function to generate
links and keep the highlight on the current page

    <li><a href="index.php"class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Aymen</a></li>

*/

function makeLinks ($nav1)
{
    $my Return ='';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
           $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
           $myReturn .= "<li><a href=\"$url\">$text</a></li>";
      }
    }
    
    return $myReturn;
}

?>
