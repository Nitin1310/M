<style>
/* FORCE OVERRIDE STYLES (Internal to bypass cache) */
#vl-header-sticky {
    background-color: #ffffff;
    width: 100%;
    z-index: 9999;
    position: relative;
    box-shadow: 0 4px 20px rgba(0,0,0,0.05);
    padding: 0;
    transition: all 0.3s ease;
}

/* Sticky State */
.header-sticky {
    position: fixed !important;
    top: 0;
    left: 0;
    right: 0;
    background: rgba(255, 255, 255, 0.98) !important;
    backdrop-filter: blur(10px);
    animation: slideDown 0.4s ease forwards;
}

@keyframes slideDown {
    from { transform: translateY(-100%); }
    to { transform: translateY(0); }
}

.edu-header-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 90px; /* Fixed Height */
}

/* Logo */
.edu-logo img {
    height: 55px;
    width: auto;
    display: block;
}

/* Navigation */
.edu-menu {
    display: block;
}

.edu-menu ul {
    display: flex;
    align-items: center;
    gap: 35px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.edu-menu ul li a {
    text-decoration: none;
    font-family: 'Outfit', sans-serif;
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a;
    text-transform: capitalize;
    padding: 30px 0;
    position: relative;
    transition: color 0.3s;
}

/* Hover Green Line */
.edu-menu ul li a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 3px;
    bottom: 25px;
    left: 0;
    background-color: #00A859; /* Green Brand Color */
    transition: width 0.3s;
}

.edu-menu ul li a:hover {
    color: #00A859;
}
.edu-menu ul li a:hover::after {
    width: 100%;
}

/* Hotline Button */
.edu-hotline-area {
    display: flex;
    align-items: center;
    gap: 15px;
    border-left: 1px solid #eee;
    padding-left: 25px;
}

.hotline-icon {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: #FFF4E5; /* Light Orange */
    color: #FF8C00; /* Orange */
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    transition: 0.3s;
}

.edu-hotline-area:hover .hotline-icon {
    background: #FF8C00;
    color: #fff;
    transform: rotate(360deg);
}

.hotline-info {
    display: flex;
    flex-direction: column;
    line-height: 1.2;
}

.hotline-info span {
    font-size: 11px;
    font-weight: 700;
    color: #888;
    text-transform: uppercase;
}

.hotline-info a {
    font-size: 16px;
    font-weight: 800;
    color: #1a1a1a;
    text-decoration: none;
}

.hotline-info a:hover {
    color: #FF8C00;
}

/* Mobile Toggle */
.mobile-toggle {
    display: none;
    font-size: 24px;
    background: none;
    border: none;
    cursor: pointer;
}

/* RESPONSIVE */
@media (max-width: 991px) {
    .edu-menu, .edu-hotline-area {
        display: none;
    }
    .mobile-toggle {
        display: block;
    }
    .edu-header-row {
        height: 70px;
        padding: 0 15px;
    }
}
</style>

<header id="vl-header-sticky">
  <div class="container">
    <div class="edu-header-row">

      <div class="edu-logo">
        <a href="index.php">
          <img src="assets/img/logo/1000252725-removebg-preview.png" alt="Logo">
        </a>
      </div>

      <nav class="edu-menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Graduation Courses</a></li>
          <li><a href="#">PG Courses</a></li>
          <li><a href="#">Exams</a></li>
          <li><a href="#">Study Abroad</a></li>
          <li><a href="blog.php">Blogs</a></li>
          <li><a href="about.php">About Us</a></li>
        </ul>
      </nav>

      <div class="edu-action-box d-flex align-items-center">
        
        <div class="edu-hotline-area">
          <div class="hotline-icon">
            <i class="fa-solid fa-phone-volume"></i>
          </div>
          <div class="hotline-info">
            <span>Talk to Expert</span>
            <a href="tel:+919028319393">+91 9028 319 393</a>
          </div>
        </div>

        <button class="mobile-toggle">
          <i class="fas fa-bars"></i>
        </button>

      </div>

    </div>
  </div>
</header>
