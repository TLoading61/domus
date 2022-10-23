class Carousel {

    /**
    *
    * @param {HTMLElement} element
    * @param {Object} options
    * @param {Object} options.slidesToScroll Nb d'éléments à faire défiler
    * @param {Object} options.slidesVisible Nb d'éléments visibles
    */
    constructor(element, options = {}) {
        this.element = element
        this.options = Object.assign({}, {
            slidesToScroll: 1,
            slidesVisible: 1,
            infinite: true
        }, options)

        let children = [].slice.call(element.children) 
        this.currentItem = 0
        let root = this.createDivWithClass('carousel')
        this.container = this.createDivWithClass('carousel_container')
        root.appendChild(this.container)
        this.element.appendChild(root)

        this.items = children.map((child) => {
            let item = this.createDivWithClass('carousel_item')
            item.appendChild(child)
            this.container.appendChild(item)
            return item
        })

        this.setStyle()

        setInterval(() => {
            this.next()
        }, 3000)
        
    }

    setStyle () {
        let ratio = this.items.length / this.options.slidesVisible
        this.container.style.width = (ratio * 100) + "%"
        this.items.forEach(item => item.style.width = ((100 / this.options.slidesVisible) / ratio) + "%")
    }

    next(){
        this.goToItem(this.currentItem + this.options.slidesToScroll)
        
        if(this.currentItem == 3){
            this.currentItem = -1
        }
    }


    goToItem(index){
        let translateX = index * -100 / this.items.length
        this.container.style.transform = 'translate3d(' + translateX + '%, 0, 0)'
        this.currentItem = index        
    }

    /**
     * 
     * @param {string} className 
     * @return {HTMLElement}
     */
    createDivWithClass(className){
        let div = document.createElement('div')
        div.setAttribute('class', className)
        return div
    }
}

class ReverseCarousel {

    /**
    *
    * @param {HTMLElement} element
    * @param {Object} options
    * @param {Object} options.slidesToScroll Nb d'éléments à faire défiler
    * @param {Object} options.slidesVisible Nb d'éléments visibles
    */
    constructor(element, options = {}) {
        this.element = element
        this.options = Object.assign({}, {
            slidesToScroll: 1,
            slidesVisible: 1,
            infinite: true
        }, options)

        let children = [].slice.call(element.children) 
        this.currentItem = 0
        let root = this.createDivWithClass('carousel')
        this.container = this.createDivWithClass('carousel_container')
        root.appendChild(this.container)
        this.element.appendChild(root)

        this.items = children.map((child) => {
            let item = this.createDivWithClass('carousel_item')
            item.appendChild(child)
            this.container.appendChild(item)
            return item
        })

        this.setStyle()

        setInterval(() => {
            this.previous()
        }, 4500)
        
    }

    setStyle () {
        let ratio = this.items.length / this.options.slidesVisible
        this.container.style.width = (ratio * 100) + "%"
        this.items.forEach(item => item.style.width = ((100 / this.options.slidesVisible) / ratio) + "%")
    }

    previous(){
        this.goToItem(this.currentItem + this.options.slidesToScroll)
        
        if(this.currentItem == 3){
            this.currentItem = -1
        }
    }


    goToItem(index){
        let translateX = index * -100 / this.items.length
        this.container.style.transform = 'translate3d(' + translateX + '%, 0, 0)'
        this.currentItem = index        
    }

    /**
     * 
     * @param {string} className 
     * @return {HTMLElement}
     */
    createDivWithClass(className){
        let div = document.createElement('div')
        div.setAttribute('class', className)
        return div
    }
}

document.addEventListener('DOMContentLoaded', function(){
    new Carousel(document.querySelector('#bloc_info_1_img'), {
        slidesToScroll: 1,
        slidesVisible: 1
    })

    new ReverseCarousel(document.querySelector('#bloc_info_2_img'), {
        slidesToScroll: 1,
        slidesVisible: 2
    })
})