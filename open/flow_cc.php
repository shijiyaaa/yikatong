<?php require './passwd.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>泉州信息工程学院</title>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1970 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />


    <link rel="stylesheet" href="http://service.qziedu.cn/taskcenter/resources/common/css/font-awesome.min.css?_v=20220406-081725" />
    <link rel="stylesheet" href="http://service.qziedu.cn/taskcenter/resources/common/css/jquery.gritter.css?_v=20220406-081725" />
    <link rel="stylesheet" href="http://service.qziedu.cn/taskcenter/resources/common/css/jstarbox.css?_v=20220406-081725" />
    <link rel="stylesheet" href="http://service.qziedu.cn/taskcenter/resources/common/css/rateit.css?_v=20220406-081725" />


    <link rel="stylesheet" href="http://service.qziedu.cn/taskcenter/resources/common/css/bootstrap.min.css?_v=20220406-081725"  />
    <!-- ace styles -->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="http://service.qziedu.cn/taskcenter/resources/common/css/ace-part2.min.css?_v=20220406-081725" />
    <link rel="stylesheet" href="http://service.qziedu.cn/taskcenter/resources/common/css/ace-ie.min.css?_v=20220406-081725" />
    <![endif]-->

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="http://service.qziedu.cn/taskcenter/resources/common/css/ace-ie8.min.css?_v=20220406-081725" />
    <![endif]-->

    <link rel="stylesheet" href="http://service.qziedu.cn/taskcenter/resources/qziedu/default/css/wechat.css?_v=20220406-081725" />

    <!-- basic scripts -->
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/json2.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.min.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.timestamp.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/layer/layer.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.noty.packaged.min.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.fly.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery-migrate-1.2.0.min.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.placeholder.min.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.cookie.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/bootstrap.min.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/bootbox.min.js?_v=20220406-081725"></script>

    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.gritter.min.js?_v=20220406-081725"></script>

    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/underscore-min.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/backbone-min.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/backbone.fetch-cache.min.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jstarbox.js?_v=20220406-081725"></script>

    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.rateit.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.scrollLoading.min.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/TouchSlide.1.1.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.tinycarousel.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.paging.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.easy-paging.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.easy-pie-chart.min.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.SuperSlide.2.1.js?_v=20220406-081725"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lte IE 8]>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/html5shiv.js?_v=20220406-081725"></script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/respond.min.js?_v=20220406-081725"></script>
    <![endif]-->
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery-textoverflow.js?_v=20220406-081725"></script>

    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/base/public.js?_v=20220406-081725"></script>


    <script>
        Global = {
            contentpath : "",
            bodyHeight : $('body').height(),
            cacheTime : 6000,
            debugModal: false,
            CSRFToken: "543067aa-c372-45ab-a8e1-c7bde0fca5e1",
            resourceUrl: "http://service.qziedu.cn/taskcenter/resources/qziedu/default",
            resSys: "http://service.qziedu.cn/taskcenter/resources/common",
            userId:"77078e28-0418-11ec-a843-cab13165ecfc",
            loginName: "<?php echo $_GET['xm'];?>",
            membership: "",
            deviceName: "mobile",
            tag:"",
            pathName:"cc",
            supportFrame: "iframe",
            loginStatus: "",
            imageUrl: "http://service.qziedu.cn/infoplus/file/enterprise/ae889aa0-81cd-4237-ba15-2f431b7115ca/icon",
            contentSelector : ".contents",
            templateSelector : "#contentsTemplate",
            scrollTop : true,
            titleMap : {},
            hash : "",
            dataName : "ccs",
            isLoading : true,
            loginUrl : "",
            version : "20220406-081725",
            isDebug : "false",
            locale: "zh",
            positionTag: "",
            isTeacher: "false",
            homeAccessTimes : "",
            hrbeuCmsUrl: "",
            locationHost : "http://service.qziedu.cn/taskcenter/",
            order:"auto"
        };

        Global._parameter = {};
        Global.apps = [];
        Global.todos = [];
        Global.doings = [];
        Global.dones = [];
        Global.unrates = [];
        Global.completeds = [];
        Global.ccs = [];
        Global.merges = [];
        Global.selectorMap = {".btn-favorite" : "click",".btn-favorite-remove" : "click"
            , ".tag-select" : "change" , ".search-input":"keydown" , ".btn-search-input":"click" };
        Global.hashMap = { "apps" : "contentsTemplate" , "audit" : "contentsAuditTemplate" ,"todo" : "contentsTodoTemplate"
            ,"doing" : "contentsDoingTemplate" ,"done" : "contentsDoneTemplate" , "unrate" : "contentsUnrateTemplate"
            , "todohistory" : "contentsTodoHistoryTemplate" , "audithistory" : "contentsAuditHistoryTemplate"};
        Global.apiMap = {"api/me/apps":"apps" , "api/todo.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>":"todos","api/me/processes/doing?limit=%s&start=%s&keyword=%s":"doings"
            , "api/me/processes/done?limit=%s&start=%s&keyword=%s":"dones","api/me/processes/completed?limit=%s&start=%s&keyword=%s":"completeds" ,
            "api/process/%s":"processes" , "api/me/processes/merge" : "merges" , "api/me/processes/todo" : "mergeTodos" ,
            "api/me/processes/unrated" :"unrates" , "api/cc.php?limit=%s&start=%s&keyword=%s&unread=%s":"ccs" };
        Global.sepMap = {  "audit" : "true" , "audithistory" : "false" , "completed" : "true" , "merge" : "false" , "approval" : "true" };
        Global.defaultTags = {"ALL":"全部","COLLECT":"收藏"};
        Global.query = { limit : 10 , start : 0 ,pageSize : 10 , data : {}};
        Global.rapidHandle = { checked : {} , names : {} , actions : {},isFinshed:true};
        Global.rapidCc={chooseAll:false,checked:{}};
        Global.app = {palette:"green"};
        Global.dataLength = {};
        Global.rate = {};
        if(Global.deviceName != 'mobile'){
            Global.scrollTop = false;
        }
        $.cookie.json=true;

    </script>
    <script src="http://service.qziedu.cn/taskcenter/resources/common/js/base/flow.js?_v=20220406-081725"></script>


</head>
<body class="bgbody">

<div class="stand-main-content contents">
</div>
<script id="contentsTemplate"  type="text/template">
    <%
    if( globalMap._todos &&globalMap._todos.length > 0){
    globalMap._todos.sort(function(a,b){
    if(a.assignTime>b.assignTime){
    return -1;
    }else{
    return 1;
    }
    })
    Global.todosNo=[];
    Global.todosYes=[];

    _.each(globalMap._todos,function(item,index){
    if(item.process.owner.id!==Global.userId){
    Global.todosNo.push(item);
    }else{
    Global.todosYes.push(item);
    }
    })

    Global.todosYes = _.sortBy(Global.todosYes,function(item){
    return item.assignTime;
    });

    Global.todosNo = _.sortBy(Global.todosNo,function(item){
    return item.assignTime;
    });

    Global.dataLength['audits']=Global.todosNo.length;
    Global.dataLength['todos']=Global.todosYes.length;
    }

    var nameAll = '<?php echo $_GET['xm'];?>';
    if(nameAll&&nameAll.split(' ').length>1){
    nameAll = nameAll.split(' ')[0] + '...';
    }
    %>

    <div class="search_container_header">
        <%if(Global.pathName&&Global.pathName=="apps"){%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="" title="<?php echo $_GET['xm'];?>" href="javascript:;"><%-nameAll%>,您好！</a>
        <%}else{%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="scnu_search_div_a" href="index.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">首页</a>

        <%}%>
    </div>
    <div class="mobile_index_banner">
        <img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/banner_mobile.jpg" alt="">
    </div>
    <div class="firstConter">
        <%
        var tags=[];
        var isTagExit=false;
        tags=$.grep(globalMap.tags,function(item){
        if(item==Global.query.choosenTag){
        isTagExit=true;
        }
        return item!=Global.defaultTags.COLLECT&&item!=Global.defaultTags.ALL;
        })
        if(Global.isLoading==false&&!isTagExit){
        Global.query.choosenTag="全部";
        }
        tags.sort(function(a,b){
        var aNum=1000;
        if(a.indexOf("-")>-1&&(!isNaN(a.split("-")[0]))){
        aNum=a.split("-")[0];
        }
        var bNum=1000;
        if(b.indexOf("-")>-1&&(!isNaN(b.split("-")[0]))){
        bNum=b.split("-")[0];
        }
        if(parseInt(aNum)>parseInt(bNum)){
        return 1;
        }else{
        return -1;
        }
        })
        %>
        <ul class="tag_menu">

            <li>
                <a href="http://service.qziedu.cn/taskcenter/wechat/appall">
                    <dl>
                        <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav1.png" alt=""></dt>
                        <dd>全部分类</dd>
                    </dl>
                </a>
            </li>
            <%_.each(tags,function(item,index){if(index<7){ %>
            <%
            item1=item.split("-").length>1?item.split("-")[1]:item;
            %>
            <li >
                <a href="http://service.qziedu.cn/taskcenter/wechat/appall?searchType=<%-item1%>">
                    <dl>
                        <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/tag_default.png" data-name="<%-item1%>" data-url="http://service.qziedu.cn/infoplus/file/enterprise/ae889aa0-81cd-4237-ba15-2f431b7115ca/icon/<%-item1%>" /></dt>
                        <dd><%-item1%></dd>
                    </dl>
                </a>
            </li>
            <%}})%>
        </ul>
        <div class="recommend">
            <h2 class="title"><span></span>热门事项</h2>
            <%
            var hotApps=[];
            if(Global.stats&&Global.stats.length>0){
            hotApps=getHotApps();
            }
            %>
            <ul class="tag_menu">
                <%if(hotApps&&hotApps.length>0){%>
                <%_.each(hotApps,function(item,index){if(index <8){%>
                <a href="<%-getAppUrl(item.uri,null,true)%>">
                    <li>
                        <dl>
                            <dt><img class="app_img" src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/hytxlgl.png" data-url="<%-item.icon%>" /></dt>
                            <dd class="app_name_p"><%-item.name%></dd></li>
                </a>

                <%}})%>
                <%}%>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="recommend">
            <h2 class="title"><span></span>收藏事项 <a href="http://service.qziedu.cn/taskcenter/wechat/favorite" style="float: right; margin-right: 10px;color: #2A672D;">更多</a> </h2>
            <%
            var _favorites = [];
            $.each(Global.apps  , function( index , fav  ){
            if( isFavorite(fav.id) ){
            _favorites.push(fav);
            }
            });
            %>
            <ul class="tag_menu">
                <%if(_favorites&&_favorites.length>0){%>
                <%_.each(_favorites,function(item,index){if(index <8){%>
                <a href="<%-getAppUrl(item.uri,null,true)%>">
                    <li>
                        <dl>
                            <dt><img class="app_img" src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/hytxlgl.png" data-url="<%-item.icon%>" /></dt>
                            <dd class="app_name_p"><%-item.name%></dd></li>
                </a>

                <%}})%>
                <%}%>
                <div class="clear"></div>
            </ul>
        </div>
        <%
        var ccCount=0;
        if(globalMap.ccs&&globalMap.ccs.length>0){
        _.each(globalMap.ccs,function(item){
        if(!(item.read&&item.read>item.ccCreate)){
        ccCount++;
        }
        })
        }
        %>
        <div class="scnu_nav_ul_footer">
            <a href="todo.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
                <dl navfoot="todo" class="">
                    <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_todo_banner.png" alt=""></dt>
                    <dd >待提交</dd>
                    <%if(Global.dataLength['todos']&&Global.dataLength['todos']>0){%>
                    <span class='count'><%-Global.dataLength['todos']%></span>
                    <%}%>
                </dl>
            </a>
            <a href="toaudit.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
                <dl navfoot="audit" class="">
                    <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_audit_banner.png" alt=""></dt>
                    <dd >待审核</dd>
                    <%if(Global.dataLength['audits']&&Global.dataLength['audits']>0){%>
                    <span class='count'><%-Global.dataLength['audits']%></span>
                    <%}%>
                </dl>
            </a>
            <a href="doing.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
                <dl navfoot="doing" class="">
                    <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_doing_banner.png" alt=""></dt>
                    <dd >进行中</dd>
                </dl>
            </a>
            <a href="done.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
                <dl navfoot="done" class="">
                    <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_done_banner.png" alt=""></dt>
                    <dd >已完成</dd>
                </dl>
            </a>
            <a href="flow_cc.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
                <dl navfoot="cc" class="">
                    <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_cc_banner.png" alt=""></dt>
                    <dd >抄送</dd>
                    <%if(ccCount&&ccCount>0){%>
                    <span class='count'><%-ccCount%></span>
                    <%}%>
                </dl>
            </a>
        </div>

