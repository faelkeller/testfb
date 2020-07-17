import ProductsIndex from './components/ProductsIndexComponent.vue';
import ProductCreate from './components/ProductsCreateComponent.vue';
import OrdersIndex from './components/OrdersIndexComponent.vue';

export const routes = [
    {
        name: 'productsindex',
        path: '/products',
        component: ProductsIndex
    },
    {
        name: 'productadd',
        path: '/product/add',
        component: ProductCreate
    },
    {
        name: 'ordersindex',
        path: '/orders',
        component: OrdersIndex
    }
];
