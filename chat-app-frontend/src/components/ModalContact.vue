<template lang="">
    <div>
        <div class="modal fade" tabindex="-1" id="addContact">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="modal-body p-4">
                    <h4 class="pb-2">Search by UserName</h4>
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <div class="form-control-icon start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg><!-- search -->
                            </div>
                            <input type="text" class="form-control form-control-solid" id="search-username" placeholder="Enter username">
                        </div>
                    </div><!-- .form-group -->
                    <ul class="tyn-media-list gap gap-3 pt-4">
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="/images/avatar/1.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Jasmine Thompson</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@thompson_jasmine</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                            </svg><!-- person-plus-fill -->
                                        </button>
                                    </li>
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="/images/avatar/2.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Konstantin Frank</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@konstantin_frank</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                            </svg><!-- person-plus-fill -->
                                        </button>
                                    </li>
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="/images/avatar/3.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Mathias Devos</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@mathias_devos</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                            </svg><!-- person-plus-fill -->
                                        </button>
                                    </li>
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="/images/avatar/4.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Marie George</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@marie_george</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                            </svg><!-- person-plus-fill -->
                                        </button>
                                    </li>
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="/images/avatar/5.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Phillip Burke</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@phillip_burke</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                            </svg><!-- person-plus-fill -->
                                        </button>
                                    </li>
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                    </ul><!-- .tyn-media-list -->
                </div><!-- .modal-body -->
                <button class="btn btn-md btn-icon btn-pill btn-white shadow position-absolute top-0 end-0 mt-n3 me-n3" data-bs-dismiss="modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg><!-- x-lg -->
                </button><!-- modal-close -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    </div>
</template>
<script>
export default {
    name: 'ModalContact',
}
</script>
<style lang="">
    
</style>