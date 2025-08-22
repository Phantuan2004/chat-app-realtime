import {createRouter, createWebHistory} from "vue-router";
import LayoutDetail from "../layouts/LayoutDetail.vue";
import ChatBot from "../views/ChatBot.vue";
import ChatBotNew from "../views/ChatBotNew.vue";
import ChatBotWelcome from "../views/ChatBotWelcome.vue";
import Contacts from "../views/Contacts.vue";
import Faq from "../views/Faq.vue";
import Forgot from "../views/Forgot.vue";
import Index from "../views/Index.vue";
import Login from "../views/Login.vue";
import Pricing from "../views/Pricing.vue";
import Profile from "../views/Profile.vue";
import Register from "../views/Register.vue";
import Stories from "../views/Stories.vue";
import { getCurrentUser } from '../services/auth/authService';

const routes = [
  {
    path: '/',
    redirect: () => localStorage.getItem('access_token') ? '/home' : '/login'
  },
  {
          path: "/",
          component: LayoutDetail,
          children: [
              {
                  path: 'home',
                  name: 'home',
                  component: Index,
                  meta: {
                      componentsInRoot: [
                          'Header'
                      ],
                      componentsChatorFooter: [
                          'ChatBox'
                      ],
                      componentsOutsideRoot: [
                          'ModalCall',
                          'ModalVideoCall',
                          'ModalMuteOpt',
                          'ModalNewChat',
                          'ModalDeleteChat',
                      ],
                      requiresAuth: true
                  }
              },
  
              {
                  path: 'chat-bot-new',
                  name: 'chat-bot-new',
                  component: ChatBotNew,
                  meta: {
                      componentsInRoot: [
                          'Header'
                      ]
                  }
              },
  
              {
                  path: 'chat-bot',
                  name: 'chat-bot',
                  component: ChatBot,
                  meta: {
                      componentsInRoot: [
                          'Header'
                      ]
                  }
              },
  
              {
                  path: 'chat-bot-welcome',
                  name: 'chat-bot-welcome',
                  component: ChatBotWelcome,
                  meta: {
                      componentsInRoot: [
                          'Header'
                      ],
                      componentsChatorFooter: [
                          'Footer',
                          'ChatBox'
                      ]
                  }
              },
  
              {
                  path: 'contacts',
                  name: 'contacts',
                  component: Contacts,
                  meta: {
                      componentsInRoot: [
                          'Header'
                      ],
                      componentsChatorFooter: [
                          'ChatBox'
                      ],
                      componentsOutsideRoot: [
                          'ModalCall',
                          'ModalVideoCall',
                          'ModalContact'
                      ]
                  }
              },
  
              {
                  path: 'faq',
                  name: 'faq',
                  component: Faq,
                  meta: {
                      componentsInRoot: [
                          'Header'
                      ],
                      componentsChatorFooter: [
                          'Footer',
                          'ChatBox'
                      ]
                  }
              },
  
              {
                  path: 'forgot',
                  name: 'forgot',
                  component: Forgot,
                  meta: {
                      componentsChatorFooter: [
                          'ChatBox'
                      ]
                  }
              },
  
              {
                  path: 'pricing',
                  name: 'pricing',
                  component: Pricing,
                  meta: {
                      componentsInRoot: [
                          'Header'
                      ],
                      componentsChatorFooter: [
                          'Footer',
                          'ChatBox'
                      ]
                  }
              },
  
              {
                  path: 'profile',
                  name: 'profile',
                  component: Profile,
                  meta: {
                      componentsInRoot: [
                          'Header'
                      ],
                      componentsChatorFooter: [
                          'ChatBox'
                      ],
                      componentsOutsideRoot: [
                          'ModalCall',
                          'ModalVideoCall',
                          'ModalContact'
                      ],
                      requiresAuth: true
                  }
              },
  
              {
                  path: 'stories',
                  name: 'stories',
                  component: Stories,
                  meta: {
                      componentsInRoot: [
                          'Header'
                      ],
                      componentsChatorFooter: [
                          'ChatBox'
                      ]
                  }
              },

              {
                  path: '/login',
                  component: Login,
              },
          
              {
                  path: '/register',
                  component: Register,
              },
          ]
      },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
  linkExactActiveClass: 'active',
});

// Helper verify token + get user
async function verifyToken() {
  const token = localStorage.getItem('access_token');
  if (!token) return false;
  try {
    await getCurrentUser(); // get user from API
    return true;
  } catch (err) {
    if (err.response?.status === 401) {
      localStorage.removeItem('access_token');
      localStorage.removeItem('refresh_token');
    }
    return false;
  }
}

// Router guard
router.beforeEach(async (to, from, next) => {
  const isAuth = await verifyToken();

  if (to.meta.requiresAuth && !isAuth) return next('/login');
  if ((to.path === '/login' || to.path === '/register') && isAuth) return next('/home');

  next();
});

export default router;
