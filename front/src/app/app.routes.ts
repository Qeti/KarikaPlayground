import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from '../../../vendor/qeti/karika/front/src/app/home';
import { AboutComponent } from '../../../vendor/qeti/karika/front/src/app/about';
import { ProductComponent } from './product';
import { NoContentComponent } from '../../../vendor/qeti/karika/front/src/app/no-content';

import { DataResolver } from '../../../vendor/qeti/karika/front/src/app/app.resolver';


export const ROUTES: Routes = [
  { path: '',      component: HomeComponent },
  { path: 'home',  component: HomeComponent },
  { path: 'about', component: AboutComponent },
  { path: 'product', component: ProductComponent },
  {
    path: 'detail', loadChildren: () => System.import('../../../vendor/qeti/karika/front/src/app/+detail/index').then((comp: any) => {
      return comp.default;
    })
    ,
  },
  { path: '**',    component: NoContentComponent },
];
