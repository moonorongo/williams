class MainNav {
    constructor(element) {
        this.$el = element;
        this.$navElements = this.$el.querySelectorAll('.js-icon-action')
        
        this.bindEvents()
        console.log('Main Nav init', this.$navElements)
    }

    bindEvents() {
        this.$navElements.forEach(element => {
            element.addEventListener('click', (e) => {
                console.log('Selected:', e.currentTarget.dataset.key)
            });
        });

    }
}
