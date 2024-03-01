import { Injectable } from '@angular/core';
import { map, Observable } from 'rxjs';
import { User } from '../../models/user.model';
import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';

@Injectable({
  providedIn: 'root',
})
export class UsersService {
  constructor(private http: HttpClient) {}

  registerUser(email: string, password: string):Observable<any> {
    return this.http.post('https://reqres.in/api/register', {
      email: email,
      password: password,
    });
  }

  getUsers(page: number = 1): Observable<User[]> {
    // Ejemplo de HttpHeaders
    const httpHeaders: HttpHeaders = new HttpHeaders({
      'Content-Type': 'application/json; charset=utf-8',
    });

    // Ejemplo de HttpParams
    const httpParams: HttpParams = new HttpParams().set('page', page);

    return this.http
      .get<User[]>('https://reqres.in/api/users', {
        headers: httpHeaders,
        params: httpParams,
      })
      .pipe(
        map((res: any) => {
          console.log(res);
          return res.data;
        })
      );
  }
}
