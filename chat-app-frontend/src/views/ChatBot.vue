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
                            <li><a class="btn btn-icon btn-light btn-md btn-pill" href="chat-bot-welcome.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                    </svg><!-- plus-lg -->
                                </a></li>
                        </ul>
                    </div><!-- .tyn-aside-head-tools -->
                </div><!-- .tyn-aside-head -->
                <div class="tyn-aside-body" data-simplebar>
                    <ul class="tyn-aside-list">
                        <li class="tyn-aside-item tyn-aside-item-bubbly  js-toggle-main active">
                            <div class="tyn-media-group">
                                <div class="tyn-media tyn-size-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-quote-fill" viewBox="0 0 16 16">
                                        <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M7.194 6.766a1.7 1.7 0 0 0-.227-.272 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.5 2.5 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.5 2.5 0 0 0-.228-.4 1.7 1.7 0 0 0-.227-.273 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
                                    </svg><!-- chat-quote-fill -->
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="content">what can you do for me ?</div>
                                </div><!-- .tyn-media-col -->
                                <div class="tyn-media-option">
                                    <ul class="tyn-media-option-list">
                                        <li>
                                            <button class="btn btn-icon btn-md btn-pill btn-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                </svg><!-- trash -->
                                            </button>
                                        </li>
                                    </ul>
                                </div><!-- .tyn-media-option -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- .tyn-aside-item -->
                        <li class="tyn-aside-item tyn-aside-item-bubbly  js-toggle-main">
                            <div class="tyn-media-group">
                                <div class="tyn-media tyn-size-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-quote-fill" viewBox="0 0 16 16">
                                        <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M7.194 6.766a1.7 1.7 0 0 0-.227-.272 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.5 2.5 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.5 2.5 0 0 0-.228-.4 1.7 1.7 0 0 0-.227-.273 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
                                    </svg><!-- chat-quote-fill -->
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="content">write me short joke for web development tutorial starting.</div>
                                </div><!-- .tyn-media-col -->
                                <div class="tyn-media-option">
                                    <ul class="tyn-media-option-list">
                                        <li>
                                            <button class="btn btn-icon btn-md btn-pill btn-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                </svg><!-- trash -->
                                            </button>
                                        </li>
                                    </ul>
                                </div><!-- .tyn-media-option -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- .tyn-aside-item -->
                        <li class="tyn-aside-item tyn-aside-item-bubbly  js-toggle-main">
                            <div class="tyn-media-group">
                                <div class="tyn-media tyn-size-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-quote-fill" viewBox="0 0 16 16">
                                        <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M7.194 6.766a1.7 1.7 0 0 0-.227-.272 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.5 2.5 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.5 2.5 0 0 0-.228-.4 1.7 1.7 0 0 0-.227-.273 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
                                    </svg><!-- chat-quote-fill -->
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="content">top 10 most used css triks.</div>
                                </div><!-- .tyn-media-col -->
                                <div class="tyn-media-option">
                                    <ul class="tyn-media-option-list">
                                        <li>
                                            <button class="btn btn-icon btn-md btn-pill btn-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                </svg><!-- trash -->
                                            </button>
                                        </li>
                                    </ul>
                                </div><!-- .tyn-media-option -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- .tyn-aside-item -->
                        <li class="tyn-aside-item tyn-aside-item-bubbly  js-toggle-main">
                            <div class="tyn-media-group">
                                <div class="tyn-media tyn-size-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-quote-fill" viewBox="0 0 16 16">
                                        <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M7.194 6.766a1.7 1.7 0 0 0-.227-.272 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.5 2.5 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.5 2.5 0 0 0-.228-.4 1.7 1.7 0 0 0-.227-.273 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
                                    </svg><!-- chat-quote-fill -->
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="content">easy way to join faang</div>
                                </div><!-- .tyn-media-col -->
                                <div class="tyn-media-option">
                                    <ul class="tyn-media-option-list">
                                        <li>
                                            <button class="btn btn-icon btn-md btn-pill btn-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                </svg><!-- trash -->
                                            </button>
                                        </li>
                                    </ul>
                                </div><!-- .tyn-media-option -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- .tyn-aside-item -->
                        <li class="tyn-aside-item tyn-aside-item-bubbly  js-toggle-main">
                            <div class="tyn-media-group">
                                <div class="tyn-media tyn-size-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-quote-fill" viewBox="0 0 16 16">
                                        <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M7.194 6.766a1.7 1.7 0 0 0-.227-.272 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.5 2.5 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.5 2.5 0 0 0-.228-.4 1.7 1.7 0 0 0-.227-.273 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
                                    </svg><!-- chat-quote-fill -->
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="content">how to learn fornty end web development</div>
                                </div><!-- .tyn-media-col -->
                                <div class="tyn-media-option">
                                    <ul class="tyn-media-option-list">
                                        <li>
                                            <button class="btn btn-icon btn-md btn-pill btn-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                </svg><!-- trash -->
                                            </button>
                                        </li>
                                    </ul>
                                </div><!-- .tyn-media-option -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- .tyn-aside-item -->
                        <li class="tyn-aside-item tyn-aside-item-bubbly  js-toggle-main">
                            <div class="tyn-media-group">
                                <div class="tyn-media tyn-size-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-quote-fill" viewBox="0 0 16 16">
                                        <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M7.194 6.766a1.7 1.7 0 0 0-.227-.272 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.5 2.5 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.5 2.5 0 0 0-.228-.4 1.7 1.7 0 0 0-.227-.273 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
                                    </svg><!-- chat-quote-fill -->
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="content">Could you write a basic chapter 1 tutorial for JavaScript for me ?</div>
                                </div><!-- .tyn-media-col -->
                                <div class="tyn-media-option">
                                    <ul class="tyn-media-option-list">
                                        <li>
                                            <button class="btn btn-icon btn-md btn-pill btn-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                </svg><!-- trash -->
                                            </button>
                                        </li>
                                    </ul>
                                </div><!-- .tyn-media-option -->
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
                            </li><!-- .col -->
                            <li class="col-6">
                                <button class="btn btn-light tyn-size-lg w-100 flex-column py-2 pt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                    </svg><!-- trash -->
                                    <span class="small text-nowrap mt-n1">Clear Archive</span>
                                </button>
                            </li><!-- .col -->
                        </ul><!-- .row -->
                    </div><!-- w-100 -->
                </div><!-- .tyn-aside-head -->
            </div><!-- .tyn-aside -->
            <div class="tyn-main" id="tynMain">
                <ul class="tyn-list-inline d-md-none translate-middle-x position-absolute start-50 z-1">
                    <li>
                        <button class="btn btn-icon btn-pill btn-white js-toggle-main">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                            </svg><!-- x-lg -->
                        </button>
                    </li>
                </ul><!-- .tyn-list-inline -->
                <div class="tyn-chat-body my-4 px-4 js-scroll-to-end" id="tynBotBody">
                    <div class="container px-0">
                        <div class="tyn-qa tyn-qa-bubbly" id="tynBotReply">
                            <div class="tyn-qa-item">
                                <div class="tyn-qa-avatar">
                                    <div class="tyn-media tyn-size-md">
                                        <img src="/images/avatar/1.jpg" alt="">
                                    </div><!-- .tyn-media -->
                                </div><!-- .tyn-qa-avatar -->
                                <div class="tyn-qa-message tyn-text-block"> what can you do for me ? </div><!-- .tyn-qa-message -->
                            </div><!-- .tyn-qa-item -->
                            <div class="tyn-qa-item">
                                <div class="tyn-qa-avatar">
                                    <div class="tyn-qa-avatar-wrap">
                                        <div class="tyn-media tyn-size-md">
                                            <img src="/images/avatar/bot-1.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <ul class="d-flex flex-column mt-2">
                                            <li>
                                                <button class="btn btn-icon btn-md btn-pill btn-transparent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                                    </svg><!-- hand-thumbs-up-fill -->
                                                </button>
                                            </li>
                                            <li>
                                                <button class="btn btn-icon btn-md btn-pill btn-transparent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                                        <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856s-.036.586-.113.856c-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a10 10 0 0 1-.443-.05 9.36 9.36 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a9 9 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581s-.027-.414-.075-.581c-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.2 2.2 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.9.9 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1" />
                                                    </svg><!-- hand-thumbs-down -->
                                                </button>
                                            </li>
                                        </ul><!-- ul -->
                                    </div><!-- .tyn-qa-avatar-wrap -->
                                </div><!-- .tyn-qa-avatar -->
                                <div class="tyn-qa-message tyn-text-block">
                                    <p>As an AI language model, I can help you in a variety of ways. Here are some examples:</p>
                                    <ol>
                                        <li>Answer questions: I can answer your questions about a wide range of topics, including science, history, geography, math, and more.</li>
                                        <li>Provide information: I can provide you with information on a particular topic, such as the definition of a word, the history of an event, or the current status of a situation.</li>
                                        <li>Generate text: I can generate text for you, such as an essay, a report, or a summary of a particular topic.</li>
                                        <li>Help with language: If English is not your first language, I can help you improve your writing or speaking skills by suggesting ways to improve your grammar, syntax, and vocabulary.</li>
                                        <li>Assist with research: If you're working on a research project, I can help you find relevant information and sources to support your work.</li>
                                        <li>Engage in conversation: I can engage in conversation with you on a variety of topics and help you explore different ideas and perspectives.</li>
                                    </ol>
                                    <p>Overall, my goal is to assist you in any way that I can using my knowledge and abilities as an AI language model.</p>
                                </div><!-- .tyn-qa-message -->
                            </div><!-- .tyn-qa-item -->
                            <div class="tyn-qa-item">
                                <div class="tyn-qa-avatar">
                                    <div class="tyn-media tyn-size-md">
                                        <img src="/images/avatar/1.jpg" alt="">
                                    </div><!-- .tyn-media -->
                                </div><!-- .tyn-qa-avatar -->
                                <div class="tyn-qa-message tyn-text-block"> ok, write me short joke for web development tutorial starting. </div><!-- .tyn-qa-message -->
                            </div><!-- .tyn-qa-item -->
                            <div class="tyn-qa-item">
                                <div class="tyn-qa-avatar">
                                    <div class="tyn-qa-avatar-wrap">
                                        <div class="tyn-media tyn-size-md">
                                            <img src="/images/avatar/bot-1.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <ul class="d-flex flex-column mt-2">
                                            <li>
                                                <button class="btn btn-icon btn-md btn-pill btn-transparent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                                    </svg><!-- hand-thumbs-up-fill -->
                                                </button>
                                            </li>
                                            <li>
                                                <button class="btn btn-icon btn-md btn-pill btn-transparent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                                        <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856s-.036.586-.113.856c-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a10 10 0 0 1-.443-.05 9.36 9.36 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a9 9 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581s-.027-.414-.075-.581c-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.2 2.2 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.9.9 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1" />
                                                    </svg><!-- hand-thumbs-down -->
                                                </button>
                                            </li>
                                        </ul><!-- ul -->
                                    </div><!-- .tyn-qa-avatar-wrap -->
                                </div><!-- .tyn-qa-avatar -->
                                <div class="tyn-qa-message tyn-text-block">
                                    <p>Sure, here's a short joke for a web development tutorial starting:</p>
                                    <p>Why was the web developer always cold? <br> Because he left his Windows open!</p>
                                </div><!-- .tyn-qa-message -->
                            </div><!-- .tyn-qa-item -->
                            <div class="tyn-qa-item">
                                <div class="tyn-qa-avatar">
                                    <div class="tyn-media tyn-size-md">
                                        <img src="/images/avatar/1.jpg" alt="">
                                    </div><!-- .tyn-media -->
                                </div><!-- .tyn-qa-avatar -->
                                <div class="tyn-qa-message tyn-text-block"> Could you write a basic chapter 1 tutorial for JavaScript for me ? </div><!-- .tyn-qa-message -->
                            </div><!-- .tyn-qa-item -->
                            <div class="tyn-qa-item">
                                <div class="tyn-qa-avatar">
                                    <div class="tyn-qa-avatar-wrap">
                                        <div class="tyn-media tyn-size-md">
                                            <img src="/images/avatar/bot-1.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <ul class="d-flex flex-column mt-2">
                                            <li>
                                                <button class="btn btn-icon btn-md btn-pill btn-transparent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                                    </svg><!-- hand-thumbs-up-fill -->
                                                </button>
                                            </li>
                                            <li>
                                                <button class="btn btn-icon btn-md btn-pill btn-transparent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                                        <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856s-.036.586-.113.856c-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a10 10 0 0 1-.443-.05 9.36 9.36 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a9 9 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581s-.027-.414-.075-.581c-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.2 2.2 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.9.9 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1" />
                                                    </svg><!-- hand-thumbs-down -->
                                                </button>
                                            </li>
                                        </ul><!-- ul -->
                                    </div><!-- .tyn-qa-avatar-wrap -->
                                </div><!-- .tyn-qa-avatar -->
                                <div class="tyn-qa-message tyn-text-block">
                                    <p>Chapter 1: Getting Started with JavaScript and CSS</p>
                                    <p>JavaScript and CSS are two essential technologies for building modern web applications. In this chapter, we will cover the basics of JavaScript and CSS, including data types, variables, and control structures, as well as an example of how to use JavaScript and CSS together.</p>
                                    <p>1.1 Data Types</p>
                                    <p>JavaScript supports several data types, including numbers, strings, booleans, null, and undefined. Here are some examples:</p>
                                    <ul>
                                        <li>Numbers: 42, 3.14, -7</li>
                                        <li>Strings: "hello", 'world', "123"</li>
                                        <li>Booleans: true, false</li>
                                        <li>Null: null</li>
                                        <li>Undefined: undefined</li>
                                    </ul>
                                    <p>To declare a variable in JavaScript, you can use the "var" keyword, followed by the variable name and an optional initial value. Here's an example:</p>
                                    <div class="tyn-code-block">
                                        <h6 class="tyn-code-block-title tyn-overline">Javascript</h6>
                                        <button data-clipboard-target="#js-tuts-01" class="tyn-copy">Copy</button>
                                        <pre><code class="language-js" id="js-tuts-01">var myNumber = 42;
