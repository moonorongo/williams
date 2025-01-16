    // click icon actions
    const $icons = document.querySelectorAll('.js-icon')

    $icons.forEach(icon => {
      icon.addEventListener('click', (e) => {

        if(dragscroll.getScrollingStatus()) {
          return
        }

        enableScrollOnDetail(true)

        gsap.to($globalContainerDetail, { 
          opacity: 1, 
          y: 0, 
          duration: 0.5,
          onComplete: () => {
            $globalContainerDetail.style.pointerEvents = 'all'
          }
        });

      })
    });

    // back click actions
    const $back = document.querySelector('.back-icon')
    $back.addEventListener('click', (e) => {
      enableScrollOnDetail(false)

      gsap.to($globalContainerDetail, { 
        opacity: 0, 
        y: 0, 
        duration: 0.5,
        onComplete: () => {
          $globalContainerDetail.style.pointerEvents = 'none'

        }
      });
    })