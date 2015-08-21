import Image
import cairo
import rsvg
from sys import argv
from os.path import exists
import getopt

data = open('database.txt', 'r')

vertical = data.readline() #vertical placement of design on sample image (int)
color = data.readline() #color shirt that design is to be printed on
name = data.readline() #name of product for storefront
price = data.readline() #price of product in store (int)
description = data.readline() #description for storefront 
size = data.readline() #width and height of image (int)
file = data.readline() #name of svg

file = "alignment.svg" 

height = 400
width = 400

file = str (file)
output = "output"
height = int (height)
width = int (width) 

svg = rsvg.Handle (file = file)

if file[-4:] == ".svg":
    file = file[:-4]
    output = "%s.png" % file
    base = "%s%d.png"
    i = 1
while exists (output):
    output = base % (file, i)
    i += 1
 
if width == 0 and height == 0:
    width = svg.props.width
    height = svg.props.width

elif width != 0:
    ratio = float (width) / svg.props.width
    height = int (ratio * svg.props.height)

elif height != 0:
    ratio = float (height) / svg.props.height
    width = int (ratio * svg.props.width)
 
surface = cairo.ImageSurface (cairo.FORMAT_ARGB32, width, height)
cr = cairo.Context (surface)
 
wscale = float (width) / svg.props.width
hscale = float (height) / svg.props.height
 
cr.scale (wscale, hscale)
 
svg.render_cairo (cr)
 
surface.write_to_png (output)

vertical = 400

size = 100, 100

length = size[0]

color = "Daisy"

shirt = color + str(".png")

background = Image.open(shirt)
foreground = Image.open(file + str(".png") )

foreground.thumbnail(size, Image.ANTIALIAS)
#foreground.save("thumb.png")

horzontial = (290) - (length / 2) + (10)

print horzontial 

background.paste(foreground, (horzontial, vertical), foreground)
#background.show()

background.save(name + str("top") + str(".png") )
