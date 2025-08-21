import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'main',
      component: () => import('../views/main/IndexView.vue'),
    },

    {
      path: '/products',
      name: 'products.index',
      component: () => import('../views/product/IndexView.vue'),
    },
    {
      path: '/products/:id',
      name: 'products.show',
      component: () => import('../views/product/ShowView.vue'),
    },
    {
      path: '/cart',
      name: 'cart.index',
      component: () => import('../views/cart/IndexView.vue'),
    },
  ],
})

export default router
