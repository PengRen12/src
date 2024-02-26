<footer class="footer">
    <div class="footer-content">
    <link rel="stylesheet" href="styles.css">
        <a href="#instagram"><img src="image/INS.png" alt="Instagram"></a>
        <nav class="footer-nav">
            <a href="#app">APP</a>
            <a href="#address">ADDRESS</a>
            <a href="#policy">POLICY</a>
            <a href="#careers">CAREERS</a>
            <a href="#terms">TERMS&CONDITIONS</a>
        </nav>
      
        <p class="copyright-text">&copy; <?php echo date("Y"); ?> Panda Fresh Milk & Tea - All Rights Reserved</p>
    </div>

    <style>
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

/* 响应式布局调整 */
@media (max-width: 1024px) {
  .navbar,
  .footer-content {
    flex-direction: column;
  }

  .nav-links {
    padding-top: 10px;
  }

  .beverage-container {
    grid-template-columns: repeat(1fr);
     margin-bottom: 50px;
  }
}

@media (max-width: 768px) {
  .beverage-container {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 768px) {
  .navbar a:hover,
  .footer-nav a:hover {
    background-color: transparent;
    color: #FFD700;
  }
}



    </style>
</footer>
</body>
</html>
