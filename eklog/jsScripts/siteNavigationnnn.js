var state=false;
function ClearField(){
    var children = document.getElementById('mainpanel');
    children=children.getElementsByTagName('div');
    for (var child of children){
        child.style.display="none";
    }
    document.getElementById("slidebar").style.display="none";
    state=false;
}
function returnToMain(){
    ClearField();
    document.getElementById("mainfield").style.display="flow-root";
}
function mailNavigation(){
    ClearField();
    document.getElementById("contArea").style.display="block";

}
function ProfileView(){
    ClearField();
    document.getElementById("FrameArea").style.display="block";
}
function ProfilOptions(){
    ClearField();
    document.getElementById("profOptions").style.display="block";
}
function myLearn(){

    if(state){
        document.getElementById("slidebar").style.display="none";
        state=false;
    }
    else{
        state=true;
        document.getElementById("slidebar").style.display=" block";
    }

}
function LogOut() {
    var result = confirm("Do you want to log out?");
    if (result) {
       window.location.href="phpRequestCodes/Logout.php";
    }
}
document.getElementById("profLink").onclick=function(){ProfileView();};
document.getElementById("mainFieldButton").onclick=function(){returnToMain();};
document.getElementById('cont').onclick=function(){mailNavigation();};
document.getElementById('logout').onclick=function(){LogOut();};
document.getElementById("lb").onclick=function(){ClearField(); myLearn();};   
document.getElementById("profOptions").onclick=function(){ProfilOptions();};