</script>




<script id="contentsApplyTemplate"  type="text/template">
    <%
    if( globalMap._todos &&globalMap._todos.length > 0){
    globalMap._todos.sort(function(a,b){
    if(a.assignTime>b.assignTime){
    return -1;
    }else{
    return 1;
    }
    })
    Global.todosNo=[];
    Global.todosYes=[];

    _.each(globalMap._todos,function(item,index){
    if(item.process.owner.id!==Global.userId){
    Global.todosNo.push(item);
    }else{
    Global.todosYes.push(item);
    }
    })

    Global.todosYes = _.sortBy(Global.todosYes,function(item){
    return item.assignTime;
    });

    Global.todosNo = _.sortBy(Global.todosNo,function(item){
    return item.assignTime;
    });

    Global.dataLength['audits']=Global.todosNo.length;
    Global.dataLength['todos']=Global.todosYes.length;
    }

    var nameAll = '<?php echo $_GET['xm'];?>';
    if(nameAll&&nameAll.split(' ').length>1){
    nameAll = nameAll.split(' ')[0] + '...';
    }
    %>

    <div class="search_container_header">
        <%if(Global.pathName&&Global.pathName=="apps"){%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="" title="<?php echo $_GET['xm'];?>" href="javascript:;"><%-nameAll%>,您好！</a>
        <%}else{%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="scnu_search_div_a" href="index.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">首页</a>

        <%}%>
    </div>
    <div class="mobile_content bottomBody todoBottomBody">
        <ul class="app_List item_list">
            <%
            if( Global.myApplies && Global.myApplies.length > 0){
            Global._myApplies = grepSearch(Global.myApplies);
            Global._myApplies.sort(function(a,b){
            if(a.update>b.update){
            return -1;
            }else{
            return 1;
            }
            })
            }
            %>
            <%if(Global._myApplies&&Global._myApplies.length>0){%>
            <%_.each(Global._myApplies,function(item,index){%>
            <%if(index>=Global.page.meTodos.start&&index<Global.page.meTodos.end){%>
            <li>
                <p class="app_name_p">
                    <a href="<%-getAppUrl(item.uri,null,true)%>"><%-item.name%></a>
                </p>
                <p class="app_tag_p">流水号：<%-item.entry%></p>
                <p class="app_tag_p">当前步骤：<%-item.pendingTasks%></p>
                <p class="app_tag_p time"><%-(item.update == 0 ? "":prettyDate(item.update*1000))%></p>
                <a class="toDetail" href="javascript:;" process-identity="<%-item.id%>">明细</a>
                <span class="circle_yellow"></span>
            </li>
            <%}%>
            <%})%>
            <%}%>
        </ul>
        <%if(Global._myApplies && Global._myApplies.length > 0){ %>
        <div class="paginationContainer" pagination-type="meTodos">
        </div>
        <%}%>
    </div>
    </div>
    <%
    var ccCount=0;
    if(globalMap.ccs&&globalMap.ccs.length>0){
    _.each(globalMap.ccs,function(item){
    if(!(item.read&&item.read>item.ccCreate)){
    ccCount++;
    }
    })
    }
    %>
    <div class="scnu_nav_ul_footer">
        <a href="todo.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="todo" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_todo_banner.png" alt=""></dt>
                <dd >待提交</dd>
                <%if(Global.dataLength['todos']&&Global.dataLength['todos']>0){%>
                <span class='count'><%-Global.dataLength['todos']%></span>
                <%}%>
            </dl>
        </a>
        <a href="toaudit.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="audit" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_audit_banner.png" alt=""></dt>
                <dd >待审核</dd>
                <%if(Global.dataLength['audits']&&Global.dataLength['audits']>0){%>
                <span class='count'><%-Global.dataLength['audits']%></span>
                <%}%>
            </dl>
        </a>
        <a href="doing.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="doing" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_doing_banner.png" alt=""></dt>
                <dd >进行中</dd>
            </dl>
        </a>
        <a href="done.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="done" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_done_banner.png" alt=""></dt>
                <dd >已完成</dd>
            </dl>
        </a>
        <a href="flow_cc.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="cc" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_cc_banner.png" alt=""></dt>
                <dd >抄送</dd>
                <%if(ccCount&&ccCount>0){%>
                <span class='count'><%-ccCount%></span>
                <%}%>
            </dl>
        </a>
    </div>

</script>
<script id="contentsDoneTemplate" type="text/template">
    <%
    if( globalMap._todos &&globalMap._todos.length > 0){
    globalMap._todos.sort(function(a,b){
    if(a.assignTime>b.assignTime){
    return -1;
    }else{
    return 1;
    }
    })
    Global.todosNo=[];
    Global.todosYes=[];

    _.each(globalMap._todos,function(item,index){
    if(item.process.owner.id!==Global.userId){
    Global.todosNo.push(item);
    }else{
    Global.todosYes.push(item);
    }
    })

    Global.todosYes = _.sortBy(Global.todosYes,function(item){
    return item.assignTime;
    });

    Global.todosNo = _.sortBy(Global.todosNo,function(item){
    return item.assignTime;
    });

    Global.dataLength['audits']=Global.todosNo.length;
    Global.dataLength['todos']=Global.todosYes.length;
    }

    var nameAll = '<?php echo $_GET['xm'];?>';
    if(nameAll&&nameAll.split(' ').length>1){
    nameAll = nameAll.split(' ')[0] + '...';
    }
    %>

    <div class="search_container_header">
        <%if(Global.pathName&&Global.pathName=="apps"){%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="" title="<?php echo $_GET['xm'];?>" href="javascript:;"><%-nameAll%>,您好！</a>
        <%}else{%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="scnu_search_div_a" href="index.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">首页</a>

        <%}%>
    </div>

    <div class="mobile_content bottomBody todoBottomBody">
        <ul class="app_List item_list content_shenpi">
            <%if(globalMap.dones&&globalMap.dones.length>0){%>
            <%_.each(globalMap.dones,function(item){%>
            <li>
                <p class="app_name_p">
                    <a href="<%-getAppUrl(item.uri,null,true)%>"><%-item.name%></a>
                </p>
                <p class="app_tag_p">流水号：<%-item.entry%></p>
                <p class="app_tag_p">当前步骤：<%-item.pendingTasks%></p>
                <p class="app_tag_p time"><%-(item.update == 0 ? "":prettyDate(item.update*1000))%></p>
                <a class="toDetail" href="javascript:;" process-identity="<%-item.id%>">明细</a>
                <%if(item.rating){%>
                <a class="toComment" href="javascript:;" rate-identity="<%-item.id%>" item-rating="<%-item.rating%>" item-review="<%-item.review%>" >已评价</a>
                <%}else if(item.owner && item.status && item.status!='killed' && item.owner.id==Global.userId){%>
                <a class="toComment" href="javascript:;" rate-identity="<%-item.id%>" >评价</a>
                <%}%>
                <span class="circle_yellow"></span>
            </li>
            <%})%>
            <%}%>
        </ul>
    </div>
    <%
    var ccCount=0;
    if(globalMap.ccs&&globalMap.ccs.length>0){
    _.each(globalMap.ccs,function(item){
    if(!(item.read&&item.read>item.ccCreate)){
    ccCount++;
    }
    })
    }
    %>
    <div class="scnu_nav_ul_footer">
        <a href="todo.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="todo" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_todo_banner.png" alt=""></dt>
                <dd >待提交</dd>
                <%if(Global.dataLength['todos']&&Global.dataLength['todos']>0){%>
                <span class='count'><%-Global.dataLength['todos']%></span>
                <%}%>
            </dl>
        </a>
        <a href="toaudit.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="audit" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_audit_banner.png" alt=""></dt>
                <dd >待审核</dd>
                <%if(Global.dataLength['audits']&&Global.dataLength['audits']>0){%>
                <span class='count'><%-Global.dataLength['audits']%></span>
                <%}%>
            </dl>
        </a>
        <a href="doing.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="doing" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_doing_banner.png" alt=""></dt>
                <dd >进行中</dd>
            </dl>
        </a>
        <a href="done.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="done" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_done_banner.png" alt=""></dt>
                <dd >已完成</dd>
            </dl>
        </a>
        <a href="flow_cc.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="cc" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_cc_banner.png" alt=""></dt>
                <dd >抄送</dd>
                <%if(ccCount&&ccCount>0){%>
                <span class='count'><%-ccCount%></span>
                <%}%>
            </dl>
        </a>
    </div>
