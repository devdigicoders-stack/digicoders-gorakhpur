import shutil
from PIL import Image

src_path = r"C:\Users\Saurabh kumar\.gemini\antigravity-ide\brain\bb333289-641b-4817-a51e-ada107a7c13f\media__1781870953632.png"
dest_logo_square = r"e:\xampp\htdocs\digicoders-gorakhpur\public\assets\images\logo-square.png"

# Copy source image to the assets folder for reference
shutil.copy(src_path, dest_logo_square)
print(f"Copied uploaded image to {dest_logo_square}")

# Open the image
img = Image.open(dest_logo_square)

# Generate different sizes for favicon.ico
sizes = [16, 32, 48, 64, 128, 256]
icon_images = []
for size in sizes:
    icon_images.append(img.resize((size, size), Image.Resampling.LANCZOS))

# Save as favicon.ico
ico_path = 'e:/xampp/htdocs/digicoders-gorakhpur/public/favicon.ico'
icon_images[0].save(ico_path, format='ICO', append_images=icon_images[1:], sizes=[(s, s) for s in sizes])
print(f"Saved favicon.ico to {ico_path}")

# Save as high-res PNG for modern link tags
png_path = 'e:/xampp/htdocs/digicoders-gorakhpur/public/assets/images/favicon.png'
img.resize((192, 192), Image.Resampling.LANCZOS).save(png_path, format='PNG')
print(f"Saved favicon.png to {png_path}")
