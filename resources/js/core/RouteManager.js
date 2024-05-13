import { ID_CONTENT } from "./Constans";
import { ID_PARENT_VIEW } from "./Constans";
class RouteManager {
    static inTransition = false

    static NavigateTo(/*classView*/) {
        console.log("NavigateTo");
        if (RouteManager.inTransition) {
            return
        } {
            RouteManager.inTransition = true
        }

        //const newContentView = classView.buildView()
        const newContentView = /*html*/ `<div >NUevo Conten2</div>`
        //const currentContentView = document.getElementById(ID_PARENT_VIEW);
        const content = document.getElementById(ID_CONTENT);
        const currentContentView = content.firstElementChild;
        console.log(currentContentView);
        const newContentViewObject = new DOMParser().parseFromString(newContentView, "text/html").body.firstElementChild

        currentContentView.style.transition = 'all 0.5s ease-in-out'
        newContentViewObject.style.transition = 'all 0.5s ease-in-out'

        currentContentView.addEventListener('transitionend', function (event) {
            console.log("TRANSIION TERMINADA INICIO");
            if (event.propertyName === 'opacity' && this.style.opacity == '0') {
                console.log("TRANSIION TERMINADA");
                newContentViewObject.style.opacity = '0'
                content.innerHTML = '';
                content.append(newContentViewObject)
                newContentViewObject.style.opacity = '1'
                RouteManager.inTransition = false
            }
        });

        currentContentView.style.opacity = '0'
        currentContentView.style.opacity = '0'
    }

}
window.RouteManager = RouteManager;
