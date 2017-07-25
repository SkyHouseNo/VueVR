<template lang="html">
<!--修改弹窗-->
<div class="pop-alert" id="pop" style="display:none">
    <div class="btbox"><a href="javascript:Func.popHide('#pop')" class="gb">x</a></div>
    <div class="cont clearfix">
        <p class="jx_inf">这是一个提示</p>
    </div>
    <div class="an_box">
        <a href="javascript:Func.popHide('#pop')" class="btn-comm-small btn-comm-white btn">确 认</a>
    </div>
</div>
</template>

<script>
export default {
    methods:{
        popShow:function(popBox) {
            var p=$(popBox);
            p.show();
            p.css({
                position: 'fixed',
                top: ($(window).height() - p.height()) / 2,
                left: ($(window).width() - p.width()) / 2,
                marginTop:0,
                marginLeft:0,
                zIndex: 1005
            });
            $('.pop-bg').show();
            $('<span class="pop-bg"></span>').appendTo("body");
        },
        popHide:function(popBox) {
            $(popBox).hide();
            $('.pop-bg').remove();
        }
    }
}
</script>

<style>
.pop-alert {
    width: 353px;
    height: 205px;
    border: 1px solid #d6d8d9;
    background: #f3f5f7;
    position: fixed;
    top: 50%;
    left: 50%;
    margin: -220px 0 0 -370px;
    outline: none;
    display: none;
    z-index: 999;
}

.pop-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.2);
    z-index: 998;
}

.btbox {
    height: 40px;
}

.btbox sp {
    font-size: 1.4em;
    font-weight: bold;
    color: #fff;
    line-height: 40px;
    margin-left: 10px;
}

.gb {
    width: 24px;
    height: 24px;
    display: inline;
    margin: 5px 5px 0 0;
    color: #909091;
    text-align: center;
    position: absolute;
    top: 0;
    right: 0;
}

.gb:hover {
    background-position: 0 -24px;
}

.cont {
    padding-top: 22px;
    text-align: center;
}

.cont img,
.cont p {
    display: inline-block;
    margin: 0 8px;
    vertical-align: top;
}

.cont p {
    text-align: left;
    color: #999;
    min-height: 80px;
}

.jx_inf {
    line-height: 20px;
    font-size: 14px;
    text-align: center;
}

.jx_inf span {
    color: #00fb76;
}

.an_box {
    text-align: center;
    height: 32px;
}

.an_box a {
    width: 100px;
    height: 32px;
    display: inline-block;
    font-weight: bold;
    background: #3898fe;
    color: #fff;
    text-align: center;
    line-height: 32px;
    font-size: 14px;
    border-radius: 4px;
}

.an_box a:hover {
    background-color: #58a9ff;
}
</style>


