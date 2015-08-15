import MySQLdb

db = MySQLdb.connect("localhost","root","password","database" )

cursor = db.cursor()

cursor.execute("SELECT * FROM ......

do stuff
do more stuff
