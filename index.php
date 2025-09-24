<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebook World - Dive into the world of Ebooks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #6C63FF;
            --secondary: #FF6584;
            --accent: #36D1DC;
            --dark: #2A2A3C;
            --light: #F8F9FC;
            --success: #42B883;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Navigation */
        nav {
            background: linear-gradient(to right, var(--primary), var(--accent));
            color: white;
            padding: 20px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
            color: var(--light);
        }

        .links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            margin: 0 15px;
            transition: all 0.3s ease;
            padding: 8px 5px;
        }

        .links a:hover {
            color: var(--light);
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
        }

        /* Hero Section */
        .sec1 {
            text-align: center;
            padding: 100px 0;
            background: linear-gradient(rgba(108, 99, 255, 0.8), rgba(54, 209, 220, 0.8)), url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect fill="white" opacity="0.2" width="10" height="10"/></svg>');
            color: white;
            border-radius: 0 0 40px 40px;
            margin-bottom: 40px;
        }

        .hero {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Section Headers */
        .logo1 {
            text-align: center;
            font-size: 2.5rem;
            margin: 40px 0;
            color: var(--dark);
            position: relative;
        }

        .logo1:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            margin: 15px auto;
            border-radius: 2px;
        }

        /* Card Sections */
        .sec2, .sec3 {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 60px;
            justify-content: center;
        }

        .card1, .card3 {
            flex: 1;
            min-width: 300px;
            max-width: 350px;
            background: white;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card1:hover, .card3:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .card1 h2, .card3 h2 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .card1 article, .card3 article {
            margin-bottom: 25px;
            color: #666;
        }

        button {
            display: inline-block;
            background: var(--secondary);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 101, 132, 0.4);
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 101, 132, 0.6);
        }

        /* Footer */
        .footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 20px;
            text-align: center;
            margin-top: 60px;
        }

        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
        }

        .footer-content h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
        }

        .footer-content p {
            max-width: 600px;
            margin-bottom: 30px;
        }

        .footer-icons {
            display: flex;
            gap: 20px;
        }

        .footer-icons a {
            color: white;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .footer-icons a:hover {
            color: var(--accent);
        }

        .footer-bottom {
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Responsive Design */
        @media (max-width: 900px) {
            .nav-container {
                flex-direction: column;
                text-align: center;
            }

            .links {
                margin-top: 20px;
            }

            .links a {
                margin: 5px 10px;
            }

            .hero {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .sec2, .sec3 {
                flex-direction: column;
                align-items: center;
            }

            .card1, .card3 {
                width: 100%;
                max-width: 500px;
            }
        }

        @media (max-width: 480px) {
            .hero {
                font-size: 2rem;
            }

            .logo1 {
                font-size: 2rem;
            }

            .links a {
                font-size: 0.9rem;
                margin: 3px 5px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo">
                <i class="fas fa-book-open"></i>
                <span>Ebook World</span>
            </div>
            <div class="links">
                <a href="events.html">Events</a>
                <a href="contact.html">Contact us</a>
                <a href="index.html">Home</a>
                <a href="about.html">About us</a>
                <a href="login.html">Login</a>
                <a href="user/dashboard.html">Dashboard</a>
                <a href="categroies.php">categroies</a>
                <a href="competition.html">Competition</a>
                <a href="cart.html">Cart</a>
            </div>
        </div>
    </nav>

    <section class="sec1">
        <div class="container">
            <h1 class="hero">Dive into the world of Ebooks</h1>
            <p>Discover thousands of books at your fingertips</p>
        </div>
    </section>
     
    <h2 class="logo1">Featured Books</h2>
    <div class="sec2">
        <div class="card1">
            <h2>New Releases</h2>
            <article>Discover our latest additions to the collection. Fresh stories, new authors, and exciting narratives await you in our new releases section.</article>
            <button onclick="redirect()">Explore Now</button>
        </div>
        <div class="card1">
            <h2>Best Sellers</h2>
            <article>See what everyone is reading! Our best sellers collection features the most popular books loved by our community of readers.</article>
            <button onclick="redirect()">Browse Collection</button>
        </div>
        <div class="card1">
            <h2>50% Off Sale</h2>
            <article>Don't miss our limited-time offer! Get premium ebooks at half the price. This sale won't last long, so grab your favorites now.</article>
            <button onclick="redirect()">View Deals</button>
        </div>
    </div>
    
    <h2 class="logo1">Special Offers</h2>
    <div class="sec3">
       <div class="card3">
            <h2>Biggest Prize</h2>
            <article>Enter our annual reading challenge for a chance to win amazing prizes. Read more, earn points, and claim your rewards!</article>
            <button>Learn More</button>
        </div>
       <div class="card3">
            <h2>Global Competition</h2>
            <article>Join readers from around the world in our global reading competition. Test your reading speed and comprehension skills.</article>
            <button>Join Now</button>
        </div>
       <div class="card3">
            <h2>Black Friday</h2>
            <article>Our biggest sale of the year is coming soon! Mark your calendars for incredible discounts on thousands of titles.</article>
            <button>Notify Me</button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <h2 class="logo">Ebook World</h2>
                <p>Dive into the world of ebooks with us. Read, learn, and explore.</p>
                <div class="footer-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                    <a href="#"><i class="fab fa-discord"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Ebook World | All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <script>
        // books collection
        function redirect(){
            window.location.href='categroies.php';
        }
    </script>
</body>
</html>