</script>
<script id="contentsCcTemplate" type="text/template">
    <%
    if( globalMap._todos &&globalMap._todos.length > 0){
    globalMap._todos.sort(function(a,b){
    if(a.assignTime>b.assignTime){
    return -1;
    }else{
    return 1;
    }
    })
    Global.todosNo=[];
    Global.todosYes=[];

    _.each(globalMap._todos,function(item,index){
    if(item.process.owner.id!==Global.userId){
    Global.todosNo.push(item);
    }else{
    Global.todosYes.push(item);
    }
    })

    Global.todosYes = _.sortBy(Global.todosYes,function(item){
    return item.assignTime;
    });

    Global.todosNo = _.sortBy(Global.todosNo,function(item){
    return item.assignTime;
    });

    Global.dataLength['audits']=Global.todosNo.length;
    Global.dataLength['todos']=Global.todosYes.length;
    }

    var nameAll = '<?php echo $_GET['xm'];?>';
    if(nameAll&&nameAll.split(' ').length>1){
    nameAll = nameAll.split(' ')[0] + '...';
    }
    %>

    <div class="search_container_header">
        <%if(Global.pathName&&Global.pathName=="apps"){%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="" title="<?php echo $_GET['xm'];?>" href="javascript:;"><%-nameAll%>,您好！</a>
        <%}else{%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="scnu_search_div_a" href="index.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">首页</a>

        <%}%>
    </div>

    <%
    var ccArr=grepCc();
    var ccCount=0;
    _.each(ccArr,function(item){
    if(!(item.read&&item.read>item.ccCreate)){
    ccCount++;
    }
    })
    %>
    <div class="cc_btn_group">
        <%
        var ccQuery="查看全部";
        if(Global.ccQuery=="unread"){
        ccQuery="只看未读";
        }
        %>
        <div class="doCc cc_btn" rapid-cc>
            标记为已读
        </div>
        <div class="grepCc cc_btn">
            <p><%-ccQuery%></p>
            <ul class="ccQuery">
                <li ccQuery="all">查看全部</li>
                <li ccQuery="unread">只看未读</li>
            </ul>
        </div>

    </div>
    <div class="mobile_content bottomBody todoBottomBody">
        <ul class="app_List item_list content_shenpi">
            <%if(ccArr&&ccArr.length>0){%>
            <%_.each(ccArr,function(item,index){%>
            <%if(index>=Global.page.ccs.start&&index<(Global.page.ccs.start+Global.page.ccs.pageSize)){%>
            <li class="<%if(item.read&&item.read>item.ccCreate){%>cc_read<%}else{%>cc_unread<%}%>">
                <p class="app_name_p">
                    <a href="<%-getAppUrl(item.uri,null,true)%>"><%-item.name%></a>
                </p>
                <p class="app_tag_p">流水号：<%-item.entry%></p>
                <p class="app_tag_p">当前步骤：<%-item.pendingTasks%></p>
                <p class="app_tag_p time"><%-(item.update == 0 ? "":getFormatDateByLong(item.update*1000,'yyyy-MM-dd hh:mm'))%></p>
                <a class="toDetail" href="javascript:;" process-identity="<%-item.id%>">明细</a>
                <!--<span class="circle_yellow"></span>-->
                <%if(!(item.read&&item.read>item.ccCreate)){%>
                <div class="sx_check">
                    <%if(Global.rapidCc&&Global.rapidCc.checked[item.id]){%>
                    <img class="pr-select-cc" cc-identity="<%-item.id%>" src="<%-Global.resourceUrl%>/images/check_yes.gif" />
                    <%}else{%>
                    <img class="pr-select-cc" cc-identity="<%-item.id%>" src="<%-Global.resourceUrl%>/images/check_no.gif" />
                    <%}%>
                </div>
                <%}%>
            </li>
            <%}%>

            <%})%>
            <%}%>
        </ul>
    </div>
    <%
    var ccCount=0;
    if(globalMap.ccs&&globalMap.ccs.length>0){
    _.each(globalMap.ccs,function(item){
    if(!(item.read&&item.read>item.ccCreate)){
    ccCount++;
    }
    })
    }
    %>
    <div class="scnu_nav_ul_footer">
        <a href="todo.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="todo" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_todo_banner.png" alt=""></dt>
                <dd >待提交</dd>
                <%if(Global.dataLength['todos']&&Global.dataLength['todos']>0){%>
                <span class='count'><%-Global.dataLength['todos']%></span>
                <%}%>
            </dl>
        </a>
        <a href="toaudit.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="audit" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_audit_banner.png" alt=""></dt>
                <dd >待审核</dd>
                <%if(Global.dataLength['audits']&&Global.dataLength['audits']>0){%>
                <span class='count'><%-Global.dataLength['audits']%></span>
                <%}%>
            </dl>
        </a>
        <a href="doing.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="doing" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_doing_banner.png" alt=""></dt>
                <dd >进行中</dd>
            </dl>
        </a>
        <a href="done.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="done" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_done_banner.png" alt=""></dt>
                <dd >已完成</dd>
            </dl>
        </a>
        <a href="flow_cc.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="cc" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_cc_banner.png" alt=""></dt>
                <dd >抄送</dd>
                <%if(ccCount&&ccCount>0){%>
                <span class='count'><%-ccCount%></span>
                <%}%>
            </dl>
        </a>
    </div>

</script>
<script id="contentsTodoTemplate" type="text/template">
    <%
    if( globalMap._todos &&globalMap._todos.length > 0){
    globalMap._todos.sort(function(a,b){
    if(a.assignTime>b.assignTime){
    return -1;
    }else{
    return 1;
    }
    })
    Global.todosNo=[];
    Global.todosYes=[];

    _.each(globalMap._todos,function(item,index){
    if(item.process.owner.id!==Global.userId){
    Global.todosNo.push(item);
    }else{
    Global.todosYes.push(item);
    }
    })

    Global.todosYes = _.sortBy(Global.todosYes,function(item){
    return item.assignTime;
    });

    Global.todosNo = _.sortBy(Global.todosNo,function(item){
    return item.assignTime;
    });

    Global.dataLength['audits']=Global.todosNo.length;
    Global.dataLength['todos']=Global.todosYes.length;
    }

    var nameAll = '<?php echo $_GET['xm'];?>';
    if(nameAll&&nameAll.split(' ').length>1){
    nameAll = nameAll.split(' ')[0] + '...';
    }
    %>

    <div class="search_container_header">
        <%if(Global.pathName&&Global.pathName=="apps"){%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="" title="<?php echo $_GET['xm'];?>" href="javascript:;"><%-nameAll%>,您好！</a>
        <%}else{%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="scnu_search_div_a" href="index.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">首页</a>

        <%}%>
    </div>
    <div class="mobile_content bottomBody todoBottomBody ">
        <ul class="app_List item_list content_shenpi">
            <% 	if(Global.todosYes&&Global.todosYes.length>0){%>
            <%_.each(Global.todosYes,function(item,index){%>
            <%if(index>=Global.page.todos.start&&index<(Global.page.todos.start+Global.page.todos.pageSize)){%>
            <li>
                <p class="app_name_p">
                    <a href="<%-getAppUrl(item.uri,null,true)%>"><%-item.process.name%></a>
                </p>
                <p class="app_tag_p">流水号：<%-item.process.entry%></p>
                <p class="app_tag_p">当前步骤：<%-item.name%></p>
                <p class="app_tag_p time"><%-(item.assignTime == 0 ? "":prettyDate(item.assignTime*1000))%></p>
                <a class="toDetail" href="<%-getAppUrl(item.uri,null,true)%>">去办理</a>
                <span class="circle_yellow"></span>
            </li>
            <%}%>
            <%})%>
            <%}%>
        </ul>
    </div>
    <%
    var ccCount=0;
    if(globalMap.ccs&&globalMap.ccs.length>0){
    _.each(globalMap.ccs,function(item){
    if(!(item.read&&item.read>item.ccCreate)){
    ccCount++;
    }
    })
    }
    %>
    <div class="scnu_nav_ul_footer">
        <a href="todo.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="todo" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_todo_banner.png" alt=""></dt>
                <dd >待提交</dd>
                <%if(Global.dataLength['todos']&&Global.dataLength['todos']>0){%>
                <span class='count'><%-Global.dataLength['todos']%></span>
                <%}%>
            </dl>
        </a>
        <a href="toaudit.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="audit" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_audit_banner.png" alt=""></dt>
                <dd >待审核</dd>
                <%if(Global.dataLength['audits']&&Global.dataLength['audits']>0){%>
                <span class='count'><%-Global.dataLength['audits']%></span>
                <%}%>
            </dl>
        </a>
        <a href="doing.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="doing" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_doing_banner.png" alt=""></dt>
                <dd >进行中</dd>
            </dl>
        </a>
        <a href="done.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="done" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_done_banner.png" alt=""></dt>
                <dd >已完成</dd>
            </dl>
        </a>
        <a href="flow_cc.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="cc" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_cc_banner.png" alt=""></dt>
                <dd >抄送</dd>
                <%if(ccCount&&ccCount>0){%>
                <span class='count'><%-ccCount%></span>
                <%}%>
            </dl>
        </a>
    </div>

