<?xml version="1.0" encoding="UTF-8"?> 
<?xml-stylesheet type="text/css" href="../style.css"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<style>
    body {
    background-color: black;
    background-image: url("bg.jpg");
    background-size:cover;
    }
    .offer-table{
    width: 80%;
    margin: auto;
    margin-top: 4%;
    }
    table, th, td {

        border-collapse: collapse;
        padding: 15px;
        text-align: center;
    }
    td{
        background-color: rgb(203, 224, 243);
    }
    tr{
        border: 1px solid white;
    }
    th{
        background-color: #0093E9;
        color: white;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: medium;
    }
    .header{
        display: flex;
        justify-content: space-around;
        margin-bottom: 5px;
        background-color: #0093E9;
        background-image: linear-gradient(160deg, #0093E9 0%, #468eaa 100%);
    }
    .heading{
        font-size: xx-large;
        text-align: center;
        color: #0093E9;
        padding: 20px;
        margin: auto;
        margin-left: 75;
    }
    .header-buttons{
        margin: auto;
        height: 75px;
        display: flex;
        margin-left: 350px;
        justify-content: space-around;
    }
    .header_btn_text{
        text-align: center;
        margin-top: 30%;
        font-size: 13pt;
    }

    .header-button{

        color: white;
        height: 100%;
        width: 100px;
        font-size: medium;
        margin-right: 2%;
    }
    .header-button:hover{
        background-color: #0093E9;
        border-color: 0093E9;
    }
    .header-button:focus{
        outline: 0093E9;
    }
    a:link {
        text-decoration: none;
    }
    .navbar{
    width: 100%;
    height: 10%;
    line-height: 70px;
    background: #333;
    border-bottom: 2px solid red;
    }

    .logo{
        width: 60px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-left: 50px;
        float: left;
    }
    footer {
        position: fixed;
        bottom: 0;
        background-color: #333;
        color: white;
        width: 100%;
        text-align: center;
        line-height: 10px;
    }
    .alive
    {
        width: 85px;
        border: 0.5px solid green;
        padding: 5px;
        margin: 20px;
        background-color: green;
    }
    .btn {
        background-color: DodgerBlue;
        border: 50px;
        color: white;
        padding: 7px 10px;
        border-radius: 7.5%;
        font-size: 16px;
        cursor: pointer;
    }

        /* Darker background on mouse-over */
    .btn:hover {
        background-color: RoyalBlue;
    }
</style>
    <body>
    <center>
        <header>
                <h1><b><font color="grey">Daily Quotes Application</font></b><br/><br/></h1>
                <h3>
                <a href="first.html"><font color="#A8E6CE">Home</a> ||</font>
                <a href="Anime.html"><font color="#A8E6CE">Anime Quotes</a> ||</font>
                <a href="Savedd.html"><font color="#A8E6CE">Saved Quotes</a> ||</font>
                <a href="Movies.html"><font color="#A8E6CE">Movie Quotes</a> ||</font>
                <a href="TVSeries.html"><font color="#A8E6CE">TV Series Quotes</a> ||</font>
                <a href="serials.xml"><font color="#A8E6CE">Serials</font></a>
                </h3>
            </header>
        <div style="text-align:center">
            <h2 style = "color:#ffffff">Most Searched Series</h2> 
            <table class="offer-table">
                <tr > 
                    <th>ID</th>
                    <th>Name</th>
                    <th>Rating</th>
                    <th>Genre</th>
                </tr>
                <xsl:for-each select="serials/serial">
                <tr>
                    <td><xsl:value-of select="id"/></td>
                    <td><xsl:value-of select="name"/></td>
                    <td><xsl:value-of select="rating"/></td>
                    <td><xsl:value-of select="genre"/></td>
                </tr> 
                </xsl:for-each>
            </table> 
        </div>
        </center>
    </body>
    <footer >
                <font color="grey"><h2>www.quotenation.com</h2></font>
      </footer>
</html> 
</xsl:template>
</xsl:stylesheet>