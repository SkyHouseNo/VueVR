<template lang="pug">

mixin lists(names,to,route)
    each val,idx in names
        li(:class=`[{[$style.active]:'${route[idx]}'.includes($route.name)}, $style.listItem]`)
            router-link(:class='$style.listItemText', :to=`{name:'${to[idx]}'}`)=val

mixin lists1(names)
    each val in names
        li(:class='$style.addressItemText')=val

nav(:class='$style.container')
    div(:class='$style.navHead')
        a(:class='$style.navLink' href='/')
            img(:class='$style.logo' src='../assets/images/vr_logo.png')
    ul(:class='$style.list')
        +lists(['首页','作品提交','大赛交流会','关于比赛','关于我们'],
                ['home','workUpload','exchange','aboutCompletition','aboutUs'],
                ['home',['personal','team'],'exchange','aboutCompletition','aboutUs'])
    ul(:class='$style.address')
        +lists1(['联系我们','0755-8277 0737','vincenzo@rayvision.com','©2017 深圳市瑞云科技有限公司','粤ICP12028569号-3'])
</template>
<script>
export default {

}
</script>
<style lang="scss" module>
@import '../assets/css/public.scss';
@mixin border ($color:$themeDarkBlue, $direction:border) {
    $direction: solid 1px $color;
}

.container {
    @include flex($flow: column, $mainD:flex-start);
    position: fixed;
    z-index: 9999;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: center;
    width: 210px;
    background: $themeDarkestBlue;
    height: 100vh;
    margin-left: 70px;
    .navHead {
        @include flex;
        height: 60px;
        width: 100%;
        background: $themeDarkBlue;
    }
    .list {
        width: 100%;
    }
    .listItem {
        @include flex; // @include border;
        border: solid 1px $themeDarkBlue;
        border-bottom: 0;
        height: 60px;
        color: $themeBlue;
        font-size: 16px;
        &:hover {
            background: $themeHoverBlue;
            color: $themeWhite;
        }
        &:last-child {
            border-bottom: solid 1px $themeDarkBlue;
        }
    }
    .active {
        background: $themeHoverBlue;
        color: $themeWhite;
    }
    .address{
        position: absolute;
        bottom: 40px;
        left:0;
        width: 100%;
        .addressItemText{
            text-align: center;
            width: 100%;
            color:#6e97cf;
            font: 400 12px/20px "HiraginoSansGB-W3";
            &:nth-last-of-type(2) {
                color: #585a6f;
                font-family: 'Microsoft YaHei';
                margin-top: 10px;
            }
            &:last-child {
                color: #585a6f;
                font-family: 'Microsoft YaHei';
            }
        }
    }
}
</style>

