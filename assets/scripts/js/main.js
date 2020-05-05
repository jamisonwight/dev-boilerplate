// import main SASS file
import '../../styles/scss/style.scss'

// Import Foundation
import './init-foundation'

// Load JS modules to import at runtime
import './modules/globals'
import './modules/lazyload'
import './modules/ie'
import './modules/fancybox'

// Load JS modules to import upon window instersection
// Refer to https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API
// Loads on first selector object 
// [Immediate] if false, module imports on 75% of window intersection
var modules = [
    {class: '.selector-immediate', loaded: false, immediate: true, instersectionRatioDesktop: 0.50, instersectionRatioMobile: 0.25},
    {class: '.selector-not-immediate', loaded: false, immediate: false, instersectionRatioDesktop: 0.50, instersectionRatioMobile: 0.25},          
]

document.addEventListener("DOMContentLoaded", function () {
    
    modules.forEach((obj, index) => {
        var moduleSelector = document.querySelectorAll(obj.class)

        // Call immediately on intersection of browser view
        if ("IntersectionObserver" in window && obj.immediate) {
            let moduleObserverImmediate = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {

                        // EXAMPLE
                        // if (obj.class === '.selecter-immediate' && !obj.loaded) {
                        //     import('path-to-module').then(function(module) {
                        //         // Render module
                        //         module.render()
                        //         obj.loaded = true;

                        //         // Stop observing this selecter since it has already been called
                        //         moduleSelector.forEach((module, index) => {
                        //             moduleObserverImmediate.unobserve(module)
                        //         })
                        //     })
                        // }  
                    }

                })
            })
            if (moduleSelector !== undefined) {
                moduleSelector.forEach((module, index) => {
                    moduleObserverImmediate.observe(module, {
                        threshold: 0.0
                    })
                })
            }

        }

        // Call on specified intersection value
        else if ("IntersectionObserver" in window && !obj.immediate) {
            var thresholdTarget = window.outerWidth > 1024 ? obj.instersectionRatioDesktop : obj.instersectionRatioMobile
            // Run when section is halfway in the browser
            let moduleObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {

                        if (entry.intersectionRatio >= thresholdTarget) {

                            // EXAMPLE
                            // if (obj.class === '.selecter-not-immediate' && !obj.loaded) {
                            //     import('path-to-module').then(function(module) {
                            //         // Render module
                            //         module.render()
                            //         obj.loaded = true;
                            //         moduleSelector.forEach((module, index) => {
                            //             moduleObserver.unobserve(module, {
                            //                 threshold: 0.0
                            //             })
                            //         })
                            //     })
                            // }
    
                        }
                    } 
                })
            }, {threshold: [0.0, 0.25, 0.40, 0.50, 0.75, 1.0]})

            if (moduleSelector !== undefined) {
                moduleSelector.forEach((module, index) => {
                    moduleObserver.observe(module)
                })
            }
        }
    })

})

