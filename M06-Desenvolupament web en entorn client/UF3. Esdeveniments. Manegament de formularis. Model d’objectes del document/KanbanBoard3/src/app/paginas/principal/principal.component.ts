import {Component, OnInit} from '@angular/core';
import {Tarea} from "../../models/tarea.model";
import data from "../../../assets/data.json";

@Component({
  selector: 'app-principal',
  templateUrl: './principal.component.html',
  styleUrls: ['./principal.component.css'],
})
export class PrincipalComponent implements OnInit {

  tareas: Tarea[] = [];

  ngOnInit() {
    // Cargamos el fichero JSON
    const json: any = data;

    // Guardamos el fichero cargado en el array de Eventos
    this.tareas = json;

    // Convertimos las fechas a tipo Date
    //this.tareas.map((value) => (value.fechaFin) ? value.fechaFin = new Date(value.fechaFin) : "");

    console.log(this.tareas);
  }

  obtenerNombreListas() {
    const listas = this.tareas.map(value => value.lista);
    return (listas.filter((value: string | null, idx: number) => listas.indexOf(value) == idx)).sort();
  }

  obtenerTareasParaLista(lista: string | null) {
    if (lista) {
      return this.tareas.filter(value => value.lista === lista);
    }
    else {
      return [];
    }
  }
}
