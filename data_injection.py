import MySQLdb

db = MySQLdb.connect("localhost","root","", "opencart" )

data = open('database.txt', 'r')
vertical = data.readline() #vertical placement of design on sample image (int)
color = data.readline() #color shirt that design is to be printed on
name = data.readline() #name of product for storefront
name = name.rstrip()
price = data.readline() #price of product in store (int)
description = data.readline() #description for storefront 
size = data.readline() #width and height of image (int)
stype = "gildan-ultra-cotton-t-shirt" #this will always be the same, constant

designidtext = open('designid.txt', 'r')
desid = designidtext.readline()

meta_description = "product" 
metatitle = "product"
meta_keyword = "product"
tag = "product"

NULL = "" #shouldn't this be obvious? 

placeholder = name
placeholder = placeholder.replace(" ", "")
placeholder = placeholder.lower()
image = str("catalog/") + str(placeholder) + str(".png")

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
if len(price) == 2:
    price = price + str('.0000')
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

product_option = "INSERT INTO `opencart`.`oc_product_option` (`product_option_id`, `product_id`, `option_id`, `value`, `required`) VALUES ('0', %s, '11', '', '1')";

cursor.execute(product_option, (id))

row_id = cursor.lastrowid

option_value_1 = "INSERT INTO `opencart`.`oc_product_option_value` (`product_option_value_id`, `product_option_id`, `product_id`, `option_id`, `option_value_id`, `quantity`, `subtract`, `price`, `price_prefix`, `points`, `points_prefix`, `weight`, `weight_prefix`) VALUES ('0', %s, %s, '11', %s, '1000', '1', '0.0000', '+', '0', '+', '0.00000000', '+');"

cursor.execute(option_value_1, (row_id, id, 50))
cursor.execute(option_value_1, (row_id, id, 49))
cursor.execute(option_value_1, (row_id, id, 48))
cursor.execute(option_value_1, (row_id, id, 47))
cursor.execute(option_value_1, (row_id, id, 46))
cursor.execute(option_value_1, (row_id, id, 51))
cursor.execute(option_value_1, (row_id, id, 52))
cursor.execute(option_value_1, (row_id, id, 53))

#add sizes 
