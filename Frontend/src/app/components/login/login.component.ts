import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { DataService } from 'src/app/services/data.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  form = new FormGroup({
    correo: new FormControl(''),
    clave: new FormControl('')
  });

  constructor(
    private data:DataService,
    private router:Router
  ) { }

  ngOnInit(): void {
  }   
  signup(){
    this.router.navigate(['/signup', { id: 100 }]);
  }
  
  login(){
    this.data.login(this.form.value).subscribe(function(res){
      let token = res['token'];
      localStorage.setItem('token', token);
    });
  }
}
