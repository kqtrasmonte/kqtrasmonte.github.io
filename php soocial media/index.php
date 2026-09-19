<!DOCTYPE html>
<html>
<head>
    <title>profile | mykirby</title>
</head>

<style type="text/css">

    #blue_bar{
        height: 50px;
        background-color: #405d9b;
        color: #d9dfeb;
    }

    #search_box{
        width: 400px;
        height: 20px;
        border-radius: 5px;
        border: none;
        padding: 4px;
        font-size: 14px;
        background-image: url("img1_4_20x20.jpeg");
        background-repeat: no-repeat;
        background-position: right;
    }

    #profile_pic{
        width: 150px;
        margin-top: -250px;
        border-radius: 50%;
        border: solid 2px white;
    }

    #menu_buttons{
        width: 100px;
        display: inline-block;
        margin: 2px;
    }

    #Friends_bar{
        background-color: white;
        min-height: 400px;
        margin-top: 20px;
        color: #aaa;
        padding: 8px;
        overflow: auto;
    }

    #friends_img{
        width: 75px;
        float: left;
        margin: 8px;
    }

    #post_bar{
        background-color: white;
        min-height: 400px;
        margin-top: 20px;
        padding: 10px;
    }

    #friends{

        clear: both;
        font-size: 12px;
        font-weight: bold;
        color: #405d9b;
    }

    textarea{

       width: 100%;
       border:none;
       font-family: tahoma;
       font-size: 14px;
       height: 60px;

    }

    #post_button{

        float: right;
        background-color: #405d9b;
        border:none;
        color: white;
        padding: 4px;
        font-size: 14px;
        border-radius: 2px;
        width: 50px;

    }

</style>

<body style="font-family: tahoma; background-color: #d0d8e4;">

    <br>

    <!-- Top Navigation Bar -->
    <div id="blue_bar">
        <div style="width: 800px; margin: auto; font-size: 30px;">
            MyBEe &nbsp &nbsp <input type="text" id="search_box" placeholder="Search for people">
            <img src="selfie.png" style="width: 35px; float: right;">
        </div>
    </div>

    <!-- Main Container -->
    <div style="width: 800px; margin: auto; min-height: 400px;">

        <!-- Cover Area -->
        <div style="background-color: white; text-align: center; color: #405d9b;">
            <img src="images.jfif" style="width: 100%;">
            <img id="profile_pic" src="selfie.png">
            <br>
            <div style="font-size: 20px;">Mary Banda</div>
            <br>
            <div id="menu_buttons">Timeline</div>
            <div id="menu_buttons">About</div>
            <div id="menu_buttons">Friends</div>
            <div id="menu_buttons">Photos</div>
            <div id="menu_buttons">Settings</div>
        </div>   

        <!-- Below Cover Area -->
        <div style="display: flex;">

            <!-- Friends Area (Left Column) -->
            <div style="min-height: 400px; flex: 1;">

                <div id="Friends_bar">

                    Friends<br><br>

                    <div id="friends">
                        <img id="friends_img" src="profile.jfif">
                        <br>
                        First User
                    </div>

                    <div id="friends">
                         <img id="friends_img" src="2nd.jfif">
                          <br>
                        Nigga 
                    </div>

                    <div id="friends">
                         <img id="friends_img" src="3rd.jfif">
                          <br>
                        African GIrl   
                    </div>

                     <div id="friends">
                         <img id="friends_img" src="4th.jpg">
                          <br>
                        Black nigga   
                    </div>

                </div>     

            </div>

            <!-- Post Area (Right Column) -->
            <div style="min-height: 400px; flex: 2.5; padding: 20px;padding-right: 0px;">
                
                <div style="border:solid; thin #aaa; padding: 10px;background-color: white;">
                 
                    <textarea placeholder="Whats on your Mind?"></textarea>
                    <input id="post_button" type="submit" value="Post" >
                    <br>
                </div>

            </div>

        </div>

    </div>

</body>
</html>