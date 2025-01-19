    // Show Detail Container
    const showDetailContainer = () => {
      // detail animation
      gsap.fromTo($globalContainerDetail, { 
        opacity: 0, 
        scale: .85,
      }, { 
        opacity: 1, 
        scale: 1,
        y: 0, 
        duration: 0.5,
        onComplete: () => {
          $globalContainerDetail.style.pointerEvents = 'all'
        }
      });

      // icons animation
      gsap.fromTo($globalContainerIcons, { 
        opacity: 1, 
        scale: 1,
      }, { 
        opacity: 0, 
        scale: 1.15,
        y: 0, 
        duration: 0.5
      });

      // Add all Scrolltriggers
      $globalContainerDetail
        .querySelectorAll('video')
        .forEach((videoElem,index) => {
          console.log(videoElem)
          const videoId = `video${index}`
          videoElem.id = videoId

          ScrollTrigger.create({
            scroller: '#detail-container',
            trigger: `#${videoId}`,
            start: '90% 90%',
            end: '90% 10%',
            markers: true,
            onEnter: () => videoElem.play(),
            onEnterBack: () => videoElem.play(),
            onLeave: () => videoElem.pause(),
            onLeaveBack: () => videoElem.pause(),
          });
        });
    }


    // Hide Detail Container
    const hideDetailContainer = () => {
      // Remove all Scrolltriggers
      ScrollTrigger.killAll()

      // detail animations
      gsap.fromTo($globalContainerDetail, { 
        opacity: 1, 
        scale: 1,
      }, { 
        opacity: 0, 
        scale: 1.15,
        y: 0, 
        duration: 0.5,
        onComplete: () => {
          $globalContainerDetail.style.pointerEvents = 'none'
        }
      });

      // icons animation
      gsap.fromTo($globalContainerIcons, { 
        opacity: 0, 
        scale: .85,
      }, { 
        opacity: 1, 
        scale: 1,
        y: 0, 
        duration: 0.5
      });
    }


    // click icon listeners
    const $icons = document.querySelectorAll('.js-icon')

    $icons.forEach(icon => {
      icon.addEventListener('click', (e) => {
        globalStore.detailOpen = true;
        showDetailContainer();
      })
    });

    // back click actions
    const $back = document.querySelector('.back-icon')
    $back.addEventListener('click', (e) => {
      globalStore.detailOpen = false;
      hideDetailContainer()
    })