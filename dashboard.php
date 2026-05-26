<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Lost & Found</title>

    <link rel="stylesheet" type="text/css" href="assets/css/dashboard.css" />

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>

    <header class="navbar">

        <div class="nav-container">

            <div class="logo-section">

                <span class="material-symbols-outlined logo-icon">
                    search_check
                </span>

                <h2>Smart Lost & Found</h2>

            </div>

            <nav class="nav-links">

                <a href="#">Home</a>
                <a href="#">Search</a>

                <a href="login.php" class="login-btn">
                    Login
                </a>
                <a href="register.php" class="register-btn">
                    Register
                </a>
            </nav>
        </div>
    </header>


    <section class="hero-section">

        <div class="hero-content">

            <div class="hero-text">

                <div class="tag">
                    Official University Platform
                </div>

                <h1>
                    Find Lost Items Easily
                </h1>

                <p>
                    A dedicated platform for students and staff to report and recover lost belongings safely and
                    efficiently.
                </p>

                <div class="hero-buttons">

                    <a href="upload-item.php" class="primary-btn">
                        Report Lost Item
                    </a>

                    <a href="upload-item.php" class="secondary-btn">
                        Report Found Item
                    </a>

                </div>

            </div>

            <div class="hero-image">

                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsM_u4-kRkS6bhCDrWcaAKHLrgEAyY64XpTPgCHGBA4uKyUkDEcjPxFLvtoJidlUGvAL4FOczqi1Ru1hgbhZj3MVEyMRc1IwzbKslDEspH4oo21VrU7LzDnwjRMG4AJC1X_rpRGTyl_d7hYpZtKUx2hrwvHXGtqVI0zdzxVfyX1f0xc2mrLgWpFApC_22yhIixjCdxY6HMl9i1h2RIRx2PNaz_kAwxKQQCVIBQUA9h1sKL37wq_fGzl45MKAFAVKg6wMUR2V39gNhe"
                    alt="Student" />

            </div>

        </div>

    </section>

    <!-- SEARCH SECTION -->

    <section class="search-section">

        <div class="search-container">

            <input type="text" placeholder="Search for lost items..." />

            <select>
                <option>All Locations</option>
                <option>Library</option>
                <option>Gym</option>
                <option>Engineering Hall</option>
            </select>

            <button class="search-btn">
                Search
            </button>

        </div>

    </section>

    <!-- ITEMS SECTION -->

    <section class="items-section">

        <div class="section-title">

            <h2>Latest Items</h2>

            <p>Recently reported items across campus</p>

        </div>

        <div class="item-grid">

            <!-- CARD 1 -->

            <div class="item-card">

                <div class="item-image">

                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPoJETwIduQCgT8QubF7PvVsuxr1Td2b4iezP9fBY0RfJvlMi1MDjZg22Lvo_zNlxTjvRe5vSiWLR00Fs52RBS_jp7DgRUeYN6m7N5wvbP6kha-7GhtJ3GHgR9in4zZLJvg0NFJtUYq641DyQeJNmSNlKm9ud-gwxNvOufk6rS7I1rIa9F4Df1dbtJUXopoTqlx9dvSs2YlODOerc85oANFYN1go5a8XKTzT7PAvl6uUQWe9gxE0TMIe26ULPuvdZqasgmmY0PQyPw"
                        alt="Keys" />

                    <span class="lost-badge">
                        Lost
                    </span>

                </div>

                <div class="item-content">

                    <h3>House Keys</h3>

                    <p>Location: Central Library</p>

                    <p>2 hours ago</p>

                </div>

            </div>

            <!-- CARD 2 -->

            <div class="item-card">

                <div class="item-image">

                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnquWJBfB81uo_BybuOPfuVKZh-5gC8tSWReF7aoJ-BgcGo-z4MofEyAkmL-QLbVteS_R33WU5ULZ6_xVfbZ-bbYhAQ6yXE1KXwEJoSmwPJIkQbwYZe7jvKgRxxyoQKD6-WAHz414lXY_YzovqlVIX-0uTnyZkE238kzALOfxaTXcWXSwmvW0vboPtIbOqaVz8beK2bAxxJVAlEKm7wPXuEYE9U0A-H8px9BFlfRKrN4Ues2d7ZxnpPbP1bqihrY4KcSMI_3BnqoEg"
                        alt="Bottle" />

                    <span class="found-badge">
                        Found
                    </span>

                </div>

                <div class="item-content">

                    <h3>Water Bottle</h3>

                    <p>Location: Main Gym</p>

                    <p>5 hours ago</p>

                </div>

            </div>

        </div>

    </section>

    <!-- INFO SECTION -->

    <section class="info-section">

        <div class="info-box">

            <h2>How It Works</h2>

            <div class="steps">

                <div class="step">

                    <div class="step-number">1</div>

                    <h3>Report Item</h3>

                    <p>Upload lost or found item details.</p>

                </div>

                <div class="step">

                    <div class="step-number">2</div>

                    <h3>Smart Match</h3>

                    <p>System suggests matching items.</p>

                </div>

                <div class="step">

                    <div class="step-number">3</div>

                    <h3>Recover Item</h3>

                    <p>Claim and recover safely.</p>

                </div>

            </div>

        </div>

    </section>

    <!-- FOOTER -->

    <footer class="footer">

        <h3>Smart Lost & Found</h3>

        <p>© 2026 University Services</p>

    </footer>

</body>

</html>