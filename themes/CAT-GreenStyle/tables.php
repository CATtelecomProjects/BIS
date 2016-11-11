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
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
  <tr>
    <td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
      <tr>
        <td width=\"1\"><img src=\"themes/CAT-GreenStyle/images/table1_01.png\" width=\"7\" height=\"6\" alt=\"\"></td>
        <td width=\"100%\" background=\"themes/CAT-GreenStyle/images/table1_02.png\"></td>
        <td width=\"1\"><img src=\"themes/CAT-GreenStyle/images/table1_04.png\" width=\"18\" height=\"6\" alt=\"\"></td>
      </tr>
    </table>
      <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
        <tr>
          <td width=\"1\" valign=\"top\" background=\"themes/CAT-GreenStyle/images/table1_05.png\"><img src=\"themes/CAT-GreenStyle/images/table1_05.png\" width=\"7\" height=\"2\" alt=\"\"></td>
          <td>\n";
//    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function CloseTable() {
    echo "</td>
          <td width=\"18\" rowspan=\"2\" valign=\"bottom\" background=\"themes/CAT-GreenStyle/images/table1_07.png\"><img src=\"themes/CAT-GreenStyle/images/table1_10.png\" width=\"18\" height=\"20\" alt=\"\"></td>
        </tr>
        <tr>
          <td valign=\"top\" background=\"themes/CAT-GreenStyle/images/table1_05.png\"><img src=\"themes/CAT-GreenStyle/images/table1_11.png\" width=\"7\" height=\"6\" alt=\"\"></td>
          <td width=\"100%\" valign=\"bottom\" background=\"themes/CAT-GreenStyle/images/table1_12.png\"><img src=\"themes/CAT-GreenStyle/images/table1_12.png\" width=\"2\" height=\"6\" alt=\"\"></td>
        </tr>
      </table></td>
  </tr>
</table>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
  <tr>
    <td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
      <tr>
        <td width=\"1\"><img src=\"themes/CAT-GreenStyle/images/table1_01.png\" width=\"7\" height=\"6\" alt=\"\"></td>
        <td width=\"100%\" background=\"themes/CAT-GreenStyle/images/table1_02.png\"></td>
        <td width=\"1\"><img src=\"themes/CAT-GreenStyle/images/table1_04.png\" width=\"18\" height=\"6\" alt=\"\"></td>
      </tr>
    </table>
      <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
        <tr>
          <td width=\"1\" valign=\"top\" background=\"themes/CAT-GreenStyle/images/table1_05.png\"><img src=\"themes/CAT-GreenStyle/images/table1_05.png\" width=\"7\" height=\"2\" alt=\"\"></td>
          <td>\n";
//    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function CloseTable2() {
    echo "</td>
          <td width=\"18\" rowspan=\"2\" valign=\"bottom\" background=\"themes/CAT-GreenStyle/images/table1_07.png\"><img src=\"themes/CAT-GreenStyle/images/table1_10.png\" width=\"18\" height=\"20\" alt=\"\"></td>
        </tr>
        <tr>
          <td valign=\"top\" background=\"themes/CAT-GreenStyle/images/table1_05.png\"><img src=\"themes/CAT-GreenStyle/images/table1_11.png\" width=\"7\" height=\"6\" alt=\"\"></td>
          <td width=\"100%\" valign=\"bottom\" background=\"themes/CAT-GreenStyle/images/table1_12.png\"><img src=\"themes/CAT-GreenStyle/images/table1_12.png\" width=\"2\" height=\"6\" alt=\"\"></td>
        </tr>
      </table></td>
  </tr>
</table>\n";
}

?>