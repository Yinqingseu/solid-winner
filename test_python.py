#!/usr/bin/env python2
# -*- coding: utf-8 -*-

# To change this license header, choose License Headers in Project Properties.
# To change this template file, choose Tools | Templates
# and open the template in the editor.

#coding=utf-8
#!/usr/bin/python
import re
import urllib
import pickle  #可以将任意对象存储在文件中
import threading
import time
import urllib2



#读取整个网页页面
def getHtml(url):
    page = urllib.urlopen(url)
    html = page.read()
    return html

#保存文章内容为txt格式
def getContent(url):
    content = [] #存放文章内容
    title = [] #存放标题内容
    stitle = []  #存放小标题内容
    m_p = [] #存放主要内容
    page = urllib.urlopen(url)
    html = page.read()
    #获取标题
    reg_title = r'<title>\s*?(.*?)</title>'
    title = re.findall(re.compile(reg_title),html)
    #获取主要内容
    reg_contxt = r'<div id="contenttxt">([\s\S]*?)</div>'
    m_contxt = re.findall(re.compile(reg_contxt),html)
    for line in m_contxt:
        reg_p = r'<p>([\s\S]*?)</p>'
        m_p = re.findall(re.compile(reg_p),line)  #<p>标签内容，最后一个p标签为原文链接

    content = m_p   
    #将获取的内容写入文件
    #设置文件名为网页链接最后的数字
    name = []
    reg_name = r'/.*/(.*?).html'
    name = re.findall(re.compile(reg_name),url)
    path = 'D:\\PythonTemp\\Paper\\%s.txt'%name[0]
    f = open(path,'w')
    for line in title:
        f.write(re.sub('<[^>]+>',' ',line))
        f.write('\n')
    for line in content:
        f.write(re.sub('<[^>]+>',' ',line))
        f.write('\n')
    f.close()

#保存文章为html格式
def saveHtml(url):
    html = getHtml(url)
    htmlname = []
    reg_name = r'/.*/(.*?).html'
    htmlname = re.findall(re.compile(reg_name),url)
    path = 'D:\\PythonTemp\\html\\%s.html'%htmlname[0]
    f = open(path,'w')
    f.write(html)
    f.close()

#获取网页标题链接
def getUrl(html):
    try:
        reg = r'<dt>\s*\S*<a.*?href="(.+?\.html)"'  #匹配网页链接
        urls = re.compile(reg)
        urllist = re.findall(urls,html)
        f = open('d:\\PythonTemp\\urlsfile.txt','a')
        for url in urllist:
            #getContent(url)  #文章内容保存为txt
            saveHtml(url) #文章内容保存为html
            f.write(url)
            f.write('\n')
        f.close()
        return urllist
    except IOError:
        pass


#获取网页文章标题
def getTitle(html):
    try:
        reg = r'<dt>\s*\S*<a.*?title="(.+?)"'#?要求匹配的字符串越短越好
        titles = re.compile(reg)
        titlelist = re.findall(titles,html)
        f = open('D:\\PythonTemp\\titlefile.txt','a')
        for title in titlelist:
            f.write(title)
            f.write('\n')
        f.close()
        return titlelist
    except IOError:
        pass
	
#获得查看更多网页链接
def getMore(html):
    try:
        reg1 = r'href="(http://www.freebuf.com/page/\d+)"'  #匹配查看更看网页链接
        more = re.compile(reg1)
        moreurl = re.findall(more,html)
        if moreurl:
            moreurl = moreurl[0]
            return moreurl
        else:
            return 0
    except IOError:
        pass

    
#对目标网站进行获取
html = getHtml("http://justcoding.iteye.com/blog/662208")
urllist = getUrl(html)
titlelist = getTitle(html)
moreurl = getMore(html)
threads = []  #存放线程数
while moreurl:  #列表内容不为空
    htmllist = []  #每次都要初始化，存放html,使得thread的参数个数为1
    html = getHtml(moreurl)
    htmllist.append(html)
    #创建线程
    t1 = threading.Thread(target = getTitle, args = htmllist)
    t2= threading.Thread(target = getUrl, args = htmllist)
    threads.append(t1)
    threads.append(t2)
    #开始线程
    t1.start()
    t2.start()
    moreurl = getMore(html)
    print moreurl

print 'done'
#结束线程
for i in range(len(threads)):
    threads[i].join()   
#将下载的文章传入数据库，并可以调出目标文章


    







