    // Detail container listeners
    var $globalContainerDetail = document.querySelector('.global-container.detail')
    var $detailContainer = $globalContainerDetail.querySelector('.detail-container')

    // enable dragscroll on body
    enableScrollOnDetail(false)

    window.onresize = () => {
      $detailContainer.style.maxHeight = `${window.innerHeight}px`
    }
    
    $detailContainer.style.maxHeight = `${window.innerHeight}px`
