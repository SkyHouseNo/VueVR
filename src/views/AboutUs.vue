<template lang='pug'>
.aboutUsPage.container-fluid
    section.parts.part1
        .container
            .row.flex-item-left
                img(src="../assets/images/logo_acm.png")
                .right.font17.color777
                    h2.font36.color333 ACM SIGGRAPH简介
                    p.padding-bottom-20
                        | Shenzhen ACM SIGGRAPH Chapter是为促进中国大陆计算机图形学及互动技术的开发和应用发展的兴趣者学会，于2014年6月经美国ACM SIGGRAPH授权创办，由深圳市微光创意技术有限公司承办具体事务。本学会是一个非营利组织，目标是为培育良好的CG行业生态圈贡献一分力量，我们的业务包括：
                    p 提供全球同步的技术研发成果、数字艺术创作、软硬件产品等资讯；
                    p 推动包括专业人士、学者和科研机构的交流与合作；
                    p 定期举办国际学术和行业交流会、专业比赛、专业课程等；
                    p 促进国际交流，为本地企业走向世界提供桥梁作用；
                    p 协助每年的SIGGRAPH大会和SIGGRAPH亚洲大会的宣传与参展；
                    p 欢迎参与我们的活动一起推动深圳以及中国CG行业的发展！
    section.parts.part2
        .container
            .row.flex-item-left
                img(src="../assets/images/logo_ray.png")
                .right.font17.color777
                    h2.font36.color333 Rayvision瑞云简介
                    p.padding-bottom-20
                        | 深圳市瑞云科技有限公司是一家专注于研究集群渲染，为全球电脑动画、电影特效、电视动画片、建筑设计表现、城市规划、游戏片头动画和商业广告行业提供云端渲染计算服务的互联网科技公司，是中国“自助式云渲染”的开创者、阿里云视觉云计算全球战略合作伙伴，同时也是全球最大的渲染农场之一，旗下品牌Renderbus是中国起步最早、规模最大、用户数量最多的云渲染平台。
                    p
                        | 瑞云渲染自推出运营以来，以基于专利技术的云渲染系统以及专业的TD服务团队获得了业界的一致好评，瑞云的技术团队大多来自好莱坞顶尖制作公司。采用瑞云渲染的客户包括世界顶级动画电影制作工作室、特效工作室以及国内大部分主流动画制作公司，来自世界40个国家和地区，其中还包括两位奥斯卡奖得主。瑞云拥有着一支年轻国际化的团队，成员来自美国、新加坡、印度、中国台湾、中国香港等各地精英，我们的TD团队拥有顶尖CG制作公司的从业经验。我们在CG渲染优化、高性能计算方面投入了大量的研究资源，力求于为全球的CG工作室提供强大而经济易用的渲染服务。
                    p
                        | 为了对国内外的CG工作室提供一致性的服务，2014年，瑞云科技在国内品牌Renderbus和其海外姐妹品牌FoxRenderfarm的基础上，推出全新的全球统一品牌“RAYVISION”，瑞云将为全球用户提供更加优质、稳定、一致的云渲染服务。
    section.parts.part3
        .container
            .row.text-center
                h2.font36.color333 赞助商
                //- img.zanzu_img(src="../assets/images/home_sponsoe.png")
                a.zanzuBtn(href='mailto:vincenzo@rayvision.com') 成为赞助商

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
                    .col-md-6.col-sm-6.col-xs-6
                        p.font18.title 联系我们
                        img(src="../assets/images/wechat.png")
                        p.font12.lastp 关注瑞云官方微信
                        p.font12 再送50渲染费
         


</template>
<script>
export default {

}
</script>
<style lang="scss" scoped>
@import '../assets/css/nav.css';
@import '../assets/css/kn.css';
.container-fluid{padding: 0;}
</style>

