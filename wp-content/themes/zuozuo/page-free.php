<?php 
if ($_GET['code']) {
    echo $_GET['code'];
   
    // get_template_part( 'page', $_GET['code'] );
}

 ?>

<?php 

get_header();

 ?>

        <!--复用的头部——导航 END-->
<div class="container">

<form class="form-horizontal col-md-9 col-lg-9 " role="form" style="margin-top: 150px;margin-bottom: 100px;">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="firstname" class="col-sm-2 control-label">姓名</label>
            <div class="col-sm-10 col-md-8 col-lg-8 ">
                <input type="text" class="form-control" id="firstname" 
                       placeholder="请输入您的真实姓名">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="firstname" class="col-sm-2 control-label">邮箱</label>
            <div class="col-sm-10 col-md-8 col-lg-8 ">
                <input type="text" class="form-control" id="firstname" 
                       placeholder="请输入您的电子邮件地址">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="firstname" class="col-sm-2 control-label">电话</label>
            <div class="col-sm-10 col-md-8 col-lg-8 ">
                <input type="text" class="form-control" id="firstname" 
                       placeholder="例：01012345678或直接输入手机号">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="firstname" class="col-sm-2 control-label">公司</label>
            <div class="col-sm-10 col-md-8 col-lg-8 ">
                <input type="text" class="form-control" id="firstname" 
                       placeholder="请输入您的公司名称">
            </div>
        </div>
    </div> 
    
    <div class="form-group col-md-8 col-lg-8">
        <label for="name">需要的坐席规模</label>
        <select class="form-control">
            <option>1-4</option>
            <option>5-9</option>
            <option>10-29</option>
            <option>30-49</option>
            <option>50-99</option>
            <option>100人以上</option>
        </select>
    </div>

    <div class="form-group col-md-8 col-lg-8">
        <label for="name">备注</label>
        <textarea class="form-control" rows="3"></textarea>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 我需要演示，请尽快联系我
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">提交申请</button>
        </div>
    </div>
</form>


</div>
<?php 

get_footer();

 ?>