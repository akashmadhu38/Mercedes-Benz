<%@ Page Title="" Language="C#" MasterPageFile="~/Banking/Admin/Admin.master" AutoEventWireup="true" CodeFile="AddAccount.aspx.cs" Inherits="Admin_AddAccount" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <asp:ScriptManager ID="ScriptManager1" runat="server">
    </asp:ScriptManager>
    <asp:UpdatePanel ID="UpdatePanel1" runat="server">
        <ContentTemplate>
            <table width="700">
                <tr>
                    <td class="heading" colspan="3">customer account</td>
                </tr>
                <tr>
                    <td width="100">&nbsp;</td>
                    <td width="150">&nbsp;</td>
                    <td width="450">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <asp:Label ID="lblmsg" runat="server" Font-Bold="True" ForeColor="Red"></asp:Label>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Bank Name</td>
                    <td>
                        <asp:DropDownList ID="ddlbankname" runat="server" AutoPostBack="True" CssClass="textbox" OnSelectedIndexChanged="ddlbankname_SelectedIndexChanged">
                        </asp:DropDownList>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Branch</td>
                    <td>
                        <asp:DropDownList ID="ddlbranch" runat="server" CssClass="textbox">
                        </asp:DropDownList>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Card No.</td>
                    <td>
                        <asp:TextBox ID="txtcardno" runat="server" CssClass="textbox"></asp:TextBox>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Card Holder</td>
                    <td>
                        <asp:TextBox ID="txtcardholder" runat="server" CssClass="textbox"></asp:TextBox>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td colspan="2">
                        <table width="600">
                            <tr>
                                <td width="190">CVV</td>
                                <td width="15">&nbsp;</td>
                                <td width="190">Expiry Month</td>
                                <td width="15">&nbsp;</td>
                                <td width="190">Expiry Year</td>
                            </tr>
                            <tr>
                                <td>
                                    <asp:TextBox ID="txtcvv" runat="server" CssClass="textbox"></asp:TextBox>
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <asp:DropDownList ID="ddlmonth" runat="server" CssClass="textbox">
                                    </asp:DropDownList>
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <asp:DropDownList ID="ddlyear" runat="server" CssClass="textbox">
                                    </asp:DropDownList>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Amount</td>
                    <td>
                        <asp:TextBox ID="txtamount" runat="server" CssClass="textbox"></asp:TextBox>
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
                                    <asp:Button ID="Button2" runat="server" CausesValidation="false" CssClass="button" OnClick="Button2_Click" Text="CLEAR" />
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
        </ContentTemplate>
    </asp:UpdatePanel>
</asp:Content>

