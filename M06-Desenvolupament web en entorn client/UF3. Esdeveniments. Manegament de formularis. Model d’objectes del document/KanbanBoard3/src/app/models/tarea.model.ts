import { Usuario } from './usuario.model';

export interface Tarea {
  id: number;
  lista: string | null; // Null representa que la tarea no esta asignada a ninguna lista
  titulo: string;
  descripcion: string;
  usuarios: Usuario[];
  img?: string; // Es un campo opcional ya que no todas tienen imagen
  fechaFin?: Date; // Es un campo opcional ya que no todas tienen fecha fin
}
