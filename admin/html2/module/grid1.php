<div class="grid radius5">
    <table>
        <colgroup>
        	<col width="98">
            <col width="98">
            <col width="98">
            <col width="98">
            <col width="98">
        </colgroup>
        <thead>
            <tr>
                <th>所在项目</th>
                <th>所在课题</th>
                <th>姓名</th>
                <th>性别</th>
                <th>身份证号</th>
            </tr>
        <thead>
        <tbody>
             <?php 
			$pname1=$_SESSION['pnam'];     	
			$tname1=$_SESSION['tnam'];
            $flag=0;
            //$personname="dpl";
            $xml = new DOMDocument();
			$xml->load('../xml/takers.xml');
			$tempDom= $xml->getElementsByTagName("taker");
            foreach($tempDom as $temp)
			{  
				$tem=$temp->getElementsByTagName("taker_pro")->item(0)->nodeValue;
				$tem2=$temp->getElementsByTagName("taker_task")->item(0)->nodeValue;
				if(($tem==$pname1)&&$tem2==$tname1)
				{
					$flag=1;
			?>
					<tr>
	                <td><?php echo $tem?></td>
	                <td><?php echo $tem2?></td>
	                <td><?php echo $temp->getElementsByTagName("taker_name")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("taker_sex")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("taker_id")->item(0)->nodeValue?></td>
	            	</tr>  
	           <?php }
	 	 	 }
	 	 	 if($flag==0)
	 	 	 {?>
	 	 	 	<tr>
	                <td><?php echo $pname1?></td>
	                <td><?php echo $tname1?></td>
	                <td>无</td>
	                <td>无</td>
	                <td>无</td>
	            	</tr> 
	 	 	 <?php }?>
        </tbody>
    </table>
</div>
