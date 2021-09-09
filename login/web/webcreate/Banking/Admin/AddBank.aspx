<%@ Page Title="" Language="C#" MasterPageFile="~/Banking/Admin/Admin.master" AutoEventWireup="true" CodeFile="AddBank.aspx.cs" Inherits="Admin_AddBank" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <script type="text/javascript">
        function previewFile() {
            var preview = document.querySelector('#<%=Image2.ClientID %>');
            var file = document.querySelector('#<%=FileUpload1.ClientID %>').files[0];
            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
               
            }

            if (file) {
                reader.readAsDataURL(file);
                
            } else {
                preview.src = "";
            }
        }
    </script>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
     
            <table width="700">
                <tr>
                    <td class="heading" colspan="3">add bank details</td>
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
                        <asp:TextBox ID="txtbname" runat="server" CssClass="textbox"></asp:TextBox>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Bank Logo</td>
                    <td>
                        <asp:FileUpload ID="FileUpload1" runat="server" CssClass="textbox" onchange="previewFile()" />
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
                <tr>
                    <td colspan="2" style="vertical-align:top;text-align:center;">
                        <asp:Image ID="Image2" runat="server" Height="100px" Width="175px" />
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        
</asp:Content>

