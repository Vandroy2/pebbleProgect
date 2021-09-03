document.addEventListener('DOMContentLoaded', function(){ 
  
//----------анимация-------// 
function  activedAnimate()  {
    function onEntry(entry) {
        entry.forEach(change => {
          if (change.isIntersecting) {
            change.target.classList.add('element-show');
    
          } else {
            change.target.classList.remove('element-show'); 
          }
        });
    }
    let options = { threshold: [0.5] };
    let observer = new IntersectionObserver(onEntry, options);
    let elements = document.querySelectorAll('.element-animation');
    
    for (let elm of elements) {
      observer.observe(elm);
    };
  }

  function activedNavBtn() {
    let navBtn =  document.querySelector('.nav__btn');
    let dropMenu = document.querySelector('.drop-menu');

    navBtn.onclick = function() {
        if(navBtn.classList.contains('active')) {
            navBtn.classList.remove('active');
            dropMenu.classList.remove('open-menu');
            document.body.style.overflow="visible";
        } else {
            navBtn.classList.add('active');
            dropMenu.classList.add('open-menu');
            document.body.style.overflow="hidden";

        }
    };
  }

  //--------скролл по id------------

  $('a[href*="#"]').on('click', function (e) {
    e.preventDefault();
   
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top
    }, 500, 'linear');
  });

  //-------input type="file"-------
  function showNameFiles() {
    $("#fl_inp").change(function(){
      var filename = $(this).val().replace(/.*\\/, "");
      $("#fl_nm").html(filename);
    });
  }



  

    activedAnimate()
    activedNavBtn()
    if ($("#fl_inp").length) 
    showNameFiles();
  


  
});