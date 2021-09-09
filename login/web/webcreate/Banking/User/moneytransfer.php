<form name="form1" method="post">
<table class="nav-justified">
        <tr>
            <td class="heading" colspan="3">amount to be transfered</td>
        </tr>
         <tr>
            <td width="150">&nbsp;</td>
            <td width="200">&nbsp;</td>
            <td width="400">&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;
                </td>
            <td>&nbsp;
                </td>
            <td style="background-color:#CCCCCC;padding:10px;border-radius:10px;color:#000;">
                <table align="center" cellpadding="3" cellspacing="3" width="400">
                   <tr>
                <td colspan="3"></td>
            </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="3">Balance : Rs.
                    <label style="color:#FF0000;font-weight:bold;min-width:auto;">
					<?php
						echo $_SESSION["balance"];
					?>
					</label>
					
                    /-</td>
                    </tr>
                    <tr>
                        <td width="100">&nbsp;</td>
                        <td width="125">&nbsp;</td>
                        <td width="175">&nbsp;
                            </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Card Holder</td>
                        <td>
                    <label style="color:#009900;font-weight:bold;min-width:auto;">
					<?php
						echo $_SESSION["cardholder"];
					?>
					</label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Date</td>
                        <td>
                    <label style="color:#330000;font-weight:bold;min-width:auto;">
					<?php
						echo date("d-m-Y");
					?>
					</label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Time</td>
                        <td>
                    <label style="color:#330000;font-weight:bold;min-width:auto;">
					<?php
						date_default_timezone_set("Asia/Calcutta");
						echo date("h:i:sa");
					?>
					</label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Amount</td>
                        <td>
                            Rs. <label style="color:#009900;font-weight:bold;min-width:auto;" value="<?php echo $_SESSION["amount"]; ?>" name="lblamount">
							<?php echo $_SESSION["amount"]; ?>
							</label>
                    /-</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="3">
		<input type="submit" name="btnsubmit" value="SUBMIT" class="button" />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                    
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
	</form>
	<?php
		
		if(isset($_POST["btnsubmit"]))
		{
			include("../db/connection.php");
			$obj=new connection();
			$sql="select cardholder,amount from account where bankid='" . $_SESSION["bankid"] . "' and branchid='" . $_SESSION["branchid"] . "' and cardno='" . $_SESSION["cardno"] . "' and cvv='" . $_SESSION["cvv"] . "' and expmonth='" . $_SESSION["mn"] . "' and expyear='" . $_SESSION["yr"] . "' and amount>'" . $_SESSION["amount"] . "'";
			$res=$obj->execute($sql);
			if($row=mysqli_fetch_array($res))
			{
				$sql_update1="update account set amount=amount-'" . $_SESSION["amount"] . "' where bankid='" . $_SESSION["bankid"] . "' and branchid='" . $_SESSION["branchid"] . "' and cardno='" . $_SESSION["cardno"] . "' and cvv='" . $_SESSION["cvv"] . "' and expmonth='" . $_SESSION["mn"] . "' and expyear='" . $_SESSION["yr"] . "'";
			$obj->execute($sql_update1);
			$sql_update2="update account set amount=amount+'" . $_SESSION["amount"] . "' where bankid=1500 and branchid=2500 and cardno=1111111111111111 and cvv=111";
			$obj->execute($sql_update2);
			
			$dt=date("d-m-Y");
			$sql_in="insert into transactions values(null,'$dt','" . $_SESSION["cardno"] . "','" . $_SESSION["amount"] . "')";
			$obj->execute($sql_in);
			
			$sql_max="select max(trid) as trid from transactions";
			$r=$obj->execute($sql_max);
			if($s=mysqli_fetch_array($r))
			{
				$_SESSION["trid"]=$s["trid"];
			}
				echo "<script>alert('Transaction Completed Successfully');</script>";
				?>
					<script>
						fn_redirect("userhome.php?_i8b=<?php echo $transactions; ?>");
					</script>
					<?php
			}
			else
			{
				echo "<script>alert('Insufficient Balance. Cannot Proceed!!!');</script>";			
			}
		}
	
	?>