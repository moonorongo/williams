class SwipeScroller {
    constructor(element) {
        this.$el = element;
        this.$track = this.$el.querySelector('.track');

        this.isSliding = false;
        this.dragging = false
        this.position = 0;
        this.velocity = 0;
        this.desceleration = 1

        // Wait for images to load to ensure accurate maxHeight calculation
        window.addEventListener('load', () => {
            this.maxHeight = -(this.$el.clientHeight - window.innerHeight);
            this.bindEvents();
            this.animate();
        });

        // timeout events binding to ensure DOM is fully ready
        setTimeout(() => {
            // reset scroll position to top
            this.resetScroll();
        }, 100);
    }

/*
    bindEvents() {
        const onDown = (e) => {
            this.dragging = true;
            this.velocity = this.velocity > 0 ? 1 : -1; // set velocity to 1 or -1 based on current value

            this.startX = this.getEventX(e);
            this.lastX = this.startX;
        };

        const onMove = (e) => {
            if (!this.dragging) return;

            const x = this.getEventX(e);
            const dx = x - this.lastX;
            this.lastX = x;
            this.velocity = dx;
        };

        const onUp = () => {
            this.dragging = false;
        };


        // Mouse
        this.$el.addEventListener('mousedown', onDown);
        window.addEventListener('mousemove', onMove);
        window.addEventListener('mouseup', onUp);

        // Touch
        this.$el.addEventListener('touchstart', onDown);
        window.addEventListener('touchmove', onMove, { passive: false });
        window.addEventListener('touchend', onUp);

        // Update this.maxHeight on resize window
        window.addEventListener('resize', () => {
            this.maxHeight = -(this.$el.clientHeight - window.innerHeight);
        })
    }
*/

    bindEvents() {
        const onDown = (e) => {
            e.preventDefault(); // Evita comportamientos predeterminados
            this.dragging = true;
            this.velocity = this.velocity > 0 ? 1 : -1; // set velocity to 1 or -1 based on current value

            this.startX = this.getEventX(e);
            this.lastX = this.startX;
        };

        const onMove = (e) => {
            if (!this.dragging) return;

            const x = this.getEventX(e);
            const dx = x - this.lastX;
            this.lastX = x;
            this.velocity = dx;
        };

        const onUp = () => {
            this.dragging = false;
        };

        // Mouse
        this.$el.addEventListener('mousedown', onDown);
        document.addEventListener('mousemove', onMove); // Cambiado de window a document
        document.addEventListener('mouseup', onUp); // Cambiado de window a document

        // Touch
        this.$el.addEventListener('touchstart', onDown, { passive: false });
        document.addEventListener('touchmove', onMove, { passive: false }); // Cambiado de window a document
        document.addEventListener('touchend', onUp); // Cambiado de window a document

        // Update this.maxHeight on resize window
        window.addEventListener('resize', () => {
            this.resetScroll();
            this.maxHeight = -(this.$el.clientHeight - window.innerHeight);
        });
    }

    getEventX(e) {
        return e.touches ? e.touches[0].clientY : e.clientY;
    }

    resetScroll() {
        this.position = 0;   
        this.setTransform(this.position);
        window.scrollTo(0, 0); // navigator.userAgentData.mobile ? -100000
    }

    setTransform(position) {
        this.$track.style.transform = `translateY(${position}px)`;
    }

    update() {
        if(this.velocity > 0) {
            this.isSliding = true;
            this.velocity -= this.desceleration;

            if(this.velocity < 0) this.velocity = 0;
        } 

        if(this.velocity < 0) {
            this.isSliding = true
            this.velocity += this.desceleration;
            if(this.velocity > 0) this.velocity = 0;
        } 

        if ( this.velocity === 0 ) {
            this.isSliding = false;
        }

        this.position += this.velocity;
        
        if (this.position < this.maxHeight) {
            this.position = this.maxHeight;
        } else if (this.position > 0) {
            this.position = 0;
        }

        this.setTransform(this.position);
    }

    animate() {
        this.update()
        requestAnimationFrame(this.animate.bind(this))
    }

}
