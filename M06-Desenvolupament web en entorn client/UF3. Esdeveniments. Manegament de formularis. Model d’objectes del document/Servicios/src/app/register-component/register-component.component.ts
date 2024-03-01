import { Component } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-register-component',
  templateUrl: './register-component.component.html',
  styleUrls: ['./register-component.component.css']
})
export class RegisterComponentComponent {
constructor(
  public userService: UserService{

  });

  registerForm: FormGroup = new FormGroup({
    email: new FormControl('', [Validators.required]),
    password: new FormControl('', [Validators.required]),
    rpassword: new FormControl('', [Validators.required])
  });

  enviarRegistro(){
    console.log(this.registerForm.value);
    const email = this.registerForm.value.email;
    const password = this.registerForm.value.password;

    this.userService.registerUser(email, password).subscribe({
      next:value=>console.log(value)
      
    });
  }
}