</script>
<script id="contentsDoingTemplate" type="text/template">
    <%
    if( globalMap._todos &&globalMap._todos.length > 0){
    globalMap._todos.sort(function(a,b){
    if(a.assignTime>b.assignTime){
    return -1;
    }else{
    return 1;
    }
    })
    Global.todosNo=[];
    Global.todosYes=[];

    _.each(globalMap._todos,function(item,index){
    if(item.process.owner.id!==Global.userId){
    Global.todosNo.push(item);
    }else{
    Global.todosYes.push(item);
    }
    })

    Global.todosYes = _.sortBy(Global.todosYes,function(item){
    return item.assignTime;
    });

    Global.todosNo = _.sortBy(Global.todosNo,function(item){
    return item.assignTime;
    });

    Global.dataLength['audits']=Global.todosNo.length;
    Global.dataLength['todos']=Global.todosYes.length;
    }

    var nameAll = '<?php echo $_GET['xm'];?>';
    if(nameAll&&nameAll.split(' ').length>1){
    nameAll = nameAll.split(' ')[0] + '...';
    }
    %>

    <div class="search_container_header">
        <%if(Global.pathName&&Global.pathName=="apps"){%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="" title="<?php echo $_GET['xm'];?>" href="javascript:;"><%-nameAll%>,您好！</a>
        <%}else{%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="scnu_search_div_a" href="index.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">首页</a>

        <%}%>
    </div>
    <div class="mobile_content bottomBody todoBottomBody">
        <ul class="app_List item_list content_shenpi">
            <%if(globalMap.doings&&globalMap.doings.length>0){%>
            <%_.each(globalMap.doings,function(item){%>
            <li>
                <p class="app_name_p">
                    <a href="<%-getAppUrl(item.uri,null,true)%>"><%-item.name%></a>
                </p>
                <p class="app_tag_p">流水号：<%-item.entry%></p>
                <p class="app_tag_p">当前步骤：<%-item.pendingTasks%></p>
                <p class="app_tag_p time"><%-(item.update == 0 ? "":prettyDate(item.update*1000))%></p>
                <a class="toDetail" href="javascript:;" process-identity="<%-item.id%>">明细</a>
                <span class="circle_yellow"></span>
            </li>
            <%})%>
            <%}%>
        </ul>
    </div>
    <%
    var ccCount=0;
    if(globalMap.ccs&&globalMap.ccs.length>0){
    _.each(globalMap.ccs,function(item){
    if(!(item.read&&item.read>item.ccCreate)){
    ccCount++;
    }
    })
    }
    %>
    <div class="scnu_nav_ul_footer">
        <a href="todo.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="todo" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_todo_banner.png" alt=""></dt>
                <dd >待提交</dd>
                <%if(Global.dataLength['todos']&&Global.dataLength['todos']>0){%>
                <span class='count'><%-Global.dataLength['todos']%></span>
                <%}%>
            </dl>
        </a>
        <a href="toaudit.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="audit" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_audit_banner.png" alt=""></dt>
                <dd >待审核</dd>
                <%if(Global.dataLength['audits']&&Global.dataLength['audits']>0){%>
                <span class='count'><%-Global.dataLength['audits']%></span>
                <%}%>
            </dl>
        </a>
        <a href="doing.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="doing" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_doing_banner.png" alt=""></dt>
                <dd >进行中</dd>
            </dl>
        </a>
        <a href="done.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="done" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_done_banner.png" alt=""></dt>
                <dd >已完成</dd>
            </dl>
        </a>
        <a href="flow_cc.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="cc" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_cc_banner.png" alt=""></dt>
                <dd >抄送</dd>
                <%if(ccCount&&ccCount>0){%>
                <span class='count'><%-ccCount%></span>
                <%}%>
            </dl>
        </a>
    </div>
</script>

<script id="contentsTodoNoTemplate" type="text/template">
    <%
    if( globalMap._todos &&globalMap._todos.length > 0){
    globalMap._todos.sort(function(a,b){
    if(a.assignTime>b.assignTime){
    return -1;
    }else{
    return 1;
    }
    })
    Global.todosNo=[];
    Global.todosYes=[];

    _.each(globalMap._todos,function(item,index){
    if(item.process.owner.id!==Global.userId){
    Global.todosNo.push(item);
    }else{
    Global.todosYes.push(item);
    }
    })

    Global.todosYes = _.sortBy(Global.todosYes,function(item){
    return item.assignTime;
    });

    Global.todosNo = _.sortBy(Global.todosNo,function(item){
    return item.assignTime;
    });

    Global.dataLength['audits']=Global.todosNo.length;
    Global.dataLength['todos']=Global.todosYes.length;
    }

    var nameAll = '<?php echo $_GET['xm'];?>';
    if(nameAll&&nameAll.split(' ').length>1){
    nameAll = nameAll.split(' ')[0] + '...';
    }
    %>

    <div class="search_container_header">
        <%if(Global.pathName&&Global.pathName=="apps"){%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="" title="<?php echo $_GET['xm'];?>" href="javascript:;"><%-nameAll%>,您好！</a>
        <%}else{%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="scnu_search_div_a" href="index.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">首页</a>

        <%}%>
    </div>
    <div class="mobile_content bottomBody todoBottomBody">
        <ul class="app_List item_list content_shenpi">
            <%
            if( globalMap._todos &&globalMap._todos.length > 0){
            globalMap._todos.sort(function(a,b){
            \if(a.assignTime>b.assignTime){
            return -1;
            }else{
            return 1;
            }
            })
            }
            %>

            <%if(globalMap._todos&&globalMap._todos.length>0){%>
            <%_.each(globalMap._todos,function(item,index){%>
            <%if(index>=Global.page.todos.start&&index<(Global.page.todos.start+Global.page.todos.pageSize)&&item.process.owner.id!==Global.userId){%>
            <li>
                <p class="app_name_p">
                    <a href="<%-getAppUrl(item.uri,null,true)%>"><%-item.process.name%></a>
                </p>
                <p class="app_tag_p">流水号：<%-item.process.entry%></p>
                <p class="app_tag_p">当前步骤：<%-item.name%></p>
                <p class="app_tag_p time"><%-(item.assignTime == 0 ? "":prettyDate(item.assignTime*1000))%></p>
                <a class="toDetail" href="javascript:;" process-identity="<%-item.id%>">明细</a>
                <span class="circle_yellow"></span>
            </li>
            <%}%>

            <%})%>
            <%}%>
        </ul>
    </div>
    <%
    var ccCount=0;
    if(globalMap.ccs&&globalMap.ccs.length>0){
    _.each(globalMap.ccs,function(item){
    if(!(item.read&&item.read>item.ccCreate)){
    ccCount++;
    }
    })
    }
    %>
    <div class="scnu_nav_ul_footer">
        <a href="todo.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="todo" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_todo_banner.png" alt=""></dt>
                <dd >待提交</dd>
                <%if(Global.dataLength['todos']&&Global.dataLength['todos']>0){%>
                <span class='count'><%-Global.dataLength['todos']%></span>
                <%}%>
            </dl>
        </a>
        <a href="toaudit.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="audit" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_audit_banner.png" alt=""></dt>
                <dd >待审核</dd>
                <%if(Global.dataLength['audits']&&Global.dataLength['audits']>0){%>
                <span class='count'><%-Global.dataLength['audits']%></span>
                <%}%>
            </dl>
        </a>
        <a href="doing.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="doing" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_doing_banner.png" alt=""></dt>
                <dd >进行中</dd>
            </dl>
        </a>
        <a href="done.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="done" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_done_banner.png" alt=""></dt>
                <dd >已完成</dd>
            </dl>
        </a>
        <a href="flow_cc.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="cc" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_cc_banner.png" alt=""></dt>
                <dd >抄送</dd>
                <%if(ccCount&&ccCount>0){%>
                <span class='count'><%-ccCount%></span>
                <%}%>
            </dl>
        </a>
    </div>

</script>

<script id="contentsAuditTemplate" type="text/template">
    <%
    if( globalMap._todos &&globalMap._todos.length > 0){
    globalMap._todos.sort(function(a,b){
    if(a.assignTime>b.assignTime){
    return -1;
    }else{
    return 1;
    }
    })
    Global.todosNo=[];
    Global.todosYes=[];

    _.each(globalMap._todos,function(item,index){
    if(item.process.owner.id!==Global.userId){
    Global.todosNo.push(item);
    }else{
    Global.todosYes.push(item);
    }
    })

    Global.todosYes = _.sortBy(Global.todosYes,function(item){
    return item.assignTime;
    });

    Global.todosNo = _.sortBy(Global.todosNo,function(item){
    return item.assignTime;
    });

    Global.dataLength['audits']=Global.todosNo.length;
    Global.dataLength['todos']=Global.todosYes.length;
    }

    var nameAll = '<?php echo $_GET['xm'];?>';
    if(nameAll&&nameAll.split(' ').length>1){
    nameAll = nameAll.split(' ')[0] + '...';
    }
    %>

    <div class="search_container_header">
        <%if(Global.pathName&&Global.pathName=="apps"){%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="" title="<?php echo $_GET['xm'];?>" href="javascript:;"><%-nameAll%>,您好！</a>
        <%}else{%>
        <div class="scnu_search_div">
            <input type="text" placeholder="请输入流程事项名称" class="search_tt search-input" />
            <input type="button" class="search_bb btn-search-input" />
        </div>
        <a class="scnu_search_div_a" href="index.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">首页</a>

        <%}%>
    </div>
    <div class="mobile_content bottomBody todoBottomBody">
        <ul class="app_List item_list content_shenpi">
            <%if(Global.todosNo&&Global.todosNo.length>0){%>
            <%_.each(Global.todosNo,function(item,index){%>
            <%if(index>=Global.page.audits.start&&index<(Global.page.audits.start+Global.page.audits.pageSize)){%>
            <li>
                <p class="app_name_p">
                    <a href="<%-getAppUrl(item.uri,null,true)%>"><%-item.process.name%></a>
                </p>
                <p class="app_tag_p">流水号：<%-item.process.entry%></p>
                <p class="app_tag_p">当前步骤：<%-item.name%></p>
                <p class="app_tag_p time"><%-(item.assignTime == 0 ? "":prettyDate(item.assignTime*1000))%></p>
                <a class="toDetail" href="<%-getAppUrl(item.uri,null,true)%>">去办理</a>
                <span class="circle_yellow"></span>
            </li>
            <%}%>
            <%})%>
            <%}%>
        </ul>
    </div>
    <%
    var ccCount=0;
    if(globalMap.ccs&&globalMap.ccs.length>0){
    _.each(globalMap.ccs,function(item){
    if(!(item.read&&item.read>item.ccCreate)){
    ccCount++;
    }
    })
    }
    %>
    <div class="scnu_nav_ul_footer">
        <a href="todo.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="todo" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_todo_banner.png" alt=""></dt>
                <dd >待提交</dd>
                <%if(Global.dataLength['todos']&&Global.dataLength['todos']>0){%>
                <span class='count'><%-Global.dataLength['todos']%></span>
                <%}%>
            </dl>
        </a>
        <a href="toaudit.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="audit" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_audit_banner.png" alt=""></dt>
                <dd >待审核</dd>
                <%if(Global.dataLength['audits']&&Global.dataLength['audits']>0){%>
                <span class='count'><%-Global.dataLength['audits']%></span>
                <%}%>
            </dl>
        </a>
        <a href="doing.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="doing" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_doing_banner.png" alt=""></dt>
                <dd >进行中</dd>
            </dl>
        </a>
        <a href="done.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="done" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_done_banner.png" alt=""></dt>
                <dd >已完成</dd>
            </dl>
        </a>
        <a href="flow_cc.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
            <dl navfoot="cc" class="">
                <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_cc_banner.png" alt=""></dt>
                <dd >抄送</dd>
                <%if(ccCount&&ccCount>0){%>
                <span class='count'><%-ccCount%></span>
                <%}%>
            </dl>
        </a>
    </div>
