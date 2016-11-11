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
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\">
  <tr>
    <td class=\"center_block\">\n";
//    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function CloseTable() {
    echo "</td>
  </tr>
</table>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
  <tr>
    <td class=\"center_block\">\n";
//    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function CloseTable2() {
    echo "</td>
  </tr>
</table>\n";
echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"tbl\">\n";
echo "<tr>\n";
echo "<td class=\"tbll\"><img src=\"themes/CAT-CoolStyle/forums/images/spacer.gif\" alt=\"\" width=\"8\" height=\"4\" /></td>\n";
echo "<td width=\"100%\" class=\"tblbot\"><img src=\"themes/CAT-CoolStyle/forums/images/spacer.gif\" alt=\"\" width=\"8\" height=\"4\" /></td>\n";
echo "<td class=\"tblr\"><img src=\"themes/CAT-CoolStyle/forums/images/spacer.gif\" alt=\"\" width=\"8\" height=\"4\" /></td>\n";
echo "</tr></table>\n";
}

?>