var myString = "hello";
var myBoolean = true;
var myNull = null;
var myUndefined = undefined;
</code></pre>
                                    </div>
                                    <p>1.2 Operators</p>
                                    <p>JavaScript supports several operators for performing arithmetic, comparison, and logical operations. Here are some examples:</p>
                                    <ul>
                                        <li>Arithmetic operators: +, -, *, /, %</li>
                                        <li>Comparison operators: ==, !=, ===, !==, <,>, <=,>=</li>
                                        <li>Logical operators: &&, ||, !</li>
                                    </ul>
                                    <div class="tyn-code-block">
                                        <h6 class="tyn-code-block-title tyn-overline">Javascript</h6>
                                        <button data-clipboard-target="#js-tuts-02" class="tyn-copy">Copy</button>
                                        <pre><code class="language-js" id="js-tuts-02">var x = 10;
var y = 5;
var z = x + y; // 15
var a = x > y; // true
var b = x == y; // false
var c = !b; // true
</code></pre>
                                    </div>
                                    <p>1.3 Control Structures</p>
                                    <p>JavaScript supports several control structures for controlling the flow of your program. These include if/else statements, loops, and switch statements. Here are some examples:</p>
                                    <ul>
                                        <li>If/else statements:</li>
                                    </ul>
                                    <div class="tyn-code-block">
                                        <h6 class="tyn-code-block-title tyn-overline">Javascript</h6>
                                        <button data-clipboard-target="#js-tuts-03" class="tyn-copy">Copy</button>
                                        <pre><code class="language-js" id="js-tuts-03">var age = 18;