</script>


<script id="contentsItemViewTemplate"  type="text/template">
    <div class="detail_header">
        <%if(Global.pathName=="doing"){%>
        <a href="doing.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>"><span class="toLeft"></span></a>
        <%}else if(Global.pathName=="done"){%>
        <a href="done.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>"><span class="toLeft"></span></a>
        <%}else if(Global.pathName=="cc"){%>
        <a href="flow_cc.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>"><span class="toLeft"></span></a>
        <%}%>
        明细
    </div>

    <div class="mobile_content">
        <%
        if(globalMap.processes && globalMap.processes.length>0){
        var process = globalMap.processes[0];
        %>
        <ul class="app_List item_list">
            <li>
                <p class="app_name_p">
                    <a href="<%-getAppUrl(process.uri,null,true)%>"><%-process.name%></a>
                </p>
                <p class="app_tag_p">流水号：<%-process.entry%></p>
                <p class="app_tag_p">当前步骤：<%-process.pendingTasks%></p>
                <p class="app_tag_p time"><%-prettyDate(process.update*1000)%></p>
                <%if(process.milestones && process.milestones.length>0){%>
                <div class="app_process">
                    <p>已完成<%-((process.milestone && process.milestone.percent) || 0)%>%</p>
                    <p class="app_process_outer">
                        <span class="app_process_inner" style="width: <%-((process.milestone && process.milestone.percent) || 0)%>px;"></span>
                    </p>
                </div>
                <%}%>

            </li>
        </ul>
        <%if(process.tasks&&process.tasks.length>0){%>
        <ul class="detail_list">
            <%_.each(process.tasks,function(task,index){%>
            <%if(task.status==1){%>
            <li class="now">
                <div class="detail_list_left">
                    <p>当前</p>
                </div>
                <div class="detail_list_right">
                    <p class="title"><%-task.name%></p>
                    <p>状态：办理中...</p>
                </div>
            </li>
            <%}else{%>
            <li>
                <div class="detail_list_left">
                    <p><%-(task.actionTime == 0 ? "":prettyDate(task.actionTime*1000))%></p>
                </div>
                <div class="detail_list_right">
                    <p class="title"><%-task.name%></p>
                    <p>状态：<%-task.actionName%>.</p>
                    <%
                    var actionUser="";
                    if(task.actionUser&&task.actionUser.name){
                    if(task.actionUser.name!="[hidden]"){
                    actionUser=task.actionUser.name;
                    }
                    }
                    %>
                    <p>办理用户：<%-actionUser%></p>
                </div>
            </li>
            <%}%>
            <%})%>

        </ul>
        <%}%>

        <%}%>
    </div>
</script>
<script id="contentsFavoriteTemplate" type="text/template">
    <div class="search_div appall">
        <a href="index.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>" class="toBack"></a>
        <%if(!Global.query.searchText){%>
        <div class="search_form_todo showForm">
            <input type="text" placeholder="搜索" class="search_input_css_todo search-input search_input_css_appall  showInput" />
            <input type="button"  class="search_btn_css_todo search-btn search_btn_css_appall" />
        </div>
        <%}else{%>
        <div class="search_form_todo">
            <input type="text" placeholder="搜索" class="search_input_css_todo search-input search_input_css_appall" />
            <input type="button"  class="search_btn_css_todo search-btn search_btn_css_appall show" />
        </div>
        <%}%>
    </div>
    <div class="mobile_content mobile_collect">
        <%
        var favoriteApps=getFavoriteApp();
        favoriteApps=grepApps(favoriteApps);

        %>
        <% if(favoriteApps&&favoriteApps.length>0){%>
        <ul class="app_List_type">
            <%_.each(favoriteApps,function(app,index){%>

            <%
            var tag=app.tags.split(",")[0];
            %>
            <li>
                <img class="app_img" style=" margin-right: 17px;" src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/hot_4.png" data-url="<%-app.icon%>" />
                <p class="app_name_p">
                    <a href="<%-getAppUrl(app.uri,null,true)%>"><%-app.name%></a>
                </p>
                <p class="app_tag_p"><%-app.department%></p>
                <p class="app_pingjia">
                    <%=rateInit(app.rating)%>
                </p>
                <%if(!(isFavorite(app.id))){%>
                <span class="app_collect" app-identity="<%app.id%>">
								<img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/favorite_no.png" />
							</span>
                <%}else{%>
                <span class="app_collect" app-identity="<%-app.id%>">
								<img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/favorite.png" />
							</span>
                <%}%>
            </li>
            <%})%>
        </ul>
        <%}else if(Global.isLoading==false){%>
        <p class="noFavorite">您当前没有收藏！</p>
        <%}%>
    </div>
</script>
<script id="rateViewTemplate" type="text/template">
    <div class="detail_header">
        <a href="done.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>"><span class="toLeft"></span></a>
        评分评价
    </div>
    <div class="mobile_content">
        <div class="commentContainer">
            <div class="comment_header">
                给出您的评分
                <div class="comment_xin">
                    <div class="rateit comment_xin_div"  data-rateit-resetable="false" data-rateit-step="1" data-rateit-starwidth="16" data-rateit-starheight="16"></div>
                </div>
            </div>
            <p>
                <textarea placeholder="给出您的意见或建议"><%-Global.rate.review%></textarea>
            </p>
            <p>
                <input value="提交" type="button" class="commentSubmit" />
            </p>
        </div>
    </div>
</script>
<script id="rateTemplate"  type="text/template">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">评价确认</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <h3 >评分： </h3>
                        <div class="rateit bigstars"  data-rateit-resetable="false" data-rateit-step="1" data-rateit-starwidth="32" data-rateit-starheight="32"></div>
                    </div>
                    <div style="padding-top:10px;">
                        <h5><span>评价备注：</span></h5>
                        <textarea class="form-control" ><%-Global.rate.review%></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary modal-submit" >
                        确认
                    </button>
                    <button type="button" class="btn btn-default modal-remove" >
                        关闭
                    </button>
                </div>
            </div>
        </div>
    </div>
</script>


