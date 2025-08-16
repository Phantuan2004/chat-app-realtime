<template>
  <router-view />
</template>
<script>
import {io} from "socket.io-client";

export default {
  data() {
    return {
      socket: null,
      message: "",
      messages: [],
    };
  },

  // created() {
  //   this.socket = io("http://localhost:3001");

  //   this.socket.on("receive_message", (data) => {
  //     this.messages.push(data);
  //   });
  // },

  methods: {
    sendMessage() {
      this.socket.emit("send_message", this.message);
      this.message = "";
    }
  },

  name: "App",
}
</script>
