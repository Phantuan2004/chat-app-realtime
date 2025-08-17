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

const routes = [
    {
        path: "/",
        component: LayoutDetail,
        children: [
            {
                path: '',
                name: 'index',
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
                    ]
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
                    ]
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
            }
        ]
    },

    {
        path: '/login',
        redirect : '/login',
        component: Login,
        meta: {
            componentsChatorFooter: [
                'ChatBox'
            ],
        }
    },

    {
        path: '/register',
        component: Register,
        meta: {
            componentsChatorFooter: [
                'ChatBox'
            ]
        }
    },
]

const router = createRouter({
  history: createWebHistory(),
  linkExactActiveClass: 'active',
  routes
});

export default router;