<script id="contentsAppAllTemplate" type="text/template">
    <div class="topHead">
        <div class="search_div appall">
            <a href="index.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>" class="toBack"></a>
            <%if(!Global.query.searchText){%>
            <div class="search_form_todo showForm">
                <input type="text" placeholder="搜索" class="search_input_css_todo search-input search_input_css_appall  showInput" />
                <input type="button"  class="search_btn_css_todo search-btn search_btn_css_appall" />
            </div>
            <%}else{%>
            <div class="search_form_todo">
                <input type="text" placeholder="搜索" class="search_input_css_todo search-input search_input_css_appall" />
                <input type="button"  class="search_btn_css_todo search-btn search_btn_css_appall show" />
            </div>
            <%}%>
        </div>
        <div class="contentCenter">
            <ul class="typeChoose">
                <%
                getGrepApps();
                var tags=[];
                var tagsAll=[Global.defaultTags.ALL];

                tags=$.grep(globalMap.tags,function(item){
                return item!=Global.defaultTags.COLLECT&&item!=Global.defaultTags.ALL;
                })
                tags.sort(function(a,b){
                var aNum=1000;
                if(a.indexOf("-")>-1&&(!isNaN(a.split("-")[0]))){
                aNum=a.split("-")[0];
                }
                var bNum=1000;
                if(b.indexOf("-")>-1&&(!isNaN(b.split("-")[0]))){
                bNum=b.split("-")[0];
                }
                if(parseInt(aNum)>parseInt(bNum)){
                return 1;
                }else{
                return -1;
                }
                })
                tags=tagsAll.concat(tags);
                var elementArr=getElement();
                if(Global.searchWeiDu.searchType&&null!=Global.searchWeiDu.searchType){
                if(elementArr&&elementArr.indexOf(Global.searchWeiDu.searchType)>-1){
                Global.searchWeiDu.element=Global.searchWeiDu.searchType;
                }else if(globalMap.departments&&globalMap.departments.indexOf(Global.searchWeiDu.searchType)>-1){
                Global.searchWeiDu.department=Global.searchWeiDu.searchType;
                }else {
                Global.searchWeiDu.tags=Global.searchWeiDu.searchType;

                }
                Global.searchWeiDu.searchType="";
                }
                %>
                <li class="xialaBm" >
                    <%
                    var fenlei="服务部门";
                    if(Global.searchWeiDu.department!="全部"){
                    fenlei=Global.searchWeiDu.department;
                    }
                    %>

                    <span class="xiala_name"><%-fenlei%></span>
                    <span  class="xiala_img"></span>
                    <div class="tagList categoryList">
                        <%if(globalMap.departments&&globalMap.departments.length>0){%>
                        <p class="<%if(Global.searchWeiDu.department=='全部'){%>active<%}%>">全部</p>
                        <%_.each(globalMap.departments,function(dept){%>
                        <p class="<%if(Global.searchWeiDu.department==dept){%>active<%}%>"><%-dept%></p>
                        <%})%>
                        <%}%>
                    </div>
                </li>
                <li class="xialaLb ">
                    <%
                    var changjing="服务类别";
                    if(Global.searchWeiDu.tags!="全部"){
                    changjing=Global.searchWeiDu.tags;
                    }
                    %>

                    <span class="xiala_name"><%-changjing%></span>
                    <span  class="xiala_img"></span>
                    <div class="tagList sceneList">
                        <%if(tags&&tags.length>0){%>
                        <%_.each(tags,function(tag){%>
                        <%
                        tag=tag.split("-").length>1?tag.split("-")[1]:tag;
                        %>
                        <p class="<%if(Global.searchWeiDu.tags==tag){%>active<%}%>"><%-tag%></p>
                        <%})%>
                        <%}%>
                    </div>
                </li>
                <li class="xialaDx ">
                    <%
                    var duixiang="服务对象";
                    if(Global.searchWeiDu.element!="全部"){
                    duixiang=Global.searchWeiDu.element;
                    }
                    %>
                    <span class="xiala_name"><%-duixiang%></span>
                    <span  class="xiala_img"></span>
                    <div class="tagList objList">
                        <%if(elementArr&&elementArr.length>0){%>
                        <p class="<%if(Global.searchWeiDu.element=='全部'){%>active<%}%>">全部</p>
                        <%_.each(elementArr,function(ele){%>
                        <p class="<%if(Global.searchWeiDu.element==ele){%>active<%}%>"><%-ele%></p>
                        <%})%>
                        <%}%>
                    </div>
                </li>
            </ul>
            <%
            var letterAppGroup={};
            _.each(globalMap.apps,function(item){
            var shouzimu=item.shouzimu;
            var firstLetter="";
            for(var i=0;i<shouzimu.length;i++){
            var code=shouzimu.charCodeAt(i);
            if((code>=97&&code<=122)||(code>=65&&code<=90)){
            firstLetter=shouzimu.charAt(i).toUpperCase();
            break;
            }
            }
            var isLetter=false;
            for(key in letterAppGroup){
            if(firstLetter==key){
            isLetter=true;
            letterAppGroup[key].push(item);
            break;
            }
            }
            if(!isLetter){
            letterAppGroup[firstLetter]=[];
            letterAppGroup[firstLetter].push(item);
            }
            })
            letterAppGroup=objKeySort(letterAppGroup);
            var letterArr=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
            %>

            <div class="mobile_content bottomBody">
                <ul class="zimuList">
                    <%_.each(letterArr,function(letter){%>
                    <li><a href="#<%-letter%>"><%-letter%></a></li>
                    <%})%>
                </ul>
                <%for(key in letterAppGroup){%>
                <p class="p_zimu" id="<%-key%>"><%-key%></p>
                <ul class="app_List_type">
                    <%_.each(letterAppGroup[key],function(item){%>
                    <li>
                        <a href="<%-getAppUrl(item.uri)%>">
                            <img class="app_img" src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/hot_4.png" data-url="<%-item.icon%>" />
                            <p class="app_name_p"><%-item.name%></p>
                            <p class="app_tag_p"><%-item.department%></p>
                            <p class="app_pingjia">
                                <%=rateInit(item.rating)%>
                            </p>
                        </a>
                        <%if(!(isFavorite(item.id))){%>
                        <span class="app_collect" app-identity="<%-item.id%>">
								<img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/favorite_no.png" />
							</span>
                        <%}else{%>
                        <span class="app_collect" app-identity="<%-item.id%>" >
								<img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/favorite.png" />
							</span>
                        <%}%>
                    </li>
                    <%})%>
                </ul>
                <%}%>
            </div>

        </div>
        <%
        var ccCount=0;
        if(globalMap.ccs&&globalMap.ccs.length>0){
        _.each(globalMap.ccs,function(item){
        if(!(item.read&&item.read>item.ccCreate)){
        ccCount++;
        }
        })
        }
        %>
        <div class="scnu_nav_ul_footer">
            <a href="todo.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
                <dl navfoot="todo" class="">
                    <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_todo_banner.png" alt=""></dt>
                    <dd >待提交</dd>
                    <%if(Global.dataLength['todos']&&Global.dataLength['todos']>0){%>
                    <span class='count'><%-Global.dataLength['todos']%></span>
                    <%}%>
                </dl>
            </a>
            <a href="toaudit.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
                <dl navfoot="audit" class="">
                    <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_audit_banner.png" alt=""></dt>
                    <dd >待审核</dd>
                    <%if(Global.dataLength['audits']&&Global.dataLength['audits']>0){%>
                    <span class='count'><%-Global.dataLength['audits']%></span>
                    <%}%>
                </dl>
            </a>
            <a href="doing.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
                <dl navfoot="doing" class="">
                    <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_doing_banner.png" alt=""></dt>
                    <dd >进行中</dd>
                </dl>
            </a>
            <a href="done.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
                <dl navfoot="done" class="">
                    <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_done_banner.png" alt=""></dt>
                    <dd >已完成</dd>
                </dl>
            </a>
            <a href="flow_cc.php<?php echo '?'.$_SERVER["QUERY_STRING"]; ?>">
                <dl navfoot="cc" class="">
                    <dt><img src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/images/nav_cc_banner.png" alt=""></dt>
                    <dd >抄送</dd>
                    <%if(ccCount&&ccCount>0){%>
                    <span class='count'><%-ccCount%></span>
                    <%}%>
                </dl>
            </a>
        </div>
</script>

