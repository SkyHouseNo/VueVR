<template lang="pug">
mixin input1(val1,val2,val3)
    .col-sm-11.col-xs-12
        .col-sm-1.col-xs-4=val1
        .col-sm-8.col-xs-8
            input.form-control(type="text",:name=val2,v-model=val3)
mixin input(val1,val2,val3)
    .col-sm-11.col-xs-12
        .col-sm-1.col-xs-4=val1
        .col-sm-8.col-xs-8
            input.form-control(type="text",name=val2,v-model=val3)

section.container-fluid
    .row.production
        section.col-sm-12.team
            form.form-horizontal(onsubmit='return false')
                .form-group
                    router-link.pro-btn(:class=`{active:$route.name === 'personal'}`,:to=`{name:'personal'}`) 个人参赛
                    router-link.pro-btn(:class=`{active:$route.name === 'team'}`, :to=`{name:'team'}`) 团体参赛
                // 报名信息 start
                .form-group.team-info
                    h2.pro-title 领队信息
                    .col-sm-11.col-xs-12
                        .col-sm-1.col-xs-4 机构：
                        .col-sm-8.radio.col-xs-8
                            label
                                input(type="radio", name="local", value='0',checked="checked", v-model='request.local')
                                |  公司
                            label
                                input(type="radio", name="local", value='1', v-model='request.local')
                                |  学校
                    +input('姓名：','name',`request.name`)
                    +input('年龄：','age',`request.age`)
                    +input('联系电话：','phone',`request.phone`)
                    +input('电子邮箱：','email',`request.email`)
                    +input('作品名称：','workName',`request.workName`)
                    +input('云盘链接：','workLink',`request.workLink`)
                    .col-sm-11.col-xs-12.personal(v-if=`$route.name === 'team'`,v-for='(v,i) in items')
                        h3.pro-title
                            | 队员信息{{i+1}}
                            a.glyphicon.glyphicon-minus.del-right(v-on:click='del(i)')
                        +input1('姓名：',`'memberName[]'`,`v.name`)
                        +input1('联系电话：',`'memeberPhone[]'`,`v.tel`)
                        +input1('电子邮箱：',`'memberEmail[]'`,`v.email`)
                    .col-sm-11.col-xs-12(v-show=`$route.name === 'team'`)
                        .col-sm-1.col-xs-4  
                        .col-sm-8.col-xs-8.add-img(v-on:click='add')  
                    // 报名信息 end
                    .col-sm-11.col-xs-12
                        .col-sm-1.col-xs-4  
                        .col-sm-9.col-xs-8
                            .checkbox
                                label
                                    input(type="checkbox",checked,v-model='read')
                                    |  请确保你的作品没有以任何形式发布过
                .form-group.submit-wrap
                    button.vr-btn(@click='submit') 提交作品
        section.col-sm-12
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
<style lang="scss" scoped>
@import '../assets/css/nav.css';
@import '../assets/css/kn.css';
.container-fluid {
    padding: 0;
}

.personal {
    .col-sm-11,
    .col-xs-12 {
        margin-top: 10px;
    }
    margin: 20px 0 0 -15px;
}
</style>

<script>
import axios from 'axios';
export default {
    data: function () {
        return {
            items: [{
                name: '',
                tel: '',
                email: '',

            }],
            request: {
                local: ''
            },
            xhr: {},
            read:true,
        }
    },
    methods: {
        add() {
            let arr = [];
            this.count++;
            this.items.push({
                name: '',
                tel: '',
                email: ''
            });
        },
        del(idx) {
            this.items.splice(idx, 1)
        },
        getXhr() {
            // 声明XMLHttpRequest对象
            let xhr;
            // 根据不同浏览器创建
            if (window.XMLHttpRequest) {
                // 其他浏览器
                xhr = new XMLHttpRequest();
            } else {
                // IE浏览器(8及之前)
                xhr = new ActiveXObject("Microsoft.XMLHttp");
            }
            // 返回XMLHttpRequest对象
            return xhr;
        },
        checkRequest(request, rule) {
            if (request.local == '') {
                return rule.local;
            }

            let keys = Object.keys(request);
            for (let r in rule) {
                if (!keys.includes(r)) {
                    return rule[r]
                }
            }
            return false;
        },
        submit() {
            if (this.items) {
                this.request.member = JSON.stringify(this.items);
            }
            // 数据验证
            let rule = {
                local: '请选择机构',
                name: '姓名不能为空',
                age: '年龄不能为空',
                phone: '联系电话不能为空',
                email: '电子邮箱不能为空',
                workName: '作品名称不能为空',
                workLink: '云盘链接不能为空'
            }
            let note = this.checkRequest(this.request, rule)
            if (note) {
                alert(note)
                return false;
            }
            if(!this.read){
                alert('请确保你的作品没有以任何形式发布过');
                return false;  
            }
            // 参数准备
            let request = [];
            for (var i in this.request) {
                request.push(i + '=' + this.request[i])
            }
            let xhr = this.getXhr()
            xhr.open("post", "/addInfo.php", true);	//open() 提交url		
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(request.join('&'));
            xhr.onreadystatechange = function () {
                // 保证服务器端响应的数据发送完毕
                if (xhr.readyState == 4) {
                    // 保证这次请求必须是成功的
                    if (xhr.status == 200) {
                        // 接收服务器端的数据
                        var json = xhr.responseText;//获取数据 json格式的字符串
                        try {
                            var data = eval("(" + json + ")");//
                            if (data.info == 0) {
                                alert('添加成功')
                            } else {
                                alert('添加失败')
                            }
                        } catch (e) {
                            alert('添加失败')
                        }

                    }
                }
            }
            // axios.post('http://127.0.0.1:8082/test.php',this.request).then(console.log)
        }

    }
}
</script>

