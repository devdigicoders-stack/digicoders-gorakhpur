from PIL import Image

img = Image.open(r"C:\Users\Saurabh kumar\.gemini\antigravity-ide\brain\bb333289-641b-4817-a51e-ada107a7c13f\media__1781870953632.png")
print("Image size:", img.size)
print("Image mode:", img.mode)

# Check corner pixel color to see if it is transparent or white
pixels = img.convert("RGBA")
corner_pixels = [
    pixels.getpixel((0, 0)),
    pixels.getpixel((0, img.height - 1)),
    pixels.getpixel((img.width - 1, 0)),
    pixels.getpixel((img.width - 1, img.height - 1))
]
print("Corner pixels:", corner_pixels)