<script type='text/javascript'>
    var hasError = false;
    function showError(content) {
        hasError = true;
        window.FLOW.change();
        template( Global.contentSelector );
    };
    function grepThing(){
        globalMap.meTodos = $.grep(globalMap.meTodos , function( todo ){
            return !(todo && todo.thing);
        });
        globalMap.auditingTodos = $.grep(globalMap.auditingTodos , function( todo ){
            return !(todo && todo.thing);
        });
        globalMap.topTodos = $.grep(globalMap.topTodos , function( todo ){
            return !(todo && todo.thing);
        });

        globalMap.thingTodos = globalMap.todos;
        globalMap.thingTodos = $.grep(globalMap.thingTodos , function( todo ){
            return (todo && todo.thing);
        });
    }
    function isFavorite( key ){
        if(Global['apiFavorites']){
            var favoriteApps = Global['apiFavorites'].favoriteApps;
            if(favoriteApps){
                for(var i=0;i<favoriteApps.length;i++){
                    if(favoriteApps[i] == key){
                        return true;
                    }
                }
            }
        }
        return false;
    }

    function getFavoriteApp(){
        var favoriteApps=[];
        if(Global["apps"]){
            var apps=Global['apps'];
            for(var i=0;i<apps.length;i++){
                if(isFavorite(apps[i].id)){
                    favoriteApps.push(apps[i]);
                }
            }
        }
        return favoriteApps;
    }

    function checkSticks(id){
        if(globalMap.sticks){
            for(var key in globalMap.sticks){
                if (id==key) {
                    return true;
                }
            }
        }
        return false;
    }
    function grepSearch(taskArr){
        return $.grep( taskArr , function( process ,i){
            if(!Global.query.searchText){
                return true;
            }
            var searchArr=Global.query.searchText.split(" ");
            var count=0;
            var searchArrLen=searchArr.length;
            for(var i=0;i<searchArrLen;i++){
                if( (process.name || "").indexOf(searchArr[i]) > -1
                    || process.entry == searchArr[i]){
                    count++;
                }
            }
            if(count==searchArrLen){
                return true;
            }else{
                return false;
            }
        });
    }
    function grepApps(appArr){
        return $.grep( appArr , function( app ,i){
            if(!Global.query.searchText){
                return true;
            }
            var searchArr=Global.query.searchText.split(" ");
            var count=0;
            var searchArrLen=searchArr.length;
            for(var i=0;i<searchArrLen;i++){
                if( (app.name || "").indexOf(searchArr[i]) > -1){
                    count++;
                }
            }
            if(count==searchArrLen){
                return true;
            }else{
                return false;
            }
        });
    }

    function todoPagination(){
        if(globalMap._todos||Global._myApplies){
            $('.paginationContainer').each(function(){
                var thzz = this;
                $(thzz).empty();
                var paginationType = $(thzz).attr('pagination-type');
                if(paginationType=="auditingTodos"){
                    var _auditTodos = globalMap._todos;
                    var length = _auditTodos.length|| 0;
                }else{
                    var _meTodos = Global._myApplies;
                    var length = _meTodos.length|| 0;
                }
                var page=Global.page[paginationType].page|| 1;
                var pageSize=Global.page[paginationType].pageSize||10;
                if(length==0) return;
//			if(length < pageSize) return;
                var pageHtml = '<ul id="app-pagination" class="clearfix"><li>上一页</li><li>#n</li><li>#n</li><li>#c</li><li>#n</li><li>下一页</li></ul>';
                $(thzz).append(pageHtml);
                $(thzz).find('#app-pagination').easyPaging(length, {
                    page :page,
                    perpage : pageSize,
                    onSelect : function(page) {
                        $(thzz).find("#app-pagination li a").click(function() {
                            var page = $(this).attr('data-page');
                            if (page) {
                                var start = (parseInt(page) - 1 ) * pageSize;
                                var end = start + pageSize;
                                Global.page[paginationType]={start : start , end : end , page : page,pageSize:pageSize};
                            }
                        });
                    }
                });
            });
        }
    }

    var desc = function(x,y)
    {
        return (x.processCounters.count < y.processCounters.count) ? 1 : -1
    }

    function toGetHotApps(entities){
        //获取全部流程的发起数量，用来显示热门事项
        $.ajax({
            type:"get",
            //url:Global.contentpath+"client/stats/apps?domain=qziedu.cn",
            url:Global.contentpath+"client/stats/apps?domain=qziedu.cn",
            dataType:"json",
            success:function(data){
                var entities=data.entities;
                if(entities&&entities.length>0){
                    entities.sort(desc);
                    Global.stats=entities;
                }
                template();
            }
        })
    }

    function getHotApps(){
        var entities=Global.stats;
        var hotApps=[];
        for(var i=0;i<entities.length;i++){
            for(var j=0;j<Global.apps.length;j++){
                if(entities[i].id==Global.apps[j].id){
                    hotApps.push(Global.apps[j]);
                    break;
                }
            }
        }
        return hotApps;
    }

    function controlStrLength(str,Len){
        var strLength=str.length;
        if(strLength>Len){
            for(var i=0;i<Len;i++){
                str=str.substring(0,Len);
            }
            return str.concat("...");
        }else{
            return str;
        }
    }

    function getUrlParam(name){
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return decodeURI(r[2]);
        return null;
    }
    function getURL( process ){
        if( process ){
            var tasks = [];
            if(Global.approval&&Global.approval.length>0){
                $.each( Global.approval , function(key , todo){
                    if(todo.process.id == process.id){
                        tasks.push( todo );
                    }
                });
            }

            var url = process.uri;
            if(tasks.length>1){
                return url;
            }else{
                if( tasks.length == 1 ){
                    url = tasks[0].uri;
                }
                var appUrl = getAppUrl( url );
                return appUrl;
            }
        }
        return "";
    }
    function getGrepApps(){
        globalMap.apps=$.grep(globalMap.apps,function(apps){
            var tags=apps.tags;
            var department="";
            if(apps.department){
                department=apps.department;
            }
            var isElement=false;
            var isTags=false;
            var isDepartment=false;
            if(Global.searchWeiDu.element=="全部"){
                isElement=true;
            }else if(tags.indexOf(Global.searchWeiDu.element)>-1){
                isElement=true;
            }

            if(Global.searchWeiDu.tags=="全部"){
                isTags=true;
            }else if((tags!="")&&(tags.indexOf(Global.searchWeiDu.tags)>-1)){
                isTags=true;
            }

            if(Global.searchWeiDu.department=="全部"){
                isDepartment=true;
            }else if((department!="")&&(department.indexOf(Global.searchWeiDu.department)>-1)){
                isDepartment=true;
            }
            if(isElement&&isTags&&isDepartment){
                return true;
            }else{
                return false;
            }
        })
    }
    function getElement(){
        var eleArr=[];
        if(Global.apps&&Global.apps.length>0){
            _.each(Global.apps,function(app){
                var tags=app.tags;
                if(tags&&tags.split(",").length>1){
                    var ele=tags.split(",")[1];
                    if(!isArrExit(eleArr,ele)){
                        eleArr.push(ele);
                    }
                }
            })
        }
        return eleArr;
    }
    function objKeySort(obj) {//排序的函数
        var newkey=[];
        for(var key in obj){
            newkey.push(key);
        }
        newkey=newkey.sort();

        var newObj = {};//创建一个新的对象，用于存放排好序的键值对
        for (var i = 0; i < newkey.length; i++) {//遍历newkey数组
            newObj[newkey[i]] = obj[newkey[i]];//向新创建的对象中按照排好的顺序依次增加键值对
        }
        return newObj;//返回排好序的新对象
    }

    function controlStrLength(str,Len){
        var strLength=str.length;
        if(strLength>Len){
            for(var i=0;i<Len;i++){
                str=str.substring(0,Len-1);
            }
            return str.concat("...");
        }else{
            return str;
        }
    }
    //判断数组中是否有那一项
    function isArrExit(arr,str){
        var isExit=false;
        if(arr.length==0){
            isExit=false;
        }else{
            for(var j=0;j<arr.length;j++){
                if(arr[j]==str){
                    isExit=true;
                    break;
                }
            }
        }
        return isExit;
    }
    function grepCc(){
        var ccsArr=[];
        if(globalMap.ccs&&globalMap.ccs.length>0){
            if(Global.ccQuery=="all"){
                ccsArr=globalMap.ccs;
            }else if(Global.ccQuery=="read"){
                ccsArr=$.grep(globalMap.ccs,function(item){
                    if(item.read&&item.read>item.ccCreate){
                        return true;
                    }
                    return false;
                })
            }else if(Global.ccQuery=="unread"){
                ccsArr=$.grep(globalMap.ccs,function(item){
                    if(item.read&&item.read>item.ccCreate){
                        return false;
                    }
                    return true;
                })
            }
        }
        return ccsArr;
    }
    $(document).ready(function() {
        $.extend( Global.selectorMap , {"[template]" : "click" , ".stand-re-left li" : "click"
            , ".stand-img-send a.stand-img-send-collect" : "click" , ".carousel-collect" : "click" , ".pr-select" : "click" ,
            ".add-top" : "click" , ".remove-top" : "click" , "[process-identity]" : "click","[tag-select] a.tag-select-a":"click",
            ".select-view-type a.selectType":"click",".priority_pagination li":"click","#selectContent-xiala li":"click",".rq":"click","#app-pagination li a":"click",".tagList p":"click","[app-identity]":"click","[cc-identity]":"click",".pr-select-cc-chooseAll":"click",".ccQuery li":"click"});
        $.extend( Global.hashMap , { "appall" : "contentsAppAllTemplate","favorite" : "contentsFavoriteTemplate","myApply":"contentsApplyTemplate","cc":"contentsCcTemplate"});
        $.extend( Global.apiMap , {"api/me/processes/merge" : "myApplies","api/cc.php?limit=100000&start=%s&keyword=%s":"ccs","api/cc.php?limit=%s&start=%s&keyword=%s":"ccs1"});
        //$.extend( Global.apiMap , {"api/me/processes/merge" : "myApplies","api/cc.php?limit=100000&start=%s&keyword=%s":"ccs",	"api/cc.php?limit=%s&start=%s&keyword=%s":"ccs1","apps/recommended?domain=qziedu.cn":"apps","api/me/apps":"apps1"});

        Global.query.choosenTag=Global.defaultTags.ALL;
        Global.queryDatas={"myApplies":{sep:false}};
        Global.ccQuery="all";
        Global.searchWeiDu={
            department:"全部",
            tags:"全部",
            element:"全部",
            searchType:""
        }
        Global.scrollTop=false;
        Global.titleMap = {"apps":"服务大厅","todo":"待提交","audit":"待审核","myApply":"我的申请","doing":"进行中","done":"已完成","appall" : "服务中心","favorite" : "我的收藏","cc":"抄送","toaudit":"待审核"};
        Global.collectPageNow=1;
        Global.page = { 'todos' : {start : 0 , end : 10 , page : 1,pageSize:10} , 'ccs' : {start : 0 , end : 10 , page : 1,pageSize:10},'audits' : {start : 0 , end : 10 , page : 1,pageSize:10} };
        Global.pageSearch=function(item){
            if($(".search-input").size()>0){
                var searchText=$(".search-input").val();
                var searchTextArr=searchText.split(" ");
                for(var i=0;i<searchTextArr.length;i++){
                    if(searchTextArr[i]!=""){
                        if(!searchText||(item.process.name || "").indexOf(searchTextArr[i])>-1||item.process.entry==searchTextArr[i]
                            ||item.process.owner.account==searchTextArr[i]||(item.process.owner.name|| "").indexOf(searchTextArr[i])>-1||item.process.app.name.indexOf(searchTextArr[i])>-1
                        ){
                            return true;
                        }
                    }
                }
            }
            return false;
        }
        if(Global.pathName=="appall"){
            var chooseTag=getUrlParam("chooseTag");
            if(chooseTag!=null){
                Global.query.choosenTag=chooseTag;
            }
        }
        //
        window.templateBind = function(){
            $('[rapid-cc]').click(function(){
                var doCc=false;
                for(key in Global.rapidCc.checked){
                    if(Global.rapidCc.checked[key]==true){
                        doCc=true;
                        break;
                    }
                }
                if(!doCc){
                    TCUtils.alert("请至少选择一个抄送事项！");
                }else{
                    FLOW.rapidCc.doCc();

                }
            });
            $(".grepCc").click(function(){
                $(this).find("ul").toggleClass("show");
            })
            $(".ccQuery li").click(function(){
                var ccQuery=$(this).attr("ccQuery");
                Global.ccQuery=ccQuery;
            })
            $("[cc-identity]").click(function(){
                var ccIdentity = $(this).attr('cc-identity');
                FLOW.rapidCc.toggle( ccIdentity );
            });
            $(".pr-select-cc-chooseAll").click(function(){
                var ccChooseStatu=$(this).attr("ccChooseStatu");
                FLOW.rapidCc.chooseAllToggle(ccChooseStatu);
            })
            $('[process-identity]').click(function(){
                var id = $(this).attr('process-identity');
                returnUrl = $(this).attr('return-url');
                processIdentity = id;
                Global.templateSelector = "#contentsItemViewTemplate";
                window.FLOW.init( 'processes' , 'api/process/%s'.replace('%s' , id) , function(){
                    Global.isLoading = false;
                });
            });

            $('[rate-identity]').click(function(){
                var id = $(this).attr('rate-identity');
                Global.rate = {
                    id : id ,
                    rating : $(this).attr('item-rating') || 0,
                    review : $(this).attr('item-review') || ""
                }
                $('.stand-main-content').html(  _.template(  $('#rateViewTemplate').html() , {}) );
                $('.rateit').rateit({
                    step : 1
                });
                $('.comment_xin_div').rateit('value' , Global.rate.rating);
                $('.commentSubmit').click(function(){
                    Global.rate.review = $('.commentContainer textarea').val();
                    var rating = $('.comment_xin_div').rateit('value') || 0;
                    if(!$.isNumeric(rating)){
                        rating = Global.rate.rating;
                    }
                    if(rating< 3 && !Global.rate.review){
                        layer.alert("评分低于3分请给出评论！");
                        return false;
                    }
                    $.ajax({
                        async: false,
                        type: "POST",
                        url: Global.contentpath+'api/process/' + id + "?action=rate&rating=" + rating + "&comment=" + Global.rate.review,
                        success: function(json){
                            if(json && json.errno==0 ){
                                layer.confirm("评价完成！" ,function(){
                                    location.reload();
                                });
                            }else{
                                layer.alert("评价失败！");
                            }
                        },
                        error:function(xhr,error){
                        }
                    });
                });
            });



            $(".sceneList p").click(function(){
                var scene=$(this).html();
                Global.searchWeiDu.tags=scene;
                FLOW.prevChoosenTag();

            })
            $(".categoryList p").click(function(){
                var category=$(this).html();
                Global.searchWeiDu.department=category;
                FLOW.prevChoosenTag();
            })
            $(".objList p").click(function(){
                var obj=$(this).html();
                Global.searchWeiDu.element=obj;
                FLOW.prevChoosenTag();

            })
            $(".xialaBm").click(function(){
                $(".categoryList").toggleClass("show");
                $(this).find("span").toggleClass("xiala");
                $(".sceneList").removeClass("show");
                $(".objList").removeClass("show");
                $(this).find("span").removeClass("xiala");
            })
            $(".xialaLb").click(function(){
                $(".sceneList").toggleClass("show");
                $(this).find("span").toggleClass("xiala");
                $(".categoryList").removeClass("show");
                $(".objList").removeClass("show");
                $(this).find("span").removeClass("xiala");
            })
            $(".xialaDx").click(function(){
                $(".objList").toggleClass("show");
                $(this).find("span").toggleClass("xiala");
                $(".sceneList").removeClass("show");
                $(".categoryList").removeClass("show");
                $(this).find("span").removeClass("xiala");
            })
            if(Global.pathName=="todo"||Global.pathName=="myApply"||Global.pathName=="audits"){
                todoPagination();
            }




            $('.tag-select').change(function(){
                Global.query.choosenTag = $(this).val();
                FLOW.prevChoosenTag();
            });

            $('[tag-select] a.tag-select-a').click(function(){
                Global.query.choosenTag = $.trim($(this).text());
                FLOW.prevChoosenTag();
                Global.appallPage={'appall':{start : 0 , end : 8 , page : 1,pageSize:8}}
                if(Global.pathName=="appall"){
                    doAppallPage();
                }
            });

            $('[app-identity]').click(function(){
                collectAjax=false;
                var id = $(this).attr('app-identity');
                var method = "put" , type = "PUT";
                if( isFavorite( id ) ){
                    method = "del";
                    type = "DELETE";
                }
                $.ajax({
                    url : Global.contentpath +  "api/me/preference/FavoriteApps/"+id+"?method="+method,
                    async:false,
                    success : function( response ) {
                        if (response.errno == 0 && response.entities && response.entities.length > 0) {
                            Global['apiFavorites'] = response.entities[0];
                            collectAjax=true;
                        }else{
                            showError(response.error);
                        }
                    }
                });
            });

            $('.search-btn').click(function(){
                Global.query.searchText = $('.search-input').val();
                Global.query.data = Global.queryDatas[Global.dataName];
                Global.query.limit=10;
                FLOW.init(Global.dataName);
                if(Global.pathName=="todo"||Global.pathName=="cc"){
                    Global.page = { 'todos' : {start : 0 , end : 10 , page : 1,pageSize:10} , 'ccs' : {start : 0 , end : 10 , page : 1,pageSize:10}};
                }
            });

            $('.search-input').keydown(function(event){
                if(event.keyCode == 13){
                    Global.query.searchText = $('.search-input').val();
                    Global.query.data = Global.queryDatas[Global.dataName];
                    Global.query.limit=10;
                    FLOW.init(Global.dataName);
                    if(Global.pathName=="todo"||Global.pathName=="cc"){
                        Global.page = { 'todos' : {start : 0 , end : 10 , page : 1,pageSize:10} , 'ccs' : {start : 0 , end : 10 , page : 1,pageSize:10}};
                    }
                }
            });
            $(".search_input_css_appall").blur(function(){
                if($(this).val()==""){
                    $(this).addClass("showInput");
                    $(".search_form_todo").addClass("showForm");
                    $(".search_btn_css_appall").removeClass("show");
                }
            })
            $(".search_input_css_appall").focus(function(){
                $(this).removeClass("showInput");
                $(".search_form_todo").removeClass("showForm");
                $(".search_btn_css_appall").addClass("show")
            })
            $(".search_btn_in").click(function(){
                window.location.href = "http://service.qziedu.cn/taskcenter/wechat/appall" + "?searchq=" + $('.search_input_in').val();
            })
            $('.search_input_in').keydown(function(event){
                if(event.keyCode == 13){
                    window.location.href = "http://service.qziedu.cn/taskcenter/wechat/appall" + "?searchq=" + $('.search_input_in').val();
                }

            });
            $(".text").click(function(){
                window.location.href = "http://service.qziedu.cn/taskcenter/logout"
            })
            $(".slide-btn").click(function(){
                $(this).parents(".fl").toggleClass("open");
                if(Global.open){
                    Global.open=false;
                }else{
                    Global.open=true;
                }
            })
            $(".select-view-type a.selectType").click(function(){
                Global.selectType=$(this).attr("showType");
            })
            $(".my-favorite-tab li").click(function(){
                var nowPage=$(this).find("a").attr("data-page");
                Global.collectPageNow=nowPage;
            })
            $("#selectContent-xiala li").click(function(){
                var selectNum=parseInt($(this).find("a").html());
                Global.page.appall={start : 0 , end : selectNum , page : 1,pageSize:selectNum};
                if(Global.pathName=="appall"){
                    doAppallPage();
                }
            })
            //app-menu
            $("#app-menu").click(function(event){
                event.stopPropagation();
                $(".nav").css("right","0%");
            });
            $(document).click(function(event){
                var _con = $('.mobile_nav');
                if(!_con.is(event.target) && _con.has(event.target).length === 0){ // Mark 1
                    //$('#divTop').slideUp('slow');   //滑动消失
                    $(".mobile-nav").css("right","-100%");    //淡出消失
                }
            })
            $(".slide-btn").click(function(){
                $(".slide-items").slideToggle();
            });
            $(".sf h5").click(function(){
                $(this).next().slideToggle();
            })
            $(".fl h5").click(function(){
                $(this).next().slideToggle();
            })

            $(".rq").click(function(){
                if(globalMap.tagApps){
                    globalMap.tagApps[Global.query.choosenTag].apps.sort(descCounts);
                }
            })
            $("span.toAppAll").click(function(){
                var chooseTag=$(this).attr("chooseTag");
                window.location.href = "http://service.qziedu.cn/taskcenter/workflow/appall"+"?chooseTag=" + chooseTag;
            })
            $(".stuList,.teachList").find("a").css("cursor","default").click(function(){
                return false;
            })

            //点击搜索夹带参数跳转到服务中心
            $('.toAppallHome').click(function(){
                //alert('111');
                location.href = "http://service.qziedu.cn/taskcenter/wechat/appall"+"?search="+$(".search_content_home").val();
            })

            $(document).scroll(function(){
                if($('.content_shenpi').size()>0){
                    if ($(document).height() - $(document).scrollTop() - $(window).height() <=0  ){
                        if($('.content_shenpi .message-title').length == 0 ){
                            $('.content_shenpi').append('<div class="message-title" style="padding: 35px 80px;font-size: 18px;color: #7f8180;text-align: center;"><i class="fa fa-spinner fa-spin"></i> 加载中...</div>');
                            var post = setTimeout(function(){
                                var total = Global.dataLength[Global.dataName];
                                Global.scrollTop =false;
                                if(Global.dataName=="todos"||Global.dataName=="audits"||Global.dataName=="ccs"){
                                    if(total > Global.page[Global.dataName].pageSize){
                                        Global.page[Global.dataName].pageSize += 10;
                                        template();
                                        start = true;
                                        clearTimeout( post );
                                    }else{
                                        $('.content_shenpi .message-title').remove();
                                        $('.content_shenpi').append('<div class="message-title" style="padding: 35px 80px;font-size: 18px;color: #7f8180;text-align: center;"> 没有更多了</div>');
                                    }
                                }else{
                                    if(total > Global.query.limit){
                                        Global.query.limit += 10;
                                        window.FLOW.init( Global.dataName);
                                        start = true;
                                        clearTimeout( post );
                                    }else{
                                        $('.content_shenpi .message-title').remove();
                                        $('.content_shenpi').append('<div class="message-title" style="padding: 35px 80px;font-size: 18px;color: #7f8180;text-align: center;"> 没有更多了</div>');
                                    }
                                }

                            },1000);
                        }
                    }
                }
            });

        }

        window.endingRender = function(){
            $("[navfoot="+Global.pathName+"]").addClass("click");

            $("[navtop="+Global.pathName+"]").addClass("active");
            var img=$("[navtop="+Global.pathName+"]").find("img");
            if(img.size()>0){
                img.attr("src",img.attr("src").replace("_normal",""));
            }



            var approvalLength=0;
            $('[data-url]').each(function(){
                var data_url=$(this).attr('data-url');
                $(this).attr('src' , data_url);
            });
//		getStats();
            iframeLink();
        };

    });
    function iframeLink(){
        var a = Math.max(document.body.scrollHeight,document.body.clientHeight);
        window.parent.postMessage(a+"px",'*');
    }