if (age >= 18) {
  console.log("You are an adult.");
} else {
  console.log("You are a minor.");
}
</code></pre>
                                    </div>
                                    <ul>
                                        <li>Loops:</li>
                                    </ul>
                                    <div class="tyn-code-block">
                                        <h6 class="tyn-code-block-title tyn-overline">Javascript</h6>
                                        <button data-clipboard-target="#js-tuts-04" class="tyn-copy">Copy</button>
                                        <pre><code class="language-js" id="js-tuts-04">for (var i = 0; i < 10; i++) {
  console.log(i);
}
</code></pre>
                                    </div>
                                    <ul>
                                        <li>Switch statements:</li>
                                    </ul>
                                    <div class="tyn-code-block">
                                        <h6 class="tyn-code-block-title tyn-overline">Javascript</h6>
                                        <button data-clipboard-target="#js-tuts-05" class="tyn-copy">Copy</button>
                                        <pre><code class="language-js" id="js-tuts-05">var fruit = "banana";
switch (fruit) {
  case "apple":
    console.log("This is an apple.");
    break;
  case "banana":
    console.log("This is a banana.");
    break;
  default:
    console.log("I don't know what fruit this is.");
}
</code></pre>
                                    </div>
                                    <p>1.4 Example: Changing CSS with JavaScript</p>
                                    <p>One useful application of JavaScript is to dynamically modify the CSS of a webpage. Here's an example of how to use JavaScript to change the color of a paragraph element when a button is clicked:</p>
                                    <div class="tyn-code-block">
                                        <h6 class="tyn-code-block-title tyn-overline">HTML</h6>
                                        <button data-clipboard-target="#js-tuts-06" class="tyn-copy">Copy</button>
                                        <pre><code class="language-html" id="js-tuts-06">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;style&gt;
    p {
      color: blue;
    }
  &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

  &lt;p id=&quot;myParagraph&quot;&gt;This is a paragraph.&lt;/p&gt;
  
  &lt;button onclick=&quot;changeColor()&quot;&gt;Change Color&lt;/button&gt;

  &lt;script&gt;
    function changeColor() {
      var paragraph = document.getElementById(&quot;myParagraph&quot;);
      paragraph.style.color = &quot;red&quot;;
    }
  &lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
                                    </div>
                                    <p>In this example, we use JavaScript to find the paragraph element with the ID "myParagraph" and change its color to red when the button is clicked. We do this by setting the "color" property of the paragraph's style object.</p>
                                    <p>In this chapter, we covered the basics of JavaScript and CSS, including data types, variables, operators, and control structures, as well as an example of how to use JavaScript and CSS</p>
                                </div><!-- .tyn-qa-message -->
                            </div><!-- .tyn-qa-item -->
                        </div><!-- .tyn-qa -->
                    </div><!-- .container -->
                </div><!-- .tyn-chat-body -->
                <div class="tyn-chat-form border-0 px-4">
                    <div class="container px-0">
                        <div class="ps-3 pe-4 py-3 bg-white mb-4 rounded-3">
                            <div class="tyn-chat-form-enter">
                                <div class="tyn-chat-form-input" id="tynBotInput" placeholder="text" contenteditable></div>
                                <ul class="tyn-list-inline me-n2 my-1">
                                    <li><button class="btn btn-icon btn-white btn-md btn-pill" id="tynBotSend">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                                            </svg><!-- send-fill -->
                                        </button></li>
                                </ul>
                            </div><!-- .tyn-chat-form-enter -->
                        </div>
                    </div><!-- .container -->
                </div><!-- .tyn-chat-form -->
            </div><!-- .tyn-main -->
        </div><!-- .tyn-content -->
    </div>
</template>
<script>
export default {
    name: 'ChatBot',
}
</script>
<style lang="">
    
</style>