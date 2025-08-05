<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>DyavolX – Luxury Streetwear</title>
    <style>
        body { background: #000; color: #fff; font-family: 'Helvetica', sans-serif; }
        .container { max-width: 1600px; margin: 60px auto; padding: 20px; }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .product { text-align: center; }
        .product img {
            width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;
            transition: transform 0.3s; border: 1px solid #333;
        }
        .product:hover img { transform: scale(1.02); }
        .product h3 { font-size: 18px; margin: 10px 0 5px; font-weight: 600; }
        .price { font-size: 22px; color: #f0c808; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center; color:#f0c808; margin-bottom:60px;">DYAVOL<span style="color:white">X</span></h1>

        <div class="product-grid">
            @foreach ($products as $product)
                @foreach ($product->images as $image)
                    <div class="product">
                        <img src="{{ $image->image_url }}" alt="{{ $product->name }}">
                        <h3>{{ $product->name }}</h3>
                        <p class="price">₹{{ number_format($product->price, 2) }}</p>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</body>
</html>