<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Ebook World</title>
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
        .categories-hero {
            text-align: center;
            padding: 80px 0;
            background: linear-gradient(rgba(108, 99, 255, 0.8), rgba(54, 209, 220, 0.8)), url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect fill="white" opacity="0.2" width="10" height="10"/></svg>');
            color: white;
            border-radius: 0 0 40px 40px;
            margin-bottom: 40px;
        }

        .page-title {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .page-subtitle {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .search-bar {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
        }

        .search-input {
            flex: 1;
            padding: 15px 20px;
            border: none;
            border-radius: 30px 0 0 30px;
            font-size: 1rem;
        }

        .search-button {
            background: var(--secondary);
            color: white;
            border: none;
            padding: 15px 25px;
            border-radius: 0 30px 30px 0;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-button:hover {
            background: #ff4d72;
        }

        /* Categories Grid */
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .category-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .category-header {
            padding: 25px 25px 0;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .category-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .category-title {
            font-size: 1.5rem;
            color: var(--dark);
        }

        .category-content {
            padding: 0 25px 25px;
            flex: 1;
        }

        .category-description {
            color: #666;
            margin-bottom: 20px;
        }

        .category-stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            color: #777;
        }

        .category-button {
            display: block;
            text-align: center;
            background: var(--primary);
            color: white;
            padding: 12px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(108, 99, 255, 0.4);
        }

        .category-button:hover {
            background: #5a52e0;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(108, 99, 255, 0.6);
        }

        /* Featured Section */
        .featured-section {
            background: linear-gradient(to right, var(--primary), var(--accent));
            color: white;
            padding: 60px 0;
            border-radius: 40px;
            margin-bottom: 60px;
            text-align: center;
        }

        .featured-section h2 {
            font-size: 2.2rem;
            margin-bottom: 30px;
        }

        .featured-books {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-bottom: 30px;
        }

        .featured-book {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 15px;
            width: 150px;
            transition: all 0.3s ease;
        }

        .featured-book:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.2);
        }

        .featured-book img {
            width: 100%;
            height: 190px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .featured-book-title {
            font-size: 0.9rem;
            font-weight: 600;
        }

        .view-all-button {
            display: inline-block;
            background: var(--secondary);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 101, 132, 0.4);
        }

        .view-all-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 101, 132, 0.6);
        }

        /* Footer */
        .footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 20px;
            text-align: center;
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

            .page-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .categories-grid {
                grid-template-columns: 1fr;
            }

            .search-bar {
                flex-direction: column;
                gap: 15px;
            }

            .search-input, .search-button {
                border-radius: 30px;
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                font-size: 2rem;
            }

            .page-subtitle {
                font-size: 1rem;
            }

            .links a {
                font-size: 0.9rem;
                margin: 3px 5px;
            }

            .category-header {
                flex-direction: column;
                text-align: center;
            }

            .category-icon {
                margin-right: 0;
                margin-bottom: 15px;
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
                <a href="categories.html">Categories</a>
                <a href="competition.html">Competition</a>
                <a href="cart.html">Cart</a>
            </div>
        </div>
    </nav>

    <section class="categories-hero">
        <div class="container">
            <h1 class="page-title">Explore Categories</h1>
            <p class="page-subtitle">Discover books from various genres and find your next favorite read from our extensive collection.</p>
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search for categories, topics, or authors...">
                <button class="search-button">Search</button>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="categories-grid">
            <!-- Fiction Category -->
            <div class="category-card">
                <div class="category-header">
                    <div class="category-icon" style="background: rgba(108, 99, 255, 0.2); color: var(--primary);">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="category-title">Fiction</h3>
                </div>
                <div class="category-content">
                    <p class="category-description">Explore imaginative stories, novels, and literary works from talented authors around the world.</p>
                    <div class="category-stats">
                        <span><i class="fas fa-book"></i> 12,458 books</span>
                        <span><i class="fas fa-star"></i> 4.8/5</span>
                    </div>
                    <a href="books.php" class="category-button">Browse Fiction</a>
                </div>
            </div>
            
            <!-- Non-Fiction Category -->
            <div class="category-card">
                <div class="category-header">
                    <div class="category-icon" style="background: rgba(255, 101, 132, 0.2); color: var(--secondary);">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="category-title">Non-Fiction</h3>
                </div>
                <div class="category-content">
                    <p class="category-description">Fact-based books including biographies, history, self-help, and educational materials.</p>
                    <div class="category-stats">
                        <span><i class="fas fa-book"></i> 8,742 books</span>
                        <span><i class="fas fa-star"></i> 4.7/5</span>
                    </div>
                    <a href="#" class="category-button">Browse Non-Fiction</a>
                </div>
            </div>
            
            <!-- Science Fiction Category -->
            <div class="category-card">
                <div class="category-header">
                    <div class="category-icon" style="background: rgba(54, 209, 220, 0.2); color: var(--accent);">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="category-title">Science Fiction</h3>
                </div>
                <div class="category-content">
                    <p class="category-description">Journey to distant galaxies, future worlds, and alternate realities with our sci-fi collection.</p>
                    <div class="category-stats">
                        <span><i class="fas fa-book"></i> 5,321 books</span>
                        <span><i class="fas fa-star"></i> 4.9/5</span>
                    </div>
                    <a href="#" class="category-button">Browse Sci-Fi</a>
                </div>
            </div>
            
            <!-- Mystery & Thriller Category -->
            <div class="category-card">
                <div class="category-header">
                    <div class="category-icon" style="background: rgba(42, 42, 60, 0.2); color: var(--dark);">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="category-title">Mystery & Thriller</h3>
                </div>
                <div class="category-content">
                    <p class="category-description">Suspenseful stories that will keep you on the edge of your seat until the very last page.</p>
                    <div class="category-stats">
                        <span><i class="fas fa-book"></i> 7,893 books</span>
                        <span><i class="fas fa-star"></i> 4.6/5</span>
                    </div>
                    <a href="#" class="category-button">Browse Mystery</a>
                </div>
            </div>
            
            <!-- Romance Category -->
            <div class="category-card">
                <div class="category-header">
                    <div class="category-icon" style="background: rgba(255, 101, 132, 0.2); color: var(--secondary);">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="category-title">Romance</h3>
                </div>
                <div class="category-content">
                    <p class="category-description">Heartwarming love stories and passionate tales of relationships and connections.</p>
                    <div class="category-stats">
                        <span><i class="fas fa-book"></i> 9,567 books</span>
                        <span><i class="fas fa-star"></i> 4.5/5</span>
                    </div>
                    <a href="#" class="category-button">Browse Romance</a>
                </div>
            </div>
            
            <!-- Business & Finance Category -->
            <div class="category-card">
                <div class="category-header">
                    <div class="category-icon" style="background: rgba(66, 184, 131, 0.2); color: var(--success);">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="category-title">Business & Finance</h3>
                </div>
                <div class="category-content">
                    <p class="category-description">Learn about entrepreneurship, investing, management, and personal finance strategies.</p>
                    <div class="category-stats">
                        <span><i class="fas fa-book"></i> 6,234 books</span>
                        <span><i class="fas fa-star"></i> 4.7/5</span>
                    </div>
                    <a href="#" class="category-button">Browse Business</a>
                </div>
            </div>
            
            <!-- Technology Category -->
            <div class="category-card">
                <div class="category-header">
                    <div class="category-icon" style="background: rgba(108, 99, 255, 0.2); color: var(--primary);">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="category-title">Technology</h3>
                </div>
                <div class="category-content">
                    <p class="category-description">Stay updated with the latest in programming, AI, cybersecurity, and tech innovations.</p>
                    <div class="category-stats">
                        <span><i class="fas fa-book"></i> 4,876 books</span>
                        <span><i class="fas fa-star"></i> 4.8/5</span>
                    </div>
                    <a href="#" class="category-button">Browse Technology</a>
                </div>
            </div>
            
            <!-- Self-Help Category -->
            <div class="category-card">
                <div class="category-header">
                    <div class="category-icon" style="background: rgba(54, 209, 220, 0.2); color: var(--accent);">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="category-title">Self-Help</h3>
                </div>
                <div class="category-content">
                    <p class="category-description">Books to help you improve your life, develop new skills, and achieve personal growth.</p>
                    <div class="category-stats">
                        <span><i class="fas fa-book"></i> 5,432 books</span>
                        <span><i class="fas fa-star"></i> 4.6/5</span>
                    </div>
                    <a href="#" class="category-button">Browse Self-Help</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="featured-section">
        <div class="container">
            <h2>Featured This Month</h2>
            <div class="featured-books">
                <div class="featured-book">
                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='150' height='190' viewBox='0 0 150 190'><rect width='150' height='190' fill='%236C63FF'/><text x='75' y='95' font-family='Arial' font-size='12' fill='white' text-anchor='middle' dominant-baseline='middle'>Book 1</text></svg>" alt="Featured Book">
                    <div class="featured-book-title">The Innovation</div>
                </div>
                <div class="featured-book">
                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='150' height='190' viewBox='0 0 150 190'><rect width='150' height='190' fill='%23FF6584'/><text x='75' y='95' font-family='Arial' font-size='12' fill='white' text-anchor='middle' dominant-baseline='middle'>Book 2</text></svg>" alt="Featured Book">
                    <div class="featured-book-title">Ocean Secrets</div>
                </div>
                <div class="featured-book">
                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='150' height='190' viewBox='0 0 150 190'><rect width='150' height='190' fill='%2336D1DC'/><text x='75' y='95' font-family='Arial' font-size='12' fill='white' text-anchor='middle' dominant-baseline='middle'>Book 3</text></svg>" alt="Featured Book">
                    <div class="featured-book-title">Future Tech</div>
                </div>
                <div class="featured-book">
                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='150' height='190' viewBox='0 0 150 190'><rect width='150' height='190' fill='%2342B883'/><text x='75' y='95' font-family='Arial' font-size='12' fill='white' text-anchor='middle' dominant-baseline='middle'>Book 4</text></svg>" alt="Featured Book">
                    <div class="featured-book-title">Mindful Living</div>
                </div>
            </div>
            <a href="#" class="view-all-button">View All Featured Books</a>
        </div>
    </div>

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
        // Simple search functionality
        document.querySelector('.search-button').addEventListener('click', function() {
            const searchTerm = document.querySelector('.search-input').value;
            if (searchTerm.trim() !== '') {
                alert(`Searching for: ${searchTerm}`);
            } else {
                alert('Please enter a search term');
            }
        });

        // Enter key support for search
        document.querySelector('.search-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                document.querySelector('.search-button').click();
            }
        });

        // Category card hover effect enhancement
        document.querySelectorAll('.category-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>