</script>

<div class="modal-qh"></div>
<div class="modal-rate"></div>
<iframe src="http://service.qziedu.cn/taskcenter/refresh" style="display: none;"></iframe>
<script src="http://service.qziedu.cn/infoplus/static/js/sdk/infoplus.sdk.js?_v=20220406-081725"></script>
<script src="http://service.qziedu.cn/taskcenter/resources/common/js/jquery.hDialog.min.js"></script>
<script src="http://service.qziedu.cn/taskcenter/resources/common/js/unslider-min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var check = InfoPlusSDK.checkBrowser();
        if(!check)
            return;
        InfoPlusSDK.message.create('77078e28-0418-11ec-a843-cab13165ecfc', 'http://service.qziedu.cn/infoplus/message/sub').sub("task", function(message) {
            init();
        });
    });
</script>


<script>
    function strExit(str,res){
        var data=res.entities;
        for(var i=0;i<data.length;i++){
            var postName=data[i].post.name;
            if(str==postName){
                return true;
            }
        }
        return false;
    }
    $(document).ready(function() {
        window.FLOW.go(function(){
            window.FLOW.change();
            if(Global.pathName == "appall"){
                Global.query.searchText = getUrlParam("search");
                Global.searchWeiDu.searchType = getUrlParam("searchType");

            }
            template();
        });
        $("#myTab li").click(function() {
            if ($('a .fa-spinner', this).length == 0) {
                $('a', this).prepend('<i class="fa fa-spinner fa-spin"></i>&nbsp;&nbsp;&nbsp;');
            }
        });
        ( init = function() {
            window.FLOW.init( Global.dataName);
            if(Global.dataName != "todos"){
                window.FLOW.init( "todos");
            }
            if(Global.dataName != "ccs"){
                window.FLOW.init("ccs");
            }
            if(Global.pathName=="apps"){
                toGetHotApps();
            }
            if(Global.dataName=="apps"){
                $.ajax({
                    type : "GET",
                    url : Global.contentpath +  "api/me/preference/FavoriteApps",
                    dataType : "json",
                    async: false,
                    success : function( response ) {
                        if (response.errno == 0 && response.entities && response.entities.length > 0) {
                            Global['apiFavorites'] = response.entities[0];
                        }else{
                            showError(response.error);
                        }
                    }
                });
            }
        })();

    });

</script>
<!--[if lte IE 8]>
<script src="http://service.qziedu.cn/taskcenter/resources/qziedu/default/js/index-ie8.js"></script>
<![endif]-->

</body>
</html>
