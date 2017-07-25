<template lang='pug'>
    div(:id='$style.app')
        _slider
        router-view(:class='$style.routerView')
        //- _footer
</template>

<script>
import _slider from '@/components/slider.vue'
import _footer from '@/components/footer.vue'
export default {
    name: 'app',
    components: { _slider, _footer }
}
</script>

<style lang='scss' module>
@import './assets/css/global.scss';
@import './assets/css/public.scss';
#app {
    @include flex($mainD: space-between, $crossD:space-between);
    .routerView {
        flex: 1;
    }
}
</style>
