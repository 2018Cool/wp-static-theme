#### 背景需求
我们公司的产品网站主页大部分都是静态页面，有很多的定制化内容，还要支持中英文切换，使用wordpress的主题配置比较繁琐，还要安装多语言插件。基于这个场景我开发了一款简单的主题，支持中英文切换，优先根据浏览器语言展示页面。

#### 如何安装
下载此代码仓库的zip包，进入wordpress主题，然后安装此主题并启用。

#### 中英文切换
```
使用超链接跳转加查询参数
1. 跳转中文页面
<a href="?lan=zh">中文</a>  

2. 跳转英文页面
<a href="?lan=en">EN</a>
```
#### 如何自定义页面

1. 进入wordpress管理后台，外观->主题编辑器
2. 在主题文件中，找到en.php和zh.php分别对应英文，中文页面
3. 把开发好的中英文html页面直接粘贴到zh.php和en.php，然后点击页面底部的更新文件


#### 注意事项
1. 如果网站只有一种语言，可以让en.php和zh.php内容保持一致
2. 如果页面有图片可以在媒体库中上传，点击查看，复制链接插入到页面。也可以把媒体资源上传到第三方文件服务，如七牛云，腾讯cos等



