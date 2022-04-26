<div id="container">
<div id="sidebar">
    <ul class="sidebar-nav">
        <li>
            <a href="#">Pengguna</a>
        </li>
        <li>
            <a href="#">Distributor</a>
        </li>
        <li>
            <a href="#">Jenis</a>
        </li>
        <li>
            <a href="#">Peminjaman</a>
        </li>
        <li>
            <a href="#">Terkini</a>
        </li>
        <li>
            <a href="#">Logout</a>
        </li>
    </ul>
</div>
<div id="page-content-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Halo Dunia</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                <a href="#menu" class="btn btn-default" id="menu">Menu</a>
            </div>
        </div>
    </div>
</div>
</div>
    
<style>
#container {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#container.toggled {
    padding-left: 250px;
}

#sidebar {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #2c3e50;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#container.toggled #sidebar {
    width: 250px;
}

#page-content-container {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#container.toggled #page-content-container {
    position: absolute;
    margin-right: -250px;
}

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #d35400;
    font-weight: bold;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    background: #d35400;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}
.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
    font-weight: bold;
}

@media(min-width:768px) {
    #container {
        padding-left: 250px;
    }

    #container.toggled {
        padding-left: 0;
    }

    #sidebar {
        width: 250px;
    }

    #container.toggled #sidebar {
        width: 0;
    }

    #page-content-container {
        padding: 20px;
        position: relative;
    }

    #container.toggled #page-content-container {
        position: relative;
        margin-right: 0;
    }
}
    </style>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#menu").click(function(e) {
          e.preventDefault();
        $("#container").toggleClass("toggled");
        });
    });
</script>