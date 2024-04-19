import DataService from "../Model/DataService.js";
import KerdesTablazat from "../View/KerdesTablazat.js";
import Urlap from "../View/Urlap.js";

class PublicController {
  constructor() {
    this.dataService = new DataService();
    this.dataService.getData("api/tesztList", this.megjelenit);
    this.dataService.getData("api/kategoriaList", this.urlapMegjelenit);


    window.addEventListener("filter", (event) => {
      console.log(event.detail);
      if (this.receptTablazat) {
        this.receptTablazat.tablaSzures(event.detail);
      }
    });
  }

  urlapMegjelenit(kategoriak) {
    console.log(kategoriak);  
    new Urlap($(".urlap")[0], kategoriak); 
   }

  megjelenit(lista) {
    new KerdesTablazat($(".tablazat"),lista)
  }

}
export default PublicController;