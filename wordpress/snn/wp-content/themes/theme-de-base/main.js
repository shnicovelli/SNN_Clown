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
  
  
  
  const btn = document.querySelector('.btn ')
  
  
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
  
  