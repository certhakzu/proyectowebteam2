import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {​ HomeComponent }​ from'./components/home/home.component';
import {​ LoginComponent }​ from'./components/login/login.component';
import {​ ProfileComponent }​ from'./components/profile/profile.component';
import {​ ReservationComponent }​ from'./components/reservation/reservation.component';
import {​ SignupComponent }​ from'./components/signup/signup.component';


const routes: Routes = [
  {​ path: 'signup', component: SignupComponent }​,
  {​ path: 'login', component: LoginComponent }​,
  {​ path: 'profile', component: ProfileComponent }​,
  {​ path: 'home', component: HomeComponent }​,
  {​ path: 'reservation', component: ReservationComponent }​, 
  { path: '', redirectTo: '/home', pathMatch: 'full' },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
