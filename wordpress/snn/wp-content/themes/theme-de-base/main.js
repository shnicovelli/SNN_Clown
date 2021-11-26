/*SWIPER*/
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
  });
  

  
  /*ERREUR 404*/
  gsap.timeline()
    .fromTo('.Bleu', { x:"0%" , y: '-40%' },
           {y: "-170%" , duration:5} )
    .fromTo('.Bleu' , { y: '-170%'},
           {x:"-300%", duration:5})
    .fromTo('.Bleu' , { y: '-170%'},
           {y:"-40%", duration:5})
     .fromTo('.Bleu' , { x: '-300%'},
           {x:"0%", duration:5})
gsap.timeline()
     .fromTo('.Rouge' , {x:"0%", y: '-40%'},
           {x:"300%", duration:10 })
    .fromTo('.Rouge' , { y: '-40%'},
           {y:"-170%", duration:5} )
     .fromTo('.Rouge' , {x:"300%"},
            { x:"0%" , duration:5 })
    .fromTo('.Rouge' , {y:"-170%"},
            { y:"-40%" , duration:5 })
gsap.timeline()
      .fromTo('.Bleu' , {rotationZ:"0%"},
            { rotationZ:"1800deg" , duration:25 })
      .fromTo('.Rouge' , {rotationZ:"0%"},
            { rotationZ:"1800deg" , duration:30 } ,"<")


  
  /*GSAP BLOC DON*/
  const btn = document.querySelector('.bouton-don-bloc-don')
  
  
  btn.addEventListener('click', () => {
    gsap.timeline()
      .fromTo('.ballon1', 
      { opacity: '0%' , skewX : '0%', y : '-5%'}, 
      { opacity: '100%',  skewX : '5%',  y : '-80%' ,duration:1.5,   }
    )
    .fromTo('.ballon2', 
      { opacity: '0%' , skewX : '0%', y : '-5%'}, 
      { opacity: '100%',  skewX : '-10%',  y : '-80%' ,duration:1.5,   }
    )
    .fromTo('.ballon3', 
      { opacity: '0%' , skewX : '0%', y : '-5%'}, 
      { opacity: '100%',  skewX : '10%',  y : '-80%' ,duration:1.5,   }
    );
  });