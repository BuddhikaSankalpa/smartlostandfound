<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Report Item</title>

    <link rel="stylesheet" href="assets/css/upload-item.css">

</head>

<body>

    <!-- NAVBAR -->

    <header class="navbar">

        <div class="nav-container">

            <h2 class="logo">
                Smart Lost & Found
            </h2>

            <nav class="nav-links">

                <a href="dashboard.php">Home</a>

                <a href="search.php">Search</a>

                <a href="login.php">Login</a>

            </nav>

        </div>

    </header>

    <!-- FORM SECTION -->

    <section class="upload-section">

        <div class="upload-container">

            <h1>
                Report Lost / Found Item
            </h1>

            <p>
                Fill the details below to report your item.
            </p>

            <form>

                <!-- ITEM NAME -->

                <div class="form-group">

                    <label>
                        Item Name
                    </label>

                    <input type="text"
                        placeholder="Enter item name">

                </div>


                <div class="form-group">

                    <label>
                        Category
                    </label>

                    <select>

                        <option>
                            Select Category
                        </option>

                        <option>
                            Laptop
                        </option>

                        <option>
                            Bag
                        </option>

                        <option>
                            ID Card
                        </option>

                        <option>
                            Calculator
                        </option>

                    </select>

                </div>

                <!-- LOCATION -->

                <div class="form-group">

                    <label>
                        Location
                    </label>

                    <input type="text"
                        placeholder="Enter location">

                </div>

                <!-- DATE -->

                <div class="form-group">

                    <label>
                        Date
                    </label>

                    <input type="date">

                </div>

                <!-- DESCRIPTION -->

                <div class="form-group">

                    <label>
                        Description
                    </label>

                    <textarea
                        placeholder="Describe the item"></textarea>

                </div>

                <!-- ITEM STATUS -->

                <div class="form-group">

                    <label>
                        Item Type
                    </label>

                    <select>

                        <option>
                            Lost
                        </option>

                        <option>
                            Found
                        </option>

                    </select>

                </div>

                <!-- IMAGE -->

                <div class="form-group">

                    <label>
                        Upload Image
                    </label>

                    <input type="file">

                </div>

                <!-- BUTTON -->

                <button type="submit" class="submit-btn">

                    Submit Report

                </button>

            </form>

        </div>

    </section>

</body>

</html>