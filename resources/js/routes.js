import ProductsIndex from './components/ProductsIndexComponent.vue';
import ProductsCreate from './components/ProductsCreateComponent.vue';
import OrdersIndex from './components/OrdersIndexComponent.vue';
import OrdersCreate from './components/OrdersCreateComponent.vue';

export const routes = [
    {
        name: 'productsindex',
        path: '/products',
        component: ProductsIndex
    },
    {
        name: 'productadd',
        path: '/product/add',
        component: ProductsCreate
    },
    {
        name: 'ordersindex',
        path: '/orders',
        component: OrdersIndex
    },
    {
        name: 'orderadd',
        path: '/order/add',
        component: OrdersCreate
    }
];
