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
  {
    path: 'appointment-end',
    loadChildren: () => import('./pages/appointment-end/appointment-end.module').then( m => m.AppointmentEndPageModule)
  },
  {
    path: 'aid-center',
    loadChildren: () => import('./pages/aid-center/aid-center.module').then( m => m.AidCenterPageModule)
  },
  {
    path: 'get-direction',
    loadChildren: () => import('./pages/get-direction/get-direction.module').then( m => m.GetDirectionPageModule)
  },
  {
    path: 'blog-single',
    loadChildren: () => import('./pages/blog-single/blog-single.module').then( m => m.BlogSinglePageModule)
  },
  {
    path: 'all-blog',
    loadChildren: () => import('./pages/all-blog/all-blog.module').then( m => m.AllBlogPageModule)
  },
  {
    path: 'home',
    loadChildren: () => import('./pages/home/home.module').then( m => m.HomePageModule)
  },
  {
    path: 'chat-conversation',
    loadChildren: () => import('./pages/chat-conversation/chat-conversation.module').then( m => m.ChatConversationPageModule)
  },
  {
    path: 'calling1',
    loadChildren: () => import('./pages/calling1/calling1.module').then( m => m.Calling1PageModule)
  },
  {
    path: 'journal',
    loadChildren: () => import('./pages/journal/journal.module').then( m => m.JournalPageModule)
  },
  {
    path: 'journal-express',
    loadChildren: () => import('./pages/journal-express/journal-express.module').then( m => m.JournalExpressPageModule)
  },
  {
    path: 'journal-date-time',
    loadChildren: () => import('./pages/journal-date-time/journal-date-time.module').then( m => m.JournalDateTimePageModule)
  },
  {
    path: 'conversations',
    loadChildren: () => import('./pages/conversations/conversations.module').then( m => m.ConversationsPageModule)
  },
  {
    path: 'journal-select',
    loadChildren: () => import('./pages/journal-select/journal-select.module').then( m => m.JournalSelectPageModule)
  },
  {
    path: 'journal-done',
    loadChildren: () => import('./pages/journal-done/journal-done.module').then( m => m.JournalDonePageModule)
  },
  {
    path: 'journal-list',
    loadChildren: () => import('./pages/journal-list/journal-list.module').then( m => m.JournalListPageModule)
  },
  {
    path: 'journal-single',
    loadChildren: () => import('./pages/journal-single/journal-single.module').then( m => m.JournalSinglePageModule)
  },
  {
    path: 'all-audios',
    loadChildren: () => import('./pages/all-audios/all-audios.module').then( m => m.AllAudiosPageModule)
  },
  {
    path: 'all-videos',
    loadChildren: () => import('./pages/all-videos/all-videos.module').then( m => m.AllVideosPageModule)
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
