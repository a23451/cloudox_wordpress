<?php 
if ($_GET['code']) {
    echo $_GET['code'];
    header('location:free/?code='.$_GET['code']);
    // get_template_part( 'page', $_GET['code'] );
}

 ?>

<?php 
get_header();
 ?>


<!-- 复用头部END -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
            
            <div class="carousel-inner" role="listbox">
                <div class="item">
                    <img class="first-slide" src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/Banner1.png" alt="First slide">
                    <!--<div class="container">
                        <div class="carousel-caption">
                            <h1>Example headline.</h1>
                            <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>-->
                </div>
                
                <div class="item active">
                    <img class="second-slide" src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/Banner2.png" alt="Second slide">
                    <!--<div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>-->
                </div>
                
                <div class="item">
                    <img class="third-slide" src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/Banner3.png" alt="Third slide">
                    <!--<div class="container">
                        <div class="carousel-caption">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>-->
                </div>
            </div>
            
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <div style="background-color: #1c1c1b;opacity: 0.8;min-height: 90px;">
            <div class="container">
                <div class="row">       
                    <a href="javascript:;">
                        <div class="col-lg-3 col-md-3">
                            <div class="media" style="margin-top: 5%;">
                                <div class="media-left media-middle">
                                    <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/bar1.png">
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading" style="color:#FFFFFF;font-size:18px;">新闻</h4>
                                    <p style="font-size: 13px;color:#5c5a50;">云牛受邀参与AWS技术峰会2016</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript:;">
                        <div class="col-lg-3 col-md-3">
                            <div class="media" style="margin-top: 5%;">
                                <div class="media-left media-middle">
                                    <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/bar2.png">
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading" style="color:#FFFFFF;font-size:18px;">活动</h4>
                                    <p style="font-size: 13px;color:#5c5a50;">截至2017年4月30日</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript:;">
                        <div class="col-lg-3 col-md-3">
                            <div class="media" style="margin-top: 5%;">
                                <div class="media-left media-middle">
                                    <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/bar3.png">
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading" style="color:#FFFFFF;font-size:18px;">干货</h4>
                                    <p style="font-size: 13px;color:#5c5a50;">呼叫中心运营的关键KPI指标</p>
                                </div>
                            </div>
                        </div>
                    </a>
    
                    <a href="javascript:;">
                        <div class="col-lg-3 col-md-3">
                            <div class="media" style="margin-top: 5%;">
                                <div class="media-left media-middle">
                                    <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/bar4.png">
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading" style="color:#FFFFFF;font-size:18px;">视频</h4>
                                    <p style="font-size: 13px;color:#5c5a50;">关于我们</p>
                                </div>
                            </div>
                        </div>
                    </a>    
                </div>
            </div>
        </div>

        
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
                    <div style="text-align: center;margin-top: 62px;">
                        <h2><b>CTI-Cloud</b></h2>
                        <p style="font-size: 18px;color:#292929;margin-top: 0px;">大型呼叫中心·集成化运营</p>
                        <p style="margin-top: 20px;color:#848484;font-size:16px;line-height:28px;margin-bottom:25px;">提供呼叫中心核心软交换和CTI的开发、业务系统整合、通信资源整合、云平台运营等一揽子服务，让客户可以快速、安心、聚焦在自己的核心业务。</p>
                        <a href="javascript:;" class="btn btn-default" style="margin-bottom: 45px;background-color:#00825f;color:#ffffff;border-radius:80px;font-size:16px;width:130px;height:36px;">了解详情</a>
                    </div>
                </div>
            </div>
        </div>


        <div style="min-height:430px;background-color:#00825f;"><!--background:url('images/bg_green.jpg') center 0;-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6" style="text-align: center;padding-top: 55px;">
                        <span style="border-bottom: 2px solid white;font-size: 20px;color: white;line-height: 30px;">平台能力</span>
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-xs-4 col-md-4" style="padding: 0 10px;">
                                <a href="javascript:;">
                                    <div style="border: 1px solid rgb(51, 155, 127); height: 113px;" class="border-white">
                                        <h5 style="font-size: 14px;font-weight: lighter;color: white;margin-top: 18px;">大容量系统</h5>
                                        <span style="font-weight: bold;font-size: 18px;color: white;">20000</span>
                                        <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;">座席并发/单平台</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4 col-md-4" style="padding: 0 10px;">
                                <a href="javascript:;">
                                    <div style="border: 1px solid rgb(51, 155, 127); height: 113px;" class="border-white">
                                        <h5 style="font-size: 14px;font-weight: lighter;color: white;margin-top: 18px;">高可用服务</h5>
                                        <span style="font-weight: bold;font-size: 18px;color: white;">99.78%</span>
                                        <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;margin-bottom: 0px;">整体可靠性</p>
                                        <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;">系统+机房+网络+电路</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4 col-md-4" style="padding: 0 10px;">
                                <a href="javascript:;">
                                    <div style="border: 1px solid rgb(51, 155, 127); height: 113px;" class="border-white">
                                        <h5 style="font-size: 14px;font-weight: lighter;color: white;margin-top: 18px;">高性能平台</h5>
                                        <span style="font-weight: bold;font-size: 18px;color: white;">300-500</span>
                                        <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;margin-bottom: 0px;">整体应用级别CAPS</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-xs-4 col-md-4" style="padding: 0 10px;">
                                <a href="javascript:;">
                                    <div style="border: 1px solid rgb(51, 155, 127); height: 113px;" class="border-white">
                                        <h5 style="font-size: 14px;font-weight: lighter;color: white;margin-top: 25px;">业务弹性伸缩</h5>
                                        <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;margin-bottom: 0px;">按需调整座席</p>
                                        <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;">按需调度通信资源</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4 col-md-4" style="padding: 0 10px;">
                                <a href="javascript:;">
                                    <div style="border: 1px solid rgb(51, 155, 127); height: 113px;" class="border-white">
                                        <h5 style="font-size: 14px;font-weight: lighter;color: white;margin-top: 25px;">高度可定制</h5>
                                        <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;margin-bottom: 0px;">通过API开放能力</p>
                                        <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;">支持代码级的高度可定制</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4 col-md-4" style="padding: 0 10px;">
                                <a href="javascript:;">
                                    <div style="border: 1px solid rgb(51, 155, 127); height: 113px;" class="border-white">
                                        <h5 style="font-size: 14px;font-weight: lighter;color: white;margin-top: 25px;">部署快速灵活</h5>
                                        <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;margin-bottom: 0px;">快速上线、集中职场</p>
                                        <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;">分布式职场、移动座席</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" style="text-align: center;padding-top: 55px;">
                        <span style="border-bottom: 2px solid white;font-size: 20px;color: white;line-height: 30px;">场景化应用</span>
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-xs-6 col-md-6" style="padding: 0 10px;">
                                <a href="javascript:;">
                                    <div style="border: 1px solid rgb(51, 155, 127); height: 113px;" class="border-white">
                                        <div class="row" style="margin: 0px;">
                                            <div class="col-xs-4 col-md-4" style="padding: 0px;">
                                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/apply_0.png" style="margin-top: 27px;">
                                            </div>
                                            <div class="col-xs-8 col-md-8" style="text-align: left;padding: 0px;">
                                                <h5 style="font-size: 16px;font-weight: lighter;color: white;margin-top: 36px;">无限录音存储</h5>
                                                <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;">人工智能的基础</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-6" style="padding: 0 10px;">
                                <a href="javascript:;">
                                    <div style="border: 1px solid rgb(51, 155, 127); height: 113px;" class="border-white">
                                        <div class="row" style="margin: 0px;">
                                            <div class="col-xs-4 col-md-4" style="padding: 0px;">
                                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/apply_1.png" style="margin-top: 27px;">
                                            </div>
                                            <div class="col-xs-8 col-md-8" style="text-align: left;padding: 0px;">
                                                <h5 style="font-size: 16px;font-weight: lighter;color: white;margin-top: 26px;">智能质检（AI）</h5>
                                                <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;margin-bottom: 0px;">自动质检、全量质检</p>
                                                <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;">通话占比、质量分析</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-xs-6 col-md-6" style="padding: 0 10px;">
                                <a href="javascript:;">
                                    <div style="border: 1px solid rgb(51, 155, 127); height: 113px;" class="border-white">
                                        <div class="row" style="margin: 0px;">
                                            <div class="col-xs-4 col-md-4" style="padding: 0px;">
                                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/apply_2.png" style="margin-top: 27px;">
                                            </div>
                                            <div class="col-xs-8 col-md-8" style="text-align: left;padding: 0px;">
                                                <h5 style="font-size: 16px;font-weight: lighter;color: white;margin-top: 27px;">预测式外呼</h5>
                                                <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;margin-bottom: 0px;">独特的预测式算法，自动外呼</p>
                                                <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;">提高座席工时利用率</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-6" style="padding: 0 10px;">
                                <a href="javascript:;">
                                    <div style="border: 1px solid rgb(51, 155, 127); height: 113px;" class="border-white">
                                        <div class="row" style="margin: 0px;">
                                            <div class="col-xs-4 col-md-4" style="padding: 0px;">
                                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/apply_3.png" style="margin-top: 27px;">
                                            </div>
                                            <div class="col-xs-8 col-md-8" style="text-align: left;padding: 0px;">
                                                <h5 style="font-size: 16px;font-weight: lighter;color: white;margin-top: 27px;">流式实时计算</h5>
                                                <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;margin-bottom: 0px;">自定义监控、实时统计、</p>
                                                <p style="font-weight: lighter;color: #95dcc9;font-size: 12px;">实时报表</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
                    <div style="text-align: center;margin-top: 62px;">
                        <h2><b>全能行</b></h2>
                        <p style="font-size: 18px;color:#292929;margin-top: 0px;">中小型呼叫中心·标准化产品</p>
                        <p style="margin-top: 20px;color:#848484;font-size:16px;line-height:28px;margin-bottom:25px;">标准化的全渠道产品和服务，让客户快速、低成本的建立起专业级呼叫中心。</p>
                        <a href="javascript:;" class="btn btn-default" style="margin-bottom: 45px;background-color:#00825f;color:#ffffff;border-radius:80px;font-size:16px;width:130px;height:36px;">了解详情</a>
                    </div>
                </div>
            </div>
        </div>


        <div style="min-height:480px;text-align: center;background-color:#eeeeee;"><!--background:url(images/bg_grey.jpg) center 0;-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6" style="padding-top: 45px;">
                        <div class="row">
                            <div class="col-xs-6 col-md-6" style="padding: 0 30px;">
                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/img_0.png">
                                <h4 style="font-weight: bold;color: #00825F;">专业级产品</h4>
                                <p style="font-weight: lighter;color: #848484;font-size: 13px;">10余年专业呼叫中心积累，从专业语音服务，演进成全渠道智能化的“全能行”产品</p>
                            </div>
                            <div class="col-xs-6 col-md-6" style="padding: 0 30px;">
                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/img_1.png">
                                <h4 style="font-weight: bold;color: #00825F;">高品质运营</h4>
                                <p style="font-weight: lighter;color: #848484;font-size: 13px;">呼叫中心云服务，是“系统”更是“运营”，平台运行稳定是好产品的基础</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" style="padding-top: 45px;">
                        <div class="row">
                            <div class="col-xs-6 col-md-6" style="padding: 0 30px;">
                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/img_2.png">
                                <h4 style="font-weight: bold;color: #00825F;">按需使用</h4>
                                <p style="font-weight: lighter;color: #848484;font-size: 13px;">无需一次性高额投入，按需租用座席，中继电路弹性使用</p>
                            </div>
                            <div class="col-xs-6 col-md-6" style="padding: 0 30px;">
                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/img_3.png">
                                <h4 style="font-weight: bold;color: #00825F;">部署灵活</h4>
                                <p style="font-weight: lighter;color: #848484;font-size: 13px;">集中部署、全国分布部署、移动座席，任何时间、地点，都可以方便接入服务</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row visible-lg-block visible-md-block" style="margin-top: 45px;">
                    <div style="width: 19%;padding-top:20px;float: left;background-color: #00825F;height: 80px;margin-right: 1.25%;">
                        <div style="width:110px;margin: 0 auto;">
                            <a href="javascript:;">
                                <div style="background: url(<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/img_10.png) 380px 0px;width: 38px;height: 38px;float: left;"> </div>
                                <div style="float: left;">
                                    <h4 style="font-size: 16px;font-weight: bold;color: white;">&nbsp;&nbsp;全渠道</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div style="width: 19%;padding-top:20px;float: left;background-color: #00825F;height: 80px;margin-right: 1.25%;">
                        <div style="width:140px;margin: 0 auto;">
                            <a href="javascript:;">
                                <div style="background: url(images/img_10.png) 342px 0px;width: 38px;height: 38px;float: left;"> </div>
                                <div style="float: left;">
                                    <h4 style="font-size: 16px;font-weight: bold;color: white;">&nbsp;&nbsp;智能机器人</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div style="width: 19%;padding-top:20px;float: left;background-color: #00825F;height: 80px;margin-right: 1.25%;">
                        <div style="width:182px;margin: 0 auto;">
                            <a href="javascript:;">
                                <div style="background: url(images/img_10.png) 304px 0px;width: 38px;height: 38px;float: left;"> </div>
                                <div style="float: left;">
                                    <h4 style="font-size: 16px;font-weight: bold;color: white;">&nbsp;&nbsp;语音交互（IVR）</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div style="width: 19%;padding-top:20px;float: left;background-color: #00825F;height: 80px;margin-right: 1.25%;">
                        <div style="width:120px;margin: 0 auto;">
                            <a href="javascript:;">
                                <div style="background: url(images/img_10.png) 266px 0px;width: 38px;height: 38px;float: left;"> </div>
                                <div style="float: left;">
                                    <h4 style="font-size: 16px;font-weight: bold;color: white;">&nbsp;&nbsp;工单中心</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div style="width: 19%;padding-top:20px;float: left;background-color: #00825F;height: 80px;">
                        <div style="width:170px;margin: 0 auto;">
                            <a href="javascript:;">
                                <div style="background: url(images/img_10.png) 228px 0px;width: 38px;height: 38px;float: left;"> </div>
                                <div style="float: left;">
                                    <h4 style="font-size: 16px;font-weight: bold;color: white;">&nbsp;&nbsp;路由（Route）</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row visible-lg-block visible-md-block" style="margin-top: 15px;">
                    <div style="width: 19%;padding-top:20px;float: left;background-color: #00825F;height: 80px;margin-right: 1.25%;">
                        <div style="width:95px;margin: 0 auto;">
                            <a href="javascript:;">
                                <div style="background: url(images/img_10.png) 190px 0px;width: 38px;height: 38px;float: left;"> </div>
                                <div style="float: left;">
                                    <h4 style="font-size: 16px;font-weight: bold;color: white;">&nbsp;&nbsp;质检</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div style="width: 19%;padding-top:20px;float: left;background-color: #00825F;height: 80px;margin-right: 1.25%;">
                        <div style="width:95px;margin: 0 auto;">
                            <a href="javascript:;">
                                <div style="background: url(images/img_10.png) 152px 0px;width: 38px;height: 38px;float: left;"> </div>
                                <div style="float: left;">
                                    <h4 style="font-size: 16px;font-weight: bold;color: white;">&nbsp;&nbsp;报表</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div style="width: 19%;padding-top:20px;float: left;background-color: #00825F;height: 80px;margin-right: 1.25%;">
                        <div style="width:192px;margin: 0 auto;">
                            <a href="javascript:;">
                                <div style="background: url(images/img_10.png) 114px 0px;width: 38px;height: 38px;float: left;"> </div>
                                <div style="float: left;">
                                    <h4 style="font-size: 16px;font-weight: bold;color: white;">&nbsp;&nbsp;客户中心（CRM）</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div style="width: 19%;padding-top:20px;float: left;background-color: #00825F;height: 80px;margin-right: 1.25%;">
                        <div style="width:95px;margin: 0 auto;">
                            <a href="javascript:;">
                            <div style="background: url(images/img_10.png) 76px 0px;width: 38px;height: 38px;float: left;"> </div>
                            <div style="float: left;">
                                <h4 style="font-size: 16px;font-weight: bold;color: white;">&nbsp;&nbsp;监控</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div style="width: 19%;padding-top:20px;float: left;background-color: #00825F;height: 80px;">
                        <div style="width:190px;margin: 0 auto;">
                            <a href="javascript:;">
                                <div style="background: url(images/img_10.png) 38px 0px;width: 38px;height: 38px;float: left;"> </div>
                                <div style="float: left;">
                                    <h4 style="font-size: 16px;font-weight: bold;color: white;">&nbsp;&nbsp;呼叫分配（ACD）</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
                    <div style="margin-top: 62px;text-align:center;">
                        <h2><b>满足各种场景及解决方案</b></h2>
                        <p style="color: #848484;margin-top: 45px;margin-bottom: 55px;font-size: 16px;line-height: 28px;">找到一个好的产品，不仅仅是满足几个小需求，我们需要的是一个深度结合自身所处行业的特点而专门打造的完美的产品。</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="visible-lg-block visible-md-block col-lg-7 col-md-7">
                    <div class="row">
                        <a href="javascript:;" class="hover_piggy_img">
                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/scene1.jpg" class="col-lg-6 col-md-6 padding_0" style="height: 190px;">
                            <p style="left: 12%;color: #546071;position: absolute;font-size: 15px;top: 148px;">提升VIP客户体验的服务策略</p>
                        </a>
                        <a href="javascript:;" class="hover_piggy_img">
                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/scene2.jpg" class="col-lg-6 col-md-6 padding_0" style="height: 190px;">
                            <p style="left: 65%;position: absolute;font-size: 15px;top: 148px;color: white;">外呼服务的流程管理</p>
                        </a>
                    </div>
                    <div class="row">
                        <a href="javascript:;" class="hover_piggy_img">
                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/scene3.jpg" class="col-lg-6 col-md-6 padding_0" style="height: 190px;">
                            <p style="left: 15%;color: white;position: absolute;font-size: 15px;top: 338px;">让“客户等待”的技巧</p>
                        </a>
                        <a href="javascript:;" class="hover_piggy_img">
                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/scene4.jpg" class="col-lg-6 col-md-6 padding_0" style="height: 190px;">
                            <p style="left: 63%;color: #546071;position: absolute;font-size: 15px;top: 338px;">如何利用自助化服务降低成本</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="row pig">
                        <a href="javascript:;">
                            <div class="col-xs-4 col-md-4">
                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/icon_bankandinsurance.png">
                                <p>保险</p>
                            </div>
                        </a>
                        <a href="javascript:;">
                            <div class="col-xs-4 col-md-4">
                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/icon_education.png">
                                <p>在线教育</p>
                            </div>
                        </a>
                        <a href="javascript:;">
                            <div class="col-xs-4 col-md-4">
                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/icon_finance.png">
                                <p>新金融</p>
                            </div>
                        </a>
                
                    </div>
                    <div class="row pig">
                        <a href="javascript:;">
                            <div class="col-xs-4 col-md-4">
                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/icon_locallife.png">
                                <p>本地生活</p>
                            </div>
                        </a>
                        <a href="javascript:;">
                            <div class="col-xs-4 col-md-4">
                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/icon_health.png">
                                <p>电子商务</p>
                            </div>
                        </a>
                        <a href="javascript:;">
                            <div class="col-xs-4 col-md-4">
                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/icon_travel.png">
                                <p>旅游</p>
                            </div>
                        </a>
                
                    </div>
                    <div class="row pig">
                        <a href="javascript:;">
                            <div class="col-xs-4 col-md-4" style="background-color: white;">
                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/icon_car.png">
                                <p>汽车服务</p>
                            </div>
                        </a>
                        <a href="javascript:;">
                            <div class="col-xs-4 col-md-4">
                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/icon_house.png">
                                <p>房产装修</p>
                            </div>
                        </a>
                        <a href="javascript:;">
                            <div class="col-xs-4 col-md-4">
                                <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/icon_more.png">
                                <p>查看更多</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>        
        
        
        
        <div class="container visible-lg-block visible-md-block">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
                    <div style="text-align: center;margin-top: 110px;">
                        <h2><b>被数千家企业信赖</b></h2>
                        <p style="color: #999999;margin-top: 45px;margin-bottom: 50px;font-size: 16px;line-height: 28px;">始终坚持客户至上的原则</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>        
        
        
        <div class="visible-lg-block visible-md-block" style="background-color: #e7e7e5;">
            <div class="container">
                <div class="row">
                    <a href="javascript:;">
                        <div class="col-lg-3 col-md-3 padding_0">
                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/cases_baidu.jpg">
                        </div>
                    </a>
                    <a href="javascript:;">
                        <div class="col-lg-3 col-md-3 padding_0">
                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/cases_huaxia.jpg">
                        </div>
                    </a>
                    <a href="javascript:;">
                        <div class="col-lg-3 col-md-3 padding_0">
                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/cases_lianjia.jpg">
                        </div>
                    </a>
                    <a href="javascript:;">
                        <div class="col-lg-3 col-md-3 padding_0">
                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/cases_rong360.jpg">
                        </div>
                    </a>
                </div>
                <div class="row">
                    <a href="javascript:;">
                        <div class="col-lg-3 col-md-3 padding_0">
                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/cases_qunar.jpg">
                        </div>
                    </a>
                    <a href="javascript:;">
                        <div class="col-lg-3 col-md-3 padding_0">
                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/cases_51talk.jpg">
                        </div>
                    </a>
                    <a href="javascript:;">
                        <div class="col-lg-3 col-md-3 padding_0">
                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/cases_waimai.jpg">
                        </div>
                    </a>
                    <a href="javascript:;">
                        <div class="col-lg-3 col-md-3 padding_0">
                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/cases_youxinpai.jpg">
                        </div>
                    </a>
                </div>
            </div>
        </div>        
        

        <div style="margin-bottom: 70px;">
            <div class="row" style="margin-left: 0px;margin-right: 0px;">
                <div class="container">
                    <div class="row" style="text-align: center;margin-top: 67px;">
                        <div class="col-lg-12 col-md-12">
                            <h2><b>服务保障</b></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6" style="margin-top: 70px;">
                            <div class="row">
                                <a href="javascript:;">
                                    <div class="col-xs-6 col-xs-6 col-md-6" style="border: 1px solid rgb(228, 228, 228);text-align: center;background-color: rgba(255,255,255,0.6);width: 40%;margin-left: 6%;height: 360px;">
                                        <div style="position: relative;top: 35px;">
                                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/service_ops.png">
                                            <h3 style="font-size: 21px;color: #292929;margin-bottom: 38px;">运维</h3>
                                            <p style="font-size: 15px;color: #818170;line-height: 20px;margin-bottom: 20px;">集中监控</p>
                                            <p style="font-size: 15px;color: #818170;line-height: 20px;margin-bottom: 20px;">例行维护与巡检</p>
                                            <p style="font-size: 15px;color: #818170;line-height: 20px;margin-bottom: 20px;">报告管理</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;">
                                    <div class="col-xs-6 col-md-6" style="border: 1px solid rgb(228, 228, 228);text-align: center;background-color: rgba(255,255,255,0.6);width: 40%;margin-left: 9%;height: 360px;">
                                        <div style="position: relative;top: 35px;">
                                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/service_customer.png">
                                            <h3 style="font-size: 21px;color: #292929;margin-bottom: 38px;">客服</h3>
                                            <p style="font-size: 15px;color: #818170;line-height: 20px;margin-bottom: 20px;">专属服务经理</p>
                                            <p style="font-size: 15px;color: #818170;line-height: 20px;margin-bottom: 20px;">咨询、投诉及故障报告</p>
                                            <p style="font-size: 15px;color: #818170;line-height: 20px;margin-bottom: 20px;">培训服务</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6" style="margin-top: 70px;">
                            <div class="row">
                                <a href="javascript:;">
                                    <div class="col-xs-6 col-md-6" style="border: 1px solid rgb(228, 228, 228);text-align: center;background-color: rgba(255,255,255,0.6);width: 40%;margin-left: 6%;height: 360px;">
                                        <div style="position: relative;top: 35px;">
                                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/service_upgrade.png">
                                            <h3 style="font-size: 21px;color: #292929;margin-bottom: 38px;">更新与升级</h3>
                                            <p style="font-size: 15px;color: #818170;line-height: 20px;margin-bottom: 20px;">系统免费升级，不断演进，保证与主线版本一致</p>
                                            <p style="font-size: 15px;color: #818170;line-height: 20px;margin-bottom: 20px;">确保互联网和IT环境演进后系统的可用性</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;">
                                    <div class="col-xs-6 col-md-6" style="border: 1px solid #EBEBEB;text-align: center;background-color: rgba(255,255,255,0.6);width: 40%;margin-left: 9%;height: 360px;">
                                        <div style="position: relative;top: 35px;">
                                            <img src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/images/service_consult.png">
                                            <h3 style="font-size: 21px;color: #292929;margin-bottom: 38px;">咨询服务</h3>
                                            <p style="font-size: 15px;color: #818170;line-height: 20px;margin-bottom: 20px;">业务需求分析、IT基础设施考察及建议</p>
                                            <p style="font-size: 15px;color: #818170;line-height: 20px;margin-bottom: 20px;">呼叫中心方案</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
<?php 
get_footer();
 ?>