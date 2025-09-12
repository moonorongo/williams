class MainNav {
    constructor(element) {
        this.$el = element;
        this.$globalContainer = document.querySelector('.global-container');
        this.$navElements = this.$el.querySelectorAll('.js-icon-action')
        this.$contentElements = document.querySelectorAll('.js-content')
        this.$backButton = document.querySelector('.js-back')
        
        this.bindEvents()
    }


    bindEvents() {
        this.$navElements.forEach(element => {
            element.addEventListener('click', (e) => {
                this.hideDetails();
                this.showDetails(e.currentTarget.dataset.key);
                this.$globalContainer.classList.add('show-detail')
                window.resetSwiper()
            });
        });

        this.$backButton.addEventListener('click', () => {
            window.resetSwiper()
            this.$globalContainer.classList.remove('show-detail')
            
            // add a bit of delay, waiting for transition
            setTimeout(() => {
                this.hideDetails()
            }, 500)
        })
    }


    // helper functions
    hideDetails() {
        this.$contentElements.forEach(element => {
            element.classList.add('hidden')
        });
    }


    showDetails(key) {
        this.$contentElements.forEach(element => {
            if(element.dataset.id === key) {
                element.classList.remove('hidden')
            }
        });
    }

}
