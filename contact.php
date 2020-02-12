<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
    </head>
    <body>
            <h1>My Website</h1>

            <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <!-- Navbar content -->
            <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="contact.php">Contact</a>
            </li>
            </ul>
            </nav>
       
            <h2>Booking Form</h2>
            <form>
            <div class="form-row">
                <div class="col">
                <label>First Name</label>
                <input type="text" class="form-control">
                </div>
                <div class="col">
                <label>Surname</label>
                <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Line Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Line Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                <label for="inputState">County</label>
                <select id="inputState" class="form-control">
                    <option selected>Select County...</option>
                        <option value="antrim">Antrim</option>
                        <option value="armagh">Armagh</option>
                        <option value="carlow">Carlow</option>
                        <option value="cavan">Cavan</option>
                        <option value="clare">Clare</option>
                        <option value="cork">Cork</option>
                        <option value="derry">Derry</option>
                        <option value="donegal">Donegal</option>
                        <option value="down">Down</option>
                        <option value="dublin">Dublin</option>
                        <option value="fermanagh">Fermanagh</option>
                        <option value="galway">Galway</option>
                        <option value="kerry">Kerry</option>
                        <option value="kildare">Kildare</option>
                        <option value="kilkenny">Kilkenny</option>
                        <option value="laois">Laois</option>
                        <option value="leitrim">Leitrim</option>
                        <option value="limerick">Limerick</option>
                        <option value="longford">Longford</option>
                        <option value="louth">Louth</option>
                        <option value="mayo">Mayo</option>
                        <option value="meath">Meath</option>
                        <option value="monaghan">Monaghan</option>
                        <option value="offaly">Offaly</option>
                        <option value="roscommon">Roscommon</option>
                        <option value="sligo">Sligo</option>
                        <option value="tipperary">Tipperary</option>
                        <option value="tyrone">Tyrone</option>
                        <option value="waterford">Waterford</option>
                        <option value="westmeath">Westmeath</option>
                        <option value="wexford">Wexford</option>
                        <option value="wicklow">Wicklow</option>
                </select>
                </div>
                <div class="form-group col-md-2">
                <label for="inputZip">Eir Code</label>
                <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
       
       
       
       
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>