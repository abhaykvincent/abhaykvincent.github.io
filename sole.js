window.onload = function ()
{
    const INTRO = document.getElementById("intro")
    const SEEMORE = document.getElementById("seeMore")
    const ADDSUBTITLE = document.getElementById("addSubtitleInput");
    const ADDSUBCONTENT = document.getElementById("addSubcontentInput");
    const ADDCAPTION = document.getElementById("addCaption");
    
    const PLACELIST = document.getElementById("placeList");
    const PLACEINPUT = document.getElementById("placeInput");


    /* Displaying Place List */

    var i=1;
    PLACELIST.innerHTML="";
    while(i<=3)
    {
        PLACELIST.innerHTML+= '<div id="'+i+'" class="placeList">'+City[i]+'</div>';
        i++;
    }

    $(document).on('click', '.placeList', function () {
        var selectedPlace= this.textContent;
        PLACEINPUT.value = selectedPlace;
    });





    SEEMORE.addEventListener('click', function(){
        this.style.display= "none";
        INTRO.innerHTML+= "<br><br>Create web apps with PHP using top database technologies like SQL, MySQL and PhpMyAdmin. Proficient in High-level programming languages like C, C++, COBOL.<br><br> I'm also a Digital Artist. I love to do digital paintings, illustration and animation and lots of other graphical arts. As a full-stack developer, I can proudly say that it is an art as well as programming. It is a pure combination of both art and code.";
        
    });
    function addText(field,pop) {
        field.addEventListener('click', function(){
            this.style.display="none";
            TweenMax.from(pop,0.2,{
                scale: 0
    
            });
            TweenMax.to(pop,0.2,{
                display : "block"
    
            });
        });
      }
      addText(ADDSUBTITLE,"#postTitleSub");
      addText(ADDSUBCONTENT,"#postContentTextSub");
      addText(ADDCAPTION,"#PostImageCaption");
    

    var blogHeight = document.getElementById("blog").offsetHeight;

    function expandAddPost()
    {
        const POSTSTATUS = document.getElementById("addPostExpand").dataset.status;

        if(POSTSTATUS != "open")
        {
            TweenMax.from("#addPost", 0.5, {
                delay: 0.2,
                height: '0px',

            });
            document.getElementById("addPost").style.height = "auto";
            document.getElementById("addPost").style.display = "block";
            document.getElementById("addPostExpand").innerHTML=" What's on your mind? <i class='fas fa-brain'></i>";
            TweenMax.to("#addPostExpand", 0.5, {
                backgroundImage: 'url(./pixelCanon/close.png)',
                backgroundSize: '150%)'


            });
            document.getElementById("addPostExpand").dataset.status="open"
        }
        else{

            TweenMax.to("#addPost", 0.5, {
                delay: 0.2,
                height: 'auto',

            });
            document.getElementById("addPost").style.display = "none";
            document.getElementById("addPostExpand").innerHTML=" Add a Post <i class='fas fa-edit'>";
            TweenMax.to("#addPostExpand", 0.5, {
                backgroundImage: 'url(./pixelCanon/addPost.png)',
                backgroundSize: '150%)'


            });
            document.getElementById("addPostExpand").dataset.status="close"
        }
        
    }
    document.getElementById("addPostExpand").addEventListener('click', expandAddPost);


}