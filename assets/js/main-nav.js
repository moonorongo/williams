class MainNav {
    constructor(element) {
        this.$el = element;
        this.$globalContainer = document.querySelector('.global-container');
        this.$navElements = this.$el.querySelectorAll('.js-icon-action')
        this.$contentElements = this.$el.querySelectorAll('.js-content')
        
        this.bindEvents()
    }


    bindEvents() {
        this.$navElements.forEach(element => {
            element.addEventListener('click', (e) => {
                this.hideDetails();
                this.showDetails(e.currentTarget.dataset.key);
                this.$globalContainer.classList.add('show-detail')
            });
        });
    }


    // helper functions
    hideDetails() {
        this.$contentElements.forEach(element => {
            element.classList.add('hidden')
        });
    }


    showDetails(key) {
        this.$contentElements.forEach(element => {
            if(element.dataset.key === key) {
                element.classList.remove('hidden')
            }
        });

    }

}
