    <link rel="stylesheet" href="/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/assets/css/admin.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <script src="/assets/js/echarts.min.js"></script>
    <link rel="icon" type="image/png" href="/assets/i/favicon.png">
<div class="tpl-portlet-components">
    
    <div class="tpl-block">
        <div class="am-g">
            
            
            <div class="am-u-sm-12 am-u-md-3">
            	<form action="/huodong" method="get">
                <div class="am-input-group am-input-group-sm">
                    <input type="text" name="keywords" class="am-form-field" value="">
                    <span class="am-input-group-btn">
			            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"></button>
			          </span>
                </div>
                </form>
            </div>
        </div>
        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-striped am-table-hover table-main">
                    <tbody>
                        
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td></td>
                            <td class="am-hide-sm-only"></td>
                            <td class="am-hide-sm-only"></td>
                            <td class="am-hide-sm-only"></td>
                            <td class="am-hide-sm-only"></td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a href="/huodong//edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                        <form style="float:left" action="/huodong/" method="post">
                                            
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                        </form>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                <style>
					.pagination{
					    padding-left: 0;
					    margin: 1.5rem 0;
					    list-style: none;
					    color: #999;
					    text-align: left;
					    padding: 0;
					}

					.pagination li{
						display: inline-block;
					}

					.pagination li a, .pagination li span{
						color: #23abf0;
					    border-radius: 3px;
					    padding: 6px 12px;
					    position: relative;
					    display: block;
					    text-decoration: none;
					    line-height: 1.2;
					    background-color: #fff;
					    border: 1px solid #ddd;
					    border-radius: 0;
					    margin-bottom: 5px;
					    margin-right: 5px;
					}

					.pagination .active span{
						color: #23abf0;
					    border-radius: 3px;
					    padding: 6px 12px;
					    position: relative;
					    display: block;
					    text-decoration: none;
					    line-height: 1.2;
					    background-color: #fff;
					    border: 1px solid #ddd;
					    border-radius: 0;
					    margin-bottom: 5px;
					    margin-right: 5px;
					    background: #23abf0;
					    color: #fff;
					    border: 1px solid #23abf0;
					    padding: 6px 12px;
					}
				</style>
                <div class="am-cf">
                    <div class="am-fr">
                        
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>