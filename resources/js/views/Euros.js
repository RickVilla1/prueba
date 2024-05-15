class Euros {
    static buildView() {
        const newContentView = /*html*/ `<div id="ParentView"> <div
        class="font-extrabold flex justify-center m-5"
    >
        Operar con Euros
    </div>
    <div>
        <span>¿Qué desea conocer? </span><a onclick="RouteManager.NavigateTo(EurosPrecioDia)">Precio del día</a
        ><span> o </span><a>Cambio del Mes</a>
    </div></div>`;
        return new DOMParser().parseFromString(newContentView, "text/html").body
            .firstElementChild;
    }
}

window.Euros = Euros;