import {Controller} from 'scrollmagic'
import 'scrollmagic/scrollmagic/minified/plugins/animation.gsap.min'

export default {
    controller: new Controller(),
    isMenuOpen: false,
    modules: [],
    getElementContentWidth: (element) => {
        var styles = window.getComputedStyle(element);
        var padding = parseFloat(styles.paddingLeft) +
                        parseFloat(styles.paddingRight);

        return element.clientWidth - padding;
    }
}