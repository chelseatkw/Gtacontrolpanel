SQLite format 3   @    �   �   �      ]                                                � .�   �    ����                                                                                                                                                                                                                                                       i	}W indexsqlite_autoindex_sqlitebrowser_rename_column_new_table_1sqlitebrowser_rename_column_new_table       P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)�\�tableuseruserCREATE TABLE `user` (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cookie_token_expire`	TEXT DEFAULT 0,
	`reg_time`	INTEGER DEFAULT 0,
	`last_login_time`	INTEGER DEFAULT 0
)k�1table<?php <?php CREATE TABLE "<?php " (
	`防止sqlite的数据库文件被直   2   	0   ,   (                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              � � ������d                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              )Wsqlitebrowser_rename_column_new_table� page_historyusercatalogcatalog%page_history|   	catalogpage!	itemuser   e ��e�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          j !    MM!sfd454dvfdb3ec2ef78a331ba99b289ef3fe5062364dd0b92a8165633e826677852560101b1471249214W:�7W:�>   �#    M tdhtd5e65td92420151b927360e78fb39e50ec35d000W:�(   �!    MM!;     M chelseat97fc11fcb06b6cbb9cafb34674f735930[��A !    M chelseatan97fc11fcb06b6cbb9cafb34674f735930[}(@[�!| 	     chelsea0W���� � D��         �Q��  7�                             k �                             ]�                             [�    l�    4�    7�    �     c                       �/                          
                                                                                      	�            x/    	�            /                          	�            @/                                                                    	�            �/    	�            �/                          	�            /                                                        ^ �'54e7f7d67bc93ed8dd03fee686e782af75cf898098fa96dc9409d941b62a0066\�|192.168.18.79[�!|^ �'40ed894d13810f2f65be27dd66afb899a46996cc4f2b8f7ec6301c1149f11f76[��D192.168.18.47[�D^ �'689ff9243c33abe52383ab73e89167e84a04e8e1e44147e5a9f913f450168355[��"192.168.18.79[}6"   \�'0431b2f15917105d5c1c02f8f8a52433b62ad144722e4bbc4c4ff5f78fca9beb192.168.18.47[��   $ $?           Q��  � �     (�*                    ��xsqli��*                    V �renam��*    �A?    �A?    6 Lrowse�A?           Q��  h ��   0�*    �A?    �A?    �W in                        tebrowser_rename_column_n   �]1!!�tableuser_tokenuser_tokenCREATE TABLE `user_token` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `token` CHAR(200) NOT NULL DEFAULT '',
        `token_expire` int(11) NOT NULL DEFAULT '0' ,
        `ip` CHAR(200) NOT NULL DEFAULT '',
�Y !�chelseatantestcaseFiles: http://192.168.18.60/Chelsea/GraphingTesting/tree/master/FunctionPoint  ###### FunctionPoint TestCase 1: ------------ | Function Id | TestCase description   | Expected results  | | :------------ | :------------ | :------------ | | 1  |Try invalid data like too large data 100000000, 0, click OK | error message will turn out   | | 2  | Can not enter string | error   | | 3  | point is a little large | check if plotting is too slow   |[�5?    i �A? i                                                                                       �(�tableitemitemCREATE TABLE "item" (
	`item_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`item_name`	TEXT,
	`item_description`	TEXT,
	`uid`	INTEGER,
	`username`	TEXT,
	`password`	TEXT,
	`addtime`	INTEGER,
	`last_update_time`	INTEGER DEFAULT 0
, item_domain text NOT NULL DEFAULT '', item_type INT( 1 ) NOT NULL DEFAULT '1', is_archived INT( 1 ) NOT NULL DEFAULT '0', is_del INT( 1 ) NOT NULL DEFAULT '0')5!I# indexsqlite_autoindex_item_member_1item_member� ##�Etableitem_memberitem_member
CREATE TABLE "item_member" (
	`item_member_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`item_id`	INTEGER,
	`uid`	INTEGER,
	`username`	TEXT,
	`addtime`	INTEGER DEFAULT 0
, member_group_id INT( 1 ) NOT NULL DEFAULT '1')P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)k�1table<?php <?php CREATE TABLE "<?php " (
	`防止sqlite的数据库文件被直接下载`	INTEGER
)   & &O��J                     � +�\*�tableuseruserCREATE TABLE "user" (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cook'); indexsqlite_autoindex_item_1item�\*�tableuseruserCREATE TABLE "user" (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cookie_token_expire`	TEXT DEFAULT 0,
	`reg_time`	INTEGER DEFAULT 0,
	`last_login_time`	INTEGER DEFAULT 0
)� +�tablecatalogcatalogCREATE TABLE "catalog" (
	`cat_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`cat_name`	TEXT,
	`item_id`	INTEGER,
	`s_number`	INTEGER DEFAULT 99,
	`addtime`	INTEGER DEFAULT 0
, parent_cat_id INT( 10 ) NOT NULL DEFAULT '0', level INT( 10 ) NOT NULL DEFAULT '2')-,A indexsqlite_autoindex_catalog_1catalog    �  �5^�                                                                                                                                                                                     �m-�=tablepagepageCREATE TABLE "page" (
	`page_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`author_uid`	INTEGER,
	`author_username`	TEXT,
	`item_id`	INTEGER,
	`cat_id`	INTEGER,
	`page_title`	TEXT,
	`page_content`	TEXT,
	`s_number`	INTEGER DEFAULT 99,
	`addtime`	INTEGER DEFAULT 0
, page_comments text NOT NULL DEFAULT '', is_del INT( 1 ) NOT NULL DEFAULT '0')'.; indexsqlite_autoindex_page_1page�f/%%�tablepage_historypage_historyCREATE TABLE "page_history" (
	`page_history_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`page_id`	INTEGER,
	`author_uid`	INTEGER,
	`author_username`	TEXT,
	`item_id`	INTEGER,
	`cat_id`	INTEGER,
	`page_title`	TEXT,
	`page_content`	TEXT,
	`s_number`	INTEGER,
	`addtime`	INTEGER
, page_comments text NOT NULL DEFAULT '')70K% indexsqlite_autoindex_page_history_1page_history                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
         
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    � ;�    ������������������������~ytoje`[VQLGB=83.)$����������Ԧ/saedfedfc默认页面### ShowDoc仃o !	-�chelseatanPlot Range[edit]eNqFUctOxDAMvPMVPoLUwqIVAnHmIU4gTrvcvI27DU3jykkp/D12HytuVJFqOzNjT1wCR4KKw9BFYIFuCNn3YS2lAtB9YkUx223kWK75WQmC8UgJfISEHRnA+bomiZT/5xd/6EaDkaVNDSmXa8gNzaJWPTC32m4Po8+Nlfvg41GJmeQLQ9K7B1NYbDSEjiTN6CGRjkW1j+SgR1FNZRllt9/twWHGQkP97PehpwDK1SVk+Vns2PCtjy7ZYEuPiruDj5g9R9N6FFF7BxSNnzRKrKOnniqPAfrA6jb4luDA31A1KJN7h7ImPQdNZuCorYQTLembpxU1zTWqcMNDcGZt7lH7agLPLwqZIVOyBb0cIwtB452juK7kSnhM95M/RabTrhZYYYtC56D2QV/KMEukr3fajWkARjf3PX99fy6vt5vbTQFzuL25u/gFU3vTAg==c[},�U !		%echelseatanTest contenteNp7tmbRi/19T/bufz   �{   �x   �v   �q   zp   �n   gm   hk   �i   df   {d   �c   v]   `\   oU   nL   kJ   sI   lH   mF   tE   UD   VC   WA   f?   c>   y=   x<   w9   �7   �5   i3   �1   �/   &'   %&   �%   �$   �#   �!   �    �   �   H   =   [   �   �   �   �   �   �   �   ]   �   �   �	   �t   	      7 7�                    �=.    @�*                                         �=.    ��*                                         �=.    p�*                                        �=.                                                   �=.    8C?    I                                   �]1!!�tableuser_tokenuser_tokenCREATE TABLE `user_token` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `token` CHAR(200) NOT NULL DEFAULT '',
        `token_expire` int(11) NOT NULL DEFAULT '0' ,
        `ip` CHAR(200) NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )�f2�tabletemplatetemplateCREATE TABLE `template` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `username` CHAR(200) NOT NULL DEFAULT '',
        `template_title` CHAR(200) NOT NULL DEFAULT '' ,
        `template_content` text NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )      0�=    ��=    0X\                  Y       �*�     �*�                    Q       0        �=    ��=    0�=                                            �      Q       �)�     �)�     �=    ��=    ��=                                    1       X       ��=                                  1       �&�     �n5    Y       �                      ��=    X�=    0�=     �=                            1                     ��=                   Y       0                     H�=     �=            ��=                            Y       �      �              ��=    ��=    �=    ��=                            1       �E      ��=                          Y       �E      �              (�=    ��=    �=    ��=                            !       F      :       X�=    �      !       x�=    x�=    H�3                    1       ��=    ��=    H�3                    ��=    @�=    0X\                  Y       �*�     �*�                    Q       0       ��=       � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            :	 !!!!ertgtd4fv4ertgtd4fv4ertgtd4fv4ertgtd4fv4W:�)W<6	 !!!!sfd454dvfdsfd454dvfdsfd454dvfdsfd454dvfdW:�D   �!!!!ertgtd4fv4ertgtd4fv4ertgtd4fv4ertgtd4fv4W:�)0	 %%	 示例文档示例文档showdocVU¸W<�   F3?	; C!	Graphing # !	GTAchelseatan[})m[�9�    q k7f� qE   7                             i#}W indexsqlite_autoindex_sqlitebrowser_rename_column_�w7�Atableitem_topitem_topCREATE TABLE `item_top` (
        `id`  INTEGER PRIMARY KEY ,
        `item_id` int(11) NOT NULL DEFAULT '0' ,
        `uid` int(11) NOT NULL DEFAULT '0' ,
        `addtime` int(11) NOT NULL DEFAULT '0' 
        )�I3�itableoptionsoptionsCREATE TABLE `options` (
        `option_id`  INTEGER PRIMARY KEY ,
        `option_name` CHAR(200) NOT NULL UNIQUE ,
        `option_value` CHAR(200) NOT NULL 
        )-4A indexsqlite_autoindex_options_1options�b5!!�tableitem_tokenitem_tokenCREATE TABLE `item_token` (
        `id`  INTEGER PRIMARY KEY ,
        `item_id` int(11) NOT NULL DEFAULT '0' ,
        `api_key` CHAR(200) NOT NULL UNIQUE ,
        `api_token` CHAR(200) NOT NULL ,
        `addtime` int(11) NOT NULL DEFAULT '0' ,
        `last_check_time` int(11) NOT NULL DEFAULT '0' 
        )36G! indexsqlite_autoindex_item_token_1item_token   �    ������������                                                  � !#�}ertgtd4fv4data-副本
    
**简要描述：** 

- 用�r !		%�chelseatanTest content1 Ploting 
1.1 Plot Range
1.2 Column of different format
1.3 Built-in Graphs 
1.3.1 2D Graph 
1.3.1.1 Line Graph
1.3.1.2 Symbols Graph 
1.3.1.2.1 Error Bar
1.3.1.2.2 Column Scatter
1.3.1.2.3 Bubble graph and Color Mapped graph
1.3.1.3 Line + Symbol Graph
1.3.1.4 Columns/Bars Graph
1.3.1.5 Multi-Curve
1.3.1.6 Statistic Graph
1.3.1.7 Area Graph
1.3.1.8 Specialized
1.3.1.9 Image Profile
1.3.1.10 Stock Chart
1.3.1.11 Others
1.3.1.12 Trellis Plot 
1.3.1.12.1 Plotting xf dialog 
1.3.1.12.1.1 Plot Detail: Group tab, Panel tab and Spacing tab
1.3.1.12.1.2 Axis dialog: Layer Banner and Panel Banner
1.3.1   �� !		�]chelseatanAbout GTAReference : http://wikis/internal/index.phptitle=Originlab%3AGraphing_Testing&tdsourcetag=s_pctim_aiomsgc[}+0M !		C9	chelseata   �    �   �   �   �   �   �   �         
   !< ���������������������~xrlf`ZTNHB<                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  !!  

				
                                                                              	�            p:!    	�            H=!                          	�            �8!                                                                    	�            >!    	�            �=!                         	�            89!                                               w =                                                          XL    h8!                                        XL    >!                                        XL    �=!                                       XL    �2!                                        XL    89!                                        XL    �9!                                                                                                                                                                                                                                                                        
   � ����                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
		G (��nK*�����N+����nQ(                                                                                                                                                                                                                                                    '% 9	Layer Contents Testingc[�6�� !	Ploting xfc[�6z� -	Template Libraryc[�6W� !	Plot Setupc[�69 +	Graph Template c[��N %	Graph Theme c[��=# 5	Format/Style Toolbarc[��( %	Axis Dialog c[�� #	Plot Detailc[���l 7	 )	Customization c[��a� C	Part9. Performan"
 5	Performance Testing e[�/�	 /	 Accuracy Testingd[�/� 	Plotinga[},�j 	2D Graphc[��cj G	# 7	Function Plot Testingf[�/� -	Layer Managementc[�+� )	Graph Toolbar c[�+�  	Toolsc[}3k 	3D Graphc[��n   %	Part2. Toolsc[}3k %	Function tabc[�1') C	Graphing testing automation`[}*;
   � ���������������������                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  

				
� x, �����������������~xrlf`ZTNHB<60*$ ���������������������|vpjd^XRLF@:4.("
����������������������ztn�h�b�\VPJD>82,,xx.com/api/user/register `
  
