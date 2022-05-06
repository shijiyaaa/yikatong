


<?php require './passwd.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>表单填写与审批::加载中</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="-1"/>
    <meta name="keywords" content="InfoPlus">
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta itemscope="csrfToken" content="MsJtv47gyL3dnh2ZU4IIyZQQGssvN8iI">
    <meta name="theme-color" content="#039be5">
    <!-- disable phone number link in mobile safari -->
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" href="http://service.qziedu.cn/infoplus/static/img/favicon.png"/>

    <link href="http://service.qziedu.cn/infoplus/static/css/infoplus.css?v=20200828-002044" rel="stylesheet"/>
    <link href="http://service.qziedu.cn/infoplus/static/css/mobile.css?v=20200828-002044" rel="stylesheet"/>
    <link href="http://service.qziedu.cn/infoplus/static/themes/default/desktop/css/theme.css?v=20200828-002044" rel="stylesheet"/>
    <link href="http://service.qziedu.cn/infoplus/static/themes/default/mobile/css/theme.css?v=20200828-002044" rel="stylesheet"/>
    <link href="http://service.qziedu.cn/infoplus/static/themes/standard-mobile/mobile/css/theme.css?v=20200828-002044" rel="stylesheet"/>
    <script type="text/javascript">
        var initGlobalVariable = function () {
            $$.PRINT = false;
            $$.VIEWS_ONLY = false;

            $$.MOBILE = true;

        };

        var switchView = function () {
            $("#div_loader_progress").animate({height: "0", opacity: 0.5}, 200, function () {
                $("#div_loader").hide();
                $("#div_render_container").show();

                //触发全局表单可见事件，这里可以处理和表单中元素的高度、可见等相关的代码
                $$.visible();
            });
        };
    </script>
</head>
<body>
<div id="help_content"></div>
<div id="div_loader" style="display:none">
    <div id="div_loader_content">
        <div id="div_loader_text">
            <span class="content">正在加载样式和脚本库</span>
        </div>
        <div id="div_loader_progress">
            <div id="div_loader_progress_percent"></div>
        </div>
    </div>
</div><div id="form_do_action_dialog" style="display:none;">
    <div id="form_do_action_message_description" style="display:none;"></div>
    <div id="form_do_action_show_remark" class="clearfix"></div>
    <div id="form_do_action_remark_div">
        <div id="form_do_action_remark_tip" style="margin-bottom:2px"></div>
        <textarea id="form_do_action_remark" rows="5"></textarea>
    </div>
    <div id="form_do_action_next_steps">
        <div id="form_do_action_show_next_steps" class="clearfix">
            <span class="form_do_action_info ui-icon ui-icon-info"></span>
            <span class="form_do_action_next_steps"></span>
        </div>
        <ul id="form_do_action_user_list"></ul>
    </div>
    <div style="height:10px"><a id="linkPrint" href="#" target="_blank"></a></div>
</div>


<div id="div_render_container">
    <form id="renderForm">
        <div id="div_content" class="div_content">
            <div id="header_holder">
                <div id="title_holder"></div>
                <!-- 1.form command bar -->
                <div id="command_holder">
                    <div class="clear"></div>
                    <ul id="form_command_bar"></ul>
                </div>
            </div>
            <div id="renderContent_holder">
                <div id="form_milestone_holder" class="form_milestone_holder" style="display: none;visibility: hidden">
                    <div class="form_milestone_holder_wrap_outer shadow round-corner">
                        <div class="form_milestone_holder_wrap_inner">
                            <ul class="form_milestone_view"></ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!-- 2.the holder for form renderer -->
                <div id="render_holder">
                    <div id="form_holder"></div>
                </div>
                <!-- 5.the holder for form remark renderer -->
                <div id="form_remark_holder" class="form_remark_holder shadow round-corner" align="center"></div>
            </div>

        </div>
    </form>
