<html>

<head>
<title>รายงานผลการดำเนินงานของ กสท ตามบันทึกข้อตกลงประเมินผลการดำเนินงานรัฐวิสาหกิจ</title>


</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" background="images/bg22.gif">
<?include("head.php");?>
<br>
<table cellspacing="0" width="990" bordercolordark="white" bordercolorlight="black" style="border-collapse:collapse;">
    <tr>
        <td width="989" colspan="3" style="border-width:1; border-color:white; border-style:solid;">
            <p align="center"><b>บันทึกข้อมูลตัวชี้วัด</b></p>
        </td>
    </tr>
    <tr>
        <td width="989" colspan="3" style="border-width:1; border-color:white; border-style:solid;">

            <p align="center">&nbsp;</p>
        </td>
    </tr>
    <tr>
        <td width="220" style="border-width:1; border-color:white; border-style:solid;">&nbsp;</td>
        <td width="204" style="border-width:1; border-color:white; border-style:solid;">&nbsp;</td>
        <td width="559" style="border-width:1; border-color:white; border-style:solid;">&nbsp;</td>
    </tr>
    <tr>
        <td width="220" style="border-width:1; border-color:white; border-style:solid;">&nbsp;</td>
        <td width="204"  style="border-width:1; border-color:white; border-style:solid;">
            <p align="left">ปี</p>
        </td>
        <td width="559"  style="border-width:1; border-color:white; border-style:solid;">
            <form name="frm" action = "save_criteria_save.php" method = "post">
                <p>: <select name="yr" size="1">
                    <option value="50">2550</option>
                    <option value="49">2549</option>
                    <option value="48">2548</option>
                    <option value="47">2547</option>
                    <option value="46">2546</option>
                    <option value="45">2545</option>
</select></p>
            
</td>
    </tr>
    <tr>
        <td width="220" style="border-width:1; border-color:white; border-style:solid;">&nbsp;</td>
        <td width="204"  style="border-width:1; border-color:white; border-style:solid;">ตัวชี้วัดที่</td>
        <td width="559" style="border-width:1; border-color:white; border-style:solid;">

            <p>: <input type="text" name="g1" maxlength="5" size="5"></p>
        </td>
    </tr>
    <tr>
            <td width="220" style="border-width:1; border-color:white; border-style:solid;">&nbsp;</td>
            <td width="204" style="border-width:1; border-color:white; border-style:solid;">ชื่อตัวชี้วัด</td>
        <td width="559" style="border-width:1; border-color:white; border-style:solid;">

            <p>: <input type="text" name="topic_name" size="50"></p>
        </td>
    </tr>
    <tr>
            <td width="220" style="border-width:1; border-color:white; border-style:solid;" height="31">&nbsp;</td>
        <td width="204" style="border-width:1; border-color:white; border-style:solid;" height="31">ประเภทของตัวชี้วัด</td>
        <td width="559" style="border-width:1; border-color:white; border-style:solid;" height="31">
            
            
            
            
            
            
            <p>: <select name="criteria_type" size="1">
                <option value="1">คุณภาพ</option>
                <option value="2">ปริมาณ</option>
                <option value="3">บริหารจัดการ</option>
</select></p>
          
          
          
          
        </td>
    </tr>
    <tr>
        <td width="220" style="border-width:1; border-color:white; border-style:solid;">&nbsp;</td>
        <td width="204" style="border-width:1; border-color:white; border-style:solid;">นิยาม คำจำกัดความ</td>
        <td width="559" valign="bottom" style="border-width:1; border-color:white; border-style:solid;">
            
            
            <p>  &nbsp;&nbsp;<textarea name="definition" rows="5" cols="50"></textarea></p>
           
           
        </td>
    </tr>
    <tr>
        <td width="989" colspan="3" style="border-width:1; border-color:white; border-style:solid;">

            <p align="center"><input type="submit" name="save"  value="บันทึก"> <input type="reset" name="cancle" value="ยกเลิก"></p>

        </td>
    </tr>
	</form>
</table>
<p>&nbsp;</p>
</body>

</html>