**请求方式：**
||{{zzyyxxwwvvuuttrrppnnmmllkkjjiihhggffeeddccbbaa``__^^]]\\[[ZZYYXXWWVVUUTTSSRRQQPPOONNMMLLKKJJIIHHGGFFEEDDCCBBAA@@??>>==<<;;::99887766554433221100//..--,,++**))((''&&%%$$##""!!     ss		qqoo		   � �  	                  	�� 	          �K�    	�            XN�     �                   	��           �L�     �                                         w                                                                                                                                                                                                                                                                                                                                             �      �§��  �§��  	�    	�                                                                                            ��zX                                       �      ؾ���  ؾ���                                                  ���                  8
�             ts3_tok             ��    q      �נ    ؾ���          �l�    �l�    ��                    �l�    �l�            ^ 	_a2a9f1900e22da3cab7f4e2cff244fa1c840578105ca3eeb2db3f23513b00e96d2db4373f21274875772[}*�
   � �                                                                                                                      Q     ؾ���  �ќ                            B                     *                                              "                       %       Y               x�             ��    x�      
       ��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ,_	2a9f1900e22da3cab7f4e2cff244fa1c840578105       �                                                                                    �    ���    ؠ�              � �      �3��3�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      00000                    �/                            �/                            `��G                                          �                     ��������                �              �      ��     ��      
          !                                                                                        � ,                                                                                   �H !		�QchelseatanAbout GTAIt is an auto test system designed for graphing testing.

Reference : http://wikis/internal/index.phptitle=Originlab%3AGraphing_Testing&tdsourcetag=s_pctim_aiomsgc[}-��r !		%�chelseatanTest content1 Ploting 
1.1 Plot Range
1.2 Column of different format
1.3 Built-in Graphs 
1.3.1 2D Graph 
1.3.1.1 Line Graph
1.3.1.2 Symbols Graph 
1.3.1.2.1 Error Bar
1.3.1.2.2 Column �. !		�chelseatanAbout GTAIt is an auto test system designed for graphing testing.
- Base on : Go + Git + VMVare/PC
- Functional testing tool: Ranorex

go url : http://192.168.18.167:8153/go/pipelines#!/
Material:http://192.168.18.60/Chelsea/GraphingTesting/tree/master
Reference :http://wikis/internal/index.php?title=Originlab%3AGraphing_Testing
Control panel: http://192.168.18.108/GTAControlPanel/index.html?page=3c[�:GM !		C9	chelseatanGraphing testing automation欢迎使用ShowDoc！c[}*�   � �G�� �                                                                                                                                                        �o !	-�chelseatanPlot Range[edit]eNqFUctOxDAMvPMVPoLUwqIVAnHmIU4gTrvcvI27DU3jykkp/D12HytuVJFqOzNjT1wCR4KKw9BFYIFuCNn3YS2lAtB9YkUx223kWK75WQmC8UgJfISEHRnA+bomiZT/5xd/6EaDkaVNDSmXa8gNzaJWPTC32m4Po8+Nlfvg41GJmeQLQ9K7B1NYbDSEjiTN6CGRjkW1j+SgR1FNZRllt9/twWHGQkP97PehpwDK1SVk+Vns2PCtjy7ZYEuPiruDj5g9R9N6FFF7BxSNnzRKrKOnniqPAfrA6jb4luDA31A1KJN7h7ImPQdNZuCorYQTLembpxU1zTWqcMNDcGZt7lH7agLPLwqZIVOyBb0cIwtB452juK7kSnhM95M/RabTrhZYYYtC56D2QV/KMEukr3fajWkARjf3PX99fy6vt5vbTQFzuL25u/gFU3vTAg==c[},�U !		%echelseatanTest contenteNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[}+kR !		echelseatanAbout GTAeNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[}*WR !	echelseatanAbout GTAeNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[})�c 	!	CechelseatanGraphing testing automationeNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[})�   { { $ $                      Q !	AAchelseatanColumn of different formatColumn of different formatc[��}�r !		%�chelseatanTest content1 Ploting 
1.1 Plot Range
1.2 Column of different format
1.3 Built-in Graphs 
1.3.1 2D Graph 
1.3.1.1 Line Graph
1.3.1.2 Symbols Graph 
1.3.1.2.1 Error Bar
1.3.1.2.2 Column Scatter
1.3.1.2.3 Bubble graph and Color Mapped �r !		%�	chelseatanTest content1 Ploting 
1.1 Plot Range
1.2 Column of different format
1.3 Built-in Graphs 
1.3.1 2D Graph 
1.3.1.1 Line Graph
1.3.1.2 Symbols Graph 
1.3.1.2.1 Error Bar
1.3.1.2.2 Column Scatter
1.3.1.2.3 Bubble graph and Color Mapped graph
1.3.1.3 Line + Symbol Graph
1.3.1.4 Columns/Bars Graph
1.3.1.5 Multi-Curve
1.3.1.6 Statistic Graph
1.3.1.7 Area Graph
1.3.1.8 Specialized
1.3.1.9 Image Profile
1.3.1.10 Stock Chart
1.3.1.11 Others
1.3.1.12 Trellis Plot 
1.3.1.12.1 Plotting xf dialog 
1.3.1.12.1.1 Plot Detail: Group tab, Panel tab and Spacing tab
1.3.1.12.1.2 Axis dialog: Layer Banner and Panel Banner
1.3.1   �   r r                                          �? !	!�;chelseatanPlot RangeFiles location: http://192.168.18.60/Chelsea/GraphingTesting/tree/master/PlotRange

### Plot Range TestCase 1:
------------


| Function Id�
 !	!�QchelseatanPlot RangeFiles location: http://192.168.18.60/Chelsea/GraphingTesting/tree/master/PlotRange

### Plot Range TestCase 1:
------------


| Function Id | TestCase description  |  Pic description  | Expected results  |
| :------------ | :------------ | :------------ | :------------ |
| 1  | one column | ![](http://192.168.18.108/GraphingTesting/server/../Public/Upload� !	!�;chelseatanPlot RangeFiles location: http://192.168.18.60/Chelsea/GraphingTesting/tree/master/PlotRange

###### Plot Range TestCase 1:
------------
###### | Function Id | TestCase description | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | one column | Plot  Correct   |
| 2  |  multiple columns |  Plot  Correct   |
| 3  |  adjacent |  Plot  Cor   �    码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---    �  �组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|� 7 !#�{ertgtd4fv4data-副本    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----               E   #p://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)   $     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�    ��：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


W:��                                                      l  l                                                                                                  �& !	A�=chelseatanColumn of different formateNqdVc1u00AQPpOnGAkJipTGJC1pyTX9EVKrogqJ9ri1x/Yq612zs26C1ANXXoPn4Gl4AV6BmTVJfYhTqC+Jd75vZna+b9dn2iCBcakK2tkZlCHUsyQZv5+MxtPj0fh4NH2bzEs0hCo596outS0+IQX+SYJHTCpFAX0yd6ap7FV+ovMcPdpw5nylwmDwMj7QxsHlkK0RkEcISLq5IoTxbLDfeQYPcNbYVBqDDxk8PAIzpNTrOkaAA6erGtOAGXikxgTiNSbPusngyXdmjCFWWQXQFm74/0fjAnDv3nN+aNNOuqDbHtCBgO5cKDmNshnj0jgA6sEfCr6FQO1djT5opBkEqfMKbFOh12kP+V0Pue1yO2cqHK+LMkBqdLpY84MDwgCKYK4CFo6rKgPOg3XbU60F3v8niSfPknirwtdYKb+gZyjdp3ylV1whjlw0Ww89U0H1GOLh0RFPkHcaAD6XaKFSCz5VUEs0964CalLxT0scQhCZjLpDA0ttDNxhK3DEnnAdEU7nUCqTiwqhRPDKFgiaYmNrY15ou+BeY2tSTQ4z7LFUHeFiF+Frjb9/fu/bdzTt9mSFd03Ny7LCGbYkGG2cy61jZ8jcxmZYO3lBV//Lmz6TdxR3qnzREnfCqFIsTj9s8Ovbjxe3F0No2Oa3cuAyr5aggPgS5qt0KO9FGxEJC7l1R5F1qYlkvPfKNJhcKtpMfu/q+nx/fHgwOXoTkWKH1hinqxRNXMN7NhnVKkW4SRrbfY3xaEJyjU//jkd5NpBmD4p5hrEZ0fM1da1IpWtMJmbcQLlzNwL+AEDplrIN2ekmSjL25YIkIOmGfOFgTP6lkbT8samhVgUO/gBN9SXyc[��    4  4                                          �I' !	A�-chelseatanColumn of different formateNrNVs1u00AQPuOnGAkJOKQx6U9Ic01bhNQKhJBoj1N7bK+y9prddROkHrjyGjwHT8ML8ArM2E1qJJuSBon4ktjzzezOfDP77ZnS5ECbCL0yxRQy78tpGI6O94ej8WQ4mgzHL8NZRtoRhq8tlpkq0g/kPP+E3hKFOTpPNpwZXeXF2+REJQlZKvyZsTn6IHhaP9DYwSQQrxCQ1BCQcDN0BKNpsNd6gls4q4pINgZvYri9B8bkIqvK2gJsOF2WFHmKwZKrtHf8jZ2n7WDw4Dt7jKBeZelBFXDJ/99p44H3bi3Hhybsfht01QM6ENC18RmHwSJmXFQXwPXgDwXfQKC0piTrFbkpeFnnGRRVTlZFPc5HPc7NLrt9xuJjVZp5iLSK5it/b8CRB3QwQ0+p4VVRg7FQmO5QK4L3/ori/UdR3Mnwe8rRzt0jmO5jPldLXqEuuXC2KnqMHnsa4va+Ix5w/mMDwMeMCshxzlMFpVgTa3JwVST90zgOwAtNGq9Jw0JpDdfUEFxjT3gdIU4lkKFOhAWfEVgsUgLl6o1tStbBvyPr0eN4roo5R6rLKJWRgwde8E5b+64r5j+X9PP71w6OVgx1h0qtqUr+LF/Yv8N9o5od7kDNpBmo1bZcrHX79ZfHq3wDp42KcvTfi8Lso02b/PpL4HLkuerBbJTxeBfa4Op8ABWvcSWnemxxAQiOlZ71eiDvaWORcyIVad826Ve7kPSFck4G+wZ1Rf1UX6BbHQbbpj3ZkZHHRglOlxHpbXM63oWc6IZV0ZUYEVx2SO9wTebvwKpov98hg+DHl29Pap11prLR3VGHljVSscyKPg7qURAheO7aausyU+lY9HYN5bkxQ+A7LmRmIUMkc7a2OjlCF3MnBgk34DsV1cE/VRKW79MllJhS8Au6wISwc[���   )员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   '               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   *码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    +

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   -----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    ZjKirLxwY+yX3Qz6NpLo+lTQ78eXRt2tZV93CFs/L3pufbckGU3KO9gQ3D1JNv/rhFRIvCb3VIjFwu2rD0p4KS1bHyLgF4ZT7Wxlj2lEtOjgNooY49dX6c9/TNoz4zWSEZ+23NFH/mnZPsq5afO9I8BfwkcKeylqNOjqOuV7MSLFc6O4Yy/9mESL3mfP/d+3fUCny9y2cKsZL0i3zLVg/3BJHRDjlXIMbMsPNNms6G/hBc5hfl20jlomn4INSAmDGNh7I7v6HkDRoncaI97ROkLOI9AjxFmpznNgn4q+gqTcPRJ15Y76GqUhEWd6HsAeVhK3fAmrQfnTZc/BM7iMvKyh4wNaPqH3ZgjO0tBhz100P2Kd2yKKaHSKfVGQt+OlwkPmqfJoze7nAkQSstHzOzrPDsPLRTa9QIHpN7uuXViU1E5mUSQndTVJLvI6UYqRdeYAf0LbhZQMZ+KcMkAfjhmoVi4XxxlH4C8F5q+s/WyFkptaW7NCrjmz0bmsstdaqDVvPHUYLZpAGO6x2Ri34vruYEa5qzMOhFy2VVSAOIWh/ExtLFi7WgdO9Hi/JN0z+qG1okNzHNQWtHJ/ZfbcTmZnl29y8rJf2pLG9sJNSKnZMNRPEar7eE69G0e3ENMajadBKNQzlDdCr1k2skuzAbQ97MJuKIVggobHncMIJV5EH1K7WXHsU1ZOc3pvgfJz4E0xjf00eNObMOEjPYhI7JwIz3ZUDcrg5YThNiqIKswFhVj6hRTxC0XEqa/DXshVZHEOh+8x03XSAtdqm1WQqm31uyKa6PHy7DCsYskQ4KshNo+4zrECfBWvT9QfTzcAoLhWgqV1OwS0TC/dH7kT8wQWSDECBGDRreGCqt+S0HCq33rY1gf3je0FRYTJEDL+MqVkGb9yP6tC3e3XGoR7u5ibezKtYxj4Mxga0YqEFm2T2pmeF3je5H654a+NxYPkoA6QX49Cv2hNaZlF5A+NQZq0weed9HzJJWoKCjvqvxw/u43gz6YcA==c[��    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   6               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   X码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**     t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   0----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   3               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   4员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   5码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    1

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   7员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   8码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    F

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   ;               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   <员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   >码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**     <  <                                                  �A !	!�=chelseatanPlot RangeeNrNVU1v2zAMvftXcOilBer4K2mcXLu26GlBsQHthh1ki461KJIhKU0H9MePspM2az6ADgtQI0BEihAfnx6payHRgtQlc0KrMdTONeMoSkZpL7nIe0neu4ijyxqlRRbdGNbUQk2/onX0FzmDGM2ZdWiiidTujqkpBsHJyQl4E1obfPQlswjJOAg3viAInuF6oUqfGW45PL+GcrSlEU27Q36YiPKt7+qpwdIhB4N2IZ0lH5033swA77bphMQfrhVCqeVirsj49OPn6TYvSZxvEWLRPBIXvV40WRRSlNG3RmrGbZTGSR7GeZim0aAY8izh5XCYlmmvUdMzn7DlCy61MVQUdLWkbelzKk40co3Het8xEI0uhjkfJC+IdkLK2h3Gf7ESlTsON2kWF1la8cNI+u2O0ircQHMUOP1RzvL+qIOzE81+yadvJP9hBW88bgtCgWXzTa39T0ZzYjTvVywbYppX+ZrR/dp/RcVFVaFR6I4Mrc/iJGPpgcteN8Hf2GCpzczWSAB1Ba7GjkfvLbSeHQntAOMyq8pD0tynzGxLmW+kuV+bW0L8Bx36fAm5H2ApXO3JaiTVTnTSY/LIpN3R+Aeq6X+Maj57JazejRoZR2O7+hZ0p5S5EooSNcyQNpzffFeRgzB05veqFfzAmwnFrdfbKmWp54VQ7UtuPwYhcP9w/wCcObarUnKlXRB924OgDci6gO/020lWEMKVMdpAwQytr2llNXWepSIEk0Ct485BihlCoZ+grJkh2zDOzNpotCSjC1wSpUYTK505EbiOQlf2YEkH13ohub/RLkdFk9oHdwMBnAZHzBKU26nSBqEWnKNaj63I6KUdg79HirQv82wVdg6En3EOlZAkEB+zWpFoXkaLPwOY4l3e0y93N2GSxcP4HLplNsjPiJngDxxv+Ck=c[��H   ?

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   9----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   @----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   A

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   B码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    C员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   D               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   G----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<                              �] !	!�uchelseatanPlot RangeeNrNVUtu2zAQ3esUU2STAJH180f2Nk2CrGoELZC06IImKYs1TQokHadATtKz5E69QoeSnbj+AS5qwIIBa4aDmTdPb4Y3QnILUlPihFYDKJ2rBlGU9NNW0s1bSd7qxtFVyaXlJLo1pCqFGn/m1uFf5Azn0ZRYx000lNrdEzXmQXB2dgbehNoGH31FLIdkEIQrTxAEL3AzU9RXhjsGL++hjFtqRFWfoB+Ggq77rp8rTh1nYLidSWfRh/kGqxXgYBszJD65VhyolrOpQuPDt+/nm7wkcb5BiOXmCblotaLhbCQFjb5UUhNmozRO8jDOwzSNOqMeyxJGe72Upq1KjS98wZovuNLGYFPQ9JLWrU+xOVHJJR7rfcdA1O/2ctZJ3hBthZTVJ4T9IJQrdxxu0iweZWnB9iNp1ydKq3AFzVHgtPs5ydv9Bs5WNLsln65J/mQFbzxuC0KBJdNVrf1PRnNkNG8XJOvxNC/yJaO7tf+Oiomi4EZxd2RobRInGUn3fOzlEPyNDebaTGzJEaAuwJW84dF7R1pPjoS2w2OaFXSfNHcpM9tQ5po0d2tzQ4j/oENfL0H3I8yFKz1ZlcTekU68TJ6ItFsGf0837dPo5qNXwuLeKDlh3Nimvxl+U6xcCIWFKmJQG84fHtRk5/frrzB05udiGvzOmwjFrJfcoirV05FQ9WVuT4MTeHh8eARGHNnWLLrSJgifzV1QB2RNwFf8HcRX90QIuDZGGxgRcxD63hr6EG4wi9W4VSyCE0QCrgV3CVJMOIz0M9CSGLQNYVhqYVRaotEEzlErRmPqxhwKvozijrZgjolLPZPMq7WpUeAt5IObZQdOg0N4uzHnG5jvxkobDqVgjKvl7o6MntsBeCVjSvu21Bdhl4CNEsagEBKnxMcs3nBy3varzwFEsQbg+af72zDJ4l58Cc1r1skv8GYO/gBa+EAPc[� �    �  �| 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &qu� ; !#�{ertgtd4fv4data-副本    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----               .    chJZBQKIqEhESsX3w+b7Pn8/higtmQKicWK7kBEprq4nvh+OoH47Sfpj2R4F/UTJhGPGvNalKLqefmbH45VvNmD8jxjLt3wpl74icsl7v5OQE3BDqMbjoC2IYhJOet/L0er1fcDWXucsMNxR+vYZSZnLNq3oF5+GW5+tzl88Vyy2joJmZC2twDvebrGaAvce4Q+g2V5JBrsR8JnHw4dv3001dwiDdEMQw/YRa9Pv+7TwTPPe/VEIRavwoCFMvSL0o8odZQuOQ5kkS5VG/ktMzl7DWCy6U1kgKGi5RTX2G5HgllniMmzsEovEoSekwfEHUCSmuVwj9QXIm7WG0ieIgi6OC7kYyqFekkt4KmoPAGYxTkg7GDZxONNstH61Z/mgNrx1uA1yCIbNVr72noikqmg4KEicsSot0qeh277+iorwomJbMHhjagARhTKIdh728BP9jg4XSj6ZkCFAVYEvW6OhmM6UeD4R2yII8LvJd1tzmzHjDmWvW3O7NDSO+wYcuX4jTD7DgtnRiVQK5o5zYTJ6IMB0XfwebwXGw+eic0PaNkhHKtGn4zfFMMXPBJSaqiEZvWLe4F8nh3z+/Pc/qn+1tcDXvkUtqnOXarLmaZVzWzdwchyZw/3D/AJRY0kUWp6ImCJ/NWlAHxE3AV/zspdfoSAS41FppyIjeC30yucJfGYVVxCAYTgRgGbDnCxyXai6oM1WzVGCzcGtNTXoT6ffmnKlnyEuibfehL8s7RVGWYVuPvlICw2qC3VEDF7XAm6AV0moDu6w2dBtw1qbs2m3rcaRrZvLgZiqVZlBySplctiVfq4WZgLukVoF56Vdt2DngmRJKoeACC4CLad8qh6htHW4PIJI2VE4/3V17YRwkwTk0r/EwPcM/Hb1/Ar5/DQ==c[�c                                                                                                                      t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   K----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   L

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   O               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   P员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   M码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**     t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<
   Q----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   R

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   S码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        �pD !	W�echelseatanCreate New Graph dropdown list buttoneNrFkU1uwjAQhfec4h0AURXaA6CisqmKVHXJZhJPEgvHjpwJkNt34pAKaLvuzvP/vefHBda52CODsNygcUHmCA37ISo6r7XgU/phKFOkmiXa/LYGY8mFco6aDoy2i4yXyCSMdz5hG6mpYGJoTDh5ONsKsk5Eh6WLHqETWH1XjCxoukYoUjRunS2vGFcb7JRu+3aNurpHXf0X6moBiT0koGXHufzYvV8bM5Qvgv7MgbzBB7c5OZ6nwOjOUCsyi1hfthPHpCevOD/AFtrco4khc1yDz6pg9qQGdnrgosTzWYZ7rzHU+88dbAs6knWkIwje9ThV6upvVNo6CmMz3F9u9vfeT048397UwQSoc1kPwwV1TpKukeK6sYzUD05PmpRGhcbvzki+5ISiP4yTlSoZkbwa/oNG4jIRhwgf5AvluQUec[�1�    <  <                                                �_C !	-�mchelseatandefinition tableeNqFUctOwzAQvPcrRuJaGlJQVXKtKELigER/wEk2jYVrB3tTWqkfz9qBQiRQfbG8O4+d9VobCgVa5q7Isvx+PssXy1m+nC1uslVLJpDKHr3qWm23GwosV8aeKNupwOSzdW8r1s6+OG0ZmFylg3E5ElcqEPICk+tfB5PTGYqnGqcfaE2h8rpLHUjj4dBRxVTDU+gNB6kJuRipXXwLIxci+yPYiUWjLcGqHUHZGntleoK24FYHsCoNiURnHKNy3hNjMJ3HeVQj8b8lEnOKqqXqDa+t+8CzKlkZeaQQKN1BOENfN9CMICgxaSlCNxE65AW991r0yEpG10RE2ob46LiMkLYhU9zirPiP4xTjoHvldQrVB/nGM2HwDaL2x9BxzHH6u58FDjqN87veKJTHFIfFxG7FxdKBIyoVv5Z5yeE0+QTuC9iOc[��Y�_B !	-�mchelseatandefinition tableeNqFUctOwzAQvPcrRuJaGlJQVXKtKELigER/wEk2jYVrB3tTWqkfz9qBQiRQfbG8O4+d9VobCgVa5q7Isvx+PssXy1m+nC1uslVLJpDKHr3qWm23GwosV8aeKNupwOSzdW8r1s6+OG0ZmFylg3E5ElcqEPICk+tfB5PTGYqnGqcfaE2h8rpLHUjj4dBRxVTDU+gNB6kJuRipXXwLIxci+yPYiUWjLcGqHUHZGntleoK24FYHsCoNiURnHKNy3hNjMJ3HeVQj8b8lEnOKqqXqDa+t+8CzKlkZeaQQKN1BOENfN9CMICgxaSlCNxE65AW991r0yEpG10RE2ob46LiMkLYhU9zirPiP4xTjoHvldQrVB/nGM2HwDaL2x9BxzHH6u58FDjqN87veKJTHFIfFxG7FxdKBIyoVv5Z5yeE0+QTuC9iOc[��V    � � �                                                                                                                                                                                                                  �A !	-�echelseatandefinition tableeNqFj00SgjAMhfec4h3AYUa9hju9QIAUMkKqbUC4vS2IM65cJvneT44lLCwwj4adKENpYJA2mKgfGaKwTiKMqp6LUwlyxmGHV+aAuuP6jmvnX7hQZdSnoQ7yMFR+3s/iIIaYoOTWcSZvmYwbyc9Rkh2rRXiXichbjJh4jSWKc/kv6feViYLk2hijaPsVbIHxsH75UWyE82EYe0K1rA0tybVNeuXZMrUus+Mb8XVuBg==c[�1Є@ !	I�chelseatanformula panel(Y(x)=, Z(u,v)=) eNqNkk1PwkAQhu/9FZN4AYLUgiI24UTEeCORi96WdtpuXHabnSmWpD/eKQQRJeIe9s3MzvPu7MdcG6QYCuYyDsPoYTiIxpNBNBmMb8JZgYZQhU9elYW2+RKJRUL2iOFaEaMP55VNWDu7cNoyQHC1G3CabsGZIoQoDq6/DQiar0p4TqE5VqZIidflbgVk4bEuMWFMwSNVhqnNCR2f2F2MhYiEZL+FVGcZepTuMufXlVF9zOG1U3enI+FK4xgS5z1yu71ww4scaStyFh79Bb916v62O+Xe3qCXOOpsz/vcirygkZv4bQWrLXCBwF4rmxsEizUDu12yVBbNWcu7tjWpOLjsKzXByij7Dg167zyskUjlCB/aGODKW3DVwWH8w6FQBJVNMdNW3mujTIX/sbkXWcodbVAm42wOJEcR0fb4SRZt/1iX8guojZuTAzXBJ+YI7HI=c[���   Y

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   Z----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<    D  D                                                          �9 !	!�-chelseatanPlot RangeeNrNVU1v2zAMvftXcOilBer4K2mcXLu26GlBsQHthh0UiY61KJIhKU0H9MePipM2az6ADQtWw4BFihAfH5/oa6nQgTKceWn0EGrvm2GSZIO8k12UnazsXKTJZY3KIUtuLGtqqSef0Xn6JN4iJjPmPNpkpIy/Y3qCUXRycgLBhKUNIfqSOYRsGMUbTxRFz3A91zxkhlsBz6+hAh23slnukB9Gkr/1XT01yD0KsOjmyjvy0XnDzQzwxzadkIXDjUbgRs1nmowP376fbvOSpeUWIQ7tI3HR6SSj+VhJnnxplGHCJXmalXFaxnme9MZ9UWSC9/s5zzuNnpyFhEu+4NJYS0VBW0u+LH1GxclGrfG44DsGosFFvxS97AXRTkjFcoeJH4yj9sfhJi/ScZFX4jCS7nJHGx1voDkKnO6gZGV30MLZiWa/5PM3kn+3grcBtwOpwbHZptb+JaMlMVp2K1b0MS+rcs3ofu2/ohKyqtBq9EeG1mVpVrD8QLPXl+B3bLAwdupqJICmAl9jy2Pwjo2ZHgltD1NeVPyQNPcps9hS5htp7tfmlhD/QochX0buB1hIXweyGkW1E530M3lkyu24+Aeq6caxtz9XKgmzYCq1cKEVqynOzWws9fIn595H5R+DalboamQCrWu5mFP/KXMlNSVqmCUd+bC5k5D/BB7uH+4fQDDPgtH689ZPz6uvaH1f6V05oyiGK2uNhTGztL6mlTN0VRyhk0wBad2fg5JThLF5Al4zS7Zlgtm10RhFRhu4oEZbQ+W25kjiOgo978CCDq7NXIlAa5ujotEagtsbDN6AJ8oIyu1EG4tQSyFQr+dMYs3CDSGoiyLdywBahZ0D4WdCQCUVdSnErFbUuZdZEM4ApkWb9/TT3U2cFWk/PYd2WfTKM2Im+gUw+9/mc[��    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<$    � � �                                                                                                                                                                h !	AmchelseatanColumn of different formateNpzzs8pzc1TyE9TSMlMS0stSs0rUUjLL8pNLAEAgr4J5A==c[��j�s !		�%chelseatanAbout GTAeNpVj91KA0EMhe/3KSKiN+IMa7HWhV6o4CKoLbXs7TJ202lwNzNMsljf3qk/iBCSwPkOOXlQIAHH4EYNoCgK8iGKA3Qo5Bk72IYEPrm4I/ZfRJ6mOIdbJwiBoYI6wBm8NM+5N0+NS2iXdxm4H3mjFNj1vzbQEPoKVo5Dwn1GlglFxoT/AKiysj5EOZxeROT6EYwxReEDjCnrsFONlbXl9YUppzNT5ppeVbPycmJ9sJEi9sQox0e2WOEWE/IG/2zv9EZiiRVTDpeXDvcm7qKS9jhfJPLEvXs9mdzUP3+36+98p9pJGNMG1fm5tDH/N7SOwiD+E4R1b4E=c[�T�o !		�chelseatanAbout GTAeNpVj91KxEAMhe/7FBHRG3GGuriuhb1QwSIoW5eyt2Vss9NgOzNMMqhv76w/iBCSwHdCznkQIAbjwCTxIMgC/MGCMwzIZB0OsPcRbDRhJGe/FHmq4hxuDSN4BxXUHs6gJsl997QzEXVzlwX3yfVC3pnp9wzE+6mC57bJuInInCL+g1Bl0h5sHN5uArr6EZRSRWE9pJg5jCKh0rq8vlDlcqXKXMuralVeLrT1OlDAiRzy8ZEutrjHiK7Hv7M3eiXW5ARjNpaXAd9VGIOQTLjeRLLkJvNysripfzJ37be/UxnYp9ijGLvmLuRsc2fIz2w/AYA1bcQ=c[~\�   W    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�          $   #   "   #   $��方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	    
 f��3�m
                                                                                                                                                                                                                                                    a\ !	;echelseatan 2D Graph - SpecializedeNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[��6_[ !	7echelseatan2D Graph - Area GrapheNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[��*cZ !	?echelseatan2D Graph -Statistic GrapheNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[��_Y !	7echelseatan2D Graph -Multi-CurveeNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[��gX !	Ge
chelseatan2D Graph - Columns/Bars GrapheNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[���gW !	Ge	chelseatan2D Graph -Line   Symbol GrapheNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[���V !	=�Mchelseatan2D Graph -Symbols Graph eNoz1FNwLSrKL1JwSiziMtJTcM7PKc3NUwhOTiwpSS3iMtZTcCpNSspJVUgvSizIUEjMSwEpAar3TSwoSE2BCAMA960W0Q==c[���   8 8                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      q      8�ٹ�  8�ٹ�          Q      �ٹ�  �ٹ�  �9 			%�3saedfedfc默认页面### ShowDoc介绍
关于ShowDoc的介绍，请访问：[http://blog.star7th.com/2015/11/1816.html](http://blog.star7th.com/2015/11/1816.html)

### 环境依赖

#### 1、必需环境

- PHP5.3以上版本

#### 2、可选环境

- php-mysql模块、php-pdo模块、mysql数据库

- ShowDoc默认使用Sqlite数据库，数据库文件在/Sqlite目录下。PHP环境默认支持Sqlite，无需额外安装其他数�   �   a��库。如果想使用Mysql数据库，则需要安装环境并参考下文的数据库配置说明做相应配置。


##安装和配置

	
#### 1、全新安装

- 克隆或者下载代码：
[https://github.com/star7th/showdoc](https://github.com/star7th/showdoc)

- 文件夹权限
	请确保/Application/Runtime 、 /Public/Uploads 、 /Sqlite 有可写权限

#### 2、升级安装

- 下载新代码后，覆盖原来的代码。请注意保留/Public/Uploads里的文件。此目录保存着你上传的图片文件。如果你没有上传过图片，则可忽略之。
- 先备份数据库。然后在浏览器访问http://xxxx.com/index.php?s=/home/update/db ，以升级数据库结构


### 数据库

####1、Sqlite数据库 or Mysql数据库？

 ShowDoc默认使用Sqlite数据库，并且自动集成到/Sqlite目录下。用户下载代码后即可使用，无需再安装其他数据库环境（PHP环境便可支持Sqlite数据库）。
使用Sqlite数据库是为了方便，尤其对非web开发人   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                              �5> !	I�}chelseatanformula panel(Y(x)=, Z(u,v)=) eNqtkUFPwzAMhe/9FU/isqGtpRtMYxInBAhxAAEXuGWtu0bLkipxoZP48bidJpiY2AFyqGU7n/P8OorxRIYyRq6LgjxZRuH8qjYK8zW4JLDXyi4MwVLDYNcVK2XJROMYuujyLdPVoQPmRtklnN/pliqgtjkV2lKON2VqGiAzOlvi/m4A8l6AFYWgFoR3bQy49hau5ug0xrNf443kY5xdIIguCdriurYZa2fxYByDmsrLhDZXNsdKLQmh9rSR3d4QdZnzXpaO0bt/vBmmJ2eTaT+KrrWhMEPJXM2SJD0fxelkGqfTeHKSXJZkAqnkxquqlIefKbCEhD1RslKBySdbIQ9Oi42IjrqD3XILXqpASGfR8NtB9PG1yW2Oj6+bOYXM66rrQBpXTSXixUFZtDYc2prQs51xB3MhUiFZDP3x7we0wEuv6V+MhetM6xzj9nnhRge5oK2EvfD4N/i11wzW/Qs+3gw4zlzorffPOf2LiLP/EPEJTeYPYA==c[��      p               Tf !	!echelseatanPlot SetupeNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==d[��?�e !	A�5chelseatanColumn of different formateNrNVsFu2zAMvecrCAzYdkjjJm2zNNe0GQa02DAMWHNkbNoWIkuGJLcZkB/YP+2f9gul5LnNIW7nZMDiS2LrkRTfI0XNhSQLUsfohFZTyJ0rp1E0vBwNhuPJYDgZjE+jWU7SEkYfDZa5UNk3so5/ImeIogKtIxPNtKwK9Tm9EmlKhpSba1Og6/XehAfqddApJA0C0gAB726GlmA47Z1sPb0NzCsV+43BpwQ2z8CEbGxEGVaAF67XJcWOEjBkK+ksf2Pj6bYzePWdLYYQoqwdCAV3/P+L1A5478awf6jdjrZBixbQmQcttcvZDaqEcXEgwLbgzz2+hkBpdEnGCbJTcD7OW1BVQUbELcYXLcb1LnfbjL2NEVnuIJYiXjX2ToMlB2hhho4yzVFRgjag9G5XjcAnfyXxaC+Jdyr8lQo0K7uH0m3KF2LNEQLlXrOG9AQdthTE5rkiXjF+sQDge04KClxxV0HpV1OjC7BV7OunNuyD8zJJXJKEByElLKkWOGCvOI4XTqSQo0y9Ci4nMKgyAmHDxrqKdfbvxNq7HW+EWrGnQKNnxh888J53urXvwJj7UdLvXz93aNQotNtVZnRV8mf/he13mHfi7PwIOPPFQFtly2Q9lV87PU4UHYw6kXLx30lh9dFkdX7tFNgCua9aMJ0yHh9DGSxu+lBxjIU/1RODD4BgedLzvO7796xe8edE5kf7oUl/OIakb4W1vrHvUVbULvUt2uYwODTtyZG0PNaT4Hodkzw0p8tjyInueSraEmOCu3YlK/USrmPew9NjSDxcB6yuTPznREbDo1zwbSCM8dCxfl69s9uXApvrSib+WvAE5fbW4ZL2CFcWnOM=c[��"   d    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  �? !	I�chelseatanformula panel(Y(x)=, Z(u,v)=) eNqNkk1PwkAQhu/9FZN4AYLUgiI24UTEeCORi96WdtpuXHabnSmWpD/eKQQRJeIe9s3MzvPu7MdcG6QYCuYyDsPoYTiIxpNBNBmMb8JZgYZQhU9elYW2+RKJRUL2iOFaEaMP55VNWDu7cNoyQHC1G3CabsGZIoQoDq6/DQiar0p4TqE5VqZIidflbgVk4bEuMWFMwSNVhqnNCR2f2F2MhYiEZL+FVGcZepTuMufXlVF9zOG1U3enI+FK4xgS5z1yu71ww4scaStyFh79Bb916v62O+Xe3qCXOOpsz/vcirygkZv4bQWrLXCBwF4rmxsEizUDu12yVBbNWcu7tjWpOLjsKzXByij7Dg167zyskUjlCB/aGODKW3DVwWH8w6FQBJVNMdNW3mujTIX/sbkXWcodbVAm42wOJEcR0fb4SRZt/1iX8guojZuTAzXBJ+YI7HI=c[���    � t �                                                                                                                                                                                                        �m !		+�m!chelseatanReport DatabaseeNpNkMtKw0AUhvfnKWZZF4FG6MbX8AFkNIMGtOok6uZs2kUrWqELIcGFtFA0Ltoo2gq24Mt0ZppVX8G5GJLDDPzzc745FyA6YP/yNIwZCWhMDyMGHiHqMZO335txtl0NRDcT09Q569+x7OQAKKaJnM1RfSzF8z2qtx8slulmNkH5mRX9OwTc83SY752qPwjq62Hlah/wKgysCttxw2/uOFsMXwgSc2phkiPG2/SMEbym/OiE8sauRsp0B7iWxfDBEhc0im7OeVARrZIgFSPynhp1/ovYAlaXiN/SiEzzOkJkOlev72VnnB0fxKHpzA7i1wYx+U0H6TWJ3kAmiyL5Mpheupj0tbtdPclkBAB/mrid9Q==c[��	�	l !		+�E!chelseatanReport DatabaseeNrjUgACLl0FhedTVjzr2P5i4Yr3e3qeNq14unYGROTJ/oXPGtdzcdU8XTv92bqtNc837n46r7vm+cpdNS93z3ixbknNs80rXrZ31XDVWOkCAcg8CAuZo1ADxLo1CFGgOFdNaWYKmJWZV6JhaKAJEX46YZlCjQIIIQGQ4uLUorzE3FSFmrLEouSMxCINI6AWmHKIBoiTn07oBesoSCwuLs8vSkHoMIXpUEDoebq+7fmCRqglYAvAbJgWQ1Oglmcz1iNrUXg2Y+vz5RtgLitKTY8vyQS5DOwRQySPgNQbQDQBg+lpW8+z6dteTt8C0gYM9KdL2oGi7/fMejZ9ARcXFwAbS5iFc[��R    2 p 2                                      �;k !		�5chelseatanAbout GTAeNo1T9FKA0EMfL+vGBGfxFvOYq0HIip4+CBKkb7K2kv3gmuy7Oaw/r2LVgjJPMxMZh4NXOAFfjaFUTGU72L0iZEKB6ERO80I2aeJJfwy6m2bM9z5QlBBj0FxioGt7s3TxmdyL/eV8DDL1ljFx38ZTDX2WHvRTPumCYo5x+owmaXeue7qvO2Wq7ars7zsV93FwgV1iRNFFirHR65Z044yyZbQH1Rf/MHFsRjl+quCkfZtmtKNsUW6fs4cWKJ/P1ncDoceb69/gX4APNVVpA==c[��4�j !	I�-chelseatanformula panel(Y(x)=, Z(u,v)=) eNq1U01v00AQvftXDOKSVInXThonttRTRREHpEgtB0Ac1vbYXrHZtXbHxZH84xknVCUkUC7dg5/247158+E7pdFn0BC1mRBxugjjZBPGmzCJxG2D2qMU751sG2XqB/TEIMghip30hE7cdaYgZc3WKkMAwdvDgsq6XacltNKghpF4Kz1CnAXz3xYEAzwJwIcShueXJfrCqfZwA3zxrm+xICzBoe80+fGM2dmJ3It7ZsTMJLeHUlUVOmTTv7zOsIbPk356s2Reqy1BYZ1DGsMzb/EizyvDcJG8/Bf5y6Sf7ac3dHUUuCqsn+wv61wz3KPmSpxLQb4HahDIKWlqjWCwJyB7ODz24ZLkarTGL047pjzkWprvMKBz1sEOvZc1wg+lNVDnDNjuSSH5Q6GRHjpTYqUM9+tR6g7/R2bN8MA1ekT+aGtq8JwKgzLPQ7Id/WPf8hT4cT+cJDQEwV+KMQOtPGXBm6/fJuezHkebsyH36NiJCEOx7XKtCvGJQ8nSi0UUb+ZROo/WYpWncRXLKi2WuA5bU0+DOPwoqXmdQNWqyNMiOQZahPf8Ryip4dUCLq6XeYrJMbOfItRVXA==c[��G    � H �                                                                                                                                    �53 !	1�chelseatanPoint(Column/Row) eNqFUcFKAzEUvO9XDHhR0E23Qql7XayIB0V6l5B92w3NJsvLW6vQjzfpFu3NRyDkvZnJZLKxjiJcMFps8DV6kbFWqnpYltVqXVbrcrVQTU8uklZPrMfe+t2WoqRNCROpQUchVm/BerlugpsG//EeDjcoiqtTYW4idGht1xGTF3SBBy3ISo2OhKou7i6qOGIzeZM94bnF8Q/YUjRsx9MEafD4NZIRasEUJycx9RK5vhTDv+fEqBJxy9+w/lM726LVouHsniAhwGne0dyrFue6RVrGWbPH60vSJObAGChGnbAH6xxk4vTuSTC7WmbDjfbwQZBSIEYUTkn+smfcfcaNOVDYiGxDxNHZxBGmp3Sn7TC6IPkjMiq7jC4cssQPKRiStA==c[�8p�52 !	1�chelseatanPoint(Column/Row) eNqFUcFKAzEQve9XPPCioE23QtG9LlbEgyK9S9id7YZmk2UyaxX68U66BXtzCCSZee/l8bJxnhJ8bKy4GCr0ImNlTPm4WpTrh0X5sFgvTd2TT2TNM9uxd2G3pSS6GWEiM9gkxOY9uiDXdfTTED4/4uEGRXF1KsxNxA6t6zpiCoIu8mAFWam2iVBWxd1FFUdsptBkT3hpcfwDtpQaduNpAh08fY/UCLVgSpOXpD0lV5di+PeujFKJW/6BC1/WuxatFQvv9gSJEd7yjuZeuTzXLXQ13jV7vL2qZtOTHl0HYo6MgVKySjo47yETawCTYLa3ys5rGxCiQOMgRhLWSLU9s2fcfcaNOVm4hOxHxNPZzcWLo4+SfySjst3k4yFL/AJh95XBc[�4+    X1D359MG3a1lX28IVz8tem59tyQZTco73AG5+pZtP98h0cJx892S41cLNiy9qSAk9ay8S0cemU81cZa9pRSTI8caqOMPTY9TXv6a9CeGa0RjPy254r+4G+S7UnKz43pbwP+EjiS22te50detyvZiVczXBzDGX/qQydes758aX3a9AqPj3LZ4ljJekW+ZaoH+5VJ6IYcqxBjZll4ps1mQ38KL3IK/e2kc9A0fRVqgE9oxsLYHd/RywKMErnRHveI0hNwnoD+H5Gc/yoigbgr+gS8wtF7XVvuguhP6SQOA3Wi71G8U7JIRlI3vAklPqWIXdLZ4LzpYsPsYSsN+ud/3qaQx5GyizyCP9SLw4yveNe5YkpwPKfeSNByvAz0RkEomjx0sEuT4gON/FmCEbGv8+wyyEVo1wssg3q7L1UnNhWVk0nE3UldTbKrnO6kUnQLvdE/YG+BHlqsCAsVjMJKCcnCLnWUvQPyXmj6wtbLWii1pbk1K+Cav5Cny653oYFW88ZTAx2nWozpESqMbSxu5wbKn7My60TIZTdJ7fBbHPpH18aKtaN1rESLXUfSvcgbSic2OJ6D0orOHj/ej8vJ9OLmbVZO/nWOtLGdUCNySjYcB8VotT18D3WbB/Pgk4pNZ+FQKGeoboVeMu1GLPQG0Pe9CbjiKYQYLjxGBZDKPAx4Cu1lx7FMWTnN6bEHyQ+BNNo39NHiQWxDh4z2ISKicCM92ZA3K89zNC1CiKUKsgptUdGnTj5FvHIhYPqzYS+kKpJ+54P3GNhGWuhSbbMSSr23ZpdcGz1ehjeMcSQZAmQl1PYBU42h8Fb9fjAIcZEJCIZrKVRSs0tEQ//qOCXyG3qIKBBihIhGo1pDhbd+S0HCq33po1sfvuUoK05MkAAt4xe9hDTrJ/ZvXFhBcqlFWEHF2tiVaxlj4Mxga0YoEFm2z3Jm+E8irr1UPzf0vbH4+AqoE+TXo1AfWqNbdgHpU2OgNn1g+RAtz1KKioLybsp3l29/AMr33DQ=c[�>4   ] ]                                                                                                                                                                                                                                                                                                                                                   � J !	W�EchelseatanCreate New Graph dropdown list buttoneNq1k0FvEzEQhe/5FU/iGrJsAlHJDaWkQkIUoR57cdaTXatee2XPNo2UH8/Ym0DSBlEO7MVre+b5e57xyliKCzTM3aIoyo/TSTm/mpRXk/m7YtmQjaSKm6C6xrj6jiLLUHAgKloVmUKx6l3Fxrvv3jgGRm/yh2UgxYRvtEXOhg6+037rYE1krHtm75AElyoSygVGb08+jPY4KuOLxv53qKZYBdPlHcjG56eOKiaNQLG3HGVNkhdnan+dS0aZxD7JiY8Ehek1Out5DN+RS7PNkSYtF2lbBdUSB1Od70EbZX0tYmO06oEQ+0CvvA/ug4PvGUb+G8Lay3ILv8mzg7AoC+70DHd2jVsBvfl6Sj17Tj17BfX/gh6oZ2nksAN7RLJSuJeH7AegyodAjKGc77NbrVPewfSfgz/IcClWOY0f0j3K0jhPtED4VswSp76ORwcD8yXpeeboRflg3tETp4NWwbf3d7cwEepRGavWluCd3WHbSCku4UjocAXSuyb12P3zgv0LiKhVDVUPIrbeySPZKHkM2eWAdhpYB7VLFRsPKQlRbIdfkUG5mjKf9Aq2hpt8LfnmUl3VYKPONnyA8/yC8SfTz3Nfc[��\    % ) %                         �H !	I�chelseatanformula panel(Y(x)=, Z(u,v)=) eNqNkk1PwkAQhu/9FZN4AYLUgiI24UTEeCORi96WdtpuXHabnSmWpD/eKQQRJeIe9s3MzvPu7MdcG6QYCuYyDsPoYTiIxpNBNBmMb8JZgYZQhU9elYW2+RKJRUL2iOFaEaMP55VNWDu7cNoyQHC1G3CabsGZIoQoDq6/DQiar0p4TqE5VqZIidflbgVk4bEuMWFMwSNVhqnNCR2f2F2MhYiEZL+FVGcZepTuMufXlVF9zOG1U3enI+FK4xgS5z1yu71ww4scaStyFh79Bb916v62O+Xe3qCXOOpsz/vcirygkZv4bQWrLXCBwF4rmxsEizUDu12yVBbNWcu7tjWpOLjsKzXByij7Dg167zyskUjlCB/aGODKW3DVwWH8w6FQBJVNMdNW3mujTIX/sbkXWcodbVAm42wOJEcR0fb4SRZt/1iX8guojZuTAzXBJ+YI7HI=c[����TG !	��echelseatanParameter (only applicable for 2D Parametric Plot and 3D Parametric PloteNqFkE1PwzAMhu/9FZa4gFQausM0KnGqNsSNAwc4ZqnXREuTynFhSPvxuB2sQ0LCFyt+38cf2TiPqQLL3FdKlfeLolyuinJVLO9UbdEn1OqRdG9daF8wsSTFhKg6nRhJbYZg2MXwrEl3KBWA7GoKOEvRBYYRrnVCKCvIbi8CsuPZCk8NHGdrg8mQ6ycFRFgfejSMDRCmwXOSmsDVr27/vwUphVyHcdt37QcEWTACWwRsHMM2HnLAtgKcLPuTPF8ourQxFo1Iu4nbReoGry9MxurQImhjIjXya/4TIkGInE/AbPxBP5z3f1Eyeovwer2/ecjhbUxwOmIx5lqHsen3qmHokJyROhLJuNHxBbx8maA=c[�5�   U U                                                                                                                                                                                                                                                                                                                                           �(F !	W�UchelseatanCreate New Graph dropdown list buttoneNrNk01vEzEQhu/5Fa/ENWTZhEYlN5SSCglRhHrsxVlPdq167ZU92zRSfjxjbwJJCaIXJPbiHXvm9TMfXhlLcYGGuVsURflhOinn15PyejJ/VywbspFUcRtU1xhX31NkWQoOREWrIlMoVr2r2Hj3zRvHwOhN/rAMpJjwlbbI0dDBd9pvHayJjHXP7B2S4FJFQrnA6O3Jh9EeR2V81tj/ctUUq2C6fAI5+PTcUcWkESj2lqPsSfDiTO2vtkSUSeyj3PhEUJjeoLOex/AduWRtjjRpu0jHKqiWOJjq/AzaKOtrERujVY+E2Ad6ZT24Dw6+Zxj5bwhrL9st/CZbB2FRFtzpGe7sBncCevvllHr2knr2Cup/BT1Qz9LKYQf2iGSlcb9fsh+AKh8CMYZ2vs/Zap3iDkn/2flKlku+yml8l+lRlsbZ0ALhW0mWOM11PGYwMF+SnmeOXpQPyTt65nTRKvj24f4OJkI9KWPV2hK8sztsG2nFJRxxHUogs2vSjD28bNj/DzK6mpxRiFTVUPUoSuudPNWNkieZaz1wnTrWQe3S3IyHkMQnxQ8/PYNyNWU4mVhsDTe5Obl/abrUkEOdc/ABzvMPJUabxQ==c[��I     Y                �;L !		�5chelseatanAbout GTAeNo1T9FqAkEMfL+vSBGfpLdcpVYXRGzBw4fSIuJr2XpxL7hNlt0ctX/v0loIyTzMTGa2CpTBMbhBBRSzQv7Jil/QYSbP2MFJEvjkYk/sfxnl1tU9PLuMIAwWWoEJtNt92YfXg0to3l8KYTPwUUnYhX8ZqEiwsHMsCS9V5QWGFIpDrxqtMc3ioW5m87opM3uy8+ZxaryYSBEDMebRnal2eMKEfESwN9U3nSkbYsVUfhXQ4aWOfVwpacDlWyJPHNzneLpubz0+9n+Brg/1VWQ=c[�/�$K !	W�MchelseatanCreate New Graph dropdown list buttoneNq1k0FvGjEQhe/8iif1StkutDTlVpESVaqaqsoxF7MeWCtee2XPhiDx4zv2QgqEtrl0L17bM8/f84wXxlKcoWZuZ0VRfhqPyunVqLwaTd8V85psJFXcBNXWxq3vKLIMBQeiolGRKRSLzlVsvPvhjWNg8CZ/mAdSTPhOG+Rs6OBb7TcO1kTGsmP2DklwriKhnGHw9ujDYIeDMr5q7H6HaopVMG3egWx8eWqpYtIIFDvLUdYkeXai9s+5ZJRJ7LOc+EhQGF+jtZ6H8C25NFsdaNJykbZVUA1xMNXpHrRR1q9FbIhGPRBiF+iV98FdcPAdw8h/TVh6WW7gV3m2FxZlwR2f4E6ucSugN9+OqSfn1JNXUP8v6J56kkYOW7BHJCuFe3nIrgeqfAjE6Mv5PrvVOuXtTf85+IMMl2KV0/gp3aMsDfNEC4RvxCxx6ut4cNAzX5KeZo5OlPfmHT1xOmgRfHN/dwsToR6VsWppCd7ZLTa1lOISjoT2VyC9a1KP3Z8X7C8gH89BRK2qqXoQseVWHslKyWPILnu048B1UNtUsWGfkhDFdniODMqtKfNJr2BjuM7Xkm8u1VX1NtbZhg9wnl8w/gLUcHNgc[��   	 � �"�P��) � �                                                                                                        BU !	5-chelseatan2D Graph -Line GrapheNozNDIGAAEtAJc=c[���aT !	;echelseatan 2D Graph - SpecializedeNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[�*�_S !	7echelseatan2D Graph - Area GrapheNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[�*�cR !	?echelseatan2D Graph -Statistic GrapheNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[�*r_Q !	7echelseatan2D Graph -Multi-CurveeNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[�*ZgP !	Ge
chelseatan2D Graph - Columns/Bars GrapheNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[�*4gO !	Ge	chelseatan2D Graph -Line   Symbol GrapheNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[�*�N !	=�Mchelseatan2D Graph -Symbols Graph eNoz1FNwLSrKL1JwSiziMtJTcM7PKc3NUwhOTiwpSS3iMtZTcCpNSspJVUgvSizIUEjMSwEpAar3TSwoSE2BCAMA960W0Q==c[�)�BM !	5-chelseatan2D Graph -Line GrapheNozNDIGAAEtAJc=c[�)�    � � �                                                                                                                                                                                                              �_ !		�}chelseatanAbout GTAeNotjLEOgkAQBXu+YhstobAjobAyVibGnqzccmyEvcvtI+rfS9RqppjMGaRObMQrEkEc5G+HLBTENZoEGlOhWDhPavFbbKyr6iqjFLFBqKUJyG3TPPWh3qhBivG8SZBXnacMxSzdpWhUm/m+OxxP/19/+/32CJ7WMgg4dt7nAbr0rGnx+AHJfzxkc[}-��A !	!�=chelseatanPlot RangeeNqVUk1PwzAMvfdX+AhSC+sGAnHmQ5xAnDZuWeOuYVlcJSkFaT8eu2mnIbgsqlLb8Xt+jlOAV26DAYyDoHYI5EGbukbvMEJFttu5kIPSH6pCF+XYkSsmPz+CCwx68tvQIGOphthgIpXommibFbCC3sRGwq01bsPAiP5T2cBn98KQakKDSqMPKbsLyLKwNg41tMozJ6MEslwtV6BVVDmbvOT3zl8OGKsLiP57bEfEb43TQYSNNSrarY1T0ZATrgfvub218mw/shWIpYcWK6MstJa4W2u2CGv6gqpRfuheKz85LVl2UmLPpTwFHN1Xg1PWoKtn4oY6q6W1VKM21ZCcbhQiQcQQWcrzxpFHaIzW6KaRXHrqw93QH2eGw6zGtFwGpbSG2li+KckZLb69w2yEA5TTqe7Zy9tTUS5mN7Mckrm4vj3Psj1ACbzNeVuAWFew52hxtOA0VzjJ4aSZvV1no2ntFAoSOzw6to8fHeOZoByk/GYpTxaWjY39K2A+nKeej8UsEu7qr7B0N9kPKhEOYw==c[}0h   r2  |Connect type:  Modified Bezier| plot corret   |
| 3  |Connect type: Akima | plot corret   |
| 4  |Connect type: B-Spline| plot corret   |
| 5  |Connect type:Spline| plot corret   |
| 6  |Right click the curve and select Create xxx Data. Try missing value case for Bezier, Modified Bezier, Akima, B-Spline, Spline connect type| plot corret   |
###### LineGraph TestCase 3: 
------------ 
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  |Color: Set as Increment | plot corret   |
| 2  |color mapping| plot corret   |
| 3  |color indexing | plot corret   |
| 4  |Set as Custom and right click to set Custom color | plot corret   |
###### LineGraph TestCase 4: 
------------ 
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  |Set Connect types  Bezier ,then try to set color as increment| plot corret   |
| 2  |Set Connect types 2 point segment,then try to set color as increment| plot   | corret   |
| 3  |Set Connect types  3 point segment ,then try to set color as increment| plot corret|
###### LineGraph TestCase 5: 
------------ 
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  |Transparency: Set as max: 100| plot corret   |
| 2  |Transparency: Set as min:0| plot corret   |
###### LineGraph TestCase 6: 
------------ 
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | Fill Area Under Curve: Check diff settings| plot corret   |
###### LineGraph TestCase 7: 
------------ 
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | Span Vertically broken by missing values| plot corret   |
###### LineGraph TestCase 8: 
------------ 
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | Fill to next data plot - One Color| plot corret   |
| 2                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    �cI !	-�uchelseatandefinition tableeNqFUctOwzAQvOcrRuJaGlJQVXKtKELigER/wEk2jYVrB3tTWqkfz8aBtpFA9SXyeh47k5U2FHI0zG2eptnjbJrNF9NsMZ3fpcuGTCCVPnvVNtpu1hRYPil7onSrApNPV50tWTv75rRlILmJB+NxT1yqQMhyJLcXB8nxBMVLheMZWlEovW7jC+Thad9SyVTBU+gMB5kJOR+pXb0LIxMi+wPYiUWtLcGqLUHZCjtlOoK24EYHsCoMiURrHKN03hNjMJ31+6ha4v9KROYEZUPlB94b94VXVbAycokhULi9cIZ3XUMzgqDEpKEeuu6hQ17QZ6dFj6xkdHWPiG2Ij+7LCLEN2eIeJ8V/HCcYB90pr2OoLshvPBEG3yBql2niguPcD+fqBoXa+W1nFIpDDMIibzeib2nPPSoOf2r8o5CRwzH5BuUB1n0=c[��S   Y Y                                                                                                                                                                                                                                                                                                                                               �$E !	W�MchelseatanCreate New Graph dropdown list buttoneNq1k0FPGzEQhe/5FU/qNWS7CSCaGwoEVapKVXHk4qwnuxZee2XPEiLlx3fsTdoEqMqlvnhtzzx/zzO7NJbiHA1zNy+K8st0Ul5eTcqryeXnYtGQjaSKu6C6xrj6gSLLVHAgKloVmUKx7F3Fxrsf3jgGRp/ywCKQYsJ32iBnQwffab9xsCYyVj2zd0iCCxUJ5Ryjs6OB0Q4HZXzV2P0J1RSrYLp8Ajm4femoYtIIFHvLUfYkeX6i9s+1ZJRJ7FpufCYoTG/QWc9j+I5cWq0PNGm7SMcqqJY4mOr0DNoo62sRG6NVT4TYB/rge3AfHHzPMPLdEFZetlv4dV7thUVZcKcnuLMb3Avo3bdj6tlr6tkHqP8X9EA9SzOHLdgjkpXCvb1kNwBVPgRiDOU8z261Tnl7038PvpDpvVjlNH5K9yhL47zQAuFbMUuc+joeHAzMb6VH5xNc9yK7d+7ohdMty+Dbx4d7mAj1rIxVK0vwzm6xaaQO77FI6OBfGtekBnt8Xa09xeji9E5JrBqqniRvtZWfYa2k6bObgeI4sA5qmyozHlISjdgLvyODcjVlFOkJbAw32X5+oVQ/NRDXmdgHOM+/AI5sZUY=c[�ǧ    wn list button TestCase 1: 
------------ 
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | Active a 2D plot, open 2D function plot/2D parametric function plot dialog | , make sure Create New Graph dropdown list button turn out in the bottom of the dialog  | 
| 2  | Active a 3D OpenGL plot, open 3D function plot/3D parametric function plot dialog |, make sure Create New Graph dropdown list button turn out in the bottom of the dialog   | 
| 3  | try to select Create New Graph | plot corret   |
| 4  | Add to Active Graph | plot corret   |
| 5  |Add to Active Graph and Rescale, and do some settings in the dialog| plot corret   |
| 6  | Auto button next to From\TO is available only when Add to Active Graph is selected in 2D\3D function plot dialog| dialog show corret   |
| 7  | Auto button is checked by default and From\To button is gray out, check whether From\To range is same with the scale of active graph or not|dialog show corret   |c[��    <  <                                                  �A] !	A�chelseatanColumn of different formateNrNVs1u00AQPpOnGAkJOKQx6U9Ic01bhNQKhJBoj1N7bK+y3jW76yZIPXDta/AcPA0vwCswsyZtDnFLWiTiS2LPN7M7883stydKkwdtUwzKmgmUIdSTJBke7g6Go/FgOB6MXifTkrQnTN46rEtlik/kA/8kwRElFfpALpla3VTmfX6k8pwcmXBiXYWh13seH2jtYHPIlgjIIwQk3BQ9wXDS21l5etdw0phUNgbvMri+A2bkU6fqaAE2HC9qSgNl4Mg3Onj+xs6T1WDw4Dt7DCGusgigDJzz/w/aBuC9O8fxoQ27uwq66ADtCejShpLDoMkYl8YC+A78vuBbCNTO1uSCIj+BIOu8ANNU5FTa4XzQ4dzucr3PSHycKsoAqVbpbOkfLHgKgB6mGKiwvCpqsA6MXR9qSfDOX1G8+yiK1zL8kSp0M/8IpruYr9SCV4glF86WRc8wYEdDXN91xAPO9zYAfC7JQIUzniqoxZo7W4FvUumf1rEPQWjSeEka5kpruKSW4Ig94nWEOJVDiToXFkJJ4NAUBMrHjW1K1t6/I+vR43iqzIwjxTJKZeTggVe805V9x4qFrzX9+nGzhqMlQ+tDFc42NX+WL+y/xn2jmu1vQc2kGWilbblYt+3XXZ6gqg2cNirKwX8vCrOPrmjz6y6Br5DnqgOzUcajbWiDi9M+NLzGhZzqmcM5IHhWetbrvrwXrUXOiUKk/alJv9mGpM+U9zLYV6gb6qb6DP3yMHhq2uMtGXlsleB4kZJ+ak6H25ATXbEq+hpTgvNuJhtzH441r/fz2/dnUWG9bVz655BDx+qoWGBFGftxCEQCXvpVnfWlbXQmSnsL5YmxA+DbLZR2LuMjE3Zr9XJ4zmdeDBKuz7cpisG/NBKWb9I11FhQ7zcfq4Nbc[�ޑ    � p �                                                                                                                                                                                                            �9 !	1�UchelseatanPoint(Column/Row) eNqFkcFqwzAQRO/+ioFeWytOIaS+mqSUHtpDfkDY21hEkYx23bSQj+/KDm0KhS4Codl5y7DaOk9coxcZamOqh2VZrdZltS5XC9P05JmseUx26F3Y74hFLyOJyBwtCyWzHUMrLobX6IIUxc1U+KUic41lQlUXd1dVnL+NeOpw/jF2xG1yw9SBNjYfA7VCHRLx6IVVU7i+HoZ/30pUCu7SJ1x4t9516KxYeHcgSIzwNu1p1qrFpW6hp/WuPeDlWWdSSjHhSMxWvSfnPWRMAXEUzKmWOXBjA0IUUNAlgSXp3lRu/5Jn7D5jw7Qvx8ipRDxdMinZk0Zwbxh8lPwL2ZVDs4+nPOILBd2O5g==c[�=�8 !	1�EchelseatanPoint(Column/Row) eNqFUEFqwzAQvPsVA722UZRCSH01SSk9tId8QNjbWESRhHbdtODHV7JDmp66CIRmZ0bD7KwjrtGLxFop/bRa6PVmoTeL9VI1PTkmo56Tib31hz2x5EtJIlInw0JJ7Qbfig3+PVgvVXU3Df6gKLrGMEHX1cPNVOOViJcO4y+xI26TjdMGebH9itQKdUjEgxPOWBbXt2b4950VOgv36RvWfxpnO3RGDJw9EiQEOJMONGN6eZl75NM62x7x9po9KaWQcCJmk7ln6xxkSB5hEMypViVwYzx8EJDPJYEl5d6u6pn3WHhxKsgySgwRR5cQI9qe8p/2A9EFKbUXVknJLpyLxQ+vdIl4c[�/n    3 `� 3                                     �y< !	I�chelseatanformula panel(Y(x)=, Z(u,v)=) eNptUD1Pw0AM3fMr3phUIaIUUJeuMDAUAQts14uTWnF81X2U5N9zTcWAxOInP9vPz143iH5Gy11HnjSic35MYiA8ED7Lqdpt6isG1gw1vsqpnqtdXF2JlXWhnKvirsE7Cdn4j9hhRjxS3sRGeyEoTRHRLeTJKEmxacDdkv/OLDw44CBGBzj/p3o0AUlb6lipxdlIohpW2A7Yv9Qg7/PASCGYnvDNIojJK1yKxX2Dj3zymXIQpz1C9pWBFU9JbWSneBUXQdPJZ4VLbrTFaPJHQvJ0tX3pyO6s8z4f3aDcvz3frG8fHrfVD1u3dNo=c[�1��.; !	�chelseatanFrom/ToeNoljEEKhDAQBL/SD1h8xt4WPAieJ+44GYgTySSivzci9KWrqZ4jG74lbzgoNUZQES6okQxTfuGnV4YvlBh5RW51bxVSaI9Qh1dNCWpLYXI1GTD2hx+dj9f3nnDhz65iww3Q0iexc[�1��: !	1�echelseatanPoint(Column/Row) eNqFUUFqwzAQvPsVA726VpxCSH0NSSk9tId8QNjbWESRjHbdtJDHd2WXNoVCFwmh2ZlhtNo5T9ygFxkaY+r7ZVWv1lW9rlYLs+nJM1nzkOzQu3DYE4seRhKROVkWSmY3hlZcDC/RBSmKm6nwC0XWbSwT6qa4vari8k3EY4fLD7EjbpMbpg60sX0fqBXqkIhHL6yYiptrM/x7V0Wtwn36gAtv1rsOnRUL744EiRHepgPNWL34qhK6Wu/aI56f1JNSigknYrbKPTvvIWMKiKNgTrXMgTc2IEQBBR0SWJLOTeH2L3iW3WXZMM3LMXIqEU9zppIOOVG5mHb26UkDuVcMPkr+k6zJT2Afz9nwE6rvkdc=c[�>   t t                                                                                                                                                                                                                                                                                                                                                                          �	= !	I�%chelseatanformula panel(Y(x)=, Z(u,v)=) eNqFUsFu2zAMvfsrHrBLUrh2nGxBFqCnYC2GHVq0vWw31aZjIYpkSHTrAPn4UnaDLECx6SCCFB/5yKciA/sDKl3X5Mkyauf3nVEwekf4PemnN4t0tEFbMSn+TPr0ML3hqzFwVbowOUyTeYYnMlTyJ8VeDuCGpJNWdmsIlnoGuyHYKksmWWTQ9eCfMEMcOuDFKLuD8xevjQrobEW1tlThVZmOUpRGlzvc/0pB3gtgTyGoLeFNGwPuvIXrOPma4VlGfiW5jLNbBOElRlvcdrZk7SwejGNQ33qpEH1lK+yVbCR0nkbaMUPYlc57GTrD5P7x7rqYfVuupklyqw2FNRrmdp3nxfd5VixXWbHKlrN805AJpPI7r9pGGj9TYDE5e6J8rwKTz09EHpyWNSL5MhxchiNwowKhWCfXfx0kx/MkPyscz5kVhdLrdniBPPzoWyEvG5RBO8MhxgS9vij3X18QhSDjVrUVLXSFSvHHH2LnYJQXGYZYMfs4KWZnxaTmPySLVKXHPLLbKAsbxbGyp5N0J/SYt4h57bAiESjSYJZPN5I4omxIespvixLyoHwYWAbj3mKJd1Ql/ts=c[��y   � 4�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          �cp !	%�}chelseatan1.Plot RangeeNrVVd1u0zAUvu9THMQNSLTOX9u0dzC2aXcTGtIG4sKJncbMtSPbXYe0J9mz8E68A   ��Ao !	!�=chelseatanLine GrapheNrNVU1v2zgQvetXDNBDU9SWLOejiW6pdxMUyCJF2+2dlsYWYYoUSKq2i/74PpKO48TJ7rW+yBzOx3szj+SNVOwqar3vq6Ior6Z5eXGZl5f5xaSYtawci+LWir6VevmNncen8Ja56ITzbIs7qTnuZ2/ij/YGCu4z4   ,    $  $                          �Yd !	!�mchelseatanPlot RangeeNrVVUtu2zAQ3fsUU3TTApX1tS17myZFdkHRAkmLLiiSstjQpEDScQrkJD1L79QrdChZiRsrLhzEgCsYsDUcc957fJw5E5JbkJoSJ7SaQeVcPQvDeJoM43E+jPPhOApPKi4tJ+EHQ+pKqPknbh1+hc5wHi6IddyEF1K7j0TN+WDwunnAR6AJgf/DCbEc4tkg2HgGd3C2VNSXhnMGdw+JjFtqRN2sYBwuBH0cO72tOXWcgeF2KZ3FGO4329wf9n7HHWK/uVYcqJbLhcKXV1+/vdkWJo7yLUUsNzcoxnAYXiwLKWj4uZaaMBsmUZwHUR4kSTgqJiyNGZ1MEpoMazV/6ws2asGJNgZJQcslaagvkJyoZYfH+tghEE3Hk5yN4ntEvZDSZoWw74Ry5Q6jTZJGRZqUbDeSrFlRWgUbaA4CJ5vmJM+mLZxeNJ3lg17TJ/+L6Y3HbUEosGSx6beXVDVHVfOsJOmEJ3mZd6q2ojJhSYFW3/T/AyomypIbxd2BoWUkilOS7Djw7iL8jQ1W2lzbiiNAXYKreKujjxZaXx8I7YhHNC3pI7SbSu62Z7plz0f+fNqgW258hhl9vRjDV7ASrvKK1RIFQE1xrNwQaXs6wL8oZcdB6b33xHqKVJwwbmxLcomni5VLobBQTQy6xPnF/ZmOfv/6GQTO/FhfDt8Gr4Vi1jtwXZrqRSFUM+DtUegCl1eXV8CII32EMZS0SfhsT8YmIW0TvuBnf83Gx+EOODVGGyiI2Z/CZHaGf7Uau4tFRIJIwPbg3q3wvdJLybzF2qUSh4hfa3vVs5i/NPFC3wKtiHH9x9+1fYbKdGlPmqDWEtMagv1Zmc9a4ZUwGmmtE/tMN/IbCL4u2bfb7jPJZ+dzpQ2HSjDGVTejQqNX9hhkt/dzs0O46/YRxqAUEtsSON39qr0y69HmafUadzD4A1vbpqo=c[�      | Fill to next data plot -Above below colors| plot corret   |
###### LineGraph TestCase 8: 
------------ 
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | Try to fill to next plot draws when there is missing values| plot corret   |
| 2  |Try to fill to next plot draws when there is axis break| plot corret   |

10. Try missing value case for normal, slideline only, slideline and base case, etc. (and also change line color to increment or colormap to test)
11. Date and time data
12. Open Plot Setup and Layer Content to edit range
13. Change plot type by layer content/plot setup/plot detail/click button directly
14. Group and non-grouped line plot
15. Press Ctrl+click to select a Special points and then customize it
16. context menu: copy sparkline and then paste in another graph
17. change plot's designation/worksheet source through context menu
18. Line plot support label now, but waterfall does not support Label (source: ORG-9175)c[�+�   x://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     �：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<x|
|:-----  |:-----|-----                             ~    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   ://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)    �://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)    �    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�    FxUq55NYFXdeTX22m4/cYj4qqJnrgYVIvvqXltO58Vv6UNPGyTXVyow1Q0V87MPFd/odrJt1M7Su46+PV/tOLRej+mEcPDXYeQ2ckeew2RiwB6Cm++y/XKNiBqBn/yROr3ZsGcbyQAn7XUXewSMxkVqnfccKZdY/hTQOuP8z1eLYlnSylkLnBSPIzf0lr9q9jP62yFaA/zjxs1OD2pGb+cfRyk/o/xd0ge97ZHV6HZHsWdqJ/+FSdmOAhtJvPKsItPhcKA/VVQlCbZBhwA96IsyE2KEv43z/7s8unlGX7yUbtBpQx/RoQr0zraeBzAwyxTQoMYRZR+X2nZ8yOspRDeUj4GrtExd+PP+HJqKj6cpR/EqB53TGKDQjk/YqyWh0ksanYYSgbcZD6iyFMHEKWcGhNL6GTPHtixeC2HKhlFByvb41NugDg3Vi0UCOWjbLIrLkm61MXQDxukf9OYBFWo0hOcA+GIIKSYvIVDxBshHZekz+6hbZcyR1t7tgGv9g0ChuDqlBlrLh0gdlMx+mtMDdEi8VzdrB+3XbNw+NxSK66w34jbn8Sm082ofaJ+Y6OFU0uGHukKdOmB7jZZ2dPHw4W5eL5avrl8U9eI/nWSdH5SZUTC642QVZ83xfC28reW6xGSy6UI2lQmO2l7ZLdPJZKINoD9pI7jSLgwlBxFDAJDqUiyeU0c9cKKpqPHKHkY0+V6ahnzTmG7cq6Mo5GyUjMjCnY7kpW5Ri5czhESV2EpkMSmmzTFVOgqSMP/sOCptqmzW9RQjRlGnPXxpjkUNp955dypunZ1vZYVHlpqUBEUNt73HvMILiN78ceb69JQVDMOtVia7OeRGRb/8fvRXaIgsMGKCCKHB1tRgNR5JLLx7oj6FjTKJQSt2nFiAtmke17Bm+9z970GGq95aJcO12ju/Cz3jGQQ3+ZaRCo1s++9qFvgfSAM98xemcXQeo1PBnWh+PxN+aA+1/AbWp87Bbfbs5n26eZFLNCTOu67fvH7xL4eaL3Q=c[��^    FxUq55NYFXdeTX22m4/cYj4qqJnrgYVIvvqXltO58Vv6UNPGyTXVyow1Q0V87MPFd/odrJt1M7Su46+PV/tOLRej+mEcPDXYeQ2ckeew2RiwB6Cm++y/XKNiBqBn/yROr3ZsGcbyQAn7XUXewSMxkVqnfccKZdY/hTQOuP8z1eLZUkrZy1gUjyO3NBb/qrZz+hvh2AN7I8bNzs9qBm9nX8cpfqM8ndJH/S2R1Kj2x3Fnqmd/BcmZTsKbCTxyrOKTIfDgf5UUZUk0AYdAuSgL8pMiBH6Ns7/7/Jo5hl98VK6QaMNfUSDKtA723oeQMAsM0CDGkeUfVxq2/Ehr6cQ3VA+Bq7SMnXhz/tzaCo+nqYcxascdE5jgEA7PmGvloRKL2l0GkIE3mY8oMpSBBOnnBkQSutnzBzbsngthCkbRgUl2+NTb4M6NFQvFgnkoG2zKC5LutXG0A0Yp3/QmwdUqNEQXgPgix+kmDyEQMUbIB+Vpc/so26VMUdae7cDrvUPAoXi6pQaaC0fInVQMttpTg/QIfFe3awdtF+zcfvcUCius96I25zHp9DOq32gfWKih1FJhx/qCnXqgO01WtrRxcOHu3m9WL66flHUi/90knV+UGZGweiOk1WcNcfztfC2lusSk8mmC9lUJjhqe2W3TCeTiTaA/qSN4Eq7MJQcRMwAQKpLsXhOHfXAiaaixit7GNHke2ka8k1junGvjqKQs1EyIgt3OpKXukUtXs4QElViK5HFpJg2x1TpKEjC/LPjqLSpslnXU4yYRJ328KU5FjWceufdqbh1dr6VFR5ZalISFDXc9h7jCi8gevPHmevTU1YwDLdamezmkBsV/fL70V+hIbLAiAkihAZbU4PVeCSx8O6J+hQ2yiAGrdhxYgHapnFcw5rtc/e/B5mtemuVzNZq7/wu9IxnENzkW0YqNLLtv6tZ4G8gzfPMX5jG0XlMTgV3ovn9TPihPdTyG1ifOge32bOb9+nmRS7RkDjvun7z+sW/8Xsvag==c[��V   �    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   > �F>                                                                                                                                                                                                                                                                                                                �i !	I�chelseatanformula panel(Y(x)=, Z(u,v)=) eNqNkk1PwkAQhu/9FZN4AYLUgiI24UTEeCORi96WdtpuXHabnSmWpD/eKUgQJeIc9s1+PO/O7OxcG6QYCuYyDsPoYTiIxpNBNBmMb8JZgYZQhU9elYW2+RKJRUL2iOFaEaMP55VNWDu7cNoyQHC1C8icX1dGQaksGmjBmSKEKA6uvwUEDRwM4DmF5ngyRUq8Lnc7IBuPdYkJYwoeqTJM7ZrQ8YndxbkQkZDst5DqLEOPkvRXrn3M4bVTd6cj4UrjGBLnPXJ7vXDDixxpK3IWHv0Fv3Xq/rY75d7eoJc46mzP+9yKvKCRl/htBastcIHAXiubGwSLNQO73eK+D+cs79rU5MRpxzTByij7Dg167zyskUjlCB/aGODKW3DVwWH8w6FQBJVNMdNW+rVRpsL/2NyLLOWNNiiDcTYHklJEtD1+kkWbP9al/AJq581JQU3wCYCq7Eg=c[�Ȇ\h !	1echelseatan6.Template LibraryeNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[��Zg !	-echelseatanTemplate LibraryeNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[���   Q Q                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �G! !		+�CchelseatanReport Database
    
Sqlite databse
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid    |int(10)     |否 |  |             |
|username |varchar(20) |否 |    |   用户名  |
|passwo�,! !		+�chelseatanReport Database
    
Sqlite databse
-  report table
![](http://192.168.18.108/GTABook/server/../Public/Uploads/2018-09-10/5b961f88f3a79.png)


c[��    "  "                        �[n !	%�mchelseatan1.Plot RangeeNrVVUtu2zAQ3fsUU3TTApX1tS17myZFdkHRAkmLLiiSstjQpEDScQrkJD1L79QrdChZiRsrLhzEgCsYsDUcc957fJw5E5JbkJoSJ7SaQeVcPQvDeJoM43E+jPPhOApPKi4tJ+EHQ+pKqPknbh1+hc5wHi6IddyEF1K7j0TN+WDwunnAR6AJgf/DCbEc4tkg2HgGd3C2VNSXhnMGdw+JjFtqRN2sYBwuBH0cO72tOXWcgeF2KZ3FGO4329wf9n7HHWK/uVYcqJbLhcKXV1+/vdkWJo7yLUUsNzcoxnAYXiwLKWj4uZaaMBsmUZwHUR4kSTgqJiyNGZ1MEpoMazV/6ws2asGJNgZJQcslaagvkJyoZYfH+tghEE3Hk5yN4ntEvZDSZoWw74Ry5Q6jTZJGRZqUbDeSrFlRWgUbaA4CJ5vmJM+mLZxeNJ3lg17TJ/+L6Y3HbUEosGSx6beXVDVHVfOsJOmEJ3mZd6q2ojJhSYFW3/T/AyomypIbxd2BoWUkilOS7Djw7iL8jQ1W2lzbiiNAXYKreKujjxZaXx8I7YhHNC3pI7SbSu62Z7plz0f+fNqgW258hhl9vRjDV7ASrvKK1RIFQE1xrNwQaXs6wL8oZcdB6b33xHqKVJwwbmxLcomni5VLobBQTQy6xPnF/ZmOfv/6GQTO/FhfDt8Gr4Vi1jtwXZrqRSFUM+DtUegCl1eXV8CII32EMZS0SfhsT8YmIW0TvuBnf83Gx+EOODVGGyiI2Z/CZHaGf7Uau4tFRIJIwPbg3q3wvdJLybzF2qUSh4hfa3vVs5i/NPFC3wKtiHH9x9+1fYbKdGlPmqDWEtMagv1Zmc9a4ZUwGmmtE/tMN/IbCL4u2bfb7jPJZ+dzpQ2HSjDGVTejQqNX9hhkt/dzs0O46/YRxqAUEtsSON39qr0y69HmafUadzD4A1vbpqo=c[��]    n  n                                                                                                    �q !	E�5chelseatan2.Column of different formateNrNVsFu2zAMvecrCAzYdkjjJm2zNNe0GQa02DAMWHNkbNoWIkuGJLcZkB/YP+2f9gul5LnNIW7nZMDiS2LrkRTfI0XNhSQLUsfohFZTyJ0rp1E0vBwNhuPJYDgZjE+jWU7SEkYfDZa5UNk3so5/ImeIogKtIxPNtKwK9Tm9EmlKhpSba1Og6/XehAfqddApJA0C0gAB726GlmA47Z1sPb0NzCsV+43BpwQ2z8CEbGxEGVaAF67XJcWOEjBkK+ksf2Pj6bYzePWdLYYQoqwdCAV3/P+L1A5478awf6jdjrZBixbQmQcttcvZDaqEcXEgwLbgzz2+hkBpdEnGCbJTcD7OW1BVQUbELcYXLcb1LnfbjL2NEVnuIJYiXjX2ToMlB2hhho4yzVFRgjag9G5XjcAnfyXxaC+Jdyr8lQo0K7uH0m3KF2LNEQLlXrOG9AQdthTE5rkiXjF+sQDge04KClxxV0HpV1OjC7BV7OunNuyD8zJJXJKEByElLKkWOGCvOI4XTqSQo0y9Ci4nMKgyAmHDxrqKdfbvxNq7HW+EWrGnQKNnxh888J53urXvwJj7UdLvXz93aNQotNtVZnRV8mf/he13mHfi7PwIOPPFQFtly2Q9lV87PU4UHYw6kXLx30lh9dFkdX7tFNgCua9aMJ0yHh9DGSxu+lBxjIU/1RODD4BgedLzvO7796xe8edE5kf7oUl/OIakb4W1vrHvUVbULvUt2uYwODTtyZG0PNaT4Hodkzw0p8tjyInueSraEmOCu3YlK/USrmPew9NjSDxcB6yuTPznREbDo1zwbSCM8dCxfl69s9uXApvrSib+WvAE5fbW4ZL2CFcWnOM=c[��i    sdJs5U1K+pUpBJVanx84vN9nz/7nAjJLUidUye0mkLpXDUlJJxEg3CUDsJ0MArIUcml5ZScGlqVQs0uuHX4R5zhnMypddyQc6ndJ6pmvNd7XT/gI1CHwH9wRC2HcNrrrz29OzhZqNyXhjMGd4+JjNvciKqewTici/xp7Pi24rnjDAy3C+ksxnC96fr6sPMYVwj94lpxyLVczBUOXn399mZTmDBIyenF+w9aXxPLzQ2KMBiQ80UmRU4+V1JTZkkUhGk/SPtRRIbZmMUhy8fjKI8GlZq99YVqleBIG4NkoOEQ1ZTnSEpUssVhfWyfSCajccqG4QOSTihxPUPZd5pz5farRRQHWRwVbDuCpJ5RWvXXUOwVRjJJaZpMGhidKFpL9ztNHf0vpjYetwWhwNL5uq/2oWaKaqZJQeMxj9IibdVsxGTC0gytvO7vRzRMFAU3irt/BCmhQRjTaMsGt0b/ExMstbm2JUdgugBX8kY3H80QwZ5RDnmQx0X+BOW6ctttGG/Y8IkPnzfihuteYDpfL8TwFSyFK71SlcQmgVpie7ih0nac8L9RSg6D0kfvhVU3KDll3NiG5AJ3FysXQmGhihp0h/OTuzMd/vp53+8782N1GPw1dy0Us955q9K5nmdC1Y3aHoQucHl1eQWMOtpFGENRk4TPZqerE+Im4Qv+dtdsdBjugGNjtIGMmt0pjKcn+KnVeKtYRCSoBLwe3Lsljku9kMxbrJkqsFn4ueaOehHzfRPP9C3kJTWue/vba56hMm3asyaotMS0mmB3VuKzlngkjEZaq8Qu0w39AoKvSnattn1P0unZTGnDoRSMcdX2JGL00h6C7PahT7YIt50+yhgUQuK1BE63b5VXZtXSPK1O4/Z6vwGl/I0Zc[�1[                                                                                                                                   �://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)    �//xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     � Jh�                                                                                                              �i !	!�chelseatanPlot RangeeNqFUctOxDAMvPMVPoLUwqIVAnHmIU4gTrvcvI27DU3jykkp/D12HytuVJFqOzNjT1wCR4KKw9BFYIFuCNn3YS2lAtB9YkUx223kWK75WQmC8UgJfISEHRnA+bomiZT/5xd/6EaDkaVNDSmXa8gNzaJWPTC32m4Po8+Nlfvg41GJmeQLQ9K7B1NYbDSEjiTN6CGRjkW1j+SgR1FNZRllt9/twWHGQkP97Pe�_	 !		�}chelseatanAbout GTAeNotjLEOwjAMBfd+hRcYm4GtUgcmxISE2CvTuIlFm0Txq4C/pwKmu+F0Z5AaMfGKTBAD2dsgC3kxDUk8TblSqFyipvAtNrZNc5VJqqRRqKMIlM65pz7UnCZITTxv4uXVlligmKW/VA2aZr7vDsfT/zfcfr89vOW1jgIOvQ1lhC4Da14sfACEqjv2c[}-X�_ !		�}chelseatanAbout GTAeNotjL0KwkAQBnufYhstk8IukMJKrASxD+vd5rKY++H2C+rbe4jVTDHMTWapkpzQQAtQhr5/6VOt1wSpidcmXt5dWQoUq4zXqkHTyo/98XSuXBZNYbqLofEAb3mrTsBhtKk4aJxYc7Swu4DUiIk3ZELryT4GieTFNCTxNOdK4X/8FY3dF8iXO+w=c[}-H�3 !		�%chelseatanAbout GTAeNoNxjEOwjAMBdCrdIGxGdgqdejEiITYI5Oa5IvUtWwjOD6d3rvzi42l8DANLUKnlL54wxMk2IT6kZV/ozYNROf5ZqiQTs/TZbkaaYPU/GCPw3Osvn+scFCdPWsJbJmwb17/72knpA==c[}+0    8  8                                              �E !	!�EchelseatanPlot RangeeNrVVdtuGjEQfecrpspLKxX2Ciy8pkmVt6hqpdCqD17by7ox9so2IZXyJf2W/lN/oeNdNqFhQSIKEkVIxOOJ55zj45lLIbkFqSlxQqsplM5V0yCIJvEgGmWDKBuMwuC85NJyEnw0pCqFmn/m1uFP4AznwYJYx01wLbX7RNSc93pnZ2fgl1CvwWefE8shmvb6G5/eA1wuFfV14YrBw1Mi45YaUdU7GIdrQZ/HLu4rTh1nYLhdSmcxhudNN8+Hg9d4QuQP14oD1XK5ULh48+37221VojDbksNyc4dKDAbB9TKXggZfKqkJs0EcRlk/zPpxHAzzMUsiRsfjmMaDSs3f+YK1WnCujUFS0HCJa+oLJCcq2eKxPnYMRJPROGPD6BFRJ6Sk3iHsB6FcueNoEydhnsQF248krXeUVv0NNEeBk04ykqWTBk4nmp1+j/8XvxuP24JQYMli02qvKWiGgmZpQZIxj7MiawXdbf0nVEwUBTeKuyNDS0kYJSTec9ftG/gXG6y0ubUlR4C6AFfyRkcfzbW+PRLaIQ9pUtCXODPZcuYza+725pYRX+BDXy/C8AxWwpVerEoid5QTJ8kdkbbj3e9hk54Gmw/eCeuxUXLCuLENvyXeKVYuhMJCFTHoDec3DyI5/PP7V7/vzM/1a/At71YoZr3l1lWpXuRC1ZPcnoQkcDO7mQEjjnRxxVDcJOFnuxXUCUmT8BW/B8k1Og1PwIUx2kBOzEHox9NL/C+rsYlYBCOIBOwC7v0K16VeSuY91WwVOCv8XtOSXkT6tTnn+h5oSYzrvvS2uzMUpU3befWVlphWE+zOSn3WCh+C0UhrndhltaE/QPB1ya7Tdl5HNr2aK204lIIxrtopFBi9sqeguH2cjC3Cfc+NMAaFkNiCwOn2r8qLsh5enlanXXu9vydFoUM=c[��    � � �                                                                                                                                                                                                              �_ !		�}chelseatanAbout GTAeNotjLEOgkAQBXu+YhstobAjobAyVibGnqzccmyEvcvtI+rfS9RqppjMGaRObMQrEkEc5G+HLBTENZoEGlOhWDhPavFbbKyr6iqjFLFBqKUJyG3TPPWh3qhBivG8SZBXnacMxSzdpWhUm/m+OxxP/19/+/32CJ7WMgg4dt7nAbr0rGnx+AHJfzxkc[}-��A !	!�=chelseatanPlot RangeeNqVUk1PwzAMvfdX+AhSC+sGAnHmQ5xAnDZuWeOuYVlcJSkFaT8eu2mnIbgsqlLb8Xt+jlOAV26DAYyDoHYI5EGbukbvMEJFttu5kIPSH6pCF+XYkSsmPz+CCwx68tvQIGOphthgIpXommibFbCC3sRGwq01bsPAiP5T2cBn98KQakKDSqMPKbsLyLKwNg41tMozJ6MEslwtV6BVVDmbvOT3zl8OGKsLiP57bEfEb43TQYSNNSrarY1T0ZATrgfvub218mw/shWIpYcWK6MstJa4W2u2CGv6gqpRfuheKz85LVl2UmLPpTwFHN1Xg1PWoKtn4oY6q6W1VKM21ZCcbhQiQcQQWcrzxpFHaIzW6KaRXHrqw93QH2eGw6zGtFwGpbSG2li+KckZLb69w2yEA5TTqe7Zy9tTUS5mN7Mckrm4vj3Psj1ACbzNeVuAWFew52hxtOA0VzjJ4aSZvV1no2ntFAoSOzw6to8fHeOZoByk/GYpTxaWjY39K2A+nKeej8UsEu7qr7B0N9kPKhEOYw==c[}0h   �    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   N �N                                             �8 �2 !	A�chelseatanColumn of different formatFiles location: http://192.168.18.60/Chelsea/GraphingTesting/tree/master/ColumnOfDifferentFormat

###### Column of different format TestCase 1:
------------
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | Text in X | Plot  Correct   |
| 2  | Text in Y | Plot  Correct   |
| 3  | both X and Y columns | Plot  Correct   |
| 4  | column properties: text & numeric | Plot  Correct   |
| 5  | column properties:  Text | Plot  Correct   |
| 6  | right click column to set as Categorical or not | Plot  Correct   |

###### - Column of different format TestCase 2:
------------
| Function Id | TestCase description  | Expected results  |Remarks|
| :------------ | :--B !	+9	chelseatanBuilt-in Graphs欢迎使用ShowDoc！c[�&1�  !	A�]chelseatanColumn of different formatFiles location: http://192.168.18.60/Chelsea/Graphin   �   � ���P�� � � � � g                                                                       D !	/9chelseatanExtract to Layers欢迎使用ShowDoc！c[�+}D !	/9�= !	!�7chelseatanLine GraphFiles: http://192.168�~ !	!�9chelseatanLine GraphFiles: http://192.168.18.60/Chelsea/GraphingTesting/tree/master/LineGraph
###### LineGraph TestCase 1: 
------------ 
| Function Id | TestCase description   | Expected results  |�" !	!�chelseatanLine GraphFiles: http://192.168.18.60/Chelsea/GraphingTesting/tree/master/LineGraph
###### LineGraph TestCase 1: 
------------ 
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  |Try different line width | plot corret   |
| 2  |Try different color| plot corret   |
###### LineGraph TestCase 2: 
------------ 
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  |Connect type: Bezier | plot corret   |
|    q    员来说是个福音。但如果你需要使用Mysql数据库,ShowDoc也提供支持。但值得注意的是，ShowDoc只能在初始时选择一种数据库。如果你在使用过程中切换到了另一种数据库，则有丢失原来数据的风险。
ShowDoc早期默认使用Mysql数据库，这部分老用户升级时请继续且只能使用Mysql数据库。请参考下文的配置方式

####2、Mysql数据库的配置方式

 打开Application\Common\Conf\config.php，将第5、6行注视掉，然后开启第8、9行（把注释去掉）。效果应该如下：

```

//使用sqlite数据库（ShowDoc默认）
//'DB_TYPE'   =&gt; 'Sqlite', 
//'DB_NAME'   =&gt; 'Sqlite/showdoc.db.php', 
//使用mysql数据库
'DB_TYPE'   =&gt; 'mysql', 
'DB_NAME'   =&gt; 'showdoc',

```

此时填写上相应的数据库配置信息，如数据库密码等。如果你已经在浏览器中访问过ShowDoc，记得把生成的缓存删除掉以让新配置生效。缓存文件在目录/Application/Runtime下。cW<!�    4  4                                          �I  !	!�MchelseatanPlot RangeeNrVVd1u2jAUvucpztSbTRrkFwjcdu3Uu2rapLJpF47tEK/GjmxTOqlPsmfZO/UVdpyQlpWA1qpILIoUfHzw+b7Pn33OheQWpKbECa2mUDpXTYMgmsSDaJQNomwwCoPTkkvLSfDRkKoUav6ZW4efwBnOgwWxjpvgUmr3iag57/VOTk7AD6Eeg88+JZZDNO31N57eHZwvFfV14YLB3WMi45YaUdUzGIdLQZ/Gzm4rTh1nYLhdSmcxhutNN9eHZ49xhcgvrhUHquVyoXDw5tv3t9uqRGG2JYfl5gaVGAyCy2UuBQ2+VFITZoM4jLJ+mPXjOBjmY5ZEjI7HMY0HlZq/8wVrteBUG4OkoOES19QXSE5UssVjfewQiCajccaG0QOiTkhJPUPYD0K5cofRJk7CPIkLth9JWs8orfobaA4CJ51kJEsnDZxONDv9Hv8vfjcetwWhwJLFptVeU9AMBc3SgiRjHmdF1gq62/qPqJgoCm4UdweGlpIwSki8Z6/bM/A3Nlhpc21LjgB1Aa7kjY4+mmt9fSC0Qx7SpKAvcWay5cwn1tztzS0jvsCHvl6E4RmshCu9WJVE7igndpIbIm3Hud/DJj0ONh+8E9Zto+SEcWMbfkvcU6xcCIWFKmLQG85PPovk8P73r37fmZ/r0+CvvGuhmPWWW1elepELVXdyexSSwNXsagaMONLFFUNxk4TP9lVQJyRNwld8O+Xqkmp0HH6AM2O0gZyYf0Y+np7jP6zGy8MiEEEk4Ol371c4LvVSMu+lZqrAHuHnmqvoRYRfm2+ub4GWxLjuzW5vdYaCtGk7t7zSEtNqgt1Zqc9a4QEwGmmtE7ssNvQLCL4u2bVa51Zk04u50oZDKRjjqu08gdErewxq24du2CLcd8QIY1AIidcOON3+qrwg64blaXXatNf7A34Fn6g=c[�3    �：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<�  �    (                        �	          ：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<ʵ称    |

 **返回示例**

``` 
  {
    &quot;er    �  �                                                                                                                                                                                  �A% !	A�chelseatanColumn of different formateNqFVMFu2zAMPc9fQWDA1gGuvaRd1uWaNsWAFh2GAWuOikzbQmTJE+UmA3rYt+zT9iUjZSTLocF8sSU+Pj4+UV4aiwTWaxWNd3NoY+znZTn5NC0ms6ticlXM3peLFi2hKm+D6lvjmm9IkV9lDIhlpyhiKBfeDp17qK9NXWNAF5c+dCpm2ev0wBgHX0O1R0CdICB0C0UIk3l2fvRkz7AcnBZh8LmC53/ACkkH06cIcOBm16OOWEFAGmwk3uPk+TEZ/HfNGRNIVXYRjINH/v5ifQTWHgLzw0g7PQatToAuBLT2sWUa5SrG6WQAncBfCn6EQB98jyEapDlEqfMG3NBhMPpE8ocTyaPKl3NmkhNM00bQ1ujNPj96IIygCBYqYuO5qrLgAzj/MlWW/fn1+1Vndmx/Uivt7vVWKqrRS2Y4eFDA9xYddGrDUwS9UNbBd0CDFr9GVA5RZFm1RgtbYy2scWwoYa+ZWYSaGlplaxms2CIE5RoEQ0lKUnZn3IalJSVSSiYXznj0jgYxSYg/e8yT+ib4oecc2c4Boy7eJSquiSKrw3H3RHtjWRVYSAIIJXWKO5Bliq7uchh4kFfidxXUFhQQ30G+SbmsmzEiHTVy6YqUdW+IRP2TsgOW94oOjZ09fL09n1xeTD8elKrRp5udRpv28Ik9p15phMdycMfLFE9nQn4Ieq87sJ+Gj0S8zJMYceQtHZ8MtX6wlZzNAcrKfQF8/6H1W2lDOj1ESQzbbkgCo8GEmMh/DELL/5oeetVg9hdoiYqwc[�Ԃ   & �&                                                                                                                                                                                                                                                                                          �m# !	A�uchelseatanColumn of different formateNp1kc1uFDEMx8/0KXyCIg1b8SEh0WP5uLRCQki0R2/GM4k2k4TY6S43noVH40mwM93VXriMxrH9989/3+TYlgR5gjFME1VKAlOuC8rF399/nn2ng0BIcA+5woN9tlm8hphGjV3v5uunHyg1F6oSiD+AWOtzSG2hGpy1mtg11DB7AReD2x3bJAOTADLcoNCctR6jdaS8YizhQOOqaIOPmiMKntE90Wzgh6cEC+5CmqHErBvVvAA3Z+Rr1QBiABG3FGEfYoQtdcC19qMqG1KYwGOczB/xBBXTTBC4o3Sy25B2itZJbJTYzEt18MzPjiC/Cg2dfq65Fe2x5wFI3OZll9KZZFgLra//WW8di1VBeoFJ8oK6gYU9+3A7QGPSHnV2rLgHBHYoQnWweF4zttFcsfhN77oLzEb/iLHR1R3yabHLr9++vHr97u2b9ydSXH36dHAU+xs9qudc0BHcX7V0HvZ8vwnnVt2Ru6qfQU9iXg4dxhx5weeXYZ9bHO02p1Ilzxv4rJb4vLc1bNNTls2w/Y4tsRrMRF38ZzNZT7FAwZku/gGPHg7Fc[�Ӆh" !	AmchelseatanColumn of different formateNpzzs8pzc1TyE9TSMlMS0stSs0rUUjLL8pNLAEAgr4J5A==c[��}    4  4                                          �I! !	!�MchelseatanPlot RangeeNrVVUtu2zAQ3fsUU3TTApX1tS17myZFdkHRAkmLLiiSstjQpEDScQrkJD1L79QrdChZiRsrLhzEgCsYsDUcc957fJw5E5JbkJoSJ7SaQeVcPQvDeJoM43E+jPPhOApPKi4tJ+EHQ+pKqPknbh1+hc5wHi6IddyEF1K7j0TN+WDwunnAR6AJgf/DCbEc4tkg2HgGd3C2VNSXhnMGdw+JjFtqRN2sYBwuBH0cO72tOXWcgeF2KZ3FGO4329wf9n7HHWK/uVYcqJbLhcKXV1+/vdkWJo7yLUUsNzcoxnAYXiwLKWj4uZaaMBsmUZwHUR4kSTgqJiyNGZ1MEpoMazV/6ws2asGJNgZJQcslaagvkJyoZYfH+tghEE3Hk5yN4ntEvZDSZoWw74Ry5Q6jTZJGRZqUbDeSrFlRWgUbaA4CJ5vmJM+mLZxeNJ3lg17TJ/+L6Y3HbUEosGSx6beXVDVHVfOsJOmEJ3mZd6o+7f8HVEyUJTeKuwNDy0gUpyTZceDdRfgbG6y0ubYVR4C6BFfxVkcfLbS+PhDaEY9oWtJn2zPdsucjfz5t0C03PsOMvl6M4StYCVd5xWqJAqCmOFZuiLQ9HeBflLLjoPTee2I9RSpOGDe2JbnE08XKpVBYqCYGXeL84v5MR79//QwCZ36sL4dvg9dCMesduC5N9aIQqhnw9ih0gcuryytgxJE+whhK2iR8tjtDk5C2CV/ws79m4+NwB5waow0UxOxPYTI7w79ajd3FIiJBJGB7cO9W+F7ppWTeYu1SiUPEr7W96lnMX5p4oW+BVsS4/uPv2j5DZbq0J01Qa4lpDcH+rMxnrfBKGI201ol9phv5DQRfl+zbbfeZ5LPzudKGQyUY46qbUaHRK3sMstv7udkh3HX7CGNQColtCZzuftVemfVo87R6jTsY/AE+d6amc[��   �    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   �://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     t ��"� � t                                                                                                Tc !	!echelseatanPlot SetupeNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[����5b !	!�%chelseatanLine GrapheNrNVU1z2zYQvfNX7EwPdaYSKcqOY/PmqLUnM+44k6S9Q+RKxAgEMAAYSZn8+DwAsiwnTfpxqi4UPt7ue7sPwK1U7BvqQ7BNVdXX87K+vCrrq/JyVi16Vp5FdeeE7aVef2Af8KmCY64G4QO76l5qT   ��a !	!�UchelseatanLine GrapheNqVVU1v2zgQvetXDLCHTbG2ZLltmuiWejdBgSxStN3eaWlsEaZIgaRqu+iP3zekk7gtsMX6YvNjZt689zi+1YZDQ32MY1NV9fWyrC+vyvqqv   ��` !	!�UchelseatanLine GrapheNqVVU1v2zgQvetXDLCHTbG2ZLltmuiWejdBgSxStN3eaWlsEaZIgaRqu+iP3zekk7gtsMX6YvNjZt689zi+1YZDQ32MY1NV9fWyrC+vyvqqv   ��_ !	!�=chelseatanLine GrapheNqVVU1v2zgQvetXDLCHTbG2ZTltmuiWupug2CxStN2909LYIkyRAknVdpEf3zek4zh72MUKBmSS8/HmzRvqThsONXUxDnVZVjeLWXV1PauuZ1fzctmxCazKe6+GTtvNNw4RrzJ65rJXIbIvH7TldF78kh46bZCYL1VgqmoqpmcPFU90N9omamfpU0tPL6Yth8brIZ0QDn7fD9xEbslzGE0M2INz/Sraf   �8^ !	!-chelseatanLine GrapheNozNDIGAAEtAJc=c[��    uvFT+lHxwmK2xfCM9UNFdOTHxWf6XbUbZBG05uOPj9t7di3Ttq0Qlj4bWe5DdyRYz+q4DEHcPMs2t+OgagB/OD21MnVih3rQAo8aSu70ANglQnUGuc4UE4x/wbQGmXct1u/L3v+/5C9MFojGIW95YZe8yfJ7ruSn2+m3w30S/DIsL9Cnf+bFBf/IUUxL+nHmAndbOQgJvR6+t7Gvk4of0t6J9c9oinZbij0TO3oPjIJ3ZFnFSMuHIvAtNvt6FcRREmx6YP0Hkanj0KNwMQOrYw7Zvun6aHiiXZxHmXAQg29hzLh6Y1uHQ+w1iR7iwZhLdI+DqXueJfHow9mKB+BizRMKtypPgNR4XE1xSguMui0fh7W3/CBezUnZDonayQs7nmd+aBUmgIqcYiZCSG1fOLMoS2Ll7FgQnsrcEba/VHbIHYN1bNZIjlI3cyKy5JupVJ0g4rTH9DmQBXdaAj3DOjHkxaTxSvGU/EKzK3Q9Ce7IFuh1J6WzmzAa/lVg3xxdQgNtpp3gTp0MvtoSg/oQ6p7dbM06P2SldlmQb64zv0GbnWKT9DOia2nbapEjyuApP8qbyyd2GF6CUkbOnt4dzetZ/OL6xdFPfuhk7Rxg1AT8kp2nKxitNqfjmPdlnF7xORi01mcFMobanuh10wHk8XegPqxN5FXmoWh4kLANQNKdRktnkMHOXAqU1HjeD1YiHwbRaN9o0077sU+dsjoECMiCncykIt5izp6OVNIpYq2im1RCdNmTJWWfAyY/3YchFRVNutyDAGXXScdfKn2RQ2n3jlzSK6Nnq7jCIcsiYwBihpue4sbEScgOPXLievTURYwDLdSqOxmn4XG/uXzIz+hh4gCIyaKaDSqNTYY2T1FC2+OpU8wG584lBUzJlqA1umhq2HN9kn9zz5e33KtRby+q61xG98zjoE3o2sZoSBk3T/LWeCBTU9Grp8frTUOb5KAOyF+O4n1oS265VawPnUGbtMnO+/TzrOcoqHovOv61csXXwC695k2c[��   � ;�M��J ���                                                    � !	�mchelseatanFrom/ToWhen From value bigger than To value, the scale of output graph is still inD !	/9chelseatanExtract to Graphs欢迎使用ShowDoc！c[�+hB !	+9chelseatanAdd Layer(Axes)欢迎使用ShowDoc！c[�+1> !	#9chelseatanSpecialized欢迎使用ShowDoc！c[���= !	!9chelseatanArea Graph欢迎使用ShowDoc！c[���B !	+9chelseatanStatistic Graph欢迎使用ShowDoc！c[���> !	#9chelseatanMulti-Curve欢迎使用ShowDoc！c[��E
 !	19chelseatanColumns/Bars Graph欢迎使用ShowDoc！c[��D	 !	/9chelseatanLine Symbol Graph欢迎使用ShowDoc！c[��D !	/9chelseatanExtract to Layers欢迎使用ShowDoc！c[�+}   !	-9chelseatanLq !	)�chelseatanSymbols Graph 1. Error Bar
2. Column Scatter
3. Bubble graph and Color Mapped graphc[��P !	G9chelseatanMerge Graph Testing Guideline欢迎使用ShowDoc！c[�+�   b �rb                                                                                                                                                                                                                                                                                                                                                    � !	1�GchelseatanPoint(Column/Row) Files: http://192.168.18.60/Chelsea/GraphingTesting/tree/master/FunctionPlotTesting

###### FunctionPoint TestCase 1:
------------
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  |Try invalid data like too large data 100000000, 0, click OK | error message will turn out   |
| 2  | Can not enter string | can not enter string   |
| 3  | point is a little large,eg 100,000,00 | check if plotting is too slow   |c[�:�C !	-9chelseatanLayer Management欢迎使用ShowDoc！c[�,G !	59chelseatanAdd Graphs to Layout欢迎使用ShowDoc！c[�+�    J � Jl                                                           ��k !	�chelseatanFrom/ToFiles:http://192.168.18.60/Chelsea/GraphingTesting/tree/master/FunctionPlotTesting
###### From/To TestCase 1:
------------ 
| Function Id | TestCase description   | Expected results  | 
| :------------ | :------------ | :------------ | 
| 1  |From value bigger than To value | the scale of output graph is still increasing   |c[�:��E !	��IchelseatanParameter (only applicable for 2D Parametric Plot and 3D Parametric PlotFiles:http://192.168.18.60/Chelsea/GraphingTesting/tree/master/FunctionPlotTesting 
###### Parameter TestCase 1: 
------------ 
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ | 
| 1  |Enter value into the edit box, eg: enter k into Parameter box | check if the formula Parameter change accordingly or not, the Parameter formula will change accordingly to be X(k)=, Y(k)=  | 
| 2  | Can not enter numeric | error   | c[�:�   � ��                                                                                                                        �y !	I�chelseatanformula panel(Y(x)=, Z(u,v)=) 2. Select different formula by the triangle next to � !	I�+chelseatanformula panel(Y(x)=, Z(u,v)=) Files: http://192.168.18.60/Chelsea/GraphingTesting/tree/master/FunctionPoint  
###### formula panel TestCase 1:
------------ 
| Function Id | TestCase description   | Expected results  | 
| :------------ | :------------ | :------------ |
| 1  |try different formula,eg Y(x)=3 | plot corret   |
| 2  |try different formula,eg Y(x)=sin(x) | plot corret   |
| 3  |try different formula,eg Z(x,y)=t*sin(x)*cos(y) | plot corret   |
| 4  |Select different formula by the triangle next to the panel | plot corret   |
| 5  |the formula panel is blank |error message will turn out   |
| 6  |the formula has undefined val�e�  !	I�chelseatanformula panel(Y(x)=, Z(u,v)=) Files:http://192.168.18.60/Chelsea/GraphingTesti   �    Js5U1K+pUpBJVanx84vN9nz/7nAjJLUidUye0mkLpXDUlJJxEg3CUDsJ0MArIUcml5ZScGlqVQs0uuHX4R5zhnMypddyQc6ndJ6pmvNd7XT/gI1CHwH9wRC2HcNrrrz29OzhZqNyXhjMGd4+JjNvciKqewTici/xp7Pi24rnjDAy3C+ksxnC96fr6sPMYVwj94lpxyLVczBUOXn399mZTmDBIyenF+w9aXxPLzQ2KMBiQ80UmRU4+V1JTZkkUhGk/SPtRRIbZmMUhy8fjKI8GlZq99YVqleBIG4NkoOEQ1ZTnSEpUssVhfWyfSCajccqG4QOSTihxPUPZd5pz5farRRQHWRwVbDuCpJ5RWvXXUOwVRjJJaZpMGhidKFpL9ztNHf0vpjYetwWhwNL5uq/2oWaKaqZJQeMxj9IibdVsxGTC0gytvO7vRzRMFAU3irt/BCmhQRjTaMsGt0b/ExMstbm2JUdgugBX8kY3H80QwZ5RDnmQx0X+BOW6ctttGG/Y8IkPnzfihuteYDpfL8TwFSyFK71SlcQmgVpie7ih0nac8L9RSg6D0kfvhVU3KDll3NiG5AJ3FysXQmGhihp0h/OTuzMd/vp53+8782N1GPw1dy0Us955q9K5nmdC1Y3aHoQucHl1eQWMOtpFGENRk4TPZqerE+Im4Qv+dtdsdBjugGNjtIGMmt0pjKcn+KnVeKtYRCSoBLwe3Lsljku9kMxbrJkqsFn4ueaOehHzfRPP9C3kJTWue/vba56hMm3asyaotMS0mmB3VuKzlngkjEZaq8Qu0w39AoKvSnattn1P0unZTGnDoRSMcdX2JGL00h6C7PahT7YIt50+yhgUQuK1BE63b5VXZtXSPK1O4/Z6vwGl/I0Zc[�                                                                                                                                     �master/PlotRange

###### Plot Range TestCase 1:
------------
| Function Id | TestCase description  |  Pic description  | Expected results  |
| :------------ | :------------ | :------------ | :------------ |
| 1  | one column | ![](http://192.168.18.108/GTABook/server/../Public/Uploads/2018-08-22/5b7d31dc772c2.png)  | Plot  Correct   |
| 2  |  multiple columns |  ![](http://192.168.18.108/GTABook/server/../Public/Uploads/2018-08-22/5b7d319678d51.png)  |  Plot  Correct   |
| 3  |  adjacent | ![](http://192.168.18.108/GTABook/server/../Public/Uploads/2018-08-22/5b7d3230b32fd.png)  |  Plot  Correct   |
| 4  |  non-adjacent |  ![](http://192.168.18.108/GTABook/server/../Public/Uploads/2018-08-22/5b7d32498a849.png) |  Plot  Correct   |

###### - Plot Range TestCase 2:
------------
| Function Id | TestCase description  |  Pic description  | Expected results  |
| :------------ | :------------ | :------------ | :------------ |
| 1  | ranges in same columns | ![](http://192.168.18.108/GTABook/server/../Public/Uploa    > �� >                                                �? !		�=chelseatanAbout GTAeNpVjk1LxEAMhu/9FbnoRZwevBX2oIJlQdkqZa9lbLPTYJsMSYr675314+AlCTxveN69AxlEhri5gKM52Kc5rjChUWKc4CQKSWOeidN3ouxQXcNdNARhaKAVuIKWvMzj0zEq1t19CTxsPDoJx+XvDVxkaeC57wruFM02xX8QmkL6c42z9pCR20cIIVTVC55QkUcswtk9N3X9Tm9kNbGjFkk5JvwIec5OvuDuoJSIl/h6cXPb/vYf+h/XpU8mm47oMe1syKXnOkSS1dIXz49fWA==c[~	��? !		�=chelseatanAbout GTAeNpVjj1Pw0AMhvf+Ci+wIC5Dt0gdAImoElUDirpGR+JeLBL7ZDsC/j1XPgYW29LzWs+7dyCDyBBXF3A0B/s0xwVGNEqMI5xFIWnME3H6TpQdNrdwHw1BGGpoBG6gIS/zdDhFxap9KIHHlQcn4Tj/vYGLzDU8d23BraLZqvgPQl1Id6lx0R4zcvMEIYTNC55RkQcsvsk911X1Tm9kFbGjFkc5RvwIecpOPuPuqJSI5/h6tb1rfuv33Y/q2keTVQf0mHbW51Jz6SPJYukLk8pfTg==c[~	��; !		�5chelseatanAbout GTAeNpVjj9rw0AMxff7FFqaJXAeuhkytIWaQkPcYLKaq62cRW3pOMk0/fa59M/QRU/wnvR7LwakEBjCagKGaqBfarjAiEqRcYSzZIg5pIk4fieKevcYFEEYamgEttCQlXnan0LGqn1yzysPRsJh/jsBE5lreOta12ZUXTP+s6B23Q1/wx0ScvMK3nt3xDNm5AELaTJLdVV90gdpRWyYy/+yjHjxaUpGNuPukCkSz+H97v6h+a3ddz+gjY0qax7QQtxpn0rFpQ8ki8YrtAdeGg==c[~	�   �gTesting/tree/master/ColumnOfDifferentFormat

###### Column of different format TestCase 1:
------------
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | Text in X | Plot  Correct   |
| 2  | Text in Y | Plot  Correct   |
| 3  | both X and Y columns | Plot  Correct   |
| 4  | column properties: text & numeric | Plot  Correct   |
| 5  | column properties:  Text | Plot  Correct   |
| 6  | right click column to set as Categorical or not | Plot  Correct   |

###### - Column of different format TestCase 2:
------------
| Function Id | TestCase description  | Expected results  |Remarks|
| :------------ | :------------ | :------------ | :------------ |
| 1  | mixed text and numeric data in X | Plot  Correct  | |
| 2  | mixed text and numeric data in Y columns | Plot  Correct   | When making plot from such X column, tick label will be Text from Dataset if half of the range is text|

###### - Column of different format TestCase 3:
------------
| F   �unction Id | TestCase description  | Expected results  |
| :------------ | :------------ | :------------ |
| 1  |Linked data plotting (for different plot type） | Plot  Correct  |
| 2  | Linked data plotting (grouped plot）| Plot  Correct  |
###### - Column of different format TestCase 4:
------------
| Function Id | TestCase description  | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | Date data in X or Y columns| Plot  Correct  |
| 2  | time data in X or Y columns| Plot  Correct  |
###### - Column of different format TestCase 5:
------------
| Function Id | TestCase description  | Expected results  |
| :------------ | :------------ | :------------ |
| 1 | Large data| Plot  Correct  |
| 2  | small data| Plot  Correct  |
###### - Column of different format TestCase 6:
------------
| Function Id | TestCase description  | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | YL, use Y to draw a scatter, drag Y to the graph| Plot  Correct  |
###### - Col    umn of different format TestCase 7:
------------
| Function Id | TestCase description  | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | Missing value| Plot  Correct  |
| 2  | Masked data| Plot  Correct  |
###### - Column of different format TestCase 8:
------------
| Function Id | TestCase description  | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | Data from Excel| Plot  Correct  |
###### - Column of different format TestCase 9:
------------
| Function Id | TestCase description  | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | even space X| Plot  Correct  |
| 2  | uneven space X| Plot  Correct |
###### - Column of different format TestCase 10:
------------
| Function Id | TestCase description  | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | When source data are rich text| the plot's tick label should be rich text too  |

c[�                                                              \----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    �  �                                                                                                                                                                                       � = !#�{ertgtd4fv4data-副本    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                   t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<%   �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   �----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    T  T                                                                          �) !	!�chelseatanPlot RangeeNrNVU1vGjEQvfMrpsolkWA/ISxc0yTKqShqpKRVD8aeZV2MvbJNSKX8+I53IaEBIrUqUlYrrWc8mnnz9o19JRU6UIYzL40eQ+V9PY7jdJRF6XkRpUV0nsQXFSqHLL62rK6knn1F5+kTe4sYL5jzaOOJMv6W6Rl2OicnJxBMaGwI0RfMIaTjTm/r6XQ6z3C11DxUhhsBz6+hAh23sm52yA8Tyd/6Lp9q5B4FWHRL5R35KN94uwL8tU0Z0pDcaARu1HKhyfj0/cfpLi9pUuwQ4tA+EhdRFE+WUyV5fFcrw4SLsyQteknRy7J4MB2KPBV8OMx4FtV6dhYKNnzBhbGWmoK2l6xpfUHNyVpt8LjgOwai0fmwEIP0BdFeSHmzw8RPxlH743CT5ck0z0rxPpJ+s6ON7m2hOQqc/qhgRX/UwtmL5rDkszeS/7CCtwG3A6nBscW21v4nowUxWvRLlg8xK8piw+hh7b+iErIs0Wr0R4bWZ0mas+ydn70Zgj+xwcrYuauQAJoSfIUtj8E7NWZ+JLQDTHhe8vekeUiZ+Y4y30jzsDZ3hPgPOgz1UnI/wEr6KpBVK+qd6KTL5JEpt2fwP343n4MS1vdGhUygdW1/S/qnVLmUmgrVzJI2fNjc22QP7h/uH0Awz7q0pCd8vtHbBfQ8Am9/rQciHHtzqYULqlsX5mYxlbq5zx3lurTWWJgyS+srWjlDunTUs2QKSFi+C0rOEabmCXjFLNmWCWY3Rm0UGW3gikpZQyS25kTiJqrBtaLElVkqEfpta5R0joXgdlzAG/D0IwjKzUwbi1BJIVBvhjq2ZuXGTX8U6V6mfR3WBcLPhIBSKqIvxKxXROnL4IUcwLRo655+ub3upXkyTLrQLvNBcUZHduc3EE65Cw==c[���    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<'   �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   �----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    |  |                                                                                                                  � !	!�=chelseatanPlot RangeeNrNVU1v2zAMvftXcOilBRJ/Jo2Ta9cWPS0oVqDdsIMs0bEWRTIkpemA/vhRdtJm/QIGLMCMACYpmnx8elIupEIHynDmpdEzaLxvZ0mSTfM4Oy3jrIxP0+SsQeWQJZeWtY3Ui6/oPL0SbxGTFXMebTJXxl8zvcAoOjo6guBC50PIPmMOIZtFw70niqJHuFhrHjrDlYDH51SBjlvZdisUh7nkL2PnDy1yjwIsurXyjmJUb7bfAf7apwpZKG40AjdqvdLkfPr+4/g1L1laviLEob0nLuI4ma8rJXly0yrDhEvyNCuHaTnM82RcTUSRCT6Z5DyPW704CQ07vuDMWEtDQT9L3o2+ouFkq3Z4XIgdAtH0dFKKcfaE6E1IRbfCxE/GUfvDcJMXaVXktfgYyahb0UYP99AcBM5oWrJyNO3hvInmfcnnLyT/3wreBtwOpAbHVvta+5eMlsRoOapZMcG8rMsdo+9r/xmVkHWNVqM/MLQRS7OC5R9s9u4Q/IkNNsYuXYME0NTgG+x5DNHKmOWB0I4x5UXNP5LmEO5gI30T8LSKyhNiuq/vmXK09jlA3150DTKB1vXZawJBAqylJsG1zNIw9FX45Pbu9g4E82xAJj3h9Y1+A0DPY/D213azwpFcSi1cYGTbg5tVJXX3XxNqnVtrLFTMkn1BljPEmSOZS6aAhvYDUHKJUJkH4A2z5FsmmN05rVHk9IkbamUNHaXenUvcZXW4NlS4MWslwmh9j5rOWEjutxK8AU87QFCuFtpYhEYKgXonuMSajZt181Gme1LiNm0AhJ8JAbVUxFTI2VrE3pMoQg1gWvR9j79cXw6zIp2kA+jNYlye0HUS/QbUtVa3c[���    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<(   �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   �----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    �  �                                                                                                                              �u !	!�%chelseatanPlot RangeeNrNVE1v2zAMvftXcOilBRJ/Jo2Ta9cWPS0oVqDdsIMs0bEWRTIkpemA/vhRdtJm/QIGLMAMAyYpmnx8elLjfTtLkmyax9lpGWdlfJomZw0qhyy5tKxtpF58Refpk3iLmKyY82iTuTL+mukFRtHR0REEFzofQvYZcwjZLBruPVEUPcLFWnMvjYYrAY/PqQIdt7LtVigOc8lfxs4fWuQeBVh0a+UdxajebL8D/LVPFbJQ3GgEbtR6pcn59P3HcfOKlywtXxHi0N4TF3GczNeVkjy5aZVhwiV5mpXDtBzmeTKuJqLIBJ9Mcp7HrV6chIYdX3BmrKWhoJ8l70Zf0XCyVTs8LsQOgWh6OinFOHtC9Cakolth4ifjqP1huMmLtCryWnyMZNStaKOHe2gOAmc0LVk5mvZw3kTzvuTzF5L/bwVvA24HUoNjq32t/UtGS2K0HNWsmGBe1uWO0fe1/4xKyLpGq9EfGNqIpVnB8g82e3cI/sQGG2OXrkECaGrwDfY8hmhlzPJAaMeY8qLmH0lzCHewkb4JeFpF5Qkx3df3TDla+xygby+6BplA6/rsNYEgAdZSk+BaZmkY+iv8cnt3eweCeTYgk57w+UbvANDzGLz9td2scCSXUgsXGNn24GZVSc2CpEOtc2uNhYpZsi/IcoY4cyRzyRTQ0H4ASi4RKvMAvGGWfMsEszunNYqcPnFDrayho9S7c4m7rA7Xhgo3Zq1EGK3vUdMZC8n9VoI34GkHCMrVQhuL0EghUO8El1izcbNuPsp0T0rcpg2A8DMhoJaKmAo5W4vYexJFqAFMi77v8Zfry2FWpJN0AL1ZjMsTuk6i3yolUPE=c[��d    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<*   �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**     :------------ |
|  1 |  XYXY data |  Plot  Correct |
|  2 |  XYYYY | Plot  Correct  |
|  3 |  XYZXYZ |  Plot  Correct |

###### - Plot Range TestCase 6:
------------
|  Function Id |  TestCase description  |  Expected results |
| :------------ | :------------ | :------------ |
|  1 |  Error bar |  Plot  Correct |

###### - Plot Range TestCase 7:For some special plot,we should use specific plot range
------------
|  Function Id |  TestCase description |  Expected results |
| :------------ | :------------ | :------------ |
|  1 |  box chart |  Plot  Correct |
| 2  |  radar chart | Plot  Correct  |
|  3 |  polar plot | Plot  Correct  |
|  4 |  windrose plot |  Plot  Correct |
|  5 | Pie chart  | Plot  Correct  |

###### - Plot Range TestCase 8:Ignore hidden columns/rows
------------
|  Function Id |  TestCase description |  Expected results |
| :------------ | :------------ | :------------ |
|  1 | set column hidden  |  Plot  Correct |
|  2 |  add filter to filter part of the rows |  Plot  Correct |



c[�T   �rect   |
| 4  |  non-adjacent|  Plot  Correct   |

###### - Plot Range TestCase 2:
------------
| Function Id | TestCase description  | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | ranges in same columns | Plot  disable   |
| 2  |  ranges in differnet columns |  Plot  Correct   |
| 3  |  ranges in diff worksheet of the same workbook|  Plot  disable   |

###### - Plot Range TestCase 3:
------------
|  Function Id |  TestCase description  |  Expected results |
| :------------ | :------------ | :------------ |
|  1 | Y with sampling intervals  |  Plot  Correct |

###### - Plot Range TestCase 4:
------------
|  Function Id |  TestCase description  |  Expected results |
| :------------ | :------------ | :------------ |
|  1 | Diff column headers with user defined parameters  |  Plot  Correct |

###### - Plot Range TestCase 5：--try different kinds of column combinations
------------
|  Function Id |  TestCase description  |  Expected results |
| :------------ | :------------ |     � �H �                                                                                                                                                                                                                    �ct !		�chelseatanAbout GTAeNptj0FLA0EMhe/7KyLiSdxxXazrQim14OJBLKX0KmM3nQ1Ok2Emi/XfO+p6E0KSw/fyXp4UKIFlsKMKKCaF9JkUj9BjIsfYw0EiuGjDQOx+iDzL4goebEIQhhY6gUvoSHPfPe9sRLNeZeBx5L2SsPV/MlAR38LGskQ8FYUTGKPPFwbV0BpT3d+U1awpq1yzu7apbmvjxAQK6IkxnZ+ZYoMHjMh7hHZSfdA7JUOsGLNXXno8lWEICyX1OH+J5Ii9fbuol930x+v2N1CxEtYoHoJl9P/muG5Mt11O3PobmxwGPfpFsA7n9RceW2yKc[�,��Gs !		�MchelseatanAbout GTAeNo1T01LAzEQvedXjBRP4oa1WNtAkVpw8SBKkV5L2p1mB9OZkMxi/fcGrTC8mcP7mhcFKuAZ/KgCikWhfBfFE/RYKDD2cJQMIfs0EIdfRt2NuYUnXxCEwUEncAMdacXt69ZntO/rSnge+aAk7OO/DFQkOth4loxnY4LAmGN1GFSTs7Zd3DXtbN60dWYPbt7eT20QmyhhJMYyubJmg0fMyAcEd1F90ScVS6yYa1Y9ejw3aUiPShpx+ZYpEEe/v56uussfu4+/QmYtrFkiJM9Ym/0AxfVbGQ==c[��{�ar !	!�}chelseatanPlot RangeeNrVVd1u0zAUvu9THMQNSLTOX9u0dzC2aXcTGtIG4sKJncbMtSPbXYe0J9mz8E68Asd   �    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<2   �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   �----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    �  �                                                                                                                                                                      �M !	!�UchelseatanPlot RangeeNrNVE1v2zAMvftXcMilBRJ/pUmcXLO26GlBsQLNhh1ki461KJIhyU0H9MePspM0a7sBOwStYcAiRZOPT4+qnKtnUZRM0zAZZ2GSheM4mlcoLbLo2rC6Emr1Fa2jT+QMYrRh1qGJFlK7W6ZWGAS9Xg+8Ca0NPnrOLEIyCwZHTxAET3DVqMIJreCGw9NzKEdbGFG3O+SHhShe+i4faywccjBoG+ks+Sjf7LgC/LdNGRKfXCuEQstmo8j49P3HWfWKlyTOXhFi0TwQF2EYLZpciiK6q6Vm3EZpnGSDOBukaTTKJ3yY8GIySYs0rNXq3Bds+YK5Noaagq6XtG19Q82JWu7xWO87BaLpeJLxUXJA9CakYbvD+E9WoHKn4SYdxvkwLfm/kVy0O0qrwRGak8C5mGYsu5h2cN5E83fJpy8k/2EFbzxuC0KBZZtjrb2v+J9hcVGWaBS6DzQHf6KDrTZrWyFB1CW4CjsqvTfXev1+wxIMYAlb4SoPqJaUnyDTnf3ApKW9zx777rKrkHE0totuCAWJsBSKRFczQ93QX/6X++X9EjhzrE9LevznG719QFeE4Myv3Xn5sVwLxa2nZFej0JtcKOZl7XNdGqMN5MzQ+opWVhNplqQumATq2vVBijVCrh+hqJgh2zDOzN6otSSjC9xSKaNpnDpzIXAf1eLaUuJKN5L71roaJc2ZD+7OEpwGR0dAUG5WShuESnCOaq+5yOitnbX9UaQ9iHEX1gfCzziHUkhiysfsVsTeQRU+BzDFu7pnX26vB8kwnsR96JbDUXZOV0rwG3/3UKA=c[���    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<3   �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   �----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    �  �                                                                                                                                                                                      �= !	!�5chelseatanPlot RangeeNq1VMtu2zAQvOsrtrcE0FuOLfvqJkFONYIWiFP0QIkrizVNCiQdp0A+vkvJdozEKNCDBQFaLvcxM0uqda6bJUk2zeNsXMZZGY/TZN6itMiSe8O6VqjVd7SOPokziMmGWYcmWUjtHplaYeAt6E3wgXNmEbJZEEQnTxAEb3C3VbUTWsEDh7f3WI62NqLrd8gPC1F/9N2+dlg75GDQbqWz5KN6s9MO8N9rqpD54loh1FpuN4oWX37+umo/aZKl5ScxLJoX0iGOk8W2kqJOfnRSM26TPM3KKC2jPE9uqgkvMl5PJnmdx51aXfuGvWAw18YQKRi45D31DZETnTzgsd53CUTT8aTkN9kR0VlIRb/D+G9Wo3KX0SYv0qrIG/5vJKN+R2kVnaC5CJzRtGTlaDrAOYsmOHve84/nPQLjIywIBZZtELQBLpoGjUJ3GG/4ri5tn/ILT9J9Guy0WdsWKVc34FocinpvpfWa2i1hJ1zr3Z0kzpRIt/SFSUt7X32F/RFvkXE0dojekjJ01xqh6G51zFBNyvIpT8unJXDmWEgmPf7zTG8I6OoYnPmzp+PBr4Xi1gPb96j1phKK+dvra90aQ/QqZsi+I8tqgm7pRgsmgSZBbKVYI1T6FeqWmZ49Z+aw6LSkxRC4o1ZGk+LDciHwENXj2lHhVm8l99SGHg39TnzwoCg4DY6mRlAeVkobhFZwjuowksTonZ31/CjSHme1Dwv9oBjn0AhJSvmYvUXqHWfjawBTfOh79e3xPsqKdJKGMJjFTXlNByn4Cx31udk=c[��/    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<5   �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   �----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    | 2  |  multiple columns |  ![](http://192.168.18.108/GraphingTesting/server/../Public/Uploads/2018-08-22/5b7d319678d51.png)  |  Plot  Correct   |
| 3  |  adjacent | ![](http://192.168.18.108/GraphingTesting/server/../Public/Uploads/2018-08-22/5b7d3230b32fd.png)  |  Plot  Correct   |
| 4  |  non-adjacent |  ![](http://192.168.18.108/GraphingTesting/server/../Public/Uploads/2018-08-22/5b7d32498a849.png) |  Plot  Correct   |


Plot Range TestCase 2:

------------
- ranges in same or differnet columns, adjacent or non-adjacent, ranges in diff worksheet of the same workbook
- Y with sampling intervals
- Diff column headers with user defined parameters
- XYXY data, XYYYY, XYZXYZ, etc. try different kinds of column combinations
- Error bar
- For some special plot, like box chart, radar chart, polar plot, windrose plot, Pie chart, etc. we should use specific plot range to test
- Ignore hidden columns/rows: try to set column hidden, or add filter to filter part of the rows and plot (ORG-13070, ORG-13358)



c[��/    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<7   �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   �----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    �  �                                                                                                                                                                                          �9 !	!�-chelseatanPlot RangeeNq1VE1v2zAMvftXcLcW8LfTxMk1a4ueFhQb0HTYQbboWIsiGZLSdEB//Cg7SYM22E4xDJiiHsn3SMmtc90sSbJpHmfjMs7KeJwm8xalRZbcG9a1Qq2+o3X0SZxBTDbMOjTJQmr3yNQKA29Bb4IHzplFyGZBEJ08QRC8wd1W1U5oBQ8c3t6xHG1tRNfvkB8Wov7ou33tsHbIwaDdSmfJR/lOC8B/lgTPfCatEGottxtFiy8/f121nxqQpeUn5RbNC4mO42SxraSokx+d1IzbJE+zMkrLKM+Tm2rCi4zXk0le53GnVte+YN8dmGtjSAEMxPNe54aUiE4e+FjvuwSj6XhS8pvsyOgspaLfYfw3q1G5y/QmL9KqyBv+byajfkdpFZ2wuQid0bRk5Wg60DnL5uzZzj+e7QiMR1gQCizbIGgDXDQNGoXuMN3wvbm0fSovPAn3YbDTZm1bpFjdgGtxSOq9ldZrKreEnXCtd3eSJFMg3cgXJi3tffUZ9ie8RcbR2AG9pcbQvWqEonvUMUM5KcqHPC2flsCZYyGZ9PjPM70hoKtjcObPXo4nvxaKW09sX6PWm0oo5m+qz3VrDMmrmCH7jiyribql2yuYBBoEqZVijVDpV6hbZnr1nJnDotOSFgNwR6WMpo4Py4XAA6rntaPErd5K7qUNNRr6dXjw0FFwGhxNjag8rJQ2CK3gHNVhJInROzvr9RHSHme1h4V+UIxzaISkTnnM3qLuHWfjcwBTfKh79e3xPsqKdJKGMJjFTXlNf7/gL+JJtg8=c[���    nes tab
4.3.10 Apply To sub-dialog
4.3.11 3D Axis dialog
4.4 Format/Style Toolbar
4.5 Graph Theme 
4.5.1 Copy Format/Paste Format
4.5.2 Save format as Theme
4.5.3 Save and load Incremental Theme
4.5.4 Theme Organizer
4.6 Graph Template 
4.6.1 Save Template
4.6.2 Save Template As Improvements
4.6.3 Plot with Template
5 Menu & Context Menu 
5.1 Layer Icon context menu--Hide Layer & Delete Layer
5.2 View menu 
5.2.1 Active Layer Indicator
5.2.2 Print VIew, Page View, Window View and Draft View
5.3 Single point edit context menu
5.4 Add/Modify layer title
5.5 ORG-671 menu to set Active Layer by Layer Icon Only
5.6 Copy and Paste Graph/Curve
5.7 Fit Scale Factors
5.8 Fit Layers to Page
5.9 Fit Page to Layers
6 Presentation 
6.1 Graph Export
6.2 OLE Embedding
7 Use old graph created in earlier versions
8 Accuracy Testing
9 Performance Testing 
9.1 Speed of plotting
9.2 Refresh of graph
9.3 Speed of Openning dialog
9.4 Anti-aliasing for graph
10 Function Plot Testing
11 Special Testing points before releasec[�&�   � by Paste Link (ORG-472)
3.3.6 Line Object
3.3.7 New XY Scalar
3.3.8 Label in Graph
3.3.9 Object Properties dialog
3.3.10 Text and Font
3.4 Objects and Object Edit Toolbar 
3.4.1 Programming Control dialog
3.5 Improved Color and Palette Support 
3.5.1 New Color Well
3.5.2 Palette Editor
3.5.3 Palette Apply(palApply) (ORG-1380)
3.5.4 Palette, fill color, line/border color button in Style toolbar
4 Customization 
4.1 More Click Mode
4.2 Plot Detail 
4.2.1 Layers Tab
4.2.2 Legends/Titles Tab
4.2.3 Group Tab
4.2.4 Stack Tab
4.2.5 Line Tab
4.2.6 Symbol Tab
4.2.7 Spacing Tab
4.2.8 Label Tab 
4.2.8.1 Smart Label
4.2.9 Pattern Tab
4.2.10 Transparency
4.2.11 Gradient Fill
4.2.12 Link Axes Scales
4.2.13 Special point testing
4.3 Axis Dialog 
4.3.1 General axis testing
4.3.2 Scale Tab
4.3.3 Tick Labels tab 
4.3.3.1 Display sub-tab
4.3.3.2 Format sub-tab
4.3.3.3 Table-like axis
4.3.3.4 Minor Tick Labels
4.3.4 Title Tab
4.3.5 Grids Tab
4.3.6 Line and Ticks tab
4.3.7 Special Ticks tab
4.3.8 Break Tab
4.3.9 Reference Li    x �6��P � x                                                                                                b/ !	=echelseatan2D Graph -Symbols Graph eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[�)�8. !	!-chelseatanLine GrapheNozNDIGAAEtAJc=c[�)�8- !	!-chelseatanLine GrapheNozNDIGAAEtAJc=c[�(b8, !	!-chelseatanLine GrapheNozNDIGAAEtAJc=c[�()V+ !	mchelseatan2D GrapheNozVPDJzEtVcC9KLMjg4uIyUgiuzE3KzymGiCgAAJDNCXc=c[�'�R* !	echelseatan2D GrapheNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[�&!�s) !		�%chelseatanAbout GTAeNpVj91KA0EMhe/3KSKiN+IMa7HWhV6o4FJQWsrS2zJ209ng7mSYZLG+vVN/kEJIAuc75GShQAIugBuVQVEU5FMUB2hRyAdsYc8JfHKxo+C/iTxNcQ2PThA4QAU1wxXUiyb3zevGJbSrpww8j2GnxMH1fzZQ5r6CtQuc8JCRVUKRMeEJAFVWmmOU4+llxFC/gDGmKDzDmLIOnWqsrC3vb0w5nZky1/SumpW3E+vZRorYU0A5P7PFGveYMOzw3/ZB7ySWgmLK4fLS4sHELippj/NlIk+hd28Xk4f69+9t85PvUlvhMe1QnZ/LNub/hq0jHsR/AXF2b24=c[�l�R( !	echelseatan2D GrapheNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[�%_   �.12.1.3 unbalance grouped column plot
1.3.2 3D Graph 
1.3.2.1 3D XYY Graphs plotted by Worksheet
1.3.2.2 3D XYZ Graphs plotted by Worksheet
1.3.2.3 3D Graphs plotted by Matrix
1.3.3 Contour Graph
1.3.4 Grouped Plot
1.4 Plot Setup
1.5 Template Library
1.6 Ploting xf
1.7 Layer Contents Testing
1.8 Drag and Drop
1.9 Graph: Add Plot/Error to Layer
1.10 New Function Graph
2 Tools 
2.1 Graph Toolbar 
2.1.1 Add Layer(Axes)
2.1.2 Extract to Graphs
2.1.3 Extract to Layers
2.1.4 Merge Graph Testing Guideline
2.1.5 Add Graphs to Layout
2.2 Layer Management
3 Other things in Graph 
3.1 Graph Legend 
3.1.1 Update Legend dialog
3.1.2 Special Legends 
3.1.2.1 Categorical Values Legend
3.1.2.2 Box Chart Legend
3.1.2.3 Point-by-Point Legend
3.1.3 Color Scale control
3.1.4 Bubble Scale control
3.1.5 Regression testing
3.2 Most Recent Use
3.3 Object on graph 
3.3.1 UIM
3.3.2 Add Asterisk bracket
3.3.3 Axis Scrollbar
3.3.4 Auto Axis Title and Legend
3.3.5 Tables in Graphs 
3.3.5.1 Table Title (ORG-475)
3.3.5.2 Tables created    �  �                                                                                                                                                                          �I$ !	A�-chelseatanColumn of different formateNqVVMFu2zAMPc9fQWDA1gGpvbRd1uWaNsWAFh2GAWuOikzbQmTJE+UmA3rot+zT9iUjZSTzocEwX2yJj4+PT5SXxiKB9VpF490cmhi7eVFMP53l09llPr3MZ++LRYOWUBU3QXWNcfU3pMivIgbEolUUMRQLb/vW3VdXpqowoItLH1oVs+x1emCIg6+g3COgShAQuoUihOk8Ox092RMse6dFGHwu4ekvsETSwXQpAhy43nWoI5YQkHobifc4eT4mg3+uOWMKqcougnHwwN9frI/A2kNgfhhoz8ag1RHQuYDWPjZMo1zJOJ0MoCP4C8EPEOiC7zBEgzSHKHXegOtbDEYfSf5wJHlQ+XLOTHIgmLqJoK3Rmz1B9EAYQREsVMTac1llwQdw/mWu7H9Zst/Pv161ZsfnldoTf/YNliqqwXzGHkzL4XuDDlq14bGDTiRUwbdAvRaDB9QEogiwao0WtsZaWOPgQMJeMbNIMhU0ylYyibFBCMrVCIaSlKTs1rgNS0tKpJSMOpzwrI4mN0mIPzucJPV18H3HObI9AYw6f5eouCaKrBaH3SPtDWVVYCEJIJTUKu5Alim6up1Az5O/EmfLoLaggPjS8tWbyLoeItJRLbc0T1l3hkjUPyrbY3Gn6NDYyf3Xm9PpxfnZx4NSNfh0vdNo0x4+sufUKY3wUPRuvEzxdCbk+6D3ugP7afhIxMtJEiOOvKXxyVDje1vK2RygrNznwD8MaPxW2pBOD1ESw7YbksBgMCEm8h+90PLPqYNO1Zj9AfqAnDU=c[��x    67hUcHxmz+Qtt+V0S21KioyessUnSOj/IbzXjU/PhPCrzG62dLjH4jJ3jtPPYegYLvTxlAcvSU3RsqoFgJ4qSxZF4kt2KEQPQg7eWe7S7EbnLaRdCCBEaPhI4gnajpGTr2mwbgofIuVoAzG7VKIopqRFNPq9Zo9MiGEFUxt7IDZGaRStqXgyNliMaOlsxY0UjwMXNMH/qHZT+hPhwAa3D5v3G51ryb0Yfp1kIATyu8ZfdGbLh7JiB1TM/rvnFOwkcBLzyoy7fd7+ggWM7xehyDwwfgIH2nvGsj+b3oU9IK+uJRqUGBNXzmSCvTJNp57kPBcea+GAWmfl9q2vM/rMUTXz54dl2mZqvDn9YFoGBxPU4zibXY6pzFk9WTs5YKQ6fLY1MCbjAdUWYpg4hjz2JkATCfMHJtZ8U4IUzYMCt1sDqfaerWvRZEJZK9tPS+uZnQn2rsF4/QXavOAim7UtEy6EU1IMhFOoOI9kA+Q5N/so26UMQdaebcFrtU/GhSK62NooLW8j3keRIQ0pUf0IfFe3q4cer9iEWMqKBQ3ud/wW5/7J9fWq12gXWKig1hFzK/zCnVqj+0VStrSxeOX+2k1X7y9eVNU839VknW+V2aCwdAtJ6k4aw7na+FtJebik8mmC9lUBsPRdMpi5I4ik94A+qk3givtQlByEHFHARJm76NoXaJE3edro6gwZY8DivwsRaN945AsHtRBOuRwGyAionCrI3nJW1Si5QwhUSWykraY5NNknzIdBQmY/7YclTZlFutqjBE3Zas9dGkORQWl3nt3TG6dnW5khSFLRUqAooLaPuM6xQREb347U30aZQXBcKOVyWoOuVDpX54f/QM9RBQIMUFEo8HWWGM1HEgkvD1Rn9wG+VCAVuw4kQBt0ueigjSbl+p/DXL3641VcveXO+e3oWOMQXCjb3BNdyhk073KWeAzlb43mb8wDoPzuAwV1InidxPhh3boll9D+tQ6qM2eWT4ky4ucoiZR3k31/t2bn9idYtw=c[���   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        �q !	!�chelseatanPlot RangeeNrNVt1u2jAUvucpztSbVmrIH5DAbddWvVpVbVK7aRdO7BCvxo5sUzppT7Jn2TvtFXa   J    . 2 .                                �y{ !	!�-chelseatanLine GrapheNrNVsFu2zgQvesrBuhhU9SWLDtJE91S7yYokEWKtrt3WhpbhClSIKnaLvrx+0i5jhPbXaSn+CKLnBnOzHvzqFup2BVUe98WWZZfj9P88irNr9LLUTatWTkW2Z0VbS314is7j0fmLXPWCOfZZvdSc9xP3sQf7RYomE+FY8oLSoZ7P0p+0G2nSy+Npo8V/Xg0rdiVVrZxh7Dx17rl0nNFll2nv   �Yz !	!�mchelseatanLine GrapheNrNVk1v2zgQvetXDLCHplhbspyPJrplvZugQBYp2m7vtDS2CFOkQFK1XfTH95F0HSeOd7G3+qKInI/3Zt6McicVu4pa7/uqKMqbaV5eXefldX41KWYtK8eiuLeib6Vefmbn8Si8ZS464Tzb4kFqjvfZb/FH+wMK5jPhmMqKsvHBj7LvdDfo2kuj6   j�gy !	-�}chelseatandefinition tableeNqFUctOwzAQvPcrRuJaGlJQVXKtKELigER/wEk2jYVrB3tTWikfz8bpg0ggfInsnZmdmay1oZChZm6yJEkf57N0sZyly9niLlnVZAKp5NmrptZ2u6HA8knYEyU7FZh8sm5twdrZN6ctA5ObeFBSpa3uB2CVG0LPXalASDNMbn8cTDqcRfBSortCSwqF102cQAZPh4YKphKeQms4yJuQs5Hav3dhpEJkfwS7wSfBqh1B2RJ7ZVqCFte1DifrHRrjGIXznhjD0nnvR1XSwFkiMqcoaio+8F67L7yqnJWRSwyB3B2EM8x1Bc0IgpIlNfXQTQ8d8oI+Wy16ZCWjq3pEbONcaYhtiIt7XBT/2DjFOOheeR1DtUH+5IUw7A2i9jNNNDjO/XCtblConN+1RiE/xiAs8nYr+pYO3KPi46nGXwoZbegm33NQ134=c[�ȕ    :------------ |
|  1 |  XYXY data |  Plot  Correct |
|  2 |  XYYYY | Plot  Correct  |
|  3 |  XYZXYZ |  Plot  Correct |

###### - Plot Range TestCase 6:
------------
|  Function Id |  TestCase description  |  Expected results |
| :------------ | :------------ | :------------ |
|  1 |  Error bar |  Plot  Correct |

###### - Plot Range TestCase 7:For some special plot,we should use specific plot range
------------
|  Function Id |  TestCase description |  Expected results |
| :------------ | :------------ | :------------ |
|  1 |  box chart |  Plot  Correct |
| 2  |  radar chart | Plot  Correct  |
|  3 |  polar plot | Plot  Correct  |
|  4 |  windrose plot |  Plot  Correct |
|  5 | Pie chart  | Plot  Correct  |

###### - Plot Range TestCase 8:Ignore hidden columns/rows
------------
|  Function Id |  TestCase description |  Expected results |
| :------------ | :------------ | :------------ |
|  1 | set column hidden  |  Plot  Correct |
|  2 |  add filter to filter part of the rows |  Plot  Correct |



c[�9�    ng/tree/master/FunctionPlotTesting
###### formula panel TestCase 1:
------------ 
| Function Id | TestCase description   | Expected results  | 
| :------------ | :------------ | :------------ |
| 1  |try different formula,eg Y(x)=3 | plot corret   |
| 2  |try different formula,eg Y(x)=sin(x) | plot corret   |
| 3  |try different formula,eg Z(x,y)=t*sin(x)*cos(y) | plot corret   |
| 4  |Select different formula by the triangle next to the panel | plot corret   |
| 5  |the formula panel is blank |error message will turn out   |
| 6  |the formula has undefined value |error message will turn out   |
| 7  |Try very long string in Function Plot expression |plot corret  |

formula by the triangle, list:
https://www.originlab.com/doc/LabTalk/ref/Alphabetical-Listing-of-Functions?tdsourcetag=s_pctim_aiomsg
Function Reference:
https://www.originlab.com/doc/LabTalk/ref/Function-Reference?tdsourcetag=s_pctim_aiomsgc[�:�                                                                                                      �rect   |
| 4  |  non-adjacent|  Plot  Correct   |

###### - Plot Range TestCase 2:
------------
| Function Id | TestCase description  | Expected results  |
| :------------ | :------------ | :------------ |
| 1  | ranges in same columns | Plot  disable   |
| 2  |  ranges in differnet columns |  Plot  Correct   |
| 3  |  ranges in diff worksheet of the same workbook|  Plot  disable   |

###### - Plot Range TestCase 3:
------------
|  Function Id |  TestCase description  |  Expected results |
| :------------ | :------------ | :------------ |
|  1 | Y with sampling intervals  |  Plot  Correct |

###### - Plot Range TestCase 4:
------------
|  Function Id |  TestCase description  |  Expected results |
| :------------ | :------------ | :------------ |
|  1 | Diff column headers with user defined parameters  |  Plot  Correct |

###### - Plot Range TestCase 5：--try different kinds of column combinations
------------
|  Function Id |  TestCase description  |  Expected results |
| :------------ | :------------ |     MManIsn0f73HR45HL/aDVVyPmfL2pNCnrSSla/h0CrjqTTWsqf+iPGBQ2mUsYemp8sev46yp0ZrBCO/abmgD/xdsj1Z8lNj+tugfok8erdjXpMDr5ulbMTRE84P0xl+aQMSx6wvnlufNr3E47Nc1FhWslySr5nKzn5jEroixyrEmFoWnmm9XtOfwouUAr6NdA6cpm9CdfAJYMyN3dY7eN6AQV/cYJf3gPon0nlM9CUkmbwWkoDcBX1BvsLRR11abgLpT/EkDgM1om3RvFO06I2krngdWnyKEdtDp53zpomA2X0oDfDzP3f7kC9p8PnraHAocp/MCLYdxQHIqsmDi9tS+xrREfkThlMoHAYdU2skcHO8CI6/GXtyPOHJ0+AvzvxXMF28ljtCaNcKCH652Y1DI9YF5aPR6XvimJPUxRGP5DKlW6kU3UCN6B/MhgW3oVQF4boF38OFE5oZblpHyfsUCiM0/cvWy1IotaGZNUv0ffZMvFxytQ0NNDSvPVVQuT6BIT1Ao+KQZzczA12csTKrHjCXXPdaCL/5vn90raxYOVpFpGvchCTds3MpYL7G8gwlLens4fPdMB+Nz6/fJvnolyqrjW2EGpBTsuIoo0arzf57UINZMA8+A2JfpnQWFoVyhspa6AXTVoAD95D6jnshr7gKmQobHgRCSnka5L8P7WXDsU1JPk7poUWRn0LRwLBro8W92ASEjPYhIqJwJT3ZcG6ST1KAFlOIrQpjEmBR0afsfbK45ULA/m/FXkiV9eo267wHjStpQWG1SfLzlO6s2R6ujR4uwhvIHYsMAZL8IqVP4Dok01v1bk8m4zUnQBgupVD9tLq+0IBfGTVUfgeGiAIixhQBNLrVFXhrNxR4vNy1Prq14UsPbcWKCRSgRfzey0HN8rH6P1wYTLnQIgxmtjJ26WoG653pbMkIhUIW9ZMzE3xnRjHo++e6tjUWn2YC7ETxq0HoD62Alp2D+lQZsE3vWd5Hy7P+iIIC867z9xdv/wPgS4G9c[���    �  �                                                                                                                                                                                                          �)| !	!�chelseatanPlot RangeeNrNVc2O2jAQvucpRuq1kPKzlOZKl2pvVdXD0psTT4iLsaOxKVuJJ+mz9J36Ch3nZ5ctgS1oD1hIJPY3P9/nmclcaXSgbSa8siaBwvsyiePBh2F/MJn2B9P+5F08K1A7FPEnEmWhzPIrOs9/sSfEeC2cR4o/a+u/CLPEKHpTLQg7UG1BMJgJhzBIot7einYw35gshIY7CbsnoESXkSqrkx3cPpSYeZRA6DbaO4Admyb7ruDFd7YYsCFYg5BZvVkHz1WSMLNEHABqv8OAgjUHUqVusS7sdaFHFVrI7yJD44+hxhXKWNNrkZ3AVrtep3rDS9R7bfko5ORAGXBiva9OzUYqJ1JWbV/KJxOp8hzJoP8/VZ8bwtbSyhXI1jYHX2CdQdhNrV09etpP4bSgowNB/1H0qKSHml4mKWu6gwVslS8Cm1JzXzFf7qgfQjs4lOclSuProPQx3FfTZQUKieRqkhuHxJFzZThQKYhv0IfD85ne/Pn9q9fz9LOpqtB9K2WkC9XRhM7sOlWmmm3uKnSB+8X9AqTwooswbw1rEK/D6VQBRjXgG//O12xyHdUBt0SWIBV0PoX3yZxNneXOd5yREhpKhr3d8nthN1qGEquPcpVVZ/UcuYj5axNP7QNkhSDfff3tvJSsTAs7WgSl1QyrCHajxgG15ZYgy7QaYFfR3QQHCpuQXd5O38k0uVsaSwiFkhJNO9xjslt3DbK7xw9Om+Gp7hNSQq40jyXwtn0qgzLNZyfQ6izcKPoLrqnDkA==c[�T   , ,                                                                                                                                                                                                                                                                                                  �Q !	!�]chelseatanPlot RangeeNq1Uktv2zAMvvtXcLcW8NtJ7fS8rdhpxbABzYYdZIuOtSiSIcn1BvTHj/Ijy4ZdeohgyCRF8vv4iMAwdUALQoFlJwRtgIu2RaPQQaPlcFI2BMZ/sAaV889Kq2jVw4twHwajNkfbIcXqFlyHc1JvrbU+BhHsYRSu8+ZeCnWgQIfmmUlLb299hhkTOmQcjZ29B4tEC1uhkEPPDOWkKB/ytH/aA2eOhSTS8b+v9IWAronBmV9LOZ78UShuPbEFo9GnWijmhFY+1ztjqLyaGZLfk2Q1Ubc9NoJJ6KWmaqU4ItT6JzQdM1P1nJlV6bUkZXYcCcpoi4v6KHD1mniNlLjTg+S+tBmjFc3kPHcUnAaH1hGVDwelDUInOEe1jiQxerT3U33kac+zWtxCPyjGObRCUqe8zyJR986z8TmAKT7j3nz89BBlRVqmIcxisa1ug+AFIAO6croK8NIGXsgaXRx4nepzaoUrZ9JOg3Sil6vJett56Ui+XDqKpwTZROXvLG++fb/pnOvvkyTb5XF2V8UZfWmVPBjWd7Rvn6mn9EtooZ7RJHGcPA61FE3yhXrAuE3yNKuitIryPNnWJS8y3pRl3uRxrw63ry07WNr23/KuQXZ3V1Z8m01kJ/h5YJedvAJsXqR1kbf8D6xfkX+Hdh3oza5i1Wa3Qge/ATDhf84=c[}2R       ~   �   /   �   ~   S   �   �   4   �   .   3   �       �   e   a   }   b      �   �   �   K   2   1   0   �   A   @   �   (   )   *   +   -   ?   >   <   ;   ^   �   5   6   7   8   9   :   B   C   D   E   F   G   T   \   R   Z   Y   X   �   �   �   �   �      L   M   N   O   P   Q   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   !   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   I   �   �   '   �   �   p   r   q   �   j   �   �   �   �   r   z   �   �   g   j   h   g   �   q   �   �   r   �   r   �   �   �   �   j   v   `   u   `   k   s   u   s   t   u   U   V   W   f   c   d   y   x   w   �   �   �   i   �   �   �   �   �   �   &   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   ]   �   �   p   �   �   �   �   �   �   �   �   �   �   �   a   a   a   a   �   �-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   �    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   �://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     � ` �                                                                                                                                 �Pv !	��]chelseatanParameter (only applicable for 2D Parametric Plot and 3D Parametric PloteNqFUM1OwzAMvvcpLHEBqTR0h2lU2qnaEDcOHOCYpV4TLU0qx4Uh7eFxO6YOCQlfrHx/trN1HlMFlrmvlCofF0W5XBXlqlg+qNqiT6jVE+neutC+YmJpiglRdToxktoOwbCL4UWT7lAQgOxmKpih0VjrhFBWkN1fFWQnuCTAcwOnWdpgMuT6iQEhNsceDWMDhGnwnAQTc/Ur7f+3WEpxbsK41of2A4ILHIEtAjaOYRePOWBbAU6Sw5meTxFeYoxFI9R+8u0jdYPXVyJjdWgRtDGRGvkx/wWRIETOJ8MsvFg/nfd/uWT0DuHt9nC3zuF9bHA+YjH2Wocx9GfVMHRIzgiORDJuVHwDt+SX8Q==c[��r�u !	1�echelseatanPoint(Column/Row) eNqFUUFqwzAQvPsVA726VpxCSH0NSSk9tId8QNjbWESRjHbdtJDHd2WXNoVCFwmh2ZlhtNo5T9ygFxkaY+r7ZVWv1lW9rlYLs+nJM1nzkOzQu3DYE4seRhKROVkWSmY3hlZcDC/RBSmKm6nwC0XWbSwT6qa4vari8k3EY4fLD7EjbpMbpg60sX0fqBXqkIhHL6yYiptrM/x7V0Wtwn36gAtv1rsOnRUL744EiRHepgPNWL34qhK6Wu/aI56f1JNSigknYrbKPTvvIWMKiKNgTrXMgTc2IEQBBR0SWJLOTeH2L3iW3WXZMM3LMXIqEU9zppIOOVG5mHb26UkDuVcMPkr+k6zJT2Afz9nwE6rvkdc=c[�>    � L �                                                                                                                                                        �%5 !	1�uchelseatanPoint(Column/Row) eNqFUUFOwzAQvOcVI3GFuilSVXKNWoQ4wKEfsJJNY3VjR+sNBSmPx24L9MbKkuXdmfF4vHNMsUKvOlbGlE+rRbneLMrNYr00dU8cyZpnsWPv/GFPUdNmVIjMYKOSmN3kG3XBvwfntSjuzoU68DR4hA6t6zoS8oouyGAVWaS2kVBWxcNNFTN+tPDSYv4DthQbceN5gjTYfo7UKLUQihNrTL1Erm7F8O85McpE3MsXnP+w7Fq0Vi3YHQkaAtjKgS69cnmte6TVsGuOeHtNmiQSBAPFaBP25Jihk6R3T4qLq1U2XFsPHxQpBRJElRTiL/uCe8y4MWcIF5FtqDJdTcxoekp3ug4jB81/kFHZZeRwyhLflEWOCw==c[�> �14 !	1�chelseatanPoint(Column/Row) eNqFUcFKAzEUvO9XDHhR0E23Qql7XayIB0V6l5B92w3NJsvLW6vQjzfpFu3NRyDkvZnJZLKxjiJcMFps8HUvMtZKVQ/Lslqty2pdrhaq6clF0uqJ9dhbv9tSlLQpYSI16CjE6i1YL9dNcNPgP97D4aYork6FuYfQobVdR0xe0AUetCALNToSqrq4u6jiiM3kTXaE5xbHP2BL0bAdTxOkwePXSEaoBVOcnMTUS+T6Ugz/nhOjSsQtf8P6T+1si1aLhrN7goQAp3lHc69anOsWaRlnzR6vL0mTmANjoBh1wh6sc5CJ07snwexqmQ032sMHQUqBGFE4BfnLnnH3GTfmPGEjsg0RR2cTR5ie0p22w+iC5H/IqOwyunDIEj+cZZJ0c[�91    �                                                                                                                                                                                                                                                      �T7 !	��echelseatanParameter (only applicable for 2D Parametric Plot and 3D Parametric PloteNqFkDFPwzAQhff8ipNYQAox6VCVSJ2iFrF1YIDRda6xVceOzhcoUn88lxRoKyHh5eT33nd39tp5TBVY5r5SqnycFeV8UZSLYv6gaos+oVZPpHvrQvuCiaUoJkTV6cRIaj0Ewy6GTXSBAbKb6cC1PIK1TghlBdn9xYHs+BuF5waO52iDyZDrJwfEWB16NIwNEKbBcxJN4Oqq2/93QUohV0F2h3ftBwRZMAJbBGwcwzYecsC2Apwi+5O90aQ7HAXxpY2xaMTaTdwuUjd4fREyVocWQRsTqZEf858QCULkfALOwR/0w3n/FyWjtwivt/u7ZQ5vY4HTI2ZjrXUYm36vGoYOyRnRkUjGjYkv0W6YCQ==c[�5ǂ$6 !	��chelseatanParameter (only applicable for 2D Parametric Plot and 3D Parametric PloteNptzb0KAjEQBODep5hSIRxoKViJvaWWe7m9JCTZQEj8eXtNVK6xGhiYb7YDTlI440ahMpyUhGIZPLmCMT0UtGXt4eZezynHGghnyhS57bQlMQzSOuXJiQlPpAxJRYHNHtxx/4GXVZcbuFQ/+u5C+Ke+9yPjsvabg8K1xWo34EjSzr4/UiNnp19REUokc[�1r    etc. try different kinds of column combinations
- Error bar
- For some special plot, like box chart, radar chart, polar plot, windrose plot, Pie chart, etc. we should use specific plot range to test
- Ignore hidden columns/rows: try to set column hidden, or add filter to filter part of the rows and plot (ORG-13070, ORG-13358)

|  1 |  2 | 3  |  4 |
| ------------ | ------------ | ------------ | ------------ |
|  one column |  multiple columns |  adjacent |  non-adjacent |

| 1  |  one column |  ![](http://192.168.18.108/GraphingTesting/server/../Public/Uploads/2018-08-22/5b7d31dc772c2.png)|
| ------------ | ------------ | ------------ |
|  2 |  multiple columns |  ![](http://192.168.18.108/GraphingTesting/server/../Public/Uploads/2018-08-22/5b7d319678d51.png) |
| 3  |  adjacent |  ![](http://192.168.18.108/GraphingTesting/server/../Public/Uploads/2018-08-22/5b7d3230b32fd.png) |
|  4 |  non-adjacent |  ![](http://192.168.18.108/GraphingTesting/server/../Public/Uploads/2018-08-22/5b7d32498a849.png) |

c[}2R   > >                                                                                                                                                                                                         �* !	W�[chelseatanCreate New Graph dropdown list button1. Active a 2D plot, open 2D function plot�? !	-�/chelseatandefinition tableFiles:http://192.168.18.60/Chelsea/GraphingTesting/tree/master/FunctionPlotTesting
###### definition table TestCase 1: 
------------ 
| Function Id | TestCase description   | Expected results  |
| :------------ | :------------ | :------------ |
| 1  |try to define name and value in this table | plot corret   |
| 2  | after define value, check Show Labtalk Script box | check if it shows the LabTalk script equivalents of these definitions   | 
| 3  | check Show Labtalk Script box, try to define variable using Labtalk scripts | define value show corret   |
| 4  |try to using formula by the triangle next to the table | Labtalk Script box show corret  |
c[�:�   � M	��B��                                                                                                                                                                                             �* !	W�[chelseatanCreate New Graph dropdown list button1. Active a 2D plot, open 2D function plot/2D parametric function plot dialog, make sure Create New Graph dropdown list button turn out in the bottom of the dialog
2. A9  !	9	chelseatandesign欢迎使用ShowDoc！c[�/I !	99	chelseatanLayer Contents Testing欢迎使用ShowDoc！g[�6�= !	!9	chelseatanPloting xf欢迎使用ShowDoc！f[�6�E !	19	chelseatan6.Template Library欢迎使用ShowDoc！e[�6c? !	%9	chelseatan5.Plot Setup欢迎使用ShowDoc！d[�6FB !	+9chelseatanMore Click Mode欢迎使用ShowDoc！c[��ԉ( !	W�WchelseatanCreate New Graph dropdown list buttonFiles: http://192.168.18.60/Chelsea/GraphingTesting/tree/master/FunctionPoint  
###### Create New Graph dropdo   u   � ��                                                                                                                                                                                                                                                                                                                                                                                                                          �y1 !	1�chelseatanPoint(Column/Row) eNpFjkEKwlAQQ/c9RQ6gpa2gB3DhwoUgXuDTju3Qcb7Mn1q8vb9aMGQRHoSkLnGzN1hfQbhDFzxAeCR4jJBgPf1YXa3aILsVbkdczjkNlBPfQWbR8KCUQu7MLAKfTBEnL5oSx6DQ6CB1MiQ31r7Ylf/+U6J7huD03U4SZ8wDKZ6R1Re8PHMXWn9drqdtXR2a/QegKEC7c[�1M�[0 !		�uchelseatanAbout GTAeNpVj0FLA0EMhe/7KyLFkzjDWqx1oIgKLgWlpSy9ythNZ4NrZshksf57p1oPQkgC73vkZalAGTyDHzWCYlbIX1nxAzrMFBg72EeBID71xOGHKNNUl/DgM0JkcNBEuIBm2Za+fdl6Qbt+LMDTyDulyH74s4HGODjYeI6Ch4KsBXMeBf8B4IrSHqMcT68ScvMMxpiqChFGKTr0qslZW99emXo2N3Wp2Y2b19dTG6JNlHAgxjw5s9UG9yjIOwR3cn3SO2VLrCglW1k6PJjUpzslHXCxEgrEg387n943p79f299830vlZLc=c[�'   �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---    7 � 7                                           �	x !	I�%chelseatanformula panel(Y(x)=, Z(u,v)=) eNqVUsFu2zAMvfsrCOySFrE1t1vWGQiGoViHAT0UXS7dpVBs2hYqS4ZINw7gjx/tLu3SZe2mgwhReo9P5LswFimDmrnNlEo/niTp4ixJz5LFW3VeoyXU6mvQbW1ctUJiCYoDomo0MQZ10bmcjXdX3jgGiN5MC0ofms5qaLVDCyPwXBNCmkXxbwuiAXYE8K2A4ellgZQH0043IBdf+hZzxgICUmeZxpygsz26V8+CSAXJYQuFKUsMKKJ/aZ1jBTez/mh5KrjWeobch4A8lhfcyas4Mk7CQfDpS+Afs36+PVry8QPBce5ptj3M807Cd7TSiT+pYL0FrhE4GO0qi+CwZ2A/JR/mcIjy/ShNXuxPzBCsrXZ3MGAIPkCDRLpC2BhrgbvgwHc7hsUzhloTdK7A0jiZ1722Hf4LzQcJK+nRPcpmvauA5CsSjHsyydWoH/tWXEDjedj70BBFf2nGHKwhzqLR5yRG32w2iQ+mMs7qdZL7RhU+V5d6vdL2TgUs1Wfb1nqNbHJt40szOT/2ZbyTQp+4IN+FHFlXS7ptJdvcauMbqqJHvdc4DSnH/ym9Q8eP6Bdq/QQ4WkbZc[���:w !	�5chelseatanFrom/ToeNqFkLFOBDEMRPv9ipGo2RCK07HtiUV0FPcDIWt2I+WSKHYQxX48ziEEVLixPPazRjOHSDxhEymTMfbhfrSH42iP4+HOnDaKTM48VVe2kNYzsWgzUonMxbFQNXNLXkJOLzkkAYaba2Gu+WLOGR05OSbYabj9VRh2fKN4XrD/XC7EvoZy3UAXjx+FvNCCStyicNeUnv68+39WxCrajeHdxUZ4DetKFbK5BLX6Je46E9i7SMhvyE1KE6w9AQSGBhAjQvKVHGsW3eEnNf1jDw==c[��J   ��库。如果想使用Mysql数据库，则需要安装环境并参考下文的数据库配置说明做相应配置。


###安装和配置

	
#### 1、全新安装

- 克隆或者下载代码：
[https://github.com/star7th/showdoc](https://github.com/star7th/showdoc)

- 文件夹权限
	请确保/Application/Runtime 、 /Public/Uploads 、 /Sqlite 有可写权限

#### 2、升级安装

- 下载新代码后，覆盖原来的代码。请注意保留/Public/Uploads里的文件。此目录保存着你上传的图片文件。如果你没有上传过图片，则可忽略之。
- 先备份数据库。然后在浏览器访问http://xxxx.com/index.php?s=/home/update/db ，以升级数据库结构


### 数据库

####1、Sqlite数据库 or Mysql数据库？

 ShowDoc默认使用Sqlite数据库，并且自动集成到/Sqlite目录下。用户下载代码后即可使用，无需再安装其他数据库环境（PHP环境便可支持Sqlite数据库）。
使用Sqlite数据库是为了方便，尤其对非web开发人