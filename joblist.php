<?php
/**
* Original Authors: Gina, Invidia
* Update Author: sparrow-cell
* Date: 9/10/2021
* Purpose: generic census
* Comments: 
* Please make the changes told in the comments to make it work !
*/

// Please insert the access to your Database you also used during the install !
define('DBUSER', 'DATABASEUSER');
define('DBPASS', 'DATABASEPASSWORD');
define('DBSERVER', 'DATABASESERVER');
define('DBNAME', 'DATABASENAME');

$conn = new mysqli(DBSERVER, DBUSER, DBPASS, DBNAME);

if (!$conn) {
die('error connecting to database');
}


//automated joblist by Gina

define("IN_MYBB", 1);
define('THIS_SCRIPT', 'joblist.php');
$templatelist = "joblist,joblist_entry";
require "./global.php";
require "./inc/config.php";

add_breadcrumb("Job List", "joblist.php");

// Replace the fid[locationID] with the fid and the ID of the Location profile field and the fid[jobID] with the fid and ID of the Job profile field ! For example - fid1
$joblist = $db->query("
SELECT *
FROM ".TABLE_PREFIX."users 
LEFT JOIN ".TABLE_PREFIX."userfields 
ON ".TABLE_PREFIX."users.uid = ".TABLE_PREFIX."userfields.ufid 
WHERE ".fid[locationID]." = 'First Location'
AND ".TABLE_PREFIX."users.usergroup NOT IN (#,#,#,#) 
ORDER BY username ASC
");
// WHERE ".TABLE_PREFIX."users.usergroup NOT IN (#,#,#,#)
// ^ # = group id for usergroups you want to show on this listing, if only one group just put a number with no commas
// ORDER BY fid# ASC
// ^ if you don't want to order by username, # = field id for face claim profile field


while($result=$db->fetch_array($joblist)) {
$userid = $result['uid'];
$username = $result['username'];
// Replace the fid[jobID] with the fid and the ID of the Job profile field ! For example - fid[jobID]
$occupation = $result['fid[jobID]'];
eval("\$loc1 .= \"".$templates->get("joblist_entry")."\";");
}


// Replace the fid[locationID] with the fid and the ID of the Location profile field and the fid[jobID] with the fid and ID of the Job profile field ! For example - fid1
$joblist = $db->query("
SELECT *
FROM ".TABLE_PREFIX."users 
LEFT JOIN ".TABLE_PREFIX."userfields 
ON ".TABLE_PREFIX."users.uid = ".TABLE_PREFIX."userfields.ufid 
WHERE ".fid[locationID]." = 'Second Location'
AND ".TABLE_PREFIX."users.usergroup NOT IN (#,#,#,#) 
ORDER BY username ASC
");
// WHERE ".TABLE_PREFIX."users.usergroup NOT IN (#,#,#,#)
// ^ # = group id for usergroups you want to show on this listing, if only one group just put a number with no commas
// ORDER BY fid# ASC
// ^ if you don't want to order by username, # = field id for face claim profile field


while($result=$db->fetch_array($joblist)) {
$userid = $result['uid'];
$username = $result['username'];
// Replace the fid[jobID] with the fid and the ID of the Job profile field ! For example - fid[jobID]
$occupation = $result['fid[jobID]'];
eval("\$loc2 .= \"".$templates->get("joblist_entry")."\";");
}

// Replace the fid[locationID] with the fid and the ID of the Location profile field and the fid[jobID] with the fid and ID of the Job profile field ! For example - fid1
$joblist = $db->query("
SELECT *
FROM ".TABLE_PREFIX."users 
LEFT JOIN ".TABLE_PREFIX."userfields 
ON ".TABLE_PREFIX."users.uid = ".TABLE_PREFIX."userfields.ufid 
WHERE ".fid[locationID]." = 'Third Location'
AND ".TABLE_PREFIX."users.usergroup NOT IN (#,#,#,#) 
ORDER BY username ASC
");
// WHERE ".TABLE_PREFIX."users.usergroup NOT IN (#,#,#,#)
// ^ # = group id for usergroups you want to show on this listing, if only one group just put a number with no commas
// ORDER BY fid# ASC
// ^ if you don't want to order by username, # = field id for face claim profile field


while($result=$db->fetch_array($joblist)) {
$userid = $result['uid'];
$username = $result['username'];
// Replace the fid[jobID] with the fid and the ID of the Job profile field ! For example - fid[jobID]
$occupation = $result['fid[jobID]'];
eval("\$loc3 .= \"".$templates->get("joblist_entry")."\";");
}

// Replace the fid[locationID] with the fid and the ID of the Location profile field and the fid[jobID] with the fid and ID of the Job profile field ! For example - fid1
$joblist = $db->query("
SELECT *
FROM ".TABLE_PREFIX."users 
LEFT JOIN ".TABLE_PREFIX."userfields 
ON ".TABLE_PREFIX."users.uid = ".TABLE_PREFIX."userfields.ufid 
WHERE ".fid[locationID]." = 'Fourth Location'
AND ".TABLE_PREFIX."users.usergroup NOT IN (#,#,#,#) 
ORDER BY username ASC
");
// WHERE ".TABLE_PREFIX."users.usergroup NOT IN (#,#,#,#)
// ^ # = group id for usergroups you want to show on this listing, if only one group just put a number with no commas
// ORDER BY fid# ASC
// ^ if you don't want to order by username, # = field id for face claim profile field


while($result=$db->fetch_array($joblist)) {
$userid = $result['uid'];
$username = $result['username'];
// Replace the fid[jobID] with the fid and the ID of the Job profile field ! For example - fid[jobID]
$occupation = $result['fid[jobID]'];
eval("\$loc4 .= \"".$templates->get("joblist_entry")."\";");
}

// Replace the fid[locationID] with the fid and the ID of the Location profile field and the fid[jobID] with the fid and ID of the Job profile field ! For example - fid1
$joblist = $db->query("
SELECT *
FROM ".TABLE_PREFIX."users 
LEFT JOIN ".TABLE_PREFIX."userfields 
ON ".TABLE_PREFIX."users.uid = ".TABLE_PREFIX."userfields.ufid 
WHERE ".fid[locationID]." = 'Fifth Location'
AND ".TABLE_PREFIX."users.usergroup NOT IN (#,#,#,#) 
ORDER BY username ASC
");
// WHERE ".TABLE_PREFIX."users.usergroup NOT IN (#,#,#,#)
// ^ # = group id for usergroups you want to show on this listing, if only one group just put a number with no commas
// ORDER BY fid# ASC
// ^ if you don't want to order by username, # = field id for face claim profile field


while($result=$db->fetch_array($joblist)) {
$userid = $result['uid'];
$username = $result['username'];
// Replace the fid[jobID] with the fid and the ID of the Job profile field ! For example - fid[jobID]
$occupation = $result['fid[jobID]'];
eval("\$loc5 .= \"".$templates->get("joblist_entry")."\";");
}

// Replace the fid[locationID] with the fid and the ID of the Location profile field and the fid[jobID] with the fid and ID of the Job profile field ! For example - fid1
$joblist = $db->query("
SELECT *
FROM ".TABLE_PREFIX."users 
LEFT JOIN ".TABLE_PREFIX."userfields 
ON ".TABLE_PREFIX."users.uid = ".TABLE_PREFIX."userfields.ufid 
WHERE ".fid[locationID]." = 'Sixth Location'
AND ".TABLE_PREFIX."users.usergroup NOT IN (#,#,#,#)
ORDER BY username ASC
");
// WHERE ".TABLE_PREFIX."users.usergroup NOT IN (#,#,#,#)
// ^ # = group id for usergroups you want to show on this listing, if only one group just put a number with no commas
// ORDER BY fid# ASC
// ^ if you don't want to order by username, # = field id for face claim profile field


while($result=$db->fetch_array($joblist)) {
$userid = $result['uid'];
$username = $result['username'];
// Replace the fid[jobID] with the fid and the ID of the Job profile field ! For example - fid[jobID]
$occupation = $result['fid[jobID]'];
eval("\$loc6 .= \"".$templates->get("joblist_entry")."\";");
}

eval("\$joblist = \"".$templates->get("joblist")."\";");
output_page($joblist);

?>
