<table width="700">
                <tr>
                    <td class="heading" colspan="3">select bank</td>
                </tr>
                <tr>
                    <td width="100">&nbsp;</td>
                    <td width="150">&nbsp;</td>
                    <td width="450">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="3">
                        
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Bank Name</td>
                    <td>
                        <select class="textbox" id="ddlbank" name="ddlbank"
						onchange="getbranch(this.value,ddlbranch);" >
						<option value="0">--BANK--</option>
						<?php
							
								include("bind.php");
								BindBank();
						
						?>
	
						</select> <label id="bnk"></label>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Branch</td>
                  <td>                        
                        <select name="ddlbranch" id="ddlbranch" class="textbox">
                          <option value="0">--BRANCH--</option>
                        </select></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>
                        <table width="450">
                            <tr>
                                <td width="210">
								<input type="submit" name="btnproceed" class="button" value="PROCEED" />
                                    
                                </td>
                                <td width="30">&nbsp;</td>
                                <td width="210">
								<input type="submit" class="button" value="CANCEL" />
                                    
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td></td>
                </tr>
            </table>
			<?php
				
				if(isset($_POST["btnproceed"]))
				{
					$_SESSION["bankid"]=$_POST["ddlbank"];
					$_SESSION["branchid"]=$_POST["ddlbranch"];
					?>
					<script>
						fn_redirect("userhome.php?_i8b=<?php echo $debitcard; ?>");
					</script>
					<?php
					//header("location:/userhome.php?page=debitcard");
				}
			
			?>