# Create and Apply Patch in Magento 2

- create two file 1 is for orignal code and other one is changes file like

	Colletion_o.php   Colletion.php
	
-  create patch file form above both file for that run below cmd go to that path and run	

	diff -u Colletion_o.c Colletion.c > patch_file_name.patch
	
	ex  cd vendor/magento/blog/Model/ResourceModel/Posts
	ex diff -u Collection_o.php Collection.php > collection.patch
	
- download that file and make it same as orignal means remove new file download created patch file	

- open downloaded patch file in notepad++ add magento root path to its location file path in it 

	a/vendor/amasty/blog/Model/ResourceModel/Posts/Collection.php 
    b/vendor/amasty/blog/Model/ResourceModel/Posts/Collection.php
	https://www.screencast.com/t/SS0sES6L9EJK

- now goto magento 2 root directory and find folder like m2-hotfixes

	if not than make it and upload patch file in it. and run following cmd in ssh 
	
	git apply m2-hotfixes/PATCH_FILE.patch 
	
	Example :
	git apply m2-hotfixes/amasty_blog_search_query_issue_fix_1.2.3.patch
