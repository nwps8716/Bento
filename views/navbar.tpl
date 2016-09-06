
<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand new-li">中佑訂便當</a>
        </div>
        <div id=navbar class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="new-li">
                    <a>Hello {$userName}</a>
                </li>
                <li class="new-li">
                    <a href="#">開單</a>
                </li>
                <li class="new-li">
                    <a href="#">訂單查詢</a>
                </li>
                <li class="new-li">
                    <a href="/Bento/Home/addShopPage?userName={$userName}">新增店家</a>
                </li>
                <li class="new-li">
                    <a href="/Bento/Home/signOut?signOut=1">登出</a>
                </li>
            </ul>
        </div>
    </div>
</nav>