# 介绍
推荐引擎（Recommendation Engine，以下简称RecEng，特指阿里云推荐引擎）是在阿里云计算环境下建立的一套推荐服务框架，目标是让广大中小互联网企业能够在这套框架上快速的搭建满足自身业务需求的推荐服务。

推荐服务通常由三部分组成：日志采集，推荐计算和产品对接。推荐服务首先需要采集产品中记录的用户行为日志到离线存储，然后在离线环境下利用推荐算法进行用户和物品的匹配计算，找出每个用户可能感兴趣的物品集合后，将这些预先计算好的结果推送到在线存储上，最终产品在有用户访问时通过在线API向推荐服务发起请求，获得该用户可能感兴趣的物品，完成推荐业务。


# 参考

https://help.aliyun.com/document_detail/54472.html
