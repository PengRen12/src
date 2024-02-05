<?php

echo <<<CSS
body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
}

/* Header Styles */
.navbar {
  background-color: #f4976c;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 10px;
  overflow: hidden;
}

.nav-links {
  font-size: 36px;
  color: #fbeec1;
}

.nav-links a {
  text-decoration: none;
  color: #fbeec1;
  margin: 0 10px;
  padding: 5px 10px;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.connect-button {
  background-color: #FFDAB9;
  padding: 10px 15px;
  transition: background-color 0.3s;
}

.connect-button:hover {
  background-color: #FFC085;
}

@media (max-width: 1024px) {
  .navbar,
  .footer-content {
    flex-direction: column;
  }

  .nav-links {
    padding-top: 10px;
  }
}

@media (max-width: 768px) {
  .navbar a:hover,
  .footer-nav a:hover {
    background-color: transparent;
    color: #FFD700;
  }
}

/* Footer Styles */
.footer {
  background-color: #f4976c;
  padding-top: 20px;
  color: white;
  text-align: center;
  clear: both;
  margin-top: 0px;
  overflow: auto;
}

.footer-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.footer-nav,
.social-links {
  margin-bottom: 10px;
}

.footer-nav a,
.social-links a {
  color: white;
  text-decoration: none;
  margin: 0 10px;
  padding: 5px 10px;
  font-size: 16px;
  transition: color 0.3s;
}

.social-links img {
  width: 24px;
  margin: 0 10px;
}
CSS;

?>
