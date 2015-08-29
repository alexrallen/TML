import os 
import sys
import random 

name = "T e    st PrOdUCt"
name = name.replace(" ", "")
name = name.lower()

image = name + str (".eps")

width = 6
vertical = 2.5

command = ("curl") + str(' "') + str("https://api.scalablepress.com/v2/design") + str(" \\") + str(" -u "  ) + str('":APIKEY"') + str(" \\ ") + str("-F ") +str('"type=screenprint"') + str(" \\ ") + str("-F ") + str('"sides[front][artwork]=@') + str(image) + str('"') + str(" \\ ") + str("-F ") + str('"sides[front][colors][0]=white"') + str( ' \\ ' ) + str('-F ') + str('"sides[front][dimensions][width]=') + str(width) + str('"') + str (' \\ ') + str('-F ') +str('"sides[front][position][horizontal]=C"') + str(' \\ ') + str('-F ') + str('"sides[front][position][offset][top]=') + str(vertical) + str('"')
print command 

#os.system(command)

curl "https://api.scalablepress.com/v2/design \ -u ":APIKEY" \ -F "type=screenprint" \ -F "sides[front][artwork]=@testproduct.eps" \ -F "sides[front][colors][0]=white" \ -F "sides[front][dimensions][width]=6" \ -F "sides[front][position][horizontal]=C" \ -F "sides[front][position][offset][top]=2.5"

^ Command Output

> curl "https://api.scalablepress.com/v2/design" \ -u ":YOURAPIKEY" \ -F "type=screenprint" \ -F "sides[front][artwork]=@image.eps" \ -F "sides[front][colors][0]=white" \ -F "sides[front][dimensions][width]=5" \ -F "sides[front][position][horizontal]=C" \ -F "sides[front][position][offset][top]=2.5" 
