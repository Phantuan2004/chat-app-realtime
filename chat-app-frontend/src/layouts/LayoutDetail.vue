<template>
  <div class="tyn-root">
    <component
      v-for="name in route.meta.componentsInRoot || []"
      :is="componentMap[name]"
      :key="name"
    />
    <router-view />
    <component
      v-for="name in route.meta.componentsChatorFooter || []"
      :is="componentMap[name]"
      :key="name"
    />
  </div>

  <component
    v-for="name in route.meta.componentsOutsideRoot || []"
    :is="componentMap[name]"
    :key="name"
  />
</template>

<script>
import Header from "@/components/Header.vue";
import Footer from "@/components/Footer.vue";
import ChatBox from "@/components/ChatBox.vue";
import ModalCall from "@/components/ModalCall.vue";
import ModalVideoCall from "@/components/ModalVideoCall.vue";
import ModalContact from "@/components/ModalContact.vue";
import ModalMuteOpt from "@/components/ModalMuteOpt.vue";
import ModalNewChat from "@/components/ModalNewChat.vue";
import ModalDeleteChat from "@/components/ModalDeleteChat.vue";

import { useRoute } from "vue-router";

export default {
  name: "LayoutDetail",
  setup() {
    const route = useRoute();

    const componentMap = {
      Header,
      Footer,
      ChatBox,
      ModalCall,
      ModalVideoCall,
      ModalContact,
      ModalMuteOpt,
      ModalNewChat,
      ModalDeleteChat
    };

    return { route, componentMap };
  },
};
</script>
