<template lang="pug">
section.container-fluid
  .row.exchanges
      section.img-wrap.col-sm-12
        img.img-thumbnail.banner(src='../assets/images/vr1.png', alt='')
      section.img-wrap.section-2.col-sm-12
        .ex-left
          article.col-sm-6.col-xs-6
            .img-left
              span 6
              span 月份
              img(src='../assets/images/time_01.png', alt='')
            .img-body
              h3 VR动画的发展与趋势
              p 比赛开幕
              p VR动画的叙事方式
              p VR动画的发展趋势
              p VR动画的案例制作分享
              p SIGGRAPH Asia 10周年的大陆巡讲
          article.col-sm-6.col-xs-6
            .img-left
              span 9
              span 月份
              img(src='../assets/images/time_02.png', alt='')
            .img-body
              p VR动画的制作经验与分享
              p VR动画的制作分享
              p 如何开发、制作、发行VR动画
        .ex-right
          article.col-sm-6.col-xs-6
            .img-body
              h3 VR动画的渲染和合成
              p 如何渲染VR动画
              p VR动画的渲染合成
              p 如何提高VR动画的渲染质量和效率
            .img-left
              span 7
              span 月份
              img(src='../assets/images/time_03.png', alt='')
          article.col-sm-6.col-xs-6
            .img-body
              h3 VR/AR/MR的硬件解决方案
              p 眼镜的发展现状和趋势
              p 动态捕捉与VR的结合案例
              p 3D扫描技术与VR项目的结合案例
            .img-left
              span.last 10
              span 月份
              img(src='../assets/images/time_04.png', alt='')
      section.img-wrap.section-3.col-sm-12
        article.col-sm-12
          h2.font36.color333 赞助商
          div.padding
          a.vr-btn(href='mailto:vincenzo@rayvision.com') 成为赞助商
      
      section.img-wrap.col-sm-12.footer
        footer.sec5-bottom2
            .container
                .row.flex-item-center
                    .col-md-4.col-sm-4.col-xs-12
                        img(src="../assets/images/logo_sp.png")
                    .col-md-4.col-sm-4.col-xs-12.text-left
                        p.font18 联系我们
                        p.font16 0755-8277 0737
                        p.font16 vincenzo@rayvision.com
                    .col-md-4.col-sm-4.col-xs-12
                        .col-md-6.col-sm-6.col-xs-6.text-left
                            p.font18.title 联系我们
                            img.k_left(src="../assets/images/wechat.png")
                            p.font12.lastp 关注瑞云官方微信
                            p.font12 再送50渲染费
</template>
<style lang="scss" scoped>
@import '../assets/css/nav.css';
@import '../assets/css/kn.css';
.container-fluid{padding: 0;}
</style>

<script>
import _footer from '../components/footer'
export default {
    components:{
        _footer
    }
}
</script>
