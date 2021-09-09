using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Admin_AddBank : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }

    protected void Button1_Click(object sender, EventArgs e)
    {
        Banking obj = new Banking();
        obj.ReadData("select * from bank where bname='" + txtbname.Text + "'");
        if (obj.dr.Read())
        {
            Response.Write(obj.Messagebox("Bank Name Already Exists!!!"));
        }
        else
        {
            if (FileUpload1.HasFile)
            {
                string ext = System.IO.Path.GetExtension(FileUpload1.FileName);
                if (ext == ".jpg" || ext == ".jpeg" || ext == ".png" || ext == ".gif")
                {
                    FileUpload1.SaveAs(Server.MapPath("~/logo/" + FileUpload1.FileName));
                    obj.WriteData("insert into bank values('" + txtbname.Text + "','" + FileUpload1.FileName + "')");
                    txtbname.Text = "";
                    Response.Write(obj.Messagebox("Bank Details Added Successfully"));
                }
                else
                {
                    Response.Write(obj.Messagebox("Invalid Image File!!!"));
                }
            }
            else
            {
                Response.Write(obj.Messagebox("Please Upload Bank Logo!!!"));
            }
        }
    }

    protected void Button2_Click(object sender, EventArgs e)
    {
        txtbname.Text = "";
    }
}