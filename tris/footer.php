<?  
function counter($chk){

	// select style :  0= text , 1 = image; Default = 0
	$style = 1;	
	
	// �ʴ���ͤ����ӹǹ����
	$title="";

	// �ѹ���������Ѻ
	$start="Start at : 12-2006";	
	
	$hitsfile = "./includes/counter.txt";

$image = dirname( __FILE__ ) . "/images";
//$image = str_replace( $DOCUMENT_ROOT, "", $image );

if ( file_exists( $hitsfile ) )
	{
		$hits = file( $hitsfile );
		
		if(!empty($chk)){		
				$hits = $hits[0];
		}else{
				$hits = $hits[0]+1;
		}
		
		
		$fp = fopen( $hitsfile, "w" );
		fwrite( $fp, $hits );
		fclose( $fp );
	}
else
	{
		$fp = fopen( $hitsfile, "w" );
		fwrite( $fp, "1" );
		fclose( $fp );
	}

	if ( $style == 1 )// image style
	{		

		$hits = sprintf( "%07d", $hits );
		$digit = strval( $hits );
		$count=number_format($hits);
		for ( $i=0; $i<strlen( $hits ); $i++ ){
			echo "<img src=./images/img_counter/$digit[$i].jpg  alt='".$title."".$start."' align=absmiddle>";
			}
	}else{		// text style

		$hits = sprintf( "%07d", $hits );
		echo "<font face=Tahoma size=2><b>".$hits."</b></font>";
	}

}
?>
  <tr>
        <td colspan="7"  rowspan="2"  height = "28"  bgcolor="#0099FF">
<p align="center"><font size="2" face="MS Sans Serif" color="white"> &copy; 2007 �Ѳ������ǹ�Ѳ���к����ʹ�ȷҧ��áԨ     ���¾Ѳ���к�෤��������ʹ�����ͧҹ�١�����и�áԨ(ŷ.) 
		 ��. 0-2104-7332-4 </font> </td>
</tr>
<tr><td colspan="7"  rowspan="2" height = "28"> </td></tr>
<tr>
<td colspan="7"  rowspan="2" bgcolor="#FFFFFF">
<p align="center"><br><font size="2" face="MS Sans Serif">������������ӴѺ��� :  <?=counter($_GET['file']); ?></font>
</td>
</tr>
        
	