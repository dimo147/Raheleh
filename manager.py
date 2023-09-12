import pysftp
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="yourusername",
  password="yourpassword"
)

print(mydb)

# srv = pysftp.Connection(host="www.destination.com", username="root",
# password="password",log="./pysftp.log")

# with srv.cd('/'):
#     srv.get('remote_file')

# srv.close()
