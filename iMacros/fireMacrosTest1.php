
VERSION BUILD=1001 RECORDER=CR
URL GOTO=https://affiliate-program.amazon.com/home
TAB OPEN
TAB T=2
URL GOTO=chrome://newtab/
URL GOTO=http://localhost:8000/mattysPortal.php
TAB T=1
TAG POS=1 TYPE=INPUT:SEARCH FORM=ACTION:https://affiliate-program.amazon.com/home ATTR=ID:ac-quicklink-search-product-field CONTENT=#_ASIN_#
TAG POS=1 TYPE=INPUT:SUBMIT FORM=ACTION:https://affiliate-program.amazon.com/home ATTR=*
TAG POS=2 TYPE=A ATTR=TXT:Get<SP>link
TAG POS=1 TYPE=INPUT:SUBMIT ATTR=*
TAB T=2
TAG POS=1 TYPE=SELECT FORM=ACTION:db_conn_portal.php ATTR=NAME:catName CONTENT=%Electronics,<SP>Computers<SP>&<SP>Office
TAG POS=1 TYPE=SELECT FORM=ACTION:db_conn_portal.php ATTR=NAME:subCatName CONTENT=%Computers<SP>&<SP>Tablets
TAG POS=1 TYPE=SELECT FORM=ACTION:db_conn_portal.php ATTR=NAME:productCatName CONTENT=%Laptops
TAG POS=1 TYPE=SELECT FORM=ACTION:db_conn_portal.php ATTR=NAME:className CONTENT=%Shopping
TAG POS=1 TYPE=INPUT:TEXT FORM=ACTION:db_conn_portal.php ATTR=NAME:productName CONTENT=Laptop<SP>Imacros<SP>Test
TAG POS=1 TYPE=INPUT:TEXT FORM=ACTION:db_conn_portal.php ATTR=NAME:affilCompanyName CONTENT=AmazonImacrosTest
TAG POS=1 TYPE=TEXTAREA FORM=ACTION:db_conn_portal.php ATTR=NAME:affilAdCode CONTENT=<iframe<SP>style="width:120px;height:240px;"<SP>marginwidth="0"<SP>marginheight="0"<SP>scrolling="no"<SP>frameborder="0"<SP>src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=mattysbins86-20&marketplace=amazon&region=US&placement=B077R3YDV6&asins=B077R3YDV6&linkId=9834e3f9092e2a6ac2463254c9b96422&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff"><BR><SP><SP><SP><SP></iframe>
TAG POS=1 TYPE=BUTTON FORM=ACTION:db_conn_portal.php ATTR=NAME:submit
