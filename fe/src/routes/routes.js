import config from '../config';

//Layouts

import Home from '../views/blogs/Blog';
import Login from '../views/login/Login';
import Register from '../views/register/Register';
import LuckyNumberToday from '../views/luckyNumberToday/LuckyNumberToday';

const publicRoutes = [
    { path: config.routes.blog, component: Home },
    { path: config.routes.login, component: Login },
    { path: config.routes.register, component: Register },
    { path: config.routes.luckyNumberToday, component: LuckyNumberToday },
];

const privateRoutes = [];

export { publicRoutes, privateRoutes };