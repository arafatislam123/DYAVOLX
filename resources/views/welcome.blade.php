<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>DyavolX – In a world of sheep, be a wolf.</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: #000; color: #fff; font-family: 'Helvetica', sans-serif; }
        .fullscreen { width: 100vw; height: 100vh; object-fit: cover; }
        .hero { background: url('https://dyavolx.com/cdn/shop/files/2010-2620.jpg?v=1735214049&width=1080') no-repeat center center; background-size: cover; }
        .red-section {
            background: #c12127;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .red-section h1 {
            font-size: 5rem;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background: #000;
            color: #f0c808;
            text-decoration: none;
            font-weight: bold;
            border: 2px solid #f0c808;
            border-radius: 4px;
            transition: all 0.3s;
        }
        .btn:hover {
            background: #f0c808;
            color: #000;
        }
        @media (max-width: 768px) {
            .red-section h1 { font-size: 3rem; }
        }
    </style>
</head>
<body>

    <!-- Fullscreen Hero -->
    <div class="hero fullscreen"></div>

    <!-- Red Statement -->
    <div class="red-section fullscreen">
        <div>
            <h1>In a world of sheep, be a wolf.</h1>
            <a href="/products" class="btn">SHOP NOW</a>
        </div>
    </div>

    <!-- Products Section -->
    <script>
        // After red section, redirect to /products or load dynamically
        // Or keep scrolling to products
    </script>

</body>
</html>