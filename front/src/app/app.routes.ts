import { ROUTES as BaseRoutes} from '../../../vendor/qeti/karika/front/src/app/app.routes';
import { ProductComponent } from './product';
import { RouteMerger } from '../../../vendor/qeti/karika/front/src/app/app.routes.merger';

var OverriddenRoutes = [
  { path: 'product', component: ProductComponent },
];

var Routes = RouteMerger.getInstance().merge(BaseRoutes, OverriddenRoutes);

export const ROUTES = Routes;