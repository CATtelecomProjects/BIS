<?php

/************************************************************/
/* OpenTable Functions                                      */
/*                                                          */
/* Define the tables look&feel for you whole site. For this */
/* we have two options: OpenTable and OpenTable2 functions. */
/* Then we have CloseTable and CloseTable2 function to      */
/* properly close our tables. The difference is that        */
/* OpenTable has a 100% width and OpenTable2 has a width    */
/* according with the table content                         */
/************************************************************/

function OpenTable() {
	global $name; 
if (($name=='Forums') OR ($name=='Members_List') OR ($name=='Private_Messages')) {
   echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" ><tr><td class=extra>\n"; 
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" ><tr><td>\n"; 
} 
else 
{
    ?>
<table width="100%" border="0" cellspacing="0" cellpadding="7">
  <tr>
    <td>
<table width="100%"  border="0" cellpadding="1" cellspacing="0" bgcolor="#192832">
  <tr>
    <td><table width="100%"  border="0" cellpadding="2" cellspacing="0" bgcolor="#F5F5F5">
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td>
<?
}
}

function OpenTable2() {
    global $name, $bgcolor1, $bgcolor2;
	if (($name=='Gameserver')) {
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" ><tr><td class=extra>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" ><tr><td><div align=\"center\">\n";
} 
else 
{
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" ><tr><td class=extra>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" ><tr><td>\n";
}
}
function CloseTable() {
	global $name; 
if (($name=='Forums') OR ($name=='Members_List') OR ($name=='Private_Messages')) { 
   echo "</td></tr></table></td></tr></table>\n"; 
}    
else 
{
    ?>
</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</td>
  </tr>
</table>
<?
}
}

function CloseTable2() {
	global $name;
	if (($name=='Gameserver')) {
    echo "</div></td></tr></table></td></tr></table>\n";
} 
else 
{
    echo "</td></tr></table></td></tr></table>\n";
}
}

?>