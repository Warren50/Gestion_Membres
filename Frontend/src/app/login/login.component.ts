import { Component, OnInit } from '@angular/core';
import { FormBuilder } from '@angular/forms';
import { ConditionalExpr } from '@angular/compiler';


@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  isPocessing: boolean = false;// dire si la requete es en court de traitement
  hasError: boolean = false; //dire si echouer
  isSuccess: boolean = false; // dire si la reque a reuissie
  loginForm;
  message: string;
  constructor(private formBuilder: FormBuilder,) {
    
    this.loginForm = this.formBuilder.group({
      email: '',
      password: ''
    });
   }

  ngOnInit(): void {
    
  }

  onSubmit(loginData) {
    // Process checkout data here
    
    this.isPocessing = true;

    /** champs obligatoire Une sorte de validateur**/
    if(loginData.email.trim().length == 0 || 
      loginData.password.trim().length == 0)
      {
        this.hasError = true;
        this.isPocessing = false;
        this.message ="Veuillez bien remplir le formulaire"
        console.error("Formulaire mal rempli")
        return;

      }
      this.isSuccess=true;
      this.message="test message";
    console.log('Your order has been submitted', loginData);
  }

  closeAlert(){
    this.hasError =false;
    this.isSuccess =false;
    this.message = "";
  }

}
