<template lang="">
    <div>
        <div class="tyn-content tyn-content-full-height tyn-chatbot tyn-chatbot-page has-aside-base">
            <div class="tyn-aside tyn-aside-base">
                <div class="tyn-aside-head">
                    <div class="tyn-aside-head-text">
                        <h3 class="tyn-aside-title tyn-title">Chat Archive</h3>
                        <span class="tyn-subtext">200+ Conversations </span>
                    </div><!-- .tyn-aside-head-text -->
                    <div class="tyn-aside-head-tools">
                        <ul class="tyn-list-inline gap gap-3">
                            <li><a class="btn btn-icon btn-light btn-md btn-pill" href="chat-bot-new.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                    </svg><!-- plus-lg -->
                                </a></li>
                        </ul>
                    </div><!-- .tyn-aside-head-tools -->
                </div><!-- .tyn-aside-head -->
                <div class="tyn-aside-body" data-simplebar>
                    <ul class="tyn-aside-list">
                        <li class="tyn-aside-item js-toggle-main active">
                            <div class="tyn-media-group">
                                <div class="tyn-media tyn-size-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
                                        <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1m0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1m0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1" />
                                    </svg><!-- chat-right-text-fill -->
                                </div>
                                <div class="tyn-media-col">
                                    <div class="content">new chat</div>
                                </div>
                            </div><!-- .tyn-media-group -->
                        </li><!-- .tyn-aside-item -->
                    </ul><!-- .tyn-aside-list -->
                </div><!-- .tyn-aside-body -->
                <div class="tyn-aside-foot">
                    <div class="w-100">
                        <ul class="row gx-3">
                            <li class="col-6">
                                <a href="pricing.html" class="btn btn-light tyn-size-lg w-100 flex-column py-2 pt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-up" viewBox="0 0 16 16">
                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                        <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                    </svg><!-- person-up -->
                                    <span class="small text-nowrap mt-n1">Become Pro</span>
                                </a>
                            </li><!-- li -->
                            <li class="col-6">
                                <button class="btn btn-light tyn-size-lg w-100 flex-column py-2 pt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                    </svg><!-- trash -->
                                    <span class="small text-nowrap mt-n1">Clear Archive</span>
                                </button>
                            </li><!-- li -->
                        </ul><!-- ul -->
                    </div><!-- w-100 -->
                </div><!-- .tyn-aside-foot -->
            </div><!-- .tyn-aside -->
            <div class="tyn-main tyn-main-boxed tyn-main-boxed-lg main-shown" id="tynMain">
                <ul class="tyn-list-inline d-md-none translate-middle-x position-absolute start-50 z-1">
                    <li>
                        <button class="btn btn-icon btn-pill btn-white js-toggle-main">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                            </svg><!-- x-lg -->
                        </button>
                    </li>
                </ul><!-- .tyn-list-inline -->
                <div class="tyn-chat-body m-4 rounded-3" id="tynBotBody">
                </div><!-- .tyn-chat-body -->
                <div class="tyn-chat-form border-0 ps-3 pe-4 py-3 bg-white mb-4 mx-4 rounded-3">
                    <div class="tyn-chat-form-enter">
                        <div class="tyn-chat-form-input" id="tynBotInput" placeholder="text" contenteditable></div>
                        <ul class="tyn-list-inline me-n2 my-1">
                            <li><button id="tynBotSend" class="btn btn-icon btn-white btn-md btn-pill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                                    </svg><!-- send-fill -->
                                </button></li>
                        </ul><!-- .tyn-list-inline -->
                    </div><!-- .tyn-chat-form-enter -->
                </div><!-- .tyn-chat-form -->
            </div><!-- .tyn-main -->
        </div><!-- .tyn-content -->
    </div>
</template>
<script>
export default {
    name: 'ChatBotNew',
}
</script>
<style lang="">
    
</style>