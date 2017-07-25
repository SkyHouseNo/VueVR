<template lang='pug'>
        .main.indexPage
                #downbook
                    .section.section1
                        .container
                            .row
                                .part1-bottom.flex-justify-center
                                    button.submitBtn
                                        | 提交作品
                                p.flex-justify-center
                                    span.bottom-p 大赛日期：2017/03/16-2017/10/31
                    .section.section2
                        .container
                            .row
                                .part2-container
                                    h2.font36.color333 关于“中国国际VR动画短片大赛”
                                    p.font16.color777
                                        | 随着VR技术的逐步成熟，许多传统领域开始与VR技术相结合。美国已逐步开始实现动画和实拍电影VR化，即我们常说的VR动画和VR电影。今年的洛杉矶SIGGRAPH大会上就设置了其历史上第一个VR影院，其动画节上也首次开设了VR动画短片竞赛栏目。ACM SIGGRAPH深圳分会为了更好地推动深圳本地乃至全国的VR动画片发展，促进国内动画产业与世界接轨，将于2017年6月1日至2017年10月31日携手瑞云科技举办第一届VR动画短片大赛。本次大赛将由活跃在国际VR界的ACM SIGGRPAH专家担任评委，期间将举办精彩的交流会，参赛者及VR动画爱好者、从业者将与全球业内精英齐聚一堂，共襄盛举。
                                button.detailBtn
                                    | 提交作品
                    .section.section4
                        .sec4-con
                            .container
                                .row
                                    h2.font36.colorfff 大赛评委
                                    .sec4-container
                                        .top.col-md-12.col-sm-12.col-xs-12
                                            mixin judge-top(name,group,position,src)
                                                .col-md-4.col-sm-4.col-xs-4
                                                    p.font24.name=name
                                                    p.font14=group
                                                    p.font14=position
                                                    div.line
                                                    img(src=src)
                                            +judge-top('Nicolas Gonzalez','Deloitte技术顾问','2015 Real Time Live主席','../assets/images/time_01.png')
                                            +judge-top('Leonard Daly','洛杉矶ACM SIGGRAPH','分会会长','../assets/images/time_01.png')
                                            +judge-top('Benjamin Cheung','瑞云科技副总，曾任职于迪士尼、梦工厂','卢卡斯、索尼等好莱坞电影公司','../assets/images/home_ben.png')
                                        .bottom.flex-center
                                            mixin judge-bottom(name,group,position,src)
                                                .sec4-list
                                                    img(src=src)
                                                    div.line
                                                    p.font24.name=name
                                                    p.font14=group
                                                    p.font14=position
                                            +judge-bottom('Lionel Chok','Immersively新加坡&吉隆坡','分公司VR/创意技术人员','../assets/images/lion.png')
                                            +judge-bottom('Bobby Beck','曾任职皮克斯','Animation Mentor创始人之一','../assets/images/time_01.png')
                                            +judge-bottom('Chaosgroup','V-Ray VR实验室','','../assets/images/time_01.png')
                                            +judge-bottom('Michael Liang','丝路视觉合伙人，SIGGRAPH Asia','2016 Feature Sessions主席','../assets/images/home_michael.png')
                                        .detailBtn
                                            | 查看详情
                    .section.section5
                        .sec5-1280
                            .container
                                .row
                                    h2.font36.color333 赞助商
                                    a.zanzuBtn(href='mailto:vincenzo@rayvision.com') 成为赞助商
                                    .flex-center.padding-bottom-20
                                        span.span1 主办单位：Shenzhen ACM SIGGRAPH Chapte
                                        span.span2 承办单位：深圳市瑞云科技有限公司
                                        span 协办单位：SIGGRAPH Asia 2017
                        .sec5-bottom
                            .container
                                .row
                                    h3.font24.text-center  合作媒体 
                                    a.zanzuBtn.smaller(href='mailto:vincenzo@rayvision.com') 成为合作媒体
                                .row    
                                    h3.font24.text-center  合作院校 
                                    a.zanzuBtn.smaller(href='mailto:vincenzo@rayvision.com') 成为合作院校
                                    
                        footer.sec5-bottom2
                            .container
                                .row.flex-item-center
                                    .col-md-4.col-sm-4.col-xs-12
                                        img(src="../assets/images/logo_sp.png")
                                    .col-md-4.col-sm-4.col-xs-12.text-left
                                        p.font18 联系我们
                                        p.font16 0755-8277 0737
                                        p.font16 vincenzo@rayvision.com
                                    .col-md-4.col-sm-4.col-xs-12.text-left
                                        .col-md-6.col-sm-6.col-xs-6
                                            p.font18.title 联系我们
                                            img(src="../assets/images/wechat.png")
                                            p.font12.lastp 关注瑞云官方微信
                                            p.font12 再送50渲染费
                ul#menu
                    li.active(data-menuanchor="page1")
                        a(href="#page1")
                    li(data-menuanchor="page2")
                        a(href="#page2")
                    li(data-menuanchor="page4")
                        a(href="#page4")
                    li(data-menuanchor="page5")
                        a(href="#page5")

</template>
<script>
import $ from 'jquery'
import '../vendor/jquery.fullpage.js'

// import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.min.js'

export default {
    methods: {
        fullpage() {
            $(() => {
                $('#downbook').fullpage({
                    sectionsColor: ['#1bbc9b', '#f3faff', '#18d1c0', '#fff'],
                    continuousVertical: true,
                    anchors: ['page1', 'page2', 'page4', 'page5'],
                    loopBottom:true,
                    menu: '#menu'
                })
                $(window).resize(function () {
                    autoScrolling()
                })

                function autoScrolling() {
                    var $ww = $(window).width()
                    if ($ww < 1024) {
                        $.fn.fullpage.setAutoScrolling(false)
                    } else {
                        $.fn.fullpage.setAutoScrolling(true)
                    }
                }
                autoScrolling()
            })
        }
    },
    mounted() {
        this.fullpage()
    },  

    beforeRouteLeave(to, from, next) {
        $.fn.fullpage.destroy();
        next()
    }
}
</script>
<style lang="scss" scoped>
@import '../assets/css/nav.css';
@import '../assets/css/nav-1280.css';
@import '../vendor/jquery.fullpage.min.css';
</style>
