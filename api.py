import os 
import sys
import random 

name = "T e    st PrOdUCt"
name = name.replace(" ", "")
name = name.lower()

image = name + str (".eps")

width = 6

command = '"' +str("curl") + str(' "') + str("https://api.scalablepress.com/v2/design") + str(" \\") + str(" -u "  ) + str('":APIKEY"') + str(" \\ ") + str("-F ") +str('"type=screenprint"') + str(" \\ ") + str("-F ") + str('"sides[front][artwork]=@') + str(image) + str('"') + str(" \\ ") + str("-F ") + str('"sides[front][colors][0]=white"') + str( ' \\ ' ) + str('-F ') + str('"sides[front][dimensions][width]=') + str(width) + str('"') + str (' \\ ')

print command 

#os.system(command)
	
