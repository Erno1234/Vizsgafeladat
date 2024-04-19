class KerdesTablazat {
  #lista;
  constructor(szuloElem, lista) {
    this.szuloElem = szuloElem;
    this.#lista = lista;
    console.log(this.#lista);
    this.divMegjelenit();
    console.log(this.#lista);
  }

  divMegjelenit() {
    let txt = '<div class="foDiv"></div>';
    this.szuloElem.append(txt);
    this.foDivELem = this.szuloElem.children(".foDiv");
  
    for (const key in this.#lista) {
      let kerdesDiv = document.createElement("div");
      kerdesDiv.className = "bg-dark text-white p-3 mb-3";
      kerdesDiv.innerText = this.#lista[key].kerdes;
      this.foDivELem.append(kerdesDiv);
  
      let valaszDiv = document.createElement("div");
      valaszDiv.className = "valaszok";
  
      for (let i = 1; i <= 4; i++) {
        let valasz = document.createElement("div");
        valasz.className = "valasz";
        valasz.innerText = this.#lista[key]["v" + i];
        valaszDiv.append(valasz);
      }
      this.foDivELem.append(valaszDiv);
    }
  }
}
export default KerdesTablazat;
