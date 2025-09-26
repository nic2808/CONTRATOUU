    </main>
    
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3><i class="fas fa-handshake"></i> CONTRATOU</h3>
                    <p>Conectando clientes e prestadores de serviços de forma simples e segura.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Links Úteis</h4>
                    <ul>
                        <li><a href="index.php">Início</a></li>
                        <li><a href="servicos.php">Serviços</a></li>
                        <li><a href="sobre.php">Sobre Nós</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Fale conosco</h4>
                    <p><i class="fas fa-envelope"></i> contato@contratou.com</p>
                    <p><i class="fas fa-phone"></i> (69) 98485-2323</p>
                    <p><i class="fas fa-map-marker-alt"></i> Guajará-Mirim, RO</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 CONTRATOU. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Menu mobile toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
        });
        
        // Fechar menu ao clicar em um link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelector('.nav-menu').classList.remove('active');
            });
        });
    </script>
</body>
</html>