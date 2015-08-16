#!/usr/bin/python
 
import Image
import cairo
import rsvg
from sys import argv
from os.path import exists
import getopt

file = "something.svg"
output = "output.png"
color = "red"
height = 400
width = 400

file = str (file)
output = str (output)
height = int (height)
width = int (width) 

print file
print output
print height
print width

svg = rsvg.Handle (file = file)
 
try:
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
    
    background = Image.open("shirt_%s.png" % color)
    overlay = Image.open(output)

    background = background.convert("RGBA")
    overlay = overlay.convert("RGBA")

    new_img = Image.blend(background, overlay, 0.5)
    new_img.save(output + "_final","PNG")
except:
    print "failure"
