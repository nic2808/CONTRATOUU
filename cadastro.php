<?php 
$pageTitle = "Cadastro";
include 'includes/header.php'; 
?>

<section class="auth-section">
    <div class="container">
        <div class="auth-wrapper">
            <div class="auth-card">
                <div class="auth-header">
                    <h2><i class="fas fa-user-plus"></i> Criar Conta</h2>
                    <p>Junte-se à CONTRATOU e encontre os melhores serviços</p>
                </div>
                
                <form class="auth-form" method="POST" action="#">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="telefone" name="telefone" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirmar_senha">Confirmar Senha</label>
                        <input type="password" id="confirmar_senha" name="confirmar_senha" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="tipo_usuario">Tipo de Usuário</label>
                        <select id="tipo_usuario" name="tipo_usuario" required>
                            <option value="">Selecione...</option>
                            <option value="cliente">Cliente (Busco serviços)</option>
                            <option value="prestador">Prestador (Ofereço serviços)</option>
                        </select>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="termos" required>
                            <span class="checkmark"></span>
                            Aceito os <a href="#">Termos de Uso</a> e <a href="#">Política de Privacidade</a>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-full">
                        <i class="fas fa-user-plus"></i> Criar Conta
                    </button>
                    
                    <div class="auth-footer">
                        <p>Já possui uma conta? <a href="login.php">Faça login</a></p>
                    </div>
                </form>
            </div>
            
            <div class="auth-benefits">
                <h3>Por que se cadastrar?</h3>
                <ul class="benefits-list">
                    <li><i class="fas fa-check"></i> Acesso a milhares de prestadores verificados</li>
                    <li><i class="fas fa-check"></i> Avaliações e comentários reais</li>
                    <li><i class="fas fa-check"></i> Suporte especializado</li>
                    <li><i class="fas fa-check"></i> Pagamentos seguros</li>
                    <li><i class="fas fa-check"></i> Garantia de qualidade</li>
                </ul>
                
                <div class="auth-image">
                    <img src="https://placeholder-image-service.onrender.com/image/400x300?prompt=Happy customers and service providers shaking hands after successful service completion, professional and trustworthy atmosphere&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Clientes satisfeitos cumprimentando prestadores de serviços após conclusão bem-sucedida do trabalho">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
