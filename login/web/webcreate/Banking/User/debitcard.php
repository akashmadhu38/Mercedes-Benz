
<table width="750">
        <tr>
            <td class="heading" colspan="3">transfer money from your account&nbsp;</td>
        </tr>
        <tr>
            <td width="200">&nbsp;</td>
            <td width="200">&nbsp;</td>
            <td width="350">&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td colspan="2">
                <table class="nav-justified">
                    <tr>
                        <td align="right" colspan="4">
                    <img height="37px" src="../Admin/img/logos_01.jpg" width="120px" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right" colspan="4">
                            <table class="nav-justified">
                                <tr>
                                    <td align="left">CARD NUMBER</td>
                                    <td>
									<input name="txtcardno" type="text" class="textbox" /> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td colspan="2">&nbsp; </td>
                    </tr>
                    <tr>
                        <td width="200">EXPIRY DATE:
                    
                        </td>
                        <td width="175" colspan="2">

                            <select id="ddlmonth" name="ddlmonth" class="textbox">
							<option>--MM--</option>
							<?php
							for($i=1;$i<=12;$i++)
							{
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php
							}
							?>
							</select>
                   

                        </td>
                        <td width="175">

                             
                            <select id="ddlyear" name="ddlyear" class="textbox">
							<option>--YYYY--</option>
							<?php
							for($i=date("Y")+1;$i<=date("Y")+11;$i++)
							{
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php
							}
							?>
							</select>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">CVV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                        <td colspan="2">
						<input name="txtcvv" type="password" class="textbox" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <input type="submit" name="btnproceed" class="button" value="PROCEED" />
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
        </table>
		
		<?php
				
			if(isset($_POST["btnproceed"]))
			{
				$cardno=$_POST["txtcardno"];
				$mn=$_POST["ddlmonth"];
				$yr=$_POST["ddlyear"];
				$cvv=$_POST["txtcvv"];
				
				$_SESSION["cardno"]=$cardno;
				$_SESSION["mn"]=$mn;
				$_SESSION["yr"]=$yr;
				$_SESSION["cvv"]=$cvv;
				
				$bankid=$_SESSION["bankid"];
				$branchid=$_SESSION["branchid"];
				
				$sql="select cardholder,amount from account where bankid='$bankid' and branchid='$branchid' and cardno='$cardno' and cvv='$cvv' and expmonth='$mn' and expyear='$yr'";
				include("../db/connection.php");
				$obj=new connection();
				$res=$obj->execute($sql);
				if($row=mysqli_fetch_array($res))
				{
					//session_start();
					$_SESSION["cardholder"]=$row["cardholder"];
					$_SESSION["balance"]=$row["amount"];
					?>
					<script>
						fn_redirect("userhome.php?_i8b=<?php echo $moneytransfer; ?>");
					</script>
					<?php
				}
				else
				{
					?>
					<script>alert('Card Details are Invalid!!!');</script>
					<?php
				}				
			}
		
		?>