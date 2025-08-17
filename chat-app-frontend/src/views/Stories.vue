<template lang="">
    <div>
        <div class="tyn-content tyn-stories tyn-stories-page has-aside-sticky">
            <div class="tyn-aside tyn-aside-sticky">
                <div class="tyn-aside-head">
                    <div class="tyn-aside-head-text">
                        <h3 class="tyn-aside-title tyn-title">Stories</h3>
                        <span class="tyn-subtext">{{ story_length }} Unseen stories</span>
                    </div><!-- .tyn-aside-head -->
                    <div class="tyn-aside-head-tools">
                        <ul class="tyn-list-inline gap gap-3">
                            <li><button class="btn btn-icon btn-light btn-md btn-pill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                    </svg><!-- plus-lg -->
                                </button></li>
                        </ul>
                    </div><!-- .tyn-aside-head-tools -->
                </div><!-- .tyn-aside-head -->
                <div class="tyn-aside-body" data-simplebar>
                    <div class="tyn-aside-row pt-0">
                        <div class="tyn-stories-thumb swiper swiper-slider">
                            <div class="swiper-wrapper">
                                <div v-for="story in stories" :key="story.id" class="swiper-slide">
                                    <img :src="`/images/stories/${story.img}`" class="tyn-image" alt="">
                                </div>
                            </div><!-- .swiper-wrapper -->
                        </div><!-- .tyn-stories-thumb -->
                    </div><!-- .tyn-aside-row -->
                </div><!-- .tyn-aside-body -->
            </div><!-- .tyn-aside -->
            <div class="tyn-content-inner d-flex align-items-center">
                <div class="tyn-stories-wrap">
                    <div class="tyn-stories-slider swiper swiper-slider">
                        <div class="swiper-wrapper">
                            <div v-for="story in stories" :key="story.id" class="swiper-slide">
                                <div class="tyn-stories-item">
                                    <img :src="`/images/stories/${story.img}`" class="tyn-image" alt="">
                                    <div class="tyn-stories-content">
                                        <h5 class="tyn-stories-title text-white">{{ story.title }}</h5>
                                        <p class="text-white">{{ story.tags.join(', ') }}</p>
                                    </div>
                                </div><!-- .tyn-stories-item -->
                            </div><!-- .swiper-slide -->
                        </div><!-- .swiper-wrapper -->
                        <div class="swiper-pagination"></div><!-- .swiper-pagination -->
                    </div><!-- .tyn-stories-slider -->
                </div><!-- .tyn-stories-wrap -->
            </div><!-- .tyn-content-inner -->
        </div><!-- .tyn-content -->
    </div>
</template>
<script>
import stories from "../data/stories/index"

export default {
    name: "Stories",
    data() {
        return {
            stories: stories,
            story_length: stories.filter(story => !story.seen).length
        }
    },
}
</script>