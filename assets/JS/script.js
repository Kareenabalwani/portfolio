


function s1(id,radius){
var c = document.getElementById(id);
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.arc(100, 75, 50, 0, radius * Math.PI);
var gradient = ctx.createLinearGradient(0, 0, 170, 0);


gradient.addColorStop("0", "magenta");
gradient.addColorStop("1.0  ", "blue");
gradient.addColorStop("0.5", "red");

ctx.strokeStyle=gradient;
ctx.lineWidth = 5;
ctx.stroke();
}


   


s1("s1",2);
s1("s2",1.9);
s1("s3",1.8);
s1("s4",1.95);
s1("s5",1.8);
s1("s6",1.98);
s1("s7",2);
s1("s8",1.75);
s1("s9",2);


function textcolor(id,text){
    var c = document.getElementById(id);
    console.dir(c);
    var ctx = c.getContext("2d");
    ctx.font = "3rem Verdana";
    // Create gradient
    var gradient = ctx.createLinearGradient(0, 0, c.width, 0);
    gradient.addColorStop("0", "magenta");
    gradient.addColorStop("0.5", "blue");
    gradient.addColorStop("1.0", "green");
    // Fill with gradient
    ctx.strokeStyle = gradient;
    ctx.strokeText(text, 10, 50);    
}


// textcolor("skill_head","Skills");
// textcolor("project_head","Projects");


    function toggle(){
        nav = document.getElementById('nav');
        image = document.getElementById('menu-img');
        right_nav=document.getElementById('social-link-id');
        console.log("hi");
        
        if(nav.style.display === "block"){
            console.log("none display")
            nav.style.display='none';
            

            image.src="./assets/Images/menu.png";
            

        }else{
            console.log("entered cancel")
            nav.style.display='block';
            right_nav.style.display='none';
            image.src="./assets/Images/cancel.png";
        }
    }

function skill_hover(ind){

    skillnames= document.getElementsByClassName('skillname')
    skill_percent = document.getElementsByClassName('skill_percent');
    
    skillnames[ind].style.color = "#034C65";
    skillnames[ind].style.backgroundColor = "#EF8C86";
    skill_percent[ind].style.color = "#034C65";
}

function skill_leave(ind){
    
    skillnames= document.getElementsByClassName('skillname')
    skill_percent = document.getElementsByClassName('skill_percent');
    
    skillnames[ind].style.color = "#EF8C86";
    skillnames[ind].style.backgroundColor = "#034C65";
    skill_percent[ind].style.color = "#034C65";
}


function skills(){
    window.location.href = "#skills";
}
