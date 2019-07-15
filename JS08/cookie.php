<?php 
/*
设置cookie
setcookie()
    参1 必填 设置cookie的name
    参2 cookie 的值
    参3 有效期 当前之间戳+多少秒 time()+60*60
    参4 路径 /表示全部生效  指定路径,即该路径下文件生效
    参5 域名 www.qq.com  mail.qq.com image.qq.com  *.qq.com
    参6 是否加密
    参7 是否是通过http协议
 */

setcookie('user', 'jingjing', time()+60*60, '/');
setcookie('age', '20', time()+60*60, '/');

var_dump($_COOKIE);

?>



<a href="./8.cookie.html">去COOKIE页面</a>
