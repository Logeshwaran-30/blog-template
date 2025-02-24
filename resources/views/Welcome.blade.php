<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
    <style>
            body {
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            padding: 50px;
            background: linear-gradient(-45deg, #222831, #393E46, #00ADB5,#FF69B4, #C71585, #800080, #4B0082);
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        h1 { font-size: 3rem; font-weight: bold; color: #FF5722; }
        h2 { font-size: 2.5rem; font-weight: bold; color: #FFD369; }
        h3 { font-size: 2rem; font-weight: bold; color: #FFD369; }

        .container {
            margin-top: 30px;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            margin: auto;
        }

        .blog-link { 
            color: #FFD369; 
            text-decoration: none;
            font-size: 1.4rem;
            display: inline-block;
            margin-top: 20px;
            transition: transform 0.3s;
        }

        .blog-link:hover {
            transform: scale(1.1);
        }

        .section {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            margin: 20px auto;
            border-radius: 10px;
            width: 80%;
            text-align: left;
        }

        .section p, .section ul {
            font-size: 1.2rem;
            line-height: 1.6;
        }

        .info ul {
            list-style-type: square;
            padding-left: 20px;
        }

        .info a {
            color: #FFD369;
            text-decoration: none;
            font-weight: bold;
        }

        .info a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Welcome to My Laravel Blog 🚀</h1>

    <div class="container">
        <p>Laravel is a powerful and elegant PHP framework that helps developers build modern web applications. 
        It provides an expressive syntax, built-in authentication, and efficient routing.</p>
        <p>Explore our latest articles, tips, and tutorials on Laravel development!</p>

        <a href="{{ route('posts.all') }}" class="blog-link">Explore Blogs →</a>
    </div>

    <div class="section">
        <h2>What is PHP, Laravel, and React?</h2>
        <div class="info">
            <h3>PHP</h3>
            <p>PHP (Hypertext Preprocessor) is a popular server-side scripting language used for web development. It is widely used for building dynamic websites and web applications.</p>

            <h3>Laravel</h3>
            <p>Laravel is a PHP framework designed to simplify web application development. It offers a clean and elegant syntax, built-in authentication, routing, and database management.</p>

            <h3>React</h3>
            <p>React is a JavaScript library developed by Facebook for building fast and interactive user interfaces. It is widely used in web development, especially for Single Page Applications (SPAs).</p>
        </div>
    </div>

    <div class="section">
        <h2>Laravel Framework</h2>
        <div class="info">
            <p>Laravel is an open-source PHP framework designed to make web development faster and more enjoyable. It comes with built-in authentication, routing, and ORM (Eloquent) for database management.</p>
            <p><strong>Key Features:</strong></p>
            <ul>
                <li>Elegant syntax</li>
                <li>Blade templating engine</li>
                <li>Powerful routing system</li>
                <li>Built-in authentication and security</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>PHP: The Language Behind Laravel</h2>
        <div class="info">
            <p>PHP (Hypertext Preprocessor) is a widely-used server-side scripting language for web development. Laravel is built on PHP, making it one of the most robust web development tools.</p>
            <p><strong>Latest PHP Features:</strong></p>
            <ul>
                <li>JIT Compiler for better performance</li>
                <li>Named arguments and attributes</li>
                <li>Improved error handling</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>React: A Powerful Frontend Library</h2>
        <div class="info">
            <p>React.js is a JavaScript library used for building modern and interactive user interfaces. Many Laravel developers use React for creating dynamic and fast front-end applications.</p>
            <p><strong>Why Use React with Laravel?</strong></p>
            <ul>
                <li>Component-based architecture</li>
                <li>Fast rendering with Virtual DOM</li>
                <li>Great for Single Page Applications (SPAs)</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Official Documentation</h2>
        <div class="info">
            <p>Want to learn more? Check out the official documentation:</p>
            <ul>
                <li><a href="https://laravel.com/docs" target="_blank">Laravel Docs</a></li>
                <li><a href="https://www.php.net/docs.php" target="_blank">PHP Docs</a></li>
                <li><a href="https://react.dev/" target="_blank">React Docs</a></li>
            </ul>
        </div>
    </div>

</body>
</html>
