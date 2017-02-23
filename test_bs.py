#!/usr/bin/env python2
# -*- coding: utf-8 -*-
import BeautifulSoup
import urllib
import time
import re
import threading
import datetime
import urlparse
import sys
reload(sys)
sys.setdefaultencoding('utf-8')
failed_url = [] #存放下载失败的url
total_unique_links = [] #存储爬取的全部url（去除重复）
#读取整个网页内容
def getHtml(url):
    try:
        page = urllib.urlopen(url)
        htmlbody = page.read()
    except IOError,e:
        failed_url.append(url)
        print e
        return None
    except UnicodeError,e:
        failed_url.append(url)
        print e
        return None
    return htmlbody

#保存爬取的网站全部的url到本地
def saveUrl(urllist,name):
    try:
        path = 'D:\\PythonTemp\\test_bs\\%s.txt'%name
        f = open(path,'w')
        for url in urllist:
            f.write(url)
            f.write('\n')
        f.close()
    except IOError,e:
        print e
    
#爬取目标网站链接
def getLink(url):
    try:
        html = getHtml(url)
        soup = BeautifulSoup.BeautifulSoup(html)
        links = soup.findAll('a') #返回一个列表
        ###获取<a>中href的值
        bad_links ={None,'','#',' '} #无用链接列表
        bad_protocol = {'javascript','mailto','tel'} #无用的头部协议，如javascript等
        right_protocol = {'http','https'} #存放正确的协议头部
        linklist = [] #存放正常的链接
        for link in links:
            if link.get('href') in bad_links: #去除无用链接
                continue
            elif link.get('href').split(':')[0] in bad_protocol: #去除javascript、mailto
                continue           
            else: #列表中包含相对地址
                linklist.append(link.get('href'))
        #去除重复链接 set()函数
        linklist = list(set(linklist))
        #将相对地址转换为绝对地址
        linklist_new = []
        for link in linklist:
            if link.split(':')[0] in right_protocol:
                linklist_new.append(link)
            else: 
                link_temp = urlparse.urljoin(url,link)
                linklist_new.append(link_temp)
        linklist = linklist_new
        #去除重复链接 set()函数
        linklist = list(set(linklist))
        for link in linklist:
            print link
    except IOError,e:
        return None
    except TypeError,e:
        return None
    except KeyError,e:
        return None
    return linklist

#秒数转时分秒函数
def sectohms(seconds):
    m,s = divmod(seconds,60)
    h,m = divmod(m,60)
    print ("用时：%02d:%02d:%02d" %(h,m,s))

#扫描结果参数展示
def showResults(finish_sec,start_sec,total_unique_links,failed_url,start_time,end_time):
    scaned_time = finish_sec-start_sec
    total_unique_num = len(total_unique_links)
    failed_num = len(failed_url)
    print "扫描完毕！"
    print "扫描链接数：%s"% total_unique_num
    print "扫描失败链接数：%s"%failed_num
    print "开始：%s"%start_time
    print "结束：%s"%end_time    
    sectohms(scaned_time)
    
    
#里面一般存放调试的代码，只有运行该文件的时候，if下面的代码才会执行，但是导入到其他文件时，下面的代码不会执行。
if __name__ == '__main__':
    #代码运行开始时间：年月日 时分秒
    start_time = datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')
    from time import clock #代码计时(语句或函数)
    #代码运行开始计时标记
    start_sec = clock()
    depth = 2; #设置扫描深度
    scan_depth = 1; #初始深度
    url = "http://testphp.vulnweb.com/" #爬去的目标网址
    links = getLink(url) #第一次获取全部的网页链接
    print len(links)
    saveUrl(links,scan_depth) #以扫描深度命名保存爬取的url
    total_unique_links.extend(links) #存入已扫描列表
    while scan_depth <= depth and len(links)!=0:  #未达到设置的扫描深度并且待处理队列不为空，则继续扫描
        print "扫描深度:%s"%scan_depth
        links_new = []
        #遍历未爬取的列表
        for link in links:
            if getLink(link)!= None: #处理异常返回的None
                links_new.extend(getLink(link)) #links列表中的链接爬取的全部网页链接合并到links_new
        #存储已经爬取的url队列
        temp_links = total_unique_links
        #保存扫描的链接到本地文件，以扫描深度命名
        links_new = list(set(links_new))   #去除自身重复
        #更新待处理URL列表：获取新的待处理url=全部的不重复url-已爬取的url，即求差集
        links = list(set(links_new)^set(temp_links))
        scan_depth = scan_depth+1 #扫描深度加1
        saveUrl(links,scan_depth)
        total_unique_links.extend(links)
    
    #保存爬取成功的全部url
    saveUrl(total_unique_links,'CrawledUrl') 
    #保存爬取失败的全部url
    saveUrl(failed_url,'FailedUrls')
    #代码运行结束时间标记
    finish_sec = clock()
    #代码运行结束时间：年月日 时分秒
    end_time = datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')
    #展示扫描结果参数
    showResults(finish_sec,start_sec,total_unique_links,failed_url,start_time,end_time)
  