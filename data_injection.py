import MySQLdb

db = MySQLdb.connect("localhost","root","","opencart" )
import random

cursor = db.cursor()

oc_product = ("INSERT INTO oc_product "
                 "(product_id, model, sku, upc, ean, jan, isbn, mpn, location, quantity, stock_status_id, image, manufacturer_id, shipping, price, points, tax_class_id, date_available, weight, weight_class_id, length, width, height, length_class_id, subtract, minimum, sort_order, status, viewed, date_added, date_modified) "
                 "VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)")

oc_product_description = ("INSERT INTO oc_product_desription "
                             "() "
                             "VALUES (%s, %s, %s, %s, %s, %s, %s, %s)")
NULL = ""
id = random.getrandbits(8)
print id
data_oc_product = (id, 1, (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL), (NULL)) 

cursor.execute(oc_product, data_oc_product)

