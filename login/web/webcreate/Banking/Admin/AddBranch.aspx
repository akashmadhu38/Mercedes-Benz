<%@ Page Title="" Language="C#" MasterPageFile="~/Banking/Admin/Admin.master" AutoEventWireup="true" CodeFile="AddBranch.aspx.cs" Inherits="Admin_AddBranch" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <table width="700">
    <tr>
        <td class="heading" colspan="3">add BRANCH details</td>
    </tr>
    <tr>
        <td width="100">&nbsp;</td>
        <td width="150">&nbsp;</td>
        <td width="450">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Bank Name</td>
        <td>
            <asp:DropDownList ID="ddlbankname" runat="server" CssClass="textbox">
            </asp:DropDownList>
        </td>
    </tr>
    
    <tr>
        <td>&nbsp;</td>
        <td>Branch</td>
        <td>
            <asp:TextBox ID="txtbrname" runat="server" CssClass="textbox"></asp:TextBox>
        </td>
    </tr>
  
    <tr>
        <td>&nbsp;</td>
        <td>Address</td>
        <td>
            <asp:TextBox ID="txtaddress" runat="server" CssClass="textbox" Height="75px" TextMode="MultiLine"></asp:TextBox>
        </td>
    </tr>
    
    <tr>
        <td>&nbsp;</td>
        <td>IFSC Code</td>
        <td>
            <asp:TextBox ID="txtifsc" runat="server" CssClass="textbox"></asp:TextBox>
        </td>
    </tr>
     
    <tr>
        <td>&nbsp;</td>
        <td>Phone</td>
        <td>
            <asp:TextBox ID="txtphone" runat="server" CssClass="textbox"></asp:TextBox>
        </td>
    </tr>
     
    <tr>
        <td>&nbsp;</td>
        <td>Email ID</td>
        <td>
            <asp:TextBox ID="txtemail" runat="server" CssClass="textbox"></asp:TextBox>
        </td>
    </tr>
    
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <table width="450">
                <tr>
                    <td width="210">
                        <asp:Button ID="Button1" runat="server" CssClass="button" OnClick="Button1_Click" Text="ADD" />
                    </td>
                    <td width="30">&nbsp;</td>
                    <td width="210">
                        <asp:Button ID="Button2" runat="server" CausesValidation="false" CssClass="button" Text="CLEAR" OnClick="Button2_Click" />
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
</asp:Content>