</div>
<script language="JavaScript">
    //如果发现在iframe里面就加载iframe.css，主要解决jquery的offset计算错误的问题
    if (self !== top) {
        var link = document.createElement('link');
        link.setAttribute("rel", "stylesheet");
        link.setAttribute("type", "text/css");
        link.setAttribute("href", "http://service.qziedu.cn/infoplus/static/css/iframe.css?v=20200828-002044");
        document.getElementsByTagName("head")[0].appendChild(link);
    }
</script>

<script type="text/javascript" src="http://service.qziedu.cn/infoplus/static/js/lib/lib.js?v=20200828-002044"></script>
<script type="text/javascript" src="http://service.qziedu.cn/infoplus/static/js/lang_zh.js?v=20200828-002044"></script>
<script type="text/javascript">
    var googleAnalysis = function () {

    };



    var entrusts = {"entrustee":{"account":"<?php echo $_GET['xh'];?>","email":"","phone":"(+86)<?php echo $_GET['brsj'];?>","title":"","memberships":{"":{"id":"<?php echo $_GET['xh'];?>","name":"<?php echo $_GET['xh'];?>","memberId":"<?php echo $_GET['xh'];?>","domain":"qziedu.cn"}},"id":"77078e28-0418-11ec-a843-cab13165ecfc","name":"<?php echo $_GET['xm'];?>"},"entrusted":false};



    var progressFlag = null;

    //判断是否是移动端APP请求
    var isMobileApp = function () {
        return navigator.userAgent.match(/TaskCenterApp/);
    };

    var progress = function (content, percent, targetPercent, waitMillisecond) {

        if (isMobileApp()) {
            return;
        }

        var showPercent = function (p, waitingTimes) {
            $("#div_loader_progress_percent").css("right", (100 - p) + "%");
            var $loaderTextDiv = $("#div_loader_text");
            var $loaderText = $loaderTextDiv.children(".content");
            $loaderTextDiv.children(".waiting").remove();
            $loaderText.text(content + "(" + p + "%)");

            if (waitingTimes != null) {
                //超过3秒再显示请耐心等待
                var waitingString = waitingTimes > 60 ? '请耐心等待' : '';
                for (var i = 0, len = Math.floor(waitingTimes / 3) % 6; i < len; i++) {
                    waitingString += '.';
                }
                if ($loaderTextDiv.children(".waiting").length == 0) {
                    var span = document.createElement("span");
                    $(span).addClass("waiting").text(waitingString);
                    $loaderTextDiv.append(span);
                } else {
                    $loaderTextDiv.children(".waiting").text(waitingString);
                }
            }

            var $loader = $("#div_loader");
            if (!$loader.is(":visible")) {
                $loader.show();
            }

        };

        if (progressFlag != null) {
            clearInterval(progressFlag);
        }

        showPercent(percent);

        if (targetPercent != null) {
            var frames = 20,
                currentPercent = percent,
                percentStep = (targetPercent - percent) / frames,
                waitingTimes = 0;
            var wait = waitMillisecond == null ? 1000 : waitMillisecond;

            progressFlag = setInterval(function () {
                currentPercent += percentStep;
                currentPercent = Math.floor(currentPercent);
                if (currentPercent > targetPercent) {
                    waitingTimes++;
                    //showPercent(targetPercent, waitingTimes);
                    showPercent(targetPercent);
                } else {
                    showPercent(currentPercent);
                }

            }, wait / frames)
        }
    };

    var loadFormError = function () {
        if (progressFlag != null) {
            clearInterval(progressFlag);
        }

        var title = "加载流程失败",
            $loaderTextDiv = $("#div_loader_text"),
            $loaderText = $loaderTextDiv.children(".content");
        $loaderTextDiv.children(".waiting").remove();
        $loaderText.text(title);
        $("#div_loader_progress_percent").css("right", "0").css("background-color", "red");
    };

    var workflowId, formStepId, instanceId;

    formStepId = 361416;
    instanceId = "";
    workflowId = null;


    var instanceView = false;

    var adminView = false;



    var transformer = null;


    var setInitRemarkWidth = function () {
        //非移动版初始时候设置历史宽度）
        if (!$$.MOBILE) {
            var flag = setInterval(function () {
                var width = $("#render_holder")[0].clientWidth;
                if (width > 0) {
                    //不设置宽度的话，如果历史备注比较长会撑大整个DIV
                    //如果全部的view都是自动宽度，那么remarkholder宽度设成100%，不需要这里再设置了
                    if (!$$.params.allAutoWidth) {
                        $$.params.holder.remark.css("width", width + "px");
                    } else {
                        $$.params.holder.remark.css("width", "100%");
                    }
                    clearInterval(flag);
                    $$.params.currentWidth = width;
                    $$.resize(width);
                }
            }, 100);

        }
    };

    var startLoad = function () {

        transformer.load().done(function () {

            setInitRemarkWidth();
            transformer.registerGlobalEvents();

            //渲染完毕
            progress($$.lt("load.finish"), 100);

            //如果是被嵌入在移动app中，那么调用webViewInterface函数
            if (isMobileApp()) {
                if (window['webViewInterface'] !== undefined && window['webViewInterface']['loaded'] !== undefined) {
                    try {
                        webViewInterface.loaded();
                    } catch (ignore) {
                    }
                }
            }

            setTimeout(switchView, 0);



            //触发ready事件
            $$.ready();

            googleAnalysis();

        });
    };

    var startPreview = function () {
        var previewConfig = {
            app: {

                iconUrl: "http://service.qziedu.cn/infoplus/static/img/default_workflow_icon.png",

                iconPalette: "",
                name: "",
                department: "",
                contact: "",
                rating:0,
                rated:0
            },
            release: "",
            idc: "",

            clear:false,

            startable: false
        };

        transformer.preview(previewConfig).done(function () {
            //渲染完毕
            /*
            if (!$$.MOBILE) {
                setInitRemarkWidth();
            } else {
                $$.resize($(window).width());
            }
            */
            setInitRemarkWidth();
            transformer.registerGlobalEvents();


            //如果是被嵌入在移动app中，那么调用webViewInterface函数
            if (isMobileApp()) {
                if (window['webViewInterface'] !== undefined && window['webViewInterface']['loaded'] !== undefined) {
                    try {
                        webViewInterface.loaded();
                    } catch (ignore) {
                    }
                }
            }

            setTimeout(switchView, 0);

            //触发ready事件
            $$.ready();

            googleAnalysis();
        });
    };

    var loadTransformer = function () {

        initGlobalVariable();

        if ($$.MOBILE) {
            var width = $(window).width();
            if (width > 0) {
                $("#form_remark_holder").css("width", width + "px");
                $("#form_holder").css("width", width + "px");
            }
        }

        var $commandHolder = $("#command_holder");

        transformer = new InfoPlus.Transformer({
            formStepId: formStepId,
            instanceId: instanceId,
            workflowId: workflowId,
            instanceView: instanceView,
            adminView: adminView,

            userId: "77078e28-0418-11ec-a843-cab13165ecfc",
            account: "<?php echo $_GET['xh'];?>",
            tenantId: "ae889aa0-81cd-4237-ba15-2f431b7115ca",
            tenantDomain: "qziedu.cn",
            synthesizeEmail:false,
            tenantTimeZoneOffset: 28800,
            tenantReadOnlyStyle: "Label",
            lang: "zh",

            entrusts: entrusts,

            url_print: "http://service.qziedu.cn/infoplus/form/361416/print",
            url_download_pdf: "http://service.qziedu.cn/infoplus/form/361416/export.pdf",
            url_download_word: "http://service.qziedu.cn/infoplus/form/361416/export.docx",

            url_reLogin: "http://service.qziedu.cn/infoplus/form/reLogin",
            lib_ckeditor: "http://service.qziedu.cn/infoplus/static/js/lib/ck/ckeditor.js",

            interface_render: "api/render.php<?php echo '?'.$_SERVER["QUERY_STRING"];?>",
            interface_preview: "http://service.qziedu.cn/infoplus/interface/preview",
            interface_start: "http://service.qziedu.cn/infoplus/interface/start",
            interface_list_remarks: "api/progress.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>",
            interface_list_next_steps: "http://service.qziedu.cn/infoplus/interface/listNextStepsUsers",
            interface_do_action: "http://service.qziedu.cn/infoplus/interface/doAction",
            interface_withdraw: "http://service.qziedu.cn/infoplus/interface/withdraw",
            interface_kill: "http://service.qziedu.cn/infoplus/interface/kill",
            interface_delete_attachment: "http://service.qziedu.cn/infoplus/interface/deleteAttachment",
            interface_save: "http://service.qziedu.cn/infoplus/interface/save",
            interface_fieldChange: "http://service.qziedu.cn/infoplus/interface/fieldChanging",
            interface_buttonClick: "http://service.qziedu.cn/infoplus/interface/fieldChanging",
            interface_suggest: "http://service.qziedu.cn/infoplus/interface/suggest",
            interface_suggestInitialize: "http://service.qziedu.cn/infoplus/interface/suggestInitialize",
            interface_thing: "http://service.qziedu.cn/infoplus/interface/thing",
            interface_printInvoice: "",

            interface_entrust: "http://service.qziedu.cn/infoplus/interface/entrust",
            interface_users: "http://service.qziedu.cn/infoplus/interface/suggest",
            interface_compare: "http://service.qziedu.cn/infoplus/interface/data",
            interface_ckUploadImage: "http://service.qziedu.cn/infoplus/interface/ckUploadImage",
            interface_changePriority: "http://service.qziedu.cn/infoplus/interface/priority",
            interface_attachment: "http://service.qziedu.cn/infoplus/interface/attachment",
            interface_attachmentToken: "http://service.qziedu.cn/infoplus/interface/attachmentToken",
            interface_graphql: "http://service.qziedu.cn/infoplus/interface/graphql",

            copyright: '<span class="copyright">&copy;</span> 2009 - 2020. 泉州信息工程学院(qziedu.cn), All rights reserved. Version 20200828-002044',

            base_url: '/infoplus/'

        });

        //transformer.registerGlobalEvents();


        //参数上要求弹出委托对话框或者不存在委托(调试)人情况下，显示委托选人对话框
        if (transformer.entrust === "true" && !(transformer.entrusts != null && transformer.entrusts.entruster != null)) {
            $IU.chooseEntrust(transformer.entrusts, null, ($$.PREVIEW ? startPreview : startLoad), transformer.interface_entrust);
        } else {
            if ($$.PREVIEW) {
                startPreview();
            } else {
                startLoad();
            }
        }

    };

    //var __file__ = null;
    var loadScriptCallback = function () {
        loadTransformer();
    };



    $(document).ready(function () {

        if (entrusts.entruster == null) {
            progress(InfoPlus.Language.load.loadPage, 0, 20, 1000);
        }

        loadScript();

    });

</script>

<script type="text/javascript">
    var loadScript = function () {

        var jsFiles;

        jsFiles = [
            [
                "http://service.qziedu.cn/infoplus/static/js/Release/render.min.js?v=20200828-002044"
            ]
        ];

        jsFiles.push([
            "http://service.qziedu.cn/infoplus/static/themes/default/mobile/js/mobile.js?v=20200828-002044",
        ]);

        jsFiles.push([
            "http://service.qziedu.cn/infoplus/static/themes/standard-mobile/mobile/js/render/mobile.js?v=20200828-002044",
        ]);

        loadScriptSeq(jsFiles, loadScriptCallback);



    };
</script>
<div id="div_invoice"></div>
<iframe id="alive" src="http://service.qziedu.cn/infoplus/alive" style="display: none; border:0">unsupported.</iframe>
</body>
</html>

