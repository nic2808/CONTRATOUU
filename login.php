<?php 
$pageTitle = "Login";
include 'includes/header.php'; 
?>

<section class="auth-section">
    <div class="container">
        <div class="auth-wrapper">
            <div class="auth-card">
                <div class="auth-header">
                    <h2><i class="fas fa-sign-in-alt"></i> Entrar</h2>
                    <p>Acesse sua conta CONTRATOU</p>
                </div>
                
                <form class="auth-form" method="POST" action="#">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" required>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="lembrar">
                            <span class="checkmark"></span>
                            Lembrar-me
                        </label>
                        <a href="#" class="forgot-password">Esqueci minha senha</a>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-full">
                        <i class="fas fa-sign-in-alt"></i> Entrar
                    </button>
                    
                    <div class="divider">
                        <span>ou</span>
                    </div>
                    
                    <div class="social-login">
                        <button type="button" class="btn btn-social btn-google">
                            <i class="fab fa-google"></i> Entrar com Google
                        </button>
                        <button type="button" class="btn btn-social btn-facebook">
                            <i class="fab fa-facebook-f"></i> Entrar com Facebook
                        </button>
                    </div>
                    
                    <div class="auth-footer">
                        <p>Não possui uma conta? <a href="cadastro.php">Cadastre-se gratuitamente</a></p>
                    </div>
                </form>
            </div>
            
            <div class="auth-benefits">
                <h3>Bem-vindo de volta!</h3>
                <p>Continue aproveitando todos os benefícios da CONTRATOU</p>
                
                <div class="quick-stats">
                    <div class="stat-item">
                        <div class="stat-number">10k+</div>
                        <div class="stat-label">Prestadores</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50k+</div>
                        <div class="stat-label">Clientes</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100k+</div>
                        <div class="stat-label">Serviços</div>
                    </div>
                </div>
                
                <div class="auth-image">
                    <img src="https://placeholder-image-service.onrender.com/image/400x300?prompt=Professional dashboard interface showing service provider metrics and customer reviews with modern clean design&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Interface profissional do painel mostrando métricas de prestadores de serviço e avaliações de clientes">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>