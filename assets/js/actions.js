    // click icon actions
    const $icons = document.querySelectorAll('.js-icon')

    $icons.forEach(icon => {
      icon.addEventListener('click', (e) => {

        // if(dragscroll.getScrollingStatus()) {
        //   return
        // }

        // enableScrollOnDetail(true)

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
            const videoId = `video${index}`
            videoElem.id = videoId

            ScrollTrigger.create({
              trigger: `#${videoId}`,
              onEnter: () => videoElem.play(),
              onEnterBack: () => videoElem.play(),
              onLeave: () => videoElem.pause(),
              onLeaveBack: () => videoElem.pause(),
            });
          });
 

      })
    });

    // back click actions
    const $back = document.querySelector('.back-icon')
    $back.addEventListener('click', (e) => {
      // enableScrollOnDetail(false)

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
    })