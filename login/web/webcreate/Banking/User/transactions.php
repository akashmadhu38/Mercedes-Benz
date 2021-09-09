<?php
	error_reporting(0);
?>
<table width="650px">
        <tr>
            <td colspan="3">
                <table width="650px" class="heading">
                    <tr>
                        <td width="325px" align="left">Card Holder :&nbsp;
						<label style="color:#009900;font-weight:bold;min-width:auto;">
					<?php
						echo $_SESSION["cardholder"];
					?>
					</label>
						</td>
                        <td width="325px" align="right">Balance Amount Rs.&nbsp;
                      <label style="color:#FF0000;font-weight:bold;min-width:auto;">
					<?php
						
						include("../db/connection.php");
			$obj=new connection();
			
			$obj->execute("update booking set status='Booked' where bid='". $_SESSION["bid"] ."'");
			$_SESSION["bid"]="0"; 
			 
			
			$sql="select amount from account where bankid='" . $_SESSION["bankid"] . "' and branchid='" . $_SESSION["branchid"] . "' and cardno='" . $_SESSION["cardno"] . "' and cvv='" . $_SESSION["cvv"] . "' and expmonth='" . $_SESSION["mn"] . "' and expyear='" . $_SESSION["yr"] . "' and amount>'" . $_SESSION["amount"] . "'";
			$res=$obj->execute($sql);
			if($row=mysqli_fetch_array($res))
			{
				$_SESSION["balance"]=$row["amount"];
			}
			echo $_SESSION["balance"];
					?>
					</label>/-</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="10px">&nbsp;</td>
            <td width="630px">&nbsp;</td>
            <td width="10px">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">
			<table>
			<tr>
			<td>
                    <table width="650px">
                        <tr>
                            <td class="heading" colspan="3">current transaction</td>
                        </tr>
                        <tr>
                            <td width="10">&nbsp;</td>
                            <td width="630">&nbsp;</td>
                            <td width="10">&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="10">&nbsp;</td>
                            <td width="630">
            					
								<table width="100%" class="table">
								<th>Card Holder</th>
								<th>Card No.</th>
								<th>Transaction Date</th>
								<th>Amount</th>               
								<?php			
			$sql="select account.cardholder,account.cardno,transactions.tdate,transactions.amount from account,transactions where account.cardno=transactions.cardno and account.cardno='" . $_SESSION["cardno"] . "' and account.bankid='" . $_SESSION["bankid"] . "' and account.branchid='" . $_SESSION["branchid"] . "' and account.cvv='" . $_SESSION["cvv"] . "' and transactions.trid='" . $_SESSION["trid"] . "'";
			
			$res=$obj->execute($sql);
			if($row=mysqli_fetch_array($res))
			{
								?>
							<tr>
							<td class="td"><?php echo $row["cardholder"]; ?></td>
							<td class="td"><?php echo $row["cardno"]; ?></td>
							<td class="td"><?php echo $row["tdate"]; ?></td>
							<td class="td"><?php echo $row["amount"]; ?></td>
							</tr>
					<?php
					}
					?>
                           </table>                           </td>
                            <td width="10">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3" class="heading">all transactions </td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>
						  
						  <table width="100%" class="table">
								<th>Card Holder</th>
								<th>Card No.</th>
								<th>Transaction Date</th>
								<th>Amount</th>               
								<?php
			
			$sql_all="select account.cardholder,account.cardno,transactions.tdate,transactions.amount from account,transactions where account.cardno=transactions.cardno and account.cardno='" . $_SESSION["cardno"] . "' and account.bankid='" . $_SESSION["bankid"] . "' and account.branchid='" . $_SESSION["branchid"] . "' and account.cvv='" . $_SESSION["cvv"] . "' order by transactions.trid desc";
			
			$res_new=$obj->execute($sql_all);
			while($row_new=mysqli_fetch_array($res_new))
			{
								?>
							<tr>
							<td class="td"><?php echo $row_new["cardholder"]; ?></td>
							<td class="td"><?php echo $row_new["cardno"]; ?></td>
							<td class="td"><?php echo $row_new["tdate"]; ?></td>
							<td class="td"><?php echo $row_new["amount"]; ?></td>
							</tr>
					<?php
					}
					?>
                           </table>                           </td>
                            <td width="10">&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="10">&nbsp;</td>
                            <td width="630">&nbsp;</td>
                            <td width="10">&nbsp;</td>
                        </tr>
                    </table>
						  
			  </td>
                          <td>&nbsp;</td>
                        </tr>
                    </table>
              </td>
				<td> 
				</tr>
				<tr>
				<td>
                    
					</td>
					</tr>
					</table>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>