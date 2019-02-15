var swiper = new Swiper('.swiper-container',
    {
        //        pagination: '.swiper-pagination',
        //        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true,
        autoplay : 8000,
        speed:500,
        lazyLoading: true,
        autoHeight: true,
        autoplayDisableOnInteraction: false
    }
);

$(document).ready(function () {
    $('#player1').click(function(){
        $(this).trigger('play');
        $(this).trigger('pause');
    });

    $('#player2').click(function(){
        $(this).trigger('play');
        $(this).trigger('pause');
    });

    $('.am-close').click(function(){
        $('#player1').trigger('pause');
        $('#player2').trigger('pause');
    })
});

//form validation
$("#formSubmit").submit(function(){
    //alert("submitting...");
    var $name = $('input[name="name"]').val();
    var $tel = $('input[name="tel"]').val();
    var $content = $('textarea[name="content"]').val();

    var str = "";
    str += '  名字：';
    str += $name;
    str += '  手机号：';
    str += $tel;
    str += '  法律咨询：';
    str += $content;
//        alert(str);
    $('input[name="dizhi"]').val(str);
//        alert($('input[name="dizhi"]').val());

    if( $name == "" || $tel =="" ){
        alert('请填写相应信息！');
        return false;
    }
    else if (!$tel.match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/) ) {
        alert('请正确填写您的手机号');
        $("this").focus().select();
        return false;
    }
});


//baidu codes
// var _hmt = _hmt || []; (function() { var hm = document.createElement("script"); hm.src = "https://hm.baidu.com/hm.js?7705e9a0099666098aa67d7b57b53aff"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s); })();
// //baidu codes
// document.write('<script type="text/javascript"  data-lxb-uid="5537560" data-lxb-gid="" src="http://lxbjs.baidu.com/api/asset/api.js?t=' + new Date().getTime() + '" charset="utf-8"><\/script>' );
//
//
// document.getElementById("cbBtn").onclick = function () {
//     lxb.call(document.getElementById("vtel"));
// };