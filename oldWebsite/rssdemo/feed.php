<?
/* The folder where this file is located. Change to whatever you need */
$mydir = "/rssdemo";

/* Include magpierss and Smarty library */
require_once("http://www.beijinginn.co.uk/".$mydir."/Smarty/libs/Smarty.class.php");
require_once("http://www.beijinginn.co.uk/".$mydir."/magpierss/rss_fetch.inc");

/* Create a template object for further use */
$tpl = new Smarty();

/* Set folders for Smarty object. This folders have to exist on your web server (Check A.3) */
$tpl->template_dir = "http://www.beijinginn.co.uk/".$mydir.'/templates/';
$tpl->compile_dir = "http://www.beijinginn.co.uk/".$mydir.'/templates_c/';
$tpl->config_dir = "http://www.beijinginn.co.uk/".$mydir.'/configs/';
$tpl->cache_dir = "http://www.beijinginn.co.uk/".$mydir.'/cache/';

/* The URL of the feed we want to include */
$url = "http://rss.news.yahoo.com/rss/world";

/* magpierss does all the work! */
$rss = fetch_rss($url);

/* Uncomment the following line to see the object and array data returned. Good to see which other information has been processed by magpierss */
// echo "<pre>"; print_r($rss); echo "</pre>";

/* If the RSS could be parsed, add it to the template */
if ($rss) {
/* Sends the feed title to the template engine */
$tpl->assign("feedtitle",$rss->channel["title"]);
/* Sends the RSS items as an array */
$tpl->assign("items",$rss->items);
}
else {
/* RSS problem? */
$tpl->assign("feedtitle","Problem with: $url");
}

/* Fill the template file itemlist.html with the information and return it */
$feedhtml = $tpl->fetch("http://www.beijinginn.co.uk/".$mydir."/templates/itemlist.html");
/* Do with $feedhtml whatever you want */
echo $feedhtml;
?>
