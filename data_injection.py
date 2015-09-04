import MySQLdb

db = MySQLdb.connect("localhost","root","", "opencart" )

#need to define these variables....
stype = "gildan-ultra-cotton-t-shirt"
color = "Black"
desid = "55a03015c4bdad6330c430c1"

meta_description = "meta_description" 
metatitle = "product"
meta_keyword = "product"
description = "product description"
tag = "product"

#with open('data.txt') as f:
 #   dat = []
  #  while True:
   #     line = list(islice(f, 10)) 
    #    if line:                     
     #       lines.append(line)  
      #  else:
       #     break
   # print lines    

NULL = "" #shouldn't this be obvious? 

name = "1cOOl Product"
name = name.replace(" ", "")
name = name.lower()
image = "catalog/" + str(name) + str(".png")

data = open('id.txt', 'r')
id = data.readline()
newid = int(id) + 1
data.close()
data = open("id.txt", 'w')
newid = str(newid)
data.write(newid)
data.close()

price = 19
price = str(price)
if len(price) == 5:
    price = price + str('00')
    print price 
if len(price) == 2:
    price = price + str('.0000')
    print price 
price = str(price) 

cursor = db.cursor()

oc_product = ("INSERT INTO oc_product "
"(product_id, model, \
sku, upc, \
ean, jan, \
isbn, mpn, \
location, quantity, \
stock_status_id, image, \
manufacturer_id, shipping, \
price, points, \
tax_class_id, date_available, \
weight, weight_class_id, \
length, width, \
height, length_class_id, \
subtract, minimum, \
sort_order, status, \
viewed, date_added, \
date_modified)"

                 "VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)")

data_oc_product = (id, 1, \
(NULL), (NULL),\
(NULL), (NULL),\
(NULL), (NULL), \
(NULL), (1000), \
(5), (image),\
(0), (1),\
(price), (0), \
(0), ("2015-06-26"), \
(0), (1), \
(0.00000000), (0.00000000), \
(0.00000000), (1),\
(0), (1),\
(1), (1),\
(0), ("2015-07-10 20:47:30"),\
("2015-07-10 20:47:30"))

#Add Metadata

oc_attrb = ("INSERT INTO oc_product_attribute "
		"(product_id, attribute_id, language_id, text) "
		"VALUES (%s, %s, %s, %s)")
		
oc_product_description = ("INSERT INTO oc_product_description "
                             "(product_id, language_id, name, description, tag, meta_title, meta_description, meta_keyword)"
"VALUES (%s, %s, %s, %s, %s, %s, %s, %s)")

data_oc_product_description = (id, 1, name, description, tag, metatitle, meta_description, meta_keyword)

oc_product_to_store = ("INSERT INTO oc_product_to_store "
                         "(product_id, store_id)"
   "VALUES (%s, %s)")
 
data_oc_product_to_store = (id, 0)

data_oc_attrb_shirt = (id, 13, 1, (stype))
data_oc_attrb_color = (id, 12, 1, (color))
data_oc_attrb_design = (id, 14, 1, (desid))

cursor.execute(oc_product, data_oc_product)
cursor.execute(oc_attrb, data_oc_attrb_color)
cursor.execute(oc_attrb, data_oc_attrb_shirt)
cursor.execute(oc_attrb, data_oc_attrb_design)
cursor.execute(oc_product_description, data_oc_product_description)

cursor.execute(oc_product_to_store, data_oc_product_to_store)

#Add Sizes


