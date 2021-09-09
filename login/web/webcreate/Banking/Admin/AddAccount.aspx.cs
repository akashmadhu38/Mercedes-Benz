using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Admin_AddAccount : System.Web.UI.Page
{
    Banking obj = new Banking();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            obj.FillDropDownList("bname", "bankid", "bank", "", ddlbankname);
            for (int i = 1; i <= 12; i++)
            {
                ddlmonth.Items.Add(i.ToString());
            }
            int YR = System.DateTime.Now.Year;
            YR = YR + 1;
            for (int i = YR; i <= 2030; i++)
            {
                ddlyear.Items.Add(i.ToString());
            }
            ddlmonth.Items.Insert(0, "--MM--");
            ddlyear.Items.Insert(0, "--YYYY--");
        }
    }

    protected void Button2_Click(object sender, EventArgs e)
    {
        //
    }

    protected void Button1_Click(object sender, EventArgs e)
    {
        obj.ReadData("select * from account where bankid=" + ddlbankname.SelectedItem.Value + " and branchid=" + ddlbranch.SelectedItem.Value + " and cardno=" + txtcardno.Text);
        if (obj.dr.Read())
        {
            lblmsg.Text = "Card No. already exists to this Bank";
        }
        else
        {
            obj.WriteData("insert into account values(" + ddlbankname.SelectedItem.Value + "," + ddlbranch.SelectedItem.Value + "," + txtcardno.Text + ",'" + txtcardholder.Text + "'," + txtcvv.Text + "," + ddlmonth.SelectedItem.Text + "," + ddlyear.SelectedItem.Text + "," + txtamount.Text + ")");
            lblmsg.Text = "Account Details added Successfully";
            txtamount.Text = "";
            txtcardholder.Text = "";
            txtcardno.Text = "";
            txtcvv.Text = "";
            ddlyear.SelectedIndex = 0;
            ddlmonth.SelectedIndex = 0;
            ddlbankname.SelectedIndex = 0;
            ddlbranch.Items.Clear();
        }
    }

    protected void ddlbankname_SelectedIndexChanged(object sender, EventArgs e)
    {
        if(ddlbankname.SelectedIndex!=0)
        {
            obj.FillDropDownList("brname", "branchid", "branch", "bankid=" + ddlbankname.SelectedItem.Value, ddlbranch);
        }
        else
        {
            ddlbranch.Items.Clear();
            lblmsg.Text = "Please Select a Bank";
        }
    }
}