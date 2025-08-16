<template lang="">
    <div>
        <div class="modal fade" tabindex="-1" id="muteOptions">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="modal-body p-4">
                    <h4 class="pb-2">Mute conversation</h4>
                    <ul class="tyn-media-list gap gap-2">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="muteFor" id="muteFor15min">
                                <label class="form-check-label" for="muteFor15min"> For 15 minutes </label>
                            </div>
                        </li><!-- li -->
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="muteFor" id="muteFor1Hour" checked>
                                <label class="form-check-label" for="muteFor1Hour"> For 1 Hours </label>
                            </div>
                        </li><!-- li -->
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="muteFor" id="muteFor1Days" checked>
                                <label class="form-check-label" for="muteFor1Days"> For 1 Days </label>
                            </div>
                        </li><!-- li -->
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="muteFor" id="muteForInfinity" checked>
                                <label class="form-check-label" for="muteForInfinity"> Until I turn back On </label>
                            </div>
                        </li><!-- li -->
                    </ul><!-- .tyn-media-list -->
                    <ul class="tyn-list-inline gap gap-3 pt-3">
                        <li>
                            <button class="btn btn-md btn-danger js-chat-mute">Mute</button>
                        </li>
                        <li>
                            <button class="btn btn-md btn-light" data-bs-dismiss="modal">Close</button>
                        </li>
                    </ul><!-- .tyn-list-inline -->
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
    name: 'ModalMuteOpt'
}
</script>
<style lang="">
    
</style>