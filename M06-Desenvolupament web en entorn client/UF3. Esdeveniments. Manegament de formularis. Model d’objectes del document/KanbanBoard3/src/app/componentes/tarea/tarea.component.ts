import {Component, Input} from '@angular/core';
import {Tarea} from "../../models/tarea.model";

@Component({
  selector: 'app-tarea',
  templateUrl: './tarea.component.html',
  styleUrls: ['./tarea.component.css']
})
export class TareaComponent {

  @Input() tarea: Tarea;

}
