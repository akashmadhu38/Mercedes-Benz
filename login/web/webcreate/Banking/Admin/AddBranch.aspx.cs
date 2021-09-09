using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Admin_AddBranch : System.Web.UI.Page
{
    Banking obj = new Banking();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            obj.FillDropDownList("bname", "bankid", "bank", "", ddlbankname);
        }
    }

    protected void Button2_Click(object sender, EventArgs e)
    {
        txtaddress.Text = "";
        txtbrname.Text = "";
        txtemail.Text = "";
        txtifsc.Text = "";
        txtphone.Text = "";
    }

    protected void Button1_Click(object sender, EventArgs e)
    {
        obj.ReadData("select * from branch where bankid=" + ddlbankname.SelectedItem.Value + " and brname='" + txtbrname.Text+"'");
        if (obj.dr.Read())
        {
            Response.Write(obj.Messagebox("Branch Name already exists!!!"));
        }
        else
        {
            obj.WriteData("insert into branch values(" + ddlbankname.SelectedItem.Value + ",'" + txtbrname.Text + "','" + txtaddress.Text + "','" + txtphone.Text + "','" + txtifsc.Text + "')");
            Response.Write(obj.Messagebox("Branch Details added successfully"));
            Server.Transfer("AddBranch.aspx");
        }
    }
}