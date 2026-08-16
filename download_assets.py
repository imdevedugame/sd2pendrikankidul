import os
import urllib.request
import urllib.parse

urls = {
    "background.jpg": "http://sdnpendrikanlor02.dikdas.semarangkota.go.id/uploads/gallery/media/background-wallpaper-batik-ok.jpg",
    "kepsek.jpeg": "http://sdnpendrikanlor02.dikdas.semarangkota.go.id/uploads/gallery/media/Rumiati,%20S.Pd.-1622998800.jpeg",
    "gerbang.jpg": "http://sdnpendrikanlor02.dikdas.semarangkota.go.id/uploads/gallery/media/Gerbang%20Sekolah.jpg",
    "simulasi1.jpeg": "http://sdnpendrikanlor02.dikdas.semarangkota.go.id/uploads/gallery/media/Simulasi%20PTM.jpeg",
    "simulasi2.jpeg": "http://sdnpendrikanlor02.dikdas.semarangkota.go.id/uploads/gallery/media/Simulasi%20PTM%20(1).jpeg",
    "rapat1.jpeg": "http://sdnpendrikanlor02.dikdas.semarangkota.go.id/uploads/gallery/media/Rapat%20Persiapan%20PTM.jpeg",
    "rapat2.jpeg": "http://sdnpendrikanlor02.dikdas.semarangkota.go.id/uploads/gallery/media/Rapat%20Persiapan%20PTM%201.jpeg",
    "favicon.jpeg": "https://sdnpendrikanlor02.dikdas.semarangkota.go.id/uploads/school_content/logo/front_fav_icon-60ba5b0d9bf7a8.41269809.jpeg",
    "logo.jpeg": "https://sdnpendrikanlor02.dikdas.semarangkota.go.id/uploads/school_content/logo/front_logo-60bb2fa4f1a6d5.80897051.jpeg",
    "hero.jpeg": "https://sdnpendrikanlor02.dikdas.semarangkota.go.id/uploads/gallery/media/WhatsApp%20Image%202023-05-22%20at%2011.00.31-1684688400.jpeg"
}

os.makedirs("public/images", exist_ok=True)

for filename, url in urls.items():
    print(f"Downloading {filename}...")
    try:
        # Create a request object with a User-Agent header
        req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
        with urllib.request.urlopen(req) as response:
            with open(os.path.join("public/images", filename), 'wb') as f:
                f.write(response.read())
        print(f"Successfully downloaded {filename}")
    except Exception as e:
        print(f"Failed to download {url}: {e}")

print("All downloads finished.")
