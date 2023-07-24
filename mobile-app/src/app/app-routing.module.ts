import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: 'intro',
    loadChildren: () => import('./pages/intro/intro.module').then( m => m.IntroPageModule)
  },
  {
    path: '',
    redirectTo: 'intro',
    pathMatch: 'full'
  },
  {
    path: 'login',
    loadChildren: () => import('./pages/login/login.module').then( m => m.LoginPageModule)
  },
  {
    path: 'verify-identity',
    loadChildren: () => import('./pages/verify-identity/verify-identity.module').then( m => m.VerifyIdentityPageModule)
  },
  {
    path: 'resend-code',
    loadChildren: () => import('./pages/resend-code/resend-code.module').then( m => m.ResendCodePageModule)
  },
  {
    path: 'forget-password',
    loadChildren: () => import('./pages/forget-password/forget-password.module').then( m => m.ForgetPasswordPageModule)
  },
  {
    path: 'update-password',
    loadChildren: () => import('./pages/update-password/update-password.module').then( m => m.UpdatePasswordPageModule)
  },
  {
    path: 'mood-tracker',
    loadChildren: () => import('./pages/mood-tracker/mood-tracker.module').then( m => m.MoodTrackerPageModule)
  },
  {
    path: 'questions',
    loadChildren: () => import('./pages/questions/questions.module').then( m => m.QuestionsPageModule)
  },
  {
    path: 'questions-end',
    loadChildren: () => import('./pages/questions-end/questions-end.module').then( m => m.QuestionsEndPageModule)
  },
  {
    path: 'report',
    loadChildren: () => import('./pages/report/report.module').then( m => m.ReportPageModule)
  },
  {
    path: 'select-doctor',
    loadChildren: () => import('./pages/select-doctor/select-doctor.module').then( m => m.SelectDoctorPageModule)
  },
  {
    path: 'doctor',
    loadChildren: () => import('./pages/doctor/doctor.module').then( m => m.DoctorPageModule)
  },
  {
    path: 'appointment',
    loadChildren: () => import('./pages/appointment/appointment.module').then( m => m.AppointmentPageModule)
  },
  {
    path: 'appointment',
    loadChildren: () => import('./pages/appointment/appointment.module').then( m => m.AppointmentPageModule)
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
