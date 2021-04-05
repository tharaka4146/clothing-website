class header extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `<h1>hello</h1>`
    }
}

customElements.define('app-header', header);