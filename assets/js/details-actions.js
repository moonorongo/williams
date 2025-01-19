    const showContent = (number) => {
      document.querySelector(`.detail-contents[data-number="${number}"]`).classList.remove('hidden')
    }

    const hideAllContents = () => {
      document.querySelectorAll(`.detail-contents`).forEach(element => {
        element.classList.add('hidden')
      });
    }

    // Show Detail Container
    const showDetailContainer = (number) => {
      showContent(number); 

      // detail entry animation
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

      // icons out animation
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
      hideAllContents()

      // Remove all Scrolltriggers
      ScrollTrigger.killAll()

      // detail out animations
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

      // icons entry animation
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
        globalStore.isDetailOpen = true;
        showDetailContainer(e.currentTarget.dataset.number);
      })
    });

    // back click actions
    const $back = document.querySelector('.back-icon')
    $back.addEventListener('click', (e) => {
      if(globalStore.isDetailOpen)
      hideDetailContainer()
      globalStore.isDetailOpen = false;
    })