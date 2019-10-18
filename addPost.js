
const POST = document.getElementById("post");
const ERROR = document.getElementById("error");

const TITLE = document.getElementById("postTitleMain");
const TITLESUB = document.getElementById("postTitleSub");
const CONTENT = document.getElementById("postContentText");
const CONTENTSUB = document.getElementById("postContentTextSub");
const PLACEINPUT = document.getElementById("placeInput");
const IMAGE = document.getElementById("postImage");
const IMAGECAPTION = document.getElementById("PostImageCaption");


function addPost() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else 
    {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            ERROR.style.color="rgb(47, 146, 105)";
            ERROR.style.backgroundColor=" rgb(205, 216, 212)";
            ERROR.style.display="block";
            ERROR.innerHTML = xmlhttp.responseText;
        }
    };
    loginUrl="addPost.php?title="+title+"&titleSub="+titleSub+"&content="+content+"&contentSub="+contentSub+"&placeName="+placeName+"&image="+image+"&imageCaption="+imageCaption;
    xmlhttp.open("GET",loginUrl,true);
    xmlhttp.send();
}
/* " */

  POST.addEventListener('click', function(){

    title = TITLE.value;
    titleSub = TITLESUB.value;
    content = CONTENT.value;
    contentSub = CONTENTSUB.value;
    placeName = PLACEINPUT.value;
    image = IMAGE.value;
    imageCaption  = IMAGECAPTION.value;
        
    if( content ==="")
           {
               TweenMax.to("#error",0.4,{
                   border : "1px solid rgb(168, 60, 60)",
                   color : "rgb(168, 60, 60)",
                   backgroundColor : "rgb(216, 205, 205)",
                   display : "block",
                   scale: 1
               });
               ERROR.innerHTML = "Content Missing!   <i class='fas fa-exclamation-triangle'></i> ";
           }
    else if(title ==="" )
    {
        TweenMax.to("#error",0.4,{
            border : "1px solid rgb(168, 60, 60)",
            color : "rgb(168, 60, 60)",
            backgroundColor : "rgb(216, 205, 205)",
            display : "block",
            scale: 1
        });
           ERROR.innerHTML = "Title Missing!  <i class='fas fa-exclamation-triangle'></i>";

    }
       else
           {
               addPost();
           }
    });


