<?php 
    require_once('connect.php');
    $sql = "select * from travel_list order by id desc";
    $query = mysqli_query($con,$sql);
    if($query&&mysqli_num_rows($query)){
        while($row = mysqli_fetch_assoc($query)){
            $data[] = $row;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- me -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="index.html">秦皇岛</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">行程</a>
                    </li>
                    <li>
                        <a href="services.php">景点</a>
                    </li>
                    <li>
                        <a href="contact.php">游记</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">秦皇岛行程推荐
                    <!-- <small>Subheading</small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->
        
        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="screen">
                    <dl class="checkedBox">
                        <dt>您已选择：</dt>
                        <dd><a href="#" onclick="delSel(this,'item1')">撞色</a></dd>
                        <dd><a href="#" onclick="delSel(this,'item1')">撞电线杆</a></dd>
                    </dl>
                    <div class="screenList">
                        <dl class="screenItem" id="item1">
                            <dt>赠品A:</dt>
                            <dd><a href="#" onclick="addSel(this)">撞衫A</a></dd>
                            <dd><a href="#" onclick="addSel(this)">撞头A</a></dd>
                            <dd><a href="#" onclick="addSel(this)">撞脸A</a></dd>
                            <div class="clear"></div>
                        </dl>
                        <dl class="screenItem" id="item2">
                            <dt>赠品B:</dt>
                            <dd><a href="#" onclick="addSel(this)">撞衫B</a></dd>
                            <dd><a href="#" onclick="addSel(this)">撞头B</a></dd>
                            <dd><a href="#" onclick="addSel(this)">撞脸B</a></dd>
                            <div class="clear"></div>
                        </dl>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">路线展示</h2>
            </div>

             <!-- Project Two -->
        <div class="row ">
            <?php
            if(empty($data)){   
                echo "当前没有文章，请管理员在后台添加文章";
            }else{
                foreach($data as $value){
            ?>
                <div class="col-md-3 xcjs">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-hover" src="<?php echo $value['img']?>" alt="">
                    </a>
                </div>
                <div class="col-md-9 xcjs">
                    <h3><?php echo $value['title']?></h3>
                    <span class="daycount">
                        <i></i>
                        "<?php echo $value['days']?>"
                    </span>
                    <span class="sightcount">
                        <i></i>
                        "<?php echo $value['place_count']?>"
                    </span>
                    <p><?php echo $value['sumary']?></p>
                    <div><span><!-- 此行去了： --><?php echo $value['go_place']?></span></div>
                    <div><span><!-- 行程标签： --><?php echo $value['tags']?></span></div>
                </div>
                <hr>
            <?php 
                    }
                }
             ?>
             
        </div>
        <!-- /.row -->
        <hr>
         <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
        
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script language="javascript" type="text/javascript">   
    $(function(){
        $(".screenList dl:last").attr("style","border-bottom:0px");
    });
    function addSel(obj){
        var checkValue = obj.innerHTML;
        var scBox = $(obj).parent().parent().attr("id");
        $(".checkedBox").append("<dd><a href='#' onclick='delSel(this,\"" + scBox + "\")'>"+ checkValue +"</a></dd>");
        $(obj).parent().remove();
        return false;
    }
    function delSel(obj,parentId) {
        var checkValue = obj.innerHTML;
        $("#" + parentId + " div").before("<dd><a href='#' onclick='addSel(this)'>" + checkValue + "</a></dd>");
        $(obj).parent().remove();
        return false;
    }
    </script>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-20541395-2']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- 筛选功能完成 -->

</body>

</html>
