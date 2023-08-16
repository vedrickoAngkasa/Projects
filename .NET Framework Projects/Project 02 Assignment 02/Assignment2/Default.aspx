<%@ Page Title="Home Page" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="Assignment2._Default" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">


<link rel="stylesheet" href="Content/mapStyle.css">
<script src="Scripts/jquery-3.4.1.min.js"></script>
<script src="Scripts/map.js"></script>

<script 
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAplhmXZPA8UPMKEz8QUJf4wdlArG2jmpM&callback=initMap">
</script>
<div class="row">

    <div class="container-fluid">
        
        <div id="map" ></div>

        <div class="form-control" >
                 <label>Enter Credentials Below: </label>
                <br />
                <label>Name: </label>
                <input type="text" value="" name="username" id="username" />

                <label>Lat: </label>
                <input type="text" value="" id="lat" name="lat"  />

                <label>Long: </label>
                <input type="text" value="" id="long" name="long" />

                <label>Type of Support[Caretaker/Volunteer]: </label>
                <input type="text" value="" id="typeSupport" name="typeSupport"/>

                <label>Support Level [E.g. 3 hours]: </label>
                <input type="text" value="" id="supportLevel" name="supportLevel" />

                <br />
                <label>
                    Insert Image: <asp:FileUpload ID="fileIMG"  runat="server" /><br/>
                </label>
                <br />
                <input type="submit" value="Add" class="add-button" runat="server" />

            

        </div>
  
    </div>




</div>

</asp:Content>
