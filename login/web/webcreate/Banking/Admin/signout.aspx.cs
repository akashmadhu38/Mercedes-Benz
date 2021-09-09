using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class User_signout : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        Session["bankid"] = null;
        Session["branchid"] = null;
        Session["trid"] = null;
        Session["cardno"] = null;
        Session["cardholder"] = null;
        Response.Redirect("~/User/UserHome.aspx");
    }
}