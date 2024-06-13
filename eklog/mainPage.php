<html>
<head>

    <title>Main Menu Page</title>
    <link href='cssContainer/mainPageStyle.css' rel='stylesheet' type='text/css' />
    <link href='cssContainer/ProfileFrame.css' rel='stylesheet' type='text/css' />
    
<body>
    <?php session_start();?>
    <div class="top-menu">
    <div><h1 color="darkgrey">JavaScript Monsters</h1></div>
        <div class="menu-buttons">

            <button class='mainmenubuttons' id="mainFieldButton">Αρχική</button> 
            <button class='mainmenubuttons' id="lb">My learning</button>
            <button class='mainmenubuttons' >Statistics</button>
            <button class='mainmenubuttons' id="cont">Contact</button>
            
        </div>
        
            <div class="profile">
                <div class="profile-circle">
                    <img src="images.png" alt="Profile Picture"> <!-- Replace with actual path to profile picture -->
                </div>
                <div class="profile-name"><?php echo $_SESSION['username'];?></div>
                <div class="dropdown-menu">
                    <a id="profLink">Profile</a>
                    <a id="profOptions">Options</a>
                    <a id="logout">Log out</a>
                </div>
            </div>
    </div>
    <div class="main-content" id="mainContent">
            <div class="sidebar" id="slidebar">
                <ul>
                    <li><a href="#option1">Επιλογή 1</a></li>
                    <li><a href="#option2">Επιλογή 2</a></li>
                    <li><a href="#option3">Επιλογή 3</a></li>
                    <li><a href="#option4">Επιλογή 4</a></li>
                    <li><a href="#option5">Επιλογή 5</a></li>
                </ul>
            </div>
        <div class="content" id="mainpanel" name="mainpanel">
            <div class="mainfield" id="mainfield" align="center">
                <h1 > Main page </h1>
                <p>introduction and some ather words </p>
                <img src="js.png" width=50% height=50%>
            </div>
            <div class="statisticsfield" id="statisticsfield"></div>
            <div class="FrameArea" id="FrameArea" ><iframe class="profileFrame" src="profileEdidingPage.php" ></iframe></div>
            <div class="contactArea" id="contArea"><iframe class="contFrame" src="Contact.php" ></iframe></div>
            <div class="optionsArea" id="profOptions"><iframe class="contFrame" src="profileoptions.php" ></iframe></div>
        </div>
    </div>

    <script src="jsScripts/siteNavigationnnn.js"></script> 
</body>
</html>